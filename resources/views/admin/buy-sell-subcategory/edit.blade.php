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
                       <h1>Category</h1>
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
                           <h3 class="card-title">Buy Sell SubCategory</h3>
                           <a href="{{route('admin.buy-sell-subcategory.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.buy-sell-subcategory.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                   <div class="col-md-6 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" value="{{$data->title}}" class="form-control" name="title" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Icon  </label>
                                       <br>
                                       <img src="{{asset($data->icon)}}" style="width:100px"  alt=""><br>
                        
                                       <input type="file" class="form-control" name="icon">
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Category</label>
                                       <select name="category_id" class="form-control" >
                                           <option  selected>--Select--</option>
                                           @foreach($categories as $item)
                                           <option value="{{$item->id}}" {{$item->id ==$data->category_id?'selected':''}}>{{$item->title}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Form Type</label>
                                       <select name="form_type" class="form-control" >
                                       <option value="">--Select--</option>
                                           <option value="land" {{$data-> form_type=='land' ?'selected':''}}>Land</option>
                                           <option value="commercial"{{$data-> form_type=='commercial' ?'selected':''}}>Commercial</option>
                                           <option value="room" {{$data-> form_type=='room' ?'selected':''}}>Room</option>
                                           <option value="house" {{$data-> form_type=='house' ?'selected':''}}>House</option>
                                           <option value="apartment" {{$data-> form_type=='apartment' ?'selected':''}}>Apartment</option>
                                           <option value="car" {{$data-> form_type=='car' ?'selected':''}}>Car</option>
                                           <option value="motorbike" {{$data-> form_type=='motorbike' ?'selected':''}}>Motorbike</option>
                                       </select>
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