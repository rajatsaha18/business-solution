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
                       <h1>Site Setting</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Site Setting</li>
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
                           <form action="{{route('admin.hospital-sitesetting.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                
                                <div class="col-md-12 mt-2">
                                    <label>Old Logo</label><br>
                                    @if (isset($data->logo))
                                    <img src="{{asset($data->logo)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" name="logo">
                                </div>
                
                                <div class="col-md-12 mt-2">
                                    <label>Old FavIcon</label><br>
                                    @if (isset($data->fav_icon))
                                    <img src="{{asset($data->fav_icon)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>FavIcon</label>
                                    <input type="file" class="form-control" name="fav_icon">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>About Us</label>
                                    <textarea type="text" class="form-control" name="about_us">{{isset($data->about_us)?$data->about_us:''}}</textarea>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Address</label>
                                    <textarea type="text" class="form-control" name="address">{{isset($data->address) ? $data->address:''}}</textarea>
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{isset($data->email)?$data->email:''}}" name="email">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" value="{{isset($data->phone)?$data->phone:''}}" name="phone">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" value="{{isset($data->facebook)?$data->facebook:''}}" name="facebook">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control" value="{{isset($data->linkedin)?$data->linkedin:''}}" name="linkedin">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Google</label>
                                    <input type="text" class="form-control" value="{{isset($data->google)?$data->google:''}}" name="google">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" value="{{isset($data->twitter)?$data->twitter:''}}" name="twitter">
                                </div>
                                <h5 class="ml-2 mt-2 mb-2 text-bold">Add Google Map</h5>
                                <div class="col-md-12 mt-2">
                                    <label>Google Map</label>
                                    <textarea type="text" class="form-control" name="google_map">{{isset($data->google_map)?$data->google_map:''}}</textarea>
                                </div>
                                
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" value="{{isset($data->meta_title)?$data->meta_title:''}}" name="meta_title">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description</label>
                                    <textarea type="text" class="form-control" name="meta_description">{{isset($data->meta_description)?$data->meta_description:''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" value="{{isset($data->meta_keyword)?$data->meta_keyword:''}}" name="meta_keyword">
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
