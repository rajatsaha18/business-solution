@extends('bdshop.frontEnd.layouts.master')

@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                @include('bdshop.frontEnd.home.sidebar')
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

                        @foreach ($categories as $item)
                            <a href="{{route('info-sub-category',$item->slug)}}" class="text-center" target="_blank">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="div_style3 p-3">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                <div class="mainbody-grid div_style4 pt-0">
                    <h1 class="text-success">Edit My Profile | {{Auth::user()->name ?? ''}}</h1>
                </div>
                <div class="main_content2">
                    </div>
                    <div class="clearfix"></div>

                    <form class="form-horizontal" action="{{route('user.info-update-profile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table class="table-responsive table-bordered">
                            <tbody>
                                <tr class="">
                                    <td class="text-right">Stall/Business Name:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="stall_name"
                                            id="organization" placeholder="Stall Name" value="{{isset($company->business_name)?$company->business_name : ''}}"
                                            required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Owner Name:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="owner_name"
                                            id="organization" placeholder="Stall Name" value="{{isset($company->owner_name)?$company->owner_name:''}}"
                                            required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Business Category:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="business_category"
                                            id="organization" placeholder="Stall Name" value="{{isset($company->business_category)?$company->business_category:''}}"
                                            required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Address:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="address"
                                            id="organization" placeholder="Enter Your Address" value="{{Auth::user()->address}}"
                                            required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Country:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <select name="country" id="" class="form-control">
                                            @foreach ($countries as $item)
                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">City:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <select name="city" id="city" class="form-control">
                                            @if(!empty($company->city))
                                            @foreach ($cities as $item)
                                                <option value="{{$item->id}}" @if($item->id == $company->city) selected @endif>{{$item->name}}</option>
                                            @endforeach
                                            @else
                                            @foreach ($cities as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Phone:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="tel" name="phone" id="phone"
                                            placeholder="Enter your Phone" value="{{Auth::user()->phone}}" required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>

                                <tr class="">
                                    <td class="text-right">Website:</td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="website" id="address"
                                            placeholder="Enter your website Link" value="{{$company->website ?? ''}}">
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Facebook Page:</td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="facebook" id="address"
                                            placeholder="Facebook Page" value="{{$company->facebook ?? ''}}">
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Google Location:</td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="google_location" id="address"
                                            placeholder="Enter Google map location (if any)" value="{{$company->google_location ?? ''}}">
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Email:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="email" name="email" id="email"
                                            placeholder="Enter your Email" value="{{Auth::user()->email ?? ''}}" required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Contact:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="name" id="address"
                                            placeholder="Enter your Contact" value="{{Auth::user()->name ?? ''}}" required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                {{-- <tr class="">
                                    <td class="text-right">Remarks: </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="remarks" id="remarks"
                                            placeholder="Enter your Remarks" value="{{Auth::user()->remarks ?? ''}}">
                                    </td>
                                </tr> --}}
                                <tr class="">
                                    <td class="text-right">Stall Logo: </td>
                                    <td class="text-left">
                                        <input class="form-control" type="file" name="logo"
                                             value="">
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Keywords: </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="keywords" id="keywords"
                                            placeholder="Enter your keywords" value="{{$company->keywords ?? ''}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div>
                                            <input type="submit" class="btn btn-outline-success text-dark"
                                                value="SUBMIT" name="Add" id="Add">
                                            <input type="reset" class="btn btn-outline-danger text-dark" value="Reset" name="B2">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-2">
            <div class="row">

                <!--ad right-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ad_products.png" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ha9.png" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ha2.png" alt=""></a>
                </div>
                <div class="clearfix"></div>
                <!--ad right-->

            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>
@endsection
