@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">


                <div class="col-md-12 leftmenu-grid margin-bottom-15 mt-5">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4 style="color: #070175; font-size: 16px; ">Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px; " href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px; " class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($bdcategory as $item)
                        <a style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px; " href="{{route('info-sc',$item->slug)}}" class="text-center" target="_blank">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="row margin-top-10">
                <!--ad classic & classic mini-->
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 margin-bottom-7">
                    <a href="#"><img src="./img/ad_royal.gif" alt=""></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right margin-bottom-7">
                    <a href="#"><img src="./img/ad_tigerpestcontrol_homeclassic.gif" alt=""></a>
                </div>
                <!--ad classic & classic mini-->
            </div>
            <div class="div_style3 p-3">

                <div class="mainbody-grid div_style4 pt-0">
                    <span>Send mail to</span>
                    <h1 style="color: #070175;">{{$advertise->business_name}}</h1>
                </div>
                <div class="main_content2">
                    <div><span style="color: #070175;" class="sub_ttl_blue">For classified Listing we charge as follows </span><br><br>
                    </div>
                    <div class="clearfix"></div>

                    <form class="form-horizontal" action="{{route('info-save-mail')}}" method="post">
                        @csrf
                        <table class="table-responsive table-bordered">
                            <tbody>
                                <tr class="">
                                    <td class="text-right" width="20%">Your Name/Company:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="name" id="trade_cata" placeholder="Enter Your Name/Company Name" value="" required="">
                                        <input type="hidden" value="{{$advertise->id}}" name="advertise_company_id">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Your E-mail:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="email" id="organization" placeholder="Enter Your Email" value="" required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Enter Subject:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="subject" id="address" placeholder="Enter Subject" value="" required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Details Message:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <textarea class="form-control" type="text" name="details_message" id="city" placeholder="Details Message" value="" required=""></textarea>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="text-right">Security Code :<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <div class="col-md-2 col-sm-3 col-xs-5 text-center">
                                            <b>6 + 11 =</b>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-7">
                                            <input class="form-control" name="ran" type="text" id="ran" size="2" required="">
                                        </div>
                                        [ Example: 6 + 11 = 17 ]<br>
                                        <em class="text_blue">just write the result of addition of two numbers
                                        </em>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div>
                                            <input name="ran1" type="hidden" id="ran1" value="6">
                                            <input name="ran2" type="hidden" id="ran2" value="11">
                                            <input type="hidden" name="fid" id="fid" value="CL">
                                            <input style="background-color: #070175;" type="submit" class="btn text-light" value="SUBMIT" name="Add" id="Add">
                                            <input style="background-color: red;" type="submit" type="reset" class="btn btn-warning text-light" value="Reset" name="B2">
                                        </div>
                                        <div class="text-center"><span class="text1"><br><em>* Rates may be
                                                    changed at anytime without prior notice</em></span></div>
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