<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    @yield('css')
    <title>Admin Hapo Digital</title>
    @include('layouts.head')
</head>
<body>
<!-- Begin page -->
<div id="wrapper">
    @include('layouts.topbar')
{{--    @include('layouts.sidebar')--}}
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @include('layouts.flash-message')
            @yield('content')
        </div> <!-- content -->
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->
@include('layouts.footer-script')
</body>
</html>
