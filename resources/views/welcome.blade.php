@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<div>
    <style>
        .ho:hover {
            background-color: yellow !important;
        }

        .fa-search {
            color: white !important;
        }

        @media(max-width:600px) {
            .searchbox {
                width: 90% !important;
            }

            .search-button {
                margin-top: -3px !important;
            }
            .navbar_item
            {
                margin-top:-30px!important;
            }
            .add_banner
            {
                margin-left:11px!important;
            }
        }
        
    </style>
    @php
    $navbar_banner = App\AdvertiseBanner::where('advertise_category_id',6)->where('advertise_placement_id',8)->first();
    $general_settings = App\BdGeneralSetting::first();
    @endphp

    @if($navbar_banner)
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-top-bottom-5 container navbar_item">
        <a href="{{$navbar_banner->url}}" target="_blank"><img src="{{asset($general_settings->header_banner)}}" style="aspect-ratio: 9/1 !important;" alt=""></a>
    </div>
    @endif
    <div class="container">
        <div id="div-desktop" style="background-color:#f3f3f3c4">
            <div class="text-center pt-3 mb-3">
                <h4 class="fw-bolder">Business Listing</h4>
            </div>
            <div class="padding-top-15 padding-bottom-5">
                <div class="container">
                    <div class="row align-items-start">

                        @if(!request()->is('info/company-list/*'))
                        <div class="col-md-8  col-sm-6 alpha-by col-sm-offset-0 col-xs-8 text-center margin-bottom-10">
                            <div class="alphabet w-100">
                                @foreach(range('A','Z') as $letter)
                                <a href="{{route('alphabetic-subcategory',$letter)}}" style="background-color:#b6b6b654" class="ho">{{$letter}}</a>
                                @endforeach
                            </div>

                            <div class="text-start">
                                <form action="{{route('info-search')}}" method="get">
                                    <input name="search" type="text" class="searchbox rounded-start" style="width:93%;margin-top:20px" placeholder="Search by Company name/ Keywords/ Category">
                                    <button type="submit" class="btn  btn-dark btn-sm text-light alpha-btn btn-mb" style="padding:10px 3px;margin-top:-3px!important; margin-left:-15px!important;border-radius:0px 10px 10px 0px!important">Go</button>
                                </form>
                            </div>

                        </div>


                        <style>
                            .searchhh {
                                background-color: rgba(0, 255, 255, 0.527) !important;
                            }

                            .searchbox {
                                border: none !important;
                                border-radius: 10px !important;
                                background-color: #b6b6b654 !important;
                            }

                            .searchbox:focus {
                                outline: none !important;
                            }

                            .search-home a {
                                font-size: 14px !important;
                                font-weight: 600 !important;
                                color: #000000c2;

                            }

                            .head-h3 {
                                display: block !important;
                                text-align: center !important;
                                color: #000000c2;
                                font-weight: 600;
                            }

                            @media screen and (min-width: 0px) and (max-width: 600px) {
                                #div-desktop .button-alpha {
                                    width: 100% !important;
                                    margin: 0 auto !important;
                                    font-size: 10px !important;

                                    display: block !important;
                                }

                                .btn-mb {
                                    padding: 3px 6px !important;
                                }
                            }
                        </style>
                        <div class="col-md-4 col-md-offset-0  col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-1 searchhh border-radius-10 padding-left-right-10 padding-top-bottom-6 margin-bottom-10" style="background-color:#dad9d973!important">
                            <h3 class="head-h3">Advance Search</h3>
                            <div class="row search-home w-100">
                                <div class="col-md-12 col-xs-12 ">
                                    <a href="{{route('advance-search')}}"><span style="color: 00006b;">✔</span> Search by Area <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </a><br>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <a href="{{route('company-list','A')}}"><span style="color: 00006b;">✔</span> Search by Alphabet <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <a href="{{route('product.by.company')}}"><span style="color: 00006b;">✔</span> Get Products by Company <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div style="display:block;margin:0 auto" class="col-md-8 mb-3 col-md-offset-0 col-sm-5 button-alpha col-sm-offset-1 col-xs-10 col-xs-offset-1 margin-bottom-10">

                        </div>
                        <div class="clearfix"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container add_banner">
            <div class="row margin-bottom-10 margin-top-10">
                <div class="col-md-2">
                    <div class="row left_banner_image">
                        @foreach ($left_banner as $item)
                        <!--ad left-->
                        <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10 left_image">
                            <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt=""></a>
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
                            <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="" class="img-classic-hp"></a>
                        </div>
                        @endforeach

                    </div>

                    <div class="skiptarget"><a id="maincontent">-</a></div>

                    <div class="div_style2 px-0">
                        <!--<div class="row">-->
                        <!--    <div class="col-md-12 col-sm-12 col-xs-12">-->
                        <div class="div_style3h padding-bottom-5 px-3" style="background-color:#e9e9f5c4">
                            <div class="row">
                                <div class="col-md-12 col-xs-12 div_style4h text-center">
                                    <h1 style="color: #00006b; ">Company Categories</h1>
                                </div>
                                @foreach ($sub_categories as $item)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 seg2 padding-top-bottom-5">
                                    <img src="{{asset($item->icon)}}" alt="" style="width: 12%">
                                    <a href="{{route('info-category-all',$item->slug)}}" class="text-muted text-medium">{{$item->name}}</a>
                                </div>
                                @endforeach
                            </div>
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 margin-top-5 padding-top-6">-->
                            <!--    <div class="row">-->
                            <!--        @foreach ($right_banner as $item)-->
                            <!--ad right-->
                            <!--        <div class="col-lg-12 col-md-12 col-sm-2 col-xs-4 text-center margin-top-bottom-10">-->
                            <!--            <a href="{{$item->url}}" target="_blank">-->
                            <!--                <img src="{{asset($item->image)}}" class="img-midright-hp" alt="{{$item->title}}">-->
                            <!--            </a>-->
                            <!--        </div>-->
                            <!--        @endforeach-->
                            <!--        <div class="clearfix"></div>-->
                            <!--ad right-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>

                        <style>
                            .search-input--PtfH8 {
                                outline: 0;
                                line-height: normal;
                                font-size: 14px;
                                padding: 12px 20px;
                                width: 100%;
                                border-radius: 20px;
                                border: none;
                                background-color: #e5e5e5c2;


                            }

                            .bysell::placeholder {
                                color: black !important;
                                font-weight: 600;

                            }
                        </style>

                    </div>
                    {{-- <div class="buy-sell">
                        <div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 div_style3h padding-bottom-10 mx-auto" style="background-color:#F2F2F2;width:97%">
                                    <div class="col-md-12 col-xs-12 div_style4h text-center">
                                        <h5 style="font-weight:600;color:#f90;font-size:22px">Buy Sell</h5>
                                    </div>
                                    <form class="mt-4 search-button d-flex" action="{{route('buysell.item.search')}}" method="GET">
                    @csrf
                    <input name="search" type="text" autocomplete="off" aria-label="Search input" class="search-input--PtfH8  text-center bysell" placeholder="What are you looking for?">
                    <button style="border:none;background-color:black;padding:8px 12px;border-radius:50%;margin-left:-35px
                                "><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    <div class="px-3 pt-5">
                        <!-- <div class="d-flex justify-content-center">
                                            @foreach($buysellcategories as $item)

                                            <div class="">
                                                <a href="{{route('buysell.category.showpost',$item->slug)}}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <img src="{{$item->icon}}" style="width:90px;height:60px;object-fit:contain" alt="">
                                                        </div>
                                                        <?php
                                                        $count = count(DB::table('buy_sell_products')->where('status', 1)->where('category_id', $item->id)->get());

                                                        ?>
                                                        <div>
                                                            <p style="font-weight:600;font-family: sans-serif, Arial, Verdana, Helvetica;
                                            font-size: 19px;color:#666">{{$item->title}}</p>
                                                            <p class="fw-bolder">{{$count}} ads</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            @endforeach
                                        </div> -->
                        <div class="row">

                            @foreach($buysellsubcategories as $item)

                            <div class="col-md-6 col-sm-12">
                                <a href="{{route('buysell.subcategory.showpost',$item->slug)}}">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <img src="{{$item->icon}}" style="width:19px;height:19px;object-fit:contain" alt="">
                                        </div>
                                        <?php
                                        $count = count(DB::table('buy_sell_products')->where('status', 1)->where('subcategory_id', $item->id)->get());

                                        ?>
                                        <div class="col-md-10 col-sm-10 col-10  align-items-center">
                                            <p style="font-family: sans-serif, Arial, Verdana, Helvetica;
                                                                 font-size: 15px;color:#0a0a0a!important;font-weight:500">{{$item->title}} (<span>{{$count}} ads</span>)</p>

                                        </div>
                                    </div>
                                </a>
                            </div>


                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="row margin-top-bottom-10">
        <!--bottom-->
        @foreach ($bottom_banner as $item)
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3">
            <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt="" class="img-classic-hp"></a>
            <!--                            <a href="#"></a>-->
        </div>
        @endforeach
        <!--bottom-->
    </div>


</div>

<div class="col-md-2">
    <div class="row right_side_image">

        <!--ad right-->
        @foreach ($right_side_image as $item)


        <!--ad right-->
        <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10 right_image mb-3">
            <a href="{{$item->url}}" target="_blank"><img src="{{asset($item->image)}}" alt=""></a>
        </div>
        @endforeach


        <div class="clearfix"></div>
        <!--ad right-->

    </div>
</div>

</div>
</div>
</div>



@endsection