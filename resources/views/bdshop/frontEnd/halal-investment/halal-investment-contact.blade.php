@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
    .iconColor {
        color: #00a86b !important;
    }

    .btn-outline-success {
        color: #00a86b;
        border-color: #00a86b !important;
    }
</style>
<section class="banner-sliders">
    <div class="container">
        <div class="banner-slider">
            <div>
                <img src="{{asset('halal-investment/assets/images/banner1.jpg')}}" alt="">
            </div>
            <div>
                <img src="{{asset('halal-investment/assets/images/banner2.jpg')}}" alt="">
            </div>
            <div>
                <img src="{{asset('halal-investment/assets/images/banner3.jpg')}}" alt="">
            </div>
        </div>

    </div>
</section>

<section class="contact mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center mb-3">
                <div>
                    <i class="fas fa-phone-square iconColor fs-2 mb-3"></i>
                    <h5 class="fw-bold">Phone</h5>
                    <p class="text-secondary fw-bolder">Contact for any query</p>
                    <h6 class="fw-bolder">{{$halalinvestmentsetting->phone}}</h6>
                </div>

            </div>
            <div class="col-md-4 col-sm-12 text-center mb-3">
                <div>
                    <i class="fas fa-envelope fs-2 iconColor mb-3"></i>
                    <h5 class="fw-bold">Email</h5>
                    <p class="text-secondary fw-bolder">Contact for any query</p>
                    <h6 class="fw-bolder">{{$halalinvestmentsetting->email}}</h6>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 text-center mb-3">
                <div>
                    <i class="fas fa-map-marker-alt fs-2 iconColor mb-3"></i>
                    <h5 class="fw-bold">Location</h5>
                    <h6 class="fw-bolder" style="line-height:25px">{!! $halalinvestmentsetting->address !!}</h6>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="form-map mt-5 pt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 mb-3">
                <iframe src="{{$halalinvestmentsetting->map}}" style="width:100%" height="484" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="form-card card shadow border-0 p-3">
                    <h5 class="fw-bolder pt-2 pb-2">Get in touch !</h5>
                    <form action="{{route('halal-investment-user-message.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Your Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Your Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Your Question</label>
                            <input type="text" class="form-control" name="question" placeholder="Subject:" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Your Message</label>
                            <textarea class="form-control" name="message" type="text" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-success fw-bolder">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection