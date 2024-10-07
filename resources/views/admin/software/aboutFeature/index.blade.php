@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | About Page Feature</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>About Page Feature</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">About Page Feature</li>
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
                           <h3 class="card-title">About Page Feature</h3>
                          
                       </div>
                       <div class="card-body">
                        <form action="{{route('admin.about-feature.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
             
                            
                            
                             <div class="col-md-12 mt-2">
                                 <label>Content</label>
                                 <textarea type="text" class="form-control" id="editor" name="content">{!! isset($data->content)?$data->content:'' !!}</textarea>
                             </div>
             
                           
                            
                             <div class="col-md-12 mt-2">
                                 <label>Meta Title</label>
                                 <input type="text" class="form-control" value="{{isset($data->meta_title)?$data->meta_title:''}}" name="meta_title">
                             </div>
                             <div class="col-md-12 mt-2">
                                 <label>Meta Description</label>
                                 <textarea type="text" class="form-control" name="meta_description">{{ isset($data->meta_description)?$data->meta_description:'' }}</textarea>
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
@section('script')
<script>
    
</script>
@endsection
