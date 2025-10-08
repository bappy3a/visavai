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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favs.png">
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
<header id="header-sticky" class="header-1 position-absolute w-100">
    <div class="container">
        <div class="mega-menu-wrapper border">
            <div class="header-main style-2">
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html" class="header-logo">
                            <img src="assets/img/logo/logo.png" alt="logo-img">
                        </a>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="#">
                                            Home
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index2.html">Home 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Services
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="country.html">Country</a></li>
                                            <li><a href="country-details.html">Country Details</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">
                                            Blog
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">
                                            Pages
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="visa.html">Visa</a></li>
                                            <li><a href="visa-offer.html">Visa Offer</a></li>
                                            <li><a href="visa-details.html">Visa Details</a></li>
                                            <li><a href="story.html">Story</a></li>
                                            <li><a href="story-details.html">Story Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            Contact
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <a href="#0" class="search-trigger search-icon d-xl-none d-block">
                        <i class="fa-solid fa-magnifying-glass black"></i>
                    </a>
                    <div class="header__hamburger d-xl-none d-block my-auto">
                        <div class="sidebar__toggle">
                            <img src="assets/img/icon/menu.png" alt="icon">
                        </div>
                    </div>

                </div>
                <div class="header-hamburger-inner d-xl-flex gap-xxl-4 gap-xl-3 align-items-center d-none">
                    <a href="#0" class="search-trigger search-icon d-xl-block d-none fs-five">
                        <i class="fa-solid fa-magnifying-glass black"></i>
                    </a>
                    <div class="line"></div>
                    <div class="header__hamburger my-auto">
                        <div class="sidebar__toggle">
                            <img src="assets/img/icon/menu.png" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Search Area Start -->
<div class="search-wrap">
    <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
            <form method="get">
                <div class="search-field-holder">
                    <input type="search" class="main-search-input" placeholder="Search...">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Main area start -->
