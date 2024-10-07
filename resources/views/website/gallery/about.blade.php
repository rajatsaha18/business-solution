@extends('bdshop.frontEnd.layouts.master')

@section('content')
<style>
    /* p {
        background-image: url('uploads/image/about.jpg');
    } */
    .banner_contact {
        height: 400px !important;
        width: 100%;
    }

    .banner_content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .banner_text {
        color: white !important;
    }

    .btn_contact_form {
        background: #004ECC !important;
        color: white
    }

    .card-header {
        background: #070175 !important;
        color: white;
    }

    .head_text_color {
        color: #070175 !important;
    }

    .banner {
        position: relative;
        background-image: url('{{asset($aboutbanner->business_about_banner)}}');
        background-size: cover;
        background-position: center;
        aspect-ratio: 9/3;
    }

    .banner-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
        font-size: 3em;
        font-weight: bold;
    }

    /* aboutbanner */
</style>
<div class="banner">
    <div class="banner-title">
        About Us
    </div>
</div>

<section class="py-5" style="margin-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <h1 class="text-center text-bold head_text_color mb-5">About Us</h1> -->
                <!-- <hr class="head_text_color"> -->
                <p class="mt-1">{!!$about->description!!}</p>
            </div>
            <!-- <div class="col-md-6">
                <img class="about_img" src="{{asset($about->image)}}" alt="about-us" />
            </div> -->
        </div>
    </div>
</section>

@endsection