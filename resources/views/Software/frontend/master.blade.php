<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">

@php
$setting = App\Models\SoftwareGeneralSetting::first();
@endphp
{{-- @dd($setting) --}}
<!-- Mirrored from htmldemo.net/mitech/index-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 May 2024 07:08:48 GMT -->

<head>
    <meta charset="utf-8">
    @yield('meta-setup')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $setting->meta_title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Technology IT Solutions HTML Template">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset($setting->favicon) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS
        ============================================ -->

    <!-- Font Family CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="{{ asset('frontend2') }}/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="{{ asset('frontend2') }}/assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend2') }}/assets/css/style.css">



</head>

<body>

    {{-- <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div> --}}

    <!--====================  header area ====================-->
    @include('Software.frontend.layouts.partials.navbar')
    <!--====================  End of header area  ====================-->


    <div id="main-wrapper">
        @yield('content')


        <!--====================  footer area ====================-->
        @include('Software.frontend.layouts.partials.footer')
        <!--====================  End of footer area  ====================-->

    </div>
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!-- Start Toolbar -->
    <div class="demo-option-container">
        <!-- Start Toolbar -->
        {{-- <div class="aeroland__toolbar">
            <div class="inner">
                <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Quick Options">
                    <i class="fas fa-project-diagram"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/" aria-label="Support Center">
                    <i class="far fa-life-ring"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=mitech-preview&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&amp;u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource" aria-label="Purchase Mitech">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div> --}}
        <!-- End Toolbar -->
        <!-- Start Quick Link -->
        <div class="demo-option-wrapper">
            <div class="demo-panel-header">
                <div class="title">
                    {{-- <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6> --}}
                </div>

                <div class="panel-btn mt-20">
                    <a class="ht-btn ht-btn-md" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=mitech-preview&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&amp;u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource"><i class="fa fa-shopping-cart me-2"></i> Buy Now </a>
                </div>
            </div>
            <div class="demo-quick-option-list">
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/home-01.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/home-02.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/home-03.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/home-04.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/home-05.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/home-06.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-modern-it-company.html" aria-label="Modern IT Company">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/modern-it-company.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-machine-learning.html" aria-label="Machine Learning">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/machine-learning.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-software-innovation.html" aria-label="Software Innovation">
                    <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/demo-images/software-innovation.webp" alt="Images">
                </a>
            </div>
        </div>
        <!-- End Quick Link -->
    </div>
    <!-- End Toolbar -->
    @php
    $logo = App\Models\SoftwareGeneralSetting::first();

    @endphp

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header" style="background-color: #00006B">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->

                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img class="w-100" src="{{ asset($logo->dark_logo) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end ">
                                <span class="mobile-navigation-close-icon  bg-white" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="{{route('encrypt-url')}}">Home</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="index-infotechno.html"><span>Infotechno</span></a></li>
                                <li><a href="index-processing.html"><span>Processing</span></a></li>
                                <li><a href="index-appointment.html"><span>Appointment</span></a></li>
                                <li><a href="index-services.html"><span>Services</span></a></li>
                                <li><a href="index-resolutions.html"><span>Resolutions</span></a></li>
                                <li><a href="index-cybersecurity.html"><span>cybersecurity</span></a></li>
                                <li><a href="index-modern-it-company.html"><span>Modern IT Company</span></a></li>
                                <li><a href="index-machine-learning.html"><span>Machine Learning</span></a></li>
                                <li><a href="index-software-innovation.html"><span>Software Innovation</span></a></li>
                            </ul> --}}
                        </li>
                        {{-- <li class="has-children">
                            <a href="{{route('about-us')}}">ABOUT US</a> --}}
                        {{-- <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="about-us-01.html"><span>About us</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us-01.html"><span>About us 01</span></a></li>
                                        <li><a href="about-us-02.html"><span>About us 02</span></a></li>
                                        <li class="has-children">
                                            <a href="#"><span>Submenu Level Two</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                                <li><a href="#"><span>Submenu Level Three</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html"><span>Contact us</span></a></li>
                                <li><a href="leadership.html"><span>Leadership</span></a></li>
                                <li><a href="why-choose-us.html"><span>Why choose us</span></a></li>
                                <li><a href="our-history.html"><span>Our history</span></a></li>
                                <li><a href="faqs.html"><span>FAQs</span></a></li>
                                <li><a href="careers.html"><span>Careers</span></a></li>
                                <li><a href="pricing-plans.html"><span>Pricing plans</span></a></li>
                            </ul> --}}
                        {{-- </li> --}}



                        <li class="has-children">
                            <a href="#">COMPANY</a>

                            <ul class="sub-menu">
                                <li>
                                    <a class="text-black" href="{{route('about-us')}}"><span class="text-white">ABOUT US</span></a>
                                </li>
                                <li><a class="text-black" href="{{route('portfolio')}}"><span class="text-white">PORTFOLIO</span></a></li>
                                <li class="">
                                    <a class="text-black" href="{{route('team')}}"><span class="text-white">TEAM</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-children">
                            <a href="#">PRODUCTS</a>
                            @php
                            $pages = App\Models\SoftwarePage::where('category_id',5)->where('status',1)->get();
                            @endphp
                            <ul class="sub-menu">
                                @foreach ($pages as $page)
                                <li><a class="text-black " href="{{route('page-details',$page->slug)}}"><span class="text-white">{{$page->name}}</span></a></li>
                                @endforeach
                                {{-- <li><a href="it-services.html"><span>IT Services</span></a></li>
                                <li><a href="managed-it-service.html"><span>Managed IT Services</span></a></li>
                                <li><a href="industries.html"><span>Industries</span></a></li>
                                <li><a href="business-solution.html"><span>Business solution</span></a></li>
                                <li><a href="it-services-details.html"><span>IT Services Details</span></a></li> --}}
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="{{route('services')}}">SERVICES</a>
                            {{-- <ul class="sub-menu">
                                <li class="has-children">
                                    <a href="#">Element Group 01</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-accordion.html"><span>Accordions & Toggles</span></a></li>
                                        <li><a href="element-box-icon.html"><span>Box Icon</span></a></li>
                                        <li><a href="element-box-image.html"><span>Box Image</span></a></li>
                                        <li><a href="element-box-large-image.html"><span>Box Large Image</span></a></li>
                                        <li><a href="element-buttons.html"><span>Buttons</span></a></li>
                                        <li><a href="element-cta.html"><span>Call to action</span></a></li>
                                        <li><a href="element-client-logo.html"><span>Client Logo</span></a></li>
                                        <li><a href="element-countdown.html"><span>Countdown</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 02</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-counters.html"><span>Counters</span></a></li>
                                        <li><a href="element-dividers.html"><span>Dividers</span></a></li>
                                        <li><a href="element-flexible-image-slider.html"><span>Flexible image slider</span></a></li>
                                        <li><a href="element-google-map.html"><span>Google Map</span></a></li>
                                        <li><a href="element-gradation.html"><span>Gradation</span></a></li>
                                        <li><a href="element-instagram.html"><span>Instagram</span></a></li>
                                        <li><a href="element-lists.html"><span>Lists</span></a></li>
                                        <li><a href="element-message-box.html"><span>Message box</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 03</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-popup-video.html"><span>Popup Video</span></a></li>
                                        <li><a href="element-pricing-box.html"><span>Pricing Box</span></a></li>
                                        <li><a href="element-progress-bar.html"><span>Progress Bar</span></a></li>
                                        <li><a href="element-progress-circle.html"><span>Progress Circle</span></a></li>
                                        <li><a href="element-rows-columns.html"><span>Rows & Columns</span></a></li>
                                        <li><a href="element-social-networks.html"><span>Social Networks</span></a></li>
                                        <li><a href="element-tabs.html"><span>Tabs</span></a></li>
                                        <li><a href="element-team-member.html"><span>Team member</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Element Group 04</a>
                                    <ul class="sub-menu">
                                        <li><a href="element-testimonials.html"><span>Testimonials</span></a></li>
                                        <li><a href="element-timeline.html"><span>Timeline</span></a></li>
                                        <li><a href="element-carousel-sliders.html"><span>Carousel Sliders</span></a></li>
                                        <li><a href="element-typed-text.html"><span>Typed Text</span></a></li>
                                    </ul>
                                </li>

                            </ul> --}}
                        </li>
                        <!-- <li class="has-children">
                            <a href="{{route('team')}}">TEAM</a>
                             <ul class="sub-menu">
                                <li><a href="case-studies.html"><span>Case Studies 01</span></a></li>
                                <li><a href="case-studies-02.html"><span>Case Studies 02</span></a></li>
                                <li><a href="single-smart-vision.html"><span>Single Layout</span></a></li>
                            </ul> 
                        </li> -->
                        <li class="has-children">
                            <a href="{{route('contact-us')}}">CONTACT</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                <li class="has-children">
                                    <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                        <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                        <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="has-children">
                            <a href="{{route('blog')}}">BLOG</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="blog-list-large-image.html"><span>List Large Image</span></a></li>
                                <li><a href="blog-list-left-large-image.html"><span>Left Large Image</span></a></li>
                                <li><a href="blog-grid-classic.html"><span>Grid Classic</span></a></li>
                                <li><a href="blog-grid-masonry.html"><span>Grid Masonry</span></a></li>
                                <li class="has-children">
                                    <a href="blog-post-layout-one.html"><span>Single Layouts</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-post-layout-one.html"><span>Left Sidebar</span></a></li>
                                        <li><a href="blog-post-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                        <li><a href="blog-post-no-sidebar.html"><span>No Sidebar</span></a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->








    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend2') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('frontend2') }}/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend2') }}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend2') }}/assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <script src="{{ asset('frontend2') }}/assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend2') }}/assets/js/main.js"></script>
    
    <!--Not Copy Any Content in website code-->
    <script>
        // Disable right-click
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });

        // Disable text selection
        document.addEventListener('selectstart', function(event) {
            event.preventDefault();
        });

        // Disable cut, copy, and paste
        document.addEventListener('cut', function(event) {
            event.preventDefault();
        });
        document.addEventListener('copy', function(event) {
            event.preventDefault();
        });
        document.addEventListener('paste', function(event) {
            event.preventDefault();
        });
    </script>
    <!--Not Copy Any Content in website code-->

    @yield('customJs')
</body>


<!-- Mirrored from htmldemo.net/mitech/index-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 May 2024 07:08:50 GMT -->

</html>