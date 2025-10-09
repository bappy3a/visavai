@extends('layouts.frontend')
@section('title','Contact Us')

@section('content')
<main>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content">
                <h2 class="black">Contact Us</h2>
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('assets/img/banner/breadcrumb-ele.png') }}" alt="img" class="inner-element">
    </section>
    <!-- Contact Section Start -->
    <section class="contact-section section-padding fix">
        <div class="container">
            <div class="contact-info-area row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <ul class="contact-info d-grid gap-3">
                        <li class="mb-2">
                            <h3 class="black">Bangladesh,Dhaka</h3>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-location-dot p1-clr"></i>
                            <a href="#" class="black fs-eight">3517 W. Gray St. Utica, Pennsylvania</a>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-phone p1-clr"></i>
                            <a href="tel:(219)555-0114" class="black fs-eight">(219) 555-0114</a>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-envelope p1-clr"></i>
                            <a href="mailto:alma.lawson@example.com" class="black fs-eight">alma.lawson@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <ul class="contact-info d-grid gap-3">
                        <li class="mb-2">
                            <h3 class="black">Toronto, Canada</h3>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-location-dot p1-clr"></i>
                            <a href="#" class="black fs-eight">3517 W. Gray St. Utica, Pennsylvania</a>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-phone p1-clr"></i>
                            <a href="tel:(219)555-0114" class="black fs-eight">(219) 555-0114</a>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-envelope p1-clr"></i>
                            <a href="mailto:alma.lawson@example.com" class="black fs-eight">alma.lawson@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <ul class="contact-info d-grid gap-3">
                        <li class="mb-2">
                            <h3 class="black">Riyad, Saudia Arabia</h3>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-location-dot p1-clr"></i>
                            <a href="#" class="black fs-eight">3517 W. Gray St. Utica, Pennsylvania</a>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-phone p1-clr"></i>
                            <a href="tel:(219)555-0114" class="black fs-eight">(219) 555-0114</a>
                        </li>
                        <li class="d-flex align-items-center gap-xxl-3 gap-2">
                            <i class="fa-solid fa-envelope p1-clr"></i>
                            <a href="mailto:alma.lawson@example.com" class="black fs-eight">alma.lawson@example.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Adjusting Map -->
    <section class="adujsting-map-section fix space-bottom bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="ticket-booking-content">
                        <h2 class="black mb-4 pb-xxl-3">Ticket Booking</h2>
                        <form action="https://vizoar-html.vercel.app/assets/mail.php" method="POST" id="contact-form">
                            <div class="row g-xxl-4 g-3">
                                <div class="col-lg-6">
                                    <div class="ticket-booking-widget">
                                        <select name="checkIn" required>
                                            <option value="" disabled selected>Check In</option>
                                            <option value="08:00 AM">08:00 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="03:00 PM">03:00 PM</option>
                                            <option value="06:00 PM">06:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ticket-booking-widget">
                                        <select name="checkOut" required>
                                            <option value="" disabled selected>Check Out</option>
                                            <option value="08:00 AM">08:00 AM</option>
                                            <option value="12:00 P">12:00 PM</option>
                                            <option value="03:00 PM">03:00 PM</option>
                                            <option value="06:00 PM">06:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ticket-booking-widget">
                                        <select name="location" required>
                                            <option value="" disabled selected>Location</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ticket-booking-widget">
                                        <select name="date" required>
                                            <option value="" disabled selected>Date</option>
                                            <option value="2025-01-21">2025-01-21</option>
                                            <option value="2025-01-22">2025-01-22</option>
                                            <option value="2025-01-23">2025-01-23</option>
                                            <option value="2025-01-24">2025-01-24</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="ticket-booking-widget">
                                        <textarea name="message" required rows="3"
                                            placeholder="Message here.."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="common-btn box-style first-box d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden rounded-5 p2-bg">
                                        Book Now
                                        <i class="fa-solid fa-arrow-right-long last"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52816169.558200695!2d-161.49265223136007!3d36.102185713814805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1726005337075!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Adjusting Map -->
</main>
@endsection

@section('js')
@endsection

@section('css')
@endsection
