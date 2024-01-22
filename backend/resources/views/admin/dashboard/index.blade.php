@extends('layouts.master')
@section('css')
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/morris/morris.css')}}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard thống kê</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->
        <input type="hidden" id="data_order" value="{{ $data_dashboard_order_res  }}">
        <input type="hidden" id="data_quantity" value="{{ $quantity_data_res  }}">

        <div class="row">
            <div class="col-lg-12">
                <div class="table-add">
{{--                    <a href="{{ route('admin.orders.create')  }}" class="btn btn-info mb-4">Thêm đơn hàng mới</a>--}}
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="top-chart d-flex justify-content-between">
                                        <h4 class="mt-0 header-title">Tình trạng đơn hàng</h4>
                                    </div>
                                    {{--                                    <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">--}}
                                    {{--                                        <li class="list-inline-item">--}}
                                    {{--                                            <h5 class="mb-0">6,95,412</h5>--}}
                                    {{--                                            <p class="text-muted font-14">Activated</p>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="list-inline-item">--}}
                                    {{--                                            <h5 class="mb-0">1,63,542</h5>--}}
                                    {{--                                            <p class="text-muted font-14">Pending</p>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    <div id="morris-orders" class="morris-chart-height"></div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="top-chart d-flex justify-content-between">
                                        <h4 class="mt-0 header-title">Top sản lượng</h4>
                                        <form action="{{ route('admin.dashboard')  }}" class="row d-flex justify-content-end" method="GET" style="width: 30%">
                                            <select id="select-chart-user-data" name="month_work" class="form-control mr-2" style="width: 50%">
                                                @foreach($data_month as $month)
                                                    <option value="{{$month}}" {{ request()->get('month_work') == $month ? 'selected'  : '' }}>{{ \Illuminate\Support\Carbon::parse($month)->format('m/Y')  }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-success"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
{{--                                    <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <h5 class="mb-0">6,95,412</h5>--}}
{{--                                            <p class="text-muted font-14">Activated</p>--}}
{{--                                        </li>--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <h5 class="mb-0">1,63,542</h5>--}}
{{--                                            <p class="text-muted font-14">Pending</p>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                    <div id="morris-bar-example" class="morris-chart-height"></div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="top-chart d-flex justify-content-between">
                                        <h4 class="mt-0 header-title">Top lương sản phẩm</h4>
                                    </div>
                                    {{--                                    <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">--}}
                                    {{--                                        <li class="list-inline-item">--}}
                                    {{--                                            <h5 class="mb-0">6,95,412</h5>--}}
                                    {{--                                            <p class="text-muted font-14">Activated</p>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li class="list-inline-item">--}}
                                    {{--                                            <h5 class="mb-0">1,63,542</h5>--}}
                                    {{--                                            <p class="text-muted font-14">Pending</p>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    <div id="morris-bar-example-2" class="morris-chart-height"></div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
@endsection
@section('script')
    <!--Morris Chart-->
    <script src="{{ URL::asset('assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{ URL::asset('assets/pages/dashboard-morris.init.js')}}"></script>
@endsection

