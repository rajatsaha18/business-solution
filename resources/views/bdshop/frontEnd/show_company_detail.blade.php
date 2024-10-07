@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<style>
    .underline {
        text-decoration: underline;
        text-decoration-style: dotted;
    }

    .pageMargin {
        margin-top: 50px !important;
        margin-bottom: 50px !important;

    }
</style>

<div class="container pageMargin">
    <div class="row margin-bottom-10 margin-top-10 pageMargin">
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
                        <h4 style="color: #070175;">Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 17px;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 17px; text-align: center; background-color: #f2f2f2; " class="nav4txt" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($shop_categories as $item)
                        <a style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px;  " href="{{route('info-sc',$item->slug)}}" target="_blank" class="text-center">{{$item->name}}</a>
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
                    <h3 style="font-size:20px; color: #070175; ">Contact Information: <span style="color:#008C3F">{{$company->business_name ?? ''}}</span></h3>

                </div>
                <div class="col-md-12 col-xs-12 mt-4">
                    <h6 style="color:#008C3F">To add your company in Business Solution Yellow Pages simply <a href="{{route('add-your-company')}}" style="color:#23527C;font-weight:600">Click here</a>.

                    </h6>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="d-flex">
                        <a href="#" class="btn btn-sm summer" style="background-color:#001D34;color:white">Summary</a>
                        <a href="#" class="btn btn-sm ms-2 invest" style="background-color:#001D34;color:white">Investment</a>
                        <a href="#" class="btn btn-sm ms-2 fund" style="background-color:#001D34;color:white">Funding</a>
                    </div>

                    <div id="summery">
                        <div class="row mt-4">
                            <div class="col-md-6 col-12">
                                <h5 class="fw-bolder">About</h5>
                                <p>{!! $company->about??'' !!}</p>
                                <p><i class="fas fa-map-marker-alt"></i> {{$company->address}}</p>
                                <p><i class="fa-solid fa-mobile-screen"></i> {{$company->phone}}</p>
                                <p><i class="fa-regular fa-envelope"></i> {{$company->email}}</p>
                                @if(!empty($company->total_employee))
                                <p><i class="fas fa-user-friends"></i> {{$company->total_employee}}</p>

                                @endif
                                @if(!empty($company->website))
                                <p><i class="fas fa-globe-asia"></i> {{$company->website}}</p>

                                @endif
                                @if(!empty($company->total_funding_amount))
                                <p><i class="fas fa-funnel-dollar"></i> {{$company->total_funding_amount}}</p>

                                @endif
                            </div>
                            <div class="col-md-6 col-12">
                                @if(!empty($company->owner_name))
                                <h5 class="fw-bolder" style="font-size:15px">Founders</h5>
                                <p>{{$company->owner_name}}</p>
                                @endif
                                @if(!empty($company->business_name))
                                <h5 class="fw-bolder" style="font-size:15px">Legal Name </h5>
                                <p>{{$company->business_name}}</p>
                                @endif
                                @if(!empty($company->founded_date))
                                <h5 class="fw-bolder" style="font-size:15px">Founded Date </h5>
                                <p>{{$company->founded_date}}</p>
                                @endif
                                @if(!empty($company->operating_status))
                                <h5 class="fw-bolder" style="font-size:15px">Operating Status </h5>
                                <p>{{$company->operating_status}}</p>
                                @endif
                            </div>
                            <div>
                                <p>
                                    {{$company->keywords}}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div id="investment">
                        <h5 class="mt-4 fw-bolder">Investment</h5>
                        <p>{!! $company->investments !!}</p>

                    </div>
                    <div id="funding">
                        <h5 class="mt-4 fw-bolder">Funding Details</h5>
                        <p>{!! $company->funding_details !!}</p>

                    </div>
                </div>


            </div>
            <div class="row">
                <h2 style="color: #070175;">Products</h2>
                @foreach ($products as $item)
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="box4main" style="height: 200px">
                        <div class="box4 text-center">
                            <a href="{{route('info-product-details',$item->slug)}}">
                                <img src="{{ asset($item->image) }}" alt="{{$item->title}}">
                            </a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="boxtext">
                            <a href="{{route('info-product-details',$item->slug)}}">{{$item->title}} </a><br>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>

            <div class="row mt-5">
                <h5 class="fw-bolder">Recent News & Activity</h5>
                @foreach($businessstories as $item)

                <div class="col-md-4 col-sm-12 mt-4">
                    <a href="{{route('business.single.story',$item->slug)}}">
                        <div class="card shadow">
                            <div>
                                <div class="founder-img">
                                    <img src="{{asset($item->image_one)}}" alt="">
                                </div>
                                <div class="post-date">
                                    <h6 class="text-light fw-bolder">{{ Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</h6>

                                </div>
                            </div>
                            <div class="p-2">
                                <h5 style="font-family: 'Newsreader';
                            font-weight: 600;height:150px;color:black!important">{{$item->title}}</h5>
                            </div>
                            <p class="p-2 fw-bolder" style="color:#6a68a5;">Business Solution</p>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="text-center mt-3 mb-5">
                    <a href="{{route('business.story')}}" class="btn btn-sm" style="background-color:#001D34;color:white">View All <i class="fa fa-caret-right" aria-hidden="true"></i>
                    </a>

                </div>
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
@section('js')
<script>
    $('#investment').hide();
    $('#funding').hide();
    $('.summer').click(function() {
        $('.summer').css('background-color', '#008C3F');
        $('.invest').css('background-color', '#001D34');
        $('.fund').css('background-color', '#001D34');
        $('#summery').show();

        $('#investment').hide();
        $('#funding').hide();
    });
    $('.invest').click(function() {
        $('.invest').css('background-color', '#008C3F');
        $('.summer').css('background-color', '#001D34');
        $('.fund').css('background-color', '#001D34');
        $('#investment').show();
        $('#summery').hide();
        $('#funding').hide();
    });
    $('.fund').click(function() {
        $('.fund').css('background-color', '#008C3F');
        $('.invest').css('background-color', '#001D34');
        $('.summer').css('background-color', '#001D34');
        $('#funding').show();
        $('#investment').hide();
        $('#summery').hide();
    });
</script>

@endsection