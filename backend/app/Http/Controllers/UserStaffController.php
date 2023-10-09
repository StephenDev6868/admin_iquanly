<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Company;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->only([
            'key_word',
            'roles'
        ]);

        $users = User::query()
            ->select(['*'])
            ->latest();

        if (!empty($params['key_word'])) {
            $users = $users->where(function ($query) use ($params) {
                $query->where('full_name', 'like', '%' . $params['key_word'] . '%');
                $query->orWhere('phone_number', 'like', '%' . $params['key_word'] . '%');
                $query->orWhere('cccd', 'like', '%' . $params['key_word'] . '%');
                $query->orWhere('email', 'like', '%' . $params['key_word'] . '%');
            });
        }

//        if (!empty($params['roles'])) {
//            $users = $users->where('roles', $params['roles']);
//        }
        $users = $users->paginate(10);
        //  dd($users);
        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $companies = Company::all();
        $boards = Board::all();
        return view('admin.users.add', compact('roles', 'companies', 'boards'));
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
            'login_id'         => 'required|min:8|max:255|unique:users,login_id',
            'password'         => 'required|min:8|max:255',
            'password_confirm' => 'required|min:8|max:255|same:password',
            'full_name'        => 'required|min:1|max:255',
            'email'            => 'required|email|unique:users,email',
            'birthday'         => 'required|date_format:m/d/Y',
            'begin_work'       => 'required|date_format:m/d/Y',
            'role_id'          => 'required|numeric',
            'board_id'         => 'required',
            'company_id'       => 'required',
            'phone_number'     => 'required|unique:users,phone_number',
            'cccd'             => 'required|unique:users,cccd',
        ]);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $inputs['password'] = Hash::make($inputs['password']);

        $result = User::query()->create($inputs);

        if ($result) {
            return Redirect::route('admin.users.list')
                ->with('success', 'Tạo nhân viên thành công');;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::all();
        $companies = Company::all();
        $boards = Board::all();
        return view('admin.users.edit', compact('user', 'roles', 'companies', 'boards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'login_id'         => 'required|min:8|max:255|unique:users,login_id,' . $user->getKey(),
            'full_name'        => 'required|min:1|max:255',
            'email'            => 'required|email',
            'birthday'         => 'required',
            'begin_work'       => 'required',
            'role_id'          => 'required|numeric',
            'board_id'         => 'required',
            'company_id'       => 'required',
            'phone_number'     => 'required|unique:users,phone_number,' . $user->getKey(),
            'cccd'             => 'required|unique:users,cccd,' . $user->getKey(),
        ]);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $inputs['begin_work'] = Carbon::parse($inputs['begin_work'])->format('Y-m-d');
        $result = $user->update($inputs);
        if ($result) {
            return Redirect::route('admin.users.list')
                ->with('success', 'Cập nhập thông tin nhân viên thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $result = $user->delete();

        if ($result) {
            return Redirect::back()
                ->with('success', 'Xoá user thành công');
        }
    }
}