<main>
    <!-- Banner Section Start -->
    <section class="banner-section cmn-bg overflow-visible">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="hero-content-version1">
                        <h1 class="black">
                            <span class="p1-clr d-block">Visa typically</span> issued by a country's
                        </h1>
                        <p class="pra">
                            A visa is an official document that permits entry into a specific country. It indicates
                            the
                            holder's permission to stay
                            either temporarily
                        </p>
                        <div class="hero-selector">
                            <div class="selector-items">
                                <h4 class="black mb-3">Where are You Form?</h4>
                                <select name="flag-select">
                                    <option value="1">Select</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="3">United States</option>
                                    <option value="4">Canada</option>
                                    <option value="5">Australia</option>
                                </select>
                            </div>
                            <div class="selector-items">
                                <h4 class="black mb-3">Where Are You Going?</h4>
                                <select name="flag-select">
                                    <option value="1">Select</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="3">United States</option>
                                    <option value="4">Canada</option>
                                    <option value="5">Australia</option>
                                </select>
                            </div>
                        </div>
                        <a href="visa.html"
                           class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                            Get A E Visa
                            <i class="fa-solid fa-arrow-right-long last"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb1 btn-vivacity">
                        <img src="assets/img/banner/hero-thumb1.png" alt="img">
                        <div class="ratting-cmn-box">
                            <div class="d-flex align-items-center gap-xl-3 gap-2 mb-1">
                                <h3 class="black">4.9/5</h3> <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="fs-six pra">
                                Explore our trust score
                                customer’s reviews
                            </p>
                        </div>
                        <!-- ele -->
                        <img src="assets/img/banner/flga1.png" alt="img" class="flag1">
                        <img src="assets/img/banner/flga2.png" alt="img" class="flag2">
                        <img src="assets/img/banner/flga3.png" alt="img" class="flag3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Global access Section Start -->
    <section class="global-access-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-md-5 mb-4">
                <div class="col-lg-8">
                    <h2 class="text-center black visible-slowly-right">
                        Your Passport to AdventureVisa Your Global Access
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center g-sm-6 g-4">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="access-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="assets/img/icon/route.png" alt="img">
                            </div>
                            <span class="storke">
                                    01
                                </span>
                        </div>
                        <div class="cont">
                            <h3 class="black mb-2">Visa Guard Solutions</h3>
                            <p class=" fs-eight pra">A Visa allows individuals to enter a country for various
                                purposes
                                such as tourism</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="access-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="assets/img/icon/stamp.png" alt="img">
                            </div>
                            <span class="storke">
                                    02
                                </span>
                        </div>
                        <div class="cont">
                            <h3 class="black mb-2">Visa Blend Concierge</h3>
                            <p class=" fs-eight pra">A Visa allows individuals to enter a country for various
                                purposes
                                such as tourism</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="access-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="assets/img/icon/visa.png" alt="img">
                            </div>
                            <span class="storke">
                                    03
                                </span>
                        </div>
                        <div class="cont">
                            <h3 class="black mb-2">Dream Visa Assistance</h3>
                            <p class=" fs-eight pra">A Visa allows individuals to enter a country for various
                                purposes
                                such as tourism</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section Start -->
    <section class="about-section fix">
        <div class="about-wrapper section-padding">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-4 pb-2">
                                <h2 class="mb-3 fw-bold black visible-slowly-right">
                                    Dream Explore Unlock the Entire World Visa
                                </h2>
                                <p class="fs-six pra">
                                    A Visa allows individuals to enter a foreign country for various purposes such
                                    as
                                    tourism, work, study, or residency. It
                                    is a legal
                                </p>
                            </div>
                            <div class="about-information d-grid gap-xl-3 gap-3 white-bg">
                                <div class="about-info d-flex align-items-center gap-lg-3 gap-2">
                                    <div class="icon d-center n100-bg">
                                        <img src="assets/img/icon/passport.png" alt="img">
                                    </div>
                                    <h4 class="black">Your Passport to Adventure</h4>
                                </div>
                                <div class="line"></div>
                                <div class="about-info d-flex align-items-center gap-lg-3 gap-2">
                                    <div class="icon d-center n100-bg">
                                        <img src="assets/img/icon/passport.png" alt="img">
                                    </div>
                                    <h4 class="black">Visa Your Gateway to the World</h4>
                                </div>
                            </div>
                            <a href="visa-details.html"
                               class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                                Learn More
                                <i class="fa-solid fa-arrow-right-long last"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-thumb position-relative reveal-left w-100 ms-xl-5">
                            <img src="assets/img/about/about-thumb1.png" alt="img" class="w-100">
                            <!-- Ele -->
                            <img src="assets/img/about/about-flag.png" alt="img" class="about-ele">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Adventure access Section Start -->
    <section class="adventure-access-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-md-5 mb-4">
                <div class="col-lg-8">
                    <h2 class="text-center black visible-slowly-right">
                        Your Passport to AdventureVisa Your Global Access
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center g-sm-6 g-4">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                       class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="assets/img/services/soudi-flag.png" alt="img"></span>
                        <img src="assets/img/services/soudi.png" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                       class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="assets/img/services/india-flag.png" alt="img"></span>
                        <img src="assets/img/services/india.png" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                       class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/ireland-flag.png"
                                                             alt="img"></span>
                        <img src="assets/img/services/ireland.png" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                       class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/bangladesh-flag.png"
                                                             alt="img"></span>
                        <img src="assets/img/services/bangladesh.png" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                       class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/newzeland-flag.png"
                                                             alt="img"></span>
                        <img src="assets/img/services/newzeland.png" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                       class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/scotland-flag.png"
                                                             alt="img"></span>
                        <img src="assets/img/services/scotland.png" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
            </div>
            <div class="text-center mt-lg-5 mt-4">
                <a href="country.html"
                   class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden rounded-5 p2-bg">
                    View More
                    <i class="fas fa-arrow-right last"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Unseen passport Section Start -->
    <section class="unseen-passport-section fix space-bottom">
        <div class="container">
            <div
                class="row g-3 text-lg-start text-center justify-content-lg-between justify-content-center align-items-end mb-md-5 mb-4">
                <div class="col-lg-7">
                    <h2 class="black visible-slowly-right">
                        Explore the Unseen with Visa
                        Passport to Discovery
                    </h2>
                </div>
                <div class="col-lg-5">
                    <p class="pra fs-six">
                        A Visa allows individuals to enter a foreign country for various purposes such as tourism
                        work
                    </p>
                </div>
            </div>
            <div class="row justify-content-center g-sm-6 g-4">
                <div class="col-md-6">
                    <div class="unseen-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>
                                <a href="visa-details.html" class="black">Business Visa</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="assets/img/icon/unseen-icon1.png" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            A Visa allows individuals to enter a country for various purposes such tourism A Visa
                            allows
                            individuals to enter a
                            country various A Visa allows individuals to the enter a country for various purposes
                            such
                            as tourism A Visa allows
                        </p>
                        <a href="visa-details.html"
                           class="read-more fs20 fw-semibold black heading-font d-block d-flex align-items-center">
                            View More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="unseen-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>
                                <a href="visa-details.html" class="black">Student Visa</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="assets/img/icon/unseen-icon2.png" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            A Visa allows individuals to enter a country for various purposes such tourism A Visa
                            allows
                            individuals to enter a
                            country various A Visa allows individuals to the enter a country for various purposes
                            such
                            as tourism A Visa allows
                        </p>
                        <a href="visa-details.html"
                           class="read-more fs20 fw-semibold black heading-font d-block d-flex align-items-center">
                            View More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="unseen-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>
                                <a href="visa-details.html" class="black">Working Visa</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="assets/img/icon/unseen-icon3.png" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            A Visa allows individuals to enter a country for various purposes such tourism A Visa
                            allows
                            individuals to enter a
                            country various A Visa allows individuals to the enter a country for various purposes
                            such
                            as tourism A Visa allows
                        </p>
                        <a href="visa-details.html"
                           class="read-more fs20 fw-semibold black heading-font d-block d-flex align-items-center">
                            View More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="unseen-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>
                                <a href="visa-details.html" class="black">Tourist Visa</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="assets/img/icon/unseen-icon4.png" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            A Visa allows individuals to enter a country for various purposes such tourism A Visa
                            allows
                            individuals to enter a
                            country various A Visa allows individuals to the enter a country for various purposes
                            such
                            as tourism A Visa allows
                        </p>
                        <a href="visa-details.html"
                           class="read-more fs20 fw-semibold black heading-font d-block d-flex align-items-center">
                            View More <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Start -->
    <section class="testimonial-section white-bg fix">
        <div class="container">
            <div class="row g-6 align-items-center">
                <div class="col-lg-6">
                    <div class="testimonial-thumb1 mb-md-0 mb-4">
                        <img src="assets/img/testimonial/testimonial-thumb1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="swiper testimonial-slider position-relative">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-items">
                                    <div class="d-flex align-items-end justify-content-between flex-wrap gap-2">
                                        <div class="d-flex align-items-center gap-xxl-4 gap-xl-3 gap-2">
                                            <div class="cont">
                                                <h4 class="black mb-1">Michael Patricia</h4>
                                                <span class="fs-six pra">Web Designer</span>
                                            </div>
                                        </div>
                                        <div class="ratting">
                                            <i class="fa-solid fa-star p2-clr fs-six"></i>
                                            <i class="fa-solid fa-star p2-clr fs-six"></i>
                                            <i class="fa-solid fa-star p2-clr fs-six"></i>
                                            <i class="fa-solid fa-star n200-clr fs-six"></i>
                                            <i class="fa-solid fa-star n200-clr fs-six"></i>
                                        </div>
                                    </div>
                                    <p class="fs-five pra mt-xxl-4 mt-4 pt-xxl-1">
                                        Visa services provide documentation and support for individual permission to
                                        enter stay,
                                        or work in a foreign country.
                                        These services assist with visa
                                    </p>
                                    <!-- Ele -->
                                    <img src="assets/img/testimonial/quote-michael.png" alt="img"
                                         class="testi-quote">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrow-area1 d-flex align-items-center gap-3">
                            <button type="button" class="array-prev">
                                <svg width="84" height="30" viewBox="0 0 84 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M82 13C83.1046 13 84 13.8954 84 15C84 16.1046 83.1046 17 82 17L82 13ZM0.585785 16.4142C-0.195259 15.6332 -0.195259 14.3668 0.585785 13.5858L13.3137 0.85787C14.0948 0.0768215 15.3611 0.0768214 16.1421 0.85787C16.9232 1.63892 16.9232 2.90525 16.1421 3.6863L4.82843 15L16.1421 26.3137C16.9232 27.0948 16.9232 28.3611 16.1421 29.1421C15.3611 29.9232 14.0948 29.9232 13.3137 29.1421L0.585785 16.4142ZM82 17L2 17L2 13L82 13L82 17Z"
                                        fill="#090F1F" />
                                </svg>
                            </button>
                            <button type="button" class="array-next">
                                <svg width="84" height="30" viewBox="0 0 84 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 13C0.895431 13 9.65646e-08 13.8954 0 15C-9.65646e-08 16.1046 0.89543 17 2 17L2 13ZM83.4142 16.4142C84.1953 15.6332 84.1953 14.3668 83.4142 13.5858L70.6863 0.85787C69.9052 0.0768215 68.6389 0.0768214 67.8579 0.85787C67.0768 1.63892 67.0768 2.90525 67.8579 3.6863L79.1716 15L67.8579 26.3137C67.0768 27.0948 67.0768 28.3611 67.8579 29.1421C68.6389 29.9232 69.9052 29.9232 70.6863 29.1421L83.4142 16.4142ZM2 17L82 17L82 13L2 13L2 17Z"
                                        fill="#83CD8F" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Picture Section Start -->
    <section class="picture-discover-section section-padding fix">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="picture-dicover-content rounded-4 h-100">
                        <div class="icon rounded-circle d-center bg-white mb-3">
                            <img src="assets/img/icon/picture-doller.png" alt="img">
                        </div>
                        <h3 class="mb-xxl-4 mb-4 pb-1">
                            <a href="#" class="black fw-bold">
                                Picture your Journey with Visa Discover Wander
                            </a>
                        </h3>
                        <a href="contact.html"
                           class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                            Contact Us
                            <i class="fa-solid fa-arrow-right-long last"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="picture-thumb1 h-100 rounded-4 overflow-hidden reveal-left">
                        <img src="assets/img/services/picture-thumb.png" alt="img" class="w-100 h-100 rounded-4">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="counter-area1">
                        <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                            <div class="content d-flex align-items-center gap-0">
                                <span class="odometer" data-count="800"></span>
                                <span>+</span>
                            </div>
                            <p class="fs-eight pra">Complete <br> Project</p>
                        </div>
                        <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                            <div class="content d-flex align-items-center gap-0">
                                <span class="odometer" data-count="200"></span>
                                <span>+</span>
                            </div>
                            <p class="fs-eight pra">Team <br> Member</p>
                        </div>
                        <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                            <div class="content d-flex align-items-center gap-0">
                                <span class="odometer" data-count="100"></span>
                                <span>+</span>
                            </div>
                            <p class="fs-eight pra">Client <br> Review</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="best-badge rounded-4 h-100 d-flex align-items-center gap-xl-4 gap-3">
                        <img src="assets/img/services/badge.png" alt="img">
                        <h3>
                            <a href="visa-offer.html" class="black fw-bold">
                                Best Awarded Company
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gateway Section Start -->
    <section class="gateway-section space-bottom fix">
        <div class="container">
            <div
                class="d-flex gap-3 flex-sm-nowrap flex-wrap align-items-end justify-content-sm-between justify-content-center pb-md-5 mb-4 pb-2">
                <h2 class="text-sm-start text-center black visible-slowly-right">
                    Our Gateway to the World <br>
                    Explore in Style
                </h2>
                <div class="array-button">
                    <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="gateway-wrapper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gateway-items rounded-4">
                            <img src="assets/img/services/gateway-thumb1.png" alt="img" class="w-100 rounded-4">
                            <div class="content rounded-4 bg-white">
                                <h3 class="mb-xxl-3 mb-2">
                                    <a href="visa-offer.html" class="black">
                                        Seat Coaching
                                    </a>
                                </h3>
                                <p class="fs-eight pra">
                                    A Visa allows individuals to enter a country for various purposes
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gateway-items rounded-4">
                            <img src="assets/img/services/gateway-thumb2.png" alt="img" class="w-100 rounded-4">
                            <div class="content rounded-4 bg-white">
                                <h3 class="mb-xxl-3 mb-2">
                                    <a href="visa-offer.html" class="black">
                                        Ielts Coaching
                                    </a>
                                </h3>
                                <p class="fs-eight pra">
                                    A Visa allows individuals to enter a country for various purposes
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gateway-items rounded-4">
                            <img src="assets/img/services/gateway-thumb3.png" alt="img" class="w-100 rounded-4">
                            <div class="content rounded-4 bg-white">
                                <h3 class="mb-xxl-3 mb-2">
                                    <a href="visa-offer.html" class="black">
                                        Seat Coaching
                                    </a>
                                </h3>
                                <p class="fs-eight pra">
                                    A Visa allows individuals to enter a country for various purposes
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gateway Section end -->
    <!-- Team Member Section Start -->
    <section class="team-section about-section fix">
        <div class="about-wrapper section-padding">
            <div class="container">
                <h2 class="mb-lg-5 mb-4 text-center fw-bold black visible-slowly-right">
                    Our New Best Team Member
                </h2>
                <div class="team-member-wrapper">
                    <div class="team-member-item rounded-4">
                        <div class="title-ara">
                            <h3>
                                <a href="visa-details.html" class="black">
                                    Jane Cooper
                                </a>
                            </h3>
                            <p class="pra">
                                Web Designer
                            </p>
                        </div>
                        <p class="pra fs-six middle-pra">
                            A Visa allows individuals to enter a country for various such tourism A Visa allows
                            individuals
                        </p>
                        <div
                            class="social-wrapper d-flex justify-content-lg-start justify-content-center align-items-center gap-xl-3 gap-2">
                            <a href="#" class=" black"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class=" black"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class=" black"><i class="fab fa-instagram"></i></a>
                            <a href="#" class=" black"><i class="fa-brands fa-x"></i></a>
                        </div>
                        <!-- ele -->
                        <img src="assets/img/services/team-member.png" alt="img"
                             class="team-ele rounded-4 d-xl-block d-none">
                    </div>
                    <div class="team-member-item rounded-4">
                        <div class="title-ara">
                            <h3>
                                <a href="visa-details.html" class="black">
                                    Ronald Richards
                                </a>
                            </h3>
                            <p class="pra">
                                Medical Assistant
                            </p>
                        </div>
                        <p class="pra fs-six middle-pra">
                            A Visa allows individuals to enter a country for various such tourism A Visa allows
                            individuals
                        </p>
                        <div
                            class="social-wrapper d-flex justify-content-lg-start justify-content-center align-items-center gap-xl-3 gap-2">
                            <a href="#" class=" black"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class=" black"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class=" black"><i class="fab fa-instagram"></i></a>
                            <a href="#" class=" black"><i class="fa-brands fa-x"></i></a>
                        </div>
                        <!-- ele -->
                        <img src="assets/img/services/team-member.png" alt="img"
                             class="team-ele rounded-4 d-xl-block d-none">
                    </div>
                    <div class="team-member-item rounded-4">
                        <div class="title-ara">
                            <h3>
                                <a href="visa-details.html" class="black">
                                    Theresa Webb
                                </a>
                            </h3>
                            <p class="pra">
                                Marketing Coordinator
                            </p>
                        </div>
                        <p class="pra fs-six middle-pra">
                            A Visa allows individuals to enter a country for various such tourism A Visa allows
                            individuals
                        </p>
                        <div
                            class="social-wrapper d-flex justify-content-lg-start justify-content-center align-items-center gap-xl-3 gap-2">
                            <a href="#" class=" black"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class=" black"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class=" black"><i class="fab fa-instagram"></i></a>
                            <a href="#" class=" black"><i class="fa-brands fa-x"></i></a>
                        </div>
                        <!-- ele -->
                        <img src="assets/img/services/team-member.png" alt="img"
                             class="team-ele rounded-4 d-xl-block d-none">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section Start -->
    <section class="pricing-section space-top fix">
        <div class="container">
            <div
                class="d-flex gap-3 flex-sm-nowrap flex-wrap align-items-end justify-content-sm-between justify-content-center pb-md-5 mb-4">
                <h2 class="black visible-slowly-right">
                    Our Pricing Plan
                </h2>
                <ul class="nav pricing-tabbing nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Daily</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Monthy</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row g-lg-4 g-4 justify-content-center align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-items items1">
                                <div class="pricing-head d-grid gap-3">
                                    <div
                                        class="price-box d-grid p2-bg rounded-circle gap-1 align-items-center text-center black">
                                        <div class="box">
                                            <h2 class="black">$29</h2>
                                            <span class="pra">Per Month</span>
                                        </div>
                                    </div>
                                    <h4 class="black">Basic Plan</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Winning for Your Startup
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Your Event, Your Memories
                                    </li>
                                </ul>
                                <a href="contact.html"
                                   class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    Get Started
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-items items2">
                                <div class="pricing-head d-grid gap-3">
                                    <div
                                        class="price-box d-grid p1-bg rounded-circle gap-1 align-items-center text-center black">
                                        <div class="box">
                                            <h2 class="black">$19</h2>
                                            <span class="pra">Per Month</span>
                                        </div>
                                    </div>
                                    <h4 class="black">Normal Plan</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Winning for Your Startup
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Your Event, Your Memories
                                    </li>
                                </ul>
                                <a href="contact.html"
                                   class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    Get Started
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-items items3">
                                <div class="pricing-head d-grid gap-3">
                                    <div
                                        class="price-box d-grid p3-bg rounded-circle gap-1 align-items-center text-center black">
                                        <div class="box">
                                            <h2 class="black">$35</h2>
                                            <span class="pra">Per Month</span>
                                        </div>
                                    </div>
                                    <h4 class="black">Hard Plan</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Winning for Your Startup
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Your Event, Your Memories
                                    </li>
                                </ul>
                                <a href="contact.html"
                                   class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    Get Started
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row g-lg-4 g-4 justify-content-center align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-items items2">
                                <div class="pricing-head d-grid gap-3">
                                    <div
                                        class="price-box d-grid p1-bg rounded-circle gap-1 align-items-center text-center black">
                                        <div class="box">
                                            <h2 class="black">$19</h2>
                                            <span class="pra">Per Month</span>
                                        </div>
                                    </div>
                                    <h4 class="black">Normal Plan</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Winning for Your Startup
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Your Event, Your Memories
                                    </li>
                                </ul>
                                <a href="contact.html"
                                   class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    Get Started
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-items items1">
                                <div class="pricing-head d-grid gap-3">
                                    <div
                                        class="price-box d-grid p2-bg rounded-circle gap-1 align-items-center text-center black">
                                        <div class="box">
                                            <h2 class="black">$29</h2>
                                            <span class="pra">Per Month</span>
                                        </div>
                                    </div>
                                    <h4 class="black">Basic Plan</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Winning for Your Startup
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Your Event, Your Memories
                                    </li>
                                </ul>
                                <a href="contact.html"
                                   class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    Get Started
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-items items3">
                                <div class="pricing-head d-grid gap-3">
                                    <div
                                        class="price-box d-grid p3-bg rounded-circle gap-1 align-items-center text-center black">
                                        <div class="box">
                                            <h2 class="black">$35</h2>
                                            <span class="pra">Per Month</span>
                                        </div>
                                    </div>
                                    <h4 class="black">Hard Plan</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Winning for Your Startup
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Mistakes To Avoid
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> Your Event, Your Memories
                                    </li>
                                </ul>
                                <a href="contact.html"
                                   class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    Get Started
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section Start -->
    <section class="faq-section section-padding fix">
        <div class="container">
            <h2 class="black visible-slowly-right text-center pb-md-5 mb-4">
                Ask Some Question
            </h2>
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="accordion border-0 d-flex flex-column gap-xxl-4 gap-3" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What types of visas are available?
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            A Visa allows individuals to enter a country for various such tourism A
                                            Visa
                                            allows individuals A Visa allows
                                            individuals A Visa allows individuals
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does it take to process a visa?
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            A Visa allows individuals to enter a country for various such tourism A
                                            Visa
                                            allows individuals A Visa allows
                                            individuals A Visa allows individuals
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Do I need a visa?
                                </button>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            A Visa allows individuals to enter a country for various such tourism A
                                            Visa
                                            allows individuals A Visa allows
                                            individuals A Visa allows individuals
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                    What is the a visa and a passport?
                                </button>
                                <div id="collapsefour" class="accordion-collapse collapse"
                                     aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            A Visa allows individuals to enter a country for various such tourism A
                                            Visa
                                            allows individuals A Visa allows
                                            individuals A Visa allows individuals
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4 faq-thumb1 w-100 reveal-left overflow-hidden">
                        <img src="assets/img/faq/faq1.png" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section Start -->
    <section class="news-section space-bottom fix">
        <div class="container">
            <div class="section-title-area align-items-end mb-60">
                <div class="section-title">
                    <h2 class="black fw-bold visible-slowly-right">
                        Our best Recent Blog <br> And News
                    </h2>
                </div>
                <a href="blog.html"
                   class="common-btn heading-font box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden p1-bg rounded100">
                    View More
                    <i class="fas fa-arrow-right last"></i>
                </a>
            </div>
            <div class="news-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="news-single-items rounded-4 overflow-hidden style1">
                            <div class="news-image reveal-left">
                                <img src="assets/img/blog/blog-grid1.png" alt="news-img">
                            </div>
                            <div class="news-content border rounded-bottom-4">
                                <ul
                                    class="comment-tag d-flex align-items-center gap-xl-4 gap-lg-3 gap-2 mb-lg-2 mb-2">
                                    <li>
                                        <button type="button" class="black fw-500 fs-eight"><i
                                                class="fa-solid fa-user black"></i> By admin</button>
                                    </li>
                                    <li>
                                        <button type="button" class="black fw-500 fs-eight"><i
                                                class="fa-solid fa-calendar-days black"></i> October 19,
                                            2022</button>
                                    </li>
                                </ul>
                                <h3 class="mb-2 pb-1">
                                    <a href="blog-details.html" class="black visible-slowly-right">
                                        Empower Your Travels
                                    </a>
                                </h3>
                                <p class="fs-eight mb-lg-4 mb-3">
                                    A Visa allows individuals to enter a country for a various such tourism A Visa
                                    allows
                                </p>
                                <a href="blog-details.html"
                                   class="read-more fs20 fw-semibold black heading-font d-block d-flex align-items-center">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="news-single-items rounded-4 overflow-hidden style1">
                            <div class="news-image reveal-left">
                                <img src="assets/img/blog/blog-grid2.png" alt="news-img">
                            </div>
                            <div class="news-content border rounded-bottom-4">
                                <ul
                                    class="comment-tag d-flex align-items-center gap-xl-4 gap-lg-3 gap-2 mb-lg-2 mb-2">
                                    <li>
                                        <button type="button" class="black fw-500 fs-eight"><i
                                                class="fa-solid fa-user black"></i> By admin</button>
                                    </li>
                                    <li>
                                        <button type="button" class="black fw-500 fs-eight"><i
                                                class="fa-solid fa-calendar-days black"></i> October 19,
                                            2022</button>
                                    </li>
                                </ul>
                                <h3 class="mb-2 pb-1">
                                    <a href="blog-details.html" class="black visible-slowly-right">
                                        Unlock New Horizons
                                    </a>
                                </h3>
                                <p class="fs-eight mb-lg-4 mb-3">
                                    A Visa allows individuals to enter a country for a various such tourism A Visa
                                    allows
                                </p>
                                <a href="blog-details.html"
                                   class="read-more fs20 fw-semibold black heading-font d-block d-flex align-items-center">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="news-single-items rounded-4 overflow-hidden style1">
                            <div class="news-image reveal-left">
                                <img src="assets/img/blog/blog-grid3.png" alt="news-img">
                            </div>
                            <div class="news-content border rounded-bottom-4">
                                <ul
                                    class="comment-tag d-flex align-items-center gap-xl-4 gap-lg-3 gap-2 mb-lg-2 mb-2">
                                    <li>
                                        <button type="button" class="black fw-500 fs-eight"><i
                                                class="fa-solid fa-user black"></i> By admin</button>
                                    </li>
                                    <li>
                                        <button type="button" class="black fw-500 fs-eight"><i
                                                class="fa-solid fa-calendar-days black"></i> October 19,
                                            2022</button>
                                    </li>
                                </ul>
                                <h3 class="mb-2 pb-1">
                                    <a href="blog-details.html" class="black visible-slowly-right">
                                        Venture Every where
                                    </a>
                                </h3>
                                <p class="fs-eight mb-lg-4 mb-3">
                                    A Visa allows individuals to enter a country for a various such tourism A Visa
                                    allows
                                </p>
                                <a href="blog-details.html"
                                   class="read-more fs20 fw-semibold black heading-font d-block d-flex align-items-center">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main area end -->
