@extends('layouts.master-staff')

@section('content')
    <div class="container-fluid">
        @if(count($salaryBasic) > 0)
            <div class="row">
                <div class="col-12" style="margin-top: 100px;">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body">
                                        <h4 class="mt-2 mb-4">Lương cơ bản : <b> {{ $salary['dateWorkNow'] }}</b></h4>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Họ và tên: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salary['userFullName'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Số ngày làm việc: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['work_day'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Số ngày nghỉ có phép: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['permitted_day_off'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Số ngày nghỉ không phép: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['not_allowed_day_off'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Tăng ca: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['overtime'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Ăn ca: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['overtime'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Đi trễ: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['late'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Về sớm: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['early'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Hỗ trợ: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['support_money'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Tạm ứng: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ $salaryBasic['advance'] ?? ''  }}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Tổng Lương cơ bản (nếu có): </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ number_format($salaryBasic['sum']) ?? ''  }} <b>VND</b></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Tổng Lương sản phẩm (nếu có): </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ number_format($salary['sumSalaryProduct']) ?? ''  }} <b>VND</b></p>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0 text-primary text-bold">Tổng lương: </p>
                                            </div>
                                            <div class="col-sm-9">
                                                <h4 class="text-muted mb-0" style="font-size: 20px; font-weight: bolder">{{ number_format((($salaryBasic['sum'] + ($salary['sumSalaryProduct'] ?? 0)))) ?? ''  }} <b>VND</b></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        @endif

        @if(count($salary) > 0)
            <div class="row">
                <div class="col-12" style="margin-top: 100px;">
                    <div class="card m-b-20">
                        <div class="card-body" style="padding: 0.5rem !important;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body" style="padding: 0.5rem !important;">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lương tháng 11</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="table-responsive">
                                                    <h4 class="mt-2 mb-4">Lương sản phẩm</h4>
                                                    <table class="table table-striped mb-0" >
                                                        <thead>
                                                        <tr>
                                                            <th nowrap="true">Lương tháng</th>
                                                            <th nowrap="true">Tên nhân viên</th>
                                                            <th nowrap="true">Tổng lương</th>
                                                            <th nowrap="true">Xem dữ liệu</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>{{ $salary['dateWorkNow'] }}</td>
                                                            <td>{{ $salary['userFullName'] }}</td>
                                                            <td>{{ number_format($salary['sumSalaryProduct']) }} <b>VND</b></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{'exampleModalCenter_'}}">
                                                                    <i class="fas fa-eye"></i> Click me
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="{{'exampleModalCenter_'}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                                                        <th nowrap="true">Ngày làm việc </th>
                                                                                        <th nowrap="true">Sản lượng</th>
                                                                                        <th nowrap="true">Đơn giá</th>
                                                                                        <th nowrap="true">Hệ số</th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    @foreach($salary['productStepInfo'] as $item)
                                                                                        <tr>
                                                                                            <td>{{ $item['step_name'] }}</td>
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
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                        {{--                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 38%">--}}
                                        {{--                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Lương tháng 10</a>--}}
                                        {{--                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>--}}
                                        {{--                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>--}}
                                        {{--                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="tab-content" id="v-pills-tabContent">--}}
                                        {{--                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">--}}
                                        {{--                                            <table class="table table-striped mb-0" >--}}
                                        {{--                                                <thead>--}}
                                        {{--                                                <tr>--}}
                                        {{--                                                    <th nowrap="true">Lương tháng</th>--}}
                                        {{--                                                    <th nowrap="true">Tên nhân viên</th>--}}
                                        {{--                                                    <th nowrap="true">Tổng lương sản phẩm</th>--}}
                                        {{--                                                    <th nowrap="true">Xem dữ liệu chi tiết</th>--}}
                                        {{--                                                </tr>--}}
                                        {{--                                                </thead>--}}
                                        {{--                                                <tbody>--}}
                                        {{--                                                <tr>--}}
                                        {{--                                                    <td>{{ $salary['dateWorkNow'] }}</td>--}}
                                        {{--                                                    <td>{{ $salary['userFullName'] }}</td>--}}
                                        {{--                                                    <td>{{ number_format($salary['sumSalaryProduct']) }}</td>--}}
                                        {{--                                                    <td>--}}
                                        {{--                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{'exampleModalCenter_'}}">--}}
                                        {{--                                                            <i class="fas fa-eye"></i> Click me--}}
                                        {{--                                                        </button>--}}
                                        {{--                                                        <!-- Modal -->--}}
                                        {{--                                                        <div class="modal fade" id="{{'exampleModalCenter_'}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                                        {{--                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">--}}
                                        {{--                                                                <div class="modal-content">--}}
                                        {{--                                                                    <div class="modal-header">--}}
                                        {{--                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Dữ liệu lương chi tiết</h5>--}}
                                        {{--                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                                        {{--                                                                            <span aria-hidden="true">&times;</span>--}}
                                        {{--                                                                        </button>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                    <div class="modal-body">--}}
                                        {{--                                                                        <table class="table table-striped mb-0">--}}
                                        {{--                                                                            <thead>--}}
                                        {{--                                                                            <tr>--}}
                                        {{--                                                                                <th nowrap="true">Tên công đoạn</th>--}}
                                        {{--                                                                                <th nowrap="true">Ngày làm việc </th>--}}
                                        {{--                                                                                <th nowrap="true">Sản lượng</th>--}}
                                        {{--                                                                                <th nowrap="true">Đơn giá</th>--}}
                                        {{--                                                                                <th nowrap="true">Hệ số</th>--}}
                                        {{--                                                                            </tr>--}}
                                        {{--                                                                            </thead>--}}
                                        {{--                                                                            <tbody>--}}
                                        {{--                                                                            @foreach($salary['productStepInfo'] as $item)--}}
                                        {{--                                                                                <tr>--}}
                                        {{--                                                                                    <td>{{ $item['step_name'] }}</td>--}}
                                        {{--                                                                                    <td>{{ $item['dateWork'] }}</td>--}}
                                        {{--                                                                                    <td>{{ $item['quantity'] }}</td>--}}
                                        {{--                                                                                    <td>{{ $item['unitPrice'] }}</td>--}}
                                        {{--                                                                                    <td>{{ $item['coefficient'] }}</td>--}}
                                        {{--                                                                                </tr>--}}
                                        {{--                                                                            @endforeach--}}
                                        {{--                                                                            </tbody>--}}
                                        {{--                                                                        </table>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                    <div class="modal-footer">--}}
                                        {{--                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                </div>--}}
                                        {{--                                                            </div>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </td>--}}
                                        {{--                                                </tr>--}}
                                        {{--                                                </tbody>--}}
                                        {{--                                            </table>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        @endif
    </div> <!-- container-fluid -->
@endsection
