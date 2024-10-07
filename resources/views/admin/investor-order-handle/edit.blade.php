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
                        <h1>Halal Investment Investor order handle</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Halal Investment Investor order handle</li>
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
                            <h3 class="card-title">Halal Investment Investor order handle</h5>
                            <a href="{{ route('admin.investor-order-handle.index') }}"
                                class="btn btn-primary float-right">
                                Back
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.investor-order-handle.update', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>User Name: <span style="font-weight:600">{{ $data->user->name }}</span></h5>
                                        <h5>User Phone Number: <span style="font-weight:600">{{ $data->user->phone }}</span></h5>
                                        <h5>User Email: <span style="font-weight:600">{{ $data->user->email }}</span>
                                        </h5>
                                        <h5>Choose Company: <span style="font-weight:600">{{ $data->company->company_name }}</span></h5>
                                        <h5>Investment Amount: <span style="font-weight:600">{{ $data->investment_amount }}</span></h5>
                                        <h5>Address: <span style="font-weight:600">{{ $data->address }}</span></h5>
                                        <h5>Apartment: <span style="font-weight:600">{{ $data->apartment }}</span></h5>
                                        <h5>City: <span style="font-weight:600">{{ $data->city }}</span></h5>
                                        <h5>Phone: <span style="font-weight:600">{{ $data->phone }}</span></h5>


                                    </div>
                                    <div class="col-md-6">
                                        <h5>Bank Name: <span style="font-weight:600">{{ $data->bank_name }}</span></h5>
                                        <h5>Account Name:<span style="font-weight:600">{{ $data->account_name }}</span></h5>
                                        <h5>Account No: <span style="font-weight:600">{{ $data->account_no }}</span></h5>
                                        <h5>Branch Name: <span style="font-weight:600">{{ $data->branch_name }}</span></h5>
                                        <h5>Nominee Name: <span style="font-weight:600">{{ $data->nominee_name }}</span></h5>
                                        <h5>Nominee contact no: <span style="font-weight:600">{{ $data->nominee_contact_no }}</span></h5>
                                        <h5>Relationship: <span style="font-weight:600">{{ $data->relationship }}</span></h5>
                                    </div>


                                    <div class="col-md-12 mt-2">
                                        <label>Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="On Hold" {{ $data->status == 'On Hold' ? 'selected' : '' }}>On Hold
                                            </option>
                                            <option value="Accepted" {{ $data->status == 'Accepted' ? 'selected' : '' }}>
                                                Accepted</option>
                                            <option value="Canceled" {{ $data->status == 'Canceled' ? 'selected' : '' }}>
                                                Canceled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit">Update</button>
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
