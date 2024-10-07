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
                    <h1 class="text-success">Change Password Form</h1>
                </div>
                <div class="main_content2">
                    </div>
                    <div class="clearfix"></div>

                    <form class="form-horizontal" action="{{route('user.save-chnage-password')}}" method="post">
                        @csrf
                        <table class="table-responsive table-bordered">
                            <tbody>
                                <tr class="">
                                    <td class="text-right">Old Password:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="password" name="old_password"
                                            id="organization" placeholder="Enter Your Old Password" value=""
                                            required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">New Password:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="password" name="password"
                                            id="organization" placeholder="Enter Your New Password" value=""
                                            required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Confirm Password:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="password" name="password_confirmation" id="address"
                                            placeholder="Enter Confirm Password" value="" required="">
                                        <span class="text-danger"></span>
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
