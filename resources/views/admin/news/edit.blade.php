@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | News</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Page</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">News</li>
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
                           <h3 class="card-title">News</h3>
                           <a href="{{route('admin.news.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.news.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                
                                   <div class="col-md-12 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" value="{{$data->title}}" name="title" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <img src="{{asset($data->image)}}" alt="" width="140px">
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Short Description</label>
                                    <textarea type="text" class="form-control" name="short_description" placeholder="Short Description">{!! $data->short_description !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Long Description</label>
                                    <textarea type="text" id="summernote" class="form-control" name="long_description" placeholder="Long Description">{!! $data->long_description !!}</textarea>
                                </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title" value="{!! $data->meta_title !!}" placeholder="Meta Title">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Meta Description</label>
                                        <textarea type="text" class="form-control" name="meta_description" placeholder="Meta Description">{!! $data->meta_description !!}</textarea>
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
