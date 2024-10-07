@extends('bdshop.frontEnd.layouts.master')

@section('content')
<style>
    /* p {
        background-image: url('uploads/image/about.jpg');
    } */
    .banner_contact {
        height: 500px;
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
        background-image: url('{{asset($contactCover->business_contact_banner)}}');
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
</style>
@php
$businessSiteSetting = App\Models\BusinessHomeSiteSetting::first();
@endphp
<!-- Banner -->
<div class="banner">
    <div class="banner-title">
        Contact Us
    </div>
</div>

<!--Contact start-->

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 ">
                    <div class="card-header text-center">Contact Form</div>
                    <div class="card-body">
                        <form action="{{route('submit-contact')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Mobile</label>
                                <input type="number" name="mobile" class="form-control" placeholder="Mobile" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for=""></label>
                                <input type="submit" class="btn btn_contact_form" value="Send" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="{{$businessSiteSetting->google_map }}" style="border:0; aspect-ratio: 16/10 !important; width: 100%; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row px-4 shadow py-2">
            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="">
                    <p style="font-size: larger;"> <span style="font-weight: 700; ">Email:</span> {{ $businessSiteSetting->email }} </p>
                    <p style="font-size: larger;"> <span style="font-weight: 700;">Phone:</span> {{ $businessSiteSetting->phone }} </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 col-12">
                <span style="font-size: larger;"> <span style="font-weight: 700;">Address:</span> {!! $businessSiteSetting->address !!} </span>
            </div>
        </div>
    </div>
</section>


@endsection