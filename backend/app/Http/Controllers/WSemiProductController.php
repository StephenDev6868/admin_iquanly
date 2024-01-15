<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerSemiProduct;
use App\Models\SemiProduct;
use App\Models\WSemiProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WSemiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = SemiProduct::all();
        return view('admin.wsem-product.list', compact('datas'));
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
     * @param  \App\Models\WSemiProduct  $wSemiProduct
     * @return \Illuminate\Http\Response
     */
    public function show(SemiProduct $semiProduct)
    {
        $partners = Partner::all();
        $data = PartnerSemiProduct::query()->where('semi_product_id', $semiProduct->getKey())->first();
        return view('admin.wsem-product.edit', compact('semiProduct', 'partners', 'data'));
    }

    public function assign(SemiProduct $semiProduct, Request $request)
    {
        $data = $request->all();
        $data['day_input'] = Carbon::now();
        $data['product_id'] = $semiProduct->product_id;
        $query = PartnerSemiProduct::query();
        if (PartnerSemiProduct::query()->where('semi_product_id', $semiProduct->getKey())->exists()) {
            $query->update([
                'partner_id' => $data['partner_id'],
                'input' => $data['input'],
            ]);
        } else {
            $query->create($data);
        }
        return Redirect::route('admin.wSemiProduct.doAssign', ['semiProduct' => $semiProduct->getKey()])
            ->with('success', 'Cập nhập thành công');

        //$partners = Partner::all();
        //return view('admin.wsem-product.edit', compact('semiProduct', 'partners'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WSemiProduct  $wSemiProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(WSemiProduct $wSemiProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WSemiProduct  $wSemiProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WSemiProduct $wSemiProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WSemiProduct  $wSemiProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(WSemiProduct $wSemiProduct)
    {
        //
    }
}
