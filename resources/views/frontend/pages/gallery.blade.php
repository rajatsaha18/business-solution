@extends('frontend.layouts.app')
@section('content')
    <style>
        .m5lie {
            width: 31% !important;
        }

        .daohang>li>a {


            color: black !important;

        }
    </style>

    <div class="fenbanner mat1">
        <img src="{{ asset('frontend_two/fenbanner_.png') }}" title="Company Overview" alt="Company Overview">
        <p class="fenbiao">Gallery & Recognitions</p>

    </div>

    <!--  main5  -->
    <div class="main5">
        <div class="zong">
            <a href="#" class="m1biao" style="font-weight:700">Gallery</a>
            <div class="m5n">

                <div class="clear"></div>

                @foreach ($galleries as $gallery)
                    <div class="m5lie ">

                        <picture>
                            <source type="image/webp" srcset="{{ asset($gallery->image) }}">
                            <img data-original="{{ asset($gallery->image) }}"
                                style="width:100%;height:300px;object-fit:cover" alt="gallery" class="nlazy">
                        </picture>


                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="main5">
        <div class="zong">
            <a href="#" class="m1biao" style="font-weight:700">Recognitions</a>
            <div class="m5n">

                <div class="clear"></div>

                @foreach ($recogs as $recog)
                    <div class="m5lie ">

                        <picture>
                            <source type="image/webp" srcset="{{ asset($recog->image) }}">
                            <img data-original="{{ asset($recog->image) }}"
                                style="width:100%;height:300px;object-fit:cover" alt="gallery" class="nlazy">
                        </picture>


                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
