@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Quản lý nguyên vật liệu</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.wMaterials.list') }}" class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Tìm kiếm nguyên vật liệu</h4>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Từ khoá</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ request()->get('key_word' ?? '') }}" name="key_word" placeholder="Nhập từ khoá" id="example-text-input">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nhà cung cấp</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="supplier_id">
                                    <option value="">Tất cả</option>
                                    @foreach($suppliers as $supplier)
                                        <option value="{{ $supplier->getKey() }}" {{ request()->query('supplier_id') == $supplier->getKey() ? 'selected' : ''  }}>{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tên và mã nguyên liệu</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="material_id">
                                    <option value="">Tất cả</option>
                                    @foreach($materials as $material)
                                        <option value="{{ $material->getKey() }}" {{ request()->query('material_id') == $material->getKey() ? 'selected' : '' }}>{{ $material->name . '-' . $material->code  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Ngày nhập</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="text" value="{{ old('date_added') ?? request()->query('date_added') }}" data-date-format="dd-mm-yyyy" name="date_added" class="form-control" placeholder="mm-dd-yyyy" id="datepicker-autoclose">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div><!-- input-group -->
                            </div>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="table-add">
                    <a href="{{ route('admin.wMaterials.create')  }}" class="btn btn-info mb-4">Thêm nguyên vật liệu mới</a>
                </div>
                <div class="card m-b-20">
                    <div class="card-body">
                        <div class="table-title d-flex justify-content-between">
                            <h4 class="mt-0 header-title">Danh sách nguyên vật liệu</h4>
                            {{ $datas->links() }}
                        </div>
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th nowrap="true">STT</th>
                                <th nowrap="true">Tên nhà cung cấp</th>
                                <th nowrap="true">Tên nguyên vật liệu</th>
                                <th nowrap="true">Mã nguyên vật liệu</th>
                                <th nowrap="true">Đơn vị</th>
                                <th nowrap="true">Số lượng nhập</th>
                                <th nowrap="true">Số lượng tồn</th>
{{--                                <th>Số lượng tồn</th>--}}
{{--                                <th>Số lượng sử dụng</th>--}}
                                <th nowrap="true">Ngày nhập</th>
                                <th nowrap="true">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $key => $data)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ optional($data)->supplier->name }}</td>
                                    <td>{{ optional($data)->parentMaterial->name }}</td>
                                    <td>{{ optional($data)->parentMaterial->code }}</td>
                                    <td class="text-center">{{ ' (' . optional($data)->parentMaterial->unit . ') ' }}</td>
                                    <td>{{ optional($data)->quantity_input }}</td>
                                    <td>{{ optional($data)->quantity_contain ?? '0' }}</td>
                                    <td>{{ optional($data)->date_added }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.wMaterials.show', ['wMaterial' => $data->getKey()])  }}" class="btn btn-success mr-2">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form method="post" action="{{ route('admin.wMaterials.delete', $data->getKey()) }}" onsubmit="return confirm('@lang('Confirm delete?')');">
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

@section('script')
    {{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
    <!-- Parsley js -->
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!-- Plugins Init js -->
    <script src="{{ URL::asset('assets/pages/form-advanced.js')}}"></script>
    <!--Wysiwig js-->
@endsection
