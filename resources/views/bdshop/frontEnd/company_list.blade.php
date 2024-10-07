@extends('bdshop.frontEnd.layouts.master')

@section('content')
<!-- alphabets -->
<div class="container mt-5">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                @foreach ($left_banner as $item)
                <!--ad left-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
                </div>
                @endforeach
                <div class="clearfix"></div>
                <!--ad left-->
            </div>
        </div>

        <div class="col-md-8">
            <div class="row margin-top-10">
                @foreach ($top_banner as $item)
                <!--ad classic & classic mini-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 margin-bottom-7">
                    <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-classic-hp"></a>
                </div>
                @endforeach
                <!--ad classic & classic mini-->
            </div>

            <div class="skiptarget"><a id="maincontent">-</a></div>

            <div class="row">
                <div class="col-md-12 col-xs-12 mainbody-grid div_style4">

                    <h1 style="color:#00006b">List of companies started with </h1>
                    <span class="orange_bold">{{$character}}</span>
                </div>

                <div class="width-100">
                    <h6>
                        <p class="text-blue">Company list, alphabetic company names, find companies in bangladesh, companies in alphabetic order <span class="text-bold">To add your company in <a href="https://businesssolution.com.bd/">Business Solution</a> Yellow Pages simply <a href="{{url('info/add-your-company')}}" class="text-bold" target="_blank">click
                                    here</a></span>. For animation banner ad, please <a href="{{url('info/advertise-with-us')}}" class="text-bold" target="_blank">click
                                here</a>.</p>
                        @include('bdshop.frontEnd.layouts.company_list_nav')
                    </h6>
                </div>


                <div class="col-md-12 col-xs-12 div_style3">
                    @foreach ($company_list as $item)
                    <div class="width-100 padding-top-bottom-6 border-bottom-dashed">
                        <div class="id_div_1">
                            <span class="orange_arrow">&gt;&gt;</span>

                            <a href="{{route('company',$item->slug)}}" class="alphaSubcat">{{$item->business_name}}</a>
                            <div class="text-right remove_link">
                                <a href="#"><img src="https://www.bdtradeinfo.com/public/assets/images/icon_allarea.png" alt=""></a>
                                &nbsp;
                                <a href="#"><img src="https://www.bdtradeinfo.com/public/assets/images/icon_citywise.png" alt=""></a>
                                &nbsp;
                                <a href="#"><img src="https://www.bdtradeinfo.com/public/assets/images/icon_area.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

        <div class="col-md-2">
            <div class="row">
                <!--ad right-->
                @foreach ($right_banner as $item)
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
                </div>
                @endforeach
                <div class="clearfix"></div>
                <!--ad right-->
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>
@endsection