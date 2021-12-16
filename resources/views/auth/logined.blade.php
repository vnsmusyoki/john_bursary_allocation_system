<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login | Account Your Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{  asset('css/toastr.min.css') }}">
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
                            <h1 class="mb-1 fw-bold">Sign in</h1>
                            <span>Return back to home screen? <a href="{{ url('/') }}" class="ms-1">Click
                                    Here</a></span>
                        </div>
                        <!-- Form -->
                        @if (session('passwordreset'))
                            {{ Toastr::warning(session('passwordreset'), '', ['positionClass' => 'toast-top-right', 'progressBar' => true, 'showMethod' => 'fadeIn', 'hideMethod' => 'fadeOut','preventDuplicates'=>true]) }}
                        @endif
                        <form method="POST" action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Enter valid Email address here" value="{{ old('email') }}">
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
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberme">
                                    <label class="form-check-label " for="rememberme">Remember me</label>
                                </div>
                                <div>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-login btn-block">Sign in</button>
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
<script src="{{  asset('js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
</html>
