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
                    <h4 class="page-title">Chỉnh sửa sơ đồ </h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin sơ đồ</h4>
                        <form class="row" action="{{ route('admin.cut_configs.update', ['configCutDiagram' => $configCutDiagram->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6 form-group">
                                <label>Tên sơ đồ</label>
                                <input type="text" name="name" value="{{ $configCutDiagram->name ?? old('name') }}" class="form-control" required placeholder="Nhập tên sơ đồ"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mã sơ đồ</label>
                                <input type="text" name="code" value="{{ $configCutDiagram->code ?? old('code') }}" class="form-control" required placeholder="Nhập mã sơ đồ"/>
                            </div>
                            <div class="col-md-12 form-group jumbotron" style="padding: 1rem 1rem;">
                                <div class="top-detail d-flex justify-content-between mb-2">
                                    <h5>Nhập chi tiết sơ đồ </h5>
                                    {{--                                    <button type="button" class="btn btn-primary add-config-cut" style="height: 50px; width: 50px;"><i class="fas fa-plus"></i></button>--}}
                                </div>
                                <div class="detail-order">
                                    <table class="table table-light table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th class="d-none">STT</th>
                                            <th style="white-space: nowrap">Chọn sản phẩm theo đơn hàng</th>
                                            <th >Nhập số lượng <code>(sản phẩm/lớp)</code></th>
                                            <th>Nhập tổng số lớp</th>
                                            <th>Nhập chiều dài sơ đồ</th>
                                            {{--                                            <th></th>--}}
                                        </tr>
                                        </thead>
                                        <tbody class="area-order-detail">
                                        <tr id="1-detail-order-input" class="detail-order-input">
                                            <th class="stt d-none">
                                                1
                                            </th>
                                            <th style="width: 30%;">
                                                <select class="js-example-basic-multiple" id="order_select_1"  name="order_product">
                                                    @foreach($orders as $key => $order)
                                                        <optgroup label="{{ $order['name']  }}">
                                                            @foreach($order['detail_product'] as $item)
                                                                <option {{ ($order['id'] . '_' . $item['id']) == ($configCutDiagram->order_id . '_' . $configCutDiagram->product_id ) ? 'selected' : '' }} value="{{ $order['id'] . '_' . $item['id'] }}">{{ '(' . $order['name'] . ')' . ' - ' .  $item['name'] . ' - ' .  $item['part_number']}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>
                                            </th>
                                            <th>
                                                <input type="text" name="quantity" value="{{$configCutDiagram->quantity ?? old('quantity') }}" class="form-control" required placeholder="Nhập số lượng"/>
                                            </th>
                                            <th>
                                                <input type="text" name="layer" value="{{$configCutDiagram->layer ??  old('layer') }}" class="form-control" required placeholder="Nhập số lớp"/>
                                            </th>
                                            <th>
                                                <input type="text" name="long" value="{{$configCutDiagram->long ?? old('long') }}" class="form-control" required placeholder="Nhập chiều dài"/>
                                            </th>
                                            {{--                                            <th>--}}
                                            {{--                                                <button type="button" id="btn-remove-1" data-index="1" onClick="return removeItem(this)" class="btn btn-danger remove-item"><i class="fas fa-trash"></i></button>--}}
                                            {{--                                            </th>--}}
                                        </tr>
                                        </tbody>
                                    </table>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
        function removeItem(e) {
            let id = '#' + e['id'];
            $(id).parent().parent().remove();
        }


        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('form').parsley();

            $('.add-config-cut').click(function (e) {
                const currentEle = $('.detail-order-input').eq(0);
                const number = +currentEle.find('.stt').text().match(/\d+/g).join("")
                const nextNumber = number + 1;
                const newtEle = currentEle.clone();
                newtEle.find('.stt').text(nextNumber)
                // remove-item btn-remove-1
                newtEle.find('.remove-item').attr('data-index' , nextNumber);
                newtEle.find('.remove-item').attr('id', 'btn-remove-' + nextNumber);
                newtEle.clone().prependTo('.area-order-detail');
            });

            $('#order_select_1').on('change', function (e) {


            });
        });
    </script>
@endsection
