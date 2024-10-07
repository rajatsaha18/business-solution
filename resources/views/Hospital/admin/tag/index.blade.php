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
                        <h3 class="card-title">Tag</h3>
                        {{-- <a href="{{route('admin.hospital-product.tag')}}" class="btn btn-primary float-right">
                            Add Tag
                        </a> --}}
                        <a href="{{route('admin.hospital-product.create')}}" class="btn btn-primary float-right">
                            Back
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.hospital-product.new')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 mt-2">
                                <label>Tag Name <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" name="tag_name" required>
                            </div>
                            {{-- <div class="col-md-12 mt-2">
                                <label>Status <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" name="status" placeholder="Name" required>
                            </div> --}}
                            

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
            url: "{{ route('admin.hospital-find.sub.category') }}",
            data: {
                'id': cat_id
            },
            dataType: 'json', //return data will be json
            success: function(data) {
                //   alert(data)
                $('.subcategory').html('<option value="" selected disabled>--select--</option>');
                for (let i = 0; i < data.length; i++) {
                    $('.subcategory').append('<option value="' + data[i]
                        .id + '">' + (data[i].name) + '</option>');
                }
            },
            error: function() {}
        });
    });
    //subcategory change
    $(document).on('change', '.subcategory', function() {
        let cat_id = $(this).val();
        //  alert(cat_id)
        // $('.subcategory').html('');
        $.ajax({
            method: "GET",
            url: "{{ route('admin.hospital-find.sub.sub.category') }}",
            data: {
                'id': cat_id
            },
            dataType: 'json', //return data will be json
            success: function(data) {
                //   alert(data)
                $('.subsubcategory').html('<option value="" selected disabled>--select--</option>');
                for (let i = 0; i < data.length; i++) {
                    $('.subsubcategory').append('<option value="' + data[i]
                        .id + '">' + (data[i].name) + '</option>');
                }
            },
            error: function() {}
        });
    });
</script>

<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
</script>
@endsection
@endsection