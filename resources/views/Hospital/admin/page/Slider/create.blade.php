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
                       <h1>Slider</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Slider</li>
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
                           <h3 class="card-title">Slider</h3>
                           <a href="{{route('admin.hospital-slider.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.hospital-slider.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                                <div class="col-md-12 mt-2">
                                    <label>Slider Heading <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="slider_text" placeholder="Name">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Slider Small Text <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="slider_p_text" placeholder="Name">
                                </div>


                                <div class="col-md-12 mt-2">
                                    <label>Slider Link </label>
                                   <input type="text" class="form-control" name="slider_link">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Slider Button Text</label>
                                    <input type="text" class="form-control" name="slider_button_text" placeholder="Meta Title">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image<span style="color: red">*</span></label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>


                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
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
