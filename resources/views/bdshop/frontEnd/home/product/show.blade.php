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

        <div class="col-md-8 col-xs-12 col-sm-12">
            <div class="col-md-12 mainbody-grid div_style4">
                <h1>My Product | {{$details->title}}</h1>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6 text-center border-gray">
                        <img src="{{asset($details->image)}}" alt="{{$details->title}}" title="{{$details->title}}" class="width-max-100">
                        <br/><br/>

                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('user.product-info.edit',$details->id)}}">
                                    <img src="https://www.bdtradeinfo.com/public/assets/images/edit.png" alt="Edit" title="Edit">
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12 col-sm-12 text-product">
                        <div class="row">
                            <div class="col-md-12">
                                <br/><br/>
                                <i class="text-info text-bold">{{$details->category->name}} > {{$details->sub_category->name}}</i>
                                <br/><br/>
                                <h3 class="text-blue">{{$details->title}}</h3><br/>
                            </div>
                            <div class="col-md-2 col-xs-4 col-sm-3 margin-top-15">
                                <i>Price</i>
                            </div>
                            <div class="col-md-10 col-xs-8 col-sm-9 margin-top-15">
                                BDT <strong>{{$details->price}}</strong>
                            </div>
                            <div class="col-md-2 col-xs-4 col-sm-3 margin-top-10 ">
                                <i>Brand</i>
                            </div>
                            <div class="col-md-10 col-xs-8 col-sm-9 margin-top-10">
                                @if($details->brand)
                                {{$details->brand??''}}
                                @else
                                {{$details->brand->name ??''}}
                                @endif
                            </div>
                            @if ($details->origin)
                            <div class="col-md-2 col-xs-4 col-sm-3 margin-top-10 ">
                                <i>Origin</i>
                            </div>
                            <div class="col-md-10 col-xs-8 col-sm-9 margin-top-10">
                                {{$details->origin}}
                            </div>
                            @elseif($details->bd_origin_id)
                            <div class="col-md-2 col-xs-4 col-sm-3 margin-top-10 ">
                                <i>Origin</i>
                            </div>
                            <div class="col-md-10 col-xs-8 col-sm-9 margin-top-10">
                                {{$details->origin}}
                            </div>
                            @endif

                            <div class="col-md-2 col-xs-4 col-sm-3 margin-top-10 ">
                                <i>Price Type</i>
                            </div>
                            <div class="col-md-10 col-xs-8 col-sm-9 margin-top-10">
                                {{$details->price_type}}
                            </div>
                           <div class="col-md-2 col-xs-4 col-sm-3 margin-top-10 ">
                                <i>Product Type</i>
                            </div>
                            <div class="col-md-10 col-xs-8 col-sm-9 margin-top-10">
                                {{$details->product_type->name}}
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-2 col-xs-12 col-sm-3 margin-top-10 ">
                                <i>Short Intro</i>
                            </div>
                            <div class="col-md-10 col-xs-12 col-sm-9 margin-top-10">
                                {{$details->short_description}}
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12 col-sm-12 padding-top-bottom-17 text-product">
                        <br/>
                        <h3 class="text-blue">Description</h3><br/>
                        <p>
                            {!! $details->long_description !!}
                        </p>
                        <br/>
                        <i class="text-info">Viewed <h4>{{$details->click_count}}</h4> times in detail, since {{$details->created_at}}.</i>
                    </div>

                    <table>
                        <tr>
                            <td class="text-center">
                                <a class="btn btn-success" href="{{route('user.product-info.edit',$details->id)}}"> Edit Product</a>
                            </td>
                            <td>
                                <form action="{{route('user.product-info.destroy', $details->id)}}" method="post" onclick="return confirm('Are you sure, you want to delete this Product?')">
                                    @csrf                          <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <br/>

                    <div class="clearfix"></div>
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
