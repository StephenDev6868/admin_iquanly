@extends('layouts.master')
@section('css')
    <!-- Plugins css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/common/common.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css')}}" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endsection
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Thêm sơ đồ </h4>
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
                        <form id="form_cut_config" class="row" action="{{ route('admin.cut_configs.doCreate') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="col-md-6 form-group">
                                <label>Tên sơ đồ</label>
                                <input type="text" name="name" value="{{ $product->name ?? old('name') }}" class="form-control" required placeholder="Nhập tên sơ đồ"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mã sơ đồ</label>
                                <input type="text" name="code" value="{{ $product->code ?? old('code') }}" class="form-control" required placeholder="Nhập mã sơ đồ"/>
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
{{--                                            <th style="white-space: nowrap" class="d-flex justify-content-between align-items-center">--}}
{{--                                                <p>Chọn sản phẩm theo đơn hàng</p>--}}
{{--                                                <span class="badge badge-secondary">2000</span>--}}
{{--                                            </th>--}}
                                            <th style="white-space: nowrap">
                                                Chọn sản phẩm theo đơn hàng
                                            </th>
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
                                                <select class="js-example-basic-multiple" id="order_select"  name="order_product">
                                                    @foreach($orders as $key => $order)
                                                        <optgroup label="{{ $order['name']  }}">
                                                            @foreach($order['detail_product'] as $item)
                                                                <option value="{{ $order['id'] . '_' . $item['id'] }}">{{ '(' . $order['name'] . ')' . ' - ' .  $item['name'] . ' - ' .  $item['part_number']}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>
                                            </th>
                                            <th>
                                                <input type="text" name="quantity" value="{{ old('quantity') }}" class="form-control" required placeholder="Nhập số lượng"/>
                                            </th>
                                            <th>
                                                <input type="text" name="layer" value="{{ old('layer') }}" class="form-control" required placeholder="Nhập số lớp"/>
                                            </th>
                                            <th>
                                                <input type="text" name="long" value="{{ old('long') }}" class="form-control" required placeholder="Nhập chiều dài"/>
                                            </th>
{{--                                            <th>--}}
{{--                                                <button type="button" id="btn-remove-1" data-index="1" onClick="return removeItem(this)" class="btn btn-danger remove-item"><i class="fas fa-trash"></i></button>--}}
{{--                                            </th>--}}
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="area-process d-flex justify-content-end" style="height: 45px;">
                                        <button type="button" id="process-and-add-data" class="btn btn-info float-right mt-2">Phân tích và tạo dữ liệu</button>
                                        <img id="icon-process-loading" src="{{URL::asset('assets/images/loading.gif')}}" class="mt-1 d-none" alt="loading">
                                    </div>
                                </div>
                            </div>

                            <div id="table-process" class="col-md-12 form-group jumbotron d-none" style="padding: 1rem 1rem;">
                                <div class="top-detail d-flex justify-content-between mb-2">
                                    <h5>Dữ liệu sau khi phân tích </h5>
                                </div>
                                <div class="detail-order">
                                    <table class="table table-light table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th style="white-space: nowrap">
                                                Tên đơn hàng
                                            </th>
                                            <th>Tổng số lớp</th>
                                            <th>Tổng số sơ đồ</th>
                                            <th>Tổng số KG (vải)</th>
                                            <th>Mã nguyên liệu (vải)</th>
                                        </tr>
                                        </thead>
                                        <tbody class="area-order-detail">
                                        <tr id="1-detail-order-input" class="detail-order-input">
                                            <th>1</th>
                                            <th>
                                                <input type="text" id="name-1" name="name-1" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="layer-1" name="layer-1" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="sd-1" name="sd-1" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="kg-1" name="kg-1" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="material-code-1" name="material-code-1" value="" class="form-control" readonly/>
                                                <input type="text" id="material-1" name="material-1" value="" class="form-control d-none" readonly/>
                                            </th>
                                        </tr>
                                        <tr id="2-detail-order-input" class="detail-order-input">
                                            <th>2</th>
                                            <th>
                                                <input type="text" id="name-2" name="name-2" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="layer-2" name="layer-2" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="sd-2" name="sd-2" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="kg-2" name="kg-2" value="" class="form-control" readonly/>
                                            </th>
                                            <th>
                                                <input type="text" id="material-code-2" name="material-code-2" value="" class="form-control" readonly/>
                                                <input type="text" id="material-2" name="material-2" value="" class="form-control d-none" readonly/>
                                            </th>
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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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

            $('#process-and-add-data').on('click', function (e) {
                $('#icon-process-loading').removeClass('d-none')
                $(this).text('Đang phân tích . . .')
                let data = {
                    order_product : $('#order_select').val(),
                    quantity : $("input[name=quantity]").val(),
                    layer : $("input[name=layer]").val(),
                    long : $("input[name=long]").val(),
                    name : $("input[name=name]").val(),
                    code : $("input[name=code]").val(),
                }
                $.ajax({
                    url: "{{route('admin.cut_configs.process')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}",
                    },
                    data: data,
                    success: function (data) {
                        let data1 = data[0];
                        let data2 = data[1];
                        $('#table-process').removeClass('d-none');
                        $('#process-and-add-data').text('Phân tích và tạo dữ liệu')
                        $('#icon-process-loading').addClass('d-none')
                        $("#name-1").val(data1['name_order'])
                        $("#layer-1").val(data1['totalLayer'])
                        $("#sd-1").val(data1['totalNguyenSd'])
                        $("#kg-1").val(data1['totalKg'])
                        $("#material-1").val(data1['material_id'])
                        $("#material-code-1").val(data1['material_code'])
                        if (data2) {
                            $("#name-2").val(data2['name_order'])
                            $("#layer-2").val(data2['totalLayer'])
                            $("#sd-2").val(data2['totalNguyenSd'])
                            $("#kg-2").val(data2['totalKg'])
                            $("#material-2").val(data2['material_id'])
                            $("#material-code-2").val(data2['material_code'])
                            $("#2-detail-order-input").removeClass('d-none');
                        } else {
                            $("#2-detail-order-input").addClass('d-none');
                        }
                    },
                    error: function (error) {
                        const { responseJSON } = error;
                        if (responseJSON['status'] === 'error') {
                            Toastify({
                                text: responseJSON['msg'],
                                className: "danger",
                                style: {
                                    background: "linear-gradient(to right, red, red)",
                                }
                            }).showToast();
                            $('#table-process').removeClass('d-none');
                            $('#process-and-add-data').text('Phân tích và tạo dữ liệu')
                            $('#icon-process-loading').addClass('d-none')
                        }
                    }
                });
            });
        });
    </script>
@endsection
