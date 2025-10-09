@extends('layouts.frontend')

@section('content')
<main>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content">
                <h2 class="black">Blog Details</h2>
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>Blog Details</li>
                </ul>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('assets/img/banner/breadcrumb-ele.png') }}" alt="img" class="inner-element">
    </section>
    <!-- Blog Section Start-->
    <section class="blog-details-section section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-details-left">
                        <div class="blog-details-box style2">
                            <div class="thumb position-relative mb-xxl-4 mb-3 rounded-4">
                                <img src="{{ asset('assets/img/blog/blog-big4.png') }}" alt="img" class="w-100 rounded-4">
                            </div>
                            <div class="content border-0 p-0">
                                <ul class="comment-tag">
                                    <li>
                                        <button type="button">
                                            <i class="fas fa-calendar-alt"></i>
                                            October 19, 2022
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button">
                                            <i class="fa-regular fa-user"></i>
                                            By admin
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button">
                                            <i class="fas fa-folder-open"></i>
                                            Category
                                        </button>
                                    </li>
                                </ul>
                                <h2 class="mb-lg-3 mb-sm-2 mb-2 black visible-slowly-right">
                                    Discover Global Freedom Unlock
                                </h2>
                                <p class="pra fs-five mb-xl-4 mb-4 pb-xxl-1">
                                    A visa is an official document that permits entry into a specific country. It
                                    indicates the holder's permission to stay
                                    either temporarily or permanently. Visas are typically issued by a country's
                                    consulate or embassy located in the
                                    traveler's home country
                                </p>
                                <div class="lee-pragraph p1-bg mb-4">
                                    <div
                                        class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                                        <div class="cont">
                                            <h3 class="black visible-slowly-right">Dianne Russell</h3>
                                            <span class="pra">Medical Assistant</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="fas fa-star p2-clr"></i>
                                            <i class="fas fa-star p2-clr"></i>
                                            <i class="fas fa-star p2-clr"></i>
                                            <i class="fas fa-star black"></i>
                                            <i class="fas fa-star black"></i>
                                        </div>
                                    </div>
                                    <p class="fs-seven fw_500 pra">
                                        A visa is an official document that permits entry into a specific country.
                                        It
                                        indicates the holder's permission to stay
                                        either temporarily or permanently. Visas are typically
                                    </p>
                                </div>
                                <div class="mb-4 pb-lg-1">
                                    <h3 class="black visible-slowly-right mb-xxl-3 mb-2">
                                        Unlocking Global Access
                                    </h3>
                                    <p class="pra fs-four">
                                        A visa is an official document that permits entry into a specific country.
                                        It
                                        indicates the holder's permission to stay
                                        either temporarily or permanently. Visas are typically
                                    </p>
                                </div>
                                <div class="maxzimize-text mb-4 pb-lg-1">
                                    <ul class="listing fs-six">
                                        <li class="d-flex fs-six align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Empowering Global Mobility Trusted Visas
                                        </li>
                                        <li class="d-flex fs-six align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Your Gateway to the World Seamless Travel
                                        </li>
                                        <li class="d-flex fs-six align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Your Key to International Adventures
                                        </li>
                                        <li class="d-flex fs-six align-items-center gap-xxl-3 gap-2 pra">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Visa Solutions Beyond Boundaries
                                        </li>
                                    </ul>
                                </div>
                                <p class="pra fs-four mb-4 pb-lg-2">
                                    A visa is an official document that permits entry into a specific country. It
                                    indicates the holder's permission to stay
                                    either temporarily or permanently. Visas are typically
                                </p>
                                <div
                                    class="d-flex mb-40 flex-sm-nowrap flex-wrap align-items-center gap-xxl-4 gap-xl-3 gap-2">
                                    <div class="thumbs w-100 rounded-4">
                                        <img src="{{ asset('assets/img/blog/blog-middle1.png') }}" alt="img"
                                            class="w-100 rounded-4">
                                    </div>
                                    <div class="thumbs w-100 rounded-4">
                                        <img src="{{ asset('assets/img/blog/blog-middle2.png') }}" alt="img"
                                            class="w-100 rounded-4">
                                    </div>
                                </div>
                                <div
                                    class="tag-social-wrap d-flex justify-content-md-between flex-md-nowrap flex-wrap justify-content-center gap-3 align-items-center">
                                    <div
                                        class="tags d-flex justify-content-center justify-content-md-start align-items-center gap-xxl-4 gap-xl-3 gap-2">
                                        <h4 class="black">Tags:</h4>
                                        <ul class="tags justify-content-center justify-content-md-start">
                                            <li><a href="#">Easy Entry</a></li>
                                            <li><a href="#">Fly Right</a></li>
                                            <li><a href="#">Destination Docs</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-wrapper d-flex align-items-center">
                                        <a href="#" class=" black"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class=" black"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class=" black"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class=" black"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="previous-nextime d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="#" class="prev-icon rounded-circle d-center">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                        <h4 class="black">Previous</h4>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <h4 class="black">Next</h4>
                                        <a href="#" class="prev-icon rounded-circle d-center">
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-details-reply-area mt-60 mb-60">
                                    <h3 class="black mb-xl-4 mb-4 pb-1">2 Comment</h3>
                                    <div class="blog-reply-box">
                                        <div
                                            class="d-flex flex-sm-nowrap flex-wrap gap-2 align-items-center justify-content-between mb-3">
                                            <div class="cont">
                                                <h4 class="black mb-1">Chis Hawel</h4>
                                                <p class="pra fs-seven">Designer</p>
                                            </div>
                                            <button type="button" class="heading-font">Reply</button>
                                        </div>
                                        <p class="fs-six pra">
                                            A visa is an official document that permits entry into a specific
                                            country.
                                            It indicates the holder's permission to stay
                                            either temporarily or permanently. Visas are typically
                                        </p>
                                    </div>
                                    <div class="blog-reply-box">
                                        <div
                                            class="d-flex flex-sm-nowrap flex-wrap gap-2 align-items-center justify-content-between mb-3">
                                            <div class="cont">
                                                <h4 class="black mb-1">Arlene McCoy</h4>
                                                <p class="pra fs-seven">Arlene McCoy</p>
                                            </div>
                                            <button type="button" class="heading-font">Reply</button>
                                        </div>
                                        <p class="fs-six pra">
                                            A visa is an official document that permits entry into a specific
                                            country.
                                            It indicates the holder's permission to stay
                                            either temporarily or permanently. Visas are typically
                                        </p>
                                    </div>
                                </div>
                                <form action="#" class="contact-forms blog-form p-0">
                                    <h3 class="black mb-xl-4 mb-4 pb-1">Leave A Comment</h3>
                                    <div class="row g-lg-4 g-3">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                        <div class="col-lg-12">
                                            <select>
                                                <option value="1">Chose An Option</option>
                                                <option value="2">Tourist Visa</option>
                                                <option value="3">Work Visa</option>
                                                <option value="4">Student Visa</option>
                                                <option value="5">Business Visa</option>
                                                <option value="6">Permanent Residency</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea placeholder="Your Message" rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit"
                                                class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold p1-bg overflow-hidden rounded-5">
                                                Sent Now
                                                <i class="fa-solid fa-arrow-right-long last"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-details-right">
                        <div class="details-common search-box">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="details-common search-box">
                            <h3 class="black mb-lg-4 mb-3 visible-slowly-right">Popular Post</h3>
                            <div class="blog-latest">
                                <div class="blog-latest-item">
                                    <div class="content">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <i class="fa-solid fa-calendar-days p1-clr"></i> October 19, 2024
                                        </div>
                                        <a href="blog-details.html" class="fs-five heading-font pra">
                                            Explore Beyond Discover Global Freedom
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-latest-item">
                                    <div class="content">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <i class="fa-solid fa-calendar-days p1-clr"></i> October 19, 2024
                                        </div>
                                        <a href="blog-details.html" class="fs-five heading-font pra">
                                            Unlock New Horizons the Navigate Your World
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-latest-item">
                                    <div class="content">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <i class="fa-solid fa-calendar-days p1-clr"></i> October 19, 2024
                                        </div>
                                        <a href="blog-details.html" class="fs-five heading-font pra">
                                            Empower Your Travels
                                            Connect Across
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details-common category-blog">
                            <h3 class="black mb-lg-4 mb-3 visible-slowly-right">Category</h3>
                            <ul class="cates d-grid gap-3">
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        <span
                                            class="d-flex fs-six black d-lg-flex align-items-center gap-xxl-3 gap-2">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Roam Unrestricted
                                        </span>
                                        <span class="seri">01</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        <span
                                            class="d-flex fs-six black d-lg-flex align-items-center gap-xxl-3 gap-2">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Visa Wise
                                        </span>
                                        <span class="seri">02</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        <span
                                            class="d-flex fs-six black d-lg-flex align-items-center gap-xxl-3 gap-2">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Fly Right
                                        </span>
                                        <span class="seri">03</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        <span
                                            class="d-flex fs-six black d-lg-flex align-items-center gap-xxl-3 gap-2">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Destination Docs
                                        </span>
                                        <span class="seri">04</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center justify-content-between">
                                        <span
                                            class="d-flex fs-six black d-lg-flex align-items-center gap-xxl-3 gap-2">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            Globe Permit
                                        </span>
                                        <span class="seri">05</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="details-common category-blog">
                            <h3 class="black mb-lg-4 mb-3 visible-slowly-right">Popular Tags</h3>
                            <ul class="tags">
                                <li><a href="#">Easy Entry</a></li>
                                <li><a href="#">Fly Right</a></li>
                                <li><a href="#">Destination Docs</a></li>
                                <li><a href="#">Globe Permit</a></li>
                                <li><a href="#">Travel Visor</a></li>
                                <li><a href="#">Visa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection