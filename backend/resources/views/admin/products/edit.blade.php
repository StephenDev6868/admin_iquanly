@extends('layouts.master')
@section('css')
    <!-- Plugins css -->
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
                    <h4 class="page-title">Thêm sản phẩm </h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin sản phẩm</h4>
                        <form class="row" action="{{ route('admin.products.update', ['product' => $product->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12 form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" name="name" value="{{ $product->name ?? old('name') }}" class="form-control" required placeholder="Nhập tên sản phẩm"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Mã sản phẩm</label>
                                <input type="text" name="code" value="{{ $product->code ?? old('code') }}" class="form-control" required placeholder="Nhập mã sản phẩm"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Size</label>
                                <select class="form-control" name="size">
                                    @foreach($sizes as $key => $size)
                                        <option {{ $product->size === $size ? 'selected' : ''  }} value="{{ $size }}">{{ $size }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Part number</label>
                                <input type="text" name="part_number" value="{{ $product->part_number ??  old('part_number') }}" class="form-control" required placeholder="Nhập Part number"/>
                            </div>
                            <div class="col-md-12 form-group jumbotron" style="padding: 1rem 1rem;">
                                <div class="top-detail d-flex justify-content-between mb-2">
                                    <h5>Nhập chi tiết nguyên vật liệu làm sản phẩm</h5>
                                    <button type="button" class="btn btn-primary add-material" style="height: 50px; width: 50px;"><i class="fas fa-plus"></i></button>
                                </div>
                                <div class="detail-order">
                                    <table class="table table-light table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th class="d-none">STT</th>
                                            <th>Tên và mã nguyên liệu (định mức)</th>
                                            <th>Định mức cho 1 sản phẩm</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody class="area-order-detail">
                                            @if($product->materials)
                                                @foreach($product->materials as $value)
                                                    <tr id="1-detail-order-input" class="detail-order-input">
                                                        <th class="stt d-none">
                                                            1
                                                        </th>
                                                        <th>
                                                            <select class="form-control" name="material[id][]">
                                                                <option value=""></option>
                                                                @foreach($materials as $key => $material)
                                                                    <option {{ $value['id'] ==  $material->getKey() ? 'selected' : '' }} value="{{ $material->getKey() }}">{{ $material->name . ' - ' . $material->code. ' (' . $material->num_quota. ' ' . $material->unit_quota . ')' }}</option>
                                                                @endforeach
                                                            </select>
                                                        </th>
                                                        <th>
                                                            <input type="text" name="material[quota][]" value="{{ $value['quota'] ?? old('quota')  }}" class="form-control" required placeholder="Nhập định mức ">
                                                        </th>
                                                        <th>
                                                            <button type="button" id="btn-remove-1" data-index="1" onClick="return removeItem(this)" class="btn btn-danger remove-item"><i class="fas fa-trash"></i></button>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr id="1-detail-order-input" class="detail-order-input">
                                                    <th class="stt d-none">
                                                        1
                                                    </th>
                                                    <th>
                                                        <select class="form-control" name="material[id][]">
                                                            <option value=""></option>
                                                            @foreach($materials as $key => $material)
                                                                <option  value="{{ $material->getKey() }}">{{ $material->name . ' - ' . $material->code }}</option>
                                                            @endforeach
                                                        </select>
                                                    </th>
                                                    <th>
                                                        <input type="text" name="material[quota][]" value="{{ old('quota')  }}" class="form-control" required placeholder="Nhập định mức ">
                                                    </th>
                                                    <th>
                                                        <button type="button" id="btn-remove-1" data-index="1" onClick="return removeItem(this)" class="btn btn-danger remove-item"><i class="fas fa-trash"></i></button>
                                                    </th>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 form-group m-b-0 text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Lưu
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

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
        function removeItem(e) {
            let id = '#' + e['id'];
            $(id).parent().parent().remove();
        }


        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('form').parsley();

            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 500,
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

            $('.add-material').click(function (e) {
                const currentEle = $('.detail-order-input').eq(0);
                const number = +currentEle.find('.stt').text().match(/\d+/g).join("")
                const nextNumber = number + 1;
                const newtEle = currentEle.clone();
                newtEle.find('.stt').text(nextNumber)
                // remove-item btn-remove-1
                newtEle.find('.remove-item').attr('data-index' , nextNumber);
                newtEle.find('.remove-item').attr('id', 'btn-remove-' + nextNumber);
                newtEle.clone().prependTo('.area-order-detail');
            });
        });
    </script>
@endsection
