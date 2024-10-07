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
                       <h1>Page</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Page</li>
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
                           <h3 class="card-title">Page</h3>
                           <a href="{{route('admin.project.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>Category <span style="color: red">*</span> </label>
                                    <select name="project_category_id" id="" class="form-control"required>
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Name <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="name" placeholder="Name" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Client Name <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="client_name" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Website <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="website" placeholder="Website" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Date <span style="color: red">*</span> </label>
                                    <input type="date" class="form-control" name="date" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Tag <span style="color: red">*</span> </label>
                                    <select class="form-control js-example-tokenizer" name="tags[]" multiple="multiple">
                                        @foreach ($tags as $item)
                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                      </select>
                                    {{-- <input type="text" class="form-control" name="tags" placeholder="Name" required> --}}
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Client Address</label>
                                    <textarea type="text" class="form-control" name="client_address" placeholder="Meta Description"></textarea>
                                </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" id="editor" name="description" placeholder=" Description"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <table class="table table-striped" id="productImage">
                                        <thead>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><input type="file" class="form-control" name="project_image[]" ></td>
                                            <td> <button id="add"  type="button" class="btn btn-success add"><i class="fa fa-plus-circle"></i> </button></td>
                                        </tr>
                                        <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                                   <div class="col-md-12 mt-2">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Meta Description</label>
                                        <textarea type="text" class="form-control" name="meta_description" placeholder="Meta Description"></textarea>
                                    </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Status</label>
                                       <select name="status" class="form-control" >
                                           <option value="1" selected>Active</option>
                                           <option value="0">Inactive</option>
                                       </select>
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
    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })
    $(document).on('click', '.add', function(){
                var html = '';
                html += '<tr>';
                html += '<td><input type="file" name="project_image[]" class="form-control" required/></td>';
                html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
                $('#productImage').append(html);
            });
            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
            });

</script>
@endsection

