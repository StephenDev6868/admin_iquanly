<?php

namespace App\Http\Controllers;

use App\Enums\Screen;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $datas = Role::query()->paginate(10);
        $screens = Screen::LIST;
        $permissions = Permission::all();
        return view('admin.roles.list', compact('datas', 'screens', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $screens = Screen::LIST;
        $permissions = Permission::all();
        return view('admin.roles.add', compact('screens', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input_permissions = $request->except(['name', '_method', '_token']);
        $data = [];
        foreach ($input_permissions as $key => $input_permission) {
            $tmp = explode('_', $key);
            $data[$tmp[0]][] = $tmp[count($tmp) - 1];
        }
        $result = Role::query()->create([
            'name' => $request->input('name'),
            'permissions' => $data,
        ]);

        if ($result) {
            return Redirect::route('admin.roles.list')
                ->with('success', 'Tạo chức danh mới thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Role $role)
    {
        $screens = Screen::LIST;
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'screens', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Role $role)
    {
        $input_permissions = $request->except(['name', '_method', '_token']);
        $data = [];
        foreach ($input_permissions as $key => $input_permission) {
            $tmp = explode('_', $key);
            $data[$tmp[0]][] = $tmp[count($tmp) - 1];
        }
        $result = Role::query()->where('id', $role->getKey())
            ->update([
            'name' => $request->input('name'),
            'permissions' => $data,
        ]);

        if ($result) {
            return Redirect::route('admin.roles.list')
                ->with('success', 'Cập nhập chức danh mới thành công');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Role $role)
    {
        $result = $role->delete();
        if ($result) {
            return Redirect::route('admin.roles.list')
                ->with('success', 'Xoá chức danh thành công');
        }
    }
}
