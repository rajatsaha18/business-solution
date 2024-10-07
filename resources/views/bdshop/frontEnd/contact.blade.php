@extends('bdshop.frontEnd.layouts2.master')

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
        background: #00006b !important;
        color: white
    }

    .card-header {
        background: #00006b !important;
        color: white;
    }

    .bg-cover {
        background-image: url("{{asset('/')}}uploads/images/BI-Contact.png") !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        aspect-ratio: 16/6 !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<!--banner start-->
<!-- <div class="banner">
    <img src="{{asset('/')}}uploads/image/contact.jpg" alt="contact-us" class="banner_contact" />
    <div class="banner_content">
        <h1 class="banner_text text-bold">Contact Us</h1>
    </div>

</div> -->

<!--<div class="bg-cover text-white">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="breadcrumb_box text-center">-->
<!--                    <h2 class="breadcrumb-title text-white">Contact Us</h2>-->
                    <!-- breadcrumb-list start -->
<!--                    <br>-->
<!--                    <br>-->
<!--                    <ul class="breadcrumb-list">-->
<!--                        <span class="breadcrumb-item"><a class=" text-white" href="{{ route('info') }}"> Home </a></span>-->
<!--                        <span class="active text-white">> Contact Us</span>-->
<!--                    </ul>-->
                   
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--banner end-->
<!--Contact start-->

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card border-0">
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
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.547316003507!2d90.4288019!3d23.727854500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b95060f1088b%3A0x462b71ad2fa9c827!2sBusiness%20Solution!5e0!3m2!1sen!2sbd!4v1720600485650!5m2!1sen!2sbd" width="100%" style="border:0; aspect-ratio: 9/6; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>


@endsection