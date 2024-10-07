@extends('bdshop.frontEnd.layouts.master')
@section('content')
<div>
    <style>
        .ho:hover {
            background-color: yellow !important;
        }

        .fa-search {
            color: white !important;
        }

        @media(max-width:600px) {
            .searchbox {
                width: 90% !important;
            }

            .search-button {
                margin-top: -3px !important;
            }
        }

        @media(max-width:762px) {
            .about_btn {
                margin-bottom: 20px !important;
            }
        }

        @media(max-width:1190px) and (min-width:762px) {
            .about_img {
                margin-top: 100px !important;
            }
        }

        .head_text_color {
            color: #004ECC;
            font-weight: bold;
        }

        .headTitle {
            background-color: #070175;
            color: white;
            /* padding-top: 5px; */
            padding-bottom: 5px;
            border-radius: 5px;
            width: auto;
            margin: auto;

            /* display: flex; */
            justify-content: center;
            align-items: center;
        }

        .btn {
            color: white !important;
            background-color: #007BFF !important;
        }

        /* .btn_text
        {
            color: white;
        } */
        .about_us {
            text-align: center !important;
        }

        #overlay {
            position: fixed;
            /* Sit on top of the page content */
            display: none;
            /* Hidden by default */
            width: 100%;
            /* Full width (cover the whole page) */
            height: 100%;
            /* Full height (cover the whole page) */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Black background with opacity */
            z-index: 2;
            /* Specify a stack order in case you're using a different order for other elements */
            cursor: pointer;
            /* Add a pointer on hover */
        }

        /* .gallery_text
        {
            text-align: center !important;
        } */
        h1,
        h2,
        h3,
        h4 {
            color: #004ECC;
            display: block;
            font-weight: bold;
        }

        .about_img {
            margin-top: 75px !important;
        }

        .cardStyle {
            border: 3px solid #070175;
            border-radius: 10px;
        }

        .cardStyle:hover {
            box-shadow: 0 0 11px rgba(33, 33, 33, .2);
        }

        /* @media(max-width:1020px){
           .cardImage>img{
            width: 3000px!important;
            height: 3000px!important;
           } */




        /*  */
        @media (max-width: 480px) {
            .custom-col {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .containers {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            .card-imgSize {
                padding: 5px;
            }
        }

        @media (min-width: 481px) and (max-width: 576px) {
            .custom-col {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .containers {
                padding-left: 50px !important;
                padding-right: 50px !important;
            }

            .card-imgSize {
                padding: 5px;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .custom-col {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .containers {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .card-imgSize {
                padding: 0px;
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            .custom-col {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .containers {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }

            .card-imgSize {
                padding: 5px;
            }
        }

        @media (min-width: 993px) and (max-width: 1200px) {
            .custom-col {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .containers {
                padding-left: 30px !important;
                padding-right: 30px !important;
            }

            .card-imgSize {
                padding: 10px;
            }
        }

        @media (min-width: 1201px) and (max-width: 1500px) {
            .custom-col {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .containers {
                padding-left: 60px !important;
                padding-right: 60px !important;
            }

            .card-imgSize {
                padding: 10px;
            }
        }

        @media (min-width: 1501px) and (max-width: 3100px) {
            .custom-col {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .containers {
                padding-left: 60px !important;
                padding-right: 60px !important;
            }

            .card-imgSize {
                padding: 5px;
            }

            /* .alignCenter {
                position: absolute;
                top: 30%;
                bottom: auto;
            } */
        }

        .card-section {
            margin-top: 60px !important;
        }
    </style>

    <!--Our Service Start-->
    <div class="containers alignCenter" style="margin-bottom: 65px">
        <div class="containers ">
            <div class="row margin-bottom-10 margin-top-10 ">
                <!-- <h1 class="text-center mt-5 headTitle">Our Services</h1> -->
                <div class="col-md-12 card-section ">

                    {{-- Card Section --}}

                    <div class="row row-cols-1 row-cols-md-3 g-4 ">
                        {{-- @dd($businessService) --}}
                        @forelse ($businessService as $service)

                        <div class="custom-col pb-2">
                            <a href="{{ url($service->link) }}" style="color: black">
                                <div class="card h-100 bg-white cardStyle">
                                    <img style="aspect-ratio: 9/2; " src="{{ asset($service->image) }}" class="card-img-top card-imgSize" alt="...">
                                    <div class="card-body text-center pt-0">
                                        {{-- <h5 class="card-title head_text_color">{{ $service->title }}</h5> --}}

                                        <div class="d-flex flex-column">
                                            <button type="button" class="btn btn-primary btn-sm m-auto px-4"><span class="btn_text">Visit Now</span> <i class="fa-solid fa-angles-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty

                        @endforelse

                        {{--
                        <div class="col">
                            <a href="{{ route('halal.investment.index') }}" style="color: black">
                        <div class="card h-100 shadow">
                            <img src="{{ asset('uploads/image/Halal Investment.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title head_text_color">Halal Investment</h5>

                                <div class="d-flex flex-column">
                                    <button type="button" class="btn btn-outline-success btn-sm"><span class="btn_text">Go</span> <i class="fa-solid fa-angles-right"></i></button>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div> --}}

                    {{-- <div class="col">
                          <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div> --}}
                </div>

            </div>


        </div>
    </div>
    <!--Our Service End-->
    <!--About Us Start-->
    {{-- <section class="py-5">
            <div class="containers">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-center text-bold head_text_color mb-5">About Us</h1>
                        <hr class="head_text_color">
                        <p class="mt-5">
                            {!!$aboutUs->description!!}

                        </p>
                        <a href="{{route('about')}}" class="btn btn_text about_btn">About Us</a>
</div>
<div class="col-md-6">
    <img class="about_img" src="{{asset($aboutUs->image)}}" alt="about-us" />
</div>
</div>
</div>
</section> --}}
<!--About Us End-->

<!--Gallery Start-->
{{-- <h1 class="text-center gallery_text">Gallery</h1>
        
        <section class="py-5">
            <div class="containers">

                <div class="row">
                    @foreach ($newGallery as $gallery)
                    <div class="col-md-3">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="{{asset($gallery->image)}}" alt="gallery-image" height="153px" width="229px"/>
</div>
</div>
</div>

@endforeach


</div>
</div>
</section> --}}
<!--Gallery End-->

</div>

@endsection