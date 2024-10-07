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
                        <h1>Doctor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Doctor</li>
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
                            <h3 class="card-title">Doctor</h3>
                            <a href="{{ route('admin.doctor.index') }}" class="btn btn-primary float-right">
                                Back
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6 mt-2">
                                        <label>Name <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            required>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" name="designation">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control" type="text"></textarea>
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
