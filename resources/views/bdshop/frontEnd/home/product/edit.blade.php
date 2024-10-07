@extends('bdshop.frontEnd.layouts.master')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                @include('bdshop.frontEnd.home.sidebar')
                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div
                        class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4>Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
                            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($categories as $item)
                            <a href="{{route('info-sub-category',$item->slug)}}" class="text-center">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="div_style3 p-3">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                <div class="mainbody-grid div_style4 pt-0">
                    <h1>Add Product Form</h1>
                </div>
                <div class="main_content2">
                    </div>
                    <div class="clearfix"></div>

                    <form class="form-horizontal" action="{{route('user.product-info.update',$details->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <table class="table-responsive table-bordered">
                            <tbody>
                                <tr class="">
                                    <td class="text-right">Category Name:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <select name="product_cat_id" id="" class="form-control" required>
                                            <option value="" selected disabled>--select--</option>
                                            @foreach ($categories as $item)
                                                <option value="{{$item->id}}" @php if ($details['product_cat_id'] == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                            @endforeach

                                        </select>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Sub Category Name:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <select name="product_sub_cat_id" id="" class="form-control" required>
                                            <option value="" selected disabled>--select--</option>
                                            @foreach ($sub_categories as $item)
                                                <option value="{{$item->id}}" @php if ($details['product_sub_cat_id'] == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Product Name:<span class="sub_ttl_yellow">*</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="title"
                                            id="organization" placeholder="Enter Your Product Name" value="{{$details->title}}"
                                            required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Product Code:<span class="sub_ttl_yellow">(If any)</span>
                                    </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="product_code"
                                            id="organization" placeholder="Enter Your Product Code(If any)" value="{{$details->product_code}}">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Brand:</td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="brand" id="address"
                                            placeholder="Enter Brand" value="{{$details->brand}}" >
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Origin: </td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="origin" id="address"
                                            placeholder="Enter Origin" value="{{$details->origin}}">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Short Info:</td>
                                    <td class="text-left">
                                        <input class="form-control" type="text" name="short_description" id="address"
                                            placeholder="Enter Short Info" value="{{$details->short_description}}">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Product Description:</td>
                                    <td class="text-left">
                                        <textarea id="summernote" type="text" name="long_description">{!! $details->long_description !!}</textarea>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Price Type:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <select name="price_type" id="" class="form-control">
                                            <option value="" disabled selected>--Select Type--</option>
                                            <option value="Fixed" @php if ($details['price_type'] == 'Fixed') { echo "selected"; } @endphp>Fixed</option>
                                            <option value="Negotiable" @php if ($details['price_type'] == 'Negotiable') { echo "selected"; } @endphp>Negotiable</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Price:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="number" name="price" id="address"
                                            placeholder="Enter Price" value="{{$details->price}}" required="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Product Type:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <select name="product_type_id" id="product_type" class="form-control">
                                            <option value="">--Select Type--</option>
                                            @foreach ($product_type as $item)
                                                <option value="{{$item->id}}" @php if ($details['product_type_id'] == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td class="text-right">Product Image:<span class="sub_ttl_yellow">*</span> </td>
                                    <td class="text-left">
                                        <input class="form-control" type="file" name="image" id="address" value="">
                                        <span class="text-danger"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div>
                                            <input type="submit" class="btn btn-info text-light"
                                                value="SUBMIT" name="Add" id="Add">
                                            <input type="reset" class="btn btn-warning text-light" value="Reset" name="B2">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-2">
            <div class="row">

                <!--ad right-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ad_products.png" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ha9.png" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ha2.png" alt=""></a>
                </div>
                <div class="clearfix"></div>
                <!--ad right-->

            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>
@endsection
@section('js')
<!--jQuery [ REQUIRED ]-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height : 150
    });
</script>
@endsection
