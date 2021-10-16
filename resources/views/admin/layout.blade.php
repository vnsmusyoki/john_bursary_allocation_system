<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Admin Account | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Complete Admin Management Page for Teachers, Students, Parents and School Clerk"
        name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- third party css -->
    <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-admin.css') }}">
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    @livewireStyles

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">
            <!-- LOGO -->
            <a href="{{ route('admin') }}" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="{{ route('admin') }}" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">


                    <li class="side-nav-item">
                        <a   href="{{ route('admin') }}" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="bi bi-speedometer2"></i>

                            <span> Dashboards </span>
                        </a>

                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTeachers" aria-expanded="false"
                            aria-controls="sidebarTeachers" class="side-nav-link">
                            <i class="bi bi-person-check"></i>
                            <span> Teachers </span>
                            <span class="menu-arrow"><i class="bi bi-chevron-right "></i></span>

                        </a>
                        <div class="collapse" id="sidebarTeachers">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href=" ">Products</a>
                                </li>
                                <li>
                                    <a href=" ">Products Details</a>
                                </li>
                                <li>
                                    <a href=" ">Orders</a>
                                </li>
                                <li>
                                    <a href=" ">Order Details</a>
                                </li>
                                <li>
                                    <a href=" ">Customers</a>
                                </li>
                                <li>
                                    <a href=" ">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href=" ">Checkout</a>
                                </li>
                                <li>
                                    <a href=" ">Sellers</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarStudents" aria-expanded="false"
                            aria-controls="sidebarStudents" class="side-nav-link">
                            <i class="bi bi-people-fill"></i>
                            <span> Students </span>
                            <span class="menu-arrow"><i class="bi bi-chevron-right "></i></span>
                        </a>
                        <div class="collapse" id="sidebarStudents">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href=" ">All Students</a>
                                </li>
                                <li>
                                    <a href="">Student Details</a>
                                </li>
                                <li>
                                    <a href=" ">Admission Form</a>
                                </li>
                                <li>
                                    <a href="">Student Body</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarParents" aria-expanded="false"
                            aria-controls="sidebarParents" class="side-nav-link">
                            <i class="bi bi-people"></i>
                            <span> Parents </span>
                            <span class="menu-arrow"><i class="bi bi-chevron-right "></i></span>
                        </a>
                        <div class="collapse" id="sidebarParents">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href=" ">List</a>
                                </li>
                                <li>
                                    <a href=" ">Details</a>
                                </li>
                                <li>
                                    <a href=" ">Gantt <span
                                            class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
                                </li>
                                <li>
                                    <a href=" ">Create Project <span
                                            class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebaracc" aria-expanded="false" aria-controls="sidebaracc"
                            class="side-nav-link">
                            <i class="bi bi-currency-exchange"></i>
                            <span> Accountant </span>
                            <span class="menu-arrow"><i class="bi bi-chevron-right "></i></span>
                        </a>
                        <div class="collapse" id="sidebaracc">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href=" ">List</a>
                                </li>
                                <li>
                                    <a href=" ">Details</a>
                                </li>
                                <li>
                                    <a href=" ">Gantt <span
                                            class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
                                </li>
                                <li>
                                    <a href=" ">Create Project <span
                                            class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarlib" aria-expanded="false" aria-controls="sidebarlib"
                            class="side-nav-link">
                            <i class="bi bi-bookshelf"></i>
                            <span> Library </span>
                            <span class="menu-arrow"><i class="bi bi-chevron-right "></i></span>
                        </a>
                        <div class="collapse" id="sidebarlib">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-projects-list.html">List</a>
                                </li>
                                <li>
                                    <a href="apps-projects-details.html">Details</a>
                                </li>
                                <li>
                                    <a href="apps-projects-gantt.html">Gantt <span
                                            class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
                                </li>
                                <li>
                                    <a href="apps-projects-add.html">Create Project <span
                                            class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ url('admin/full-calendar') }}" class="side-nav-link">
                            <i class="bi bi-calendar3"></i>
                            <span> Full Calendar </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="" class="side-nav-link">
                            <i class="bi bi-book-fill"></i>
                            <span> Subject </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="" class="side-nav-link">
                            <i class="bi bi-bell"></i>
                            <span> Notifications </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="" class="side-nav-link">
                            <i class="bi bi-briefcase-fill"></i>
                            <span> Suggestion Box </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="" class="side-nav-link">
                            <i class="uil-layer-group"></i>
                            <span> Widgets </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-file-manager.html" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> File Manager </span>
                        </a>
                    </li>



                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarAccount" aria-expanded="false"
                            aria-controls="sidebarAccount" class="side-nav-link">
                            <i class="bi bi-gear"></i>
                            <span> Account </span>
                            <span class="menu-arrow"><i class="bi bi-chevron-right "></i></span>
                        </a>
                        <div class="collapse" id="sidebarAccount">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="">Horizontal</a>
                                </li>
                                <li>
                                    <a href="">Detached</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="widgets.html" class="side-nav-link">
                            <i class="uil-layer-group"></i>
                            <span> Widgets </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false"
                            aria-controls="sidebarIcons" class="side-nav-link">
                            <i class="bi bi-calendar3"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"><i class="bi bi-chevron-right "></i></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="icons-dripicons.html">Dripicons</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design</a>
                                </li>
                                <li>
                                    <a href="icons-unicons.html">Unicons</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false"
                            aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-document-layout-center"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="form-elements.html">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="form-advanced.html">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="form-fileuploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="form-editors.html">Editors</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>



                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="bi bi-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="bi bi-bell noti-icons"></i>
                                <span class="noti-icon-badge">34</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div style="max-height: 230px;" data-simplebar>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"
                                                class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/avatar-4.jpg') }}"
                                                class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>





                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-image"
                                        class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">{{ Auth::user()->name }}</span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="bi bi-wallet-fill me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="bi bi-sliders me-1"></i>
                                    <span>Settings</span>
                                </a>


                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="bi bi-person-plus me-1"></i>
                                    <span>Add Admin</span>
                                </a>

                                <!-- item-->

                                <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right me-1"></i>
                                    <span> {{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="bi bi-list"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..."
                                    id="top-search">
                                {{-- <span class="mdi mdi-magnify search-icon"></span> --}}
                                {{-- <span><i class="mdi mdi-magnify bi bi-search"></i></span> --}}
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hyper - Int&#174;ude&#174;
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Developer</a>
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
    <!-- END wrapper -->

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
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light"
                        id="light-mode-check" checked>
                    <label class="form-check-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark"
                        id="dark-mode-check">
                    <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                </div>


                <!-- Width -->
                <h5 class="mt-4">Width</h5>
                <hr class="mt-1" />
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check"
                        checked>
                    <label class="form-check-label" for="fluid-check">Fluid</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                    <label class="form-check-label" for="boxed-check">Boxed</label>
                </div>


                <!-- Left Sidebar-->
                <h5 class="mt-4">Left Sidebar</h5>
                <hr class="mt-1" />
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                    <label class="form-check-label" for="default-check">Default</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check"
                        checked>
                    <label class="form-check-label" for="light-check">Light</label>
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                    <label class="form-check-label" for="dark-check">Dark</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check"
                        checked>
                    <label class="form-check-label" for="fixed-check">Fixed</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="condensed"
                        id="condensed-check">
                    <label class="form-check-label" for="condensed-check">Condensed</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="scrollable"
                        id="scrollable-check">
                    <label class="form-check-label" for="scrollable-check">Scrollable</label>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
                        Now</a>
                </div>
            </div> <!-- end padding-->

        </div>
    </div>


    <!-- demo app -->
    <script src="assets/js/pages/demo.dashboard.js"></script>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
    <!-- bundle -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{  asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <!-- third party js -->
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('assets/js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-admin.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/admin-student.js')}}"></script> --}}
    {!! Toastr::message() !!}
    <script>
        CKEDITOR.replace('event_description');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#studentexams').DataTable( {
        "columnDefs": [ {
            "visible": false,
            "targets": -1
        } ]
    } );
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);

            var vieweventtitle = button.data('title');
            var vieweventaudience = button.data('audience');
            var vieweventstarttime = button.data('starttime');
            var vieweventendtime = button.data('endtime');
            var vieweventplace = button.data('eventplace');
            var vieweventdescription = button.data('description');
            var modal = $(this);
            modal.find('.modal-title').text('Viewing Event Details');

            modal.find('.modal-body #view-event-title').text(vieweventtitle);
            modal.find('.modal-body #view-event-audience').text(vieweventaudience);
            modal.find('.modal-body #view-event-starttime').text(vieweventstarttime);
            modal.find('.modal-body #view-event-endtime').text(vieweventendtime);
            modal.find('.modal-body #view-event-place').text(vieweventplace);
            modal.find('.modal-body #view-event-description').text(vieweventdescription);
        });
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: '2021-10-08',
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                editable: true,
                selectable: true,
                eventSources: [{
                    url: '/admin/fetch-all-events',
                    color: 'green',
                    textColor: 'blue',
                    backgroundColor: 'purple',
                }]


            });
            calendar.render();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var destCalendarEl = document.getElementById('destination-calendar');
            var destCalendar = new FullCalendar.Calendar(destCalendarEl, {
                initialDate: '2020-09-12',
                editable: true,
                droppable: true, // will let it receive events!
                events: [{
                    title: 'Business Lunch',
                    start: '2020-09-03T13:00:00',
                    constraint: 'businessHours'
                }]
            });

            destCalendar.render();
        });
    </script>
    @livewireScripts
</body>

</html>
