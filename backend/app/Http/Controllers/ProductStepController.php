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
    public function index(Request $request)
    {
        $key_word = $request->get('key_word');
        $product_id = $request->get('product_id');

        $products = Product::all();
        $query = ProductStep::query();

        if (!empty($key_word)) {
            $query->where(function ($query) use ($key_word) {
                $query->where('name', 'like', '%' . $key_word . '%');
            });
        }

        if (!empty($product_id)) {
            $query->where('product_id', $product_id);
        }

        $productSteps = $query->paginate(10);
        return view('admin.product-steps.list', compact('productSteps', 'products'));
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
            // 'user_ids' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = ProductStep::query()->create($inputs);
        $userIds = $inputs['user_ids'] ?? [];
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
        if (count($dataWorkQuantity) > 0) {
            WorkQuantity::query()->insert($dataWorkQuantity);
        }

        if ($result) {
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

    /**
     * Display the specified resource.
     *
     * @param  ProductStep  $productStep
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function showGenerateWorkQuantity(ProductStep $productStep)
    {
        $products = Product::all();
        $users = User::query()->where('board_id', '=', 2)->get();
        return view('admin.product-steps.add-work-quantity', compact('productStep', 'products', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  ProductStep  $productStep
     * @return string
     */
    public function doGenerateWorkQuantity(Request $request, ProductStep $productStep)
    {
        $inputs = $request->all();
        //dd($inputs);
        $inputs['date_work'] =  Carbon::parse($inputs['date_work'])->format('Y-m-d');
        $dataWorkQuantity = [];
        $userIds = $inputs['user_ids'];
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

        if ($result2) {
            return Redirect::route('admin.productSteps.showQuantity', ['date_work' => $inputs['date_work'],'user_ids' => $inputs['user_ids']])
                ->with('success', 'Tạo dữ liệu sản lượng thành công');
        }
    }

    public function showQuantity(Request $request)
    {
        $input = $request->query();
        $product_id = $input['product_id'] ?? null;
        $date_work = $input['date_work'] ?? null;
        $step = $input['productStep'] ?? null;
        $products = Product::all();
        $productSteps = ProductStep::all();
        $users = User::query()->where('board_id', '=', 2)->get();
        $query = WorkQuantity::query()
            ->join('product_steps', 'product_steps.id', '=', 'work_quantities.product_step_id')
            ->join('products', 'products.id', '=', 'product_steps.product_id')
            ->join('users', 'users.id', '=', 'work_quantities.user_id')
            ->select([
                'products.id as productId',
                'products.name as productName',
                'products.code as productCode',
                'product_steps.id as productStepId',
                'product_steps.name as productStepName',
                'product_steps.coefficient as coefficient',
                'product_steps.unit_price as unitPrice',
                'users.id as userId',
                'users.full_name as userFullName',
                'work_quantities.id as workQuantityId',
                'work_quantities.quantity as quantity',
                'work_quantities.date_work as date_work',
            ]);
        if ($product_id) {
            $query->where('work_quantities.product_id', $product_id);
        }

        if ($step) {
            $query->where('work_quantities.product_step_id', $input['productStep']);
        }

        if ($date_work) {
            $date_work = \Illuminate\Support\Carbon::parse($date_work)->format('Y-m-d');
            $query->where('work_quantities.date_work', '=',  $date_work);
        }

        if (isset($input['user_ids']) && count($input['user_ids']) > 0) {
            $query->whereIn('work_quantities.user_id', $input['user_ids']);
        }
        $isShowPagination = !(isset($input['user_ids']) && count($input['user_ids']));
        $data = (isset($input['user_ids']) && count($input['user_ids'])) ? $query->get() : $query->paginate(10);
        return view('admin.product-steps.quantity', compact('data', 'step', 'users', 'products', 'productSteps', 'isShowPagination'));
    }

    public function updateQuantity(Request $request)
    {
        $inputs = $request->all();
        foreach ($inputs as $key => $input) {
            if ($key !== '_token') {
                WorkQuantity::query()->where('id', (int) $key)->update(['quantity' => $input]);
            }
        }

        return Redirect::back()
            ->withInput()
            ->with('success', 'Cập nhập dữ liệu thành công');
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
            //'user_ids' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = $productStep->update($inputs);

        if ($result) {
            return Redirect::route('admin.productSteps.list')
                ->with('success', 'Tạo công đoạn sản phẩm thành công');;
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
