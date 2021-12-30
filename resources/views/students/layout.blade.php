<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Student | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">

    <!-- third party css -->
    <link href="{{ asset('backend/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('backend/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="dark-style" />
    <link href="{{ asset('backend/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/fixedHeader.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/vendor/fixedColumns.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    @livewireStyles
</head>

<body class="loading" data-layout="detached"
    data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <!-- Topbar Start -->
    <div class="navbar-custom topnav-navbar topnav-navbar-dark">
        <div class="container-fluid">

            <!-- LOGO -->
            

            <ul class="list-unstyled topbar-menu float-end mb-0">

                <li class="dropdown notification-list d-xl-none">
                    <button class="btn btn-primary">Student Dashboard</button>
                </li>



                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                        id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="dripicons-bell noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>

                </li>

                <li class="dropdown notification-list d-none d-sm-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i class="dripicons-view-apps noti-icon"></i>
                    </a>

                </li>

                <li class="notification-list">
                    <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                        <i class="dripicons-gear noti-icon"></i>
                    </a>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                        id="topbar-userdrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="account-user-avatar">


                            @if (Auth::user()->picture == null)
                                <img src="{{ asset('backend/images/users/avatar-1.jpg') }}" alt="user-image"
                                    class="rounded-circle">
                            @else
                                <img src="{{ asset('storage/profiles/' . Auth()->user()->picture) }}"
                                    class="rounded-circle">
                            @endif
                        </span>
                        <span>
                            <span class="account-user-name">{{ Auth::user()->name }}</span>
                            <span class="account-position">Student</span>
                        </span>
                    </a>

                </li>

            </ul>
            <a class="button-menu-mobile disable-btn">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <div class="app-search dropdown">
                <form>
                    <div class="input-group">


                        <button class="input-group-text btn-primary">Student Dashboard</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end Topbar -->

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu leftside-menu-detached">

                <div class="leftbar-user">
                    <a href="javascript: void(0);">
                        @if (Auth::user()->picture == null)
                            <img src="{{ asset('backend/images/users/avatar-1.jpg') }}" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                        @else
                            <img src="{{ asset('storage/profiles/' . Auth()->user()->picture) }}"
                                style="height:70px;width:70px;border-radius:50%;">
                        @endif

                        <span class="leftbar-user-name">{{ Auth::user()->name }}</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ route('student') }}" class="side-nav-link">

                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('student/apply-bursary') }}" class="side-nav-link">

                            <span> Apply Bursary </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ url('student/bursary-applications') }}" class="side-nav-link">

                            <span> Bursary Applications </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('student/allocated-bursary-applications') }}" class="side-nav-link">

                            <span> Allocated Applications </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('student/denied-bursary-applications') }}" class="side-nav-link">

                            <span> Denied Applications </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{ url('student/avatar') }}" class="side-nav-link">

                            <span> Update Avatar </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{ url('student/avatar') }}" class="side-nav-link">

                            <span>Update Password </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('student/avatar') }}" class="side-nav-link">

                            <span>General Profile </span>
                        </a>
                    </li>
                    <li class="side-nav-item">

                        <a class="side-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>



                </ul>


                <!-- End Sidebar -->

                <div class="clearfix"></div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
                <!-- End Content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Student Bursary Applications
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">Logout</a>
                                    <a href="javascript: void(0);">Apply Bursary</a>
                                    <a href="javascript: void(0);">Account Security</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- content-page -->

        </div>
        <!-- end wrapper-->
    </div>
    <!-- END Container -->


    <!-- Right Sidebar -->
    <div class="end-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="end-bar-toggle float-end">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar>

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                </div>

                <!-- Settings -->
                <h5 class="mt-3">Color Scheme</h5>
                <hr class="mt-1" />

                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                        id="light-mode-check" checked />
                    <label class="form-check-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                        id="dark-mode-check" />
                    <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                </div>

                <!-- Left Sidebar-->
                <h5 class="mt-4">Left Sidebar</h5>
                <hr class="mt-1" />

                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="compact" value="fixed" id="fixed-check"
                        checked />
                    <label class="form-check-label" for="fixed-check">Scrollable</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="compact" value="condensed"
                        id="condensed-check" />
                    <label class="form-check-label" for="condensed-check">Condensed</label>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
                        Now</a>
                </div>
            </div>
            <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->


    <!-- bundle -->
    <script src="{{ asset('backend/js/vendor.min.js') }}"></script>
    <script src="{{ asset('backend/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('backend/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->
    <script src="{{ asset('backend/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendor/dataTables.select.min.js') }}"></script>
    <!-- demo app -->
    <script src="{{ asset('backend/js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/demo.datatable-init.js') }}"></script>
    {!! Toastr::message() !!}
    @livewireScripts
</body>

</html>
