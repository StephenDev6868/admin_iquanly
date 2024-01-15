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
                    <h4 class="page-title">Cập nhập đối tác </h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin đối tác </h4>
                        <form class="row" action="{{ route('admin.partners.update', ['partner' => $partner->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6 form-group">
                                <label>Tên đối tác  </label>
                                <input type="text" name="name" value="{{ $partner->name ?? old('name') }}" class="form-control" required placeholder="Nhập tên đối tác  "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mã đối tác  </label>
                                <input type="text" name="code" value="{{ $partner->code ?? old('code') }}" class="form-control" required placeholder="Nhập mã đối tác  "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mã số thuế  </label>
                                <input type="text" name="tax" value="{{ $partner->tax ?? old('tax') }}" class="form-control" required placeholder="Nhập mã số thuế  "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email  </label>
                                <input type="text" name="email" value="{{ $partner->email ?? old('email') }}" class="form-control" required placeholder="exapmle@gmail.com"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số điện thoại  </label>
                                <input type="text" name="phone_number" value="{{ $partner->phone_number ?? old('phone_number') }}" class="form-control" required placeholder="Nhập số điện thoại"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Địa chỉ </label>
                                <input type="text" name="address" value="{{ $partner->address ?? old('address') }}" class="form-control" required placeholder="Nhập địa chỉ"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Postcode  </label>
                                <input type="text" name="postcode" value="{{ $partner->postcode ?? old('postcode') }}" class="form-control" required placeholder="Nhập postcode : 0000-000-000"/>
                            </div>
{{--                            <div class="col-md-6 form-group">--}}
{{--                                <label>Quốc gia </label>--}}
{{--                                <input type="text" name="nation" value="{{ $partner->nation ?? old('nation') }}" class="form-control" required placeholder="Nhập quốc gia  "/>--}}
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

                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-3">Danh sách các bán thành phẩm được chuyển giao</h4>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Thuộc đơn hàng</th>
                                <th>Tên thành phẩm</th>
                                <th>Mã thành phẩm</th>
                                <th>Số lượng</th>
                                <th>Ngày nhập kho</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $key => $data)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ optional($data)->order->name }}</td>
                                    <td>{{ optional($data)->product->name }}</td>
                                    <td>{{ optional($data)->product->part_number }}</td>
                                    <td>{{ optional($data)->input }}</td>
                                    <td>{{ \Illuminate\Support\Carbon::parse(optional($data)->created_at)->timezone(7)->format('h:i:s m-d-Y') }}</td>
                                    <td class="d-flex">
                                        {{--                                    <a href="{{ route('admin.wSemiProduct.show', ['semiProduct' => $data->getKey()])  }}" class="btn btn-success mr-2">--}}
                                        {{--                                        <i class="fas fa-arrow-circle-right"></i>--}}
                                        {{--                                    </a>--}}
                                        {{--                                        <form method="post" action="{{ route('admin.wTools.delete', $data->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            @method('DELETE')--}}
                                        {{--                                            <button type="submit" class="btn btn-danger waves-effect waves-light">--}}
                                        {{--                                                <i class="fas fa-trash"></i>--}}
                                        {{--                                            </button>--}}
                                        {{--                                        </form>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
