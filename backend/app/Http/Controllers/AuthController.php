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
    public function loginStaff()
    {
        return view('auth.login-staff');
    }


    /**
     */
    public function doLoginStaff(Request $request)
    {
        $inputs = $request->only([
            'login_id',
            'password'
        ]);

        $validator = Validator::make($inputs, [
            'login_id' => 'required|min:6|max:255|exists:users,login_id',
            'password' => 'required|min:6|max:255',
        ],[
            'login_id.exists' => 'Nhập sai login_id xin vui lòng nhập lại',
            'password.min'    => 'Mật khẩu phải lỡn hơn 6 ký tự',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withInput()
                ->with('error', $validator->errors()->first());
        }

        $result = Auth::guard('user')->attempt($inputs);
        $user = Auth::guard('user')->user();

        if ($user && $user['status_work'] !== 1) {
            return Redirect::route('login.view')
                ->with('error', 'Tài khoản này đang tạm ngưng hoạt động');
        }


        if ($result) {
            return Redirect::route('user.home')
                ->with('success', 'Đăng nhập thành công, XIN KÍNH CHÀO ' . $user['full_name'] . ' !');
        }

        return Redirect::route('login.view')
            ->with('error', 'login ID or password incorrect');
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
            'login_id' => 'required|min:6|max:255|exists:users,login_id',
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
