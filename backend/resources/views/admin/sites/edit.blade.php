@extends('layouts.master')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Chỉnh sửa site</h4>
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
                        <h4 class="mt-0 header-title mb-3">Nhập thông tin site</h4>
                        {{--                        <p class="text-muted m-b-30 font-14">Parsley is a javascript form validation--}}
                        {{--                            library. It helps you provide your users with feedback on their form--}}
                        {{--                            submission before sending it to your server.</p>--}}

                        <form class="row" action="{{ route('admin.sites.update', ['site' => $site->getKey()]) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="col-md-12 form-group">
                                <label>Tiêu đề</label>
                                <input type="text" name="title" value="{{ $site->title }}" class="form-control" required placeholder="Nhập tiêu đề"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Domain</label>
                                <input type="text" name="domain" value="{{ $site->domain }}" class="form-control" required placeholder="Nhập domain"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Mô tả</label>
                                <textarea name="description" value="{{ $site->description }}" id="" cols="20" rows="10" placeholder="Nhập mô tả" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Logo</label>
                                <input type="file" name="logo" class="filestyle" data-buttonname="btn-secondary" accept=".jpeg,.jpg,.png">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Sitemap</label>
                                <textarea name="sitemap" value="{{ $site->sitemap }}" class="form-control" id="" cols="30" rows="10" placeholder="Nhập sitemap"></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">
                                                    Header: <span class="text-danger">*</span>
                                                </label>
                                                <select name="header" id="" class="form-control">
                                                    @php
                                                        $headerSelected = '';
                                                    @endphp
                                                    @foreach($headers as $key => $header)
                                                        <option value="{{ $header['id'] }}" {{ $site['config']['header'] == $header['id'] ? 'selected' : '' }} {{ $headerSelected = $header['id'] }}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $headerSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">
                                                    Footer: <span class="text-danger">*</span>
                                                </label>
                                                <select name="footer" id="" class="form-control">
                                                    @php
                                                        $footerSelected = '';
                                                    @endphp
                                                    @foreach($footers as $key => $footer)
                                                        <option value="{{ $footer['id'] }}" {{ $site['config']['footer'] == $footer['id'] ? 'selected' : '' }} {{ $footerSelected = $footer['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" target="_blank" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $footerSelected]) }}" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">
                                                    Trang chủ <span class="text-danger">*</span>
                                                </label>
                                                <select name="home" id="" class="form-control">
                                                    @php
                                                        $homeSelected = '';
                                                    @endphp
                                                    @foreach($homes as $key => $home)
                                                        <option value="{{$home['id']}}" {{ $site['config']['home'] == $header['id'] ? 'selected' : '' }} {{ $homeSelected = $home['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $homeSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">
                                                    Trang about <span class="text-danger">*</span>
                                                </label>
                                                <select name="about" id="" class="form-control">
                                                    @php
                                                        $aboutSelected = '';
                                                    @endphp
                                                    @foreach($abouts as $key => $about)
                                                        <option value="{{$about['id']}}" {{ $site['config']['about'] == $about['id'] ? 'selected' : '' }} {{ $aboutSelected = $about['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $aboutSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">Trang tác giả</label>
                                                <select name="author" id="" class="form-control">
                                                    @php
                                                        $authorSelected = '';
                                                    @endphp
                                                    <option value=""></option>
                                                    @foreach($authors as $key => $author)
                                                        <option value="{{$author['id']}}" {{ $site['config']['author'] == $author['id'] ? 'selected' : '' }} {{$authorSelected = $author['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $authorSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">Trang chính sách</label>
                                                <select name="policy" id="" class="form-control">
                                                    @php
                                                        $policySelected = '';
                                                    @endphp
                                                    <option value=""></option>
                                                    @foreach($policys as $key => $policy)
                                                        <option value="{{$policy['id']}}" {{ $site['config']['policy'] == $policy['id'] ? 'selected' : '' }} {{ $policySelected =  $policy['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $policySelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">Trang bài viết</label>
                                                <select name="post" id="" class="form-control">
                                                    @php
                                                        $postSelected = '';
                                                    @endphp
                                                    <option value=""></option>
                                                    @foreach($posts as $key => $post)
                                                        <option value="{{$post['id']}}" {{ $site['config']['post'] == $post['id'] ? 'selected' : '' }} {{ $postSelected =  $post['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $postSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">Trang bài viết chi tiết</label>
                                                <select name="post_single" id="" class="form-control">
                                                    @php
                                                        $postDetailSelected = '';
                                                    @endphp
                                                    <option value=""></option>
                                                    @foreach($post_details as $key => $post_detail)
                                                        <option value="{{$post_detail['id']}}" {{ $site['config']['post_single'] == $post_detail['id'] ? 'selected' : '' }} {{ $postDetailSelected =  $post_detail['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $postDetailSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">Danh mục sản phẩm</label>
                                                <select name="product" id="" class="form-control">
                                                    @php
                                                        $productSelected = '';
                                                    @endphp
                                                    <option value=""></option>
                                                    @foreach($products as $key => $product)
                                                        <option value="{{$product['id']}}" {{ $site['config']['product'] == $product['id'] ? 'selected' : '' }} {{ $productSelected = $product['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $productSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row" style="align-items: end">
                                            <div class="col-md-10">
                                                <label for="" class="mt-3">Chi tiết sản phẩm</label>
                                                <select name="product_single" id="" class="form-control">
                                                    @php
                                                        $productDetailSelected = '';
                                                    @endphp
                                                    <option value=""></option>
                                                    @foreach($product_details as $key => $product_detail)
                                                        <option value="{{$product_detail['id']}}" {{ $site['config']['product_single'] == $product_detail['id'] ? 'selected' : '' }} {{ $productDetailSelected = $product_detail['id']}}>
                                                            {{ 'Template - ' . ($loop->index + 1)}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1" style="margin-top: 26px;">
                                                <a href="{{ route('admin.sites.preview',['config' => $productDetailSelected]) }}" target="_blank" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group m-b-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
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
@endsection

@section('script-bottom')
    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
@endsection
