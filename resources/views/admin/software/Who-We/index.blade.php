@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | About Description</title>
@endsection
@section('content')
{{-- @dd($data) --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>About Description</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">About Description</li>
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
                           <h3 class="card-title">About Description</h3>
                          
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.who-we.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               
                                <div class="col-md-12 mt-2">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{$data->title ?? ''}}" name="title">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text" id="editor" class="form-control " name="description">{!! $data->description?? '' !!}</textarea>
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
