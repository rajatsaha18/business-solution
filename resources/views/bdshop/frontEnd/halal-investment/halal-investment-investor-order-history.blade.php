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
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Order</th>
            <th scope="col">Date</th>
            <th scope="col">Choosen Company</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $item)

          <tr>
            <th>#{{ $item->id }}</th>
            <th>{{ \Carbon\Carbon::parse($item->created_at)->format('M d,Y') }}</th>
            <td>{{ $item->company->company_name ??'' }}</td>
            <td>{{ $item->investment_amount }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="{{ route('investor.order.investor',$item->id) }}" class="btn btn-success">VIEW</a>
                <a href="{{ route('investor.order.edit',$item->id) }}" class="btn btn-warning text-light">EDIT</a>
            </td>


          </tr>
          @endforeach

        </tbody>
      </table>

</section>
@endsection
