@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
    .investmentseeker-navbar a {
        text-decoration: none;
        color: green;
        font-weight: 600;
        font-size: 20px;
    }

    .user a {
        text-decoration: none;
    }
</style>
<section class="container mt-3 investmentseeker-navbar">
    <div class="row">
        <div class="col-md-9 col-sm-12">
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
<section class="container mt-5">


    <div class="p-5 mt-5 mb-5" style="background-color:#F1FAF6;border-radius:10px">
        <form action="{{route('investor.account.detail.update')}}" method="POST">
            @csrf
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="card shadow p-4">
                        <h4 class="fw-bolder mb-3">Password change</h4>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Eamil <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}" required>
                            <input type="text" value="{{$user->id}}" name="user_id" hidden>

                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" required>

                        </div>
                        <div class="mt-3">
                            <button class="btn btn-success btn-md">Update</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>


@endsection
