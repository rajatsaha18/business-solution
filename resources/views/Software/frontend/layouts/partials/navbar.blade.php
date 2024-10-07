<style>
    @media (min-width: 768px) {
        .navListSpace {
            padding: 10px !important;
        }

        .navMenuAling {
            justify-content: space-between !important;
        }

        .navItem {
            flex-direction: row-reverse
        }


        .buttonSize {
            padding: 10px !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            background-color: #ffffff;
            color: #fff !important;
            border-radius: 3px !important;

        }

    }


    @media (max-width: 768px) {
        /* .backButton {
            display: inline-block; 
            font-size: 12px; 
        } */

        .buttonSizes {
            padding: 10px !important;

            font-weight: 600 !important;
            background-color: #FFFFFF;
            color: #ffffff !important;
            border-radius: 3px !important;

        }

        .buttonSizes:hover {
            background-color: #FFFFFF;
            color: #ffffff !important;
            border: 1px solid #ffffff !important;
            border-radius: 3px !important;
        }

        .buttonSizes:focus {
            background-color: #fff;
            color: #ffffff !important;
            border: 1px solid #ffffff !important;
            border-radius: 3px !important;
        }

        .buttonSizes:active {
            background-color: #fff;
            color: #ffffff !important;
            border: 1px solid #ffffff !important;
            border-radius: 3px !important;
        }
    }
</style>

@php
$logo = App\Models\SoftwareGeneralSetting::first();

@endphp

