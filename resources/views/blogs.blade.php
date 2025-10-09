@extends('layouts.frontend')
@section('title','Blogs')


@section('content')
<main>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content">
                <h2 class="black">Blog</h2>
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>Blog</li>
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
                        <div class="blog-details-box">
                            <div class="thumb position-relative rounded-4">
                                <img src="{{ asset('assets/img/blog/blog-big1.png') }}" alt="img" class="w-100 rounded-4">
                            </div>
                            <div class="content">
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
                                <h3 class="mb-sm-4 mb-4 pb-xxl-2 black visible-slowly-right">
                                    <a href="blog-details.html" class="black">
                                        Explore Beyond Boundaries Discover Global Freedom Unlock
                                    </a>
                                </h3>
                                <a href="blog-details.html"
                                    class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold bg-white overflow-hidden rounded-5">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-details-box">
                            <div class="thumb position-relative rounded-4">
                                <img src="{{ asset('assets/img/blog/blog-big2.png') }}" alt="img" class="w-100 rounded-4">
                            </div>
                            <div class="content">
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
                                <h3 class="mb-sm-4 mb-4 pb-xxl-2 black visible-slowly-right">
                                    <a href="blog-details.html" class="black">
                                        Navigate Your World Journey Without Limits Empower Your Travels
                                    </a>
                                </h3>
                                <a href="blog-details.html"
                                    class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold bg-white overflow-hidden rounded-5">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-details-box">
                            <div class="thumb position-relative rounded-4">
                                <img src="{{ asset('assets/img/blog/blog-big3.png') }}" alt="img" class="w-100 rounded-4">
                            </div>
                            <div class="content">
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
                                <h3 class="mb-sm-4 mb-4 pb-xxl-2 black visible-slowly-right">
                                    <a href="blog-details.html" class="black">
                                        Connect Across Cultures Venture the Everywhere Roam Unrestricted
                                    </a>
                                </h3>
                                <a href="blog-details.html"
                                    class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold bg-white overflow-hidden rounded-5">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <ul class="blog-pagination">
                        <li><a href="#" class="heading-font"><i class="fas fa-angle-double-left p1-clr"></i></a>
                        </li>
                        <li class="active"><a href="#" class="heading-font">1</a></li>
                        <li><a href="#" class="heading-font">2</a></li>
                        <li><a href="#" class="heading-font">3</a></li>
                        <li><a href="#" class="heading-font"><i class="fas fa-angle-double-right p1-clr"></i></a>
                        </li>
                    </ul>
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

@section('js')
@endsection

@section('css')
@endsection
