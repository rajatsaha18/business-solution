@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Page</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Investor Get Payment</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Investor Get Payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-10 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Investor get payment</h3>
                            <a href="{{ route('admin.investor-get-payment.index') }}" class="btn btn-primary float-right">
                                Back
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.investor-get-payment.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">


                                    <div class="col-md-12 mt-2">
                                        <label>Investor</label>
                                        <select name="investor_id" id="" class="form-control">
                                            <option selected>--Select--</option>
                                            @foreach ($investors as $investor)
                                                <option value="{{ $investor->id }}">{{ $investor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Investor</label>
                                        <select name="company_id" id="" class="form-control">
                                            <option selected>--Select--</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Company Type</label>
                                        <select name="payment_type" id="" class="form-control">

                                            <option value="Mobile Banking">Mobile Banking</option>
                                            <option value="Bank Account">Bank Account</option>
                                            <option value="Checque">Checque</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Account No</label>
                                        <input type="text" name="account_no" class="form-control" placeholder="account no">

                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Amount</label>
                                        <input type="text" name="amount" class="form-control" placeholder="amount">

                                    </div>


                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
