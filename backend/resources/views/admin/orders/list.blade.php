@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý đơn hàng</h4>
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
                <div class="table-add">
                    <a href="{{ route('admin.orders.create')  }}" class="btn btn-info mb-4">Thêm đơn hàng mới</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách đơn hàng</h4>
                            {{ $datas->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên đơn hàng</th>
                                <th>Mã khách hàng</th>
                                <th>
                                    Thông tin đơn hàng
                                </th>
                                <th>
                                    Nguyên vật liệu cần mua
                                </th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày kết thúc</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $key => $data)
                                @php
                                    $ingredients = count_material_for_order($data->toArray());
                                @endphp
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ optional($data)->name }}</td>
                                    <td>{{ optional($data)->code }}</td>
                                    <td style="display: grid; border: none">
                                        @foreach($data->detail_product as $key2 => $value)
                                            <div class="area-info d-flex align-items-center" style="column-gap: 10px;">
                                                <code> {{ $value['amount'] . ' ' . get_product_info_text($value['id']) }} </code>
                                            </div>

                                        @endforeach
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="fas fa-eye"></i> Click me
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Danh sách nguyên vật liệu cần mua</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @foreach($ingredients as $key => $ingredient)
                                                            <ul class="list-group mt-1">
                                                                <li class="list-group-item active">{{$key}}</li>
                                                                @foreach($ingredient as $item)
                                                                    <li class="list-group-item">
                                                                        {{ $item['quantity'] . ' (' . $item['unit'] . ') ' . $item['name']  }}
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endforeach
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ optional($data)->start_at }}</td>
                                    <td>{{ optional($data)->end_at }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.orders.show', ['order' => $data->getKey()])  }}" class="btn btn-success mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('admin.orders.delete', $data->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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
