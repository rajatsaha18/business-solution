@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Product</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains Product content -->
    <div class="content-wrapper">
        <!-- Content Header (Product header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Product</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Product</li>
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
                           <h3 class="card-title">Product</h3>
                           <a href="{{route('admin.page.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.page.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>Category <span style="color: red">*</span> </label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}" @if($item->id == $data->category_id) selected @endif>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Name <span style="color: red">*</span> </label>
                                       <input type="text" value="{{$data->name}}" class="form-control" name="name" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>About <span style="color: red">*</span> </label>
                                       <textarea type="text" class="form-control" name="about" placeholder="About">{{$data->about}}</textarea>   
                                    </div>
                                    <div class="col-md-12 mt-2">
                                       <label>Why need It <span style="color: red">*</span> </label>
                                       <textarea type="text" class="form-control" name="why_need_it" placeholder="Why Need It">{{$data->why_need_it}}</textarea>   
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Benifits</label>
                                        <table class="table table-striped" id="productImage">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                @php
                                                   $features = json_decode($data->benefits);
                                                @endphp
                                                @foreach ($features as $item)

                                                <tr>
                                                    <td><input type="text" class="form-control" value="{{$item}}" name="benefits[]" ></td>
                                                </tr>
                                                @endforeach

                                            <tr>
                                                <td> <button id="add"  type="button" class="btn btn-success add"><i class="fa fa-plus-circle"></i> </button></td>
                                            </tr>
                                            <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <img src="{{asset($data->image)}}" alt="" width="120px">
                                    <input type="file" class="form-control" name="image">
                                </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Link</label>
                                    <input type="text" value="{{$data->link}}" class="form-control" name="link" placeholder="https://www.google.com/">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text" id="editor" class="form-control" name="description" placeholder="Description">{!! $data->description !!}</textarea>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Basic Price</label>
                                    <input type="text" class="form-control" value="{{$data->basic_price}}" name="basic_price" placeholder="Basic Price">
                                    
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Advance Price</label>
                                    <input type="text" class="form-control" value="{{$data->advance_price}}" name="advance_price" placeholder="Advance Price">
                                </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" value="{{$data->meta_title}}" name="meta_title" placeholder="Meta Title">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Meta Description</label>
                                        <textarea type="text" class="form-control" name="meta_description" placeholder="Meta Description">{!!$data->meta_description!!}</textarea>
                                    </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Status</label>
                                       <select name="status" class="form-control" >
                                            <option @if($data->status == 1) selected @endif value="1">Active</option>
                                            <option @if($data->status == 0) selected @endif value="0">Inactive</option>
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
