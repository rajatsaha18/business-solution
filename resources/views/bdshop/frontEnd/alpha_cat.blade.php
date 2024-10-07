@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<!-- alphabets -->
<div class="container">
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

                    <h1 style="color:#00006b">Alphabetic List of Sub Categories started with </h1>
                    <span class="orange_bold">{{$character}}</span>
                </div>

                <div class="width-100">
                    <h6>
                        <p class="text-blue">To add your company in <strong>Business Solution</strong> Yellow Pages simply <a href="{{route('add-your-company')}}" class="text-bold">click
                                here</a>. For animation banner ad, please <a href="{{route('add-your-company')}}" class="text-bold">click
                                here</a>.</p>
                    </h6>
                </div>

                <div class="margin-bottom-10">

                    <a href="#" target="_blank"><img src="https://www.bdtradeinfo.com/public/saimg/ad_bdpestcontrol.gif" alt="" class="width-100"></a>

                </div>


                <div class="col-md-12 col-xs-12 div_style3">
                    @foreach ($sub_category as $item)
                    <div class="width-100 padding-top-bottom-6 border-bottom-dashed">
                        <div class="id_div_1">
                            <span class="orange_arrow">&gt;&gt;</span>

                            <a href="{{route('info-category-all',$item->slug)}}" class="alphaSubcat">{{$item->name}}</a>
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