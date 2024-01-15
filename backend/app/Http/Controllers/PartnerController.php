<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerSemiProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $datas = Partner::query()->paginate(10);
        return view('admin.partner.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.partner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        $validator =  Validator::make($inputs, [
            'code' => 'required',
            'name' => 'required',
            'postcode' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = Partner::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.partners.list')
                ->with('success', 'Thêm đối tác thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Partner $partner)
    {
        $datas = PartnerSemiProduct::query()->where('partner_id', $partner->getKey())->get();
        return view('admin.partner.edit', compact('partner', 'datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Partner $partner)
    {
        $inputs = $request->input();
        $validator =  Validator::make($inputs, [
            'code' => 'required',
            'name' => 'required',
            'postcode' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = $partner->update($inputs);

        if ($result) {
            return Redirect::route('admin.partners.list')
                ->with('success', 'Chỉnh sửa đối tác thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Partner $partner)
    {
        $result = $partner->delete();

        if ($result) {
            return Redirect::route('admin.partners.list')
                ->with('success', 'Xoá đối tác thành công');;
        }
    }
}
