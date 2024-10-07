@extends('Software.frontend.master')
@section('content')
@php
$setting = App\Models\SoftwareGeneralSetting::first();
@endphp
<style>
    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->contact_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->contact_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->contact_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->contact_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->contact_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->contact_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    .contactHeading {
        /* border-color: #00006B !important; */
        padding-left: 28px;
        border-left: 4px solid #00006B;
    }
</style>


<!-- breadcrumb-area start -->
<div class="bg-cover">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center text-white">
                    <h2 class="breadcrumb-title text-white">Contact us</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> Contact us </li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<div class="site-wrapper-reveal">
    <!--====================  Conact us Section Start ====================-->
    <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6 ">
                    <div class="conact-us-wrap-one mb-30">
                        <h5 class="contactHeading">{{ $setting->phone_text }}</h5>
                        <div class="sub-heading">{{ $setting->location }} <br>
                            <br> <b>Email:</b> {{ $setting->email_address }}
                            <br> <b>Phone:</b> {{ $setting->phone_number }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-lg-6">
                    <div class="contact-form-wrap">

                        <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                        {{-- id="contact-form" --}}
                        @if(session()->has('message'))
                        <div class="alert alert-success" style="color: green">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <form id="contact-form" method="post" name="myForm" id="myForm" action="{{route('submit-contact')}}" onsubmit="return validateForm()">
                            @csrf
                            <div class="contact-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="name" type="text" placeholder="Name *" required>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="contact-inner">
                                    <input name="subject" type="text" placeholder="Subject *" required>
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="comments" placeholder="Please describe what you need." required></textarea>
                                </div>
                                <div class="submit-btn mt-20">
                                    <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                    {{-- <p class="form-messege"></p> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  Conact us Section End  ====================-->

    <!--====================  Conact us info Start ====================-->
    <!-- <div class="contact-us-info-wrappaer section-space--pb_100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4 col-md-6">
                    <div class="conact-info-wrap mt-30">
                        <h5 class="heading mb-20">{{ $setting->phone_text }}</h5>
                        <ul class="conact-info__list">
                            <li>{{ $setting->location }}</li>
                            {{-- <li><a href="#" class="hover-style-link text-color-primary">contact.sanfrancisco@mitech.com</a></li> --}}
                            <li>{{ $setting->phone_number }}</li>
                            {{-- <li><a href="#" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li> --}}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!--====================  Conact us info End  ====================-->




</div>

@endsection