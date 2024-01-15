@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý Bán thành phẩm</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
{{--                <div class="table-add">--}}
{{--                    <a href="{{ route('admin.wTools.create')  }}" class="btn btn-info mb-4">Thêm Bán thành phẩm mới</a>--}}
{{--                </div>--}}
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách Bán thành phẩm</h4>
                            {{--                            {{ $boards->links() }}--}}
                        </div>
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
                                    <td>{{ optional($data)->amount }}</td>
                                    <td>{{ \Illuminate\Support\Carbon::parse(optional($data)->created_at)->timezone(7)->format('h:i:s m-d-Y') }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.wSemiProduct.show', ['semiProduct' => $data->getKey()])  }}" class="btn btn-success mr-2">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </a>
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
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
@endsection
