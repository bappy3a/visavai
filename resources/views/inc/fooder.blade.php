<footer class="footer-section blackbg fix pt-20">
    <div class="container">
        <div class="footer-widgets-wrapper">
            <div class="row g-lg-4 g-5 justify-content-between">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget footer-widgets-pragraph">
                        <div class="widget-head">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo/logo.webp') }}" alt="logo-img" style="width: 132px;height:40px">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p class="pra2 fs-eight">
                                ভিসাভাই হলো আপনার বিশ্বস্ত যাচাইকরণ সহযোগী। যেকোনো ভিসা, এয়ার টিকেট বা অফার লেটার আসল নাকি নকল, তা মুহূর্তেই যাচাই করে নিরাপদ থাকুন।
                            </p>
                            <div class="foot-address d-flex align-items-center gap-3 mb-xl-4 mb-3">
                                <div class="icon d-center rounded-circle">
                                    <i class="fa-solid fa-location-dot white"></i>
                                </div>
                                <div class="cont">
                                        <span class="fs-six white d-block mb-xl-2 mb-1">
                                            ঠিকানা
                                        </span>
                                    <h4 class="white">
                                        <a href="#" class="white">76/A, Road 11, Banani, Dhaka, Bangladesh, 1213</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="foot-address d-flex align-items-center gap-3">
                                <div class="icon d-center rounded-circle">
                                    <i class="fa-solid fa-phone white"></i>
                                </div>
                                <div class="cont">
                                        <span class="fs-six white d-block mb-xl-2 mb-1">
                                            ফোন নম্বর
                                        </span>
                                    <h4 class="white">
                                        <a href="tel:+8801319113344" class="white">+8801319113344</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget d-flex justify-content-lg-center footer-widgets-pragraph">
                        <div class="boxes">
                            <div class="widget-head">
                                <h3>Social Media</h3>
                            </div>
                            <div class="footer-content">
                                <p class="pra2 fs-eight">
                                    A visa is an official document that a permits entry into a specific country. It
                                    indicates
                                    holder's permission
                                </p>
                                <div class="social-wrapper d-flex align-items-center">
                                    <a href="https://www.facebook.com/visa.vai.1" target="_blank" class=" black"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/company/visa-vai/" target="_blank" class=" black"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/visa.vai/" target="_blank" class=" black"><i class="fab fa-instagram"></i></a>
                                    <a href="https://x.com/visa_vai" target="_blank" class=" black"><i class="fa-brands fa-x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget d-flex justify-content-lg-center">
                        <div class="boxes">
                            <div class="widget-head">
                                <h3>পেইজ</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="{{ route('about') }}">
                                        আমাদের সম্পর্কে
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        যোগাযোগ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('blogs') }}">
                                        ব্লগ ও নিউজ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div
                class="footer-wrapper d-flex flex-md-nowrap flex-wrap gap-2 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                <p class="cmn-white body-font fs-six">
                    &copy; {{ config('app.name') }} {{date('Y')}} | সর্বস্বত্ব সংরক্ষিত
                </p>
                <ul class="footer-menu">
                    <li>
                        <a href="#" class="fs-six body-font cmn-white">
                            শর্তাবলী
                        </a>
                    </li>
                    <li>
                        <a href="#" class="fs-six body-font cmn-white">
                            গোপনীয়তা নীতি
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="fs-six body-font cmn-white">
                            যোগাযোগ
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
