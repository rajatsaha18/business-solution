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
                    <h1>Halal Investment Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Halal Investment Setting</li>
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
                        <h3 class="card-title">Halal Investment Setting</h3>
                        <!-- <a href="{{route('admin.halal-investment-setting.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a> -->
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.halal-investment-setting.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">


                                <div class="col-md-12 mt-2">
                                    <label>Mission</label>
                                    <textarea type="text" id="editor1" name="mission" class="form-control summernote">{!!  $data->mission ?? ''   !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Mission Image <span style="color: red">*</span> </label>
                                    @if(isset($businessSiteSetting->mission_image))
                                    <img src="{{asset($businessSiteSetting->mission_image)}}" alt="mission_image" width="100px">

                                    @endif
                                    <input type="file" class="form-control" name="mission_image" placeholder="Name">

                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Vision</label>
                                    <textarea type="text" id="editor2" name="vision" class="form-control summernote">{!!   $data->vision ?? ''    !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Vision Image <span style="color: red">*</span></label>
                                    @if (isset($businessSiteSetting->vision_image))
                                    <img src="{{asset($businessSiteSetting->vision_image)}}" alt="vision_image" width="100px">

                                    @endif
                                    <input type="file" class="form-control" name="vision_image">
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Terms of Use</label>
                                    <textarea type="text" name="terms_of_use" id="editor3" class="form-control summernote">{!!  $data->terms_of_use ?? ''    !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Privacy Policy</label>
                                    <textarea type="text" name="privacy_policy" id="editor4" class="form-control summernote">{!!  $data->privacy_policy ?? ''      !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Address</label>
                                    <textarea type="text" name="address" id="editor5" class="form-control">{{$data->address ?? ''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Map</label>
                                    <textarea type="text" name="map" class="form-control">{{$data->map ?? ''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{$data->email??''}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{$data->phone??''}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Financed</label>
                                    <input type="text" name="financed" class="form-control" value="{{$data->financed ?? '' }}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Investment</label>
                                    <input type="text" name="investment" class="form-control" value="{{$data->investment ?? '' }}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Repayment Completed</label>
                                    <input type="text" name="repayment_completed" class="form-control" value="{{$data->repayment_completed ?? '' }}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" value="{{$data->meta_title ?? '' }}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description</label>
                                    <textarea type="text" name="meta_description" id="editor6" class="form-control">{{$data->meta_description ?? ''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Keywords</label>
                                    <input type="text" name="meta_keywords" class="form-control" value="{{$data->meta_keywords ?? ''}}">
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

<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
    CKEDITOR.replace('editor5');
    CKEDITOR.replace('editor6');
</script>
@endsection