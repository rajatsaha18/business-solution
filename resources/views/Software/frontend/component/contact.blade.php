@php
    $setting = App\Models\SoftwareGeneralSetting::first();
@endphp
{{-- @dd($setting) --}}
<div class="contact-us-area infotechno-contact-us-bg section-space--pt_100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="image">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/banners/home-cybersecurity-contact-bg-image.webp" alt="">
                </div>
            </div>

            <div class="col-lg-4 ms-auto">
                <div class="contact-info style-two text-left">

                    {{-- <div class="contact-info-title-wrap text-center">
                        <h3 class="heading  mb-10">4.9/5.0</h3>
                        <div class="ht-star-rating lg-style">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="sub-text">by 700+ customers for 3200+ clients</p>
                    </div> --}}

                    <div class="contact-list-item">
                        <a href="tel:190068668" class="single-contact-list">
                            <div class="content-wrap">
                                <div class="content">
                                    <div class="icon">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                    <div class="main-content">
                                        {{-- @dd($setting->email) --}}
                                        <h6 class="heading">{{ $setting->phone_text }}</h6>
                                        {{-- @dd($setting) --}}
                                        <div class="text fs-5">{{ $setting->phone_number }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="mailto:hello@mitech.com" class="single-contact-list">
                            <div class="content-wrap">
                                <div class="content">
                                    <div class="icon">
                                        <span class="far fa-envelope"></span>
                                    </div>
                                    <div class="main-content">
                                        <h6 class="heading">{{ $setting->email_text }}</h6>
                                        <div class="text fs-5">{{ $setting->email_address }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>