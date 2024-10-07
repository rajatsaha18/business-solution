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
                       <h1>About Page Setup</h1>
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
                           {{-- <form action="{{route('admin.about-page.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                
                                <div class="col-md-12 mt-2">
                                    <label>About image</label><br>
                                    @if (isset($data->img1))
                                    <img src="{{asset($data->img1)}}" style="width:250px;height:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif
                                    
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>About image</label>
                                    <input type="file" class="form-control" name="img1">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Why choose us image</label><br>
                                    @if (isset($data->img2))
                                    <img src="{{asset($data->img2)}}" style="width:250px;height:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif
                                    
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Why Choose us image</label>
                                    <input type="file" class="form-control" name="img2">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Mission Vision image</label><br>
                                    @if (isset($data->img3))
                                    <img src="{{asset($data->img3)}}" style="width:250px;height:150px;object-fit:contain"></img>
                                    @else
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                    @endif
                                    
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Mission Vision image</label>
                                    <input type="file" class="form-control" name="img3">
                                </div>
                
                                <div class="col-md-12 mt-2">
                                    <label>Title</label>
                                    <textarea type="text" class="form-control" id="editor" name="title">{!! isset($data->title)?$data->title:'' !!}</textarea>
                                </div>
                               
                               
                                <div class="col-md-12 mt-2">
                                    <label>About Us</label>
                                    <textarea type="text" class="form-control" id="editor1" name="about_us">{!! isset($data->about_us)?$data->about_us:'' !!}</textarea>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Why Choose Us</label>
                                    <textarea type="text" class="form-control" id="editor2" name="why_choose_us">{!! isset($data->why_choose_us) ? $data->why_choose_us:'' !!}</textarea>
                                </div>
                               
                                <div class="col-md-12 mt-2">
                                    <label>Mission</label>
                                    <textarea type="text" class="form-control" name="mission">{!! isset($data->mission) ? $data->mission:'' !!}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Vision</label>
                                    <textarea type="text" class="form-control" name="vision">{!!isset($data->vision) ? $data->vision:'' !!}</textarea>
                                </div>
                               
                               
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit">Update</button>
                                    </div>
                                </div>
                           </form> --}}
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
    ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
    ClassicEditor
                                .create( document.querySelector( '#editor1' ) )
                                .then( editor1 => {
                                        console.log( editor1 );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
    ClassicEditor
                                .create( document.querySelector( '#editor2' ) )
                                .then( editor2 => {
                                        console.log( editor2 );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
</script>
@endsection
