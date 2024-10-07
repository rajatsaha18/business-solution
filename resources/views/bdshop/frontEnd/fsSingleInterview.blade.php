@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .founder-single-story img {
        height: 603px;
        width: 100%;
    }

    .info h5 a {
        text-decoration: none !important;
    }

    .para h5 {
        line-height: 1.7 !important;
    }
</style>
<section class="in_details">
    <div class="container">
        <div class="mt-4 founder-single-story">
            <img src="{{asset($data->image)}}" alt="">
        </div>
        <h1 style="color:#00006b;font-weight:600;">Founder Startup Interview</h1><br>
        <h1 style="font-size: 42px;font-weight: 600;color:#404040;width:100%" class="mt-3">
            {{$data->title}}
        </h1>
        <div class="d-flex gap-4 mt-2 mb-2">
            <h1 class="text-dark">Founder Name: <span style="color:#00006b">{{$data->founder_name}}</span></h1>
            <h1 class="text-dark">Company Name: <span style="color:#00006b">{{$data->company_name}}</span></h1>
        </div>
        <div>
            <div class="row mt-3">
                <div class="col-md-2 col-sm-6 info">
                    <h5>By <a style="color: #00006b;" href="#">Business Solution</a></h5>
                </div>
                <div class="col-md-2 col-sm-6">
                    <h5 style="color:#404040">{{ Carbon\Carbon::parse($data->created_at)->format('M d, Y') }}</h5>
                </div>
                <div class="col-md-2 col-sm-6">
                    <span><i class="fa fa-facebook-square fs-4" style="color:#00006b" aria-hidden="true"></i> <span class="fs-4">Share 6</span></span>


                </div>
                <div class="col-md-2 col-sm-6">
                    <span><i class="fa fa-linkedin-square fs-4" style="color: #00006b;" aria-hidden="true"></i> <span class="fs-4">Share</span></span>

                </div>
                <div class="col-md-2 col-sm-6">
                    <span><i class="fa fa-twitter-square fs-4" style="color: #00006b;" aria-hidden="true"></i> <span class="fs-4">Tweet</span></span>
                </div>
                <div class="col-md-2 col-sm-6">
                    <span><i class="fa fa-envelope-open fs-4" style="color: #00006b;" aria-hidden="true"></i> <span class="fs-4">Email</span></span>

                </div>
            </div>
        </div>
        <hr>

        <div class="para">
            {!! $data->description !!}
        </div>
    </div>
</section>


@endsection