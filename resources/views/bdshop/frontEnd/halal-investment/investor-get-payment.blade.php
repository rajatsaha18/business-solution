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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Company Name</th>
                    <th>Payment type</th>
                    <th>Account No</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key=>$item)
                <tr>
                    <td>{{Carbon\Carbon::parse($item->created_at)->format('M d, Y')}} </td>
                    <td>{{ $item->company->company_name }}</td>
                    <td>{{ $item->payment_type }}</td>
                    <td>{{ $item->account_no }}</td>
                    <td>{{ $item->amount }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</section>


@endsection
