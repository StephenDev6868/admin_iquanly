@extends('layouts.master-staff')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12" style="margin-top: 100px;">
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center" style="font-size: 20px; padding: 40px 0;">
                                        <a class="text-primary" href="{{ route('user.info') }}">Xem thông tin cá nhân</a>
                                    </li>
                                    <li class="list-group-item text-center" style="font-size: 20px; padding: 40px 0;">
                                        <a href="{{ route('user.salary') }}" class="text-primary" href="">Xem thông tin lương</a>
                                    </li>
                                    <li class="list-group-item text-center" style="font-size: 20px; padding: 40px 0;">
                                        <a class="text-primary" href="">Đổi mật khẩu</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div> <!-- container-fluid -->
@endsection
