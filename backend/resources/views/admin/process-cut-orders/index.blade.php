@extends('layouts.master')
@section('css')
    <!-- Plugins css -->
    <link href="{{ URL::asset('assets/css/select2.min.css')}}" rel="stylesheet" />
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
                    <h4 class="page-title">Quản lý tiến độ cắt</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.users.list')  }}" class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tìm kiếm</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Từ khoá</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ request()->get('key_word') ?? '' }}" name="key_word" placeholder="Nhập từ khoá" id="example-text-input">
                            </div>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách</h4>
                            {{ $datas->links() }}
                        </div>
                        <div class="row">
                            @foreach($datas as $data)
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header bg-secondary">
                                            <div class="info-top d-flex justify-content-between">
                                                <span class="text-white"><b>Thông tin bàn cắt {{ $loop->index + 1 }}</b></span>
                                                <span style="height: 20px; width: 20px; border-radius: 50%; background-color: {{ $data->status ? 'limegreen' : 'red'  }};"></span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="cut-info d-flex justify-content-start">
                                                <div class="cut-info-left" style="width: 36%">
                                                    <p>Tên đơn hàng: </p>
                                                    <p>Tên sản phẩm: </p>
                                                    <p style="line-height: 0.9">Tổng bán thành phẩm: </p>
                                                    <p>Tổng kg vải:</p>
                                                    <p>Mã vải:</p>
                                                    <p>Công nhân cắt:</p>
                                                    <p style="margin-top: 30px" class="d-none">Hoàn thành:</p>
                                                    <p style="margin-top: 30px">Ghi chú:</p>
                                                    <p style="margin-top: 65px">Ngày bắt đầu:</p>
                                                    <p style="margin-top: 30px">Ngày kết thúc:</p>
                                                </div>
                                                <div class="cut-info-right" style="width: 64%">
                                                    <p>
                                                        <b>{{ $data->order->name }}</b>
                                                        <input type="hidden" id="{{ "process_cut_order_" . ($data->id) }}" value="{{ $data->id }}">
                                                        <input type="hidden" id="{{ "order_" . ($data->id) }}" value="{{ $data->order->id }}">
                                                    </p>
                                                    <p>
                                                        <b>{{ $data->product->name . ' (' . $data->product->part_number . ')' }}</b>
                                                        <input type="hidden" id="{{ "product_" . ($data->id) }}" value="{{ $data->product->id }}">
                                                    </p>
                                                    <p>
                                                        <b>{{ $data->total_product  }}</b>
                                                        <input type="hidden" id="{{ "total_product_" . ($data->id) }}" value="{{ $data->total_product }}">
                                                    </p>
                                                    <p>
                                                        <b>{{ $data->total_material  }}</b>
                                                        <input type="hidden" id="{{ "total_material_" . ($data->id) }}" value="{{ $data->total_material }}">
                                                        <input type="hidden" id="{{ "material_" . ($data->id) }}" value="{{ $data->material->id }}">
                                                    </p>
                                                    <p><b>{{ $data->material->code  }}</b></p>
                                                    <p>
                                                        <select id="{{'user_select_' . $data->id }}" class="js-example-basic-multiple" name="user_id">
                                                            <option value=""></option>
                                                            @foreach($users as $key => $user)
                                                                <option value="{{ $user->getKey() }}" {{ $data->user_id ==  $user->getKey() ? 'selected' : ''  }}>{{ $user->full_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="{{'process_done_' . $data->id }}" class="d-none" value="true"  name="{{ 'check' . ($loop->index)  }}" style="width: 30px;height: 25px;">
                                                    </p>
                                                    <p>
                                                        <textarea class="form-control" id="{{'note_' . $data->id }}" name="{{'note_' . $data->id }}">{{ $data->note  }}</textarea>
                                                    </p>
                                                    <p>
                                                        <input type="text" class="form-control" value="{{ $data->start_at ? \Illuminate\Support\Carbon::parse($data->start_at)->timezone(7)->format('h:i:s m-d-Y') : '' }}" readonly>
                                                    </p>
                                                    <p>
                                                        <input type="text" class="form-control" value="{{ $data->end_at ? \Illuminate\Support\Carbon::parse($data->end_at)->timezone(7)->format('h:i:s m-d-Y') : '' }}" readonly>
                                                    </p>
                                                </div>
                                            </div>
                                            <button id="{{ 'btn-' . $data->id  }}" data-position="{{ $loop->index + 1 }}" data-id="{{$data->id}}" class="btn btn-info btn-save-process">Save</button>
                                            @if(!$data->start_at)
                                                <button id="{{ 'btn-start-' . $data->id  }}" data-position="{{ $loop->index + 1 }}" data-id="{{$data->id}}" class="btn btn-warning btn-start-process">Start</button>
                                            @endif
                                            @if($data->start_at && !$data->end_at)
                                                <button id="{{ 'btn-finish-' . $data->id  }}" data-position="{{ $loop->index + 1 }}" data-id="{{$data->id}}" class="btn btn-success btn-finish-process">Finish</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
    <!-- Sweet-Alert  -->
{{--    <script src="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>--}}
{{--    <script src="{{ URL::asset('assets/pages/sweet-alert.init.js')}}"></script>--}}
    <!-- Plugins Init js -->
    <script src="{{ URL::asset('assets/pages/form-advanced.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!--Wysiwig js-->
    <script src="{{ URL::asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('script-bottom')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('form').parsley();

            $('.btn-save-process').on('click', function (e) {
                var id = $(this).attr('data-id');
                var posId = $(this).attr('data-position');
                let user_id = $('#user_select_' + id).val()
                let process_id = $('#process_done_' + id).val()
                let note = $('#note_' + id).val()
                let data  = {
                    id,
                    user_id,
                    note
                };
                $.ajax({
                    url: "{{route('admin.process-cut_orders.update')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}",
                    },
                    data: data,
                    success: function (data) {
                        Toastify({
                            text: "Lưu thành công" + ' bàn ' + posId,
                            className: "info",
                            style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                            }
                        }).showToast();
                    },
                    error: function (error) {
                        const {responseJSON, msg} = error;
                        Toastify({
                            text: responseJSON['msg'] + ' cho bàn ' + posId,
                            className: "danger",
                            style: {
                                background: "linear-gradient(to right, red, red)",
                            }
                        }).showToast();
                    }
                });
            })

            $('.btn-start-process').on('click', function (e) {
                var id = $(this).attr('data-id');
                var posId = $(this).attr('data-position');
                let user_id = $('#user_select_' + id).val()
                let material_id = $('#material_' + id).val()
                let amount = $('#total_material_' + id).val()
                let data  = {
                    id,
                    user_id,
                    amount,
                    material_id
                };
                $.ajax({
                    url: "{{route('admin.process-cut_orders.start')}}",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}",
                    },
                    data: data,
                    success: function (data) {
                        Toastify({
                            text: "Start thành công" + ' bàn ' + posId,
                            className: "info",
                            style: {
                                background: "linear-gradient(to right, #00b09b, #96c93d)",
                            }
                        }).showToast();
                        location.reload(true);
                    },
                    error: function (error) {
                        const {responseJSON, msg} = error;
                        Toastify({
                            text: responseJSON['msg'] + ' cho bàn ' + posId,
                            className: "danger",
                            style: {
                                background: "linear-gradient(to right, red, red)",
                            }
                        }).showToast();
                    }
                });
            });

            $('.btn-finish-process').on('click', function (e) {
                Swal.fire({
                    title: "Xác nhận hoàn thành cắt?",
                    text: "Vui lòng kiểm tra trước khi xác nhận hoàn thành!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Hoàn thành"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var id = $(this).attr('data-id');
                        var posId = $(this).attr('data-position');
                        let user_id = $('#user_select_' + id).val()
                        let amount = $('#total_product_' + id).val()
                        let order_id = $('#order_' + id).val()
                        let product_id = $('#product_' + id).val()
                        let material_id = $('#material_' + id).val()
                        let process_cut_order_id = $('#process_cut_order_' + id).val()
                        let data  = {
                            id,
                            user_id,
                            amount,
                            order_id,
                            product_id,
                            material_id,
                            process_cut_order_id
                        };
                        console.log({ data });
                        $.ajax({
                            url: "{{route('admin.process-cut_orders.finish')}}",
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': "{{csrf_token()}}",
                            },
                            data: data,
                            success: function (data)                                                                                                                                               {
                                Toastify({
                                    text: "Finish thành công" + ' bàn ' + posId,
                                    className: "info",
                                    style: {
                                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                                    }
                                }).showToast();
                                location.reload(true);
                            },
                            error: function (error) {
                                const {responseJSON, msg} = error;
                                Toastify({
                                    text: responseJSON['msg'] + ' cho bàn ' + posId,
                                    className: "danger",
                                    style: {
                                        background: "linear-gradient(to right, red, red)",
                                    }
                                }).showToast();
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
