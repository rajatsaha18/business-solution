@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Category</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Payment Method</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Payment Method</li>
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
                           <h3 class="card-title">Payment Method</h3>
                           <a href="{{route('admin.payment-method.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.payment-method.store')}}" method="POST" >
                               @csrf
                               <div class="row">
                                   <div class="col-md-6 mt-2">
                                       <label>Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Number <span style="color: red">*</span></label>
                                       <input type="text" class="form-control" name="number" required>
                                   </div>
                                  
                                   <div class="col-md-12 mt-2">
                                       <label>Status</label>
                                       <select name="status" class="form-control" >
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