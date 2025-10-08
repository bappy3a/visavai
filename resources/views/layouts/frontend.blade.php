<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - @yield('title') </title>
    <meta name="author" content="tecursive">
    <meta name="description" content="Vizoar - Immigration and Visa Consulting HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favs.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS start here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- CSS end here -->
</head>

<body>
<!-- Preloader Start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="position-relative">
            <img src="assets/img/logo/logo-sm.png" alt="logo-sm" width="60"
                 class="position-absolute top-50 start-50 translate-middle">
            <div class="spinner">
            </div>
        </div>
        <div class="txt-loading">
                <span data-text-preloader="V" class="letters-loading">
                    V
                </span>
            <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
            <span data-text-preloader="Z" class="letters-loading">
                    Z
                </span>
            <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
            <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
            <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
        </div>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>
<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="showing-thumb w-100 d-xl-block d-none">
                    <img src="assets/img/header/home-1.jpg" alt="img" class="w-100">
                </div>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4 class="n900-clr">Contact Info</h4>
                    <ul class="d-grid gap-2 mb-5">
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="#">3517 W. Gray St. Utica, Pennsylvania</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:alma.lawson@example.com"><span>alma.lawson@example.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="#">Sun-friday, 02am -09pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:(219)555-0114">(219) 555-0114</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="contact.html" class="theme-btn p2-bg text-center">
                                <span>
                                    Get A Quote
                                    <span class="ani-arrow">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </span>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<!-- Header Section Start -->
@include('inc.header')
<!-- Search Area Start -->
<!-- Main area start -->
@yield('content')
<!-- Main area end -->
<!-- Back to top button start -->
<button class="scroll-to-top position-fixed">
    <i class="fas fa-chevron-up"></i>
</button>
<!--<< Footer Section Start >>-->
@include('inc.fooder')
<!-- JS start here -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/spilitext-gsap.js') }}"></script>
<script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- JS end here -->
</body>

</html>
