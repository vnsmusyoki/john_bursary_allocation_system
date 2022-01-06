<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">

<head>
    <!-- Site Title-->
    <title>County Bursary Allocations System</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

    </style>
</head>

<body>


    <!-- Page-->
    <div class="page text-center">
        <!-- Page Header-->
        <header class="page-head header-panel-absolute">
            <!-- RD Navbar Transparent-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-humburger-menu" data-lg-auto-height="true"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-stick-up="false"
                    data-lg-hover-on="false" data-auto-height="false">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <h4 class="panel-title d-lg-none">Home</h4>
                        </div>
                        <div class="rd-navbar-menu-wrap clearfix">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <div class="rd-navbar-mobile-header-wrap">
                                        <!--Navbar Brand Mobile-->
                                        <div class="rd-navbar-mobile-brand"><a href="{{ url('/') }}"><img
                                                    width='136' height='138'
                                                    src='{{ asset('front/images/logo-170x172.png') }}' alt='' /></a>
                                        </div>
                                    </div>
                                   
                                    <div class="rd-navbar-search-mobile" id="rd-navbar-search-mobile">
                                        <form class="rd-navbar-search-form search-form-icon-right rd-search" action="#"
                                            method="GET">
                                            <div class="form-wrap">
                                                <label class="form-label"
                                                    for="rd-navbar-mobile-search-form-input">Search...</label>
                                                <input
                                                    class="rd-navbar-search-form-input form-input form-input-gray-lightest"
                                                    id="rd-navbar-mobile-search-form-input" type="text" name="s"
                                                    autocomplete="off" />
                                            </div>
                                            <button class="icon fa fa-search rd-navbar-search-button"
                                                type="submit"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Logo & address-->
            <section class="section section-32 position-absolute d-none d-lg-block">
                <div class="container container-wide">
                    <div class="row justify-content-md-between align-items-md-center">
                        <div class="col-lg-4 col-xl-3">
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand text-start">
                                <a class="d-inline-block" href="{{ url('/') }}">
                                    <div class="unit align-items-sm-center unit-md flex-lg-row unit-spacing-xxs">
                                        <div class="unit-left"><img
                                                src="{{ asset('front/images/logo-170x172.png') }}" width="136"
                                                height="138" alt=""></div>
                                        <div class="unit-body text-xxl-start">
                                            <div>
                                                <div class="h6 barnd-name fw-bold text-white">Bursary</div>
                                            </div>
                                            <div>
                                                <div class="brand-slogan fst-italic font-accent text-white">Allocations
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-5 col-xxl-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="unit flex-row align-items-start unit-spacing-xs text-start header-info">
                                        <div class="unit-left"></div>
                                        <div class="unit-body"><a class="text-base"
                                                href="{{ url('register') }}" class="btn btn-danger">Create Account</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="unit flex-row align-items-start unit-spacing-xs header-info">
                                         
                                        <div class="unit-body">
                                            <a href="{{ route('login') }}" class="text-base">Account Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <section>
            <!-- Swiper-->
            <div class="swiper-container swiper-slider swiper-slider-1" data-height="100vh" data-loop="false"
                data-dragable="false" data-min-height="480px" data-slide-effect="true">
                <div class="swiper-wrapper">
                    <div style="background-image:url({{ asset('front/images/slide-02-1920x810.jpg') }});height:480px;width:100vw;"
                        style="background-position: 80% center">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-sm-center justify-content-xl-start">
                                    <div class="col-lg-9 text-lg-start col-sm-10">
                                        <div class="jumbotron-custom bg-default-transparent">
                                            <div class="top-banner" style="z-index:9">
                                                <h4 class="text-white">Quality Higher Education</h4>
                                            </div>
                                            <div>

                                            </div>
                                            <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60">
                                                <h5 class="text-regular font-default">A smarter tomorrow starts today
                                                    and it starts online.</h5>
                                            </div>
                                            <div class="offset-top-20 offset-xl-top-40"><a class="btn button-primary"
                                                    href="{{ route('login') }}">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-xl bg-default">
            <div class="container">
                <div class="row row-50 text-md-start align-items-md-center justify-content-md-between">
                    <div class="col-md-5 col-lg-4 order-md-2"><a href="index.html"><img
                                class="img-responsive d-inline-block"
                                src="{{ asset('front/images/logo-326x329.png') }}" width="326" height="329"
                                alt=""></a></div>
                    <div class="col-md-7 col-lg-7 order-md-1">
                        <h2 class="fw-bold">A Few Words <br class="d-none d-xl-inline-block"> About the
                            Bursaries</h2>
                        <hr class="divider bg-madison divider-md-0">
                        <div class="offset-top-35 offset-lg-top-60">
                            <p>The Higher Education Loans Board (HELB) is a statutory body established in July 1995 by an Act of Parliament ‘Higher Education Loans Board Act’ Cap 213A.It is a state corporation in the Ministry of Education.The Board is domiciled and operates within the republic of Kenya.</p>
                        </div>
                        <div class="offset-top-30"><a class="btn btn-icon btn-icon-right button-madison"
                                href="#"><span class="icon fa fa-arrow-right"></span><span>Learn
                                    More</span></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Our Featured Courses-->

        <section class="section section-xl bg-default">
            <div class="container">
                <h2 class="fw-bold view-animate fadeInRightSm delay-04">How it Works</h2>
                <hr class="divider bg-madison view-animate fadeInRightSm delay-06">
                <div class="offset-top-35 offset-md-top-60 view-animate fadeInRightSm delay-08">Getting a bursary is now
                    easy. <br class="d-none d-xl-inline"> Follow these steps indicated here.</div>
                <div class="row row-65 justify-content-sm-center justify-content-lg-start offset-top-65 counters">
                    <div class="col-md-6 col-lg-3">
                        <div class="unit flex-column unit-spacing-xs view-animate zoomInSmall delay-04">
                            <div class="unit-left"><span
                                    class="icon mdi mdi-chart-pie icon-xl icon-primary"></span></div>
                            <div class="unit-body">
                                <h6 class="fw-bold">Update Your Profile</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="unit flex-column unit-spacing-xs view-animate zoomInSmall delay-06">
                            <div class="unit-left"><span class="icon mdi mdi-gavel icon-xl icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h6 class="fw-bold">Provide honest responses in your response</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="unit flex-column unit-spacing-xs view-animate zoomInSmall delay-08">
                            <div class="unit-left"><span class="icon mdi mdi-leaf icon-xl icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h6 class="fw-bold">School confirms your details</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="unit flex-column unit-spacing-xs view-animate zoomInSmall delay-1">
                            <div class="unit-left"><span class="icon mdi mdi-bank icon-xl icon-primary"></span>
                            </div>
                            <div class="unit-body">
                                <h6 class="fw-bold">Notified Allocated Amount</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action-->
       

 
        <!-- Footer Classic-->
        <footer class="page-footer bg-catskill section-xs">
            <div class="container">
                <div class="row row-20 justify-content-sm-center align-items-md-center text-lg-start">
                    <div class="col-sm-10 col-lg-6">
                        <!--Footer brand-->
                        <a class="d-inline-block" href="index.html">
                            <div class="unit align-items-sm-center flex-column unit-md flex-lg-row unit-spacing-xxs">
                                <div class="unit-left"><img class="img-responsive d-inline-block"
                                        src="{{ asset('front/images/logo-170x172.png') }}" width="70" height="70"
                                        alt=""></div>
                                <div class="unit-body text-xxl-start">
                                    <div>
                                        <h6 class="barnd-name text-ubold">Bursary Allocation System</h6>
                                    </div>
                                    <div>
                                        <p class="brand-slogan text-gray fst-italic font-accent">2022</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-10 col-lg-6 text-lg-end">
                        <p class="rights"><span>&copy;&nbsp;</span><span
                                class="copyright-year"></span><span>.&nbsp;</span><span>All Rights
                                Reserved</span><span>.&nbsp;</span><a class="text-dark"
                                href="privacy-policy.html">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0"
            width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script>
    <!-- End Google Tag Manager -->
</body>

</html>
