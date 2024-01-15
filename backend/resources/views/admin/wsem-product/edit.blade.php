@extends('layouts.master')
@section('css')
    <!-- Plugins css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/common/common.css')}}" rel="stylesheet">
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
                    <h4 class="page-title">Chỉnh sửa bán thành phẩm </h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin bán thành phẩm</h4>
                        <form class="row" action="{{ route('admin.wSemiProduct.doAssign', ['semiProduct' => $semiProduct->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <input type="hidden" name="semi_product_id" value="{{$semiProduct->id ?? old('id') }}" class="form-control"/>
                            <input type="hidden" name="order_id" value="{{$semiProduct->order->id ?? old('id') }}" class="form-control"/>
                            <div class="col-md-6 form-group">
                                <label>Tên bán thành phẩm</label>
                                <input type="text" name="name" value="{{ $semiProduct->product->name ?? old('name') }}" class="form-control" readonly required placeholder="Nhập tên bán thành phẩm"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mã bán thành phẩm</label>
                                <input type="text" name="code" value="{{$semiProduct->product->code ?? old('code') }}" class="form-control" readonly required placeholder="Nhập mã bán thành phẩm"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Thuộc đơn hàng</label>
                                <input type="text" name="order_name" value="{{$semiProduct->order->name ?? old('code') }}" class="form-control" readonly required placeholder="Nhập mã bán thành phẩm"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số lượng bán thành phẩm</label>
                                <input type="text" name="amount" value="{{$semiProduct->amount ?? old('code') }}" class="form-control" readonly required placeholder="Nhập mã bán thành phẩm"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Chọn đối tác chuyển giao</label>
                                <select name="partner_id" id="" class="form-control">
                                    @foreach($partners as $partner)
                                        <option value="{{ $partner->getKey()  }}" {{ optional($data)->partner_id ==  $partner->getKey() ? 'selected' : ''  }}> {{ $partner->name  }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số lượng sản phẩm chuyển giao</label>
                                <input type="text" name="input" value="{{ $data->input ?? $semiProduct->amount }}" class="form-control" required placeholder="Nhập số lượng bán thành phẩm"/>
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

@section('script-bottom')
    <script>
        $(document).ready(function() {
            var userIds = {!! $semiProduct->in_charge_user !!};
            $('.js-example-basic-multiple').select2();
            $('.js-example-basic-multiple').val(userIds);
            $('.js-example-basic-multiple').trigger('change');
            $('form').parsley();

            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 500,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>
@endsection
