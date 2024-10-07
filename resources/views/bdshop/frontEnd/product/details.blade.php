@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<div class="container">
    <div class="row margin-bottom-10">
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div style="background-color: #f0f0ff !important ;" class="width-100 padding-6 border-radius-top-5 text-center left-menu-heading">
                        <h4 style="color: #00006b;">Product Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px;" class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($categories as $item)
                        <a style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px;" href="{{route('info-sub-category',$item->slug)}}" class="text-center">{{$item->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            <div class="col-md-12 col-xs-12 div_style3 px-3 mt-0">


                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="col-md-12 mainbody-grid div_style4">
                        <h1 style="color:#00006b">{{$product_details->title}}</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12 col-sm-12">
                            <div class="box44main">
                                <div class="box44 text-center">

                                    <img src="{{ asset($product_details->image) }}" alt="{{$product_details->title}}">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12 col-sm-12 text-product">
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-sm-4 margin-top-15">
                                    <i>Price*</i>
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 margin-top-15">
                                    BDT <strong>{{$product_details->price}}</strong>
                                </div>
                                <div class="col-md-4 col-xs-4 col-sm-4 margin-top-10">
                                    <i>Price Type</i>
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 margin-top-10">
                                    {{$product_details->price_type}}
                                </div>
                                <div class="col-md-4 col-xs-4 col-sm-4 margin-top-10">
                                    <i>Brand</i>
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 margin-top-10">
                                    {{isset($product_details->brand)?$product_details->brand: ''}}
                                </div>
                                {{-- <div class="col-md-4 col-xs-4 col-sm-4 margin-top-10">
                                    <i>Origin</i>
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 margin-top-10">
                                    Kaiyang
                                </div> --}}
                                <div class="col-md-4 col-xs-4 col-sm-4 margin-top-10">
                                    <i>Product Type</i>
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 margin-top-10">
                                    {{$product_details->product_type->name}}
                                </div>
                                <div class="col-md-4 col-xs-4 col-sm-4 margin-top-10">
                                    <i>Short Intro</i>
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 margin-top-10">
                                    {{$product_details->short_description}}
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12 margin-top-10 margin-bottom-20">
                                    <i style="color: #00006b;">
                                        * Price may vary as the seller doesn't update price regularly.
                                        # Stock or availibity is not confirmed and need to check.
                                    </i>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-sm-12 margin-top-20">
                                    <h3 class="" style="color:#00006b">To buy or query, please call seller:</h3>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12 margin-top-10">
                                    Name :
                                    <strong style="text-transform:capitalize">{{isset($user->business_name)?$user->business_name:''}}</strong>
                                    <br>
                                    Call :
                                    <strong>{{isset($user->phone)?$user->phone:''}}</strong>
                                </div>
                                <div class="col-md-12 col-xs-12 col-sm-12 margin-top-10">

                                    <a href="{{route('visit.store',$product_details->bd_user_id)}}" class="btn btn-outline-primary btn-sm fw-bold">Visit Store</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xs-12 col-sm-12 padding-top-bottom-17 text-product">
                            <h2 class="" style="color:#00006b">Description</h2><br>
                            {!! $product_details->long_description !!}

                            <br>
                            <i style="color: #00006b;">Viewed <h4>{{$product_details->click_count}}</h4> times in detail, since {{$product_details->created_at}}.</i>
                            <div class="col-md-12 border-bottom-gray "></div>
                        </div>

                        <div class="col-md-12 col-xs-12 col-sm-12 padding-top-bottom-17">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="" style="color:#00006b">Similar Products</h2><br>
                                </div>
                                @foreach ($related_products as $item)
                                <div class="col-md-4 col-sm-6 col-xs-12 similar-prod-bx text-product">
                                    <div class="row">
                                        <a href="{{route('info-product-details',$item->slug)}}">
                                            <div class="col-auto">
                                                <img src="{{ asset($item->image) }}" alt="{{ asset($item->image) }}" class="img-responsive">
                                        </a>
                                    </div>


                                    <div class="col padding-bottom-5 text-left ">
                                        <a style="color: #00006b;" href="{{route('info-product-details',$item->slug)}}">{{$item->title}}</a><br>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12 col-sm-12 padding-top-bottom-17">
                        <p class="text-small"><i><strong>Special Note:</strong><br>
                                The PRODUCT segment of tradeinfo.com.bd is a platform for sellers to display
                                their products. Buyers can buy any product from any seller by communicating and
                                paying directly with the sellers.Business Solution just showcases the products from
                                different sellers. If you choose any product to buy then please contact the
                                seller directly. You are strongly requested to make financial dealings and
                                transactions with the seller directly with own responsibility.<br><br>
                                <a style="color: #00006b;" href="https://businesssolution.com.bd/">Business Solution</a> doesn't sell any product and/or take any responsibility of any
                                product (including product quality, delivery, replacement, refund or any such
                                issues or claims). DO NOT make any financial transaction against any product
                                purchase with any employee of tradeinfo.com.bd or any other
                                person or organization other than the particular seller.</i>
                        </p>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="clearfix"></div>
</div>
@endsection