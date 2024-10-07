@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<div class="container">
    <div class="row margin-bottom-10">
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 text-center left-menu-heading d-none">
                        <h4>Product Categories</h4>
                    </div>
                    {{-- <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
                            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($productCategories as $item)
                            <a href="{{route('info-sub-category',$item->slug)}}" class="text-center">{{$item->name}}</a>
                    @endforeach
                </div> --}}
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="div_style3 p-3">
            <div class="row g-3">

                <div class="col-md-9 col-xs-12 col-sm-12">

                    <div class="py-1 px-3" style="background-color: #f0f0ff;">
                        <h1 style="color:#00006b">Product of <span>{{$product->business_name}}</span></h1>
                    </div>
                    <div class="row">
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


                </div>

                {{-- <div class="col-md-3 col-xs-12 col-sm-12 d-hidden">
                        <div class="bg-ash px-3">
                            <div class="mainbody-grid div_style4">
                                <h1>Random List</h1>
                            </div>
                            @foreach ($random_products as $item)
                            <div class="row">
                                
                                <div class="col-md-3 col-xs-2 col-sm-2 text-left subc">
                                    <a href="{{route('info-product-details',$item->slug)}}">
                <img src="{{ asset($item->image) }}" alt="{{$item->title}}" class="img-responsive">
                </a>
            </div>


            <div class="col-md-9 col-xs-10 col-sm-10 padding-bottom-5 text-left text-blue">
                <a href="{{route('info-product-details',$item->slug)}}">{{$item->title}}</a><br>
            </div>
            <div class="col-md-12">
                <hr class="width-100">
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach
    </div>
</div> --}}

</div>
<!--ad bottom-->
<div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center ">
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
@endsection