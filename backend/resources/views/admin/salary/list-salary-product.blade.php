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
                    <h4 class="page-title">Quản lý lương sản phẩm</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{ route('admin.salary_product.show')  }}" class="row" method="GET">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tìm kiếm</h4>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Tên và mã sản phẩm</label>
                            <select name="product_id" id="product_id_select" class="form-control col-sm-12">
                                <option value="">Tất cả</option>
                                @foreach($products as $key => $product)
                                    <option {{ request()->query('product_id') == $product->getKey() ? 'selected' : '' }} value="{{ $product->getKey() }}">{{ $product->name . ' - ' . $product->code . ($product->part_number ? ' - ' . $product->part_number : '') . '-' .$product->size }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Tên Công đoạn</label>
                            <select name="product_step_id" id="product_step_id_select" class="js-example-basic-multiple form-control col-sm-12">
                                <option value="">Tất cả</option>
                                @foreach($steps as $key => $productStep)
                                    <option {{ request()->query('productStep') == $productStep->getKey() ? 'selected' : '' }} value="{{ $productStep->getKey() }}">{{ $productStep->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Lương sản phẩm tháng</label>
                            <div class="input-group">
                                <input type="text" value="{{ request()->query('month_salary') ?? \Carbon\Carbon::now()->format('m-Y') }}" data-date-format="mm-yyyy" name="month_salary" class="form-control" placeholder="dd-yyyy" id="datepicker-autoclose">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div><!-- input-group -->
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên Nhân viên</label>
                            <select id="js-example-basic-multiple-1" class="js-example-basic-multiple col-sm-10" name="user_ids[]" multiple="multiple">
                                @foreach($users as $key => $user)
                                    <option value="{{ $user->getKey() }}">{{ $user->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên công đoạn</label>
                            <select id="js-example-basic-multiple-2" class="js-example-basic-multiple col-sm-10" name="steps[]" multiple="multiple">
                                @foreach($steps as $key => $step)
                                    <option value="{{ $step->getKey() }}">{{ $step->name }}</option>
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

        <div class="row">
            <div class="col-lg-12">

                <div class="card m-b-20">
                    <div class="card-title" style="padding: 1.25rem 1.25rem 0 1.25rem">
                        <div class="title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách lương sản phẩm</h4>
{{--                            {{ $datas->links() }}--}}
                        </div>
                    </div>
                    <div class="card-body" style="overflow: scroll;">
                        @if($type == 2)
                            <table class="table table-striped mb-0" >
                                <thead>
                                <tr>
                                    <th nowrap="true">ID</th>
                                    <th nowrap="true">Lương tháng</th>
                                    <th nowrap="true">Tên công đoạn </th>
                                    <th nowrap="true">Đơn giá </th>
                                    <th nowrap="true">Hệ số </th>
                                    <th nowrap="true">Tổng sản phẩm</th>
                                    <th nowrap="true">Tổng lương sản phẩm</th>
                                    <th nowrap="true">Dữ liệu chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $sum = 0;
                                @endphp
                                @foreach($salaries as $key => $salary)
                                    @php
                                        $sum += $salary['sumSalaryProduct'];
                                    @endphp
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $salary['dateWorkNow'] }}</td>
                                        <td>{{ $salary['step_name'] }}</td>
                                        <td>{{ $salary['unitPrice'] ?? '' }}</td>
                                        <td>{{ $salary['coefficient'] ?? '' }}</td>
                                        <td>{{ $salary['sumQuantityProduct'] ?? '' }}</td>
                                        <td>{{ number_format($salary['sumSalaryProduct']) }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{'exampleModalCenter_' . $loop->index }}">
                                                <i class="fas fa-eye"></i> Click me
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="{{'exampleModalCenter_' . $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Dữ liệu lương chi tiết</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-striped mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th nowrap="true">Tên nhân viên</th>
                                                                        <th nowrap="true">Ngày làm việc </th>
                                                                        <th nowrap="true">Sản lượng</th>
                                                                        <th nowrap="true">Đơn giá</th>
                                                                        <th nowrap="true">Hệ số</th>
                                                                        <th nowrap="true">Tiền lương</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($salary['productStepInfo'] as $item)
                                                                        <tr>
                                                                            <td>{{ $item['userFullName'] }}</td>
                                                                            <td>{{ $item['dateWork'] }}</td>
                                                                            <td>{{ $item['quantity'] }}</td>
                                                                            <td>{{ $item['unitPrice'] }}</td>
                                                                            <td>{{ $item['coefficient'] }}</td>
                                                                            <td>{{ number_format($item['salary_one_day']) }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <table class="table table-striped mb-0" >
                                <thead>
                                <tr>
                                    <th nowrap="true">ID</th>
                                    <th nowrap="true">Lương tháng</th>
                                    <th nowrap="true">Tên nhân viên</th>
                                    <th nowrap="true">Tổng lương sản phẩm</th>
                                    <th nowrap="true">Xem dữ liệu chi tiết</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $sum = 0;
                                @endphp
                                @foreach($salaries as $key => $salary)
                                    @php
                                        $sum += $salary['sumSalaryProduct'];
                                    @endphp
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $salary['dateWorkNow'] }}</td>
                                        <td>{{ $salary['userFullName'] }}</td>
                                        <td>{{ number_format($salary['sumSalaryProduct']) }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{'exampleModalCenter_' . $loop->index }}">
                                                <i class="fas fa-eye"></i> Click me
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="{{'exampleModalCenter_' . $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Dữ liệu lương chi tiết</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                    <th nowrap="true">Tên công đoạn</th>
                                                                    <th nowrap="true">Thuộc sản phẩm</th>
                                                                    <th nowrap="true">Ngày làm việc </th>
                                                                    <th nowrap="true">Sản lượng</th>
                                                                    <th nowrap="true">Đơn giá</th>
                                                                    <th nowrap="true">Hệ số</th>
                                                                    <th nowrap="true">Tiền lương</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($salary['productStepInfo'] as $item)
                                                                    <tr>
                                                                        <td>{{ $item['step_name'] }}</td>
                                                                        <td>{{ $item['product_name'] . '-' . $item['product_code'] }}</td>
                                                                        <td>{{ $item['dateWork'] }}</td>
                                                                        <td>{{ $item['quantity'] }}</td>
                                                                        <td>{{ $item['unitPrice'] }}</td>
                                                                        <td>{{ $item['coefficient'] }}</td>
                                                                        <td style="white-space: nowrap">{{ number_format($item['salary_one_day']) }} <b>VND</b></td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><b>Tổng lương sản phẩm:</b></td>
                                    <td>{{ number_format($sum)  }} <b>VND</b></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        @endif
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
            var steps = {!! json_encode(request()->query('steps')) !!};
            if(userIds && userIds.length > 0) {
                $('#js-example-basic-multiple-1').val(userIds);
                $('#js-example-basic-multiple-1').trigger('change');
                $('#js-example-basic-multiple-1').select2();
            } else {
                $('#js-example-basic-multiple-1').select2();
            }

            if(steps && steps.length > 0) {
                $('#js-example-basic-multiple-2').val(steps);
                $('#js-example-basic-multiple-2').trigger('change');
                $('#js-example-basic-multiple-2').select2();
            } else {
                $('#js-example-basic-multiple-2').select2();
            }

            $('#product_id_select').on('change', function (e) {
                var product_id = $(this).val();
                console.log({product_id});
                let data  = {
                    product_id,
                };
                $.ajax({
                    url: "{{route('admin.productSteps.listSelect')}}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}",
                    },
                    data: data,
                    success: function (data) {
                        $('#product_step_id_select').find('option').remove()
                        $('#product_step_id_select').append($('<option>', {
                            value: '',
                            text : 'Tất cả'
                        }))
                        data.forEach((item) => {
                            $('#product_step_id_select').append($('<option>', {
                                value: item.id,
                                text : item.name
                            }))
                        })
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
