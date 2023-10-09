@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý nhóm phân quyền</h4>
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
                    <a href="{{ route('admin.roles.create')  }}" class="btn btn-info mb-4">Thêm nhóm phân quyền mới</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
{{--                            <h4 class="mt-0 header-title">Danh sách bài viết</h4>--}}
{{--                            {{ $datas->link() }}--}}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên nhóm phân quyền</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhập</th>
                                <th>Thao tác</th>
{{--                                <th>Số lượng bài post</th>--}}
{{--                                <th>Trạng Thái</th>--}}
{{--                                <th>Ngày Tạo</th>--}}
{{--                                <th>Ngày Cập Nhập</th>--}}
{{--                                <th>Thao Tác</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $key => $data)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ optional($data)->name }}</td>
                                    <td >{{ $data->created_at }}</td>
                                    <td >{{ $data->updated_at }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.roles.show', ['role' => $data->getKey()])  }}" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('admin.roles.delete', $data->getKey()) }}" class="ml-2" onsubmit="return confirm('@lang('Confirm delete?')');">
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
