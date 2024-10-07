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
        <div class="col-md-10 mt-3">
            <div class="div_style3 p-3 mt-0">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Package Name</th>
                            <th>Number of Advertise</th>
                            <th>Day Limit</th>
                            <th>Payment Status</th>
                            <th>Order Status</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($packageOrders as $key => $item)

                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->package->name }}</td>
                                <td>{{$item->package->number_of_advertise}}</td>
                                <td>{{$item->package->day_limit}} Days</td>
                                <td>
                                    @if($item->payment_status == 1)
                                    <span class="badge bg-success">Correct</span>
                                  @elseif($item->payment_status==0)
                                    <span class="badge bg-warning">Pending</span>
                                    @elseif($item->payment_status == 2)
                                     <span class="badge bg-danger">Incorrect</span>
                                    @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                                </td>
                                <td>
                                    @if($item->order_status == 1)
                                    <span class="badge bg-success">Approved</span>
                                @elseif($item->order_status ==0)
                                    <span class="badge bg-warning">Pending</span>
                                @elseif($item->order_status ==2)
                                   <span class="badge bg-danger">Cancelled</span>
                                @else
                                <span class="badge bg-secondary">Inactive</span>
                                @endif
                                </td>

                            </tr>
                        @endforeach
                    <tbody>
                </table>
                {{-- <div class="mainbody-grid div_style4 pt-0">
                    <h1>My Profile | {{Auth::user()->business_name ?? ''}}</h1>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <img src="{{asset(Auth::user()->avatar_original)}}" alt="#" width="118">
                    </div>
                    <div class="col">
                        <ul>
                            <li>Stall ID : {{Auth::user()->id}}</li>
                            <li>Stall Type : Silver</li>
                            <li>Stall Name: <h3 class="text-orange">{{Auth::user()->business_name ?? ''}}</h3>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row margin-top-20 margin-bottom-25 border-bottom-dashed">
                    <div class="col-md-12 col-xs-12">
                        <h2 class="text-orange">Contact Person :</h2>
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
                            class="btn btn-info d-block text-white">Edit</a><br><br>
                    </div>
                </div>

                <div class="mt-3">
                    <h2 class="text-orange">Stall Products :</h2>
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
                </div> --}}

                <!--ad bottom-->
                <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center ">
                </div>
            </div>
            <div class="div_style3 p-3 mt-0">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Advertise Product Upload Limit Available</th>
                            <th>Days Limit Remaining</th>
                        </tr>
                    </thead>
                    <tbody>


                            <tr>
                                <td>{{isset($advertise_remain)?$advertise_remain:''}}</td>
                                {{-- <td>{{isset($times)?$times:''}}</td> --}}
                                {{-- <div class="wrap-countdown mercado-countdown" data-expire="{{ Carbon\Carbon::parse($time_to)->format('Y/m/d h:i:s') }}"></div> --}}
                                <td class="mercado-countdown">{{$remainingDays}} Days {{$remainingHours % 24}} hours {{$remainingMinutes % 60}} minutes Remaining</td>


                            </tr>

                    <tbody>
                </table>

                <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center ">
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>
<script src="{{asset('shopfront/js/')}}/jquery-3.6.1.min.js"></script>
<script src="{{asset('shopfront/js/')}}/jquery.countdown.min.js"></script>
<script>
   ;(function($) {

    var MERCADO_JS = {
      init: function(){
         this.mercado_countdown();

      },
    mercado_countdown: function() {
         if($(".mercado-countdown").length > 0){
                $(".mercado-countdown").each( function(index, el){

                  var _this = $(this),
                  _expire = _this.data('expire');

               _this.countdown(_expire, function(event) {
                        $(this).html( event.strftime('<span><b>%d</b> Days</span> <span><b>%-H</b> Hrs</span> <span><b>%M</b> Mins</span> <span><b>%S</b> Secs</span>'));
                    });
                });
         }
      },

   }

      window.onload = function () {
         MERCADO_JS.init();
      }

      })(window.Zepto || window.jQuery, window, document);
</script>
@endsection


