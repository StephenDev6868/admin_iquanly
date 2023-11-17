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
                    <h4 class="page-title">Chỉnh sửa nguyên vật liệu </h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin nguyên vật liệu </h4>
                        <form class="row" action="{{ route('admin.wMaterials.update', ['wMaterial' => $wMaterial->getKey() ]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6 form-group">
                                <label>Nhà cung cấp </label>
                                <select name="supplier_id" id="" class="form-control">
                                    @foreach($suppliers as $key => $data)
                                        <option value="{{ $data->getKey() }}" {{ $data->getKey() == $wMaterial->supplier_id ? 'selected' : '' }}>{{ $data->name . ' - ' . $data->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Tên và mã nguyên vật liệu </label>
                                <select name="material_id" id="" class="form-control">
                                    @foreach($materials as $key => $data)
                                        <option value="{{ $data->getKey() }}" {{ $data->getKey() == $wMaterial->material_id ? 'selected' : '' }}>{{ $data->name . ' - ' . $data->code . ' (' . $data->unit . ') ' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số lượng nhập </label>
                                <input type="text" name="quantity_input" value="{{ $wMaterial->quantity_input ??  old('quantity_input') }}" class="form-control" required placeholder="Nhập Số lượng  "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số lượng tồn </label>
                                <input type="text" name="quantity_contain" disabled value="{{ $wMaterial->quantity_contain ?? old('quantity_contain') }}" class="form-control"  placeholder="Nhập Số lượng tồn "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số lượng sử dụng </label>
                                <input type="text" name="quantity_use" value="{{ $wMaterial->quantity_use ?? old('quantity_use') }}" class="form-control" placeholder="Nhập Số lượng sử dụng  "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Ngày nhập kho </label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" value="{{ $wMaterial->date_added ?? old('date_added') }}" data-date-format="dd-mm-yyyy" name="date_added" class="form-control" placeholder="dd-mm-yyyy" id="datepicker-autoclose">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="col-md-6 form-group">--}}
                            {{--                                <label>Ngày mua</label>--}}
                            {{--                                <div>--}}
                            {{--                                    <div class="input-group">--}}
                            {{--                                        <input type="text" value="{{ old('date_buy') }}" data-date-format="dd-mm-yyyy" name="date_buy" class="form-control" placeholder="dd-mm-yyyy" id="datepicker-autoclose">--}}
                            {{--                                        <div class="input-group-append">--}}
                            {{--                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-6 form-group">--}}
                            {{--                                <label>Ngày hết hạn bảo hành</label>--}}
                            {{--                                <div>--}}
                            {{--                                    <div class="input-group">--}}
                            {{--                                        <input type="text" value="{{ old('date_warranty') }}" data-date-format="dd-mm-yyyy" name="date_warranty" class="form-control" placeholder="dd-mm-yyyy" id="datepicker">--}}
                            {{--                                        <div class="input-group-append">--}}
                            {{--                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div><!-- input-group -->--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-12 form-group">--}}
                            {{--                                <label>Trạng thái</label>--}}
                            {{--                                <select name="status" id="" class="form-control">--}}
                            {{--                                    <option value="1">Bình Thường</option>--}}
                            {{--                                    <option value="2">Hỏng</option>--}}
                            {{--                                    <option value="3">Đang sửa</option>--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-md-12 form-group">--}}
                            {{--                                <label>Người giữ nguyên vật liệu: </label>--}}
                            {{--                                <select class="js-example-basic-multiple" name="in_charge_user[]" multiple="multiple">--}}
                            {{--                                    @foreach($users as $key => $user)--}}
                            {{--                                        <option value="{{ $user->getKey() }}">{{ $user->full_name }}</option>--}}
                            {{--                                    @endforeach--}}
                            {{--                                </select>--}}
                            {{--                            </div>--}}
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
            $('.js-example-basic-multiple').select2();
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
