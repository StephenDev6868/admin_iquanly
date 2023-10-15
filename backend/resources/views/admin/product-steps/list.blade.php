@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý công đoạn sản phẩm</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{ route('admin.productSteps.list')  }}" class="row" method="GET">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tìm kiếm công đoạn</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Từ khoá</label>
                            <div class="col-sm-10" style="padding: 0">
                                <input class="form-control" type="text" value="{{ request()->get('key_word' ?? '') }}" name="key_word" placeholder="Nhập từ khoá" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Sản phẩm</label>
                            <select name="product_id" id="" class="form-control col-sm-10">
                                @foreach($products as $product)
                                    <option {{ request()->query('product_id') == $product->getKey() ? 'selected' : '' }} value="{{ $product->getKey()  }}">{{ $product->name . ' - ' . $product->code  }}</option>
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
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="area-button-action d-flex">
                    <div class="table-add">
                        <a href="{{ route('admin.productSteps.create')  }}" class="btn btn-info mb-4">Thêm công đoạn</a>
                    </div>
                    <div class="table-add">
                        <a href="{{ route('admin.productSteps.showQuantity')  }}" class="btn btn-warning ml-2 mb-4">Xem dữ liệu sản lượng</a>
                    </div>
                </div>

                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách công đoạn sản phẩm</h4>
                            {{ $productSteps->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên công đoạn</th>
                                <th>Tên sản phẩm</th>
                                <th>Mã sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Hệ số</th>
                                <th>Ngày tạo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($productSteps as $key => $productStep)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $productStep->name }}</td>
                                        <td>{{ $productStep->product->name }}</td>
                                        <td>{{ $productStep->product->code }}</td>
                                        <td>{{ $productStep->unit_price }}</td>
                                        <td>{{ $productStep->coefficient }}</td>
                                        <td >{{ $productStep->created_at }}</td>
                                        <td >
                                            <a href="{{ route('admin.productSteps.show', ['productStep' => $productStep->getKey()])  }}" class="btn btn-success">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{ route('admin.productSteps.showQuantity', ['productStep' => $productStep->getKey()]) }}" class="btn btn-info">
                                                <i class="fas fa-user"></i>
                                            </a>
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
