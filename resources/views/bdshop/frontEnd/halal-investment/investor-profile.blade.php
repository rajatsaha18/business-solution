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
<section class="container mt-5">


    <div class="p-5 mt-5 mb-5" style="background-color:#F1FAF6;border-radius:10px">
        <form action="{{route('investor.update.profile')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-5">
                    <div class="card shadow p-4">
                        <h4 class="fw-bolder mb-3">Profile Picture</h4>
                        @if(!empty($user->image))
                        <img src="{{asset($user->image)}}" style="width:200px;height:200px;object-fit:cover"></img>
                        @else
                        <h5 class="fw-bolder text-danger">No Image Available</h5>
                        @endif
                        <input type="file" class="form-control mt-3" name="image">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow p-4">
                        <h4 class="fw-bolder">Personal Info</h4>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                            <input type="text" value="{{$user->id}}" name="user_id" hidden>

                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="phone" value="{{$user->phone}}" required>

                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Date of Birth <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="dob" value="{{$user->dob}}" required>

                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">NID Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nid" value="{{$user->nid}}" required>

                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder mb-2">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="address" type="text" required>{{$user->address}}</textarea>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-success btn-md">Update</button>
            </div>
        </form>
    </div>
</section>


@endsection
