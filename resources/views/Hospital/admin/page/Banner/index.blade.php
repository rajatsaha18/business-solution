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
                           <form action="{{route('admin.hospital-update.banner')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               {{-- <?php  
                                if($data ==)
                               
                               ?> --}}
                               
                
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner one Image</label><br>
                                    @if (isset($data->banner_one))
                                    <img src="{{asset($data->banner_one)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner one Image</label>
                                    <input type="file" class="form-control" name="banner_one">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Banner one Link</label>
                                    <input type="text" class="form-control" value="{{isset($data->banner_one_link)? $data->banner_one_link:''}}" name="banner_one_link">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Two Image</label><br>
                                    @if (isset($data->banner_two))
                                    <img src="{{asset($data->banner_two)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Two Image</label>
                                    <input type="file" class="form-control" name="banner_two">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Banner two Link</label>
                                    <input type="text" class="form-control" value="{{isset($data->banner_two_link)? $data->banner_two_link :''}}" name="banner_two_link">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Three Image</label><br>
                                    @if (isset($data->banner_three))
                                    <img src="{{asset($data->banner_three)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Three Image</label>
                                    <input type="file" class="form-control" name="banner_three">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Banner three Link</label>
                                    <input type="text" class="form-control"value="{{isset($data->banner_three_link)? $data->banner_three_link :''}}" name="banner_three_link">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Four Image</label><br>
                                    @if (isset($data->banner_four))
                                    <img src="{{asset($data->banner_four)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif                                        
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Four Image</label>
                                    <input type="file" class="form-control" name="banner_four">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Banner four Link</label>
                                    <input type="text" class="form-control" value="{{isset($data->banner_four_link)?$data->banner_four_link:''}}" name="banner_four_link">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Five Image</label><br>
                                    @if (isset($data->banner_five))
                                    <img src="{{asset($data->banner_five)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif                                        
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Five Image</label>
                                    <input type="file" class="form-control" name="banner_five">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Banner five Link</label>
                                    <input type="text" class="form-control" value="{{isset($data->banner_five_link)?$data->banner_five_link:''}}" name="banner_five_link">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Six Image</label><br>
                                    @if (isset($data->banner_six))
                                    <img src="{{asset($data->banner_six)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif                                        
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner six Image</label>
                                    <input type="file" class="form-control" name="banner_six">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Banner six Link</label>
                                    <input type="text" class="form-control" value="{{isset($data->banner_six_link)?$data->banner_six_link:''}}" name="banner_six_link">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Old Banner Seven Image</label><br>
                                    @if (isset($data->banner_seven))
                                    <img src="{{asset($data->banner_seven)}}" style="width:250px;hight:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif                                        
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Banner Seven Image</label>
                                    <input type="file" class="form-control" name="banner_seven">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Banner seven Link</label>
                                    <input type="text" class="form-control"value="{{isset($data->banner_seven_link)?$data->banner_seven_link:''}}" name="banner_seven_link">
                                </div>
                              
                            
                                <!-- <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" {{(isset($data->status)) == '1'?'selected':''}} selected>Active</option>
                                        <option value="0"  {{(isset($data->status)) == '0'?'selected':''}}>Inactive</option>
                                    </select>
                                </div> -->
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
