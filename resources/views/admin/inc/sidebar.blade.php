<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
         <a href="{{ route('backend.index') }}" class="logo-dark">
              <img src="{{ asset('assets/img/logo/favs.png') }}" class="logo-sm" alt="logo sm">
              <img src="{{ asset('assets/img/logo/logo.webp') }}" class="logo-lg" alt="logo dark">
         </a>

         <a href="{{ route('backend.index') }}" class="logo-light">
              <img src="{{ asset('assets/img/logo/favs.png') }}" class="logo-sm" alt="logo sm">
              <img src="{{ asset('assets/img/logo/logo.webp') }}" class="logo-lg" alt="logo light">
         </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
         <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
         <ul class="navbar-nav" id="navbar-nav">

              <li class="menu-title">General</li>

              <li class="nav-item">
                   <a class="nav-link" href="{{ route('backend.index') }}">
                        <span class="nav-icon">
                             <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Dashboard </span>
                   </a>
              </li>

              <li class="nav-item">
                   <a class="nav-link menu-arrow" href="#sidebarBlogs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBlogs">
                        <span class="nav-icon">
                             <iconify-icon icon="solar:document-text-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Blogs </span>
                   </a>
                   <div class="collapse" id="sidebarBlogs">
                        <ul class="nav sub-navbar-nav">
                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('backend.blog-categories.index') }}">Category</a>
                             </li>
                             <li class="sub-nav-item">
                                  <a class="sub-nav-link" href="{{ route('backend.blogs.index') }}">Blog List</a>
                             </li>
                        </ul>
                   </div>
              </li>

              <li class="nav-item">
                   <a class="nav-link" href="{{ route('backend.contacts.index') }}">
                        <span class="nav-icon">
                             <iconify-icon icon="solar:letter-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Contact Messages </span>
                   </a>
              </li>

         </ul>
    </div>
</div>