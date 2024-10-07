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
                       <h1>Country Blog</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Country Blog</li>
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
                           <a href="{{route('admin.country-blog.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.country-blog.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('PUT')
                               <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>Title <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                 <label>Country <span style="color: red">*</span> </label>
                                 <select name="country_id" class="form-control" required>
                                     <option value="" disabled selected>--Select Country--</option>
                                     @foreach ($countries as $item)
                                         <option value="{{$item->id}}" {{$item->id == $data->country_id?'selected':''}}>{{$item->name}}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <div class="col-md-12 mt-2">
                                <label>Old Image </label><br>
                                <img src="{{asset($data->image)}}" width="50%"></img>
                            </div>
                             <div class="col-md-12 mt-2">
                                 <label>Image <span style="color: red">*</span></label>
                                 <input type="file" class="form-control" name="image">
                             </div>
                             <div class="col-md-12 mt-2">
                                 <label>Description</label>
                                 <textarea type="text" id="summernote" class="form-control" name="description" placeholder="Meta Description">{{$data->description}}</textarea>
                             </div>
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" {{$data->status ==1 ?'selected':''}}>Active</option>
                                        <option value="0" {{$data->status ==0?'selected':''}}>Inactive</option>
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
