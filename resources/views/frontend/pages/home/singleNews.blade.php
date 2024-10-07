@extends('frontend.layouts.app')
@section('content')
<style>

    .daohang > li>a{


        color:black!important;

    }
    .fas.fa-search{
        color:black!important
    }

</style>

 <!-- page-title -->
 <div class="fenbanner mat1">
    <img src="https://www.chison.com/data/watermark/20210603/60b86d4495fd2_.webp" title="News" alt="News">
    <p class="fenbiao">HOT NEWS</p>

</div>
<!--  mianbao  -->
<div class="mianbao mianbao2   zong">
    <a href="/" title="Home">Home</a>
    &gt;
   <a href="{{ route('blog.index') }}">News</a> &gt; <a
        class="comain">{{ $news->title }}</a>
</div>
 <div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="page-title-heading">
                        <h1 class="title mt-5">{{$news->title}}</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a href="{{route('home.index')}}">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">News Single View</span>
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
            <div class="col-lg-12 content-area">
                <!-- post -->
                <article class="post ttm-blog-classic clearfix">
                     <!-- post-featured-wrapper -->
                    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                        <div class="ttm-post-featured">
                            <img class="img-fluid" src="{{ URL::to('/') }}/{{ $news->image }}" style="width:100%;height:500px" alt="">
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
                               
                                $date=$news->created_at->todatestring();
                                
                                 ?>
                                <span class="post-meta-line"><a href="#" tabindex="0"><i class="fa fa-calendar"></i>{{$carbon::parse($date)->format('M-d-Y')}}</a></span>
                            </div>
                            <div class="post-meta">
                                <span class="post-meta-line"><a href="#" tabindex="0"><i class="fa fa-comment"></i>Comments</a></span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="ttm-box-desc-text">
                                <p style="font-size:20px">{!! $news->short_description !!}</p>
                            </div>
                            <hr>
                            <div class="ttm-box-desc-text mt-5" style="margin-bottom:20px!important;">
                                <p style="font-size:30px!important;">{!! $news->long_description !!}</p>
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
                            <h5>{{$news->hits}} Views</h5>
                        </div>
                    </div><!-- ttm-blog-classic-content end -->
                </article><!-- post end -->
            </div>
            
        </div><!-- row end -->
    </div>
</section>
<!-- sidebar end -->

</div><!--site-main end-->

@endsection