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
                    <h4 class="page-title">Chỉnh sửa đơn hàng </h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin đơn hàng </h4>
                        <form class="row" action="{{ route('admin.orders.update', ['order' => $order->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6 form-group">
                                <label>Tên đơn hàng  </label>
                                <input type="text" name="name" value="{{ $order->name ?? old('name') }}" class="form-control" required placeholder="Nhập tên đơn hàng  "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mã khách hàng </label>
                                <select class="form-control" name="code">
                                    @foreach($customers as $key => $customer)
                                        <option {{ $order->code ==  $customer->code ? 'selected' : ''  }} value="{{ $customer->code }}">{{ $customer->code }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 form-group jumbotron" style="padding: 1rem 1rem;">
                                <div class="top-detail d-flex justify-content-between mb-2">
                                    <h5>Nhập chi tiết đơn hàng </h5>
                                    <button type="button" class="btn btn-primary add-order-detail" style="height: 50px; width: 50px;"><i class="fas fa-plus"></i></button>
                                </div>
                                <div class="form-group" style="width: 22%">
                                    <label>Phần trăm hao hụt cho phép:  </label>
                                    <input type="text" name="loss" value="{{ $order->loss ?? old('loss') }}" class="form-control" required placeholder="% "/>
                                </div>
                                <div class="detail-order">
                                    <table class="table table-light table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th class="d-none">STT</th>
                                            <th>Số lượng</th>
                                            <th>Tên và mã sản phẩm (size)</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody class="area-order-detail">
                                        @foreach($order->detail_product as $value)
                                            <tr id="1-detail-order-input" class="detail-order-input">
                                                <th class="stt d-none">
                                                    1
                                                </th>
                                                <th>
                                                    <input type="text" name="orders[amount][]" value="{{$value['amount'] ?? old('amount')  }}" class="form-control" required placeholder="Nhập số lượng ">
                                                </th>
                                                <th>
                                                    <select class="form-control" name="orders[product_id][]">
                                                        @foreach($products as $key => $product)
                                                            <option {{ $value['id'] == $product->getKey() ? 'selected' : ''  }} value="{{ $product->getKey() }}">{{ $product->name . ' - ' . $product->code . ' - (' . $product->size . ')' }}</option>
                                                        @endforeach
                                                    </select>
                                                </th>
                                                <th>
                                                    <button type="button" id="btn-remove-1" data-index="1" onClick="return removeItemOrder(this)" class="btn btn-danger remove-item-order"><i class="fas fa-trash"></i></button>
                                                </th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Ngày bắt đầu</label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" value="{{ $order->start_at ??  old('start_at') }}" data-date-format="dd-mm-yyyy" name="start_at" class="form-control" placeholder="dd-mm-yyyy" id="datepicker-autoclose">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Ngày kết thúc</label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" value="{{ $order->end_at ?? old('end_at') }}" data-date-format="dd-mm-yyyy" name="end_at" class="form-control" placeholder="dd-mm-yyyy" id="datepicker">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div><!-- input-group -->
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
        function removeItemOrder(e) {
            let id = '#' + e['id'];
            $(id).parent().parent().remove();
        }

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


            $('.add-order-detail').click(function (e) {
                const currentEle = $('.detail-order-input').eq(0);
                const number = +currentEle.find('.stt').text().match(/\d+/g).join("")
                const nextNumber = number + 1;
                const newtEle = currentEle.clone();
                newtEle.find('.stt').text(nextNumber)
                // remove-item-order btn-remove-1
                newtEle.find('.remove-item-order').attr('data-index' , nextNumber);
                newtEle.find('.remove-item-order').attr('id', 'btn-remove-' + nextNumber);
                newtEle.clone().prependTo('.area-order-detail');
            });

            // $('.remove-item-order').unbind().on('click', function (e) {
            //     console.log('1111')
            //     // var ele = $(this);
            //     // console.log('111111',ele.attr('id'))
            // })
        });
    </script>
@endsection
