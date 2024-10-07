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
                       <h1>Team</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Team</li>
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
                           <h3 class="card-title">Team</h3>
                           <a href="{{route('admin.team.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.team.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">

                                   <div class="col-md-12 mt-2">
                                       <label>Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Order </label>
                                        <input type="text" class="form-control" name="order" placeholder="Order" value="1">
                                    </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Designation <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="designation" placeholder="Designation" required>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Short Details</label>
                                        <textarea type="text" class="form-control" name="short_details" placeholder="Short Details"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Facebook <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="facebook" placeholder="Facebook">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Instragram <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="instragram" placeholder="Instragram">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Twitter <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="twitter" placeholder="Twitter">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Linkdin <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="linkdin" placeholder="Linkdin">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Image <span style="color: red">*</span> </label>
                                        <input type="file" class="form-control" name="image" placeholder="Name">
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
