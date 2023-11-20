<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Supplier;
use App\Models\User;
use App\Models\WMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $materials = Material::all();
        $suppliers = Supplier::all();
        $inputs = $request->input();
        $query = WMaterial::query();
        if (isset($inputs['supplier_id']) && $inputs['supplier_id']) {
            $query->where('supplier_id', $inputs['supplier_id']);
        }
        if (isset($inputs['material_id']) && $inputs['material_id']) {
            $query->where('material_id', $inputs['material_id']);
        }
        if (isset($inputs['date_added']) && $inputs['date_added']) {
            $query->where('date_added', Carbon::parse($inputs['date_added'])->format('Y-m-d'));
        }
        $datas = $query->paginate(10);
        return view('admin.wmaterial.list', compact('datas', 'materials', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $users = User::query()->where('board_id', '=', 2)->get();
        $materials = Material::all();
        $suppliers = Supplier::all();
        return view('admin.wmaterial.add', compact('users', 'suppliers', 'materials'));
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
        $validator =  Validator::make($inputs, [
            'material_id' => 'required|exists:materials,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity_input' => 'required',
            'date_added' => 'required',
        ]);
        $inputs['date_added'] = Carbon::parse($inputs['date_added'])->format('Y-m-d');
        $inputs['quantity_contain'] = $inputs['quantity_input'] - ($inputs['quantity_use'] ?? 0);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = WMaterial::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.wMaterials.list')
                ->with('success', 'Thêm nguyên liệu thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WMaterial  $wMaterial
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(WMaterial $wMaterial)
    {
        $wMaterial->date_added = Carbon::parse($wMaterial->date_added)->format('d-m-Y');
        $materials = Material::all();
        $suppliers = Supplier::all();
        //dd($materials, $suppliers, $wMaterial);
        return view('admin.wmaterial.edit', compact('wMaterial', 'materials', 'suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WMaterial  $wMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(WMaterial $wMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WMaterial  $wMaterial
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, WMaterial $wMaterial)
    {
        $inputs = $request->all();
        $validator =  Validator::make($inputs, [
            'material_id' => 'required|exists:materials,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity_input' => 'required|numeric',
            'quantity_use' => 'required|numeric',
            'date_added' => 'required',
        ]);
        $inputs['date_added'] = Carbon::parse($inputs['date_added'])->format('Y-m-d');
        $inputs['quantity_contain'] = ($inputs['quantity_input'] ?? 0) - ($inputs['quantity_use'] ?? 0);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = $wMaterial->update($inputs);

        if ($result) {
            return Redirect::route('admin.wMaterials.list')
                ->with('success', 'Cập nhập nguyên liệu thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WMaterial  $wMaterial
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(WMaterial $wMaterial)
    {
        $result = $wMaterial->delete();

        if ($result) {
            return Redirect::route('admin.wMaterials.list')
                ->with('success', 'Xoá nguyên liệu thành công');;
        }
    }
}
