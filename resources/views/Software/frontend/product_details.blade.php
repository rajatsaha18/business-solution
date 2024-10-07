@extends('Software.frontend.master')
@section('content')
{{-- @dd($product_details) --}}
<style>
    .btn-size {
        width: 200px !important;
        height: 35px !important;
        background-color: #086AD8;
        border: 0px;
        color: white;
        border-radius: 3px;
    }

    .btnSize {
        background-color: #086AD8 !important;
        border: 0px !important;
        color: white !important;
        border-radius: 3px !important;
        padding: 10px 20px 10px 20px !important;
        margin: 3px;
    }


    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($product_details->image)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            /* background-position: center center!important; */
            
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .price-card {
            width: 350px;
        }

        .videoSize {
            aspect-ratio: 16/9;
        }
        .benifits
        {
            margin-top:-50px!important;
        }
    }

    @media (min-width: 577px) {
        .bg-cover {
            background-image: url('{{asset($product_details->image)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            /* background-position: center center!important; */
            
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .price-card {
            width: 380px;
        }

        .videoSize {
            width: 560px;
            height: 315px;
        }
    }


    @media (min-width: 768px) {
        .bg-cover {
            background-image: url('{{asset($product_details->image)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            /* background-position: center center!important; */
            
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .videoSize {
            width: 560px;
            height: 315px;
        }
    }


    @media (min-width: 992px) {
        .bg-cover {
            background-image: url('{{asset($product_details->image)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            /* background-position: center center!important; */
            height:400px!important;
            width:100%!important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .videoSize {
            width: 560px;
            height: 315px;
        }
    }


    @media (min-width: 1200px) {
        .bg-cover {
            background-image: url('{{asset($product_details->image)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            /* background-position: center center!important; */
            
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .videoSize {
            width: 560px;
            height: 315px;
        }
    }


    @media (min-width: 1400px) {
        .bg-cover {
            background-image: url('{{asset($product_details->image)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            /* background-position: center center!important; */
            
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .videoSize {
            width: 560px;
            height: 315px;
        }
    }
</style>


{{-- @dd($product_details) --}}

<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-cover">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title text-white">{{ $product_details->name }}</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class=" active text-white">> Product</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
{{-- Features --}}
<div class="container text-center my-5">
    <div class="row g-2">
        <!-- <h3 class="my-3">Core Features</h3> -->
        {{-- @dd($features) --}}
        @forelse ($features as $feature)
        <!-- <div class="col-6 col-lg-4 ">
            <div class="p-3">
                <div class="card border-0 align-items-center">
                    @if (!empty($feature->image))
                    <img class="w-50" src="{{ asset($feature->image) }}" class="card-img-top" alt="{{ $feature->title }}">
                    @else
                    <img class="w-50" style="height: 100px" src="{{ asset('frontend2/assets/img/no-image-available.jpeg') }}" class="card-img-top" alt="{{ $feature->title }}">
                    @endif
                    <div class="card-body">
                        <h6 class="card-text">{{ $feature->title }}</h6>
                    </div>
                </div>
            </div>
        </div> -->
        @empty

        @endforelse

        {{-- <div class="col-md-6 col-lg-4 ">
            <div class="p-3">
                <div class="card border-0 align-items-center" style="">
                    <img class="w-50" src="https://media.gettyimages.com/id/1350085520/vector/trends-button-abstract-design-elements-background.jpg?s=1024x1024&w=gi&k=20&c=92OlDhXhTOsW4XoKozsNult7hw8FA3Tz-9DaWL9uT-U=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-text">Lobby Free Appointement.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
            <div class="p-3">
                <div class="card border-0 align-items-center" style="">
                    <img class="w-50" src="https://media.gettyimages.com/id/1350085520/vector/trends-button-abstract-design-elements-background.jpg?s=1024x1024&w=gi&k=20&c=92OlDhXhTOsW4XoKozsNult7hw8FA3Tz-9DaWL9uT-U=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-text">Lobby Free Appointement.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
            <div class="p-3">
                <div class="card border-0 align-items-center" style="">
                    <img class="w-50" src="https://media.gettyimages.com/id/1350085520/vector/trends-button-abstract-design-elements-background.jpg?s=1024x1024&w=gi&k=20&c=92OlDhXhTOsW4XoKozsNult7hw8FA3Tz-9DaWL9uT-U=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-text">Lobby Free Appointement.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
            <div class="p-3">
                <div class="card border-0 align-items-center" style="">
                    <img class="w-50" src="https://media.gettyimages.com/id/1350085520/vector/trends-button-abstract-design-elements-background.jpg?s=1024x1024&w=gi&k=20&c=92OlDhXhTOsW4XoKozsNult7hw8FA3Tz-9DaWL9uT-U=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-text">Lobby Free Appointement.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
            <div class="p-3">
                <div class="card border-0 align-items-center" style="">
                    <img class="w-50" src="https://media.gettyimages.com/id/1350085520/vector/trends-button-abstract-design-elements-background.jpg?s=1024x1024&w=gi&k=20&c=92OlDhXhTOsW4XoKozsNult7hw8FA3Tz-9DaWL9uT-U=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-text">Lobby Free Appointement.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 ">
            <div class="p-3">
                <div class="card border-0 align-items-center" style="">
                    <img class="w-50" src="https://media.gettyimages.com/id/1350085520/vector/trends-button-abstract-design-elements-background.jpg?s=1024x1024&w=gi&k=20&c=92OlDhXhTOsW4XoKozsNult7hw8FA3Tz-9DaWL9uT-U=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-text">Lobby Free Appointement.</h6>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</div>


{{-- Benefits --}}
<div class="container text-center my-5">
    <div class="row g-2 px-lg-5 ">
        <h3 class="mt-1 benifits">Benefits</h3>
        {{-- @dd($product_details) --}}
        @forelse (json_decode($product_details->benefits) as $product)
        {{-- @dd($product) --}}
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="p-0">
                <div class="card border-0">
                    <div class="card-body d-flex align-items-center ">
                        <img style="width: 25px" src="{{ asset('frontend2/assets/img/Mark.png') }}" class="card-img-top" alt="...">
                        <p class="card-text text-start mx-3 ">{{ $product }}</p>
                    </div>
                </div>
            </div>
        </div>

        @empty
        @endforelse
    </div>
</div>


{{-- Benefits --}}
<div class="container text-center my-5" style="">
    <div class="row g-2 px-lg-5 ">
        <h3 class="my-3">Description</h3>
        <div class="col-12">
            <div class="p-0 text-start">
                <p class="card-text mx-3">{!! $product_details->description !!}</p>
                {{-- <div class="card border-0" style="">
                    <div class="card-body d-flex align-items-center ">
                        
                        <p class="card-text text-start mx-3 ">{{$product_details->description }}</p>
            </div>
        </div> --}}
    </div>
</div>
</div>
</div>





{{-- Live Demo --}}
<div class="container text-center my-5">
    <div class="row g-2">
        {{-- <h3 class="my-3">Schedule a Live Demo</h3> --}}

        <div class="col-md-6 col-lg-6 col">
            <div class="p-3">
                <div class="card border-0 align-items-center d-flex">
                    <div class="card-body d-flex align-items-center">
                        <iframe class="videoSize" src="https://www.youtube.com/embed/{{ $product_details->video }}?si=pTr0B2AovyRrPgTe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col">
            <div class="p-3">
                <div class="card border-0 align-items-center d-flex">
                    <div class="card-body d-flex align-items-center">
                        {{-- <img src="{{ asset('frontend2/assets/img/icon-demo1.png') }}" class="card-img-top w-25" alt="..."> --}}
                        <div class="text-start ">
                            <h4 class="mb-2" style="color: #091D39">Let's take a look at <span style="color: #086AD8 ">our software</span></h4>
                            <p class="card-text">Explore our brochure or watch our video to find out more about our software. In addition, we would like to invite you to schedule a meeting at your convenience at any time.</p>
                            <a href="{{ $product_details->link }}" class="btnSize">Request a Demo <i class="fa-solid fa-laptop fs-5 ms-2"></i></a>

                            <a href="{{ asset($product_details->brochure) }}" download="{{$product_details->name.'.pdf'}}"><button class="btnSize">Brochure <i class="fa-solid fa-file-arrow-down fs-5 ms-2"></i></button> </a>
                            <a href="{{ asset($product_details->user_manual) }}" download="{{$product_details->name.'.pdf'}}"><button class="btnSize">User Manual <i class="fa-solid fa-file-arrow-down fs-5 ms-2"></i></button> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>




<!--========= Pricing Table Area Start ==========-->
<div class="pricing-table-area section-space--ptb_100 ">
    <div class="pricing-table-title-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        {{-- <h6 class="section-sub-title mb-20">Style 02</h6> --}}
                        <h3 class="section-title">Affordable price plans <span class="text-color-primary"> for you!</span> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-table-content-area">
        <div class="container">
            <div class="row pricing-table-two justify-content-center">
                <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up price-card">
                    <div class="pricing-table__inner shadow">
                        <div class="pricing-table__header">
                            <h5 class="pricing-table__title">Basic</h5>
                            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate maxime optio aut!</p> --}}
                            <div class="pricing-table__price-wrap">
                                <h6 class="currency">Tk</h6>
                                <h6 class="price">{{ $product_details->basic_price }}</h6>
                                {{-- <h6 class="period">/mo</h6> --}}
                            </div>
                        </div>
                        <div class="pricing-table__body">
                            <ul class="pricing-table__list">
                                {{-- <li>03 projects</li>
                                <li>Power And Predictive Dialing</li>
                                <li>Quality &amp; Customer Experience</li>
                                <li><span class="featured">Try for free, forever!</span></li> --}}
                            </ul>
                        </div>
                        <div class="pricing-table__footer">
                            <a href="{{ route('product-contact', $product_details->slug) }}" class="ht-btn ht-btn-default">Get started</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table pricing-table--popular wow move-up">
                    <div class="pricing-table__inner">
                        <div class="pricing-table__feature-mark">
                            <span>Popular Choice</span>
                        </div>
                        <div class="pricing-table__header">
                            <h5 class="pricing-table__title">Personal</h5>
                            <div class="pricing-table__price-wrap">
                                <h6 class="currency">Tk</h6>
                                <h6 class="price">19</h6>
                                <h6 class="period">/mo</h6>
                            </div>
                        </div>
                        <div class="pricing-table__body">
                            <ul class="pricing-table__list">
                                <li>10 projects</li>
                                <li>Power And Predictive Dialing</li>
                                <li>Quality &amp; Customer Experience</li>
                                <li>24/7 phone and email support</li>
                            </ul>
                        </div>
                        <div class="pricing-table__footer">
                            <a href="#" class="ht-btn ht-btn-default btn--secondary">Get started</a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                    <div class="pricing-table__inner">
                        <div class="pricing-table__header">
                            <h5 class="pricing-table__title">Group</h5>
                            <div class="pricing-table__price-wrap">
                                <h6 class="currency">Tk</h6>
                                <h6 class="price">29</h6>
                                <h6 class="period">/mo</h6>
                            </div>
                        </div>
                        <div class="pricing-table__body">
                            <ul class="pricing-table__list">
                                <li>50 projects</li>
                                <li>Power And Predictive Dialing</li>
                                <li>Quality &amp; Customer Experience</li>
                                <li>24/7 phone and email support</li>
                            </ul>
                        </div>
                        <div class="pricing-table__footer">
                            <a href="#" class="ht-btn ht-btn-default btn--secondary">Get started</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up price-card">
                    <div class="pricing-table__inner shadow">
                        <div class="pricing-table__header">
                            <h5 class="pricing-table__title">Advance</h5>
                            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate maxime optio aut!</p> --}}
                            <div class="pricing-table__price-wrap">
                                <h6 class="currency">Tk</h6>
                                <h6 class="price">{{ $product_details->advance_price }}</h6>
                                {{-- <h6 class="period">/mo</h6> --}}
                            </div>
                        </div>
                        <div class="pricing-table__body">
                            {{-- <ul class="pricing-table__list">
                                <li>Unlimited projects</li>
                                <li>Power And Predictive Dialing</li>
                                <li>Quality &amp; Customer Experience</li>
                                <li>24/7 phone and email support</li>
                            </ul> --}}
                        </div>
                        <div class="pricing-table__footer">
                            <a href="{{ route('product-contact', $product_details->slug) }}" class="ht-btn ht-btn-default ">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--========= Pricing Table Area End ==========-->

@endsection