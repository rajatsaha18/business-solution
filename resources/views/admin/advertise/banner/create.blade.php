@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Advertise Banner</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Advertise Banner</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Advertise Banner</li>
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
                           <h3 class="card-title">Advertise Banner</h3>
                           <a href="{{route('admin.advertise-banner.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.advertise-banner.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">
                                   <div class="col-md-6 mt-2">
                                       <label>Select Category <span style="color: red">*</span> </label>
                                       <select name="advertise_category_id" id="" class="form-control" required>
                                        <option value="" selected disabled>--select--</option>
                                        @foreach ($advertise_category as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    </select>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                        <label>'Select Advertise Placement<span style="color: red">*</span> </label>
                                        <select name="advertise_placement_id" id="" class="form-control" required>
                                            <option value="" selected disabled>--select--</option>
                                            @foreach ($advertise_placement as $item)
                                                <option value="{{$item->id}}">({{$item->advertise_category->title}}){{$item->page_title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Title <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="title" placeholder="Title" required>
                                    </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Image</label>
                                       <input type="file" class="form-control" name="image" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                        <label>Url <span style="color: red">*</span> </label>
                                        <input type="text" class="form-control" name="url" placeholder="https://www.google.com/" required>
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
