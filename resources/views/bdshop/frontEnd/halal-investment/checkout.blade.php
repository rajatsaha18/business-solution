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
    <div class="container order-detail-form">
        <form action="{{route('investor.order.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4 class="fw-bolder mb-5">Billing Details</h4>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address *</label>
                        <input type="text"  id="exampleFormControlInput1" placeholder="address"
                            name="address"  class="form-control @error('address') is-invalid @enderror" value="{{ old('address')}}">
                            @error('address')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                            <input type="text" name="investment_amount"  value="{{$investor_amount  }}" hidden>
                            <input type="text" name="company_id"  value="{{$company_id  }}" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apartment, suite, unit, etc. *</label>
                        <input type="text" class="form-control @error('apartment') is-invalid @enderror" id="exampleFormControlInput1" name="apartment"
                            placeholder="Apartment, suite, unit, etc. *" value="{{ old('apartment')}}">
                            @error('apartment')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">City *</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" id="exampleFormControlInput1" placeholder="city"
                            name="city" value="{{ old('city') }}">
                            @error('city')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone *</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Phone"
                            name="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Bank Name *</label>
                        <input type="text" class="form-control @error('bank_name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="bank name"
                            name="bank_name" value="{{ old('bank_name') }}">
                            @error('bank_name')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Account Name *</label>
                        <input type="text" class="form-control @error('account_name') is-invalid @enderror" id="exampleFormControlInput1"
                            placeholder="bank account name" name="account_name" value="{{ old('account_name') }}">
                            @error('account_name')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Account No *</label>
                        <input type="number" class="form-control @error('account_no') is-invalid @enderror" id="exampleFormControlInput1"
                            placeholder="bank account no" name="account_no" value="{{ old('account_no') }}">
                            @error('account_no')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Branch Name *</label>
                        <input type="text" class="form-control @error('branch_name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="branch name"
                            name="branch_name" value="{{ old('branch_name') }}">
                            @error('branch_name')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4 class="fw-bolder mb-5">Nominee Details</h4>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nominee Name *</label>
                        <input type="text" class="form-control @error('nominee_name') is-invalid @enderror" id="exampleFormControlInput1" placeholder="nominee name"
                            name="nominee_name" value="{{ old('nominee_name') }}">
                            @error('nominee_name')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Relationship *</label>
                        <input type="text" class="form-control @error('relationship') is-invalid @enderror" id="exampleFormControlInput1" name="relationship"
                            placeholder="relationship" value="{{ old('relationship') }}">
                            @error('relationship')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nominee Contact No*</label>
                        <input type="number" class="form-control @error('nominee_contact_no') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Nominee Contact no"
                            name="nominee_contact_no" value="{{ old('nominee_contact_no') }}">
                            @error('nominee_contact_no')
                            <div class="text-danger">* {{ $message }}</div>
                           @enderror
                    </div>
                </div>


                <h4 class="fw-bolder">Your Order</h4>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Subtotal</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{ $company_name->company_name }}</th>
                        <td>৳ {{ $investor_amount }}</td>

                      </tr>
                      <tr>
                        <th scope="row">Subtotal</th>
                        <td>৳ {{ $investor_amount }}</td>

                      </tr>
                      <tr>
                        <th scope="row">Total</th>
                        <td>৳ {{ $investor_amount }}</td>

                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="form-group mb-5">
                <button class="btn btn-warning fw-bolder">Place Order</button>
            </div>
        </form>
    </div>
@endsection
