@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Advertise rate category</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Advertise rate category</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Advertise rate category</li>
                       </ol>
                   </div>
               </div>
           </div>
       </section>
       <section class="content">
           <div class="row">
               <div class="col-6 offset-md-3">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="card-title">Advertise rate category</h3>
                           <a href="{{route('admin.advertise-rate.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.advertise-rate.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               <div class="row">

                                   <div class="col-md-12 mt-2">
                                        <label>Select Category <span style="color: red">*</span> </label>
                                        <select name="advertise_category_id" id="category_id" class="form-control">
                                            <option value="" disabled selected>--Select Category--</option>
                                            @foreach ($categories as $item)
                                                <option value="{{$item->id}}" @php if ($data['advertise_category_id'] == $item->id) { echo "selected"; } @endphp>{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Page Title</label>
                                    <input type="text" class="form-control" value="{{$data->page_title}}" name="page_title" placeholder="Page Title">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label> USD Rate</label>
                                        <input type="text" class="form-control" name="usd_rate" value="{{$data->usd_rate}}" placeholder="USD Rate">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label> BDT Rate</label>
                                        <input type="text" class="form-control" name="bdt_rate" value="{{$data->bdt_rate}}" placeholder="BDT Rate">
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
