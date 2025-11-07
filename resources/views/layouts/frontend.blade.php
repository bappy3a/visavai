<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Visavai – ভিসা রিলেটেড সকল ডকুমেন্ট যাচাইয়ের নির্ভরযোগ্য প্ল্যাটফর্ম - @yield('title') </title>
    <meta name="author" content="VisaVai">

    <meta name="title" content="Visavai – ভিসা রিলেটেড সকল ডকুমেন্ট যাচাইয়ের নির্ভরযোগ্য প্ল্যাটফর্ম">
    <meta name="description" content="Visavai হচ্ছে একটি ভিসা ডকুমেন্ট চেকিং প্ল্যাটফর্ম যেখানে আপনি আপনার জব অফার লেটার, এয়ার টিকেটসহ সব ধরনের ডকুমেন্ট যাচাই করতে পারেন। আমাদের বিশেষজ্ঞ টিম রিপোর্ট তৈরি করে আপনাকে সঠিক তথ্য প্রদান করে — নিশ্চিন্তে ভ্রমণের জন্য Visavai আপনার পাশে।">
    <meta name="keywords" content="visa check, document verification, offer letter check, air ticket check, visa report, visavai, ভিসা যাচাই, ডকুমেন্ট চেকিং">
    <meta name="author" content="Visavai Team">
    <meta name="robots" content="index, follow">
    <meta name="language" content="bn">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://visavai.com/">
    <meta property="og:title" content="Visavai – ভিসা রিলেটেড সকল ডকুমেন্ট যাচাইয়ের নির্ভরযোগ্য প্ল্যাটফর্ম">
    <meta property="og:description" content="আপনার ভিসা, অফার লেটার, এয়ার টিকেটসহ সব ডকুমেন্ট যাচাই করুন এক জায়গায় — Visavai এর মাধ্যমে নিশ্চিন্তে ভ্রমণ করুন।">
    <meta property="og:image" content="https://visavai.com/images/preview.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://visavai.com/">
    <meta name="twitter:title" content="Visavai – ভিসা রিলেটেড সকল ডকুমেন্ট যাচাইয়ের নির্ভরযোগ্য প্ল্যাটফর্ম">
    <meta name="twitter:description" content="Visavai হচ্ছে একটি ভিসা ডকুমেন্ট চেকিং প্ল্যাটফর্ম যেখানে আপনি সহজেই আপনার ভ্রমণ সম্পর্কিত ডকুমেন্ট যাচাই করতে পারেন।">
    <meta name="twitter:image" content="https://visavai.com/images/preview.jpg">

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
            <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
            <span data-text-preloader="V" class="letters-loading">
                    V
                </span>
            <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
            <span data-text-preloader="I" class="letters-loading">
                    I
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

<!-- Header Section Start -->
@include('inc.header')
<!-- Search Area Start -->
<!-- Main area start -->
@yield('content')
<!-- Main area end -->
<!-- Back to top button start -->
{{--<button class="scroll-to-top position-fixed">--}}
{{--    <i class="fas fa-chevron-up"></i>--}}
{{--</button>--}}
<!--<< Footer Section Start >>-->
@include('inc.fooder')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/68efdc96098ba01951c43470/1j7kfbc2u';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
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
