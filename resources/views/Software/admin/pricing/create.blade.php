@extends('admin.layouts.app')
@section('title')
    <title>{{ config('app.name', 'Laravel') }} | Pricing</title>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Pricing</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                           <li class="breadcrumb-item active">Pricing</li>
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
                           <h3 class="card-title">Pricing</h3>
                           <a href="{{route('admin.pricing-plan.index')}}" class="btn btn-primary float-right" >
                                Back
                           </a>
                       </div>
                       <div class="card-body">
                           <form action="{{route('admin.pricing-plan.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="row">

                                   <div class="col-md-12 mt-2">
                                       <label>Title <span style="color: red">*</span> </label>
                                       <input type="text" class="form-control" name="title" placeholder="Title" required>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Pricing Category</label>
                                       <select name="category_id" class="form-control" required>
                                        <option value="">--Select--</option>
                                           @foreach($pricingcategories as $item)
                                           <option value="{{$item->id}}">{{$item->title}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                       <label>Type</label>
                                       <select name="type" class="form-control" required>
                                           <option value="">--Select Type</option>
                                           <option value="regular">Regular</option>
                                           <option value="monthly">Monthly</option>
                                           <option value="yearly">Yearly</option>
                                       </select>
                                   </div>
                                   <div class="col-md-12 mt-2">
                                    <label>Price</label>
                                    <input type="number" class="form-control" name="price" placeholder="Price" required>
                                    </div>
                                   
                                    <div class="col-sm-6">
                                        <label>Features</label>
                                        <table class="table table-striped" id="productImage">
                                            <thead>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" name="features[]" ></td>
                                                <td> <button id="add"  type="button" class="btn btn-success add"><i class="fa fa-plus-circle"></i> </button></td>
                                            </tr>
                                            <tr></tr>
                                            </tbody>
                                        </table>
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
    $(document).on('click', '.add', function(){
                var html = '';
                html += '<tr>';
                html += '<td><input type="text" name="features[]" class="form-control"/></td>';
                html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus-circle"></span></button></td></tr>';
                $('#productImage').append(html);
            });
            $(document).on('click', '.remove', function(){
                $(this).closest('tr').remove();
            });

</script>
@endsection
