@extends('layouts.master')
@section('css')
    <!-- Plugins css -->
    <link href="{{ URL::asset('assets/css/select2.min.css')}}" rel="stylesheet" />
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
                    <h4 class="page-title">Sửa công đoạn </h4>
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
                        <h4 class="mt-0 header-title mb-3">Thông tin công đoạn</h4>
                        <form class="row" action="{{ route('admin.productSteps.update', ['productStep' => $productStep->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12 form-group step-box-area">
                                <div class="row jumbotron step-box-item" style="padding: 10px 0 !important;">
                                    <div class="col-md-3 form-group">
                                        <div class="m-t-20">
                                            <h4 class="text-muted">Nhập tên công đoạn:</h4>
                                            <textarea id="textarea" name="name" class="form-control" maxlength="225" rows="6" placeholder="Nhập tên công đoạn">{{ $productStep->name }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="col-md-12 form-group">
                                            <label>Chọn sản phẩm: </label>
                                            <select name="product_id" id="" class="form-control">
                                                @foreach($products as $key => $product)
                                                    <option {{ $product->getKey() === $productStep->product->id ? 'selected' :'' }} value="{{ $product->getKey() }}">{{ $product->name . ' - ' . $product->code }}</option>
                                                @endforeach
                                            </select>
                                        </div>

{{--                                        <div class="col-md-12 form-group">--}}
{{--                                            <label>Thời gian: </label>--}}
{{--                                            <div class="input-group">--}}
{{--                                                <input type="text" value="{{ old('date_work') }}" data-date-format="dd-mm-yyyy" name="date_work" class="form-control" placeholder="mm-dd-yyyy" id="datepicker-autoclose">--}}
{{--                                                <div class="input-group-append">--}}
{{--                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>--}}
{{--                                                </div>--}}
{{--                                            </div><!-- input-group -->--}}
{{--                                        </div>--}}
                                        <div class="col-md-12 form-group">
                                            <label>Hệ số: </label>
                                            <input type="text" name="coefficient" value="{{ $productStep->coefficient ?? old('coefficient') }}" class="form-control" required placeholder="Nhập hệ số"/>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>Đơn giá: </label>
                                            <input type="text" name="unit_price" value="{{ $productStep->unit_price ?? old('unit_price') }}" class="form-control" required placeholder="Nhập đơn giá"/>
                                        </div>
{{--                                        <div class="col-md-12 form-group">--}}
{{--                                            <label>Chọn công nhân:</label>--}}
{{--                                            <select class="js-example-basic-multiple" name="user_ids[]" multiple="multiple">--}}
{{--                                                @foreach($users as $key => $user)--}}
{{--                                                    <option value="{{ $user->getKey() }}">{{ $user->full_name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
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
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
    <!-- Parsley js -->
    <script src="{{ URL::asset('assets/js/select2.min.js')}}"></script>
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
            var userIds = {!! json_encode($productStep->user_ids) !!};
            $('.js-example-basic-multiple').select2();
            $('.js-example-basic-multiple').val(userIds);
            $('.js-example-basic-multiple').trigger('change');
            $('form').parsley();

            $('.btn-add-step').on('click', function (e) {
                $('.step-box-item').clone().appendTo('.step-box-area')
            })

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
