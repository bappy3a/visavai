@extends('layouts.frontend')
@section('title','About Us')

@section('content')
<main>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content">
                <h2 class="black">আমাদের সম্পর্কে</h2>
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="{{ route('home') }}">হোম</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>আমাদের সম্পর্কে</li>
                </ul>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('assets/img/banner/breadcrumb-ele.webp') }}" alt="img" class="inner-element">
    </section>
    <!-- About Section Start -->
    <section class="about-section fix space-top">
        <div class="about-wrapper section-padding">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-4 pb-2">
                                <h2 class="mb-3 fw-bold black">
                                    প্রতারণা এড়ান, নিশ্চিন্তে ভ্রমণ করুন
                                </h2>
                                <p class="fs-six pra">
                                    প্রতি বছর হাজার হাজার বাংলাদেশী মানুষ নকল ভিসা, ভুয়া টিকেট বা জাল অফার লেটারের কারণে প্রতারিত হন। "ভিসাভাই" এর লক্ষ্য হলো এই প্রতারণা চক্র বন্ধ করা। আমরা সরাসরি এম্বাসি ও এয়ারলাইনস এর ডাটাবেসের সাথে আপনার তথ্য যাচাই করে শতভাগ সঠিক রিপোর্ট প্রদান করি।
                                </p>
                            </div>
                            <div class="about-information d-grid gap-xl-3 gap-3 white-bg">
                                <div class="about-info d-flex align-items-center gap-lg-3 gap-2">
                                    <div class="icon d-center n100-bg">
                                        <img src="{{ asset('assets/img/icon/passport.webp') }}" alt="img">
                                    </div>
                                    <h4 class="black">আপনার নিরাপদ যাত্রার নিশ্চয়তা</h4>
                                </div>
                                <div class="line"></div>
                                <div class="about-info d-flex align-items-center gap-lg-3 gap-2">
                                    <div class="icon d-center n100-bg">
                                        <img src="{{ asset('assets/img/icon/passport.webp') }}" alt="img">
                                    </div>
                                    <h4 class="black">ভিসা যাচাইয়ে আপনার বিশ্বস্ত সঙ্গী</h4>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}"
                                class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                                আরও জানুন
                                <i class="fa-solid fa-arrow-right last"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-thumb position-relative reveal-left w-100 ms-xl-5">
                            <img src="{{ asset('assets/img/about/about-thumb-main.webp') }}" alt="img" class="w-100">
                            <!-- Ele -->
                            <img src="{{ asset('assets/img/about/about-thumb-mainele.webp') }}" alt="img" class="about-ele">
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
                    <h2 class="text-center black">
                        জনপ্রিয় দেশগুলোর ভিসা যাচাই করুন
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center g-sm-6 g-4">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/soudi-flag.webp') }}" alt="img"></span>
                        <img src="{{ asset('assets/img/services/soudi.webp') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/india-flag.webp') }}" alt="img"></span>
                        <img src="{{ asset('assets/img/services/india.webp') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/ireland-flag.webp') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/ireland.webp') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/bangladesh-flag.webp') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/bangladesh.webp') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/newzeland-flag.webp') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/newzeland.webp') }}" alt="img" class="w-100 rounded-4">
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="country-details.html"
                        class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                        <span class="flat d-center"><img src="{{ asset('assets/img/services/scotland-flag.webp') }}"
                                alt="img"></span>
                        <img src="{{ asset('assets/img/services/scotland.webp') }}" alt="img" class="w-100 rounded-4">
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
                    <h2 class="black">
                        যেসব ভিসা যাচাই করা হয়
                    </h2>
                </div>
                <div class="col-lg-5">
                    <p class="pra fs-six">
                        আপনার ভিসা, টিকেট বা অফার লেটার যাচাই করুন এবং প্রতারণা থেকে নিরাপদ থাকুন।
                    </p>
                </div>
            </div>
            <div class="row justify-content-center g-sm-6 g-4">
                <div class="col-md-6">
                    <div class="unseen-item rounded-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3>
                                <a href="visa-details.html" class="black">ওয়ার্ক পারমিট ভিসা</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="{{ asset('assets/img/icon/unseen-icon1.webp') }}" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            কাজের ভিসার সত্যতা যাচাই করুন। কোম্পানিটি বৈধ কিনা এবং আপনার নামে ওয়ার্ক পারমিট ইস্যু হয়েছে কিনা তা নিশ্চিত হোন।
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
                                <a href="visa-details.html" class="black">স্টুডেন্ট ভিসা</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="{{ asset('assets/img/icon/unseen-icon2.webp') }}" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            ইউনিভার্সিটির অফার লেটার ও স্টুডেন্ট ভিসা ফাইলে কোনো গরমিল আছে কিনা তা প্রফেশনালভাবে চেক করে নিন।
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
                                <a href="visa-details.html" class="black">মেডিকেল ভিসা</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="{{ asset('assets/img/icon/unseen-icon3.webp') }}" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            চিকিৎসার জন্য বিদেশ ভ্রমণের ভিসা ও হাসপাতালের অ্যাপয়েন্টমেন্ট লেটার যাচাই করে মানসিক চাপমুক্ত থাকুন।
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
                                <a href="visa-details.html" class="black">টুরিস্ট ভিসা</a>
                            </h3>
                            <div class="icon d-center n100-bg radius-circle d-center">
                                <img src="{{ asset('assets/img/icon/unseen-icon4.webp') }}" alt="img">
                            </div>
                        </div>
                        <p class=" fs-eight pra mb-4">
                            ভ্রমণের ভিসা, হোটেল বুকিং এবং রিটার্ন টিকেট—সবকিছু আসল কিনা তা যাচাই করে আপনার ছুটি উপভোগ করুন।
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
                            <img src="{{ asset('assets/img/icon/picture-doller.webp') }}" alt="img">
                        </div>
                        <h3 class="mb-xxl-4 mb-4 pb-1p">
                            <a href="#" class="black fw-bold">
                                সন্দেহ হলেই যাচাই করুন, নিরাপদ থাকুন
                            </a>
                        </h3>
                        <a href="{{ route('contact') }}"
                            class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                            যোগাযোগ করুন
                            <i class="fa-solid fa-arrow-right last"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="picture-thumb1 h-100 rounded-4 overflow-hidden reveal-left">
                        <img src="{{ asset('assets/img/services/picture-thumb.webp') }}" alt="img" class="w-100 h-100 rounded-4">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="counter-area1">
                        <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                            <div class="content d-flex align-items-center gap-0">
                                <span class="odometer" data-count="50000"></span>
                                <span>+</span>
                            </div>
                            <p class="fs-eight pra">সফল যাচাই</p>
                        </div>
                        <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                            <div class="content d-flex align-items-center gap-0">
                                <span class="odometer" data-count="5000"></span>
                                <span>+</span>
                            </div>
                            <p class="fs-eight pra">প্রতারণা প্রতিহত</p>
                        </div>
                        <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                            <div class="content d-flex align-items-center gap-0">
                                <span class="odometer" data-count="98"></span>
                                <span>%</span>
                            </div>
                            <p class="fs-eight pra">সন্তুষ্ট গ্রাহক</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="best-badge rounded-4 h-100 d-flex align-items-center gap-xl-4 gap-3">
                        <img src="{{ asset('assets/img/services/badge.webp') }}" alt="img">
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
                <h2 class="black">
                    আমাদের যাচাইকরণ প্যাকেজ
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
                                            <h2 class="black">৳৫০০</h2>
                                            <span class="pra">প্রতি ডকুমেন্ট</span>
                                        </div>
                                    </div>
                                    <h4 class="black">সিঙ্গেল চেক</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> যেকোনো ১টি ডকুমেন্ট যাচাই
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ২৪ ঘণ্টার মধ্যে রিপোর্ট
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ইমেইল সাপোর্ট
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}"
                                    class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    অর্ডার করুন
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
                                            <h2 class="black">৳১২০০</h2>
                                            <span class="pra">এককালীন</span>
                                        </div>
                                    </div>
                                    <h4 class="black">কম্বো প্যাক</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ভিসা + টিকেট + অফার লেটার
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ১২ ঘণ্টার মধ্যে রিপোর্ট
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ফোন সাপোর্ট
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}"
                                    class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    অর্ডার করুন
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
                                            <h2 class="black">৳২৫০০</h2>
                                            <span class="pra">এককালীন</span>
                                        </div>
                                    </div>
                                    <h4 class="black">প্রিমিয়াম সাপোর্ট</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> সম্পূর্ণ ফাইল চেক
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> সরাসরি এক্সপার্ট রিভিউ
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> দ্রুততম সময়ে রিপোর্ট
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}"
                                    class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    অর্ডার করুন
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
                                            <h2 class="black">৳১২০০</h2>
                                            <span class="pra">এককালীন</span>
                                        </div>
                                    </div>
                                    <h4 class="black">কম্বো প্যাক</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ভিসা + টিকেট + অফার লেটার
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ১২ ঘণ্টার মধ্যে রিপোর্ট
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ফোন সাপোর্ট
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}"
                                    class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    অর্ডার করুন
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
                                            <h2 class="black">৳৫০০</h2>
                                            <span class="pra">প্রতি ডকুমেন্ট</span>
                                        </div>
                                    </div>
                                    <h4 class="black">সিঙ্গেল চেক</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> যেকোনো ১টি ডকুমেন্ট যাচাই
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ২৪ ঘণ্টার মধ্যে রিপোর্ট
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> ইমেইল সাপোর্ট
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}"
                                    class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    অর্ডার করুন
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
                                            <h2 class="black">৳২৫০০</h2>
                                            <span class="pra">এককালীন</span>
                                        </div>
                                    </div>
                                    <h4 class="black">প্রিমিয়াম সাপোর্ট</h4>
                                </div>
                                <ul class="pricing-list d-flex flex-column mt-4 pt-2 mb-4 pb-xl-3">
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> সম্পূর্ণ ফাইল চেক
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> সরাসরি এক্সপার্ট রিভিউ
                                    </li>
                                    <li class="d-flex align-items-center gap-lg-2 gap-1 fs-six pra">
                                        <i class="fa-solid fa-angles-right black"></i> দ্রুততম সময়ে রিপোর্ট
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}"
                                    class="common-btn box-style py-3 w-100 first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden blackbg rounded100">
                                    অর্ডার করুন
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
            <h2 class="black text-center pb-md-5 mb-4">
                সাধারণ জিজ্ঞাসা
            </h2>
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="accordion border-0 d-flex flex-column gap-xxl-4 gap-3" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    আপনারা কিভাবে ভিসা যাচাই করেন?
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            আমরা আপনার ভিসা নম্বর, পাসপোর্ট নম্বর এবং অন্যান্য তথ্য নিয়ে সরাসরি সংশ্লিষ্ট দেশের ইমিগ্রেশন বা এম্বাসির অনলাইন পোর্টালে যাচাই করি।
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    যাচাই করতে কত সময় লাগে?
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            প্যাকেজের উপর নির্ভর করে, সাধারণত আমরা ১২ থেকে ২৪ ঘণ্টার মধ্যে ভেরিফিকেশন রিপোর্ট প্রদান করি।
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
                                    আমার ডকুমেন্ট কি আপনাদের কাছে নিরাপদ?
                                </button>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            ১০০% নিরাপদ। আপনার ব্যক্তিগত তথ্যের গোপনীয়তা রক্ষা করা আমাদের সর্বোচ্চ অগ্রাধিকার। কাজ শেষে আমরা সকল তথ্য সার্ভার থেকে মুছে ফেলি।
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
                                    যদি আমার ভিসা নকল ধরা পড়ে, তাহলে কী হবে?
                                </button>
                                <div id="collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            আমরা আপনাকে পরবর্তী আইনি পদক্ষেপ বা করণীয় সম্পর্কে সঠিক পরামর্শ দেবো এবং কিভাবে প্রতারণা থেকে বাঁচতে পারেন সে বিষয়ে গাইড করবো।
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4 faq-thumb1 w-100 reveal-left overflow-hidden">
                        <img src="{{ asset('assets/img/faq/faq1.webp') }}" alt="img" class="w-100">
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
