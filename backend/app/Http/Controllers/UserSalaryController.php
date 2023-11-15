<?php

namespace App\Http\Controllers;

use App\Imports\UserSalaryImport;
use App\Exports\UserSalaryExport;
use App\Models\ProductStep;
use App\Models\User;
use App\Models\UserSalary;
use App\Models\WorkQuantity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class UserSalaryController extends Controller
{
    public function export(Request $request)
    {
        $month = $request->input('month_salary');
        $user_ids = $request->input('user_ids');
        $users = User::query()->whereIn('board_id', [2,3,4])->get();
        $query = UserSalary::query();
        if (is_array($user_ids) && count($user_ids) > 0) {
            $query->whereIn('user_id', $user_ids);
        }
        if ($month) {
            $month= implode('-', array_reverse(explode('-', $month)));
            $now = Carbon::parse($month)->format('Y-m-d');
            $query->whereDate('start_at', '<=', $now);
            $query->whereDate('end_at', '>=', $now);
        }
        $datas = $query->paginate(20);
        return view('admin.salary.list', compact('datas', 'users'));
    }

    public function uploadView()
    {
        return view('admin.salary.upload');
    }

    public function exportTemplate()
    {
        return Excel::download(new UserSalaryExport(2022, [2,3,4]), 'users.xlsx');
    }

    public function import(Request $request)
    {
        $start_at = $request->input('start_at');
        $end_at = $request->input('end_at');
        $result = Excel::import(new UserSalaryImport($start_at, $end_at), $request->file('upload_salary'));
        if ($result) {
            return Redirect::route('admin.export.salary')
                ->with('success', 'Upload lương thành công');
        }
    }


    public function salaryProduct(Request $request)
    {
        $month = $request->input('month_salary');
        $user_ids = $request->input('user_ids');
        $step_products = $request->input('steps');
        $users = User::query()->whereIn('board_id', [2,3,4])->get();
        $steps = ProductStep::all();
        $query = WorkQuantity::query()
            ->join('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->join('users', 'users.id', '=', 'work_quantities.user_id')
            ->select([
                'users.id as user_id',
                'users.full_name as userFullName',
                'product_steps.id as productStepId',
                'product_steps.name as productStepName',
                'product_steps.unit_price as unitPrice',
                'product_steps.coefficient as coefficient',
                'work_quantities.quantity as quantity',
                'work_quantities.date_work as dateWork',
            ]);
        if (is_array($user_ids) && count($user_ids) > 0) {
            $query->whereIn('work_quantities.user_id', $user_ids);
        }

        if (is_array($step_products) && count($step_products) > 0) {
            $query->whereIn('work_quantities.product_step_id', $step_products);
        }


        if ($month) {
            $month= implode('-', array_reverse(explode('-', $month)));
            $start = Carbon::parse($month)->firstOfMonth()->format('Y-m-d');
            $end = Carbon::parse($month)->endOfMonth()->format('Y-m-d');
            $query->whereDate('date_work', '>=', $start);
            $query->whereDate('date_work', '<=', $end);
        }

        // else {
        //     $start = Carbon::now()->firstOfMonth()->format('Y-m-d');
        //     $end = Carbon::now()->endOfMonth()->format('Y-m-d');
        //     $query->whereDate('date_work', '>=', $start);
        //     $query->whereDate('date_work', '<=', $end);
        // }
        $datas =  $query->orderBy('users.full_name')->get()->toArray();
        $salaries = [];
        $type = is_array($step_products) && count($step_products) > 0 ? '2' : '1';
        foreach ($datas as $key => $data) {
            if (is_array($step_products) && count($step_products) > 0) {
                if (!isset($salaries[$data['productStepId']])) {
                    $salaries[$data['productStepId']] = [
                        'sumSalaryProduct' =>  $data['unitPrice'] * $data['quantity'] * $data['coefficient'],
                        'sumQuantityProduct' =>  $data['quantity'],
                        'step_name' => $data['productStepName'],
                        'dateWorkNow' => Carbon::parse($data['dateWork'])->format('m/Y')
                    ];
                    $salaries[$data['productStepId']]['productStepInfo'][] = [
                        'userFullName' => $data['userFullName'],
                        'quantity' => $data['quantity'],
                        'dateWork' => $data['dateWork'],
                        'coefficient' => $data['coefficient'],
                        'unitPrice' => $data['unitPrice'],
                    ];
                } else {
                    $salaries[$data['productStepId']]['productStepInfo'][] = [
                        'userFullName' => $data['userFullName'],
                        'quantity' => $data['quantity'],
                        'dateWork' => $data['dateWork'],
                        'coefficient' => $data['coefficient'],
                        'unitPrice' => $data['unitPrice'],
                    ];
                    $salaries[$data['productStepId']]['sumSalaryProduct'] +=  ($data['unitPrice'] * $data['quantity'] * $data['coefficient']);
                    $salaries[$data['productStepId']]['sumQuantityProduct'] +=  $data['quantity'];
                }
            } else {
                if (!isset($salaries[$data['user_id']])) {
                    $salaries[$data['user_id']] = [
                        'sumSalaryProduct' =>  $data['unitPrice'] * $data['quantity'] * $data['coefficient'],
                        'userFullName' => $data['userFullName'],
                        'dateWorkNow' => Carbon::parse($data['dateWork'])->format('m/Y')
                    ];
                    $salaries[$data['user_id']]['productStepInfo'][] = [
                        'step_name' => $data['productStepName'],
                        'quantity' => $data['quantity'],
                        'dateWork' => $data['dateWork'],
                        'coefficient' => $data['coefficient'],
                        'unitPrice' => $data['unitPrice'],
                    ];
                } else {
                    $salaries[$data['user_id']]['productStepInfo'][] = [
                        'step_name' => $data['productStepName'],
                        'quantity' => $data['quantity'],
                        'dateWork' => $data['dateWork'],
                        'coefficient' => $data['coefficient'],
                        'unitPrice' => $data['unitPrice'],
                    ];
                    $salaries[$data['user_id']]['sumSalaryProduct'] +=  ($data['unitPrice'] * $data['quantity'] * $data['coefficient']);
                }
            }
        }
        return view('admin.salary.list-salary-product', compact('salaries', 'users', 'steps', 'type'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSalary  $userSalary
     * @return \Illuminate\Http\Response
     */
    public function show(UserSalary $userSalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSalary  $userSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSalary $userSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserSalary  $userSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSalary $userSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSalary  $userSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSalary $userSalary)
    {
        //
    }
}
