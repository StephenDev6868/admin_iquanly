@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý bài viết</h4>
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
                    <a href="{{ route('admin.posts.create')  }}" class="btn btn-info mb-4">Thêm bài viết</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách bài viết</h4>
                            {{ $posts->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Người Đăng</th>
                                <th>Tiêu Đề</th>
                                <th>Chuyên mục</th>
                                <th>Trạng Thái</th>
                                <th>Ngày Tạo</th>
                                <th>Ngày Cập Nhập</th>
                                <th>Thao Tác</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $key => $post)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ optional($post->userName())->full_name }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        @switch($post->status)
                                            @case(1)
                                            <td class="badge badge-primary mt-2">Draft</td>
                                            @break
                                            @case(2)
                                            <td class="badge badge-warning mt-2">Submit</td>
                                            @break
                                            @default
                                            <td class="badge badge-secondary mt-2">Public</td>
                                            @break
                                        @endswitch
                                        <td >{{ $post->created_at }}</td>
                                        <td >{{ $post->updated_at }}</td>
                                        <td >
                                            <a href="{{ route('admin.posts.show', ['post' => $post->getKey()])  }}" class="btn btn-success">
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
