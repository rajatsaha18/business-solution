@extends('bdshop.frontEnd.layouts2.master')

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
                            <a href="{{route('info-sub-category',$item->slug)}}" class="text-center" target="_blank">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="div_style3 p-3 mt-0">
                <div class="mainbody-grid div_style4 pt-0">
                    <h1 style="color:black!important">My Profile | <span style="color:#008C3F">{{Auth::user()->business_name ?? ''}}</span></h1>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <img src="{{asset(Auth::user()->avatar_original)}}" alt="#" width="118">
                    </div>
                    <div class="col">
                        <ul>
                            <li>Stall ID : {{Auth::user()->id}}</li>
                            <li>Stall Type : Silver</li>
                            <li>Stall Name: <h3 class="text-success">{{Auth::user()->business_name ?? ''}}</h3>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row margin-top-20 margin-bottom-25 border-bottom-dashed">
                    <div class="col-md-12 col-xs-12">
                        <h2 class="text-success">Contact Person :</h2>
                    </div>
                    <div class="col-md-5 col-xs-12 text-left">
                        <br>
                        <span class="text-primary">Address:</span> {{Auth::user()->address ?? ''}}<br>
                        <br>
                        <span class="text-primary">Contact Person:</span> {{Auth::user()->name ?? ''}}<br>
                    </div>
                    <div class="col-md-7 col-xs-12 text-left">
                        <br>
                        <span class="text-primary">Phone:</span> {{Auth::user()->phone ?? ''}}<br>
                        <span class="text-primary">Website:</span> {{Auth::user()->company->website ?? ''}}<br>
                        <span class="text-primary">Email:</span> {{Auth::user()->email ?? ''}}<br>
                        <br>
                        <span class="text-primary">Remarks:</span>{{Auth::user()->remarks ?? ''}}<br>
                        <br>
                    </div>
                    <div class="col-md-3 col-xs-6 text-right">
                        <a href="{{route('user.info-edit-profile')}}"
                            class="btn btn-success d-block text-white">Edit</a><br><br>
                    </div>
                </div>

                <div class="mt-3">
                    <h2 class="text-success">Stall Products :</h2>
                </div>
                <div class="row">
                    @foreach ($products as $item)
                    <div class="col-md-3 col-xs-6 col-sm-12">
                        <div class="box5main">
                            <div class="box4 text-center">

                                <a
                                    href="#"><img
                                        src="{{asset($item->image)}}"
                                        alt="#" ></a>
                            </div>
                            <div class="boxtext">
                                <a href="#"
                                    class="nav_prod">{{$item->title}}</a><br>


                                <i class="text-warning text-orange"><strong>{{$item->click_count}}</strong> Views since {{$item->created_at}}</i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- <div class="col-md-12 margin-top-bottom-10 px-3 py-1" style="background-color: #f2dede;">
                    <h1>Popular product categories</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/29subcategory.png"
                                alt="" ></a>
                        <a href="#">Access
                            Control</a>

                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/27subcategory.png"
                                alt="" ></a>
                        <a href="#">Air
                            Conditioner</a>

                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/123subcategory.png"
                                alt="" ></a>
                        <a href="#">Air Ticket</a>

                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/59subcategory.png"
                                alt="" ></a>
                        <a href="#">Barcode
                            Scanner</a>

                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/85subcategory.png"
                                alt="" ></a>
                        <a href="#">Bed</a>

                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/13subcategory.png"
                                alt="" ></a>
                        <a href="#">Camera</a>

                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/179subcategory.png"
                                alt="" ></a>
                        <a href="#">Car</a>

                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-4 text-left margin-bottom-20 subc">
                        <a href="#"><img src="https://www.bdtradeinfo.com/public/product_image/23subcategory.png"
                                alt="" ></a>
                        <a href="#">CC Camera</a>

                    </div>
                    <div class="clearfix"></div>
                </div> --}}

                <!--ad bottom-->
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center ">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
