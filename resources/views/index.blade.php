@extends('layouts.frontend')

@section('title','Home')

@section('structured_data')
@php
$organizationSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'Visavai',
    'url' => url('/'),
    'logo' => asset('assets/img/logo/logo.webp'),
    'description' => 'Professional visa verification, air ticket verification, and job offer letter verification services. Verify all your visa-related documents with Visavai.',
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'contactType' => 'Customer Service',
        'availableLanguage' => ['Bengali', 'English']
    ],
    'sameAs' => [],
    'areaServed' => [
        '@type' => 'Country',
        'name' => 'Bangladesh'
    ]
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Document Verification Service',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Visavai'
    ],
    'description' => 'Professional visa verification, air ticket verification, and job offer letter verification services',
    'areaServed' => [
        '@type' => 'Country',
        'name' => 'Bangladesh'
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Verification Services',
        'itemListElement' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Visa Verification',
                    'description' => 'Verify visa documents, check visa authenticity, and detect fake visas'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Air Ticket Verification',
                    'description' => 'Verify air tickets and check ticket authenticity'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Offer Letter Verification',
                    'description' => 'Verify job offer letters and check document authenticity'
                ]
            ]
        ]
    ]
];

$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'আপনারা কিভাবে ভিসা যাচাই করেন?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'আমরা আপনার ভিসা নম্বর, পাসপোর্ট নম্বর এবং অন্যান্য তথ্য নিয়ে সরাসরি সংশ্লিষ্ট দেশের ইমিগ্রেশন বা এম্বাসির অনলাইন পোর্টালে যাচাই করি।'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'যাচাই করতে কত সময় লাগে?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'প্যাকেজের উপর নির্ভর করে, সাধারণত আমরা ১২ থেকে ২৪ ঘণ্টার মধ্যে ভেরিফিকেশন রিপোর্ট প্রদান করি।'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'আমার ডকুমেন্ট কি আপনাদের কাছে নিরাপদ?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => '১০০% নিরাপদ। আপনার ব্যক্তিগত তথ্যের গোপনীয়তা রক্ষা করা আমাদের সর্বোচ্চ অগ্রাধিকার। কাজ শেষে আমরা সকল তথ্য সার্ভার থেকে মুছে ফেলি।'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'ভিসা যাচাই (Visa Verification) করতে কি কি ডকুমেন্ট লাগে?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'ভিসা যাচাই (Visa Verification) এর জন্য আপনার ভিসা কপি, পাসপোর্ট নম্বর, ভিসা নম্বর এবং ভিসা ইস্যুর তারিখ দরকার। এয়ার টিকেট যাচাই (Air Ticket Verification) এর জন্য টিকেট নম্বর এবং পাসপোর্ট নম্বর প্রয়োজন। অফার লেটার যাচাই (Offer Letter Verification) এর জন্য অফার লেটার এবং কোম্পানির তথ্য প্রয়োজন।'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'কি ধরনের ভিসা যাচাই (Visa Verification) করা যায়?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'আমরা সব ধরনের ভিসা যাচাই (Visa Verification) করি: ওয়ার্ক পারমিট ভিসা যাচাই (Work Permit Visa Verification), স্টুডেন্ট ভিসা যাচাই (Student Visa Verification), টুরিস্ট ভিসা যাচাই (Tourist Visa Verification), মেডিকেল ভিসা যাচাই (Medical Visa Verification), বিজনেস ভিসা যাচাই এবং অন্যান্য সব ধরনের ভিসা ডকুমেন্ট যাচাইকরণ সেবা প্রদান করি।'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'ভিসা যাচাই (Visa Verification) এর খরচ কত?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'আমাদের সিঙ্গেল চেক প্যাকেজে ৳৫০০ প্রতি ডকুমেন্ট, কম্বো প্যাকে ৳১২০০ (ভিসা + টিকেট + অফার লেটার), এবং প্রিমিয়াম সাপোর্টে ৳২৫০০। ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification) এবং অফার লেটার যাচাই (Offer Letter Verification) এর জন্য আমাদের সাশ্রয়ী মূল্যের প্যাকেজ রয়েছে।'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'ভিসা যাচাই (Visa Verification) রিপোর্ট কতটা নির্ভরযোগ্য?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'আমাদের ভিসা যাচাই (Visa Verification) রিপোর্ট ১০০% নির্ভরযোগ্য। আমরা সরাসরি এম্বাসি এবং এয়ারলাইনসের অফিসিয়াল ডাটাবেস থেকে তথ্য যাচাই করি। ভিসা সত্যতা যাচাই, নকল ভিসা চেক এবং ভিসা অথেনটিসিটি চেকের জন্য আমাদের প্রফেশনাল সেবা নিন।'
            ]
        ]
    ]
];

