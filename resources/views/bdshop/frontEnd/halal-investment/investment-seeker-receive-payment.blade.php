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
        <div class="col-md-7 col-sm-12">
            <div class="d-flex justify-content-between">
                <a href="{{route('investmentseeker.dashboard')}}">Dashboard</a>
                <a href="{{route('investmentseeker.investment.seeker.profile')}}">Profile</a>
                <a href="{{route('investmentseeker.investment.seeker.account.detail')}}">Account Details</a>
                @if(Auth::user()->role_id==4)
                <a href="#">Receive Payment</a>

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
                    <th>Sl No.</th>
                    <th>Bank History</th>
                    <th>Payment</th>
                    <th>Bank Account No.</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key=>$item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->bank_name }}</td>
                    <td>{{ $item->investment_amount }}</td>
                    <td>{{ $item->account_no }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</section>


@endsection