<div class="header-area">

    <div class="header-top-bar-info bg-gray d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-wrap">
                        <div class="top-bar-left">
                            {{-- <a class=" buttonSize" href="{{route('home')}}"> << Back to Business Solution</a> --}}
                        </div>
                        <div class="top-bar-right">
                            <ul class="top-bar-info">
                                <li class="info-item">
                                    <a href="tel:01228899900" class="info-link">
                                        <i class="info-icon fa fa-phone"></i>

                                        <span class="info-text"><strong>{{ $logo->phone_number }}</strong></span>
                                    </a>
                                </li>
                                <li class="info-item">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span class="info-text">{{ $logo->email_address }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-wrap header-sticky" style="background-color: #00006B">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 px-0">
                    <div class="header position-relative mx-2">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="{{ route('home') }}">
                                {{-- <div class="backButton"> --}}
                                <a class="btn bg-white text-black btn-sm px-2 py-0 fw-bolder" style="width:250px;" href="{{route('home')}}">
                                    << Back to Business Solution</a>
                                        {{-- </div> --}}
                                        {{-- <img src="{{ asset($logo->dark_logo) }}" aria-label="Mitech Logo" width="160" height="48" class="img-fluid" alt=""> --}}
                                </a>


                        </div>
                        {{-- <div class="top-bar-left backButton">
                            <a class=" buttonSizes " href="{{route('home')}}"> << Back to Business Solution</a>
                    </div> --}}
                    <div class="header-right navMenuAling navItem">

                        <!-- navigation menu -->
                        <div class="header__navigation menu-style-three d-none d-xl-block">
                            <nav class="navigation-menu">

                                <ul>
                                    <li class="has-children--multilevel-submenu navListSpace">
                                        <a class="text-white" href="{{route('encrypt-url')}}"><span class="text-white">HOME</span></a>
                                        {{-- <ul class="submenu">
                                                <li><a href="index-infotechno.html"><span>Software & Techology</span></a></li>
                                                <li><a href="index-processing.html"><span>Startup Business</span></a></li>
                                                <li><a href="index-appointment.html"><span>IT Agency</span></a></li>
                                                <li><a href="index-services.html"><span>IT Services</span></a></li>
                                                <li><a href="index-resolutions.html"><span>IT Solution</span></a></li>
                                                <li><a href="index-cybersecurity.html"><span>Cyber Security</span></a></li>
                                                <li><a href="index-modern-it-company.html"><span>Modern IT Company</span></a></li>
                                                <li><a href="index-machine-learning.html"><span>Machine Learning</span></a></li>
                                                <li><a href="index-software-innovation.html"><span>Software Innovation</span></a></li>
                                            </ul> --}}
                                    </li>
                                    <li class="has-children has-children--multilevel-submenu navListSpace">

                                        <a class="text-white" href="#"><span class="text-white">COMPANY</span></a>
                                        <ul class="submenu">
                                            <li>
                                                {{-- <li class="has-children"> --}}
                                                <a class="text-black" href="{{route('about-us')}}"><span class="text-black">ABOUT US</span></a>
                                                {{-- <a href="about-us-01.html"><span  class="text-black ">About us</span></a> --}}
                                                {{-- <ul class="submenu">
                                                        <li><a href="about-us-01.html"><span  class="text-black">About us 01</span></a></li>
                                                        <li><a href="about-us-02.html"><span  class="text-black">About us 02</span></a></li>
                                                        <li class="has-children">
                                                            <a href="#"><span  class="text-black">Submenu Level Two</span></a>
                                                            <ul class="submenu">
                                                                <li><a href="#"><span  class="text-black">Submenu Level Three</span></a></li>
                                                                <li><a href="#"><span  class="text-black">Submenu Level Three</span></a></li>
                                                                <li><a href="#"><span  class="text-black">Submenu Level Three</span></a></li>
                                                            </ul>
                                                        </li>
                                                    </ul> --}}
                                            </li>
                                            <li><a class="text-black" href="{{route('portfolio')}}"><span class="text-black">PORTFOLIO</span></a></li>
                                            <li class="">
                                                <a class="text-black" href="{{route('team')}}"><span class="text-black">TEAM</span></a>
                                            </li>
                                            {{-- <li><a href="contact-us.html"><span  class="text-black">Contact us</span></a></li>
                                                <li><a href="leadership.html"><span  class="text-black">Leadership</span></a></li>
                                                <li><a href="why-choose-us.html"><span  class="text-black">Why choose us</span></a></li>
                                                <li><a href="our-history.html"><span  class="text-black">Our history</span></a></li>
                                                <li><a href="faqs.html"><span  class="text-black">FAQs</span></a></li>
                                                <li><a href="careers.html"><span  class="text-black">Careers</span></a></li>
                                                <li><a href="pricing-plans.html"><span  class="text-black">Pricing plans</span></a></li> --}}
                                        </ul>
                                    </li>


                                    <li class="has-children has-children--multilevel-submenu navListSpace">
                                        <a class="text-white" href="#"><span class="text-white">PRODUCTS</span></a>
                                        @php
                                        $pages = App\Models\SoftwarePage::where('category_id',5)->where('status',1)->get();
                                        @endphp
                                        {{-- <a href="#"><span  class="text-white">IT solutions</span></a> --}}
                                        <ul class="submenu">

                                            {{-- @foreach ($pages as $page)
                                                    <li  class="mb-2"><a href="{{route('page-details',$page->slug)}}"><i class="uil uil-angle-right-b me-1"></i> {{$page->name}}</a>
                                    </li>
                                    @endforeach --}}
                                    @foreach ($pages as $page)
                                    <li><a class="text-black " href="{{route('page-details',$page->slug)}}"><span class="text-black">{{$page->name}}</span></a></li>
                                    @endforeach
                                    {{-- <li><a href="managed-it-service.html"><span  class="text-white">Managed IT Services</span></a></li>
                                                <li><a href="industries.html"><span  class="text-white">Industries</span></a></li>
                                                <li><a href="business-solution.html"><span  class="text-white">Business solution</span></a></li>
                                                <li><a href="it-services-details.html"><span  class="text-white">IT Services Details</span></a></li> --}}
                                </ul>
                                </li>
                                {{-- <li class="has-children has-children--multilevel-submenu navListSpace">
                                            <a href="#"><span  class="text-white">PORTFOLIO</span></a>
                                            
                                            <ul class="submenu">
                                                <li><a href="it-services.html"><span  class="text-white">IT Services</span></a></li>
                                                <li><a href="managed-it-service.html"><span  class="text-white">Managed IT Services</span></a></li>
                                                <li><a href="industries.html"><span  class="text-white">Industries</span></a></li>
                                                <li><a href="business-solution.html"><span  class="text-white">Business solution</span></a></li>
                                                <li><a href="it-services-details.html"><span  class="text-white">IT Services Details</span></a></li>
                                            </ul>
                                        </li> --}}
                                <li class="navListSpace">
                                    <a class="text-white" href="{{route('services')}}"><span class="text-white">SERVICES</span></a>
                                    {{-- <a href="#"><span  class="text-white">Elements</span></a> --}}
                                    <!-- mega menu -->
                                    {{-- <ul class="megamenu megamenu--mega">
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 01</h2>
                                                    <ul>
                                                        <li><a href="element-accordion.html"><span  class="text-white">Accordions & Toggles</span></a></li>
                                                        <li><a href="element-box-icon.html"><span  class="text-white">Box Icon</span></a></li>
                                                        <li><a href="element-box-image.html"><span  class="text-white">Box Image</span></a></li>
                                                        <li><a href="element-box-large-image.html"><span  class="text-white">Box Large Image</span></a></li>
                                                        <li><a href="element-buttons.html"><span  class="text-white">Buttons</span></a></li>
                                                        <li><a href="element-cta.html"><span  class="text-white">Call to action</span></a></li>
                                                        <li><a href="element-client-logo.html"><span  class="text-white">Client Logo</span></a></li>
                                                        <li><a href="element-countdown.html"><span  class="text-white">Countdown</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 02</h2>
                                                    <ul>
                                                        <li><a href="element-counters.html"><span  class="text-white">Counters</span></a></li>
                                                        <li><a href="element-dividers.html"><span  class="text-white">Dividers</span></a></li>
                                                        <li><a href="element-flexible-image-slider.html"><span  class="text-white">Flexible image slider</span></a></li>
                                                        <li><a href="element-google-map.html"><span  class="text-white">Google Map</span></a></li>
                                                        <li><a href="element-gradation.html"><span  class="text-white">Gradation</span></a></li>
                                                        <li><a href="element-instagram.html"><span  class="text-white">Instagram</span></a></li>
                                                        <li><a href="element-lists.html"><span  class="text-white">Lists</span></a></li>
                                                        <li><a href="element-message-box.html"><span  class="text-white">Message box</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 03</h2>
                                                    <ul>
                                                        <li><a href="element-popup-video.html"><span  class="text-white">Popup Video</span></a></li>
                                                        <li><a href="element-pricing-box.html"><span  class="text-white">Pricing Box</span></a></li>
                                                        <li><a href="element-progress-bar.html"><span  class="text-white">Progress Bar</span></a></li>
                                                        <li><a href="element-progress-circle.html"><span  class="text-white">Progress Circle</span></a></li>
                                                        <li><a href="element-rows-columns.html"><span  class="text-white">Rows & Columns</span></a></li>
                                                        <li><a href="element-social-networks.html"><span  class="text-white">Social Networks</span></a></li>
                                                        <li><a href="element-tabs.html"><span  class="text-white">Tabs</span></a></li>
                                                        <li><a href="element-team-member.html"><span  class="text-white">Team member</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 04</h2>
                                                    <ul>
                                                        <li><a href="element-testimonials.html"><span  class="text-white">Testimonials</span></a></li>
                                                        <li><a href="element-timeline.html"><span  class="text-white">Timeline</span></a></li>
                                                        <li><a href="element-carousel-sliders.html"><span  class="text-white">Carousel Sliders</span></a></li>
                                                        <li><a href="element-typed-text.html"><span  class="text-white">Typed Text</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                </li>
                                {{-- <li class=" has-children--multilevel-submenu navListSpace">
                                            <a class="text-white" href="{{route('portfolio')}}"><span class="text-white">PORTFOLIO</span></a>
                                <a href="#"><span class="text-white">Elements</span></a>
                                <!-- mega menu -->
                                <ul class="megamenu megamenu--mega">
                                    <li>
                                        <h2 class="page-list-title">ELEMENT GROUP 01</h2>
                                        <ul>
                                            <li><a href="element-accordion.html"><span class="text-white">Accordions & Toggles</span></a></li>
                                            <li><a href="element-box-icon.html"><span class="text-white">Box Icon</span></a></li>
                                            <li><a href="element-box-image.html"><span class="text-white">Box Image</span></a></li>
                                            <li><a href="element-box-large-image.html"><span class="text-white">Box Large Image</span></a></li>
                                            <li><a href="element-buttons.html"><span class="text-white">Buttons</span></a></li>
                                            <li><a href="element-cta.html"><span class="text-white">Call to action</span></a></li>
                                            <li><a href="element-client-logo.html"><span class="text-white">Client Logo</span></a></li>
                                            <li><a href="element-countdown.html"><span class="text-white">Countdown</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h2 class="page-list-title">ELEMENT GROUP 02</h2>
                                        <ul>
                                            <li><a href="element-counters.html"><span class="text-white">Counters</span></a></li>
                                            <li><a href="element-dividers.html"><span class="text-white">Dividers</span></a></li>
                                            <li><a href="element-flexible-image-slider.html"><span class="text-white">Flexible image slider</span></a></li>
                                            <li><a href="element-google-map.html"><span class="text-white">Google Map</span></a></li>
                                            <li><a href="element-gradation.html"><span class="text-white">Gradation</span></a></li>
                                            <li><a href="element-instagram.html"><span class="text-white">Instagram</span></a></li>
                                            <li><a href="element-lists.html"><span class="text-white">Lists</span></a></li>
                                            <li><a href="element-message-box.html"><span class="text-white">Message box</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h2 class="page-list-title">ELEMENT GROUP 03</h2>
                                        <ul>
                                            <li><a href="element-popup-video.html"><span class="text-white">Popup Video</span></a></li>
                                            <li><a href="element-pricing-box.html"><span class="text-white">Pricing Box</span></a></li>
                                            <li><a href="element-progress-bar.html"><span class="text-white">Progress Bar</span></a></li>
                                            <li><a href="element-progress-circle.html"><span class="text-white">Progress Circle</span></a></li>
                                            <li><a href="element-rows-columns.html"><span class="text-white">Rows & Columns</span></a></li>
                                            <li><a href="element-social-networks.html"><span class="text-white">Social Networks</span></a></li>
                                            <li><a href="element-tabs.html"><span class="text-white">Tabs</span></a></li>
                                            <li><a href="element-team-member.html"><span class="text-white">Team member</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h2 class="page-list-title">ELEMENT GROUP 04</h2>
                                        <ul>
                                            <li><a href="element-testimonials.html"><span class="text-white">Testimonials</span></a></li>
                                            <li><a href="element-timeline.html"><span class="text-white">Timeline</span></a></li>
                                            <li><a href="element-carousel-sliders.html"><span class="text-white">Carousel Sliders</span></a></li>
                                            <li><a href="element-typed-text.html"><span class="text-white">Typed Text</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                </li> --}}
                                {{-- <li class="navListSpace">
                                            <a class="text-white" href="{{route('team')}}"><span class="text-white">TEAM</span></a> --}}
                                {{-- <a href="#"><span  class="text-white">Elements</span></a> --}}
                                <!-- mega menu -->
                                {{-- <ul class="megamenu megamenu--mega">
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 01</h2>
                                                    <ul>
                                                        <li><a href="element-accordion.html"><span  class="text-white">Accordions & Toggles</span></a></li>
                                                        <li><a href="element-box-icon.html"><span  class="text-white">Box Icon</span></a></li>
                                                        <li><a href="element-box-image.html"><span  class="text-white">Box Image</span></a></li>
                                                        <li><a href="element-box-large-image.html"><span  class="text-white">Box Large Image</span></a></li>
                                                        <li><a href="element-buttons.html"><span  class="text-white">Buttons</span></a></li>
                                                        <li><a href="element-cta.html"><span  class="text-white">Call to action</span></a></li>
                                                        <li><a href="element-client-logo.html"><span  class="text-white">Client Logo</span></a></li>
                                                        <li><a href="element-countdown.html"><span  class="text-white">Countdown</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 02</h2>
                                                    <ul>
                                                        <li><a href="element-counters.html"><span  class="text-white">Counters</span></a></li>
                                                        <li><a href="element-dividers.html"><span  class="text-white">Dividers</span></a></li>
                                                        <li><a href="element-flexible-image-slider.html"><span  class="text-white">Flexible image slider</span></a></li>
                                                        <li><a href="element-google-map.html"><span  class="text-white">Google Map</span></a></li>
                                                        <li><a href="element-gradation.html"><span  class="text-white">Gradation</span></a></li>
                                                        <li><a href="element-instagram.html"><span  class="text-white">Instagram</span></a></li>
                                                        <li><a href="element-lists.html"><span  class="text-white">Lists</span></a></li>
                                                        <li><a href="element-message-box.html"><span  class="text-white">Message box</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 03</h2>
                                                    <ul>
                                                        <li><a href="element-popup-video.html"><span  class="text-white">Popup Video</span></a></li>
                                                        <li><a href="element-pricing-box.html"><span  class="text-white">Pricing Box</span></a></li>
                                                        <li><a href="element-progress-bar.html"><span  class="text-white">Progress Bar</span></a></li>
                                                        <li><a href="element-progress-circle.html"><span  class="text-white">Progress Circle</span></a></li>
                                                        <li><a href="element-rows-columns.html"><span  class="text-white">Rows & Columns</span></a></li>
                                                        <li><a href="element-social-networks.html"><span  class="text-white">Social Networks</span></a></li>
                                                        <li><a href="element-tabs.html"><span  class="text-white">Tabs</span></a></li>
                                                        <li><a href="element-team-member.html"><span  class="text-white">Team member</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h2 class="page-list-title">ELEMENT GROUP 04</h2>
                                                    <ul>
                                                        <li><a href="element-testimonials.html"><span  class="text-white">Testimonials</span></a></li>
                                                        <li><a href="element-timeline.html"><span  class="text-white">Timeline</span></a></li>
                                                        <li><a href="element-carousel-sliders.html"><span  class="text-white">Carousel Sliders</span></a></li>
                                                        <li><a href="element-typed-text.html"><span  class="text-white">Typed Text</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                {{-- </li> --}}
                                <li class="has-children--multilevel-submenu navListSpace">
                                    <a class="text-white" href="{{route('contact-us')}}"><span class="text-white">CONTACT</span></a>
                                    {{-- <a href="#"><span  class="text-white">Case Studies</span></a> --}}
                                    <!-- multilevel submenu -->
                                    {{-- <ul class="submenu">
                                                <li><a href="case-studies.html"><span  class="text-white">Case Studies 01</span></a></li>
                                                <li><a href="case-studies-02.html"><span  class="text-white">Case Studies 02</span></a></li>
                                                <li><a href="single-smart-vision.html"><span  class="text-white">Single Layout</span></a></li>
                                            </ul> --}}
                                </li>
                                <li class="has-children--multilevel-submenu navListSpace">
                                    <a class="text-white" href="{{route('blog')}}"><span class="text-white">BLOG</span></a>
                                    {{-- <a href="blog-list-large-image.html"><span  class="text-white">Blog</span></a> --}}
                                    <!-- multilevel submenu -->
                                    {{-- <ul class="submenu">
                                                <li><a class="text-white" href="blog-list-large-image.html"><span  class="text-white">List Large Image</span></a></li>
                                                <li><a class="text-white" href="blog-list-left-large-image.html"><span  class="text-white">Left Large Image</span></a></li>
                                                <li><a class="text-white" href="blog-grid-classic.html"><span  class="text-white">Grid Classic</span></a></li>
                                                <li><a class="text-white" href="blog-grid-masonry.html"><span  class="text-white">Grid Masonry</span></a></li>
                                                <li class="has-children">
                                                    <a class="text-white" href="blog-post-layout-one.html"><span  class="text-white">Single Layouts</span></a>
                                                    <ul class="submenu">
                                                        <li><a class="text-white" href="blog-post-layout-one.html"><span  class="text-white">Left Sidebar</span></a></li>
                                                        <li><a class="text-white" href="blog-post-right-sidebar.html"><span  class="text-white">Right Sidebar</span></a></li>
                                                        <li><a class="text-white" href="blog-post-no-sidebar.html"><span  class="text-white">No Sidebar</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                </li>
                                </ul>
                            </nav>
                        </div>

                        {{-- <div class="header-search-form-two">
                                <form action="#" class="search-form-top-active text-white">
                                    <div class="search-icon" id="search-overlay-trigger">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-search text-white"></i>
                                        </a>
                                    </div>
                                </form>
                            </div> --}}

                        <!-- mobile menu -->
                        <div class="mobile-navigation-icon d-block d-xl-none bg-white" id="mobile-menu-trigger">
                            <i class=""></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>