$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => url('/')
        ]
    ]
];
@endphp
<script type="application/ld+json">{!! json_encode($organizationSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

@section('content')
    <main>
        <!-- Banner Section Start -->
        <section class="banner-section cmn-bg overflow-visible">
            <div class="container">
                <div class="row g-4 align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="hero-content-version1">
                            <h1 class="black">
                                <span class="p1-clr d-block">ভিসা ও ডকুমেন্ট </span>যাচাই করুন সহজে
                            </h1>
                            <p class="pra">
                                যেকোনো দেশের ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification) বা চাকরির অফার লেটার যাচাই (Offer Letter Verification) করুন সহজে। ভিসা ডকুমেন্ট যাচাই, ভিসা সত্যতা যাচাই, নকল ভিসা চেক এবং ভ্রমণ ডকুমেন্ট যাচাইকরণের জন্য "ভিসাভাই" আছে আপনার পাশে। প্রতারণা থেকে বাঁচতে এখনই আপনার ভিসা, টিকেট বা অফার লেটার যাচাই করুন।
                            </p>
                            <a href="{{ route('contact') }}"
                               class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                                এখনই যাচাই করুন
                                <i class="fa-solid fa-arrow-right-long last"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-thumb1 btn-vivacity">
                            <img src="assets/img/banner/hero-thumb1.png" alt="img" fetchpriority="high">
                            <div class="ratting-cmn-box">
                                <div class="d-flex align-items-center gap-xl-3 gap-2 mb-1">
                                    <h3 class="black">4.9/5</h3> <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="fs-six pra">
                                    আমাদের সেবার উপর গ্রাহকদের আস্থা দেখুন
                                </p>
                            </div>
                            <!-- ele -->
                            <img src="assets/img/banner/flga1.png" alt="img" class="flag1" loading="lazy">
                            <img src="assets/img/banner/flga2.png" alt="img" class="flag2" loading="lazy">
                            <img src="assets/img/banner/flga3.png" alt="img" class="flag3" loading="lazy">
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
                        <h2 class="text-center black">
                            আপনার নিরাপদ যাত্রার নিশ্চয়তা
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center g-sm-6 g-4">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="access-item rounded-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="icon d-center n100-bg radius-circle d-center">
                                    <img src="assets/img/icon/route.png" alt="img" loading="lazy">
                                </div>
                                <span class="storke">
                                    01
                                </span>
                            </div>
                            <div class="cont">
                                <h3 class="black mb-2">ভিসা যাচাই (Visa Verification)</h3>
                                <p class=" fs-eight pra">আপনার ভিসা যাচাই (Visa Verification) করুন সহজে। ভিসা ডকুমেন্ট যাচাই, ভিসা সত্যতা যাচাই, নকল ভিসা চেক এবং ভিসা অথেনটিসিটি চেকের জন্য আমাদের প্রফেশনাল সেবা নিন। আপনার ভিসাটি আসল কিনা, এম্বাসি থেকে ইস্যু হয়েছে কিনা বা কোনো নকল সীল আছে কিনা, তা আমরা সরাসরি এম্বাসি ডাটাবেস থেকে যাচাই করে নিশ্চিত করি।</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="access-item rounded-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="icon d-center n100-bg radius-circle d-center">
                                    <img src="assets/img/icon/stamp.png" alt="img" loading="lazy">
                                </div>
                                <span class="storke">
                                    02
                                </span>
                            </div>
                            <div class="cont">
                                <h3 class="black mb-2">এয়ার টিকেট যাচাই (Air Ticket Verification)</h3>
                                <p class=" fs-eight pra">এয়ার টিকেট যাচাই (Air Ticket Verification) করুন এবং নকল টিকেট প্রতারণা থেকে বাঁচুন। আপনার বুকিং কনফার্ম কিনা, এয়ারলাইনস সিস্টেমে আপনার নামে টিকেট ইস্যু হয়েছে কিনা, টিকেট নম্বর বৈধ কিনা তা মুহূর্তেই যাচাই করুন। টিকেট অথেনটিসিটি চেক এবং ট্রাভেল ডকুমেন্ট যাচাইকরণ সেবা।</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="access-item rounded-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="icon d-center n100-bg radius-circle d-center">
                                    <img src="assets/img/icon/visa.png" alt="img" loading="lazy">
                                </div>
                                <span class="storke">
                                    03
                                </span>
                            </div>
                            <div class="cont">
                                <h3 class="black mb-2">অফার লেটার যাচাই (Offer Letter Verification)</h3>
                                <p class=" fs-eight pra">অফার লেটার যাচাই (Offer Letter Verification) করুন এবং চাকরি প্রতারণা থেকে নিরাপদ থাকুন। বিদেশি কোম্পানি বা ইউনিভার্সিটির অফার লেটারটি বৈধ কিনা, কোম্পানিটি রেজিস্টার্ড কিনা, অফার লেটার আসল কিনা তা যাচাই করে আপনার ভবিষ্যৎ সুরক্ষিত করুন। জব অফার লেটার যাচাইকরণ এবং ডকুমেন্ট ভেরিফিকেশন সেবা।</p>
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
                                    <h2 class="mb-3 fw-bold black">
                                        প্রতারণা এড়ান, নিশ্চিন্তে ভ্রমণ করুন
                                    </h2>
                                    <p class="fs-six pra">
                                        প্রতি বছর হাজার হাজার বাংলাদেশী মানুষ নকল ভিসা, ভুয়া টিকেট বা জাল অফার লেটারের কারণে প্রতারিত হন। "ভিসাভাই" এর লক্ষ্য হলো এই প্রতারণা চক্র বন্ধ করা। আমরা সরাসরি এম্বাসি ও এয়ারলাইনস এর ডাটাবেসের সাথে আপনার তথ্য যাচাই করে শতভাগ সঠিক রিপোর্ট প্রদান করি। ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification), এবং অফার লেটার যাচাই (Offer Letter Verification) এর জন্য আমাদের প্রফেশনাল ডকুমেন্ট যাচাইকরণ সেবা নিন। ভিসা সত্যতা যাচাই, নকল ভিসা চেক, ভিসা অথেনটিসিটি চেক এবং ট্রাভেল ডকুমেন্ট যাচাইকরণে আমরা আপনার বিশ্বস্ত সঙ্গী।
                                    </p>
                                </div>
                                <div class="about-information d-grid gap-xl-3 gap-3 white-bg">
                                    <div class="about-info d-flex align-items-center gap-lg-3 gap-2">
                                        <div class="icon d-center n100-bg">
                                            <img src="assets/img/icon/passport.png" alt="img" loading="lazy">
                                        </div>
                                        <h4 class="black">আপনার নিরাপদ যাত্রার নিশ্চয়তা</h4>
                                    </div>
                                    <div class="line"></div>
                                    <div class="about-info d-flex align-items-center gap-lg-3 gap-2">
                                        <div class="icon d-center n100-bg">
                                            <img src="assets/img/icon/passport.png" alt="img" loading="lazy">
                                        </div>
                                        <h4 class="black">ভিসা যাচাইয়ে আপনার বিশ্বস্ত সঙ্গী</h4>
                                    </div>
                                </div>
                                <a href="{{ route('about') }}"
                                   class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                                    আরও জানুন
                                    <i class="fa-solid fa-arrow-right-long last"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-thumb position-relative reveal-left w-100 ms-xl-5">
                                <img src="assets/img/about/about-thumb1.png" alt="img" class="w-100" loading="lazy">
                                <!-- Ele -->
                                <img src="assets/img/about/about-flag.png" alt="img" class="about-ele" loading="lazy">
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
                            <span class="flat d-center"><img src="assets/img/services/soudi-flag.png" alt="img" loading="lazy"></span>
                            <img src="assets/img/services/soudi.png" alt="img" class="w-100 rounded-4" loading="lazy">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="country-details.html"
                           class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/india-flag.png" alt="img" loading="lazy"></span>
                            <img src="assets/img/services/india.png" alt="img" class="w-100 rounded-4" loading="lazy">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="country-details.html"
                           class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/ireland-flag.png"
                                                             alt="img" loading="lazy"></span>
                            <img src="assets/img/services/ireland.png" alt="img" class="w-100 rounded-4" loading="lazy">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="country-details.html"
                           class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/bangladesh-flag.png"
                                                             alt="img" loading="lazy"></span>
                            <img src="assets/img/services/bangladesh.png" alt="img" class="w-100 rounded-4" loading="lazy">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="country-details.html"
                           class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/newzeland-flag.png"
                                                             alt="img" loading="lazy"></span>
                            <img src="assets/img/services/newzeland.png" alt="img" class="w-100 rounded-4" loading="lazy">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <a href="country-details.html"
                           class="adventure-access-item d-center position-relative btn-vivacity rounded-4">
                            <span class="flat d-center"><img src="assets/img/services/scotland-flag.png"
                                                             alt="img" loading="lazy"></span>
                            <img src="assets/img/services/scotland.png" alt="img" class="w-100 rounded-4" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="text-center mt-lg-5 mt-4">
                    <a href="{{ route('blogs') }}"
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
                                    <img src="assets/img/icon/unseen-icon1.png" alt="img" loading="lazy">
                                </div>
                            </div>
                            <p class=" fs-eight pra mb-4">
                                ওয়ার্ক পারমিট ভিসা যাচাই (Work Permit Visa Verification) করুন এবং চাকরি প্রতারণা থেকে বাঁচুন। কাজের ভিসার সত্যতা যাচাই করুন। কোম্পানিটি বৈধ কিনা, আপনার নামে ওয়ার্ক পারমিট ইস্যু হয়েছে কিনা, ভিসা নম্বর সঠিক কিনা তা নিশ্চিত হোন। ভিসা ডকুমেন্ট যাচাই এবং ভিসা অথেনটিসিটি চেকের জন্য আমাদের সেবা নিন।
                            </p>
                            <a href="{{ route('contact') }}"
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
                                    <img src="assets/img/icon/unseen-icon2.png" alt="img" loading="lazy">
                                </div>
                            </div>
                            <p class=" fs-eight pra mb-4">
                                স্টুডেন্ট ভিসা যাচাই (Student Visa Verification) করুন এবং শিক্ষা প্রতারণা থেকে নিরাপদ থাকুন। ইউনিভার্সিটির অফার লেটার ও স্টুডেন্ট ভিসা ফাইলে কোনো গরমিল আছে কিনা, ভিসা বৈধ কিনা, ইউনিভার্সিটি রেজিস্টার্ড কিনা তা প্রফেশনালভাবে চেক করে নিন। ভিসা সত্যতা যাচাই এবং ডকুমেন্ট ভেরিফিকেশন সেবা।
                            </p>
                            <a href="{{ route('contact') }}"
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
                                    <img src="assets/img/icon/unseen-icon3.png" alt="img" loading="lazy">
                                </div>
                            </div>
                            <p class=" fs-eight pra mb-4">
                                মেডিকেল ভিসা যাচাই (Medical Visa Verification) করুন এবং চিকিৎসা প্রতারণা থেকে বাঁচুন। চিকিৎসার জন্য বিদেশ ভ্রমণের ভিসা ও হাসপাতালের অ্যাপয়েন্টমেন্ট লেটার যাচাই করে মানসিক চাপমুক্ত থাকুন। ভিসা যাচাই (Visa Verification) এবং মেডিকেল ডকুমেন্ট যাচাইকরণ সেবা।
                            </p>
                            <a href="{{ route('contact') }}"
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
                                    <img src="assets/img/icon/unseen-icon4.png" alt="img" loading="lazy">
                                </div>
                            </div>
                            <p class=" fs-eight pra mb-4">
                                টুরিস্ট ভিসা যাচাই (Tourist Visa Verification) করুন এবং নিরাপদ ভ্রমণ করুন। ভ্রমণের ভিসা, হোটেল বুকিং এবং রিটার্ন টিকেট—সবকিছু আসল কিনা তা যাচাই করে আপনার ছুটি উপভোগ করুন। ভিসা যাচাই (Visa Verification), ট্রাভেল ডকুমেন্ট যাচাইকরণ এবং ভিসা অথেনটিসিটি চেক সেবা।
                            </p>
                            <a href="{{ route('contact') }}"
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
                            <img src="assets/img/testimonial/testimonial-thumb1.png" alt="img" loading="lazy">
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
                                                    <h4 class="black mb-1">মোঃ আশরাফুল ইসলাম</h4>
                                                    <span class="fs-six pra">যাত্রী, ঢাকা</span>
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
                                            "এজেন্ট আমাকে একটি ওয়ার্ক পারমিট দিয়েছিল। ভিসাভাই এর মাধ্যমে চেক করে দেখি ওটা ভুয়া ছিল। আমি বড় ধরনের প্রতারণা থেকে বেঁচে গেছি। ধন্যবাদ ভিসাভাই।"
                                        </p>
                                        <!-- Ele -->
                                        <img src="assets/img/testimonial/quote-michael.png" alt="img"
                                             class="testi-quote" loading="lazy">
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
                                <img src="assets/img/icon/picture-doller.png" alt="img" loading="lazy">
                            </div>
                            <h3 class="mb-xxl-4 mb-4 pb-1">
                                <a href="#" class="black fw-bold">
                                    সন্দেহ হলেই যাচাই করুন, নিরাপদ থাকুন
                                </a>
                            </h3>
                            <a href="{{ route('contact') }}"
                               class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 blackbg">
                                যোগাযোগ করুন
                                <i class="fa-solid fa-arrow-right-long last"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="picture-thumb1 h-100 rounded-4 overflow-hidden reveal-left">
                            <img src="assets/img/services/picture-thumb.png" alt="img" class="w-100 h-100 rounded-4" loading="lazy">
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
                            <img src="assets/img/services/badge.png" alt="img" loading="lazy">
                            <h3>
                                <a href="{{ route('about') }}" class="black fw-bold">
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
                    <h2 class="text-sm-start text-center black">
                        আমাদের বিশেষ সাপোর্ট সেবা
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
                                <img src="assets/img/services/gateway-thumb1.png" alt="img" class="w-100 rounded-4" loading="lazy">
                                <div class="content rounded-4 bg-white">
                                    <h3 class="mb-xxl-3 mb-2">
                                        <a href="{{ route('contact') }}" class="black">
                                            সঠিকতা যাচাই
                                        </a>
                                    </h3>
                                    <p class="fs-eight pra">
                                        আপনার সকল ডকুমেন্টের বানান, তথ্য ও ছবির সঠিকতা আমরা ম্যানুয়ালি চেক করি।
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gateway-items rounded-4">
                                <img src="assets/img/services/gateway-thumb2.png" alt="img" class="w-100 rounded-4" loading="lazy">
                                <div class="content rounded-4 bg-white">
                                    <h3 class="mb-xxl-3 mb-2">
                                        <a href="{{ route('contact') }}" class="black">
                                            এম্বাসি অ্যাপয়েন্টমেন্ট
                                        </a>
                                    </h3>
                                    <p class="fs-eight pra">
                                        সঠিক সময়ে এম্বাসি অ্যাপয়েন্টমেন্ট নিতে বা তারিখ পরিবর্তন করতে আমরা সহায়তা করি।
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gateway-items rounded-4">
                                <img src="assets/img/services/gateway-thumb3.png" alt="img" class="w-100 rounded-4" loading="lazy">
                                <div class="content rounded-4 bg-white">
                                    <h3 class="mb-xxl-3 mb-2">
                                        <a href="{{ route('contact') }}" class="black">
                                            ডকুমেন্ট প্রস্তুতি
                                        </a>
                                    </h3>
                                    <p class="fs-eight pra">
                                        ভিসা ইন্টারভিউ এর জন্য আপনার ফাইল ও ডকুমেন্ট সঠিকভাবে প্রস্তুত করতে সহায়তা।
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gateway Section end -->
        <!-- Pricing Section Start -->
        <section class="pricing-section space-top fix">
            <div class="container">
                <div
                    class="d-flex gap-3 flex-sm-nowrap flex-wrap align-items-end justify-content-sm-between justify-content-center pb-md-5 mb-4">
                    <h2 class="black">
                        আমাদের যাচাইকরণ প্যাকেজ
                    </h2>
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
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section Start -->
        <section class="why-choose-section fix section-padding white-bg">
            <div class="container">
                <div class="row justify-content-center mb-md-5 mb-4">
                    <div class="col-lg-8 text-center">
                        <h2 class="black mb-3">
                            কেন ভিসাভাই-এর ভিসা যাচাই (Visa Verification) সেবা?
                        </h2>
                        <p class="pra fs-six">
                            ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification) এবং অফার লেটার যাচাই (Offer Letter Verification) এর জন্য বাংলাদেশের সবচেয়ে বিশ্বস্ত এবং প্রফেশনাল ডকুমেন্ট যাচাইকরণ সেবা প্রদানকারী প্রতিষ্ঠান।
                        </p>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box rounded-4 p-4 h-100 white-bg border">
                            <div class="icon-box mb-3">
                                <div class="icon d-center n100-bg radius-circle d-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa-solid fa-shield-check fs-4 black"></i>
                                </div>
                            </div>
                            <h3 class="black mb-3">১০০% নির্ভরযোগ্য ভিসা যাচাই</h3>
                            <p class="pra fs-eight">
                                আমরা সরাসরি এম্বাসি এবং এয়ারলাইনসের অফিসিয়াল ডাটাবেস থেকে ভিসা যাচাই (Visa Verification) করি। ভিসা সত্যতা যাচাই, নকল ভিসা চেক এবং ভিসা অথেনটিসিটি চেকের জন্য আমাদের প্রফেশনাল সেবা নিন।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box rounded-4 p-4 h-100 white-bg border">
                            <div class="icon-box mb-3">
                                <div class="icon d-center n100-bg radius-circle d-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa-solid fa-clock fs-4 black"></i>
                                </div>
                            </div>
                            <h3 class="black mb-3">দ্রুততম ভিসা যাচাই সেবা</h3>
                            <p class="pra fs-eight">
                                ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification) এবং অফার লেটার যাচাই (Offer Letter Verification) এর জন্য ১২-২৪ ঘণ্টার মধ্যে রিপোর্ট প্রদান করি। জরুরি ক্ষেত্রে আরও দ্রুত সেবা প্রদান করা হয়।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box rounded-4 p-4 h-100 white-bg border">
                            <div class="icon-box mb-3">
                                <div class="icon d-center n100-bg radius-circle d-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa-solid fa-lock fs-4 black"></i>
                                </div>
                            </div>
                            <h3 class="black mb-3">১০০% নিরাপদ এবং গোপনীয়</h3>
                            <p class="pra fs-eight">
                                আপনার ব্যক্তিগত তথ্য এবং ডকুমেন্ট সম্পূর্ণ নিরাপদ। ভিসা যাচাই (Visa Verification) কাজ শেষে আমরা সকল তথ্য সার্ভার থেকে মুছে ফেলি। ডকুমেন্ট যাচাইকরণ সেবায় আপনার গোপনীয়তা আমাদের সর্বোচ্চ অগ্রাধিকার।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box rounded-4 p-4 h-100 white-bg border">
                            <div class="icon-box mb-3">
                                <div class="icon d-center n100-bg radius-circle d-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa-solid fa-users fs-4 black"></i>
                                </div>
                            </div>
                            <h3 class="black mb-3">অভিজ্ঞ এবং প্রফেশনাল টিম</h3>
                            <p class="pra fs-eight">
                                আমাদের অভিজ্ঞ টিম ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification) এবং অফার লেটার যাচাই (Offer Letter Verification) এর জন্য বছরের পর বছর ধরে কাজ করছে। হাজার হাজার সফল যাচাইকরণের অভিজ্ঞতা আমাদের সাথে।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box rounded-4 p-4 h-100 white-bg border">
                            <div class="icon-box mb-3">
                                <div class="icon d-center n100-bg radius-circle d-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa-solid fa-globe fs-4 black"></i>
                                </div>
                            </div>
                            <h3 class="black mb-3">সব দেশের ভিসা যাচাই</h3>
                            <p class="pra fs-eight">
                                আমরা সব দেশের ভিসা যাচাই (Visa Verification) করি: সৌদি আরব, ভারত, আয়ারল্যান্ড, নিউজিল্যান্ড, স্কটল্যান্ড এবং আরও অনেক দেশ। ভিসা ডকুমেন্ট যাচাই, ভিসা সত্যতা যাচাই এবং নকল ভিসা চেকের জন্য আমাদের সেবা নিন।
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box rounded-4 p-4 h-100 white-bg border">
                            <div class="icon-box mb-3">
                                <div class="icon d-center n100-bg radius-circle d-center mb-3" style="width: 60px; height: 60px;">
                                    <i class="fa-solid fa-headset fs-4 black"></i>
                                </div>
                            </div>
                            <h3 class="black mb-3">২৪/৭ কাস্টমার সাপোর্ট</h3>
                            <p class="pra fs-eight">
                                ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification) এবং অফার লেটার যাচাই (Offer Letter Verification) সম্পর্কে যেকোনো প্রশ্নের জন্য আমাদের ২৪/৭ কাস্টমার সাপোর্ট টিম আপনার পাশে আছে। <a href="{{ route('contact') }}" class="text-decoration-underline">যোগাযোগ করুন</a>।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Section End -->
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
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                        ভিসা যাচাই (Visa Verification) করতে কি কি ডকুমেন্ট লাগে?
                                    </button>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                         aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                ভিসা যাচাই (Visa Verification) এর জন্য আপনার ভিসা কপি, পাসপোর্ট নম্বর, ভিসা নম্বর এবং ভিসা ইস্যুর তারিখ দরকার। এয়ার টিকেট যাচাই (Air Ticket Verification) এর জন্য টিকেট নম্বর এবং পাসপোর্ট নম্বর প্রয়োজন। অফার লেটার যাচাই (Offer Letter Verification) এর জন্য অফার লেটার এবং কোম্পানির তথ্য প্রয়োজন।
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                        কি ধরনের ভিসা যাচাই (Visa Verification) করা যায়?
                                    </button>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                         aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                আমরা সব ধরনের ভিসা যাচাই (Visa Verification) করি: ওয়ার্ক পারমিট ভিসা যাচাই (Work Permit Visa Verification), স্টুডেন্ট ভিসা যাচাই (Student Visa Verification), টুরিস্ট ভিসা যাচাই (Tourist Visa Verification), মেডিকেল ভিসা যাচাই (Medical Visa Verification), বিজনেস ভিসা যাচাই এবং অন্যান্য সব ধরনের ভিসা ডকুমেন্ট যাচাইকরণ সেবা প্রদান করি।
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                        ভিসা যাচাই (Visa Verification) এর খরচ কত?
                                    </button>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                         aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                আমাদের সিঙ্গেল চেক প্যাকেজে ৳৫০০ প্রতি ডকুমেন্ট, কম্বো প্যাকে ৳১২০০ (ভিসা + টিকেট + অফার লেটার), এবং প্রিমিয়াম সাপোর্টে ৳২৫০০। ভিসা যাচাই (Visa Verification), এয়ার টিকেট যাচাই (Air Ticket Verification) এবং অফার লেটার যাচাই (Offer Letter Verification) এর জন্য আমাদের সাশ্রয়ী মূল্যের প্যাকেজ রয়েছে।
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                        ভিসা যাচাই (Visa Verification) রিপোর্ট কতটা নির্ভরযোগ্য?
                                    </button>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                         aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                আমাদের ভিসা যাচাই (Visa Verification) রিপোর্ট ১০০% নির্ভরযোগ্য। আমরা সরাসরি এম্বাসি এবং এয়ারলাইনসের অফিসিয়াল ডাটাবেস থেকে তথ্য যাচাই করি। ভিসা সত্যতা যাচাই, নকল ভিসা চেক এবং ভিসা অথেনটিসিটি চেকের জন্য আমাদের প্রফেশনাল সেবা নিন।
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-4 faq-thumb1 w-100 reveal-left overflow-hidden">
                            <img src="assets/img/faq/faq1.png" alt="img" class="w-100" loading="lazy">
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
                        <h2 class="black fw-bold">
                            সতর্কতামূলক ব্লগ ও নিউজ
                        </h2>
                    </div>
                    <a href="{{ route('blogs') }}"
                       class="common-btn heading-font box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden p1-bg rounded100">
                        সকল ব্লগ দেখুন
                        <i class="fas fa-arrow-right last"></i>
                    </a>
                </div>
                <div class="news-wrapper">
                    <div class="row justify-content-center g-4">
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="news-single-items rounded-4 overflow-hidden style1">
                                <div class="news-image reveal-left">
                                    <img src="assets/img/blog/blog-grid1.png" alt="news-img" loading="lazy">
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
                                        <a href="blog-details.html" class="black">
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
                                    <img src="assets/img/blog/blog-grid2.png" alt="news-img" loading="lazy">
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
                                        <a href="blog-details.html" class="black">
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
                                    <img src="assets/img/blog/blog-grid3.png" alt="news-img" loading="lazy">
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
                                        <a href="blog-details.html" class="black">
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
@endsection
