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
                    <h1>Halal Investment Business Seeker Profiles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Halal Investment Business Seeker Profiles/li>
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
                        <h3 class="card-title">Edit Seekers</h3>
                        <a href="{{route('admin.investment-profile-manage.index')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.investment-profile-manage.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="mb-3">
                                        <label for="" class="fw-bolder mb-2">Name</label>
                                        <input type="text" class="form-control" name="business_name" value="{{$data->name}}" disabled>
                                      
                                       
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="fw-bolder mb-2">Email</label>
                                        <input type="text" class="form-control " name="email" value="{{$data->email}}" disabled>
                                      
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="fw-bolder mb-2">Phone</label>
                                        <input type="text" class="form-control " name="phone" value="{{$data->phone}}" disabled>
                                    
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="fw-bolder mb-2">Address</label>
                                        <textarea name="address" class="form-control"disabled>{{$data->address}}</textarea>
                                     
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="fw-bolder mb-2"></label>
                                        <input type="submit" class="btn btn-success" value="Submit"/>
                                     
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