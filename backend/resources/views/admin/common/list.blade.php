@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Cấu hình thông tin chung</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{ route('admin.commons.doUpdateSuppliers')  }}" class="row" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-lg-6">
                <div class="table-add">
                    <a href="{{ route('admin.commons.createSupplier')  }}" class="btn btn-info mb-4">Thêm nhà cung cấp mới</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách nhà cung cấp</h4>
                            {{ $suppliers->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên nhà cung cấp</th>
                                <th>Mã nhà cung cấp</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suppliers as $key => $data)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>
                                        <input type="text" name="{{ $data->getKey() }}[]" value="{{ optional($data)->name ?? ''}}">
                                    </td>
                                    <td>
                                        <input type="text" name="{{ $data->getKey() }}[]" value="{{ optional($data)->code ?? ''}}">
                                    </td>
                                    <td class="d-flex">
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
                        <div class="col-md-12 form-group mt-3 m-b-0 text-right">
                            <button type="submit" class="btn btn-primary waves-effect mt-2 waves-light">
                                Lưu
                            </button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </form> <!-- end row -->

        <hr>

        <form action="{{ route('admin.commons.doUpdateMaterials')  }}" class="row" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-lg-8">
                <div class="table-add">
                    <a href="{{ route('admin.commons.createMaterial') }}" class="btn btn-info mb-4">Thêm nguyên liệu mới</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách nguyên liệu</h4>
                            {{ $materials->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên nguyên liệu</th>
                                <th>Mã nguyên liệu</th>
                                <th>Đơn vị</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($materials as $key => $data)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>
                                        <input type="text" name="{{ $data->getKey() }}[]" value="{{ optional($data)->name ?? ''}}">
                                    </td>
                                    <td>
                                        <input type="text" name="{{ $data->getKey() }}[]" value="{{ optional($data)->code ?? ''}}">
                                    </td>
                                    <td>
                                        <select id="{{'unit' . ($loop->index + 1) }}" class="spr-text-field form-control" name="{{ $data->getKey() }}[]" required>
                                            <option value="{{ \App\Enums\Unit::CAI  }}" {{ \App\Enums\Unit::CAI === optional($data)->unit ? 'selected' : '' }} >{{ \App\Enums\Unit::CAI  }}</option>
                                            <option value="{{ \App\Enums\Unit::CUON  }} {{ \App\Enums\Unit::CUON === optional($data)->unit ? 'selected' : '' }}">{{ \App\Enums\Unit::CUON  }}</option>
                                            <option value="{{ \App\Enums\Unit::KG  }}" {{ \App\Enums\Unit::KG === optional($data)->unit ? 'selected' : '' }}>{{ \App\Enums\Unit::KG  }}</option>
                                            <option value="{{ \App\Enums\Unit::MET  }}" {{ \App\Enums\Unit::MET === optional($data)->unit ? 'selected' : '' }}>{{ \App\Enums\Unit::MET  }}</option>
                                        </select>
                                    </td>
                                    <td class="d-flex">
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
                        <div class="col-md-12 form-group mt-3 m-b-0 text-right">
                            <button type="submit" class="btn btn-primary waves-effect mt-2 waves-light">
                                Lưu
                            </button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </form> <!-- end row -->
    </div> <!-- container-fluid -->
@endsection
