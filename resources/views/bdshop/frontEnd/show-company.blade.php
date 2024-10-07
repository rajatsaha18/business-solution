@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<style>
    .underline {
        text-decoration: underline;
        text-decoration-style: dotted;
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
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4 style="color: #00006B; font-size: 16px; ">Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; font-size: 16px; ; background-color: #f2f2f2; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; " href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($shop_categories as $item)
                        <a style="font-size: 16px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ;" href="{{route('info-sc',$item->slug)}}" target="_blank" class="text-center">{{$item->name}}</a>
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
                    <h3 style="font-size:20px">Contact Information: <span style="color:#008C3F">{{$company->business_name ?? ''}}</span></h3>

                </div>
                <div class="col-md-12 col-xs-12 mt-4">
                    <h6 style="color:#070175">To add your company in Business Solution Yellow Pages simply <a href="{{route('add-your-company')}}" style="color:#23527C;font-weight:600">Click here</a>.
                    </h6>
                </div>




                @if(!@empty($company))
                <div class="div_style2">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 div_style3">
                            <div class="width-100 mainbody-grid border-bottom-dashed margin-bottom-15 padding-top-bottom-10">
                                <div class="row">
                                    <div class="col-md-11 col-xs-10 mainbody-grid">
                                        <h3>
                                            <a class="nav12txt" style="color: #070175; " href="#">
                                                {{$company->business_name ?? ''}}
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
                                        <ul class="d-flex">
                                            <li class=" me-3"><i class="fa-solid fa-circle" style="color: #00006B;"></i></li>
                                            <li>
                                                {{$company->address}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>
                                        <ul class="d-flex">
                                            <li class=" me-3"><i class="fa-solid fa-circle" style="color: #00006B;"></i></li>
                                            <li>
                                                {{$company->phone}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>

                                        <ul class="d-flex">
                                            <li class=" me-3"><i class="fa-solid fa-circle" style="color: #00006B;"></i></li>
                                            <li>
                                                @if (isset($company->website))
                                                @if ((!(substr($company->website, 0, 7) == 'http://')) && (!(substr($company->website, 0, 8) == 'https://')))
                                                <a href="{{'http://'.$company->website}}" target="_blank" class="navtxt_normal">{{'http://'.$company->website}}</a>
                                                @else
                                                <a href="{{$company->website}}" target="_blank" class="navtxt_normal">{{$company->website}}</a>
                                                @endif

                                                @endif
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                                <div class="col-md-4 col-xs-12 mainbody-grid">
                                    <address>
                                        <ul class="d-flex">
                                            <li class=" me-3"><i class="fa-solid fa-circle" style="color: #00006B;"></i></li>
                                            <li>
                                                {{$company->owner_name}}
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>

                                        <ul class="d-flex">
                                            <li class=" me-3"><i class="fa-solid fa-circle" style="color: #00006B;"></i></li>
                                            <li><a href="{{route('info-send-email',$company->id)}}" class="nav7txt" target="_blank"><strong>Send Email /
                                                        Query</strong></a></li>
                                        </ul>
                                        <ul class="">
                                            <li>
                                                @if($company->facebook)
                                                <a href="{{$company->facebook}}" target="_blank">
                                                    <img src="https://www.bdtradeinfo.com/public/assets/images/facebook.png" alt="" width="20" class="margin-right-10">
                                                </a>
                                                @endif
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                            </div>
                            <div class="width-100 mainbody-grid text-justify border-top-dashed pt-2 pb-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="https://i.ibb.co/LpqbTmc/icon-type.png" alt="icon-type" border="0" />
                                        @php
                                        $category=DB::table('bd_categories')->where('id',$company->category_id)->first();


                                        @endphp
                                        <h4 style="font-size:15px"> Business Type : <a href="{{route('info-sc',$category->slug)}}" style="color:#5299FF">{{$company->category->name}}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="width-100 mainbody-grid text-justify border-top-dashed">
                                <p>

                                    <a href="{{route('company.detail',$company->slug)}}" class="btn  btn-sm" style="background-color:#001D34;color:white">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif



                <div class="col-md-12 text-center"></div>

                <div class="clearfix"></div>
                <div class="col-md-12 border-bottom-dashed margin-top-10"></div>

                <div class="col-md-12 mt-3">
                    <h5 style="color:#070175">Companies in similiar business:</h5>
                    <div class="row">
                        @php
                        $companies=DB::table('advertise_posts')->where('subcategory_id',$company->subcategory_id??'')->get();

                        @endphp
                        @foreach ($companies as $company)
                        <div class="col-md-4">
                            <a href="{{route('company.show',$company->slug)}}" target="_blank"><span style="color:##070175">>> </span>{{$company->business_name}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>

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