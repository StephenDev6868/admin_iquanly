@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý chuyên mục</h4>
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
                    <a href="{{ route('admin.categories.create')  }}" class="btn btn-info mb-4">Thêm chuyên mục mới</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách bài viết</h4>
                            {{ $datas->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên chuyên mục</th>
                                <th>Thuộc chuyên mục chính</th>
                                <th>Số lượng bài post</th>
                                <th>Trạng Thái</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Thao Tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $key => $data)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ optional($data)->name }}</td>
                                    <td>{{ optional($data)->category->name }}</td>
                                    <td>{{ optional($data)->posts->count() }}</td>
                                    @switch($data->status)
                                        @case(1)
                                        <td class="badge badge-primary mt-2">Show</td>
                                        @break
                                        @default
                                        <td class="badge badge-secondary mt-2">Hide</td>
                                        @break
                                    @endswitch
                                    <td >{{ $data->created_at }}</td>
                                    <td >{{ $data->updated_at }}</td>
                                    <td >
                                        <a href="{{ route('admin.categories.edit', ['subCategory' => $data->getKey()])  }}" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('admin.sites.delete', $data->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">
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
