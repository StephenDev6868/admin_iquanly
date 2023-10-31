<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WDevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $datas = WDevice::query()->paginate(10);
        return view('admin.wdevice.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::query()->where('board_id', '=', 2)->get();
        return view('admin.wdevice.add', compact('users'));
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
        $inputs['in_charge_user'] = count($inputs['in_charge_user']) > 0 ? $inputs['in_charge_user'][0] : 1;
        $validator =  Validator::make($inputs, [
            'code' => 'required',
            'name' => 'required',
            'date_warranty' => 'required',
            'date_buy' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = WDevice::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.wDevices.list')
                ->with('success', 'Thêm thiết bị thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WDevice  $wDevice
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(WDevice $wDevice)
    {
        $users = User::query()->where('board_id', '=', 2)->get();
        return view('admin.wdevice.edit', compact('wDevice', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WDevice  $wDevice
     * @return \Illuminate\Http\Response
     */
    public function edit(WDevice $wDevice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WDevice  $wDevice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, WDevice $wDevice)
    {
        $inputs = $request->all();
        $inputs['in_charge_user'] = count($inputs['in_charge_user']) > 0 ? $inputs['in_charge_user'][0] : 1;
        $validator =  Validator::make($inputs, [
            'code' => 'required',
            'name' => 'required',
            'date_warranty' => 'required',
            'date_buy' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = $wDevice->update($inputs);

        if ($result) {
            return Redirect::route('admin.wDevices.list')
                ->with('success', 'Cập nhập thiết bị thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WDevice  $wDevice
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(WDevice $wDevice)
    {
        $result = $wDevice->delete();

        if ($result) {
            return Redirect::route('admin.wDevices.list')
                ->with('success', 'Xoá thiết bị thành công');;
        }
    }
}
