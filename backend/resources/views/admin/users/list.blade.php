@extends('layouts.master')

@section('css')
    <!-- Sweet Alert -->
    <link href="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý nhân viên</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{ route('admin.users.list')  }}" class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tìm kiếm nhân viên</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Từ khoá</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ request()->get('key_word' ?? '') }}" name="key_word" placeholder="Nhập từ khoá" id="example-text-input">
                            </div>
                        </div>
{{--                        <div class="form-group row">--}}
{{--                            <label class="col-sm-2 col-form-label">Loại user</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <select class="form-control" name="role">--}}
{{--                                    <option value="">All</option>--}}
{{--                                    <option value="1" {{ request()->get('roles') == 1 ? 'selected' : '' }}>Admin</option>--}}
{{--                                    <option value="2" {{ request()->get('roles') == 2 ? 'selected' : '' }}>CTV</option>--}}
{{--                                    <option value="3" {{ request()->get('roles') == 3 ? 'selected' : '' }}>Người đăng bài</option>--}}
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
                    <a href="{{ route('admin.users.create')  }}" class="btn btn-info mb-4">Thêm user</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body" style="overflow: scroll;">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách user</h4>

                            {{ $users->links() }}
                        </div>

                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th style="white-space: nowrap">STT</th>
                                <th style="white-space: nowrap">Họ và tên</th>
                                <th style="white-space: nowrap">Trạng thái làm việc</th>
{{--                                <th style="white-space: nowrap">CCCD/CMND</th>--}}
                                <th style="white-space: nowrap">Số điện thoại</th>
{{--                                <th style="white-space: nowrap">Email</th>--}}
                                <th style="white-space: nowrap">Chức danh</th>
                                <th style="white-space: nowrap">Phòng ban</th>
                                <th style="white-space: nowrap">Ngày tạo</th>
{{--                                <th style="white-space: nowrap">Ngày cập nhập</th>--}}
                                <th style="white-space: nowrap">Thao tác</th>
{{--                                @if(optional(auth()->guard('user')->user())->role === 1)--}}
{{--                                    <th>Action</th>--}}
{{--                                @endif--}}
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td style="white-space: nowrap">{{ $user->full_name }}</td>
                                        <td style="white-space: nowrap">
                                            @if($user->status_work == 1)
                                                <span class="badge badge-primary">Active</span>
                                            @else
                                                <span class="badge badge-danger">Unactive</span>
                                            @endif
                                        </td>
{{--                                        <td style="white-space: nowrap">{{ $user->cccd }}</td>--}}
                                        <td style="white-space: nowrap">{{ $user->phone_number }}</td>
{{--                                        <td style="white-space: nowrap">{{ $user->email }}</td>--}}
                                        <td style="white-space: nowrap">{{ optional($user)->title_level }}</td>
                                        <td style="white-space: nowrap">{{ optional($user)->boardName($user->getKey()) }}</td>
                                        <td style="white-space: nowrap">{{ $user->created_at ? $user->created_at->format('H:i:s d-m-Y') : '' }}</td>
{{--                                        <td style="white-space: nowrap">{{ $user->updated_at ? $user->updated_at->format('H:i:s d-m-Y') : '' }}</td>--}}
{{--                                        @if(optional(auth()->guard('user')->user())->role === 1)--}}
                                        <td class="d-flex">
                                            <a href="{{ route('admin.users.show', ['user' => $user->getKey()])  }}" class="btn btn-success mr-2">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
{{--                                            <form method="post" action="{{ route('admin.users.delete', $user->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">--}}
                                            <form method="post" action="{{ route('admin.users.delete', $user->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
{{--                                        @endif--}}
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

@section('script')
    <!-- Sweet-Alert  -->
    <script src="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/pages/sweet-alert.init.js')}}"></script>
@endsection
