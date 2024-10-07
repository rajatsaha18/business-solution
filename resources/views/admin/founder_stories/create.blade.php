@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Founder Stories</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Founder Stories</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Founder Stories</li>
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
                           <h3 class="card-title">Founder Stories</h3>
                           <a href="{{route('admin.founder-stories.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.founder-stories.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">
                               
                                   <div class="col-md-12 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="title" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Founder Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="founder_name" placeholder="Founder Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Company Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="company_name" placeholder="Company Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                             
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text"class="form-control" id="summernote" name="description" placeholder="Long Description"></textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>YouTube</label>
                                    <input type="text" name="youtube" class="form-control">
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
