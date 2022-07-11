@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Thêm user </h4>
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
                <div class="card-header">
                    <h4 class="mt-0 header-title mb-3">Nhập thông tin user</h4>
                </div>
                <form class="card m-b-20" action="{{ route('admin.users.doCreate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body row">
                        <div class="col-md-12 form-group">
                            <label>Login ID</label>
                            <input type="text" name="login_id" value="{{ old('login_id') }}" class="form-control" required placeholder="Nhập login ID"/>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" value="{{ old('password') }}" id="pass2" class="form-control" required
                                   placeholder="Nhập mật khẩu"/>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Xác Nhận Mật khẩu</label>
                            <input type="password" name="password_confirm" value="{{ old('password_confirm') }}"  class="form-control" required
                                   data-parsley-equalto="#pass2"
                                   placeholder="Xác nhận lại mật khẩu"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Họ</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" required placeholder="Nhập họ"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tên</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" required placeholder="Nhập tên"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" required placeholder="Nhập email"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Ngày sinh</label>
                            <div>
                                <div class="input-group">
                                    <input type="text" value="{{ old('birthday') }}" name="birthday" class="form-control" placeholder="mm-dd-yyyy" id="datepicker-autoclose">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div><!-- input-group -->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Loại user</label>
                            <select name="role"  id="" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Công tác viên</option>
                                <option value="3">Bán hàng</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Quyền đặc biệt</label>
                            <select name="is_privilege" id="" class="form-control">
                                <option value="1">Cho phép</option>
                                <option value="0">Không cho phép</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group m-b-0 text-right">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
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
