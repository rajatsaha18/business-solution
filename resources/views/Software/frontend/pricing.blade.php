@extends('frontend.master')
@section('content')
{{-- @dd($sitebanner) --}}
<style>
    .bg-cover{
        background: url({{ asset($sitebanner->pricing_banner) }}); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    };
    /*  */
</style>
{{-- @dd($pricing) --}}
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-cover text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title text-white">Pricing</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> Pricing</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->



<div class="site-wrapper-reveal">
    <!--========= Pricing Table Area Start ==========-->
    {{-- <div class="pricing-table-area section-space--ptb_100 bg-gray">
        <div class="pricing-table-title-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_40 wow move-up">
                            <h6 class="section-sub-title mb-20">Style 01</h6>
                            <h3 class="section-title">Affordable price plans<span class="text-color-primary"> for you!</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-table-content-area">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center wow move-up">
                        <ul class="nav justify-content-center ht-plans-menu  section-space--mb_60" role="tablist">
                            <li class="tab__item nav-item active">
                                <a class="nav-link active" data-bs-toggle="tab" href="#month-tab" role="tab" aria-selected="true">Per month</a>
                            </li>
                            <li class="tab__item nav-item ">
                                <a class="nav-link" data-bs-toggle="tab" href="#year-tab" role="tab" aria-selected="false">Per year</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content ht-tab__content wow move-up">
                    <div class="tab-pane fade show active" id="month-tab" role="tabpanel">
                        <div class="row pricing-table-one">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Basic</h6>
                                        <div class="pricing-table__image">
                                            <img src="assets/images/icons/mitech-pricing-box-icon-01-90x90.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">19</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>03 projects</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li><span class="featured">Try for free, forever!</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__feature-mark">
                                        <span>Popular Choice</span>
                                    </div>
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Professional</h6>
                                        <div class="pricing-table__image">
                                            <img src="assets/images/icons/mitech-pricing-box-icon-02-88x88.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">59</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn  ht-btn-md ">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>Unlimited project</li>
                                            <li>Power And Predictive Dialing</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li>24/7 phone and email support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Professional</h6>
                                        <div class="pricing-table__image">
                                            <img src="assets/images/icons/mitech-pricing-box-icon-03-90x90.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">29</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>10 projects</li>
                                            <li>Power And Predictive Dialing </li>
                                            <li>Quality &amp; Customer Experience </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="year-tab" role="tabpanel">

                        <div class="row pricing-table-one">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Basic</h6>
                                        <div class="pricing-table__image">
                                            <img src="assets/images/icons/mitech-pricing-box-icon-01-90x90.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">199</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>03 projects</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li><span class="featured">Try for free, forever!</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__feature-mark">
                                        <span>Popular Choice</span>
                                    </div>
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Professional</h6>
                                        <div class="pricing-table__image">
                                            <img src="assets/images/icons/mitech-pricing-box-icon-02-88x88.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">599</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn  ht-btn-md ">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>Unlimited project</li>
                                            <li>Power And Predictive Dialing</li>
                                            <li>Quality &amp; Customer Experience</li>
                                            <li>24/7 phone and email support</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Professional</h6>
                                        <div class="pricing-table__image">
                                            <img src="assets/images/icons/mitech-pricing-box-icon-03-90x90.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">299</h6>
                                            <h6 class="period">/mo</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Get started</a>
                                        </div>
                                        <ul class="pricing-table__list text-left">
                                            <li>10 projects</li>
                                            <li>Power And Predictive Dialing </li>
                                            <li>Quality &amp; Customer Experience </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--========= Pricing Table Area End ==========-->


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
                <div class="row pricing-table-two">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__header">
                                <h5 class="pricing-table__title">Free</h5>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">$</h6>
                                    <h6 class="price">0</h6>
                                    <h6 class="period">/mo</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <ul class="pricing-table__list">
                                    <li>03 projects</li>
                                    <li>Power And Predictive Dialing</li>
                                    <li>Quality &amp; Customer Experience</li>
                                    <li><span class="featured">Try for free, forever!</span></li>
                                </ul>
                            </div>
                            <div class="pricing-table__footer">
                                <a href="#" class="ht-btn ht-btn-default btn--secondary">Get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table pricing-table--popular wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__feature-mark">
                                <span>Popular Choice</span>
                            </div>
                            <div class="pricing-table__header">
                                <h5 class="pricing-table__title">Personal</h5>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">$</h6>
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
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__header">
                                <h5 class="pricing-table__title">Group</h5>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">$</h6>
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
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__header">
                                <h5 class="pricing-table__title">Enterprise</h5>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">$</h6>
                                    <h6 class="price">49</h6>
                                    <h6 class="period">/mo</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <ul class="pricing-table__list">
                                    <li>Unlimited projects</li>
                                    <li>Power And Predictive Dialing</li>
                                    <li>Quality &amp; Customer Experience</li>
                                    <li>24/7 phone and email support</li>
                                </ul>
                            </div>
                            <div class="pricing-table__footer">
                                <a href="#" class="ht-btn ht-btn-default btn--secondary">Get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========= Pricing Table Area End ==========-->

</div>
@endsection