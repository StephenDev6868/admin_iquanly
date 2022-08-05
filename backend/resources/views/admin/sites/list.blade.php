@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý site</h4>
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
                    <a href="{{ route('admin.sites.create')  }}" class="btn btn-info mb-4">Thêm site</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách bài viết</h4>
                            {{ $sites->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tiêu đề</th>
                                <th>Logo</th>
                                <th>domain</th>
                                <th>View</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sites as $key => $site)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $site->title  }}</td>
                                    <td>
                                        <img src="{{ 'http://site.local.pc:8082' . '/upload/logo/' . $site->logo }}" alt="" style="max-width: 100px;">
                                    </td>
                                    <td>{{ $site->domain }}</td>
                                    <td>
                                        <a href="{{ request()->getBaseUrl() . '/template/' . $site->domain . '/' . 'home.php' }}" target="_blank">{{ request()->getBaseUrl() . '/' . $site->domain . '/' . 'home.php' }}</a>
                                    </td>
                                    <td >{{ $site->created_at }}</td>
                                    <td >{{ $site->updated_at }}</td>
                                    <td style="display: flex">
                                        <a href="{{ route('admin.sites.show', $site->id)  }}" class="btn btn-success mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('admin.sites.delete', $site->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">
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
