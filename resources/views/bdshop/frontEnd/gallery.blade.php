@extends('bdshop.frontEnd.layouts.master')

@section('content')
<style>
    /* p {
        background-image: url('uploads/image/about.jpg');
    } */
    .banner_contact{
        height: 500px;
        width: 100%;
    }
    .banner_content
    {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }
    .banner_text
    {
        color:white!important;
    }
    .btn_contact_form
    {
        background: #004ECC!important;
        color: white
    }
    .card-header
    {
        background: #070175!important;
        color:white;
    }
</style>
<!--banner start-->
<div class="banner">
    <img src="{{asset('/')}}uploads/image/gallery.jpg" alt="contact-us" class="banner_contact"/>
    <div class="banner_content">
        <h1 class="banner_text text-bold">Gallery</h1>
    </div>

</div>
<!--banner end-->
<!--Contact start-->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('image/Buseness.jpg')}}" alt="gallery-image" height="153px" width="229px"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
