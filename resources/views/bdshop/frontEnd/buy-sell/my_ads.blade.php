@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')
<section class="my_ads mt-4 ">
        <style>
            a{
                text-decoration: none;
            }
         @media(max-width:600px){
            .my_ad_container .card{
                    text-align:center;
              }
         }
        </style>
        <div class="container my_ad_container">
            <div class="card shadow p-3 mb-3">
                 <div class="row">
                 <div class="col-md-3 col-sm-12">
                        <h4>Account</h4>
                        <hr class="">
                        <a href="{{route('buyselluser.dashboard')}}">My Account</a>
                        <hr class="">
                        <a href="{{route('buyselluser.user.myads')}}">My Ads</a>
                        <hr class="">
                        <a href="{{route('buyselluser.buysell.user.setting')}}">Settings</a>
                    </div>
                    <div class="col-md-9 col-sm-12">
                       <h4>{{Auth::user()->name}}</h4>
                       <hr>
                    @if($count>0)
                       <h5 style="background-color: #F3F6F5;" class="pt-3 pb-3 ps-2">Ads that need editing <span class="bg-danger text-light" style="border-radius: 50%;padding:2px 8px;font-size:14px">{{$count}}</span></h5>
                        @foreach($editable as $ad)

                            <div class="card" style="border-left: solid 3px #d95e46;">
                                <h6 class="pt-2 ps-2">Reason: {{$ad->reason}}</h6>
                                <hr>
                                <div class="row p-3">
                                    <div class="col-md-3 col-sm-3">
                                        <img src="{{asset($ad->thumbnail_img)}}" style="width:136px;height:102px;border:1px solid #e5e5e5"  alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h6>{{$ad->title}}</h6>
                                        <p>{{$ad->address}}, {{$ad->subcategory->title}}</p>
                                        <h6>Tk {{$ad->rent}}</h6>

                                    </div>

                                </div>
                                @php
                                $payment=DB::TABLE('ad_payments')->where('buysell_product_id',$ad->id)->first();
                                $payment_update=DB::TABLE('ad_payments')->where('buysell_product_id',$ad->id)->where('payment_status','incorrect')->first();

                                @endphp
                                <div class="row p-3">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <a href="{{route('buyselluser.user.ad.edit',$ad->slug)}}" class="btn btn-sm" style="background-color: #00A984;color:white">Edit</a>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <a href="{{route('buyselluser.user.ad.confirm.delete',$ad->slug)}}" class="btn btn-sm btn-danger text-light">Delete</a>
                                            </div>

                                            <div class="col-md-8 col-sm-4 mt-3">
                                                @if($payment && $payment_update)
                                                <a href="{{route('buyselluser.user.ad.update.payment',$ad->slug)}}" class="btn btn-sm btn-success text-light mt-3">Update Payment</a>
                                                @elseif(!$payment)
                                                <a href="{{route('buyselluser.user.ad.payment',$ad->slug)}}" class="btn btn-sm btn-success text-light mt-3">Payment</a>
                                                @endif

                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div><br>

                          @endforeach
                    @endif
                    @if(count($ads)>0)
                   
                       <h5 style="background-color: #F3F6F5;" class="pt-3 pb-3 ps-2">Ads under review <span class="bg-danger text-light" style="border-radius: 50%;padding:2px 8px;font-size:14px">{{count($ads)}}</span></h5>
                       <p style="border:1px solid green;border-radius:3px;color:#6f6d6dde" class="p-2"><i class="fa fa-info-circle fs-4" aria-hidden="true"></i> We review all ads manually before they go live. We will send a notification when we have reviewed and approved your ads. It usually takes about 4 hours during office hours.</p>
                        @foreach($ads as $ad)

                            <div class="card" style="background:#FFFFFF" >
                               
                                <div class="row p-3">
                                    <div class="col-md-3 col-sm-3">
                                        <img src="{{asset($ad->thumbnail_img)}}" style="width:136px;height:102px;border:1px solid #e5e5e5"  alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h6 style="color:#b6b6b6">{{$ad->title}}</h6>
                                        <p style="color:#b6b6b6">{{$ad->address}}, {{$ad->subcategory->title}}</p>
                                        <h6 style="color:#b6b6b6">Tk {{$ad->rent}}</h6>

                                    </div>
                                </div>
                                
                              
                            </div><br>

                          @endforeach
                    @endif
                        
                    </div>
                 </div>
            </div>
        </div>

     </section>
     <section class="ad-part-two mt-2 mb-4">
        <div class="cotaniner" style="width:50%;display:block;margin:0 auto;text-align:center;">
            <div>
                <h5 class="pb-2">Do you have something to sell?</h5>
                <h6 class="pb-2">Post your ad on TradeInfo</h6>
                <a href="{{route('buyselluser.post.add')}}" class="btn btn-sm btn-warning">Post an ad now!</a>

            </div>
        </div>
     </section>



@endsection