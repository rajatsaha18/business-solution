@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">

                <!--ad left-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ad_resgroup.gif" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ad_greentouchclean.gif" alt="" class="img-left-hp1"></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ad_jj_left_special.gif" alt=""></a>
                </div>
                <div class="clearfix"></div>
                <!--ad left-->
            </div>
        </div>

        <div class="col-md-8">
            <div class="row margin-top-10">
                <!--ad classic & classic mini-->
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 margin-bottom-7">
                    <a href="#"><img src="./img/ad_royal.gif" alt=""></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right margin-bottom-7">
                    <a href="#"><img src="./img/ad_tigerpestcontrol_homeclassic.gif" alt=""></a>
                </div>
                <!--ad classic & classic mini-->
            </div>

            <div class="skiptarget"><a id="maincontent">-</a></div>

            <div class="row">
                <div class="col-md-12 col-xs-12 mainbody-grid div_style4">

                    <h1 style="color:#00006b">{{$shop_category->name}} </h1>
                </div>

                <div class="width-100">
                    <h6>
                        {{$shop_category->name}} in Bangladesh, Dhaka, Chittagong, Khulna, Sylhet,
                        Barishal, Bogra, Rajshahi, Jessore, Comilla, Narayngonj
                        <p class="text-blue">To add your company in <a href="https://businesssolution.com.bd/">Business Solution</a> Yellow Pages simply <a href="{{route('add-your-company')}}" class="text-bold">click
                                here</a>. For animation banner ad, please <a href="{{route('add-your-company')}}" class="text-bold">click
                                here</a>.</p>
                    </h6>
                </div>

                <div class="margin-bottom-10">

                    <a href="#" target="_blank"><img src="https://www.bdtradeinfo.com/public/saimg/ad_bdpestcontrol.gif" alt="" class="width-100"></a>

                </div>


                <div class="col-md-12 col-xs-12 div_style3">

                    @foreach ($shop_sub_categories as $item)
                    <a href="{{route('info-category-all',$item->slug)}}" class="alphaSubcat">
                        <div class="width-100 padding-top-bottom-6 border-bottom-dashed">
                            <div class="id_div_1">
                                <span class="orange_arrow">&gt;&gt;</span>

                                {{$item->name}}
                    </a>

                </div>
            </div>
            </a>
            @endforeach

        </div>

    </div>
</div>

<div class="col-md-2">
    <div class="row">

        <!--ad right-->
        <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
            <a href="#"><img src="./img/ad_products.png" alt=""></a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
            <a href="#"><img src="./img/ha9.png" alt=""></a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
            <a href="#"><img src="./img/ha2.png" alt=""></a>
        </div>
        <div class="clearfix"></div>
        <!--ad right-->

    </div>
</div>

</div>
<div class="clearfix"></div>
</div>
@endsection