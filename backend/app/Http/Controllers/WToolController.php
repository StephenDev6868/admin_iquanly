<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $datas = WTool::query()->paginate(10);
        return view('admin.wtool.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::query()->where('board_id', '=', 2)->get();
        return view('admin.wtool.add', compact('users'));
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
        $result = WTool::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.wTools.list')
                ->with('success', 'Thêm dụng cụ thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WTool  $wTool
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(WTool $wTool)
    {
        $users = User::query()->where('board_id', '=', 2)->get();
        return view('admin.wtool.edit', compact('wTool', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WTool  $wTool
     * @return \Illuminate\Http\Response
     */
    public function edit(WTool $wTool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WTool  $wTool
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, WTool $wTool)
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
        $result = $wTool->update($inputs);

        if ($result) {
            return Redirect::route('admin.wTools.list')
                ->with('success', 'Cập nhập dụng cụ thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WTool  $wTool
     * @return \Illuminate\Http\Response
     */
    public function destroy(WTool $wTool)
    {
        //
    }
}
