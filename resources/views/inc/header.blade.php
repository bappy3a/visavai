<header id="header-sticky" class="header-1 position-absolute w-100">
    <div class="container">
        <div class="mega-menu-wrapper border">
            <div class="header-main style-2">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{ route('home') }}" class="header-logo">
                            <img src="{{ asset('assets/img/logo/logo.webp') }}" alt="logo-img" style="width: 132px;height:40px" fetchpriority="high">
                        </a>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">হোম</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">আমাদের সম্পর্কে</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blogs') }}">ব্লগ</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">যোগাযোগ</a>
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
                            <img src="{{ asset('assets/img/icon/menu.webp') }}" alt="icon" loading="eager">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
