@extends('layouts.frontend')
@section('title','Contact Us')

@section('content')
<main>
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content">
                <h2 class="black">যোগাযোগ</h2>
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="{{ route('home') }}">হোম</a>
                    </li>
                    <li><i class="fa-solid fa-chevron-right p1-clr"></i></li>
                    <li>যোগাযোগ</li>
                </ul>
            </div>
        </div>
        <!-- Element -->
        <img src="{{ asset('assets/img/banner/breadcrumb-ele.png') }}" alt="img" class="inner-element">
    </section>
    <!-- Contact Info & Map Section Start -->
    <section class="contact-info-map-section section-padding fix bg-white">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Info -->
                <div class="col-md-6 col-lg-4">
                    <div class="contact-info-card">
                        <h3 class="contact-info-title mb-4">যোগাযোগের তথ্য</h3>
                        <ul class="contact-info d-grid gap-3">
                            <li class="d-flex align-items-start gap-3">
                                <div class="contact-icon-wrapper">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">ঠিকানা</h5>
                                    <p class="mb-0 black fs-eight">76/A, Road 11, Banani, Dhaka, Bangladesh, 1213</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <div class="contact-icon-wrapper">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">ফোন</h5>
                                    <a href="tel:+8801319113344" class="black fs-eight text-decoration-none">+8801319113344</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <div class="contact-icon-wrapper">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">ইমেইল</h5>
                                    <a href="mailto:visavaiconsulting@gmail.com" class="black fs-eight text-decoration-none">visavaiconsulting@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Map -->
                <div class="col-md-6 col-lg-8">
                    <div class="map-area-wrapper">
                        <h3 class="map-title mb-4">আমাদের অবস্থান</h3>
                        <div class="map-area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8974!2d90.4064!3d23.7949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70b72f1b8b1%3A0xfc07a6346340c7fa!2sBanani%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1726005337075!5m2!1sen!2sbd"
                                width="100%"
                                height="400"
                                style="border:0; border-radius: 12px;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Info & Map Section End -->
    <!-- Contact Form Section -->
    <section class="contact-form-section fix space-bottom bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="professional-form-wrapper">
                        <div class="form-header mb-4">
                            <h2 class="form-title mb-2">যাচাইয়ের জন্য জমা দিন</h2>
                            <p class="form-subtitle text-muted">আপনার ডকুমেন্ট যাচাইয়ের জন্য নিচের ফর্মটি পূরণ করুন</p>
                        </div>
                        <form action="{{ route('contact.store') }}" method="POST" id="contact-form" enctype="multipart/form-data" class="professional-contact-form">
                            @csrf
                            <div class="row g-0">
                                <!-- Name Field -->
                                <div class="col-12">
                                    <div class="form-group-wrapper">
                                        <label for="name" class="form-label-custom">
                                            <i class="fa-solid fa-user form-icon"></i>
                                            <span>আপনার নাম <span class="text-danger">*</span></span>
                                        </label>
                                        <div class="input-wrapper">
                                            <input type="text" class="form-control-custom" name="name" id="name" required placeholder="আপনার পূর্ণ নাম লিখুন">
                                        </div>
                                    </div>
                                </div>

                                <!-- Email/Mobile Field -->
                                <div class="col-12">
                                    <div class="form-group-wrapper">
                                        <label for="email_or_mobile" class="form-label-custom">
                                            <i class="fa-solid fa-envelope form-icon"></i>
                                            <span>ইমেইল অথবা মোবাইল নম্বর <span class="text-danger">*</span></span>
                                        </label>
                                        <div class="input-wrapper">
                                            <input type="text" class="form-control-custom" name="email" id="email_or_mobile" required placeholder="example@email.com অথবা 01XXXXXXXXX">
                                        </div>
                                        <small class="form-help-text">
                                            <i class="fa-solid fa-info-circle me-1"></i>
                                            ইমেইল (example@email.com) অথবা মোবাইল নম্বর (01XXXXXXXXX) দিন
                                        </small>
                                    </div>
                                </div>

                                <!-- Verification Type Field -->
                                <div class="col-12">
                                    <div class="form-group-wrapper">
                                        <label for="verification_type" class="form-label-custom">
                                            <i class="fa-solid fa-file-check form-icon"></i>
                                            <span>যাচাইয়ের ধরন <span class="text-danger">*</span></span>
                                        </label>
                                        <div class="input-wrapper select-wrapper">
                                            <i class="fa-solid fa-chevron-down select-arrow"></i>
                                            <select name="verification_type" id="verification_type" class="form-control-custom form-select-custom" required>
                                                <option value="" disabled selected>যাচাইয়ের ধরন নির্বাচন করুন</option>
                                                <option value="visa">ভিসা</option>
                                                <option value="air_ticket">এয়ার টিকেট</option>
                                                <option value="offer_letter">অফার লেটার</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Message Field -->
                                <div class="col-12">
                                    <div class="form-group-wrapper">
                                        <label for="message" class="form-label-custom">
                                            <i class="fa-solid fa-message form-icon"></i>
                                            <span>বার্তা / ডকুমেন্ট নম্বর <span class="text-danger">*</span></span>
                                        </label>
                                        <div class="input-wrapper">
                                            <textarea name="message" id="message" class="form-control-custom" required rows="4" placeholder="আপনার বার্তা অথবা ডকুমেন্ট নম্বর লিখুন"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- File Upload Field -->
                                <div class="col-12">
                                    <div class="form-group-wrapper">
                                        <label for="files" class="form-label-custom">
                                            <i class="fa-solid fa-paperclip form-icon"></i>
                                            <span>ডকুমেন্ট/ফাইল আপলোড করুন</span>
                                        </label>
                                        <div class="custom-file-upload">
                                            <input type="file" class="form-control file-input-hidden" name="files[]" id="files" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.gif,.webp">
                                            <label for="files" class="custom-file-label">
                                                <div class="file-upload-area">
                                                    <div class="file-upload-icon">
                                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                                    </div>
                                                    <div class="file-upload-content">
                                                        <span class="file-upload-title">ফাইল নির্বাচন করুন অথবা এখানে টেনে আনুন</span>
                                                        <small class="file-upload-subtitle">PDF, DOC, DOCX, JPG, PNG (সর্বোচ্চ 5MB প্রতি ফাইল)</small>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div id="file-list" class="mt-3"></div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn-submit-custom">
                                        <span>জমা দিন</span>
                                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="ajax-response-wrapper">
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section -->
</main>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        const fileInput = $('#files');
        const fileList = $('#file-list');
        const customLabel = $('.custom-file-label');

        fileInput.on('change', function() {
            const files = this.files;
            fileList.empty();

            if (files.length > 0) {
                // Update label text
                customLabel.find('.file-upload-title').text(files.length + ' টি ফাইল নির্বাচিত হয়েছে');
                customLabel.find('.file-upload-area').css({
                    'border-color': '#22c55e',
                    'background-color': 'rgba(34, 197, 94, 0.05)'
                });
                
                let fileListHtml = '<div class="selected-files"><strong><i class="fa-solid fa-check-circle me-2"></i>নির্বাচিত ফাইল (' + files.length + '):</strong><ul class="list-unstyled">';
                
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const fileSize = (file.size / 1024 / 1024).toFixed(2); // Convert to MB
                    const fileIcon = getFileIcon(file.name);
                    fileListHtml += '<li>';
                    fileListHtml += '<i class="' + fileIcon + '"></i>';
                    fileListHtml += '<div class="flex-grow-1">';
                    fileListHtml += '<span class="text-dark fw-medium d-block">' + file.name + '</span>';
                    fileListHtml += '<small class="text-muted">' + fileSize + ' MB</small>';
                    fileListHtml += '</div>';
                    fileListHtml += '</li>';
                }
                
                fileListHtml += '</ul></div>';
                fileList.html(fileListHtml);
            } else {
                customLabel.find('.file-upload-title').text('ফাইল নির্বাচন করুন অথবা এখানে টেনে আনুন');
                customLabel.find('.file-upload-area').css({
                    'border-color': '#d0d0d0',
                    'background-color': '#fafafa'
                });
                fileList.empty();
            }
        });
        
        function getFileIcon(filename) {
            const ext = filename.split('.').pop().toLowerCase();
            const icons = {
                'pdf': 'fa-solid fa-file-pdf',
                'doc': 'fa-solid fa-file-word',
                'docx': 'fa-solid fa-file-word',
                'jpg': 'fa-solid fa-file-image',
                'jpeg': 'fa-solid fa-file-image',
                'png': 'fa-solid fa-file-image',
                'gif': 'fa-solid fa-file-image',
                'webp': 'fa-solid fa-file-image'
            };
            return icons[ext] || 'fa-solid fa-file';
        }
    });
