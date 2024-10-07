@extends('admin.layouts.app')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container--default .select2-selection--single {
            height: 39px;
        }
    </style>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Product</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Product</li>
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
                           <h3 class="card-title">Product</h3>
                           <a href="{{route('admin.product.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">
                                   <div class="col-md-12 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" onkeyup="PermalinkHandler(this.value)" name="title" placeholder="Title" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Slug <span style="color: red">*</span> </label>
                                       <input type="text" onkeyup="CustomPermalinkHandler(this.value)" class="form-control" name="slug" id="permalink_s" placeholder="Slug" required>
                                   </div>
                                   <div class="col-md-6 mt-2">
                                    <label>Brand </label>
                                     <input type="text" name="brand" class="form-control">
                                </div>
                                   <div class="col-md-6 mt-2">
                                        <label>Category <span style="color: red">*</span> </label>
                                        <select name="product_cat_id" class="form-control js-example-basic-single" onchange="GetSubCat(this.value)">
                                            <option value="" disabled selected>--Select Category--</option>
                                            @foreach ($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Sub Category <span style="color: red">*</span> </label>
                                        <select name="product_sub_cat_id" id="sub_category" class="form-control">

                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Product Type <span style="color: red">*</span> </label>
                                        <select name="product_type_id" id="category_id" class="form-control">
                                            <option value="" disabled selected>--Select Category--</option>
                                            @foreach ($product_type as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Price Type <span style="color: red">*</span> </label>
                                        <select name="price_type" id="category_id" class="form-control">
                                            <option value="" disabled selected>--Select Price Type--</option>
                                            <option value="Fixed">Fixed</option>
                                            <option value="Negotiable">Negotiable</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label>Price</label>
                                        <input type="number" class="form-control" name="price" placeholder="price">
                                    </div>
                                   <div class="col-md-6 mt-2">
                                       <label>Image <span style="color: red">*</span></label>
                                       <input type="file" class="form-control" name="image" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Short Description</label>
                                    <textarea type="text" class="form-control" name="short_description" placeholder="Meta Description"></textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Long Description</label>
                                    <textarea type="text" id="summernote" class="form-control" name="long_description" placeholder="Meta Description"></textarea>
                                </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title" placeholder="Meta Title">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Meta Description</label>
                                        <textarea type="text" class="form-control summernote" name="meta_description" placeholder="Meta Description"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Meta keyword</label>
                                        <input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keywords">
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();
    function PermalinkHandler(str)
    {
         token = $("input[name='_token']").val();
         data = {
                "_token": token,
                "str": str
            };

            $.ajax({
                url: "{{route('admin.slug.create')}}",
                type: "post",
                data:data,
                success: function (response) {
                    $('#permalink_s').val(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

    }

    function CustomPermalinkHandler(title){
        if (/\s/.test(title)) {
            title = title.replace(/\s+/g, '-');
        }
        document.getElementById("perma_link").innerHTML = title;
        document.getElementById("permalink").value=title;
    }
</script>
@endsection
