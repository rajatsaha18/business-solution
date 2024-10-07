@extends('admin.layouts.app')

@section('content')

<style>
    /* Optional custom styling */
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin-bottom: 0;
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin: 0;
    opacity: 0;
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}

</style>
    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>About</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">About</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">About</h3>
                            <a href="{{route('admin.about.index')}}" class="btn btn-outline-info float-right" >
                                <i class="fa-solid fa-backward"></i> Back
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.about.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" id="summernote" class="form-control" placeholder="Description"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="imageUpload" class="form-label">Upload Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="form-control" id="imageUpload" aria-describedby="imageHelp">
                                        <label class="custom-file-label" for="imageUpload">Choose file</label>
                                    </div>
                                    <small id="imageHelp" class="form-text text-muted">Please upload an image file (JPG, PNG).</small>
                                </div>

                                {{-- <div class="form-group mb-3">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control"/>
                                </div> --}}
                                <div class="form-group mb-3">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" selected>Active</option>
                                        <option value="0">InActive</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-outline-success" value="Save"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


