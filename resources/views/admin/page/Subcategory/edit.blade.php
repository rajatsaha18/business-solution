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
                       <h1>SubCategories</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">SubCategories</li>
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
                           <h3 class="card-title">SubCategory</h3>
                           <a href="{{route('admin.sub-categories.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.sub-categories.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                                <div class="col-md-12 mt-2">
                                    <label>Name <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Category <span style="color: red">*</span></label>
                                    <select name="category_id" id="category_id" class="form-control" required>
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}" {{$item->id == $data->category_id ?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                
                                <div class="col-md-12 mt-2">
                                    <label>Order</label>
                                   <input type="number" value="{{$data->order}}"class="form-control" name="order">
                                    
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image</label><br>
                                    <img src="{{asset($data->image)}}" style="width:250px;height:150px;objecct-fit:contain" ></img>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" value="{{$data->meta_title}}" name="meta_title" placeholder="Meta Title">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description</label>
                                    <textarea type="text" class="form-control"  name="meta_description" placeholder="Meta Description">{{$data->meta_description}}</textarea>
                                </div>
                                
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" {{$data->status == '1'?'selected':''}}>Active</option>
                                        <option value="0" {{$data->status == '0'?'selected':''}}>Inactive</option>
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
