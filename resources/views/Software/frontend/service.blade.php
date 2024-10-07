@extends('Software.frontend.master')
@section('content')
{{-- @dd($services) --}}
{{-- @dd($sitebanner) --}}
<style>
    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->services_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->services_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->services_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->services_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->services_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->services_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>
<!-- breadcrumb-area start -->
<div class="bg-cover text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title text-white">Services</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> Services</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<div class="site-wrapper-reveal">
    <!--===========  feature-images-wrapper  Start =============-->
    <div class="feature-images-wrapper section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center">
                        <h3 class="heading">Preparing for your success, <br> we provide <span class="text-color-primary"> truly prominent IT solutions.</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="container text-center my-5" style="margin-bottom: 20px; margin-top: 50px; ">

                <div class="row row-cols-1 row-cols-md-4 mt-5">

                    {{-- @dd($services) --}}
                    @forelse ($services as $item)
                    {{-- @dd($item) --}}
                    {{-- @if ($loop->iteration % 2 != 0) --}}
                    <div class="col">
                        <div class="card h-100 align-items-center p-2 shadow-sm">
                            {{-- @dd($item->icon) --}}
                            @if($item->font_icon)
                            <i class="{{$item->font_icon}}"></i>
                            <div class="svg-icon" id="svg-1" data-svg-icon="{{ asset('frontend2') }}/assets/images/svg/linea-basic-heart.svg"></div>
                            @else
                            {{-- <img class="img-fluid mx-3" style="width: 80px; height:50px " src="{{$item->icon}}" alt=""> --}}
                            <img src="{{ asset($item->icon) }}" class="card-img-top w-25" alt="...">
                            @endif
                            <div class="card-body">
                                <h6 class="card-title">{{ $item->title }}</h6>
                                <p class="card-text">{!! $item->short_description !!}</p>
                            </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                    @empty
                    @endforelse

                </div>
            </div>


        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->
    <!--============ Contact Us Area Start =================-->
    {{-- @include('Software.frontend.component.contact') --}}
    <!--============ Contact Us Area End =================-->

</div>
@endsection