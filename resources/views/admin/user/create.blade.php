@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Client</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Client</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Client</li>
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
                           <h3 class="card-title">Client</h3>
                           <a href="{{route('admin.user.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       {{-- @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        @endif --}}
                       <div class="card-body">
                           <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">
                                   <div class="col-md-12 mt-2">
                                       <label>Owner Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Business  Name <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="business_name" placeholder="Business  Name" required>
                                    </div>
                                   <div class="col-md-6 mt-2">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Address</label>
                                        <textarea type="text" class="form-control" name="address" placeholder="Address"></textarea>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
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
