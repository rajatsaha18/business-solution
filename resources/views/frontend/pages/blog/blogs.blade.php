@extends('frontend.layouts.app')
@section('content')
<style>
    .your-class .topPrevarrow {
    width: 39px;
    height: 39px;
    background: #faf9fd;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    text-align: center;
    line-height: 39px;
    position: absolute;
    left: -22px;

    top: 40%;
    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transition: all linear 0.3s;
    -webkit-transition: all linear 0.3s;
    -moz-transition: all linear 0.3s;
    -ms-transition: all linear 0.3s;
    -o-transition: all linear 0.3s;
    z-index: 10;
    color: rgba(0, 0, 0, 0.3);
    border: 1px solid #1C448F;
}
.slick-arrow {
    border: 1px solid #1C448F;
}
.slick-arrow {
    cursor: pointer;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;

}
.fa-angle-left, .fa-angle-right{
    color:orange!important;
}
.your-class .topNextarrow {
    width: 39px;
    height: 39px;
    background: #faf9fd;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    text-align: center;
    line-height: 39px;
    position: absolute;
    /* right: -12px; */
    right: -22px;
    top: 40%;

    transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transition: all linear 0.3s;
    -webkit-transition: all linear 0.3s;
    -moz-transition: all linear 0.3s;
    -ms-transition: all linear 0.3s;
    -o-transition: all linear 0.3s;
    z-index: 10;
    color: rgba(0, 0, 0, 0.3);
    border: 1px solid #1C448F;
}
.slick-arrow {
    border: 1px solid #1C448F;
}
</style>
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="page-title-heading">
                            <h1 class="title">Blog</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span class="mr-1"><i class="ti ti-home"></i></span>
                            <a title="Homepage" href="#">Home</a>
                            <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                            <span class="ttm-textcolor-skincolor">Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <section class="sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 content-area">

                        <!-- post -->
                        {{-- @foreach ($blogs as $blog)
                            <article class="post ttm-blog-classic clearfix">
                                <!-- post-featured-wrapper -->
                                <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                    <div class="ttm-post-featured">
                                        <img class="img-fluid" src="{{ URL::to('/') }}/{{ $blog->image }}"
                                            style="width:100%;height:400px" alt=""target="_blank">
                                    </div>
                                    <div class="ttm-box-post-icon">
                                        <i class="ti ti-gallery"></i>
                                    </div>
                                </div><!-- post-featured-wrapper end -->
                                <!-- ttm-blog-classic-content -->
                                <div class="ttm-blog-classic-content">
                                    <div class="ttm-post-entry-header">
                                        <div class="post-meta">
                                            <span class="ttm-meta-line byline"><i
                                                    class="fa fa-user"></i>{{ $blog->author_name }}</span>
                                            <span class="ttm-meta-line tag-link"><i
                                                    class="fa fa-tag"></i>{{ $blog->category->name }}</span>
                                        </div>
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a
                                                    href="{{ route('home.single.blog.show', $blog->slug) }}"
                                                    target="_blank">{{ $blog->short_description }}</a></h2>
                                        </header>
                                    </div>
                                    <div class="entry-content">

                                        <div class="ttm-blogbox-desc-footer">
                                            <div class="ttm-blogbox-footer-readmore">
                                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black"
                                                    href="{{ route('home.single.blog.show', $blog->slug) }}"
                                                    title="">Read More <i class="ti ti-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- ttm-blog-classic-content end -->
                            </article>
                        @endforeach --}}
                        <div class="your-class">
                           @foreach ($blogs as $blog)
                           <div class="card mr-2" style="width: 18rem;">
                            <img class="img-fluid" src="{{ URL::to('/') }}/{{ $blog->image }}"
                            style="width:100%;height:350px;object-fit:cover" alt=""target="_blank">
                            <div class="card-body">

                              <p class="card-text"><a
                                href="{{ route('home.single.blog.show', $blog->slug) }}"
                                target="_blank">{{ $blog->short_description }}</a></p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black"
                                href="{{ route('home.single.blog.show', $blog->slug) }}"
                                title="">Read More <i class="ti ti-angle-double-right"></i></a>
                            </div>
                          </div>
                           @endforeach

                          </div>
                        <!-- post end -->


                    </div>

                </div><!-- row end -->
            </div>
        </section>
        <!-- sidebar end -->

    </div><!--site-main end-->
@endsection
@section('script')

<script>
     $('.your-class').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows:true,
        infinite: true,
        centerPadding: '40px',
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:true,
        prevArrow:'<i class="fa fa-angle-left topPrevarrow"></i>',
        nextArrow:'<i class="fa fa-angle-right topNextarrow"></i>',
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 414,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });
</script>
@endsection
