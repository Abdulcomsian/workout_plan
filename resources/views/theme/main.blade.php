<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico')}}">
    @include('theme.head-css')
    @stack('page-css')
    @yield('stylesheets')
</head>

@section('body')
    @include('theme.body')
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('theme.topbar')
        @include('theme.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('theme.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    @include('theme.vendor-script')
    @stack('page-script')
</body>

</html>