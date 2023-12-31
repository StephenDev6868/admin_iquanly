@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý sản phẩm</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{ route('admin.products.list')  }}" class="row" method="GET">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tìm kiếm sản phẩm</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Từ khoá</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ request()->get('key_word' ?? '') }}" name="key_word" placeholder="Nhập từ khoá" id="example-text-input">
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-2 col-form-label">Trạng thái</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <select class="form-control" name="status">--}}
{{--                                    <option value="">All</option>--}}
{{--                                    <option value="1" {{ request()->get('status') == 1 ? 'selected' : '' }}>Bản public</option>--}}
{{--                                    <option value="2" {{ request()->get('status') == 2 ? 'selected' : '' }}>Bản submit</option>--}}
{{--                                    <option value="3" {{ request()->get('status') == 3 ? 'selected' : '' }}>Bán Nháp</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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
                <div class="table-add">
                    <a href="{{ route('admin.products.create')  }}" class="btn btn-info mb-4">Thêm sản phẩm</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách sản phẩm</h4>
                            {{ $products->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Người tạo</th>
                                <th>Tên sản phẩm</th>
                                <th>Mã sản phẩm</th>
                                <th>Size</th>
                                <th>Part number</th>
{{--                                <th>Ngày bắt đầu</th>--}}
{{--                                <th>Ngày kết thúc</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ optional($product)->creatorName($product->getKey()) ?? 'admin' }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->size }}</td>
                                        <td>{{ $product->part_number }}</td>
{{--                                        <td >{{ $product->start_at }}</td>--}}
{{--                                        <td >{{ $product->end_start }}</td>--}}
                                        <td>
                                            <a href="{{ route('admin.products.create', ['product_id' => $product->getKey()])  }}" class="btn btn-secondary">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="{{ route('admin.products.show', ['product' => $product->getKey()])  }}" class="btn btn-success">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
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
