<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Material;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::query()->paginate(10);
        return view('admin.products.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product_id = $request->query('product_id');
        $product = Product::query()->find($product_id);
        $sizes = [
            '3XL',
            '2XL',
            'XL',
            'L',
            'M',
            'S',
        ];
        $materials = Material::all();
        return view('admin.products.add', compact('sizes', 'materials', 'product'));
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
            'name' => 'Required|max:255',
            'code' => 'Required|max:255',
            'size' => 'Required|max:255',
            'part_number' => 'Required|max:255',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        // $inputs['start_at'] = Carbon::parse($inputs['start_at'])->format('Y-m-d');
        // $inputs['end_at'] = Carbon::parse($inputs['end_at'])->format('Y-m-d');
        $ids = $inputs['material']['id'];
        $i = 0;
        $newItem = [];
        foreach ($ids as $value) {
            $newItem[] = [
                'id' => $value,
                'quota' => $inputs['material']['quota'][$i]
            ];
            $i++;
        }
        $inputs['materials'] = $newItem;
        $inputs['creator_id'] = optional($user)->id;
        $result = Product::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.products.list')
                ->with('success', 'Tạo sản phẩm thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        $sizes = [
            '3XL',
            '2XL',
            'XL',
            'L',
            'M',
            'S',
        ];
        $materials = Material::all();
        return view('admin.products.edit', compact('product', 'sizes', 'materials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $inputs = $request->all();
        $user = Auth::guard('user')->user();
        $validator = Validator::make($inputs, [
            'name' => 'Required|max:255',
            'code' => 'Required|max:255|unique:products,code,' . $product->getKey(),
            'size' => 'Required|max:255',
            'part_number' => 'Required|max:255',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $ids = $inputs['material']['id'];
        $i = 0;
        $newItem = [];
        foreach ($ids as $value) {
            $newItem[] = [
                'id' => $value,
                'quota' => $inputs['material']['quota'][$i]
            ];
            $i++;
        }
        $inputs['materials'] = $newItem;
        $inputs['creator_id'] = optional($user)->id;
        $result = $product->update($inputs);

        if ($result) {
            return Redirect::route('admin.products.list')
                ->with('success', 'Tạo sản phẩm thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return Redirect::route('admin.products.list')
            ->with('success', 'Xóa sản phẩm thành công');
    }
}
