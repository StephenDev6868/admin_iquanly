<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $datas = Order::query()->paginate(10);
        return view('admin.orders.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        $sizes = [
            '3XL',
            '2XL',
            'XL',
            'M',
            'S',
        ];
        return view('admin.orders.add', compact('products', 'sizes', 'customers'));
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
        $user = Auth::guard('user')->user();
        $validator = Validator::make($inputs, [
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
         $inputs['start_at'] = Carbon::parse($inputs['start_at'])->format('Y-m-d');
         $inputs['end_at'] = Carbon::parse($inputs['end_at'])->format('Y-m-d');
        $ids = $inputs['orders']['product_id'];
        $i = 0;
        $newItem = [];
        foreach ($ids as $value) {
            $newItem[] = [
                'id' => $value,
                'amount' => $inputs['orders']['amount'][$i]
            ];
            $i++;
        }
        $inputs['detail_product'] = $newItem;
        $inputs['creator_id'] = optional($user)->id;
        $result = Order::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.orders.list')
                ->with('success', 'Tạo sản phẩm thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Order $order)
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('admin.orders.edit', compact('products', 'customers', 'order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Order $order)
    {
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $inputs['start_at'] = Carbon::parse($inputs['start_at'])->format('Y-m-d');
        $inputs['end_at'] = Carbon::parse($inputs['end_at'])->format('Y-m-d');
        $ids = $inputs['orders']['product_id'];
        $i = 0;
        $newItem = [];
        foreach ($ids as $value) {
            $newItem[] = [
                'id' => $value,
                'amount' => $inputs['orders']['amount'][$i]
            ];
            $i++;
        }
        $inputs['detail_product'] = $newItem;
        $result = $order->update($inputs);

        if ($result) {
            return Redirect::route('admin.orders.list')
                ->with('success', 'Tạo sản phẩm thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
