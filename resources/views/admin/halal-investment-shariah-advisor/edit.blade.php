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
                    <h1>Halal Investment Shariah Advisor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Halal Investment Shariah Advisor</li>
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
                        <h3 class="card-title">Halal Investment Shariah Advisor</h3>
                        <a href="{{route('admin.halal-investment-shariah-advisor.index')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.halal-investment-shariah-advisor.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">


                                <div class="col-md-12 mt-2">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" name="designation" value="{{$data->designation}}" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <img src="{{asset($data->image)}}" width:40%'' alt="">
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" value="{{$data->country}}" required>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea name="short_description" id="editor1" class="form-control" required>{{$data->short_description}}</textarea>
                                </div>


                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option @if($data->status == 1) selected @endif value="1">Active</option>
                                        <option @if($data->status == 0) selected @endif value="0">Inactive</option>
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
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
</script>
@endsection