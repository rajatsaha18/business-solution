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
                       <h1>Branch</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Branch</li>
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
                           <h3 class="card-title">Branch</h3>
                           <a href="{{route('admin.branch.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.branch.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                                <div class="col-md-12 mt-2">
                                    <label>Name <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Name" required>
                                </div>
                               
                
                                <div class="col-md-12 mt-2">
                                    <label>Email </label>
                                   <input type="email" class="form-control" value="{{$data->email}}" name="email" placeholder="Email...">
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="{{$data->mobile}}" name="mobile" placeholder="Phone Number ..">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Address</label>
                                    <textarea type="text" class="form-control" name="address" placeholder="Address..">{{$data->address}}</textarea>
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