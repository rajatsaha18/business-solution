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

    .banner {
        position: relative;
        background-image: url('{{asset($galleryCover->business_gallery_banner)}}');
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
        Gallery
    </div>
</div>
@include('website.gallery.imagepopup')

@endsection