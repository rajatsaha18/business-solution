@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | User</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>User</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Edit User</li>
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
                           <h3 class="card-title">User</h3>
                           <a href="{{route('admin.user.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                           <form action="{{route('admin.user.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">

                                   <div class="col-md-12 mt-2">
                                       <label>Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Email <span style="color: red">*</span></label>
                                        <input type="email" class="form-control" value="{{$data->email}}" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Phone <span style="color: red">*</span></label>
                                        <input type="tel" class="form-control" value="{{$data->phone}}" name="phone" placeholder="Phone">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Address</label>
                                        <textarea type="text" class="form-control" name="address" placeholder="Address">{{$data->address}}</textarea>
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
@section('script')

@endsection
