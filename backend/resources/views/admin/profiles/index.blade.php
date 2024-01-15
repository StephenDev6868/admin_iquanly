@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Thông tin tài khoản</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        @php
            $user = \Illuminate\Support\Facades\Auth::guard('user')->user();
            $roleUsers = \App\Models\Role::query()->find($user->role_id);
            dd($roleUsers->permissions, $user->id);
        @endphp

        <div class="col-12" style="margin-top: 10px;">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0 text-primary text-bold">Họ và tên: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->full_name  }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0 text-primary text-bold">Email: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->email  }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0 text-primary text-bold">Số điện thoại: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->phone_number }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0 text-primary text-bold">Số Tài khoản ngân hàng: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->bank  }}</p>
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->stk  }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0 text-primary text-bold">Số CCCD/CMND: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->cccd  }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0 text-primary text-bold">Địa chỉ</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->address  }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0 text-primary text-bold">Chức danh : </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $user->title_level  }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-md-12 form-group m-b-0 text-right">--}}
{{--                            <a href="" class="btn btn-primary waves-effect waves-light">--}}
{{--                                Cập nhập thông tin--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div> <!-- container-fluid -->
@endsection
