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
    <link href="{{ asset('assets/css/bootstrap-corporate.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css/app-corporate.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-corporate-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="{{ asset('assets/css/app-corporate-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <!--pe-icon-7 Icon -->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <!-- Custom  css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    @yield('css')
</head>

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "condensed", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>
<div id="wrapper">
    <div class="left-side-menu">
        <div class="logo-box">
            <a class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-transparant.png') }}" alt="" height="64">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-transparant.png') }}" alt="" height="64">
                </span>
            </a>
        </div>

        <div class="h-100" data-simplebar>
            <div id="sidebar-menu">
                <ul id="side-menu">
                    <li class="menu-title">Navigation</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="content-page">
        <div class="content">
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container-fluid">
                test
                @yield('content')
            </div>
        </div>
    </div>
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
