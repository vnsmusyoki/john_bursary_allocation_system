<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In |Bursary Application System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('backend/css/app-modern-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="dark-style" />
</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":true}'>
    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start">
                        <a href="{{ url('/') }}" class="logo-dark">
                            <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                        </a>
                        <a href="{{ url('/') }}" class="logo-light">
                            <span><img src="assets/images/logo.png" alt="" height="18"></span>
                        </a>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0">Sign In</h4>
                    <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                    <!-- form -->
                    <form action="{{ route('login') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" id="emailaddress" name="email"
                                placeholder="Enter your email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <a href="" class="text-muted float-end"><small>Forgot your
                                    password?</small></a>
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password"  id="password"
                                placeholder="Enter your password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-grid mb-0 text-center">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In
                            </button>
                        </div>
                        <!-- social-->

                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    <footer class="footer footer-alt">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}"
                                class="text-muted ms-1"><b>Sign Up</b></a></p>
                    </footer>

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
                <h2 class="mb-3">Bursary Allocation System!</h2>
                <p class="lead"><i class="mdi mdi-format-quote-open"></i> Enter your email address and password to access your account<i class="mdi mdi-format-quote-close"></i>
                </p>
                <p>
                    - Bursary Applications System
                </p>
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->
    </div>

    <!-- bundle -->
    <script src="{{ asset('backend/js/vendor.min.js') }}"></script>
    <script src="{{ asset('backend/js/app.min.js') }}"></script>
</body>

</html>
