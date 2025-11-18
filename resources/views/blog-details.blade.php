@extends('layouts.frontend')
@section('title', $blog->meta_title ?? $blog->title)

@section('content')
<main>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content">
                <h2 class="black">Blog Details</h2>
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>
                        <a href="{{ route('blogs') }}">Blog</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>Blog Details</li>
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
                        <div class="blog-details-box style2">
                            <div class="thumb position-relative mb-xxl-4 mb-3 rounded-4">
                                <img src="{{ $blog->featured_image ? asset( $blog->featured_image) : asset('assets/img/blog/blog-big4.webp') }}" 
                                     alt="{{ $blog->title }}" 
                                     class="w-100 rounded-4">
                            </div>
                            <div class="content border-0 p-0">
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
                                <h2 class="mb-lg-3 mb-sm-2 mb-2 black visible-slowly-right">
                                    {{ $blog->title }}
                                </h2>
                                @if($blog->excerpt)
                                    <p class="pra fs-five mb-xl-4 mb-4 pb-xxl-1">
                                        {{ $blog->excerpt }}
                                    </p>
                                @endif
                                <div class="blog-content mb-4">
                                    {!! $blog->content !!}
                                </div>
                                @if($blog->meta_keywords)
                                    <div
                                        class="tag-social-wrap d-flex justify-content-md-between flex-md-nowrap flex-wrap justify-content-center gap-3 align-items-center">
                                        <div
                                            class="tags d-flex justify-content-center justify-content-md-start align-items-center gap-xxl-4 gap-xl-3 gap-2">
                                            <h4 class="black">Tags:</h4>
                                            <ul class="tags justify-content-center justify-content-md-start">
                                                @foreach(explode(',', $blog->meta_keywords) as $keyword)
                                                    <li><a href="#">{{ trim($keyword) }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="social-wrapper d-flex align-items-center">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('/blogs/' . $blog->slug)) }}" 
                                               target="_blank" 
                                               class="black">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="https://www.instagram.com/" 
                                               target="_blank" 
                                               class="black">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url('/blogs/' . $blog->slug)) }}&text={{ urlencode($blog->title) }}" 
                                               target="_blank" 
                                               class="black">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url('/blogs/' . $blog->slug)) }}" 
                                               target="_blank" 
                                               class="black">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                                @if($previousBlog || $nextBlog)
                                    <div class="previous-nextime d-flex align-items-center justify-content-between">
                                        @if($previousBlog)
                                            <div class="d-flex align-items-center gap-3">
                                                <a href="{{ route('blogs.details', $previousBlog->slug) }}" class="prev-icon rounded-circle d-center">
                                                    <i class="fas fa-arrow-left"></i>
                                                </a>
                                                <div>
                                                    <h4 class="black">Previous</h4>
                                                    <p class="pra fs-six mb-0">{{ Str::limit($previousBlog->title, 40) }}</p>
                                                </div>
                                            </div>
                                        @else
                                            <div></div>
                                        @endif
                                        @if($nextBlog)
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="text-end">
                                                    <h4 class="black">Next</h4>
                                                    <p class="pra fs-six mb-0">{{ Str::limit($nextBlog->title, 40) }}</p>
                                                </div>
                                                <a href="{{ route('blogs.details', $nextBlog->slug) }}" class="prev-icon rounded-circle d-center">
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        @else
                                            <div></div>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-details-right">
                        <div class="details-common search-box">
                            <form action="{{ route('blogs') }}" method="GET">
                                <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                                    <a href="{{ route('blogs') }}" class="d-flex align-items-center justify-content-between">
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
                                           class="d-flex align-items-center justify-content-between">
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
                        @if($blog->meta_keywords)
                            <div class="details-common category-blog">
                                <h3 class="black mb-lg-4 mb-3 visible-slowly-right">Popular Tags</h3>
                                <ul class="tags">
                                    @foreach(explode(',', $blog->meta_keywords) as $keyword)
                                        <li><a href="#">{{ trim($keyword) }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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