@extends('layouts.master-without-nav')

@section('content')
    <!-- Begin page -->
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0">
                    <a href="index" class="logo logo-admin">Admin Site</a>
                </h3>
                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                    <p class="text-muted text-center">Sign in to continue to AdminSite.</p>
                    @include('layouts.flash-message')
                    <form class="form-horizontal m-t-30" action="{{ route('login.doLogin') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="username">Login ID</label>
                            <input type="text" class="form-control" name="login_id" required id="login_id" placeholder="Nhập login ID">
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="password" required id="password" placeholder="Nhập password">
                        </div>
                        <div class="form-group row m-t-20">
{{--                            <div class="col-6">--}}
{{--                                <div class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customControlInline">--}}
{{--                                    <label class="custom-control-label" for="customControlInline">Remember me</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="offset-8 col-6">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Đăng nhập</button>
                            </div>
                        </div>

{{--                        <div class="form-group m-t-10 mb-0 row">--}}
{{--                            <div class="col-12 m-t-20">--}}
{{--                                <a href="pages-recoverpw" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </form>
                </div>

            </div>
        </div>

{{--        <div class="m-t-40 text-center">--}}
{{--            <p>Don't have an account ? <a href="pages-register" class="font-14 text-primary"> Signup Now </a> </p>--}}
{{--            <p>© {{date('Y')}} Lexa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>--}}
{{--        </div>--}}

    </div>

@endsection
