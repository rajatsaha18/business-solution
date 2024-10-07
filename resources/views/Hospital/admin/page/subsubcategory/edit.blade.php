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
                    <h1>SubSubCategories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">SubSubCategories</li>
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
                        <h3 class="card-title">SubSubCategory</h3>
                        <a href="{{route('admin.hospital-sub-sub-categories.index')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.hospital-sub-sub-categories.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="col-md-12 mt-2">
                                <label>Name <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>SubCategory <span style="color: red">*</span></label>
                                <select name="subcategory_id" id="subcategory_id" class="form-control" required>
                                    <option value="" selected disabled>--Select--</option>
                                    @foreach ($subcategories as $item)
                                    <option value="{{$item->id}}" {{$item->id == $data->hospital_sub_category_id ?'selected':''}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Meta Title <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" value="{{$data->meta_title}}">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Meta Description <span style="color: red">*</span> </label>
                                <textarea type="text" class="form-control" name="meta_description" placeholder="Meta Description">{{$data->meta_description}}</textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Status</label>
                                <select name="status" class="form-control">
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