<!-- Back to top button start -->
<button class="scroll-to-top position-fixed">
    <i class="fas fa-chevron-up"></i>
</button>
<!--<< Footer Section Start >>-->
<footer class="footer-section blackbg fix pt-80">
    <div class="container">
        <div class="newsletter-wrap">
            <div class="newsletter-inner text-center">
                <div class="mb-4">
                    <h2 class="white mb-2">Newsletter</h2>
                    <p class="white fs-six">
                        A visa is an official document that permits entry into a specific country. It indicates the
                        holder's permission to
                        stay
                    </p>
                </div>
                <form action="#" class="gap-xxl-4 gap-xl-3 gap-lg-2 gap-1">
                    <input type="email" placeholder="Your email...">
                    <button type="submit" class="subscribe">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-widgets-wrapper">
            <div class="row g-lg-4 g-5 justify-content-between">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget footer-widgets-pragraph">
                        <div class="widget-head">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-white.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p class="pra2 fs-eight">
                                A visa is an official document that permits a entry into a specific country. It
                                indicates
                                the holder's permission to
                                stay either
                            </p>
                            <div class="foot-address d-flex align-items-center gap-3 mb-xl-4 mb-3">
                                <div class="icon d-center rounded-circle">
                                    <i class="fa-solid fa-location-dot white"></i>
                                </div>
                                <div class="cont">
                                        <span class="fs-six white d-block mb-xl-2 mb-1">
                                            Address
                                        </span>
                                    <h4 class="white">
                                        <a href="#" class="white">66 Broklyant,New India</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="foot-address d-flex align-items-center gap-3">
                                <div class="icon d-center rounded-circle">
                                    <i class="fa-solid fa-phone white"></i>
                                </div>
                                <div class="cont">
                                        <span class="fs-six white d-block mb-xl-2 mb-1">
                                            Phone Number
                                        </span>
                                    <h4 class="white">
                                        <a href="tel:0123456789101" class="white">012 345 678 9101</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget d-flex justify-content-lg-center footer-widgets-pragraph">
                        <div class="boxes">
                            <div class="widget-head">
                                <h3>Social Media</h3>
                            </div>
                            <div class="footer-content">
                                <p class="pra2 fs-eight">
                                    A visa is an official document that a permits entry into a specific country. It
                                    indicates
                                    holder's permission
                                </p>
                                <div class="social-wrapper d-flex align-items-center">
                                    <a href="#" class=" black"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class=" black"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#" class=" black"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class=" black"><i class="fa-brands fa-x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget d-flex justify-content-lg-center">
                        <div class="boxes">
                            <div class="widget-head">
                                <h3>Page</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="about.html">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="country.html">
                                        Service
                                    </a>
                                </li>
                                <li>
                                    <a href="country.html">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Blog And News
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div
                class="footer-wrapper d-flex flex-md-nowrap flex-wrap gap-2 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                <p class="cmn-white body-font fs-six">
                    &copy; Vizoar 2024 | All Rights Reserved
                </p>
                <ul class="footer-menu">
                    <li>
                        <a href="contact.html" class="fs-six body-font cmn-white">
                            Terms & Condition
                        </a>
                    </li>
                    <li>
                        <a href="contact.html" class="fs-six body-font cmn-white">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="contact.html" class="fs-six body-font cmn-white">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

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
