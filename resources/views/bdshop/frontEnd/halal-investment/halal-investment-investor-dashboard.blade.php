@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')

<style>
    .investmentseeker-navbar a{
        text-decoration: none;
        color:green;
        font-weight:600;
        font-size:20px;
    }
    .user a{
        text-decoration: none;
    }
</style>
<section class="container mt-3 investmentseeker-navbar">
  <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="d-flex justify-content-between">
        <a href="{{route('investor.dashboard')}}">Dashboard</a>
                <a href="{{route('investor.profile')}}">Profile</a>
                <a href="{{route('investor.account.detail')}}">Account Details</a>
                @if(Auth::user()->role_id=5)
                <a href="{{ route('investor.orders.investor') }}">Order History</a>
                <a href="{{ route('investor.get.payment') }}">Get Payment</a>
                @endif

        </div>
    </div>
  </div>
  <hr>
</section>
<section class="user container mt-5 mb-5 pb-5">
    <h4 class="fw-bolder">Hello <span class="text-success">{{Auth::user()->name}}</span>, Welcome to your dashboard</h4>

</section>
@endsection
