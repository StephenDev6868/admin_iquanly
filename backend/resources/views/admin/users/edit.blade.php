@extends('layouts.master')
@section('css')
    <!-- Plugins css -->
    <link href="{{ URL::asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css')}}" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Chỉnh sửa thông tin nhân viên </h4>
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
                    <h4 class="mt-0 header-title mb-3">Nhập thông tin nhân viên</h4>
                </div>
                <form class="card m-b-20" action="{{ route('admin.users.doUpdate', ['user' => $user->getKey()]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body row">
                        <div class="col-md-6 form-group">
                            <label>Login ID</label>
                            <input type="text" name="login_id" value="{{ $user->login_id ?? old('login_id') }}" class="form-control" required placeholder="Nhập login ID"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mật khẩu khởi tạo ({{ $user->first_login ? 'Nhân viên đã login' : 'Nhân viên chưa login'  }})</label>
                            <input type="text" name="pass_init" value="{{ $user->pass_init ?? old('pass_init') }}" {{ $user->first_login ? 'disabled' : ''}} id="pass2" class="form-control" required
                                   placeholder="Nhập mật khẩu"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Trạng thái làm việc</label>

                            <select name="status_work" id="" class="form-control">
                                <option value="1" {{ $user->status_work == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $user->status_work == 0 ? 'selected' : '' }}>Unactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Họ và tên</label>
                            <input type="text" name="full_name" value="{{ $user->full_name ?? old('full_name') }}" class="form-control" required placeholder="Nhập họ và tên"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $user->email ?? old('email') }}" class="form-control" placeholder="Nhập email"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số CCCD/CMND</label>
                            <input type="text" name="cccd" value="{{ $user->cccd ?? old('cccd') }}" class="form-control" required placeholder="Nhập cccd/cmnd"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone_number" value="{{  $user->phone_number ?? old('phone_number') }}" class="form-control" required placeholder="Nhập số điện thoại"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mức lương (vnd/h)</label>
                            <input type="text" name="amount_month" value="{{ $user->amount_month ?? old('amount_month') }}" class="form-control" required placeholder="Nhập mức lương"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Chức danh</label>
                            <input type="text" name="title_level" value="{{ $user->title_level ?? old('title_level') }}" class="form-control" required placeholder="Nhập chức danh"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>STK</label>
                            <input type="text" name="stk" value="{{ $user->stk ??  old('stk') }}" class="form-control" required placeholder="Nhập stk"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Tên ngân hành</label>
                            <input type="text" name="bank" value="{{ $user->bank ?? old('bank') }}" class="form-control" required placeholder="Nhập tên ngân hàng"/>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Ngày sinh</label>
                            <div>
                                <div class="input-group">
                                    <input type="text" value="{{  $user->birthday ? $user->birthday->format('d-m-Y') : old('birthday') }}" data-date-format="dd-mm-yyyy" name="birthday" class="form-control" placeholder="dd-mm-yyyy" id="datepicker">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div><!-- input-group -->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Ngày bắt đầu làm việc</label>
                            <div>
                                <div class="input-group">
                                    <input type="text" value="{{ $user->begin_work ? $user->begin_work->format('d-m-Y') : old('begin_work') }}" data-date-format="dd-mm-yyyy" name="begin_work" class="form-control" placeholder="dd-mm-yyyy" id="datepicker-autoclose">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div><!-- input-group -->
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Thuộc công ty</label>
                            <select name="company_id" id="" class="form-control">
                                @foreach($companies as $key => $company)
                                    <option value="{{ $company->getKey() }}" {{ $company->getKey() === $user->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Thuộc phòng ban</label>
                            <select name="board_id" id="" class="form-control">
                                @foreach($boards as $key => $board)
                                    <option value="{{ $board->getKey() }}" {{ $board->getKey() === $user->board_id ? 'selected' : '' }}>{{ $board->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Nhóm phân quyền</label>
                            <select name="role_id" id="" class="form-control">
                                @foreach($roles as $key => $role)
                                    <option value="{{ $role->getKey() }}" {{ $role->getKey() === $user->role_id ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Quyền đặc biệt</label>
                            <select name="is_super_admin" id="" class="form-control">
                                <option value="1" {{ $user->is_super_admin == 1 ? 'selected' : '' }}>Cho phép</option>
                                <option value="0" {{ $user->is_super_admin == 0 ? 'selected' : '' }}>Không cho phép</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group m-b-0 text-right">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Lưu
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Huỷ
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
{{--    <script>--}}
{{--        $(document).ready(function() {--}}
{{--            $('form').parsley();--}}
{{--        });--}}
{{--    </script>--}}
@endsection
