@extends('Hospital.frontend.layouts.app')
@section('content')
 <!-- page-title -->
 <div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="page-title-heading">
                        <h1 class="title">{{$item->name}}</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#" target="_blank">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">{{$item->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">

<!-- sidebar -->
@inject('carbon', 'Carbon\Carbon')

<section class="sidebar ttm-sidebar-right clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-9 content-area">
                <!-- post -->
                <article class="post ttm-blog-classic clearfix">
                     <!-- post-featured-wrapper -->
                    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                        <div class="ttm-post-featured">
                            <img class="img-fluid" src="{{ URL::to('/') }}/{{ $item->image }}" style="width:100%;" alt="">
                        </div>
                        <div class="ttm-box-post-icon">
                            <i class="ti ti-gallery"></i>
                        </div>
                    </div><!-- post-featured-wrapper end -->
                    <!-- ttm-blog-classic-content -->
                    <div class="ttm-blog-classic-content">
                        <div class="ttm-post-entry-header">
                            <div class="post-meta">
                                <?php 
                               
                                $date=$item->created_at->todatestring();
                                
                                 ?>
                                <span class="post-meta-line"><a href="#" tabindex="0"><i class="fa fa-calendar"></i>{{$carbon::parse($date)->format('M-d-Y')}}</a></span>
                            </div>
                            <div class="post-meta">
                                <span class="post-meta-line"><a href="#" tabindex="0"><i class="fa fa-comment"></i>Comments</a></span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="ttm-box-desc-text">
                                <p>{!! $item->description !!}</p>
                            </div>
                            
                        
                            <h5>{{$item->hits}} Views</h5>
                        </div>
                    </div><!-- ttm-blog-classic-content end -->
                </article><!-- post end -->
            </div>
            <div class="col-lg-3 sidebar-right widget-area">
                
                
              
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- sidebar end -->

</div><!--site-main end-->

@endsection