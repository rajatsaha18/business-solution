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
                    <h1>Halal Investment Company</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Halal Investment Company</li>
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
                        <h3 class="card-title">Halal Investment Company</h3>
                        <a href="{{route('admin.halal-investment-company.index')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.halal-investment-company.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">

                                <div class="col-md-12 mt-2">
                                    <label>Company Name <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="company_name" value="{{$data->company_name}}" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>User</label>
                                    <select name="user_id" class="form-control" required>
                                        <option selected disabled>--User Select--</option>
                                        @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->id == $data->user_id ? 'selected':'' }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    @if(!empty($data->image))
                                    <img src="{{asset($data->image)}}" alt="" width="200" height="200">

                                    @endif
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Address</label>
                                    <textarea type="text" class="form-control" name="address">{{$data->address}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Company Type</label>
                                    <input type="text" class="form-control" name="company_type" value="{{$data->company_type}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Short Info</label>
                                    <input type="text" class="form-control" name="short_info" value="{{$data->short_info}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Profit per Annum</label>
                                    <input type="text" class="form-control" name="profit_per_annum" value="{{$data->profit_per_annum}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Profit Period</label>
                                    <input type="text" class="form-control" name="profit_period" value="{{$data->profit_period}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Days Left</label>
                                    <input type="text" class="form-control" name="days_left" value="{{$data->days_left}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Goal</label>
                                    <input type="text" class="form-control" name="goal" value="{{$data->goal}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Raised</label>
                                    <input type="text" class="form-control" name="raised" value="{{$data->raised}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Being Processed</label>
                                    <input type="text" class="form-control" name="being_processed" value="{{$data->being_processed}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Duration</label>
                                    <input type="text" class="form-control" name="duration" value="{{$data->duration}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Min Investment</label>
                                    <input type="text" class="form-control" name="min_investment" value="{{$data->min_investment}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Project ROI</label>
                                    <input type="text" class="form-control" name="project_roi" value="{{$data->project_roi}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Risk Grade</label>
                                    <input type="text" class="form-control" name="risk_grade" value="{{$data->risk_grade}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Repayment</label>
                                    <input type="text" class="form-control" name="repayment" value="{{$data->repayment}}">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control summernote" id="editor1" name="description" placeholder="Description">{!!  $data->description  !!}</textarea>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option @if($data->status == 1) selected @endif value="1">Active</option>
                                        <option @if($data->status == 0) selected @endif value="0">Inactive</option>
                                    </select>
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
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
</script>
@endsection