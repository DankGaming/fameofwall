<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="Dank,Software,Blog">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>PERP Wall Off Fame</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <link href="{{ asset('assets/libs/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/creative/bootstrap-dark.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css/creative/app-dark.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />

    @yield('css')
</head>

<body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    @auth
        @include('core.components.top_nav')
    @endauth
    @guest
        @include('core.components.top_nav_guest')
    @endguest

    <div class="content-page" style="padding-top: 70px;">
        <div class="content">
            @yield('content')
        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; PERP Wall Of Fame by <a href="">Dank</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="{{ route('views.contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>

<script src="{{ asset('themes/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/libs/footable/footable.all.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
<script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/foo-tables.init.js') }}"></script>
<script src="{{ asset('assets/js/pages/toastr.init.js') }}"></script>
@guest
    <script src="{{ asset('assets/js/cookie_warning.js') }}"></script>
@endguest

@yield('js')
@yield('script')

</body>
</html>
