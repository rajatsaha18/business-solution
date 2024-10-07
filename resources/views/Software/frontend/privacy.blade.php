@extends('Software.frontend.master')
@section('content')
@php
$setting = App\Models\SoftwareGeneralSetting::first();
@endphp
<style>
    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->privacy_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->privacy_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->privacy_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->privacy_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->privacy_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->privacy_banner)}}') !important;
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
                    <h2 class="breadcrumb-title text-white">Privacy & Policy</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> Privacy & Policy </li>
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
            <div class="row align-items-center ">
                <h2 class="text-center ">{{$privacies->title}}</h2>
                <p class="text-justify">{!! $privacies->description !!} </p>
            </div>
        </div>
    </div>


</div>

@endsection