@extends('bdshop.frontEnd.layouts2.master')

@section('content')

<style>
    @media (max-width: 576px) {
        .deviceVisiable {
            display: none;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .deviceVisiable {
            display: none;
        }
    }


    /* @media (min-width: 768px) and (max-width: 991px) {}

    @media (min-width: 992px) and (max-width: 1199px) {}

    @media (min-width: 1200px) and (max-width: 1399px) {}

    @media (min-width: 1400px) {} */
</style>
<!--top address bar-->
<!-- $latest_blogs -->
<div class="container">
    <div class="row margin-bottom-20 margin-top-10">
        <div class="col-md-3 deviceVisiable">
            <div class="row">
                <div class="clearfix"></div>
                <!--left category menu-->
                @forelse ($latest_blogs as $blog)

                <div class="card border-0 mb-3 px-0" style="max-width: 540px;">
                    <div class="row g-0 ">
                        <div class="col-md-4 col-sm-4 col-3">
                            <img src="{{asset($blog->image)}}" style="aspect-ratio: 9/6;" class="img-fluid p-2 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 col-sm-8 col-9">
                            <div class="card-body py-1 pe-0">
                                <h6 class="card-title fs-6 mb-0"><a href="{{route('single.country.blog', $blog->slug) }}">{{$blog->title}}</a></h6>

                            </div>
                        </div>
                    </div>
                </div>

                @empty
                @endforelse

            </div>
        </div>

        <div class="col-md-9">
            <div class="">

                <!-- <div class="skiptarget"><a id="maincontent">-</a></div> -->
                <div class="row m-0 p-0">
                    <div class="col-md-12 col-xs-12 div_style3 border-0">

                        <!-- <div class="main_content2">
                            <div class="col-md-12 col-sm-12 col-xs-12 margin-top-bottom-10 padding-bottom-5 text-left"> -->

                        <div class="card countryblogg h-100 border-0">

                            <img src="{{asset($data->image)}}" class="mb-4" style="aspect-ratio: 9/5;">
                            <h3 class="cb-title" style="color:#00006b!important">{{$data->title}}</h3>

                            <h6 class="des cb-desc" style="width:90%!important;font-size:15px!important">{!! $data->description !!}</h6>


                        </div>

                        <!-- </div>

                        </div> -->
                    </div>
                </div>
                <!--ad bottom-->
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-top-10">
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>

<div class="total-ads main-grid-border">
    <div class="container">
    </div>
</div>
@endsection