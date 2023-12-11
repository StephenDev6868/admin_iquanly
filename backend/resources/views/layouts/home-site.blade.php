@extends('layouts.master-without-nav')

@section('content')
    <!-- Begin page -->
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0">
                    <a href="index" class="logo logo-admin" style="font-size: 20px;">iquanly.com</a>
                </h3>
                <div class="p-3">
                    @include('layouts.flash-message')
                    <div class="row">
                        <a href="{{route('login.view')}}" class="col-lg-12">
                            <button type="button" class="btn btn-outline-primary waves-effect waves-light" style="width: 100%; height: 70px; font-size: 20px">ADMIN</button>
                        </a>
                        <a href="{{route('loginStaff')}}" class="col-lg-12">
                            <button type="button" class="btn btn-outline-info waves-effect waves-light mt-2" style="width: 100%; height: 70px; font-size: 20px">NHÂN VIÊN</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{--        <div class="m-t-40 text-center">--}}
        {{--            <p>Don't have an account ? <a href="pages-register" class="font-14 text-primary"> Signup Now </a> </p>--}}
        {{--            <p>© {{date('Y')}} Lexa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>--}}
        {{--        </div>--}}

    </div>

@endsection
