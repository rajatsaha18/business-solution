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
            <div class="col-md-5 col-sm-12">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('investor.dashboard') }}">Dashboard</a>
                    <a href="{{ route('investor.profile') }}">Profile</a>
                    <a href="{{ route('investor.account.detail') }}">Account Details</a>
                    @if (Auth::user()->role_id = 5)
                        <a href="{{ route('investor.orders.investor') }}">Order History</a>
                        <a href="{{ route('investor.get.payment') }}">Get Payment</a>
                    @endif

                </div>
            </div>
        </div>
        <hr>
    </section>
    <section class="user container mt-5 mb-5 pb-5">
        @if (!empty($order))
            <p>Thank you! Your order is currently in <strong>{{ $order->status }}</strong></p>
            <p>We will contact you soon and collect your <strong>Investment cash/cheque</strong></p>
            <ul>
                <li> Order Number: <strong>#{{ $order->id }}</strong></li>
                <li> Date: <strong>{{ \Carbon\Carbon::parse($order->created_at)->format('M d,Y') }}</strong></li>
                <li> Email: <strong>{{ $order->user->email }}</strong></li>
                <li> Total: <strong> {{ $order->investment_amount }}</strong></li>

            </ul>
            <h2 class="fw-bolder">Order Details</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Total</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $order->company->company_name }}</th>
                        <td>{{ $order->investment_amount }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Subtotal</th>
                        <td>{{ $order->investment_amount }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Total</th>
                        <td>{{ $order->investment_amount }}</td>

                    </tr>

                </tbody>
            </table>
            <table class="table table-bordered">

                <tbody>
                    <tr>
                        <th scope="row">Bank Name</th>
                        <td>{{ $order->bank_name }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Account Name</th>
                        <td>{{ $order->account_name }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Account No</th>
                        <td>{{ $order->account_no }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Branch Name</th>
                        <td>{{ $order->branch_name }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Nominee Name</th>
                        <td>{{ $order->nominee_name }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Relationship</th>
                        <td>{{ $order->relationship }}</td>

                    </tr>
                    <tr>
                        <th scope="row">Nominee contact No</th>
                        <td>{{ $order->nominee_contact_no }}</td>

                    </tr>

                </tbody>
            </table>
        @else
            <h1 class="text-danger"> {{ $message }}</h1>
        @endif
    </section>
@endsection
