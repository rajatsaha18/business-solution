@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | User Ad Payment </title>
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
                           <li class="breadcrumb-item active">User Ad Payment</li>
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
                           <h3 class="card-title">User Ad Payment</h3>
                           <a href="{{route('admin.admin-handle-buy-sell-ad-payment.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.admin-handle-buy-sell-ad-payment.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                     <div class="col-md-12 mt-2">
                                       <label>Payment Status</label>
                                       <select name="payment_status" class="form-control" >
                                            <option @if($data->payment_status == 'correct') selected @endif value="correct">Correct</option>
                                            <option @if($data->payment_status == 'pending') selected @endif value="pending">Pending</option>
                                            <option @if($data->payment_status == 'incorrect') selected @endif value="incorrect">Incorrect</option>
                                         

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
