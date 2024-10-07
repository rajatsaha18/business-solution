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
                    <h1>Software</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Software</li>
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
                        <h3 class="card-title">Software</h3>
                        <a href="{{route('admin.hospital-software.index')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.hospital-software.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="col-md-12 mt-2">
                                <label>Heading <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" value="{{$data->name}}" name="name" placeholder="Name">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Image</label><br>
                                <img src="{{asset($data->image)}}" style="width:250px;hight:150px;object-fit:contain"></img>

                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Description</label>
                                <textarea class="form-control" id="editor1" name="description">{{$data->description}}</textarea>

                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="software" {{$data->type == 'software'?'selected':''}}>Software</option>
                                    <option value="website" {{$data->type == 'website'?'selected':''}}>Website</option>
                                </select>
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
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
</script>
@endsection