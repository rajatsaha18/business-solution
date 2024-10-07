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

                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div style="background-color: #f0f0ff;" class="width-100 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4 style="color: #00006b; ">Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px;" class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($shop_categories as $item)
                        <a style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px;" href="{{route('info-sc',$item->slug)}}" class="text-center">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
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

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="mainbody-grid div_style4">
                        <h1 style="color: #00006b; ">Search results for {{$search}} </h1>

                    </div>
                </div>

                <div class="width-100">
                    <h6>
                        Best Pest Control company Bangladesh, pest control service in bangladesh, pest control
                        company in dhaka, list of pest control company in bangladesh, best pest control service
                        provider in dhaka chittagong sylhet khulna, top pest control company in bangladesh.
                        <p class="text-blue">To add your company in <a href="https://businesssolution.com.bd/">Business Solution</a>o Yellow Pages simply <a href="{{route('add-your-company')}}" class="text-bold">click
                                here</a>. For animation banner ad, please <a href="{{route('add-your-company')}}" class="text-bold">click
                                here</a>.</p>
                    </h6>
                </div>

                <div class="margin-bottom-10">

                    <a href="" target="_blank"><img src="https://www.bdtradeinfo.com/public/saimg/ad_bdpestcontrol.gif" alt="" class="width-100"></a>

                </div>


                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-3 col-xs-5 mainbody-grid text-center margin-top-10">
                        Records <span class="sub_ttl_yellow">1-25</span> of <span class="sub_ttl_yellow">25</span>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-2 col-xs-3 col-lg-offset-2 col-md-offset-0 col-sm-offset-2 col-xs-offset-0 mainbody-grid text-center margin-top-10">
                        <a href="" target="_blank"><img src="https://www.bdtradeinfo.com/public/assets/images/icon_citywise.png" alt=""></a>
                        <a href="" target="_blank"><img src="https://www.bdtradeinfo.com/public/assets/images/icon_area.png" alt=""></a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-3 col-xs-4 col-lg-offset-2 col-md-offset-0 col-sm-offset-2 col-xs-offset-0 mainbody-grid text-center margin-top-10">
                        Page <span class="sub_ttl_yellow">1</span> of <span class="sub_ttl_yellow">1</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 text-center"></div>
                </div>

                @foreach ($advertise as $item)
                <div class="div_style2">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 div_style3">
                            <div class="width-100 mainbody-grid border-bottom-dashed margin-bottom-15 padding-top-bottom-10">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 mainbody-grid">
                                        <h3>
                                            <a style="color: #00006b;" class="nav12txt" href="#">
                                                {{$item->business_name}}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-md-1 col-xs-2 mainbody-grid text-right">
                                        <img src="https://www.bdtradeinfo.com/public/assets/images/icon_silverMember.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-xs-12 mainbody-grid">
                                    <address>
                                        <ul class="location">
                                            <li><i style="background-color: #00006b;" class="fas fa-map-marker-alt normal-icon"></i></li>
                                            <li>
                                                {{$item->address}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>
                                        <ul class="location">
                                            <li><i style="background-color: #00006b;" class="fas fa-phone-alt normal-icon"></i></li>
                                            <li>
                                                {{$item->phone}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>

                                        <ul class="location">
                                            <li><i style="background-color: #00006b;" class="fas fa-globe-asia normal-icon"></i></li>
                                            <li>
                                                @if (isset($item->website))
                                                @if ((!(substr($item->website, 0, 7) == 'http://')) && (!(substr($item->website, 0, 8) == 'https://')))
                                                <a href="{{'http://'.$item->website}}" target="_blank" class="navtxt_normal">{{'http://'.$item->website}}</a>
                                                @else
                                                <a href="{{$item->website}}" target="_blank" class="navtxt_normal">{{$item->website}}</a>
                                                @endif

                                                @endif
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                                <div class="col-md-4 col-xs-12 mainbody-grid">
                                    <address>
                                        <ul class="location">
                                            <li><i style="background-color: #00006b;" class="fas fa-user normal-icon"></i></li>
                                            <li>
                                                {{$item->owner_name}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>

                                        <ul class="location">
                                            <li><i style="background-color: #00006b;" class="fas fa-envelope normal-icon"></i></li>
                                            <li><a href="{{route('info-send-email',$item->id)}}" class="nav7txt" target="_blank"><strong>Send Email /
                                                        Query</strong></a></li>
                                        </ul>
                                        <ul class="location">
                                            <li>
                                                @if($item->facebook)
                                                <a href="{{$item->facebook}}" target="_blank">
                                                    <img src="https://www.bdtradeinfo.com/public/assets/images/facebook.png" alt="" width="20" class="margin-right-10">
                                                </a>
                                                @endif
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                            </div>

                            <div class="width-100 mainbody-grid text-justify border-top-dashed">
                                <p>
                                    <a href="{{route('company.detail',$item->slug)}}" class="btn btn-sm" target="__blank" style="background-color:#00006b;color:white">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="col-md-12 text-center"></div>

                <div class="clearfix"></div>
                <div class="col-md-12 border-bottom-dashed margin-top-10"></div>

                <div class="clearfix"></div>
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