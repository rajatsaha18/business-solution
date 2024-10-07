@extends('Software.frontend.master')
@section('content')

{{-- @forelse ($sitebanner as $banner) --}}
{{-- @dd($sitebanner) --}}
<style>
    /* .bg-cover{
        background: url({{ asset($sitebanner->about_banner) }}); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }; */
    .card-box:hover {
        box-shadow: 0 4px 8px 0 rgba(96, 96, 96, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        transition: box-shadow 0.5s ease-in-out;
    }

    .card-box:hover h5 {
        color: #1F347A !important;
        transition: box-shadow 0.5s ease-in-out;
    }

    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->about_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media (min-width: 577px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->about_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->about_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 992px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->about_banner)}}') !important;
            background-size: cover !important;
            height:400px!important;
            width:100%!important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 1200px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->about_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->about_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>

{{-- @dd($sitebanner) --}}
<div class="bg-cover text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title text-white">About Us</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> About Us</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-wrapper-reveal">
    <!--===========  feature-large-images-wrapper  Start =============-->
    {{-- <div class="feature-large-images-wrapper section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Our company</h6>
                        <h3 class="heading">We run all kinds of IT services that <br> vow your <span class="text-color-primary"> success</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="cybersecurity-about-box section-space--pb_70">
                <div class="row">
                    <div class="col-lg-4 offset-lg-1">
                        <div class="modern-number-01">
                            <h2 class="heading  me-5"><span class="mark-text">38</span>Years’ Experience in IT</h2>
                            <h6 class="heading mt-30">More About Our Success Stories</h6>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <div class="cybersecurity-about-text">
                            <div class="text">Mitech specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. We put a strong focus on the needs of your business to figure out solutions that best fits your demand and nail it.</div>
                            <div class="button-text">
                                <a href="#" class="btn-text">
                                    Discover now
                                    <span class="button-icon ml-1">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="feature-images__six">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-06">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-01-120x120.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">What we can do?</h5>
                                            <div class="text">We put a strong focus on the needs of your business to figure out solutions that best fits your demand and nail it.
                                            </div>
                                            <a href="#" class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-06">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-02-120x120.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Become our partners?</h5>
                                            <div class="text">Our preventive and progressive approach will help you take the lead while addressing possible threats in managing data.
                                            </div>
                                            <a href="#" class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-06">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-03-120x120.webp" alt="">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Need a hand?</h5>
                                            <div class="text">Our support team is available 24/7 a day, 7 days a week and can get ready for solving any of your situational rising problems.
                                            </div>
                                            <a href="#" class="box-images-arrow">
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

                    <div class="section-under-heading text-center section-space--mt_60">Challenges are just opportunities in disguise. <a href="#">Take the challenge!</a></div>

                </div>
            </div>
        </div>
    </div> --}}
    <!--===========  feature-large-images-wrapper  End =============-->

    <section>
        <div class="container my-5">
            <div class="row " id="" style="">
                <div class="col col-12 col-sm-12 col-md-6 col-lg-6 mb-5" id="">
                    <h4 style="color: #1F347A" class="">{{ $data->title }}</h4>
                    <div class="my-3 ">
                        <p>{!! $data->description !!}</p>
                    </div>

                    <div class="image-wrap">
                        {{-- <img data-src="https://www.divineit.net/media/original_images/Certification-of-prismERP_QfVAX5D.png" class="lazy img-fluid loaded" id="i1547700277_3" alt="" width="px" height="px" src="https://www.divineit.net/media/original_images/Certification-of-prismERP_QfVAX5D.png" data-was-processed="true"> --}}
                    </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @forelse ($what_we_do as $item)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-6 ">
                            {{-- @dd($item) --}}
                            <div class="card card-box h-100">
                                <img style="height: 100px" src="{{ asset($item->icon) }}" class="card-img-top" alt="{{ $item->title }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ Str::words($item->title, 3) }}</h5>
                                    <p class="card-text">{{ $item->short_details }}</p>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--=========== fun fact Wrapper Start ==========-->
    <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">{{ $counters->number1 }}</div>
                        <h6 class="fun-fact__text">{{ $counters->title1 }}</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">{{ $counters->number2 }}</div>
                        <h6 class="fun-fact__text">{{ $counters->title2 }}</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">{{ $counters->number3 }}</div>
                        <h6 class="fun-fact__text">{{ $counters->title3 }}</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count counter">{{ $counters->number4 }}</div>
                        <h6 class="fun-fact__text">{{ $counters->title4 }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper End ==========-->
    <!--====================  testimonial section ====================-->
    <div class="testimonial-slider-area section-space--pt_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">Testimonials</h6>
                        <h3 class="heading">What do people praise about <span class="text-color-primary"> Business Solution?</span></h3>
                    </div>
                    <div class="testimonial-slider">
                        <div class="swiper-container testimonial-slider__container">
                            <div class="swiper-wrapper testimonial-slider__wrapper">
                                @forelse ($reviews as $review)
                                {{-- @dd($review) --}}
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">

                                        <div class="testimonial-slider--info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{ asset($review->image) }}" style="height: 60px; width:60px;" class="img-fluid" alt="">
                                            </div>

                                            <div class="testimonial-slider__author">
                                                <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="">
                                                    <h6 class="name">{{ $review->name }}</h6>
                                                    <span class="designation">{{ $review->designation }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">{{ $review->details }}</div>

                                    </div>
                                </div>
                                @empty

                                @endforelse

                                {{-- <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">

                                        <div class="testimonial-slider--info">
                                            <div class="testimonial-slider__media">
                                                <img src="assets/images/testimonial/mitech-testimonial-avata-03-90x90.webp" class="img-fluid" alt="">
                                            </div>

                                            <div class="testimonial-slider__author">
                                                <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="name">Monica Blews</h6>
                                                    <span class="designation">Web designer</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">

                                        <div class="testimonial-slider--info">
                                            <div class="testimonial-slider__media">
                                                <img src="assets/images/testimonial/mitech-testimonial-avata-04-90x90.webp" class="img-fluid" alt="">
                                            </div>

                                            <div class="testimonial-slider__author">
                                                <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="name">Abbie Ferguson</h6>
                                                    <span class="designation">WEB DESIGNER</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">

                                        <div class="testimonial-slider--info">
                                            <div class="testimonial-slider__media">
                                                <img src="assets/images/testimonial/mitech-testimonial-avata-01-90x90.webp" class="img-fluid" alt="">
                                            </div>

                                            <div class="testimonial-slider__author">
                                                <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="name">Abbie Ferguson</h6>
                                                    <span class="designation">WEB DESIGNER</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">I’ve been working with over 35 IT companies on more than 200 projects of our company, but @Mitech is one of the most impressive to me.</div>

                                    </div>
                                </div> --}}
                            </div>
                            <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial section  ====================-->

    <!--====================  brand logo slider area ====================-->
    <div class="brand-logo-slider-area section-space--ptb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__one">
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-01.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-01-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-02.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-02-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-03.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-03-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-04.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-04-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-05.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-05-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-06.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-06-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-07.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-07-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-08.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-08-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/mitech-client-logo-09.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/mitech-client-logo-09-hover.webp" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo slider area  ====================-->
    <!--============ Contact Us Area Start =================-->
    {{-- @include('Software.frontend.component.contact') --}}
    <!--============ Contact Us Area End =================-->

</div>

@endsection