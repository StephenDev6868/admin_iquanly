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
                            <label for="example-text-input" class="col-sm-2 col-form-label">Lương sản phẩm tháng</label>
                            <div class="input-group">
                                <input type="text" value="{{ request()->query('month_salary') ?? old('month_salary') }}" data-date-format="mm-yyyy" name="month_salary" class="form-control" placeholder="dd-yyyy" id="datepicker-autoclose">
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
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên công đoạn</label>
                            <select class="js-example-basic-multiple col-sm-10" name="steps[]" multiple="multiple">
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

                                        {{--                                    <td class="d-flex">--}}
                                        {{--                                        <a href="{{ route('admin.wTools.show', ['wTool' => $data->getKey()])  }}" class="btn btn-success mr-2">--}}
                                        {{--                                            <i class="fas fa-pencil-alt"></i>--}}
                                        {{--                                        </a>--}}
                                        {{--                                        <form method="post" action="{{ route('admin.wTools.delete', $data->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">--}}
                                        {{--                                            @csrf--}}
                                        {{--                                            @method('DELETE')--}}
                                        {{--                                            <button type="submit" class="btn btn-danger waves-effect waves-light">--}}
                                        {{--                                                <i class="fas fa-trash"></i>--}}
                                        {{--                                            </button>--}}
                                        {{--                                        </form>--}}
                                        {{--                                    </td>--}}
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><b>Tổng lương sản phẩm:</b></td>
                                    <td>{{ number_format($sum)  }}</td>
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
