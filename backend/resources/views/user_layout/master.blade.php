<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    @include('user_layout.head')
</head>
<body>
<!-- Begin page -->
    @include('user_layout.top_header')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!-- Start content -->
    @yield('content')
    @include('user_layout.footer')
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
<!-- END wrapper -->
{{--@include('layouts.footer-script')--}}
</body>
</html>
