@extends('Hospital.frontend.layouts.app')
@section('content')
<!-- page-title -->
<style>
    .cat-cards .cat-a:hover {
        color: #0089D0 !important;
    }

    .prod-name {
        height: 100px !important;
    }

    @media (max-width: 600px) {
        .cat-cards {
            width: 90% !important;

        }

        .card {
            height: 330px;
        }

        .head-cat {
            margin-top: 60px !important;
        }

        .prod-name {
            height: 130px !important;
        }

        .head-cat {
            margin-top: 60px !important;
        }
    }

    .imageSize {
        aspect-ratio: 9/8;
    }
</style>
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center" style="min-height:40px!important;padding-top:30px!important">
                    <div class="page-title-heading">
                        <h1 class="title">Products</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center  pt-2 pb-2" style="color:white;background-color:#0328AF">All Products</h3>
        <div>
        </div><!-- page-title end-->


        <!--site-main start-->
        <div class="site-main">

            <!--shop-views-section-->
            <div class="site-main">

                <section class="sidebar ttm-sidebar-right clearfix">
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="row ml-4" style="padding-top:20px!important">
                                    @foreach($products as $product)

                                    <div class="col-md-3 cat-cards text-center mb-3">
                                        <a href="{{route('hospital.home.single.product.show',$product->slug)}}">
                                            <div class="card shadow">
                                                <div style="text-align:center;display:block;margin:0 auto">
                                                    <img class="card-img-top imageSize" src="{{asset($product->frontend_image)}}" alt="Card image cap">
                                                </div>

                                                <div class="card-body prod-name" style="padding-top:20px">

                                                    <a href="{{route('hospital.home.single.product.show',$product->slug)}}" class="text-dark cat-a" style="font-size:16px;font-weight:600;">{{$product->title}}</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    @endforeach


                                </div>
                                @if($products_count>16)

                                <div class="pagination-block">
                                    <span class="page-numbers current">{{$products->links("pagination::bootstrap-4")}}</span>

                                </div>



                                @endif


                            </div>

                        </div><!-- row end -->
                    </div>
                </section>


            </div>
            <!--team-section end-->


        </div><!--site-main end-->
        @endsection