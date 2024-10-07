@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Client Review</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Client Review</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Client Review</li>
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
                           <h3 class="card-title">Client Review</h3>
                           <a href="{{route('admin.client-review.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.client-review.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">

                                <div class="col-md-12 mt-2">
                                    <label>Name <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Designation <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$data->designation}}" name="designation" placeholder="Designation" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Details <span style="color: red">*</span> </label>
                                    <textarea type="text" class="form-control" name="details" placeholder="Details" required>{!! $data->details !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image </label>
                                    <img src="{{asset($data->image)}}" alt="" width="70px">
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
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
@endsection
