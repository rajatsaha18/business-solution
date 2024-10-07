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
                       <h1>Buy Sell SubCategory</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Buy Sell SubCategory</li>
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
                           <h3 class="card-title">Buy Sell SubCategory Form</h3>
                           <a href="{{route('admin.buy-sell-subcategory.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.buy-sell-subcategory.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">
                                   <div class="col-md-6 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="title" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Icon  </label>
                                       <input type="file" class="form-control" name="icon"  required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Category</label>
                                       <select name="category_id" class="form-control" >
                                           <option  selected>--Select--</option>
                                           @foreach($categories as $item)
                                           <option value="{{$item->id}}">{{$item->title}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Form Type</label>
                                       <select name="form_type" class="form-control" >
                                       <option value="">--Select--</option>
                                           <option value="land">Land</option>
                                           <option value="commercial">Commercial</option>
                                           <option value="room">Room</option>
                                           <option value="house">House</option>
                                           <option value="apartment">Apartment</option>
                                           <option value="car">Car</option>
                                           <option value="motorbike">Motorbike</option>
                                       </select>
                                   </div>
                                   <div class="col-md-6 mt-2">
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
