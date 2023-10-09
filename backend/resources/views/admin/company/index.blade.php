@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Cấu hình thông tin công ty</h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin chuyên mục</h4>
                        <form class="row" action="{{ route('admin.companies.update', ['company' => $company->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12 form-group">
                                <label>Tên công ty</label>
                                <input type="text" name="name" value="{{ $company->name ?? old('name') }}" class="form-control" required placeholder="Nhập tên công ty"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Mã số thế</label>
                                <input type="text" name="tax_id" value="{{ $company->tax_id ?? old('tax_id') }}" class="form-control" required placeholder="Nhập mã số thuế"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ $company->email ?? old('email') }}" class="form-control" required placeholder="Nhập email"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="phone_number" value="{{ $company->phone_number ?? old('phone_number') }}" class="form-control" required placeholder="Nhập số điện thoại"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Website</label>
                                <input type="text" name="website" value="{{ $company->website ?? old('website') }}" class="form-control" required placeholder="Nhập tên website"/>
                            </div> <div class="col-md-12 form-group">
                                <label>Người đại diện</label>
                                <input type="text" name="agent" value="{{ $company->agent ?? old('agent') }}" class="form-control" required placeholder="Nhập tên công ty"/>
                            </div>
                            <div class="col-md-12 form-group m-b-0 text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Lưu
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

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

    <!--Wysiwig js-->
    <script src="{{ URL::asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
@endsection
