@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Future Startup Interview</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Future Startup Interview</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Future Startup Interview</li>
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
                           <h3 class="card-title">Future Startup Interview</h3>
                           <a href="{{route('admin.fs-interview.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.fs-interview.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                               
                                   <div class="col-md-12 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" value="{{$data->title}}" name="title" placeholder="Name" required>
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
                                    <label>Image</label>
                                    <img src="{{asset($data->image)}}" alt="" width="140px">
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>YouTube</label>
                                    <input type="text" name="video" value="{{$data->video}}" class="form-control">
                                </div>
                                  
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control"  id="summernote" name="description" placeholder="Long Description">{!! $data->description !!}</textarea>
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
