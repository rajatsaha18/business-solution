@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Business Service</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Business Service</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Business Service</li>
                       </ol>
                   </div>
               </div>
           </div>
       </section>
       <section class="content">
           <div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="card-title">Business Service</h3>
                           <a href="{{route('admin.business-service.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.business-service.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                   <div class="col-md-6 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" value="{{$data->title}}" class="form-control" name="title" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Link <span style="color: red">*</span> </label>
                                       <input type="url" value="{{$data->link}}" class="form-control" value="#" name="link" placeholder="https://" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Image</label>
                                       <img src="{{asset($data->image)}}" style="width:100px" alt=""><br>
                                       <input type="file" class="form-control" name="image">
                                   </div>
                                   <div class="col-md-6 mt-2">
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