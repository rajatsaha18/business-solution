@extends('Hospital.frontend.layouts.app')
@section('content')
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="page-title-heading">
                        <h1 class="title">Service Single View</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#" target="_blank">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Service Single View</span>
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
                <div class="col-12 content-area">
                    <!-- post -->
                    <article class="post ttm-blog-classic clearfix">
                        <!-- post-featured-wrapper -->
                        <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                            <div class="ttm-post-featured">
                                <img class="img-fluid" src="{{ URL::to('/') }}/{{ $service->frontend_image }}" style="width:100%;" alt="">
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

                                    $date = $service->created_at->todatestring();

                                    ?>
                                    <span class="post-meta-line"><a href="#" tabindex="0"><i class="fa fa-calendar"></i>{{$carbon::parse($date)->format('M-d-Y')}}</a></span>
                                </div>
                                <div class="post-meta">
                                    <span class="post-meta-line"><a href="#" tabindex="0"><i class="fa fa-comment"></i>Comments</a></span>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="ttm-box-desc-text">
                                    <p>{!! $service->long_description !!}</p>
                                </div>

                                {{-- <div class="mt-30">
                                <h4>Why Integrate Side Projects?</h4>
                                <p>Suscipit mi, at varius enim sem at sem. Fuce tempus ex nibh, eget vlputate lgula ornare eget. Nunc facilisis erat at  Donec ornare, est sed tincidunt placerat, sem mi suscipit mi, at varius enim  Mauris ienim id purus ornare tincidunt. Aenean vel consequat riss. Proin viverra nisi at nisl imperdiet auctor. Donec ornare, esed tincidunt placerat sem mi suscipit mi, at varius enim sem at sem. Fuce tempus ex nibh, eget vlputate lgula ornare eget. Nunc facilisis erat at ligula blandit tempor. maecenas</p>
                            </div>
                            <div class="ttm-blogbox-desc-footer">
                                <div class="ttm-blogbox-footer-readmore">
                                    <div class="ttm-blogbox-footer-left">
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#">Bussiness</a>
                                    </div>
                                </div>
                                <div class="ttm-social-share-wrapper">
                                    <div class="ttm-social-share-title">Share This Post:</div>
                                    <div class="social-icons circle">
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-blog-classic-box-comment">
                                <div id="comments" class="comments-area">
                                    <h2 class="comments-title">3 Replies to “How much aspirin to take for stroke”</h2>
                                    <ol class="comment-list">
                                        <li>
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img src="images/blog/blog-comment-01.jpg" class="avatar" alt="comment-img">
                                                </div>
                                                <div class="comment-box">
                                                    <div class="comment-meta commentmetadata">
                                                        <cite class="ttm-comment-owner">Jhon Doe</cite>
                                                        <span>June 14, 2019 at 8:41 am</span>
                                                    </div>
                                                    <div class="reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                                    </div>
                                                    <div class="author-content-wrap">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius, sunt porro corporis maiores ea, voluptatibus omnis maxime</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="children comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img src="images/blog/blog-comment-02.jpg" class="avatar" alt="comment-img">
                                                </div>
                                                <div class="comment-box">
                                                    <div class="comment-meta">
                                                        <cite class="ttm-comment-owner">Cherieh</cite>
                                                        <span>June 14, 2019 at 8:42 am</span>
                                                    </div>
                                                    <div class="reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                                    </div>
                                                    <div class="author-content-wrap">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius, sunt porro corporis maiores ea, voluptatibus omnis maxime</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img src="images/blog/blog-comment-01.jpg" class="avatar" alt="comment-img">
                                                </div>
                                                <div class="comment-box">
                                                    <div class="comment-meta">
                                                        <cite class="ttm-comment-owner">Jhon Doe</cite>
                                                        <span>June 14, 2019 at 8:43 am</span>
                                                    </div>
                                                    <div class="reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                                    </div>
                                                    <div class="author-content-wrap">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium eius, sunt porro corporis maiores ea, voluptatibus omnis maxime</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title">Leave a Reply</h3>
                                        <form action="#" method="post" id="commentform" class="comment-form">
                                            <p class="comment-notes">Your email address will not be published. </p>
                                            <p class="comment-form-comment">
                                                <textarea id="comment" placeholder="Comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                            </p>
                                            <p class="comment-form-author">
                                                <input id="author" placeholder="Name (required)" name="author" type="text" value="" size="30" aria-required="true">
                                            </p>
                                            <p class="comment-form-email">
                                                <input id="email" placeholder="Email (required)" name="email" type="text" value="" size="30" aria-required="true">
                                            </p>
                                            <p class="comment-form-url">
                                                <input id="url" placeholder="Website" name="url" type="text" value="" size="30">
                                            </p>
                                            <p class="form-submit mt-40">
                                                <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" value="Read More">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                                {{-- <h5>{{$blog->hits}} Views</h5> --}}
                            </div>
                        </div><!-- ttm-blog-classic-content end -->
                    </article><!-- post end -->
                </div>
                <!-- <div class="col-lg-3 sidebar-right widget-area"> -->
                {{-- <aside class="widget widget-search">
                    <form role="search" method="get" class="search-form" action="#">
                        <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                        </label>
                        <button class="btn" type="submit" value="Search"> <i class="fa fa-search"></i> </button>
                    </form>
                    </aside> --}}
                {{-- <aside class="widget widget-categories">
                    <h3 class="widget-title" style="background-color:#56CFE1!important">Categories</h3>
                    <ul>
                      
                      @foreach ($blog_categories as $blog_cat)
                     
                       <li><a href="{{route('show.blog.by.category',$blog_cat->slug)}}" target="_blank">{{$blog_cat->name}}</a><span>{{count($blog_cat->blogs)}}</span></li>



                @endforeach
                </ul>
                </aside> --}}
                {{-- <aside class="widget widget-recent-post">
                   <h3 class="widget-title" style="background-color:#56CFE1!important">Latest News</h3>
                    <ul class="widget-post ttm-recent-post-list">
                       @foreach ($blogs as $blog)
                       <li>
                        <a href="#"><img src="{{ URL::to('/') }}/{{ $blog->image }}" style="object-fit:cover"alt="post-img"></a>
                <span class="post-date">{{$carbon::parse($blog->created_at)->format('M-d-Y')}}</span>
                <a href="{{route('home.single.blog.show',$blog->slug)}}" target="_blank">{{($blog->slug)}}....</a>
                </li>
                @endforeach

                </ul>
                </aside> --}}

                <!-- </div> -->
            </div><!-- row end -->
        </div>
    </section>
    <!-- sidebar end -->

</div><!--site-main end-->

@endsection