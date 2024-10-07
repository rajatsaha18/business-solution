@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<style>
    .btn
    {
        background-color:#00006B!important;
        color:white!important;
    }
</style>
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
                    <div style="background-color: #f0f0ff;" class="width-100 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4 style="color: #00006b; ">Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav" id="myTopnav1">

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
                        <h1 style="color:#00006b">{{$subcategory->name ?? ''}} </h1>

                    </div>
                </div>
                
                <!--Avertise Code-->
                <div class="container mt-5">
                    @foreach($advertise as $item)
                    <div class="card border-0 shadow-sm rounded mb-3">
                      <div class="card-body position-relative">
                        <h5 class="card-title font-weight-bold">{{$item->business_name}}</h5>
                        
                        <!-- Location -->
                        <div class="d-flex align-items-center">
                          <span class="text-primary">&#x25CF;</span>
                          <span class="ml-2">{{$item->address}}</span>
                        </div>
                  
                        <!-- Phone Number -->
                        <div class="d-flex align-items-center mt-2">
                          <span class="text-primary">&#x25CF;</span>
                          <span class="ml-2">{{$item->phone}}</span>
                        </div>
                  
                        <!-- Contact Person -->
                        <div class="d-flex align-items-center mt-2">
                          <span class="text-primary">&#x25CF;</span>
                          <span class="ml-2">{{$item->owner_name}}</span>
                        </div>
                  
                        <!-- Email / Query Link -->
                        <div class="d-flex align-items-center mt-2">
                          <span class="text-primary">&#x25CF;</span>
                          <a href="{{route('info-send-email',$item->id)}}" class="ml-2 text-secondary">Send Email / Query</a>
                        </div>
                  
                        <!-- View More Button -->
                        <a href="{{route('company.detail',$item->slug)}}" class="btn mt-3">View More</a>
                  
                        <!-- Envelope Icon -->
                        <i class="fas fa-envelope position-absolute text-secondary" style="top: 10px; right: 10px;"></i>
                      </div>
                    </div>
                    @endforeach
                </div>
                <div>
                    {{$advertise->links()}}
                </div>


                <!--@foreach ($advertise as $item)-->
                <!--<div class="div_style2">-->
                <!--    <div class="row">-->
                <!--        <div class="col-md-12 col-xs-12 div_style3">-->
                <!--            <div class="width-100 mainbody-grid margin-bottom-15 padding-top-bottom-10">-->
                <!--                <div class="row">-->
                <!--                    <div class="col-md-11 col-xs-10 mainbody-grid">-->
                <!--                        <h3>-->
                <!--                            <a style="color: #00006b;" class="nav12txt" href="{{route('company.show',$item->slug)}}">-->
                <!--                                {{$item->business_name}}-->
                <!--                            </a>-->
                <!--                        </h3>-->
                <!--                    </div>-->
                <!--                    <div class="col-md-1 col-xs-2 mainbody-grid text-right">-->
                <!--                        <img src="https://www.bdtradeinfo.com/public/assets/images/icon_silverMember.png" alt="" class="img-responsive">-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="row">-->
                <!--                <div class="col-md-8 col-xs-12 mainbody-grid">-->
                <!--                    <address>-->
                <!--                        <ul class="location">-->

                <!--                            <li><i style="background-color: #00006b;" class="fas fa-map-marker-alt normal-icon"></i>-->
                <!--                                {{$item->address}}-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                        <div class="clearfix"> </div>-->
                <!--                        <ul class="location">-->

                <!--                            <li><i style="background-color: #00006b;" class="fas fa-phone-alt normal-icon"></i>-->
                <!--                                {{$item->phone}}-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                        <div class="clearfix"> </div>-->

                <!--                        <ul class="location">-->

                <!--                            <li>-->
                <!--                                @if (isset($item->website))-->
                <!--                                <i style="background-color: #00006b;" class="fas fa-globe-asia normal-icon"></i>@if ((!(substr($item->website, 0, 7) == 'http://')) && (!(substr($item->website, 0, 8) == 'https://')))-->
                <!--                                <a href="{{'http://'.$item->website}}" target="_blank" class="navtxt_normal">{{'http://'.$item->website}}</a>-->
                <!--                                @else-->
                <!--                                <a href="{{$item->website}}" target="_blank" class="navtxt_normal">{{$item->website}}</a>-->
                <!--                                @endif-->

                <!--                                @endif-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                    </address>-->
                <!--                </div>-->
                <!--                <div class="col-md-4 col-xs-12 mainbody-grid">-->
                <!--                    <address>-->
                <!--                        <ul class="location">-->

                <!--                            <li><i style="background-color: #00006b;" class="fas fa-user normal-icon"></i>-->
                <!--                                {{$item->owner_name}}-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                        <div class="clearfix"> </div>-->

                <!--                        <ul class="location">-->

                <!--                            <li><i style="background-color: #00006b;" class="fas fa-envelope normal-icon"></i> <a href="{{route('info-send-email',$item->id)}}" class="nav7txt" target="_blank"><strong>Send Email /-->
                <!--                                        Query</strong></a></li>-->
                <!--                        </ul>-->
                <!--                        <ul class="location" style="padding-left: 0%;">-->
                <!--                            <li>-->
                <!--                                @if($item->facebook)-->
                <!--                                <a href="{{$item->facebook}}" target="_blank">-->
                <!--                                    <img src="https://www.bdtradeinfo.com/public/assets/images/facebook.png" alt="" width="20" class="margin-right-10">-->
                <!--                                </a>-->
                <!--                                @endif-->
                <!--                            </li>-->
                <!--                        </ul>-->
                <!--                    </address>-->
                <!--                </div>-->
                <!--            </div>-->

                <!--            <div class="width-100 mainbody-grid text-justify">-->
                <!--                <p>-->
                <!--                    <a href="{{route('company.detail',$item->slug)}}" style="background-color: #00006b; " class="btn btn-sm text-light">View More</a>-->
                <!--                </p>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--@endforeach-->


                <div class="col-md-12 text-center"></div>

                <div class="clearfix"></div>
                <div class="col-md-12 margin-top-10"></div>



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