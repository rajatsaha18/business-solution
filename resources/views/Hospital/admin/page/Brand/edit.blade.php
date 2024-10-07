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
                           <a href="{{route('admin.hospital-brand.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.hospital-brand.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                                <div class="col-md-12 mt-2">
                                    <label>Title <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$data->title}}" name="title" placeholder="Name" required>
                                </div>
                               
                
                                <div class="col-md-12 mt-2">
                                    <label>Order </label>
                                   <input type="number" class="form-control" value="{{$data->order}}" name="order">
                                    
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Image</label><br>
                                    <img src="{{asset($data->image)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" value="{{$data->meta_title}}"name="meta_title" placeholder="Meta Title">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description</label>
                                    <textarea type="text" class="form-control"  name="meta_description" placeholder="Meta Description">{{$data->meta_description}}</textarea>
                                </div>
                                
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" {{$data->status == '1'?'selected':''}}>Active</option>
                                        <option value="0"  {{$data->status == '0'?'selected':''}}>Inactive</option>
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
