@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý user</h4>
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
                    <a href="{{ route('admin.users.create')  }}" class="btn btn-info mb-4">Thêm user</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách user</h4>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>aaaaaa@gmail.com</td>
                                    <td class="badge badge-primary mt-2">Admin</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >
                                        <a href="{{ route('admin.users.show', ['user' => 1])  }}" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>aaaaaa@gmail.com</td>
                                    <td class="badge badge-primary mt-2">Admin</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >
                                        <a href="" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>aaaaaa@gmail.com</td>
                                    <td class="badge badge-primary mt-2">Admin</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >
                                        <a href="" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>aaaaaa@gmail.com</td>
                                    <td class="badge badge-primary mt-2">Admin</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >
                                        <a href="" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>aaaaaa@gmail.com</td>
                                    <td class="badge badge-primary mt-2">Admin</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >
                                        <a href="" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>aaaaaa@gmail.com</td>
                                    <td class="badge badge-primary mt-2">Admin</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >
                                        <a href="" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>aaaaaa@gmail.com</td>
                                    <td class="badge badge-primary mt-2">Admin</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >01-01-2022 00:00:00</td>
                                    <td >
                                        <a href="" class="btn btn-success">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
@endsection
