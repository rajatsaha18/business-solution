@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Pricing Category</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Pricing Category</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Pricing Category</li>
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
                           <h3 class="card-title">Pricing Category</h3>
                           <a href="{{route('admin.pricing-category.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.pricing-category.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">

                                   <div class="col-md-12 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" value="{{$data->title}}" name="title" placeholder="Title" required>
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