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
                       <h1>Banner</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Banner</li>
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
                           <h3 class="card-title">Banner</h3>
                           
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.hospital-banner.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                               
                
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner one Image</label><br>
                                    <img src="{{ URL::to('/') }}{{ $data->banner_one}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner one Image</label>
                                    <input type="file" class="form-control" name="banner_one">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Two Image</label><br>
                                    <img src="{{ URL::to('/') }}{{ $data->banner_two}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Two Image</label>
                                    <input type="file" class="form-control" name="banner_two">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Three Image</label><br>
                                    <img src="{{asset($data->banner_three)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Three Image</label>
                                    <input type="file" class="form-control" name="banner_three">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Four Image</label><br>
                                    <img src="{{asset($data->banner_four)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Four Image</label>
                                    <input type="file" class="form-control" name="banner_four">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Five Image</label><br>
                                    <img src="{{asset($data->banner_five)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Five Image</label>
                                    <input type="file" class="form-control" name="banner_five">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Six Image</label><br>
                                    <img src="{{asset($data->banner_six)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner six Image</label>
                                    <input type="file" class="form-control" name="banner_six">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Seven Image</label><br>
                                    <img src="{{asset($data->banner_seven)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Seven Image</label>
                                    <input type="file" class="form-control" name="banner_seven">
                                </div>
                              
                              
                                
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" {{$data->status == '1'?'selected':''}}>Active</option>
                                        <option value="0"  {{$data->status == '0'?'selected':''}}>Inactive</option>
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
