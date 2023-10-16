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
                    <h4 class="page-title">Quản lý sản lượng theo công đoạn</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{ route('admin.productSteps.showQuantity')  }}" class="row" method="GET">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tìm kiếm công đoạn</h4>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Tên và mã sản phẩm</label>
                            <select name="product_id" id="" class="form-control col-sm-12">
                                <option value="">Tất cả</option>
                                @foreach($products as $key => $product)
                                    <option {{ request()->query('product_id') == $product->getKey() ? 'selected' : '' }} value="{{ $product->getKey() }}">{{ $product->name . ' - ' . $product->code }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Tên Công đoạn</label>
                            <select name="productStep" id="" class="form-control col-sm-12">
                                <option value="">Tất cả</option>
                                @foreach($productSteps as $key => $productStep)
                                    <option {{ request()->query('productStep') == $productStep->getKey() ? 'selected' : '' }} value="{{ $productStep->getKey() }}">{{ $productStep->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Ngày làm việc</label>
                            <div class="input-group">
                                <input type="text" value="{{ request()->query('date_work') ?? old('date_work') }}" data-date-format="dd-mm-yyyy" name="date_work" class="form-control" placeholder="mm-dd-yyyy" id="datepicker-autoclose">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div><!-- input-group -->
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên Nhân viên</label>
                            <select class="js-example-basic-multiple col-sm-10" name="user_ids[]" multiple="multiple">
                                @foreach($users as $key => $user)
                                    <option value="{{ $user->getKey() }}">{{ $user->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row m-b-0 text-right">
                            <div class="col-md-12">
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
        </form>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
{{--                <div class="table-add">--}}
{{--                    <a href="{{ route('admin.productSteps.create')  }}" class="btn btn-info mb-4">Danh sách sản lượng theo công đoạn</a>--}}
{{--                </div>--}}
                <div class="card m-b-20">
                    <div class="card-body">
                        @if($isShowPagination)
                            <div class="table-title d-flex justify-content-between">
                                <h4 class="mt-0 header-title">Danh sách sản lượng theo công đoạn</h4>
                                {{ $data->appends(['productStep' => $step])->links() }}
                            </div>
                        @endif
                        <form action="{{ route('admin.productSteps.updateQuantity')  }}" class="row" method="POST">
                            @csrf
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th style="white-space: nowrap;">STT</th>
                                    <th style="white-space: nowrap;">Tên sản phẩm</th>
                                    <th style="white-space: nowrap;">Mã sản phẩm</th>
                                    <th style="white-space: nowrap;">Tên công đoạn</th>
                                    <th style="white-space: nowrap;">Tên công nhân</th>
                                    <th style="white-space: nowrap;">Đơn giá</th>
                                    <th style="white-space: nowrap;">Hệ số</th>
                                    <th style="white-space: nowrap;">Sản lượng</th>
                                    <th style="white-space: nowrap;">Ngày làm việc</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->productName }}</td>
                                        <td>{{ $item->productCode }}</td>
                                        <td>{{ $item->productStepName }}</td>
                                        <td>{{ $item->userFullName }}</td>
                                        <td>{{ $item->unitPrice }}</td>
                                        <td>{{ $item->coefficient }}</td>
                                        <td>
                                            <input type="number" value="{{ $item->quantity }}" name="{{$item->workQuantityId}}">
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input type="text" value="{{ \Illuminate\Support\Carbon::parse($item->date_work)->format('d-m-Y') ??  old('date_work') }}" data-date-format="dd-mm-yyyy" name="date_work" disabled class="form-control" placeholder="dd-mm-yyyy" id="datepicker">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-md-12 form-group mt-3 m-b-0 text-right">
                                <div>
                                    <a href="{{route('admin.productSteps.list')}}" class="btn btn-info waffect waves-light">Back</a>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Cập nhập số liệu
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Huỷ
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
            var userIds = {!! json_encode(request()->query('user_ids')) !!};
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
