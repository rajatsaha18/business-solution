@extends('bdshop.frontEnd.layouts.master')

@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row left_banner_image">
                <!--ad left-->
                @foreach ($left_banner as $item)
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10 left_image">
                    <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
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

                        @foreach ($bdcategory as $item)
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
            <div class="px-3">
                <div class="div_style3 p-3">

                    <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                        <h1>Advertise with us</h1>
                    </div>
                    <div class="main_content2">

                        <div class="row g-3">
                            @foreach ($advertise_cat as $item)
                            @php
                                $rates = App\AdvertiseRate::where('advertise_category_id',$item->id)->get();
                            @endphp
                            <div class="col-md-6 col-xs-12 margin-top-10">
                                <table class="table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <td colspan="3" class="text-center"><span class="oswald_black">{{$item->title}}</span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                <div class="oswald_meroon1">{{$item->banner_size}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="oswald_black1">Price</span></td>
                                            <td><span class="oswald_black1">(USD/Year)</span></td>
                                            <td><span class="oswald_black1">(BDT/Year)</span></td>
                                        </tr>
                                        @foreach ($rates as $item)
                                        <tr>
                                            <td>{{$item->page_title}}</td>
                                            <td>{{$item->usd_rate}}</td>
                                            <td>{{$item->bdt_rate}}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="3" class="text-center"><a href="{{url('info/add-your-company')}}" class="nav7txt">Click
                                                    here to order now</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            </div>
                            @endforeach
                            <div class="col-md-6 col-xs-12 margin-top-10">
                                <span class="body"><span class="text1"><em>* All Advertisement positions are subject
                                            to
                                            availability <br>
                                            * Sizes for banners &amp; panels on home page are different <br>
                                            * Rates may be changed at anytime without prior
                                            notice<br><br></em></span></span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="row right_side_image">

                <!--ad right-->
                @foreach ($right_banner as $item)
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10 right_image">
                    <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
                </div>
                @endforeach
                <div class="clearfix"></div>

            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>
@endsection
