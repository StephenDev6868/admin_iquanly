@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Thêm sản phẩm </h4>
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

                        <h4 class="mt-0 header-title mb-3">Nhập thông tin sản phẩm</h4>
{{--                        <p class="text-muted m-b-30 font-14">Parsley is a javascript form validation--}}
{{--                            library. It helps you provide your users with feedback on their form--}}
{{--                            submission before sending it to your server.</p>--}}

                        <form class="row" action="#">
                            <div class="col-md-12 form-group">
                                <label>Tiêu đề</label>
                                <input type="text" name="title" class="form-control" required placeholder="Type something"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Mật khẩu</label>
                                <input type="password" id="pass2" class="form-control" required
                                       placeholder="Password"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Xác Nhận Mật khẩu</label>
                                <input type="password" class="form-control" required
                                       data-parsley-equalto="#pass2"
                                       placeholder="Re-Type Password"/>
                            </div>
                        </form>
                        <div class="form-group m-b-0">
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
