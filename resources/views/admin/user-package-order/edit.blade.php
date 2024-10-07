@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | User Package Order</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>User Package Order</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">User Package Order</li>
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
                           <h3 class="card-title">User Package Order</h3>
                           <a href="{{route('admin.userpackage-order.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.userpackage-order.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                     <div class="col-md-12 mt-2">
                                       <label>Payment Status</label>
                                       <select name="payment_status" class="form-control" >
                                            <option @if($data->payment_status == 1) selected @endif value="1">Correct</option>
                                            <option @if($data->payment_status == 0) selected @endif value="0">Pending</option>
                                            <option @if($data->payment_status == 2) selected @endif value="2">Incorrect</option>
                                            <option @if($data->payment_status == 3) selected @endif value="3">Inactive</option>

                                       </select>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Order Status</label>
                                       <select name="order_status" class="form-control" >
                                            <option @if($data->order_status == 1) selected @endif value="1">Approved</option>
                                            <option @if($data->order_status == 0) selected @endif value="0">Pending</option>
                                            <option @if($data->order_status == 2) selected @endif value="2">Cancelled</option>
                                            <option @if($data->order_status == 3) selected @endif value="3">Inactive</option>


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
