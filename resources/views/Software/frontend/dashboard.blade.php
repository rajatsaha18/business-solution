@extends('Software.frontend.master')
@section('content')
{{-- @dd($sitebanner) --}}
@forelse ($sitebanner as $banner)
{{-- @dd($banner) --}}
<style>
    /* @media only screen and (min-width: 768) {

    } */

    @media (max-width: 576px) {

        .banner-imgSize {
            height: 140px !important;
        }

        .videoSize {
            height: 272px;
            width: 370px;
        }
    }

    @media (min-width: 577px) {
        .banner-imgSize {
            height: 240px !important;
        }

        .videoSize {
            height: 372px;
            width: 565px;
        }
    }


    @media (min-width: 768px) {
        .banner-imgSize {
            height: 340px !important;
        }
    }


    @media (min-width: 992px) {
        .banner-imgSize {
            height: 440px !important;
        }
    }


    @media (min-width: 1200px) {
        .banner-imgSize {
            height: 500px !important;
        }
    }


    @media (min-width: 1400px) {
        .banner-imgSize {
            height: 780px !important;
        }
    }


    @media (max-width: 576px) {

        .bg-cover {

            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #bg_cover_banner
        {
            margin-bottom:-145px!important;
        }
        #top_product
        {
            margin-top:-40px!important;
        }

    }

    @media (min-width: 577px) {
        .bg-cover {

            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 768px) {
        .bg-cover {

            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #bg_cover_banner
        {
            margin-top:-180px!important;
        }
        #top_product
        {
            margin-top:-50px!important;
        }
    }


    @media (min-width: 992px) {
        .bg-cover {

            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 1200px) {
        .bg-cover {

            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 1400px) {
        .bg-cover {

            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
    #bg_cover_banner
    {
        margin-top:-200px!important;
    }
    .bg-section
    {
        margin-top:0px!important;

    }
    /* .h-400
    {
        height: 400px!important;
    } */
</style>
@empty
@endforelse

<?php

use Illuminate\Support\Facades\DB;

$seo = DB::table('contact_page_seos')->first();
$setting = App\Models\SoftwareGeneralSetting::first();

$logo = DB::table('software_general_settings')->first();
$whatwe = DB::table('software_home_page_what_we_dos')->first();
$whowe = DB::table('software_home_page_who_we_ares')->first();
$fasts = DB::table('software_home_fasts')->first();
?>

<div class="site-wrapper-reveal section-space--pt__120">
    <!--============ Service Hero Start ============-->

    <div class="bg-section">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($sliders as $index => $slider)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <!-- Make sure the image is responsive -->
                                <img src="{{ asset($slider->image) }}" class="d-block w-100" style="height: auto; max-height: 400px;" alt="slider">
                            </div>
                        @endforeach
                    </div>
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!--============ Service Hero End ============-->
    <!--===========  feature-images-wrapper  Start =============-->
    <div class="container text-center py-5" id="top_product">
        <h3 class="mb-4 mt-5">Top Products</h3>
        <div class="row g-2 justify-content-lg-center">
            @forelse ($top_product as $product)
            <div class="col-6 col-lg-2">
                <div class="p-1">
                    <div class="card " style="height: 190px;">
                        <img style="height: 100px;" src="{{ asset($product->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="font-size: 16px" class="card-title">{{ $product->title }}</h5>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->



    <!--===========  Our Company History Start =============-->

    <div class="our-company-history p-0">
        <div class="container-fluid">

            <div class="row align-items-center">
                <div class="col-lg-6">

                    <div class="faq-custom-col">
                        <div class="section-title-wrap">
                            {{-- <h6 class="section-sub-title mb-20">Our company</h6> --}}
                            <h3 class="heading my-4">What We do ?</h3>
                            <span class="mt-30 " style="font-size: 18px!important;">{!! $logo->what_we_do ?? '' !!}</span>

                        </div>
                    </div>

                </div>
                <div class="col-lg-6 mt-lg-5">
                    <div class="rv-video-section">
                        <?php
                        // $youtube=explode('=',$logo->what_we_do_image);
                        // $ytube=$youtube[1];
                        // @dd($ytube=$youtube[1])
                        $youtube = $logo->what_we_do_image;
                        ?>

                        <div class="main-video-box mx-0 video-popup ">
                            <iframe class="videoSize" src="https://www.youtube.com/embed/{{$youtube}}?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  Our Company History Start  End =============-->






    <!--===========  feature-icon-wrapper  Start =============-->
    {{-- <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">Industries we Serve</h6>
                        <h3 class="heading">Services We Deliver<br> we provide <span class="text-color-primary"> truly prominent IT solutions.</span></h3>
                    </div>
                </div>
            </div>

            <div class="row">


                <div class="col-12">
                    <div class="feature-list__two">
                        <div class="row">
                            @forelse ($services  as $item)
                                @if ($loop->iteration % 2 != 0)
                                    <div class="col-lg-4 col-md-6 wow move-up card-desc">
                                        <div class="ht-box-icon style-02 single-svg-icon-box shadow">
                                            <div class="icon-box-wrap">


                                                <div class="content">
                                                    <div class="row justify-content-center mb-4">
                                                        @if($item->font_icon)
                                                        <div class="icon">
                                                            <i class="{{$item->font_icon}}"></i>
    <div class="svg-icon" id="svg-1" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-basic-heart.svg"></div>
</div>
@else
<img class="img-fluid mx-3" style="width: 80px; height:50px " src="{{$item->icon}}" alt="">
@endif
</div>
<h5 class="heading">{{$item->title}}</h5>
<div class="text">{!! $item->short_description !!}</div>
<div class="feature-btn">
    <a href="{{ route('services') }}">
        <span class="button-text">Discover now</span>
        <i class="fas fa-arrow-right"></i>
    </a>
</div>
</div>
</div>
</div>
</div>
@endif
@empty
@endforelse
<div class="col-lg-4 col-md-6 wow move-up">
    <div class="ht-box-icon style-02 single-svg-icon-box">
        <div class="icon-box-wrap">
            <div class="icon">
                <div class="svg-icon" id="svg-2" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-basic-case.svg"></div>
            </div>
            <div class="content">
                <h5 class="heading">IT Management</h5>
                <div class="text">It’s possible to simultaneously manage and transform information from one server to another.
                </div>
                <div class="feature-btn">
                    <a href="#">
                        <span class="button-text">Discover now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 wow move-up">
    <div class="ht-box-icon style-02 single-svg-icon-box">
        <!-- ht-box-icon Start -->
        <div class="icon-box-wrap">
            <div class="icon">
                <div class="svg-icon" id="svg-3" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-basic-alarm.svg"></div>
            </div>
            <div class="content">
                <h5 class="heading">Data Security</h5>
                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                </div>
                <div class="feature-btn">
                    <a href="#">
                        <span class="button-text">Discover now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- ht-box-icon End -->
    </div>
</div>
<div class="col-lg-4 col-md-6 wow move-up">
    <div class="ht-box-icon style-02 single-svg-icon-box">
        <!-- ht-box-icon Start -->
        <div class="icon-box-wrap">
            <div class="icon">
                <div class="svg-icon" id="svg-4" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-basic-geolocalize-05.svg"></div>
            </div>
            <div class="content">
                <h5 class="heading">Business Reform</h5>
                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                </div>
                <div class="feature-btn">
                    <a href="#">
                        <span class="button-text">Discover now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- ht-box-icon End -->
    </div>
</div>
<div class="col-lg-4 col-md-6 wow move-up">
    <div class="ht-box-icon style-02 single-svg-icon-box">
        <!-- ht-box-icon Start -->
        <div class="icon-box-wrap">
            <div class="icon">
                <div class="svg-icon" id="svg-5" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-ecommerce-money.svg"></div>
            </div>
            <div class="content">
                <h5 class="heading">Infrastructure Plan</h5>
                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                </div>
                <div class="feature-btn">
                    <a href="#">
                        <span class="button-text">Discover now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- ht-box-icon End -->
    </div>
</div>
<div class="col-lg-4 col-md-6 wow move-up">
    <div class="ht-box-icon style-02 single-svg-icon-box">
        <!-- ht-box-icon Start -->
        <div class="icon-box-wrap">
            <div class="icon">
                <div class="svg-icon" id="svg-6" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-basic-spread-text-bookmark.svg"></div>
            </div>
            <div class="content">
                <h5 class="heading">Firewall Advance</h5>
                <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.
                </div>
                <div class="feature-btn">
                    <a href="#">
                        <span class="button-text">Discover now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- ht-box-icon End -->
    </div>
</div>
</div>
</div>
</div>


<div class="col-lg-12">
    <div class="feature-list-button-box mt-30 text-center">
        <a href="#" class="ht-btn ht-btn-md">Talk to a consultant</a>
        <a href="{{ route('contact-us') }}" class="ht-btn ht-btn-md ht-btn--outline">Contact us now </a>
    </div>
</div>
</div>
</div>
</div> --}}
<!--===========  feature-icon-wrapper  End =============-->

<div class="container text-center my-5" style="margin-bottom: 20px; margin-top: 50px; ">
    <h2>Service</h2>
    <div class="row row-cols-1 row-cols-md-4 mt-5">

        {{-- @dd($services) --}}
        @forelse ($services as $item)
        {{-- @dd($item) --}}

        <div class="col">
            <div class="card h-100 align-items-center p-2 shadow-sm">

                @if($item->font_icon)
                <i class="{{$item->font_icon}}"></i>
                <div class="svg-icon" id="svg-1" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-basic-heart.svg"></div>
                @else
                {{-- <img class="img-fluid mx-3" style="width: 80px; height:50px " src="{{$item->icon}}" alt=""> --}}
                <img src="{{ asset($item->icon) }}" class="card-img-top w-25" alt="...">
                @endif
                <div class="card-body">
                    <h6 class="card-title">{{ $item->title }}</h6>
                    <p class="card-text">{!! $item->short_description !!}</p>
                </div>
            </div>
        </div>

        @empty
        @endforelse

    </div>
</div>


<!--=========== Service Projects Wrapper Start =============-->
<div class="service-projects-wrapper section-space--ptb_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrap text-center section-space--mb_60">
                    {{-- <h6 class="section-sub-title mb-20">Latest news</h6> --}}
                    <h3 class="heading">Latest blogs are <span class="text-color-primary">on top all times</span></h3>
                </div>
            </div>
        </div>
        <div class="latest-news-wrap">
            <div class="row">
                <div class="col-lg-6">
                    @forelse ($blogs as $blog)
                    <div class="single-blog-lg-item wow move-up">
                        <!-- Post Feature Start -->
                        <a href="{{ route('blog-details', $blog->slug) }}">
                            <div class="post-blog-thumbnail">
                                <img class="img-fluid" src="{{ asset($blog->image) }}" alt="{{ Str::limit($blog->title, 30) }}">
                                <div class="post-meta mt-20">
                                    <div class="post-author">
                                        {{-- <img class="img-fluid avatar-96" src="{{ asset('frontend2') }}/assets/images/team/admin.webp" alt=""> Harry Ferguson --}}
                                    </div>
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        {{ $blog->created_at->format('Y-M-D') }}
                                    </div>
                                </div>

                            </div>
                        </a>
                        <!-- Post Feature End -->

                        <!-- Post info Start -->
                        <div class="post-info lg-blog-post-info mt-20">
                            <h4 class="post-title">
                                <a href="blog-post-layout-one.html">{{ Str::limit($blog->title, 30) }}</a>
                            </h4>
                            <div class="post-excerpt mt-15">
                                <p>{{ Str::limit($blog->short_description, 350) }}</p>
                            </div>
                            <div class="btn-text mt-15">
                                <a href="{{ route('blog-details', $blog->slug) }}">Read more <i class="ml-1 button-icon fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Post info End -->
                    </div>
                    @empty
                    @endforelse
                </div>
                <div class="col-lg-6 blog-list-service">
                    @forelse ($latestBlogs as $blogs)

                    <div class="single-blog-lg-list wow move-up">
                        <!-- Post Feature Start -->
                        <a href="{{ route('blog-details', $blogs->slug) }}">
                            <div class="post-blog-thumbnail">
                                <img class="img-fluid" src="{{ asset($blogs->image) }}" alt="{{ Str::limit($blogs->title, 30) }}">
                                <div class="post-meta mt-20">
                                    <div class="post-author">
                                        {{-- <img class="img-fluid avatar-96" src="{{ asset($blogs->image) }}" alt=""> Harry Ferguson --}}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- Post Feature End -->

                        <!-- Post info Start -->
                        <div class="post-info lg-blog-post-info">
                            <div class="post-meta mb-10">
                                <div class="post-date">
                                    <span class="far fa-calendar meta-icon"></span>
                                    {{ $blogs->created_at->format('Y-M-D') }}
                                </div>
                            </div>
                            <h5 class="post-title">
                                <a href="{{ route('blog-details', $blogs->slug) }}"> {{ Str::limit($blogs->title, 40) }}</a>
                            </h5>
                        </div>
                        <!-- Post info End -->
                    </div>
                    @empty

                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
<!--=========== Service Projects Wrapper End =============-->

<!--============ Contact Us Area Start =================-->


{{-- <div class="contact-us-area service-contact-bg p-lg-5 pb-5 ">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="contact-info sytle-one service-contact text-left">



                        <div class="contact-list-item">
                            <a class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fa-solid fa-location-arrow"></span>

                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Location</h6>
                                            <div class="text fw-semibold fs-5">{{$setting->location}}</div>
</div>
</div>
</div>
</a>
<a class="single-contact-list">
    <div class="content-wrap">
        <div class="content">
            <div class="icon">
                <span class="fas fa-phone"></span>
            </div>
            <div class="main-content">
                <h6 class="heading">{{$setting->phone_text}}</h6>
                <div class="text fs-4">{{$setting->phone_number}}</div>
            </div>
        </div>
    </div>
</a>
<a class="single-contact-list">
    <div class="content-wrap">
        <div class="content">
            <div class="icon">
                <span class="far fa-envelope"></span>
            </div>
            <div class="main-content">
                <h6 class="heading">{{$setting->email_text}}</h6>
                <div class="text fs-4">{{$setting->email_address}}</div>
            </div>
        </div>
    </div>
</a>
</div>

</div>
</div>

<div class="col-lg-7 ms-auto">
    <div class="contact-form-service-wrap">
        <div class="contact-title text-center section-space--mb_40">
            <h3 class="mb-10">Contact</h3>
            <p class="text">Reach out to the world’s most reliable IT services.</p>
        </div>


        <form class="contact-form" method="post" name="myForm" id="myForm" action="{{route('submit-contact')}}" onsubmit="return validateForm()">
            @csrf
            <div class="contact-form__two">
                <div class="contact-input">
                    <div class="contact-inner">
                        <input name="name" type="text" placeholder="Name *">
                    </div>
                    <div class="contact-inner">
                        <input name="email" type="email" placeholder="Email *">
                    </div>
                </div>

                <div class="contact-inner">
                    <input name="subject" type="text" placeholder="Your Question/ Subject*">
                </div>


                <div class="contact-inner contact-message">
                    <textarea name="comments" placeholder="Please describe what you need."></textarea>
                </div>
                <div class="comment-submit-btn">
                    <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                    <p class="form-messege-2"></p>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
</div>
</div> --}}

<!--============ Contact Us Area End =================-->
<!--====================  brand logo slider area ====================-->
@php
$business_partner = App\Models\SoftwareClientLogo::orderBy('id', 'desc')->get();
@endphp
{{-- @dd($business_partner ) --}}
<div class="brand-logo-slider-area pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- brand logo slider -->
                <div class="brand-logo-slider__container-area">
                    <div class="swiper-container brand-logo-slider__container">
                        <div class="swiper-wrapper brand-logo-slider__one">
                            @foreach ($business_partner as $item)
                            <div class="swiper-slide brand-logo brand-logo--slider">
                                <a target="_Blank" href="{{ $item->link }}">
                                    <div class="brand-logo__image">
                                        <img src="{{ asset($item->logo) }}" class="img-fluid" alt="{{ $item->name }}">
                                    </div>
                                    <div class="brand-logo__image-hover">
                                        <img src="{{ asset($item->logo) }}" class="img-fluid" alt="{{ $item->name }}">
                                    </div>
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of brand logo slider area  ====================-->
</div>
@endsection
