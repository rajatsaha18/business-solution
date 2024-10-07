@extends('Hospital.frontend.layouts.app')
@section('content')
<meta property="og:url" content="https://businesssolution.com.bd/page-url" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Page Title" />
<meta property="og:description" content="Brief description of the page" />
<meta property="og:image" content="https://businesssolution.com.bd/image.jpg" />
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="page-title-heading">
                        <h1 class="title">{!! $page_details->name !!}</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="{{url('/')}}">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">{!! $page_details->name !!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">
    <style>
        @media(max-width:600px) {
            .ttm-post-featured .ms-img {
                width: 100% !important;
                height: 300px !important;
                object-fit: cover;
            }
        }
    </style>
    <!-- sidebar -->
    <section class="sidebar ttm-sidebar-right clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-12 content-area">
                    <!-- post -->
                    <article class="post ttm-blog-classic clearfix">
                        @if($page_details->image)
                        <!-- post-featured-wrapper -->
                        <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                            <div class="ttm-post-featured">
                                <img class="img ms-img" src="{{asset($page_details->image)}}" style="width:250px;height:250px" alt="">
                            </div>
                            <div class="ttm-box-post-icon">
                                <i class="ti ti-gallery"></i>
                            </div>
                        </div><!-- post-featured-wrapper end -->
                        @endif
                        <!-- ttm-blog-classic-content -->
                        <div class="ttm-blog-classic-content">
                            <div class="entry-content">
                                <div class="ttm-box-desc-text">
                                    <p>{!! $page_details->description !!}</p>
                                </div>
                            </div>
                        </div><!-- ttm-blog-classic-content end -->
                    </article><!-- post end -->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    

    <!-- sidebar end -->
    <!--  @if($page_details->name == 'About Us')-->
    <!--  <div class="mt-3 head-cat">-->
    <!--        <h3 class="text-center text-light pt-2 pb-2" style="background-color:#193D87">Our Branches</h3>-->
    <!--    <div>-->
    <!--shop-views-section-->
    <!--<div class="site-main">-->

    <!--    <section class="sidebar ttm-sidebar-right clearfix">-->
    <!--       <div class="container">-->
    <!--       <div class="row">-->
    <!--         @foreach($branches as $item)-->
    <!--         <div class="col-md-2 col-6 mb-2">-->
    <!--            <a class="btn btn-outline-info" style="height:55px;width:134.656px;cursor:pointer" item-id="{{$item->id}}" id="item-{{$item->id}}">{{$item->name}}</a>-->
    <!--         </div>-->
    <!--         @endforeach-->
    <!--       </div>-->
    <!--       </div>-->
    <!--    </section>-->


    <!-- Modal -->
    <!--    <div class="modal fade branch-modal" id="myModal exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->

    <!--    </div>-->
    <!--</div>-->
    <!--team-section end-->
    <!--  @endif-->
    <!--</div>-->
    <!--site-main end-->

    @endsection
    @section('script')
    <script>
        $(document).on("click", 'a[id^="item"]', function(event) {
            event.preventDefault();
            let id = $(this).attr('item-id');
            var modal = document.getElementById("myModal");
            $.ajax({
                url: "{{route('hospital.find.branch')}}",
                method: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $('.modal').html(data);

                    $('.branch-modal').modal('show');
                }
            })




        });
    </script>



    @endsection