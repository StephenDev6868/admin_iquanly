@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Chỉnh sửa user </h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-3">Thông tin user</h4>
                        {{--                        <p class="text-muted m-b-30 font-14">Parsley is a javascript form validation--}}
                        {{--                            library. It helps you provide your users with feedback on their form--}}
                        {{--                            submission before sending it to your server.</p>--}}

                        <form class="row" action="{{ route('admin.users.update', $user->getKey()) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12 form-group">
                                <label>Login ID</label>
                                <input type="text" class="form-control" name="login_id" value="{{ $user->login_id }}" required placeholder="Type something"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Họ</label>
                                <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tên</label>
                                <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Ngày sinh</label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" name="birthday" class="form-control" value="{{ $user->birthday }}" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div><!-- input-group -->
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Loại user</label>
                                <select name="role" id="" class="form-control">
                                    <option value="1" {{ $user->role === 1 ? 'selected' : ''}}>Admin</option>
                                    <option value="2" {{ $user->role === 2 ? 'selected' : ''}}">Công tác viên</option>
                                    <option value="3" {{ $user->role === 3 ? 'selected' : ''}}">Người đăng bài</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Quyền đặc biệt</label>
                                <select name="is_privilege" id="" class="form-control">
                                    <option value="1" selected="{{ $user->is_privilege == true }}">Cho phép</option>
                                    <option value="0" selected="{{ $user->is_privilege == false }}">Không cho phép</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group m-b-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
@endsection

@section('script')
    <!-- Parsley js -->
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

    <!-- Plugins Init js -->
    <script src="{{ URL::asset('assets/pages/form-advanced.js')}}"></script>
@endsection

@section('script-bottom')
    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
@endsection
