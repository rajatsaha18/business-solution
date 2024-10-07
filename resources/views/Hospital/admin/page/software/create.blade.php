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
                        <form action="{{route('admin.hospital-software.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 mt-2">
                                <label>Heading <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>



                            <div class="col-md-12 mt-2">
                                <label>Image<span style="color: red">*</span></label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Description</label>
                                <textarea class="form-control" id="editor1" name="description"></textarea>

                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Type</label>
                                <select name="type" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option value="software">Software</option>
                                    <option value="website">Website</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
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