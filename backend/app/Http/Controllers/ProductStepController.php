<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductStep;
use App\Models\User;
use App\Models\WorkQuantity;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $productSteps = ProductStep::query()->paginate(10);
        return view('admin.product-steps.list', compact('productSteps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $products = Product::all();
        $users = User::query()->where('board_id', '=', 2)->get();
        return view('admin.product-steps.add', compact('products', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'name' => 'required',
            'product_id' => 'required',
            'coefficient' => 'required',
            'unit_price' => 'required',
            'user_ids' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $userIds = $inputs['user_ids'];
        $result = ProductStep::query()->create($inputs);

        $dataWorkQuantity = [];
        foreach ($userIds as $key => $userId) {
            $dataWorkQuantity[] = [
                'user_id'    => $userId,
                'product_id' => $inputs['product_id'],
                'product_step_id' => $result['id'],
                'quantity'   => 0,
                'date_work'  => now()->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        $result2 = WorkQuantity::query()->insert($dataWorkQuantity);

        if ($result && $result2) {
            return Redirect::route('admin.productSteps.list')
                ->with('success', 'Tạo sản phẩm thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  ProductStep  $productStep
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(ProductStep $productStep)
    {
        $products = Product::all();
        $users = User::query()->where('board_id', '=', 2)->get();
        return view('admin.product-steps.edit', compact('productStep', 'products', 'users'));
    }

    public function showQuantity(Request $request)
    {
        $input = $request->query();
        $step = $input['productStep'];
        $productSteps = ProductStep::all();
        $users = User::query()->where('board_id', '=', 2)->get();
        $query = WorkQuantity::query()
            ->join('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->join('products', 'products.id', '=', 'product_steps.product_id')
            ->join('users', 'users.id', '=', 'work_quantities.user_id')
//            ->where('work_quantities.product_step_id', $input['productStep'])
            ->select([
                'products.id as productId',
                'products.name as productName',
                'product_steps.id as productStepId',
                'product_steps.name as productStepName',
                'product_steps.coefficient as coefficient',
                'product_steps.unit_price as unitPrice',
                'users.id as userId',
                'users.full_name as userFullName',
                'work_quantities.quantity as quantity',
                'work_quantities.date_work as date_work',
            ]);
        //->orderBy('work_quantities.date_work', 'desc')->paginate(10);
        if ($input['productStep']) {
            $query->where('work_quantities.product_step_id', $input['productStep']);
        }

        if (isset($input['user_ids']) && count($input['user_ids']) > 0) {
            $query->whereIn('work_quantities.user_id', $input['user_ids']);
        }
        $isShowPagination = !(isset($input['user_ids']) && count($input['user_ids']));
        $data = (isset($input['user_ids']) && count($input['user_ids'])) ? $query->get() : $query->paginate(10);
        return view('admin.product-steps.quantity', compact('data', 'step', 'users', 'productSteps', 'isShowPagination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ProductStep  $productStep
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,ProductStep $productStep)
    {
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'name' => 'required',
            'product_id' => 'required',
            'coefficient' => 'required',
            'unit_price' => 'required',
            'user_ids' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $userIds = $inputs['user_ids'];
        $result = $productStep->update($inputs);
        $inputs['date_work'] =  Carbon::parse($inputs['date_work'])->format('Y-m-d');
        $dataWorkQuantity = [];
        foreach ($userIds as $key => $userId) {
            $isExist = WorkQuantity::query()->where([
                'user_id' => $userId,
                'product_step_id' => $productStep->getKey(),
                'date_work' => $inputs['date_work'] ?? now()->format('Y-m-d')
            ])->exists();
            if (!$isExist) {
                $dataWorkQuantity[] = [
                    'user_id'    => $userId,
                    'product_id' => $inputs['product_id'],
                    'product_step_id' => $productStep->getKey(),
                    'quantity'   => 0,
                    'date_work'  => $inputs['date_work'] ?? now()->format('Y-m-d'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        $result2 = WorkQuantity::query()->insert($dataWorkQuantity);

        if ($result && $result2) {
            return Redirect::route('admin.productSteps.list')
                ->with('success', 'Tạo sản phẩm thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
