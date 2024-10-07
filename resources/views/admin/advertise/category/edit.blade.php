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
                           <li class="breadcrumb-item active">Category</li>
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
                           <h3 class="card-title">Category</h3>
                           <a href="{{route('admin.categories.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                   <div class="col-md-6 mt-2">
                                       <label>Name <span style="color: red">*</span> </label>
                                       <input type="text" value="{{$category->name}}" class="form-control" name="name" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                    <label>Quick Search <span style="color: red">*</span> </label>
                                    <br/>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quick_search" id="inlineRadio3" value="1" @if($category->quick_search == 1) checked @endif>
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                      </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quick_search" id="inlineRadio4" value="0" @if($category->quick_search == 0) checked @endif>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                  </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Icon</label>
                                       <img src="{{asset($category->icon)}}" alt="" width="30px">
                                       <input type="file" class="form-control" name="icon">
                                   </div>
                                   <div class="col-md-6 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" value="{{$category->meta_title}}" class="form-control" name="meta_title" placeholder="Meta Title">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Meta Description</label>
                                        <textarea type="text" class="form-control" name="meta_description" placeholder="Meta Description">{!! $category->meta_description !!}</textarea>
                                    </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Status</label>
                                       <select name="status" class="form-control" >
                                            <option @if($category->status == 1) selected @endif value="1">Active</option>
                                            <option @if($category->status == 0) selected @endif value="0">Inactive</option>
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
