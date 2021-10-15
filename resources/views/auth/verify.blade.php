@extends('layouts.app')
@section('content')
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow ">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4 d-flex justify-content-center" style="flex-direction: column;align-items:center;">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-icon.svg') }}"
                                    class="mb-4" alt=""></a>
                            <h1 class="mb-1 fw-bold">Verify Account</h1>
                            <span>Hello, {{ Auth::user()->email }}</a></span>
                            <span>{{ __('Before proceeding, please check your email for a verification link.') }}</span>
                            <span>{{ __('If you did not receive the email') }},</span>
                        </div>
                        <!-- Form -->
                        @if (session('resent'))
                            {{ Toastr::warning('A fresh verification link has been sent to your email address.', '', ['positionClass' => 'toast-top-right', 'progressBar' => true, 'showMethod' => 'fadeIn', 'hideMethod' => 'fadeOut', 'preventDuplicates' => true]) }}
                        @endif
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}"
                            style="margin-top: -2rem;">
                            @csrf
                            <div class="d-grid">
                                <button type="submit" class="btn btn-login btn-block">
                                    {{ __('click here to request another') }}</button>

                            </div>
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
@endsection
