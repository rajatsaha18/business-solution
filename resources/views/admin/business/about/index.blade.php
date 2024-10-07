@extends('admin.layouts.app')

@section('content')
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">About</h3>
                            <a href="{{route('admin.about.create')}}" class="btn btn-outline-info float-right" >
                                <i class="fas fa-plus"></i> Add About
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Description</th>
                                        <th>Image</th>

                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($abouts as $about)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{!!$about->description!!}</td>
                                            <td><img src="{{asset($about->image)}}" alt="" height="80px" width="90px"></td>

                                            <td>
                                                @if($about->status == 1)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.about.edit',['id' => $about->id])}}" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                                                {{-- <a href="{{route('admin.about.delete',['id' => $about->id])}}" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure Delete This?')"><i class="fa fa-trash"></i></a> --}}

                                            </td>
                                        </tr>
                                    @endforeach
                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


