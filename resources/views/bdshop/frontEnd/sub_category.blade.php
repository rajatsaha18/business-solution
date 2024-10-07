@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<div class="container">
    <div class="row margin-bottom-10">
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div style="background-color: #f0f0ff;" class="width-100 padding-6 border-radius-top-5 text-center left-menu-heading">
                        <h4 style="color: #00006b; ">Product Categories</h4>
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
            <div class="div_style2">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">

                        <div class="py-1 px-3" style="background-color: #f0f0ff;">
                            <h1 style="color:#00006b!important">{{$category->name}}</h1>
                        </div>
                        <div class="row">
                            @foreach ($sub_categories as $item)
                            <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="box4main" style="height: 200px">
                                    <div class="box4 text-center">
                                        <a href="{{route('info-sub-cat-product',$item->slug)}}" target="_blank">
                                            <img src="{{ asset($item->image) }}" alt="{{$item->title}}">
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="boxtext">
                                        <a style="color: #00006b;" href="{{route('info-sub-cat-product',$item->slug)}}" target="_blank">{{$item->name}} </a><br>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
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