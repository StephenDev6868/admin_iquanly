@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Thêm bài viết </h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin bài viết</h4>
                        <form class="row" action="{{ route('admin.posts.update', ['post' => $post->getKey()]) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12 form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tiêu đề</label>
                                        <input type="text" name="title" value="{{ old('title') ?? optional($post)->title }}" class="form-control" required placeholder="Nhập tiêu đề"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Trạng thái</label>
                                        <select name="status" id="" value="{{ old('status') ?? optional($post)->status }}" class="form-control">
                                            <option value="1" {{ $post->status == 1 ? 'selected' : ''}}>Nháp</option>
                                            <option value="2" {{ $post->status == 2 ? 'selected' : ''}}>Submit</option>
                                            <option value="3" {{ $post->status == 3 ? 'selected' : ''}}>Public</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <label>Danh mục bài viết</label>
                                        <select name="category_id" id="" value="{{ old('category_id') }}" class="form-control">
                                            @foreach($categorys as $category)
                                                <option {{ $post->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group mt-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Từ khoá chính</label>
                                                <input type="text" name="keyword" value="{{ old('keyword', $post->keyword) }}" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Từ khoá phụ</label>
                                                <input type="text" name="sub_keyword" value="{{ old('sub_keyword',  $post->sub_keyword) }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header bg-white" style="padding: 0 20px;">
                                        <h5 class="title">Ảnh hiện tại</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <img src="{{ $post->avatar }}" style="max-width: 300px;max-height: 160px;" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Ảnh bài viết</label>
                                <input type="file" name="avatar" value="{{ old('avatar') }}" class="filestyle" data-buttonname="btn-secondary" accept=".jpeg,.jpg,.png">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Miêu tả nhanh</label>
                                <textarea id="elm2" name="sort_description">
                                    {!!html_entity_decode($post->sort_description)!!}
                                </textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Nội dung</label>
                                <textarea id="elm1" name="content">
                                    {!!html_entity_decode($post->content)!!}
                                </textarea>
                            </div>
                            <div class="col-md-12 form-group m-b-0">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
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
        $(document).ready(function() {
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

            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 400,
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
        });
    </script>
@endsection
