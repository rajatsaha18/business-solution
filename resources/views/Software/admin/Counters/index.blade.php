@extends('admin.layouts.app')
@section('title')
<title>{{ config('app.name', 'Laravel') }} | Counters</title>
@endsection
@section('content')
{{-- @dd($data) --}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Counters</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Counters</li>
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
                        <h3 class="card-title">Counters</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.counters.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-lg-flex ">
                                <div class="col-md-6 mt-2">
                                    <label>Title-1</label>
                                    <input type="text" class="form-control" value="{{$data->title1 ?? ''}}" name="title1">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Number-1</label>
                                    <input type="text" class="form-control" value="{{$data->number1 ?? ''}}" name="number1">
                                </div>
                            </div>

                            <div class="d-lg-flex ">
                                <div class="col-md-6 mt-2">
                                    <label>Title-2</label>
                                    <input type="text" class="form-control" value="{{$data->title2 ?? ''}}" name="title2">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Number-2</label>
                                    <input type="text" class="form-control" value="{{$data->number2 ?? ''}}" name="number2">
                                </div>
                            </div>

                            <div class="d-lg-flex ">
                                <div class="col-md-6 mt-2">
                                    <label>Title-3</label>
                                    <input type="text" class="form-control" value="{{$data->title3 ?? ''}}" name="title3">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Number-3</label>
                                    <input type="text" class="form-control" value="{{$data->number3 ?? ''}}" name="number3">
                                </div>
                            </div>

                            <div class="d-lg-flex ">
                                <div class="col-md-6 mt-2">
                                    <label>Title-4</label>
                                    <input type="text" class="form-control" value="{{$data->title4 ?? ''}}" name="title4">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label>Number-4</label>
                                    <input type="text" class="form-control" value="{{$data->number4 ?? ''}}" name="number4">
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