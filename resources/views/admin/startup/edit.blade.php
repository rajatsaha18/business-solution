@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | 
        Startup
    </title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Startup</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Startup</li>
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
                           <h3 class="card-title">Startup</h3>
                           <a href="{{route('admin.startup.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.startup.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               
                               <div class="row">
                               
                                   <div class="col-md-12 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="title" placeholder="Name" value="{{$data->title}}" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Founder Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" value="{{$data->founder_name}}" name="founder_name" placeholder="Founder Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Company Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" value="{{$data->company_name}}" name="company_name" placeholder="Company Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Image one</label><br>
                                     <img src="{{asset($data->image_one)}}" alt="" style="width:200px">
                                     <br>
                                     
                                    <input type="file" class="form-control" name="image_one">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image Two</label><br>
                                     <img src="{{asset($data->image_two)}}" alt="" style="width:200px">
                                     <br>
                                    <input type="file" class="form-control" name="image_two">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image Three</label><br>
                                     <img src="{{asset($data->image_three)}}" alt="" style="width:200px">
                                     <br>
                                    <input type="file" class="form-control" name="image_three">
                                </div>
                             
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control"  id="summernote" name="description" placeholder="Long Description">{!! $data->description    !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>YouTube</label>
                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
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
