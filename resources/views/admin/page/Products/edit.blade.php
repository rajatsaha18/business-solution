@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Page</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <style>

            .product_images{
                position: relative;
                width:100%;
                height:100%;
            }
            .product_delete{
                position: absolute;
                top:0;
                width:100%;
                height:100%;
            }
        </style>
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
                           <form action="{{route('admin.product.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('patch')
                                <div class="col-md-12 mt-2">
                                    <label>Title <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$data->title}}" name="title" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Category Id <span style="color: red">*</span> </label>
                                    <select name="category_id" id="" class="form-control category" required>
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}" {{$item->id == $data->category_id?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>SubCategory Id  </label>
                                    <select name="sub_category_id" id="" class="form-control subcategory">
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($subcategories as $item)
                                            <option value="{{$item->id}}" {{$item->id == $data->sub_category_id?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>SubSubCategory Id  </label>
                                    <select name="sub_sub_category_id" id="" class="form-control subsubcategory">
                                        <option value="" selected disabled>--Select--</option>
                                        @foreach ($subsubcategories as $item)
                                            <option value="{{$item->id}}" {{$item->id == $data->sub_sub_category_id?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Brand</label>
                                    <input type="text" name="brand" class="form-control" value="{{$data->brand}}" placeholder="Brand Name"></input>


                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Model</label>
                                    <input type="text" name="origin" class="form-control" value="{{$data->origin}}" placeholder="Model"></input>


                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Assembly</label>
                                    <input type="text" name="assembly" class="form-control" value="{{$data->assembly}}" placeholder="Assembly"></input>


                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Short Description<span style="color: red">*</span></label>
                                   <textarea type="text" class="form-control"  name="short_description">{{$data->short_description}}</textarea>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Long Description<span style="color: red">*</span></label>
                                   <textarea class="form-control summernote"  name="long_description">{{$data->long_description}}</textarea>

                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Price</label>
                                   <input type="number" class="form-control" value="{{$data->price}}" name="price">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Buying Price</label>
                                   <input type="number" class="form-control" value="{{$data->buying_price}}"name="buying_price">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Selling Price</label>
                                   <input type="number" class="form-control" name="selling_price" value="{{$data->selling_price}}">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title </label>
                                   <input type="text" class="form-control" name="meta_title" value="{{$data->meta_title}}">

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description </label>
                                   <textarea type="text" class="form-control"  name="meta_description">{{$data->meta_description}}</textarea>

                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Image</label><br>
                                    <img src="{{asset($data->frontend_image)}}" style="width:250px;height:150px;object-fit:cover"></img>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Frontend Image <span style="color: red">*</span></label>
                                    <input type="file" class="form-control" name="frontend_image">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Product Catalog (PDF*)</label>
                                    <input type="file" class="form-control" name="product_catalog">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Product Images</label><br>
                                    <div class="row">
                                       @if (count($productimages)!=0)
                                       @foreach ($productimages as $productimage)
                                       <div class="col-md-4 mb-4 mt-4 product_images">
                                           <div class="product_image">
                                               <img src="{{ URL::to('/') }}/uploads/product_images/{{ $productimage->image }}" style="width:250px;height:150px;object-fit:cover"></img>
                                           </div>
                                           <div class="product_delete">
                                               {{-- <button class="btn btn-danger btn-sm" type="button" onclick="deleteData({{ $productimage->id }})">
                                                   <i class="fa fa-trash"></i>
                                               </button> --}}
                                               <a class="btn btn-danger btn-sm"   onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('admin.product-images.delete',$productimage->id)}}"><i class="fa fa-trash"></i></a>
                                               {{-- <form id="delete-form-{{$productimage->id}}" action="{{ route('admin.product-images.destroy', $productimage->id) }}" method="POST" style="display: none;">
                                                   @csrf
                                                   @method('DELETE')
                                               </form> --}}
                                           </div>
                                       </div>
                                       @endforeach
                                        @else
                                        <h6 class="text-danger text-center m-3">No Product Image has been added</h6>
                                       @endif

                                    </div>
                                <div>
                                    <label>Upload Multiple Product Image</label>
                                    <input type="file" class="form-control" name="image[]" multiple>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Featured Product</label>
                                    <select name="featured_product" class="form-control" >
                                        <option value="1" {{$data->featured_product == '1'?'selected':''}}>Yes</option>
                                        <option value="0" {{$data->featured_product == '0'?'selected':''}}>No</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Status</label>
                                    <select name="status" class="form-control" >
                                        <option value="1" {{$data->status == '1'?'selected':''}}>Active</option>
                                        <option value="0" {{$data->status == '0'?'selected':''}}>Inactive</option>
                                    </select>
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
           </div>
       </section>
   </div>
  <!-- /.content-wrapper -->
@endsection
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
