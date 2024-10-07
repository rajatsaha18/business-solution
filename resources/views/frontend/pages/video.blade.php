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
        <p class="fenbiao">Video's</p>

    </div>

    <!--  main5  -->
    <div class="main5">
        <div class="zong">
            <a href="#" class="m1biao" style="font-weight:700">Video's</a>
            <div class="m5n">

                <div class="clear"></div>

                @foreach ($videos as $item)
                    <div class="m5lie ">

                        <?php
                        $youtube=explode('=',$item->video_url);
                        $ytube=$youtube[1];
                       ?>
                        <iframe height="300px" width="100%"src="https://www.youtube.com/embed/{{$ytube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
