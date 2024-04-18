@extends('layouts.master')
@section('css')
    <!-- Plugins css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/common/common.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css')}}" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Chỉnh sửa nguyên vật liệu </h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Validation</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin nguyên vật liệu </h4>
                        <form class="row" action="{{ route('admin.wMaterials.update', ['wMaterial' => $wMaterial->getKey() ]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6 form-group">
                                <label>Tên và mã nguyên vật liệu </label>
                                <select name="material_id" id="" class="form-control">
                                    @foreach($materials as $key => $data)
                                        <option value="{{ $data->getKey() }}" {{ $data->getKey() == $wMaterial->material_id ? 'selected' : '' }}>{{ $data->name . ' - ' . $data->code . ' (' . $data->unit . ') ' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số lượng tồn </label>
                                <input type="number" name="quantity_contain" disabled value="{{ $wMaterial->quantity_contain ?? old('quantity_contain') }}" class="form-control"  placeholder="Nhập Số lượng tồn " required/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mức cảnh báo </label>
                                <input type="number" name="alert_amount" value="{{ $wMaterial->alert_amount ?? old('alert_amount') }}" class="form-control"  placeholder="Nhập mức cảnh báo "/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Ngày xuất/nhập kho gần  </label>
                                <div>
                                    <div class="input-group">
                                        <input type="text" value="{{ $wMaterial->date_added ?? old('date_added') }}" disabled data-date-format="dd-mm-yyyy" name="" class="form-control" placeholder="dd-mm-yyyy" id="datepicker-autoclose">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group m-b-0 d-flex justify-content-between">
                                <div class="area-button-right">
                                    <button type="button" class="btn btn-success waves-effect waves-light"  data-toggle="modal" data-target="#modalEditMaterial" >
                                        Cập nhập kho
                                    </button>
                                </div>
                                <div class="area-button-left">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Lưu
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="area-history-io">
                            <div class="table-title d-flex justify-content-between">
                                <h4 class="mt-0 header-title">Lịch sử xuất nhập</h4>
                            </div>
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th nowrap="true">STT</th>
                                    <th nowrap="true">Đơn vị</th>
                                    <th nowrap="true">Xuất/nhập</th>
                                    <th nowrap="true">Số lượng</th>
                                    <th nowrap="true">Ngày xuất nhập</th>
                                    <th nowrap="true">Ghi chú</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($historyIOs as $key => $data)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        @if($data->type == '1')
                                            <td>{{ \App\Models\Supplier::find($data['object_id'])->name  }}</td>
                                        @else
                                            <td>{{ \App\Models\Board::find($data['object_id'])->name  }}</td>
                                        @endif

                                        <td>
                                            @if(optional($data)->type == '1')
                                                <div class="text-success">
                                                    <i class="fas fa-arrow-circle-left"></i> <b>NHẬP</b>
                                                </div>

                                            @else
                                                <div class="text-danger">
                                                    <b>XUẤT</b> <i class="fas fa-arrow-circle-right"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ optional($data)->amount }}</td>
                                        <td>{{ \Illuminate\Support\Carbon::parse(optional($data)->created_at)->timezone(7)->format('h:i:s m-d-Y') }}</td>
                                        <td style="width: 10% !important;"> {!! optional($data)->description !!} </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="modal fade bd-example-modal-lg" id="modalEditMaterial" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <form class="modal-content" action="{{ route('admin.wMaterialsIo.update', ['wMaterial' => $wMaterial->getKey() ]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Thônng tin nguyên liệu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row">
                        <input type="hidden" name="material_id" value="{{$wMaterial->material_id}}">
                        <div class="col-md-3 form-group">
                            <label>Chọn :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Nhập nguyên liệu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Xuất nguyên liệu
                                </label>
                            </div>
                        </div>
                        <div class="col-md-9 form-group">
                            <label class="title-input-io">Số lượng nhập </label>
                            <input type="number" name="quantity_io" class="form-control"  placeholder=""/>
                        </div>

                        <div class="col-md-11 form-group" id="supplier-select">
                            <label>Từ nhà cung cấp </label>
                            <select name="object_id" id="" class="form-control">
                                @foreach($suppliers as $key => $data)
                                    <option value="{{ $data->getKey() }}" {{ $data->getKey() == $wMaterial->supplier_id ? 'selected' : '' }}>{{ $data->name . ' - ' . $data->code }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-11 form-group" id="board-select">
                            <label>Đến phòng ban </label>
                            <select name="object_id" id="" class="form-control">
                                @foreach($boards as $key => $data)
                                    <option value="{{ $data->getKey() }}">{{ $data->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4 form-group">
                            <label>Ngày xuất/nhập kho </label>
                            <div>
                                <div class="input-group">
                                    <input type="text" value="{{ $wMaterial->date_added ?? old('date_added') }}" data-date-format="dd-mm-yyyy" name="date_io" class="form-control" placeholder="dd-mm-yyyy" id="datepicker-autoclose">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 form-group mt-3">
                            <label>NOTE</label>
                            <textarea id="elm2" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Lưu
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div> <!-- container-fluid -->
@endsection

@section('script')
    <!-- Parsley js -->
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

    <!-- Plugins Init js -->
    <script src="{{ URL::asset('assets/pages/form-advanced.js')}}"></script>

    <!--Wysiwig js-->
    <script src="{{ URL::asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
@endsection

@section('script-bottom')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('form').parsley();

            if($("#elm2").length > 0){
                tinymce.init({
                    selector: "textarea#elm2",
                    theme: "modern",
                    height: 200,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
            $('#board-select').hide();
            $('input[type=radio]').change(function (event) {
                if (event.target.value == 1) {
                    $('#supplier-select').show();
                    $('#board-select').hide();
                    $('.title-input-io').text('Số lượng nhập');
                } else {
                    $('#supplier-select').hide();
                    $('#board-select').show();
                    $('.title-input-io').text('Số lượng xuất')
                }
            })
        });
    </script>
@endsection
