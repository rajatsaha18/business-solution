@extends('Hospital.frontend.layouts.app')
@section('content')
 <!-- page-title -->
 <style>
    .cat-cards .cat-a:hover{
        color:#0089D0!important;
    }
    .prod-name{
        height:100px!important;
     }

    @media (max-width: 600px) {
    .cat-cards{
        width:50%!important;
    }
     .card{
        height:330px;
    }
    .head-cat{
        margin-top:60px!important;
    }
    .prod-name{
        height:130px!important;
     }
     
    }
    </style>
 <div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center" style="min-height:40px!important;padding-top:30px!important">
                    <div class="page-title-heading">
                        <h1 class="title">Services</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center pt-2 pb-2" style="color:white;background-color:#0328AF">All Services</h3>
    <div>
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">

    <section class="sidebar ttm-sidebar-right clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-9 content-area">
                  
                  <div class="row" style="padding-top:20px!important">
                    <h2 class="text-center text-success">Sorry Here Not Add Any Service</h2>


                  </div>
                 {{-- @if($product_count>12)

                <div class="pagination-block">
                    <span class="page-numbers current">{{$products->links("pagination::bootstrap-4")}}</span>

                </div>



                 @endif --}}


                </div>
                {{-- <div class="col-lg-3 sidebar-right widget-area">

                    <aside class="widget widget-categories">
                        <h3 class="widget-title" style="background-color:#1FA8DE">All Categories</h3>
                        <ul>

                            @foreach ($categories as $cat)


                            <li><a href="{{route('show.product.by.category',$cat->slug)}}"target="_blank">{{$cat->name}}</a><span>{{count($cat->product)}}</span></li>

                            @endforeach

                        </ul>
                    </aside>


                </div> --}}
            </div><!-- row end -->
        </div>
    </section>


</div><!--site-main end-->
@endsection