</script>
@endsection

@section('css')
<style>
    /* Professional Form Wrapper - Scoped to avoid conflicts */
    .professional-form-wrapper {
        background: #ffffff !important;
        border-radius: 20px !important;
        padding: 50px !important;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08) !important;
        border: 1px solid #e3e3e3 !important;
    }

    .professional-form-wrapper .form-header {
        border-bottom: 2px solid #f0f0f0 !important;
        padding-bottom: 25px !important;
        margin-bottom: 35px !important;
    }

    .professional-form-wrapper .form-title {
        font-size: 28px !important;
        font-weight: 700 !important;
        color: #090F1F !important;
        margin: 0 !important;
        line-height: 1.3 !important;
    }

    .professional-form-wrapper .form-subtitle {
        font-size: 14px !important;
        margin: 0 !important;
        color: #666 !important;
    }

    /* Form Group Wrapper */
    .professional-form-wrapper .form-group-wrapper {
        margin-bottom: 30px !important;
    }

    .professional-form-wrapper .form-label-custom {
        display: flex !important;
        align-items: center !important;
        gap: 8px !important;
        font-weight: 600 !important;
        font-size: 14px !important;
        color: #090F1F !important;
        margin-bottom: 12px !important;
    }

    .professional-form-wrapper .form-icon {
        color: #83CD8F !important;
        font-size: 16px !important;
        width: 20px !important;
        flex-shrink: 0 !important;
    }

    /* Input Wrapper */
    .professional-form-wrapper .input-wrapper {
        position: relative !important;
    }

    .professional-form-wrapper .form-control-custom {
        width: 100% !important;
        padding: 16px 20px !important;
        border: 2px solid #e3e3e3 !important;
        border-radius: 12px !important;
        font-size: 15px !important;
        color: #2C3347 !important;
        background-color: #ffffff !important;
        transition: all 0.3s ease !important;
        outline: none !important;
        box-sizing: border-box !important;
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        appearance: none !important;
        font-family: inherit !important;
    }

    .professional-form-wrapper .form-control-custom:focus {
        border-color: #83CD8F !important;
        box-shadow: 0 0 0 4px rgba(131, 205, 143, 0.1) !important;
        background-color: #ffffff !important;
    }

    .professional-form-wrapper .form-control-custom::placeholder {
        color: #999 !important;
        opacity: 0.7 !important;
    }

    .professional-form-wrapper textarea.form-control-custom {
        resize: vertical !important;
        min-height: 120px !important;
        font-family: inherit !important;
    }

    /* Select Wrapper */
    .professional-form-wrapper .select-wrapper {
        position: relative !important;
    }

    .professional-form-wrapper .select-arrow {
        position: absolute !important;
        right: 18px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        color: #999 !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    .professional-form-wrapper .form-select-custom {
        appearance: none !important;
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        padding-right: 45px !important;
        cursor: pointer !important;
        color: #2C3347 !important;
        background-color: #ffffff !important;
    }

    .professional-form-wrapper .form-select-custom:focus {
        border-color: #83CD8F !important;
        box-shadow: 0 0 0 4px rgba(131, 205, 143, 0.1) !important;
        color: #2C3347 !important;
        background-color: #ffffff !important;
    }

    .professional-form-wrapper .form-select-custom option {
        color: #2C3347 !important;
        background-color: #ffffff !important;
        padding: 10px !important;
    }

    .professional-form-wrapper .form-select-custom option:checked {
        color: #2C3347 !important;
        background-color: #f8f9fa !important;
    }

    .professional-form-wrapper .form-select-custom option:hover {
        background-color: rgba(131, 205, 143, 0.1) !important;
    }

    .nice-select .option, .nice-select .option.focus, .nice-select .option.selected.focus{
        color: #ffffff !important;
    }
    /* Help Text */
    .professional-form-wrapper .form-help-text {
        display: flex !important;
        align-items: center !important;
        font-size: 12px !important;
        color: #666 !important;
        margin-top: 8px !important;
    }

    /* File Upload */
    .professional-form-wrapper .custom-file-upload {
        position: relative !important;
    }

    .professional-form-wrapper .custom-file-upload .file-input-hidden {
        position: absolute !important;
        opacity: 0 !important;
        width: 0 !important;
        height: 0 !important;
        overflow: hidden !important;
        z-index: -1 !important;
    }

    .professional-form-wrapper .custom-file-label {
        cursor: pointer !important;
        display: block !important;
    }

    .professional-form-wrapper .file-upload-area {
        border: 2px dashed #d0d0d0 !important;
        border-radius: 12px !important;
        padding: 40px 25px !important;
        text-align: center !important;
        background: #fafafa !important;
        transition: all 0.3s ease !important;
    }

    .professional-form-wrapper .custom-file-label:hover .file-upload-area {
        border-color: #83CD8F !important;
        background-color: rgba(131, 205, 143, 0.05) !important;
    }

    .professional-form-wrapper .file-upload-icon {
        margin-bottom: 15px !important;
    }

    .professional-form-wrapper .file-upload-icon i {
        font-size: 48px !important;
        color: #83CD8F !important;
    }

    .professional-form-wrapper .file-upload-content {
        display: flex !important;
        flex-direction: column !important;
        gap: 5px !important;
    }

    .professional-form-wrapper .file-upload-title {
        font-weight: 600 !important;
        font-size: 15px !important;
        color: #090F1F !important;
        display: block !important;
    }

    .professional-form-wrapper .file-upload-subtitle {
        font-size: 13px !important;
        color: #666 !important;
    }

    /* Selected Files */
    .professional-form-wrapper #file-list .selected-files {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%) !important;
        border: 2px solid #e3e3e3 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        margin-top: 15px !important;
    }

    .professional-form-wrapper #file-list .selected-files strong {
        display: flex !important;
        align-items: center !important;
        font-size: 15px !important;
        margin-bottom: 15px !important;
        color: #22c55e !important;
    }

    .professional-form-wrapper #file-list .selected-files ul {
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
    }

    .professional-form-wrapper #file-list .selected-files ul li {
        display: flex !important;
        align-items: center !important;
        gap: 12px !important;
        padding: 12px !important;
        background: #ffffff !important;
        border-radius: 8px !important;
        margin-bottom: 10px !important;
        border: 1px solid #e3e3e3 !important;
        transition: all 0.2s ease !important;
    }

    .professional-form-wrapper #file-list .selected-files ul li:hover {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08) !important;
        transform: translateY(-1px) !important;
    }

    .professional-form-wrapper #file-list .selected-files ul li:last-child {
        margin-bottom: 0 !important;
    }

    .professional-form-wrapper #file-list .selected-files ul li i {
        font-size: 24px !important;
    }

    /* Submit Button */
    .professional-form-wrapper .btn-submit-custom {
        width: 100% !important;
        padding: 16px 30px !important;
        background: linear-gradient(135deg, #83CD8F 0%, #6bb87a 100%) !important;
        color: #ffffff !important;
        border: none !important;
        border-radius: 12px !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 10px !important;
        cursor: pointer !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 15px rgba(131, 205, 143, 0.3) !important;
    }

    .professional-form-wrapper .btn-submit-custom:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(131, 205, 143, 0.4) !important;
        background: linear-gradient(135deg, #6bb87a 0%, #83CD8F 100%) !important;
    }

    .professional-form-wrapper .btn-submit-custom:active {
        transform: translateY(0) !important;
    }

    .professional-form-wrapper .btn-submit-custom i {
        transition: transform 0.3s ease !important;
    }

    .professional-form-wrapper .btn-submit-custom:hover i {
        transform: translateX(5px) !important;
    }

    /* AJAX Response */
    .professional-form-wrapper .ajax-response-wrapper {
        margin-top: 20px !important;
    }

    .professional-form-wrapper .ajax-response {
        padding: 15px 20px !important;
        border-radius: 12px !important;
        font-size: 14px !important;
        font-weight: 500 !important;
        text-align: center !important;
    }

    .professional-form-wrapper .ajax-response.success {
        background: rgba(34, 197, 94, 0.1) !important;
        border: 2px solid #22c55e !important;
        color: #16a34a !important;
    }

    .professional-form-wrapper .ajax-response.error {
        background: rgba(239, 68, 68, 0.1) !important;
        border: 2px solid #ef4444 !important;
        color: #dc2626 !important;
    }

    /* Contact Info & Map Section */
    .contact-info-map-section {
        padding: 60px 0 !important;
    }

    .contact-info-card {
        background: #ffffff !important;
        border-radius: 20px !important;
        padding: 40px !important;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08) !important;
        border: 1px solid #e3e3e3 !important;
        height: 100% !important;
    }

    .contact-info-title {
        font-size: 24px !important;
        font-weight: 700 !important;
        color: #090F1F !important;
        margin-bottom: 30px !important;
    }

    .contact-icon-wrapper {
        width: 50px !important;
        height: 50px !important;
        background: rgba(131, 205, 143, 0.1) !important;
        border-radius: 12px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        flex-shrink: 0 !important;
    }

    .contact-icon-wrapper i {
        color: #83CD8F !important;
        font-size: 20px !important;
    }

    .contact-info-card h5 {
        font-size: 16px !important;
        font-weight: 600 !important;
        color: #090F1F !important;
        margin-bottom: 8px !important;
    }

    .map-area-wrapper {
        height: 100% !important;
    }

    .map-title {
        font-size: 24px !important;
        font-weight: 700 !important;
        color: #090F1F !important;
        margin-bottom: 20px !important;
    }

    .map-area {
        border-radius: 12px !important;
        overflow: hidden !important;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08) !important;
        border: 1px solid #e3e3e3 !important;
    }

    .map-area iframe {
        width: 100% !important;
        height: 400px !important;
        border: none !important;
        display: block !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .professional-form-wrapper {
            padding: 25px 20px !important;
        }

        .professional-form-wrapper .form-title {
            font-size: 24px !important;
        }

        .professional-form-wrapper .file-upload-area {
            padding: 20px 15px !important;
        }

        .professional-form-wrapper .file-upload-icon i {
            font-size: 36px !important;
        }

        .contact-info-card {
            padding: 30px 20px !important;
            margin-bottom: 30px !important;
        }

        .map-area iframe {
            height: 300px !important;
        }
    }
</style>
@endsection
