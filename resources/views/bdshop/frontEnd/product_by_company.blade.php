@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<!--top address bar-->

<div class="container">
    <div class="row margin-bottom-20 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                <div class="clearfix"></div>
                <!--left category menu-->
                <div class="col-md-12 leftmenu-grid">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-10 text-center left-menu-heading d-none">
                        <h4>Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        {{-- @foreach ($categories as $item)
                            <a href="{{route('info-sub-category',$item->slug)}}" target="_blank">{{$item->name}}</a>
                        @endforeach --}}


                    </div>
                    <script>
                        function myFunction1() {
                            var x = document.getElementById("myTopnav1");
                            if (x.className === "leftnav") {
                                x.className += " responsive";
                            } else {
                                x.className = "leftnav";
                            }
                        }
                    </script>
                </div>

            </div>
        </div>

        <div class="col-md-8">
            <div class="div_style2">

                <div class="skiptarget"><a id="maincontent">-</a></div>
                <div class="row">
                    <div class="col-md-12 col-xs-12 div_style3">
                        <div class="col-md-12 col-xs-12 mainbody-grid div_style4">

                            <h1 style="color:#00006b">All Company</h1>

                        </div>
                        <div class="main_content2">
                            <div class="col-md-12 col-sm-12 col-xs-12 margin-top-bottom-10 padding-bottom-5 text-left">
                                <div class="row">
                                    @foreach ($users as $company)
                                    <div class="col-md-3 col-sm-6 col-xl-4 p-2">
                                        <a href="{{route('single.company',$company->business_name)}}" target="_blank">{{$company->business_name}}</a>
                                    </div>

                                    @endforeach
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!--ad bottom-->
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-top-10">
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>

<div class="total-ads main-grid-border">
    <div class="container">
    </div>
</div>
@endsection