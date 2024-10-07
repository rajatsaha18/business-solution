@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Area</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Area</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Area</li>
                       </ol>
                   </div>
               </div>
           </div>
       </section>
       <section class="content">
           <div class="row">
               <div class="col-6 offset-md-3">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="card-title">Area</h3>
                           <a href="{{route('admin.shop-area.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.shop-area.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">
                                   <div class="col-md-12 mt-2">
                                       <label>District</label>
                                       <select name="district_id" class="form-control" required>
                                           <option value="" selected disabled>--Select--</option>
                                           @foreach ($districts as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Name <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
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
