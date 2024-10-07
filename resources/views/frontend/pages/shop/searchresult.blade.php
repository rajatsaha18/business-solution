@extends('frontend.layouts.app')
@section('content')
 <!-- page-title -->
 <style>
    
 .cat-cards .cat-a:hover{
        color:#0089D0!important;
    }

    @media (max-width: 600px) {

    .head-cat{
        margin-top:60px!important;
    }
     .card{
        height:330px;
    }
    }
    </style>
 <div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center"  style="min-height:40px!important;padding-top:30px!important">
                    <div class="page-title-heading">
                        <h1 class="title">Product</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="index.html">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Search Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center text-light pt-2 pb-2" style="background-color:#0490D2">{{$name ?? ''}}-{{$category_name->name ?? ''}}</h3>
    <div>
</div><!-- page-title end-->


<!--site-main start-->
<div class="site-main">

<!--shop-views-section-->
<section class="shop-views-section clearfix">
     <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="grid" role="tabpanel">
                    @if(count($products)>0)
                    <div class="row">

                        @foreach($products as $product)

                        <div class="col-md-3 col-sm-6 cat-cards text-center mb-3">
                            <a href="{{route('home.single.product.show',$product->slug)}}">
                            <div class="card pt-2 shadow">
                                <div style="text-align:center;display:block;margin:0 auto">
                                    <img class="card-img-top" src="{{asset($product->frontend_image)}}" style="width:128.67px;height:128.67px;text-align:center;object-fit:contain"alt="Card image cap">
                                </div>

                                <div class="card-body prod-name" style="padding-top:20px">

                                <a href="{{route('home.single.product.show',$product->slug)}}" class="text-dark cat-a" style="font-size:16px;font-weight:600;">{{$product->title}}</a>
                                </div>
                            </div>
                            </a>
                        </div>

                        @endforeach





                      </div>
                    </div>

                    @else

                     <h4 class="text-danger text-center">No Product Found</h4>

                    @endif

                </div>

            </div>
        </div><!-- row end -->
    </div>
</section>
<!--team-section end-->


</div><!--site-main end-->
@endsection
