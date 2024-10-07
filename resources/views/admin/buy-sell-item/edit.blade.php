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
                       <h1>Buy Sell Item</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Buy Sell Item</li>
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
                           <h3 class="card-title">Buy Sell Item</h3>
                           <a href="{{route('admin.buy-sell-item.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <style>
                        h5{
                            font-size: 17px;
                        }
                       </style>
                       <div class="card-body">
                           <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <h5><strong>Item Title</strong>: {{$ad->title}}</h5>
                              <h5><strong>User Name</strong>: {{$ad->user->name}}</h5>
                              <h5><strong>User Phone Number</strong>: {{$ad->user->phone}}</h5>
                              <h5><strong>Address</strong>: {{$ad->address}}</h5>
                              <h5><strong>Description</strong>: {!! $ad->description !!}</h5>
                              <h5><strong>Category Name</strong>: {{$ad->category->title}}</h5>
                              <h5><strong>Subcategory Name</strong>: {{$ad->subcategory->title}}</h5>
                              <h5><strong>Beds</strong>: {{$product_details->beds}}</h5>
                              <h5><strong>Baths</strong>: {{$product_details->baths}}</h5>
                              <h5><strong>Size</strong>: {{$product_details->size}}</h5>
                              <h5><strong>Thumbnail Image: </strong><br> <br><img src="{{asset($ad->thumbnail_img)}}" style="width:300px" alt=""></h5>

                            </div>
                            <div class="col-md-6 col-sm-12">
                          
                            
                            <h5><strong>Features</strong>: {{$product_details->features}}</h5>
                            <h5><strong>Facing</strong>: {{$product_details->facing}}</h5>
                            <h5><strong>Completion Status</strong>: {{$product_details->completion_status}}</h5>
                            <h5><strong>Property Type</strong>: {{$product_details->property_type}}</h5>
                            <h5><strong>Land Size</strong>: {{$product_details->land_size}}</h5>
                            <h5><strong>Unit One</strong>: {{$product_details->unit_one}}</h5>
                            <h5><strong>Unit Two</strong>: {{$product_details->unit_two}}</h5>
                            <h5><strong>Unit Three</strong>: {{$product_details->unit_three}}</h5>
                            <h5><strong>House Size</strong>: {{$product_details->house_size}}</h5>
                            <h5><strong>Land Type</strong>: {{$product_details->land_type}}</h5>

                           </div>
                           </div>
                           <hr>
                           <form action="{{route('admin.buy-sell-item.update',$ad->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                  
                                   <div class="col-md-6 mt-2">
                                       <label>Status</label>
                                       <select name="status" class="form-control" >
                                            <option @if($ad->status == 1) selected @endif value="1">Active</option>
                                            <option @if($ad->status == 0) selected @endif value="0">Inactive</option>
                                       </select>
                                   </div>

                                   <div class="col-md-6 mt-2">
                                       <label>Write Reasons if post has problem</label>
                                        <textarea name="reason" class="form-control">{{$ad->reason}}</textarea>
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