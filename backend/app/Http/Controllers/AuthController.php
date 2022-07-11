<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
    */
    public function login()
    {
        return view('auth.login');
    }

    /**
     */
    public function doLogin(Request $request)
    {
        $inputs = $request->only([
            'login_id',
            'password'
        ]);

        $validator = Validator::make($inputs, [
            'login_id' => 'required|min:8|max:255|exists:users,login_id',
            'password' => 'required|min:6|max:255',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $result = Auth::guard('user')->attempt($inputs);

        if ($result) {
            return Redirect::route('admin.users.list')
                ->with('success', 'Đăng nhập thành công, hello Admin !');
        }

        return Redirect::route('login.view')
            ->with('error', 'login ID or password incorrect');
    }

    /**
    */
    public function logout()
    {
        Auth::guard('user')->logout();

        return Redirect::route('login.view')
            ->with('success', 'Đã đăng xuất thành công');
    }
}
