@extends('bdshop.frontEnd.layouts.master')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row margin-bottom-10">
        <div class="col-md-2">
            <div class="row">
                @include('bdshop.frontEnd.home.sidebar')
                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 text-center left-menu-heading">
                        <h4>Product Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
                            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>


                            @foreach ($categories as $item)
                            <a href="{{route('info-sub-category',$item->slug)}}" class="text-center">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="div_style3 p-3">
                <div class="row g-3">

                    <div class="col-md-12 col-xs-12 col-sm-12">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        <div class="py-1 px-3" style="background-color: #dff0d8;">
                            <h1 class="text-success">My products</h1>
                        </div>
                        <div class="row">
                            @foreach ($products as $item)
                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="box4main">
                                    <div class="box4 text-center">
                                        <a href="{{route('user.product-info.show',$item->id)}}">
                                            <img src="{{asset($item->image)}}"
                                                alt="{{$item->title}}">
                                        </a>
                                    </div>
                                    <div>
                                        <a class="nav_prod" href="{{route('user.product-info.show',$item->id)}}">{{$item->title}} </a><br>
                                        @if($item->status =='0')
                                        <h5 class="text-warning mt-3 mb-2">Pending</h5>
                                        @else

                                        <h5 class="text-success mt-3 mb-2">Approved</h5>
                                        @endif
                                        <i class="text-warning text-orange"><strong>{{$item->click_count}}</strong> Views since {{$item->created_at}}</i>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            <div style="display:flex;justify-content:center;margin-top:20px">
                                {{$products->links()}}
                            </div>
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
