@extends('admin.layouts.app')
@section('title')
<title>{{ config('app.name', 'Laravel') }} | Advertise Package</title>
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advertise Package</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Advertise Package</li>
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
                        <h3 class="card-title">Advertise Package</h3>
                        <a href="{{route('admin.advertise-package.index')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.advertise-package.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>Package Name <span style="color: red">*</span> </label>
                                    <input name="name" type="text" class="form-control" placeholder="Package Name" required></input>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Number of Advertise<span style="color: red">*</span> </label>
                                    <input class="form-control" name="number_of_advertise" type="number" placeholder="Number of Adveritse" required></input>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Amount<span style="color: red">*</span> </label>
                                    <input class="form-control" name="amount" type="number" placeholder="Amount" required></input>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Day Limit<span style="color: red">*</span> </label>
                                    <input class="form-control" name="day_limit" type="text" placeholder="Day Limit" required></input>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" type="text"></textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
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