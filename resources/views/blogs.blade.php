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
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('assets/img/banner/breadcrumb-ele.webp') }}" alt="img" class="inner-element">
    </section>
    <!-- Blog Section Start-->
    <section class="blog-details-section section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-details-left">
                        @if(request('search') || request('category'))
                            <div class="mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                <div>
                                    @if(request('search'))
                                        <span class="badge bg-primary me-2">Search: "{{ request('search') }}"</span>
                                    @endif
                                    @if(request('category'))
                                        @php
                                            $selectedCategory = $categories->firstWhere('slug', request('category'));
                                        @endphp
                                        @if($selectedCategory)
                                            <span class="badge bg-primary me-2">Category: {{ $selectedCategory->name }}</span>
                                        @endif
                                    @endif
                                </div>
                                <a href="{{ route('blogs') }}" class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-times"></i> Clear Filters
                                </a>
                            </div>
                        @endif
                        @forelse($blogs as $blog)
                            <div class="blog-details-box">
                                <div class="thumb position-relative rounded-4">
                                    <img src="{{ $blog->featured_image ? asset( $blog->featured_image) : asset('assets/img/blog/blog-big1.webp') }}" 
                                         alt="{{ $blog->title }}" 
                                         class="w-100 rounded-4">
                                </div>
                                <div class="content">
                                    <ul class="comment-tag">
                                        <li>
                                            <button type="button">
                                                <i class="fas fa-calendar-alt"></i>
                                                {{ $blog->published_at ? $blog->published_at->format('F d, Y') : $blog->created_at->format('F d, Y') }}
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button">
                                                <i class="fa-regular fa-user"></i>
                                                By admin
                                            </button>
                                        </li>
                                        @if($blog->category)
                                            <li>
                                                <button type="button">
                                                    <i class="fas fa-folder-open"></i>
                                                    {{ $blog->category->name }}
                                                </button>
                                            </li>
                                        @endif
                                    </ul>
                                    <h3 class="mb-sm-4 mb-4 pb-xxl-2 black visible-slowly-right">
                                        <a href="{{ route('blogs.details', $blog->slug) }}" class="black">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    @if($blog->excerpt)
                                        <p class="pra fs-five mb-3">{{ Str::limit($blog->excerpt, 150) }}</p>
                                    @endif
                                    <a href="{{ route('blogs.details', $blog->slug) }}"
                                        class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold bg-white overflow-hidden rounded-5">
                                        Read More
                                        <i class="fa-solid fa-arrow-right-long last"></i>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="blog-details-box">
                                <div class="content text-center py-5">
                                    <p class="pra fs-five mb-3">
                                        @if(request('search') || request('category'))
                                            No blogs found matching your filters.
                                        @else
                                            No blogs found.
                                        @endif
                                    </p>
                                    @if(request('search') || request('category'))
                                        <a href="{{ route('blogs') }}" class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold bg-white overflow-hidden rounded-5">
                                            View All Blogs
                                            <i class="fa-solid fa-arrow-right-long last"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endforelse
                    </div>
                    @if($blogs->hasPages())
                        <ul class="blog-pagination">
                            @if($blogs->onFirstPage())
                                <li><span class="heading-font"><i class="fas fa-angle-double-left p1-clr"></i></span></li>
                            @else
                                <li><a href="{{ $blogs->previousPageUrl() }}" class="heading-font"><i class="fas fa-angle-double-left p1-clr"></i></a></li>
                            @endif

                            @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                @if($page == $blogs->currentPage())
                                    <li class="active"><span class="heading-font">{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}" class="heading-font">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            @if($blogs->hasMorePages())
                                <li><a href="{{ $blogs->nextPageUrl() }}" class="heading-font"><i class="fas fa-angle-double-right p1-clr"></i></a></li>
                            @else
                                <li><span class="heading-font"><i class="fas fa-angle-double-right p1-clr"></i></span></li>
                            @endif
                        </ul>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="blog-details-right">
                        <div class="details-common search-box">
                            <form action="{{ route('blogs') }}" method="GET" id="blog-search-form">
                                <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}" id="blog-search-input">
                                @if(request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @endif
                                <button type="submit" id="blog-search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="details-common search-box">
                            <h3 class="black mb-lg-4 mb-3 visible-slowly-right">Popular Post</h3>
                            <div class="blog-latest">
                                @forelse($popularPosts as $popularPost)
                                    <div class="blog-latest-item">
                                        <div class="content">
                                            <div class="d-flex align-items-center gap-2 mb-2">
                                                <i class="fa-solid fa-calendar-days p1-clr"></i> 
                                                {{ $popularPost->published_at ? $popularPost->published_at->format('F d, Y') : $popularPost->created_at->format('F d, Y') }}
                                            </div>
                                            <a href="{{ route('blogs.details', $popularPost->slug) }}" class="fs-five heading-font pra">
                                                {{ Str::limit($popularPost->title, 50) }}
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="blog-latest-item">
                                        <div class="content">
                                            <p class="pra fs-six">No popular posts yet.</p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="details-common category-blog">
                            <h3 class="black mb-lg-4 mb-3 visible-slowly-right">Category</h3>
                            <ul class="cates d-grid gap-3">
                                <li>
                                    <a href="{{ route('blogs') }}" class="d-flex align-items-center justify-content-between {{ !request('category') ? 'active' : '' }}">
                                        <span
                                            class="d-flex fs-six black d-lg-flex align-items-center gap-xxl-3 gap-2">
                                            <i class="fas fa-angle-double-right p1-clr"></i>
                                            All Categories
                                        </span>
                                        <span class="seri">00</span>
                                    </a>
                                </li>
                                @forelse($categories as $index => $category)
                                    <li>
                                        <a href="{{ route('blogs', ['category' => $category->slug]) }}" 
                                           class="d-flex align-items-center justify-content-between {{ request('category') == $category->slug ? 'active' : '' }}">
                                            <span
                                                class="d-flex fs-six black d-lg-flex align-items-center gap-xxl-3 gap-2">
                                                <i class="fas fa-angle-double-right p1-clr"></i>
                                                {{ $category->name }}
                                            </span>
                                            <span class="seri">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                        </a>
                                    </li>
                                @empty
                                    <li>
                                        <span class="pra fs-six">No categories available.</span>
                                    </li>
                                @endforelse
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
