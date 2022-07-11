<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
            'role'
        ]);

        $users = User::query()
            ->select(['*'])
            ->latest();

        if (!empty($params['key_word'])) {
            $users = $users->where(function ($query) use ($params) {
                $query->where('first_name', 'like', '%' . $params['key_word'] . '%');
                $query->orWhere('last_name', 'like', '%' . $params['key_word'] . '%');
                $query->orWhere('email', 'like', '%' . $params['key_word'] . '%');
            });
        }

        if (!empty($params['role'])) {
            $users = $users->where('role', $params['role']);
        }

        $users = $users->paginate(10);

        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add');
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
            'first_name'       => 'required|min:1|max:255',
            'last_name'        => 'required|min:1|max:255',
            'email'            => 'required|email',
            'birthday'         => 'required|date_format:m/d/Y',
            'role'             => 'required|numeric',
            'is_privilege'     => 'required',
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
                ->with('success', 'Tạo user thành công');;
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
        return view('admin.users.edit', compact('user'));
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
     * @param User $user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(User $user ,Request $request)
    {
        $inputs = $request->all();
        $validator = Validator::make($inputs, [
            'login_id'         => 'required|min:8|max:255|unique:users,login_id,' . $user->getKey(),
            'first_name'       => 'required|min:1|max:255',
            'last_name'        => 'required|min:1|max:255',
            'email'            => 'required|email',
            'birthday'         => 'required|date_format:m/d/Y',
            'role'             => 'required|numeric',
            'is_privilege'     => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }
        $result = $user->update($inputs);

        return Redirect::route('admin.users.list')
            ->with('success', 'Cập nhập thông tin user thành công');
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
