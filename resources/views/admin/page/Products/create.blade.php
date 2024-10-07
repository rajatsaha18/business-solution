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
               <div class="col-10 offset-md-1">
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
                                <div class="col-md-12 mt-2">
                                    <label>Title <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="title" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Category Id <span style="color: red">*</span> </label>
                                    <select name="category_id" id="" class="form-control category" required>
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>SubCategory Id  </label>
                                    <select name="sub_category_id" id="" class="form-control subcategory">
                                        {{-- <option value="" selected disabled>--Select--</option>
                                        @foreach ($subcategories as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                  

                                <div class="col-md-12 mt-2">
                                    <label>Brand</label>
                                    <input type="text" name="brand" class="form-control" placeholder="Brand Name"></input>


                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Model</label>
                                    <input type="text" name="origin" class="form-control" placeholder="Model"></input>


                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Assembly</label>
                                    <input type="text" name="assembly" class="form-control" placeholder="Assembly"></input>


                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Short Description <span style="color: red">*</span></label><br>
                                    <textarea name="short_description" type="text" class="form-control" required></textarea>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Long Description <span style="color: red">*</span></label><br>
                                    <textarea name="long_description" type="text" class="form-control summernote"></textarea>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Price</label>
                                   <input type="number" class="form-control" name="price">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Buying Price </label>
                                   <input type="number" class="form-control" name="buying_price">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Selling Price </label>
                                   <input type="number" class="form-control" name="selling_price">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title </label>
                                   <input type="text" class="form-control" name="meta_title">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description </label>
                                   <textarea type="text" class="form-control" name="meta_description"></textarea>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image <span style="color: red">*</span></label>
                                    <input type="file" class="form-control" name="frontend_image" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Product Catalog (PDF*)</label>
                                    <input type="file" class="form-control" name="product_catalog">
                                </div>
                                <div>
                                    <label>Upload Multiple Product Image</label>
                                    <input type="file" class="form-control" name="image[]" multiple>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Featured Product</label>
                                    <select name="featured_product" class="form-control" >
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
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
  @section('script')
  <script>

          //category change
          $(document).on('change', '.category', function() {
              let cat_id = $(this).val();
              //  alert(cat_id)
              // $('.subcategory').html('');
              $.ajax({
                  method: "GET",
                  url:"{{ route('admin.find.sub.category') }}",
                  data:{'id':cat_id},
                  dataType: 'json', //return data will be json
                  success: function(data) {
                    //   alert(data)
                      $('.subcategory').html('<option value="" selected disabled>--select--</option>');
                      for (let i = 0; i < data.length; i++) {
                          $('.subcategory').append('<option value="' + data[i]
                              .id + '">' + (data[i].name) + '</option>');
                      }
                  },
                  error: function() {
                  }
              });
          });
          //subcategory change
           $(document).on('change', '.subcategory', function() {
              let cat_id = $(this).val();
              //  alert(cat_id)
              // $('.subcategory').html('');
              $.ajax({
                  method: "GET",
                  url:"{{ route('admin.find.sub.sub.category') }}",
                  data:{'id':cat_id},
                  dataType: 'json', //return data will be json
                  success: function(data) {
                    //   alert(data)
                      $('.subsubcategory').html('<option value="" selected disabled>--select--</option>');
                      for (let i = 0; i < data.length; i++) {
                          $('.subsubcategory').append('<option value="' + data[i]
                              .id + '">' + (data[i].name) + '</option>');
                      }
                  },
                  error: function() {
                  }
              });
          });
  </script>
  @endsection
@endsection
