<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reset Password | Account Your Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow ">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4 d-flex justify-content-center"
                            style="flex-direction: column;align-items:center;">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-icon.svg') }}"
                                    class="mb-4" alt=""></a>
                            <h1 class="mb-1 fw-bold">Create New Password</h1>
                            <span>Return back to home screen? <a href="{{ url('/') }}" class="ms-1">Click
                                    Here</a></span>
                        </div>

                        <!-- Form -->
                        <form method="POST" action="{{ route('password.update') }}" autocomplete="off">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Enter valid Email address here" value="{{ $email ?? old('email') }}">
                                @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="**************">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="c-password" class="form-label">Confirm Password</label>
                                <input type="password" id="c-password" class="form-control" name="password_confirmation"
                                    placeholder="**************">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-login btn-block">Set New Password</button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="mt-4 text-center">
                                <!--Facebook-->
                                <a href="#" class="btn-social btn-social-outline ">
                                    <i class="bi bi-house"></i>
                                </a>
                                <!--Twitter-->
                                <a href="#" class="btn-social btn-social-outline  ">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <!--LinkedIn-->
                                <a href="#" class="btn-social btn-social-outline  ">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <!--GitHub-->
                                <a href="#" class="btn-social btn-social-outline  ">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 

</html>
