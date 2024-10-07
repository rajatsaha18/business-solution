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
                    <div style="background-color: #f0f0ff;" class="width-100 padding-6 border-radius-top-5 margin-top-10 text-center left-menu-heading">
                        <h4 style="color: #00006b; ">Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        <a href="javascript:void(0);" class="icon margin-top-7-minus leftnav border-top-dashed" style="text-align: center;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>
                        @foreach ($categories as $item)
                        <a style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 16px;  " href="{{route('info-sub-category',$item->slug)}}" target="_blank">{{$item->name}}</a>
                        @endforeach



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
                <style>
                    .package-card h2 {
                        color: #f90;
                    }

                    .package-card p {
                        font-size: 15px;
                    }
                </style>
                <div class="skiptarget"><a id="maincontent">-</a></div>
                <div class="row">
                    <div class="text-center mt-3 mb-3">
                        <h4 class="text-center pt-2 pb-2 ps-2 pe-2" style="background-color:#00006b;color:white;">Product upload Package List</h4>
                    </div>
                    @if(Session::has('message'))
                    <div class="alert alert-warning"> {{ Session::get('message') }}</div>
                    @endif
                    @foreach ($packages as $package)
                    <div class="col-md-4 col-xs-6 mb-4 mt-4">
                        <div class="card text-center package-card">
                            <h2 class="mt-2" style="color:#00006b">{{$package->name}}</h2>
                            <hr>
                            <p>Advertise Upto: 0 - {{$package->number_of_advertise}}</p>
                            <hr>
                            <p>Amount: {{$package->amount}} Taka</p>
                            <hr>
                            <p>Day Limit: {{$package->day_limit}} Days</p>
                            <hr>
                            <a class="btn btn-sm w-50 text-light mt-2 mb-3 mx-auto" href="{{route('package.order',$package->id)}}" style="background-color: #00006b;">Order Now</a>

                        </div>

                    </div>
                    @endforeach

                </div>
                <!--ad bottom-->
                <div class="row">
                    <div class="col-md-12 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-top-10">
                        <h5 style="color: red;">After your order confirmation, you will receive a user ID and password for the must</h5>
                    </div>
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