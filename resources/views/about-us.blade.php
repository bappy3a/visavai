@extends('layouts.frontend')
@section('title','About Us')

@section('content')
<main>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content">
                <h2 class="black">About Us</h2>
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('assets/img/banner/breadcrumb-ele.png') }}" alt="img" class="inner-element">
    </section>
    <!-- About Section Start -->
    <section class="about-section fix space-top">
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
                                        <img src="{{ asset('assets/img/icon/passport.png') }}" alt="img">
                                    </div>
                                    <h4 class="black">Your Passport to Adventure</h4>
                                </div>
                                <div class="line"></div>
                                <div class="about-info d-flex align-items-center gap-lg-3 gap-2">
                                    <div class="icon d-center n100-bg">
                                        <img src="{{ asset('assets/img/icon/passport.png') }}" alt="img">
                                    </div>
                                    <h4 class="black">Visa Your Gateway to the World</h4>
                                </div>
                            </div>
                            <a href="contact.html"
                                class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                                Learn More
                                <i class="fa-solid fa-arrow-right last"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-thumb position-relative reveal-left w-100 ms-xl-5">
                            <img src="{{ asset('assets/img/about/about-thumb-main.png') }}" alt="img" class="w-100">
                            <!-- Ele -->
                            <img src="{{ asset('assets/img/about/about-thumb-mainele.png') }}" alt="img" class="about-ele">
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
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/soudi-flag.png') }}" alt="img"></span>
                        <img src="{{ asset('assets/img/services/soudi.png') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/india-flag.png') }}" alt="img"></span>
                        <img src="{{ asset('assets/img/services/india.png') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/ireland-flag.png') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/ireland.png') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/bangladesh-flag.png') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/bangladesh.png') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/newzeland-flag.png') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/newzeland.png') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/scotland-flag.png') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/scotland.png') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
            </div>
            <div class="text-center mt-lg-5 mt-4">
                <a href="country.html"
                    class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden rounded-5 p2-bg">
                    View More
                    <i class="fa-solid fa-arrow-right last"></i>
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
                                <img src="{{ asset('assets/img/icon/unseen-icon1.png') }}" alt="img">
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
                                <img src="{{ asset('assets/img/icon/unseen-icon2.png') }}" alt="img">
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
                                <img src="{{ asset('assets/img/icon/unseen-icon3.png') }}" alt="img">
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
                                <img src="{{ asset('assets/img/icon/unseen-icon4.png') }}" alt="img">
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
    <!-- Picture Section Start -->
    <section class="picture-discover-section overflow-visible">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <div class="picture-dicover-content rounded-4 h-100">
                        <div class="icon rounded-circle d-center bg-white mb-3">
                            <img src="{{ asset('assets/img/icon/picture-doller.png') }}" alt="img">
                        </div>
                        <h3 class="mb-xxl-4 mb-4 pb-1p">
                            <a href="#" class="black fw-bold">
                                Picture your Journey with Visa Discover Wander
                            </a>
                        </h3>
                        <a href="contact.html"
                            class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                            Contact Us
                            <i class="fa-solid fa-arrow-right last"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="picture-thumb1 h-100 rounded-4 overflow-hidden reveal-left">
                        <img src="{{ asset('assets/img/services/picture-thumb.png') }}" alt="img" class="w-100 h-100 rounded-4">
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
                        <img src="{{ asset('assets/img/services/badge.png') }}" alt="img">
                        <h3>
                            <a href="#" class="black fw-bold">
                                Best Awarded Company
                            </a>
                        </h3>
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
                        <img src="{{ asset('assets/img/faq/faq1.png') }}" alt="img" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('js')
@endsection

@section('css')
@endsection
