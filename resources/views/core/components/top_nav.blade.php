<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-grid noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <div class="p-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="https://www.perpheads.com">
                                    <img src="../assets/images/perpheads.png" alt="G Suite">
                                    <span>PERPHeads.com</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="https://www.bans.perpheads.com">
                                    <img src="../assets/images/perpheads.png" alt="bitbucket">
                                    <span>SCAMBANS</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <!-- <span class="badge bg-danger rounded-circle noti-icon-badge">5</span> -->
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                        </h5>
                    </div>

                    <div class="noti-scroll" data-simplebar>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon bg-soft-primary text-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Doug Dukes commented on Admin Dashboard
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ Auth::user()->avatar }}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-account-circle-line"></i>
                        <span>My Account</span>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-account-circle-line"></i>
                        <span>My Uploads</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                        <i class="ri-logout-box-line"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ route('views.index') }}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="../assets/images/perpheads.png" alt="" height="24">
                                <!-- <span class="logo-lg-text-light">Minton</span> -->
                            </span>
                <span class="logo-lg">
                                <img src="../assets/images/perpheads.png" alt="" height="20">
                    <!-- <span class="logo-lg-text-light">M</span> -->
                            </span>
            </a>

            <a href="{{ route('views.index') }}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="../assets/images/perpheads.png" alt="" height="24">
                            </span>
                <span class="logo-lg">
                                <img src="../assets/images/perpheads.png" alt="" height="20">
                            </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>

            <li class="dropdown d-none d-xl-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Submit New
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-briefcase me-1"></i>
                        <span>Speedrun</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-user me-1"></i>
                        <span>Record</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-bar-chart-line- me-1"></i>
                        <span>Moment</span>
                    </a>

                    <!--<div class="dropdown-divider"></div>

                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="fe-headphones me-1"></i>
                        <span>Help & Support</span>
                    </a> -->

                </div>
            </li>
        </ul>
    </div>
</div>
<script>

</script>