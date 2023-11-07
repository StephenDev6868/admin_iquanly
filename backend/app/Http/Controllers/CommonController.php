<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CommonController extends Controller
{
    public function showAllConfig()
    {
        $materials = Material::query()->paginate(10);
        //$suppliers = Supplier::query()->paginate(10);
        return view('admin.common.list', compact('materials'));
    }

    public function createSupplier()
    {
        return view('admin.common.add-supplier');
    }

    public function doCreateSupplier(Request $request)
    {
        $inputs = $request->all();
        $validator =  Validator::make($inputs, [
            'code' => 'required',
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $result = Supplier::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.commons.list')
                ->with('success', 'Thêm nhà cung cấp thành công');;
        }

    }

    public function createMaterial()
    {
        return view('admin.common.add-material');
    }

    public function doCreateMaterial(Request $request)
    {
        $inputs = $request->all();
        $validator =  Validator::make($inputs, [
            'code' => 'required',
            'name' => 'required',
            'unit' => 'required',
            'num_quota' => 'required',
            'unit_quota_1' => 'required',
            'unit_quota_2' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $inputs['unit_quota'] = $inputs['unit_quota_1'] . '/' . $inputs['unit_quota_2'];
        $result = Material::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.commons.list')
                ->with('success', 'Thêm nguyên liệu thành công');;
        }
    }

    public function doUpdateMaterial(Request $request)
    {
        $inputs = $request->except(['_method', '_token']);
        $result = false;
        foreach ($inputs as $key => $input) {
            $result = Material::query()->where('id', $key)->update(
                [
                    'name' => $input[0] ?? '',
                    'code' => $input[1] ?? '',
                    'unit' => $input[2] ?? '',
                    'num_quota' => $input[3] ?? '',
                    'unit_quota' => ($input[4] ?? '') . '/' . ($input[5] ?? ''),
                ]
            );
        }

        if ($result) {
            return Redirect::route('admin.commons.list')
                ->with('success', 'Cập nhập nguyên liệu thành công');
        }

        return Redirect::route('admin.commons.list')
            ->with('error', 'Cập nhập nguyên liệu thất bại');

    }

    public function doUpdateSupplier(Request $request)
    {
        $inputs = $request->except(['_method', '_token']);
        $result = false;
        foreach ($inputs as $key => $input) {
            $result = Supplier::query()->where('id', $key)->update(
                [
                    'name' => $input[0] ?? '',
                    'code' => $input[1] ?? '',
                ]
            );
        }

        if ($result) {
            return Redirect::route('admin.commons.list')
                ->with('success', 'Cập nhập nhà cung cấp thành công');
        }

        return Redirect::route('admin.commons.list')
            ->with('error', 'Cập nhập nhà cung cấp thất bại');
    }
}
