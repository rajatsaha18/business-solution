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
                       <h1>Brands</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Brands</li>
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
                           <h3 class="card-title">Brand</h3>
                           <a href="{{route('admin.brand.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.brand.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                                <div class="col-md-12 mt-2">
                                    <label>Title <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="title" placeholder="Name" required>
                                </div>
                               
                
                                <div class="col-md-12 mt-2">
                                    <label>Order </label>
                                   <input type="number" class="form-control" name="order">
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description</label>
                                    <textarea type="text" class="form-control" name="meta_description" placeholder="Meta Description"></textarea>
                                </div>
                                
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
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