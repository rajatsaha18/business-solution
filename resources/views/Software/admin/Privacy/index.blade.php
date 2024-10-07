@extends('admin.layouts.app')
@section('title')
<title>{{ config('app.name', 'Laravel') }} | Privacy & Policy</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains Privacy & Policy content -->
<div class="content-wrapper">
    <!-- Content Header (Privacy & Policy header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Privacy & Policy</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Privacy & Policy</li>
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
                        <h3 class="card-title">Privacy & Policy</h3>
                        <a href="{{route('admin.privacies.index')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.privacies.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>Title <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="Name" required>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text" id="editor" class="form-control" name="description" placeholder="Description">{!! $data->description !!}</textarea>
                                </div>

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
@section('script')
<script>
    CKEDITOR.replace('editor');
    $(document).on('click', '.add', function() {
        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="benefits[]" class="form-control"/></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
        $('#productImage').append(html);
    });
    $(document).on('click', '.remove', function() {
        $(this).closest('tr').remove();
    });
</script>
@endsection