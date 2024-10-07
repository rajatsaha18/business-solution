@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')
<section class="hero_buy_sell mt-4 ">
        <div class="container">
            <div class="card shadow p-3" style="padding-bottom:150px!important">
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
                       <div>
                         <div class="d-flex mt-5">
                              <img src="https://w.bikroy-st.com/dist/img/all/shop/empty-1x-6561cc5e.png" alt="">
                            <div class="d-flex flex-column align-items-center">
                                <h6>Click the "Post an ad now!" button to post your ad.</h6>
                                <a href="{{route('buyselluser.post.add')}}" class="btn btn-warning text-center mt-3" style="color:black">Post Your Ads</a>

                            </div>
                         </div>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
     </section>



@endsection