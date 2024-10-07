@extends('bdshop.frontEnd.layouts.master')

@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                @foreach ($left_banner as $item)
                <!--ad left-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="{{$item->url}}"></a>
                </div>
                @endforeach
                <div class="clearfix"></div>

                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div
                        class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4>Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
                            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($shop_categories as $item)
                            <a href="{{route('info-sc',$item->slug)}}" class="text-center">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
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

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="mainbody-grid div_style4">
                        <h1>{{$company->name}} </h1>

                    </div>
                </div>

                {{-- <div class="margin-bottom-10">

                    <a href="" target="_blank"><img
                            src="https://www.bdtradeinfo.com/public/saimg/ad_bdpestcontrol.gif" alt=""
                            class="width-100"></a>

                </div> --}}


                {{-- <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-3 col-xs-5 mainbody-grid text-center margin-top-10">
                        Records <span class="sub_ttl_yellow">1-25</span> of <span class="sub_ttl_yellow">25</span>
                    </div>
                    <div
                        class="col-lg-2 col-md-4 col-sm-2 col-xs-3 col-lg-offset-2 col-md-offset-0 col-sm-offset-2 col-xs-offset-0 mainbody-grid text-center margin-top-10">
                        <a href="" target="_blank"><img
                                src="https://www.bdtradeinfo.com/public/assets/images/icon_citywise.png" alt=""></a>
                        <a href="" target="_blank"><img
                                src="https://www.bdtradeinfo.com/public/assets/images/icon_area.png" alt=""></a>
                    </div>
                    <div
                        class="col-lg-3 col-md-4 col-sm-3 col-xs-4 col-lg-offset-2 col-md-offset-0 col-sm-offset-2 col-xs-offset-0 mainbody-grid text-center margin-top-10">
                        Page <span class="sub_ttl_yellow">1</span> of <span class="sub_ttl_yellow">1</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 text-center"></div>
                </div> --}}

                {{-- @foreach ($advertise as $item) --}}
                <div class="div_style2">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 div_style3">
                            <div
                                class="width-100 mainbody-grid border-bottom-dashed margin-bottom-15 padding-top-bottom-10">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 mainbody-grid">
                                        <h3>
                                            <a class="nav12txt" href="#">
                                                {{$company->business_name}}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="col-md-1 col-xs-2 mainbody-grid text-right">
                                        <img src="https://www.bdtradeinfo.com/public/assets/images/icon_silverMember.png"
                                            alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-xs-12 mainbody-grid">
                                    <address>
                                        <ul class="location">
                                            <li><i class="fas fa-map-marker-alt normal-icon"></i></li>
                                            <li>
                                                {{$company->address}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>
                                        <ul class="location">
                                            <li><i class="fas fa-phone-alt normal-icon"></i></li>
                                            <li>
                                                {{$company->phone}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>

                                        <ul class="location">
                                            <li><i class="fas fa-globe-asia normal-icon"></i></li>
                                            <li>
                                                @if (isset($company->website))
                                                @if ((!(substr($company->website, 0, 7) == 'http://')) && (!(substr($company->website, 0, 8) == 'https://')))
                                                <a href="{{'http://'.$company->website}}" target="_blank"
                                                    class="navtxt_normal">{{'http://'.$company->website}}</a>
                                                @else
                                                <a href="{{$company->website}}" target="_blank"
                                                    class="navtxt_normal">{{$company->website}}</a>
                                                @endif

                                                @endif
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                                <div class="col-md-4 col-xs-12 mainbody-grid">
                                    <address>
                                        <ul class="location">
                                            <li><i class="fas fa-user normal-icon"></i></li>
                                            <li>
                                                {{$company->owner_name}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>

                                        <ul class="location">
                                            <li><i class="fas fa-envelope normal-icon"></i></li>
                                            <li><a href="#" class="nav7txt" target="_blank"><strong>{{$company->email}}</strong></a></li>
                                        </ul>
                                        <ul class="location">
                                            <li>
                                                @if($company->facebook)
                                                <a href="{{$company->facebook}}" target="_blank">
                                                    <img src="https://www.bdtradeinfo.com/public/assets/images/facebook.png"
                                                        alt="" width="20" class="margin-right-10">
                                                </a>
                                                @endif
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                            </div>

                            <div class="width-100 mainbody-grid text-justify border-top-dashed">
                                <p>
                                    <img src="https://www.bdtradeinfo.com/public/assets/images/icon_keyword.png"
                                        alt="" height="20" width="20" class="margin-right-15 float-left">
                                        {{$company->keywords}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}


                <div class="col-md-12 text-center"></div>

                <div class="clearfix"></div>
                <div class="col-md-12 border-bottom-dashed margin-top-10"></div>


                {{-- <div class="width-100 border-dashed margin-top-10">

                    <p>Filter Listing by City and/or Area :</p>



                    <div class="float-left margin-right-10 padding-top-bottom-6">
                        <h4>
                            <img src="https://www.bdtradeinfo.com/public/assets/images/icon_citywise.png" alt="">
                            <a href="#" target="_blank">
                                Dhaka
                            </a>
                        </h4>
                    </div>


                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Badda
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Banani
                        </a>
                    </div>


                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Baridhara
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Dhanmondi
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Farmgate
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Gulshan
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Kamlapur
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Khilgaon
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Mirpur
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Mohakhali
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Paltan
                        </a>
                    </div>

                    <div class="float-left margin-right-10 padding-top-bottom-6 height35">
                        <h4>| </h4>

                        <a class="nav12txt" href="#" target="_blank">
                            Tejgaon
                        </a>
                    </div>
                </div> --}}

                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="row">
                @foreach ($right_banner as $item)
                <!--ad right-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt=""></a>
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
