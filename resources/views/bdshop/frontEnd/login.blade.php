@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div style="background-color: #f0f0ff;" class="width-100 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4 style="color: #00006b;">Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($categories as $item)
                        <a href="{{route('info-sub-category',$item->slug)}}" class="text-center">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="div_style3 p-3">

                <div class="mainbody-grid div_style4 pt-0">
                    <h1 style="color:#00006b">Info Login Form</h1>
                </div>
                <div class="main_content2">
                </div>
                <div class="clearfix"></div>
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
                @endif
                <form class="form-horizontal" action="{{route('info-user-login')}}" method="post">
                    @csrf
                    <table class="table-responsive table-bordered">
                        <tbody>
                            <tr class="">
                                <td class="text-right">Your E-mail:<span class="sub_ttl_yellow">*</span>
                                </td>
                                <td class="text-left">
                                    <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email" placeholder="Enter Your Email" value="" required="">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <span class="text-danger"></span>
                                </td>
                            </tr>
                            <tr class="">
                                <td class="text-right">Enter Password:<span class="sub_ttl_yellow">*</span> </td>
                                <td class="text-left">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" placeholder="Enter Password" value="" required="">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <span class="text-danger"></span>
                                </td>
                            </tr>
                            @php
                            $contact = App\InfoContactUs::first();
                            @endphp
                            <tr>
                                <td>
                                    <p style="color: #00006b;" class="fw-bolder">For Login Credential Give a phone call or Whatsapp to Business Solution ({{$contact->phone ??''}}) <span class="text-danger">***</span></p>
                                </td>
                                <td colspan="2" class="text-center">
                                    <div>
                                        <input type="submit" style="background-color: #00006b; color: white; " class="btn" value="SUBMIT" name="Add" id="Add">
                                        <input type="reset" class="btn btn-outline-danger" value="Reset" name="B2">
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