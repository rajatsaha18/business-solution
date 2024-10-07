@extends('Hospital.frontend.layouts.app')
@section('content')
<!-- page-title -->
<style>
    @media(max-width:600px) {
        .head-cat {
            margin-top: 60px !important;
        }
    }

    .videoSize {
        aspect-ratio: 16/9;
    }
</style>
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center" style="min-height:40px!important;padding-top:30px!important">
                    <div class="page-title-heading">
                        <h1 class="title">Video's</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Video's</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center text-light pt-2 pb-2" style="background-color:#1FA8DE">Video's</h3>
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
                            <div class="col-lg-12 content-area">

                                <div class="row" style="padding-top:20px!important">
                                    @foreach ($videos as $item)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12" style="margin-bottom:40px" data-wow-delay=".3s">
                                        <div class="doctor-item">
                                            <div class="doctor-top">
                                                <?php
                                                $youtube = explode('=', $item->video_url);
                                                $ytube = $youtube[1];
                                                ?>
                                                <iframe class="videoSize" src="https://www.youtube.com/embed/{{$ytube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>


                            </div>

                        </div><!-- row end -->



                    </div>
                </section>


            </div>
            <!--team-section end-->


        </div><!--site-main end-->
        @endsection