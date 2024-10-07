@extends('Software.frontend.master')
{{-- @dd($details) --}}
@section('meta-setup')
{{-- @forelse ($blogs as $blog) --}}
<title>{{$details->meta_title ?? ''}}</title>
<meta content="{{$details->meta_description ?? ''}}" name="description" />
<meta itemprop="name" content="{{$details->meta_title ?? ''}}">
<meta itemprop="description" content="{{$details->meta_description ?? ''}}">
<meta itemprop="keywords" content="{{$details->meta_keyword ?? ''}}">
{{-- @empty
    @endforelse  --}}
@endsection

@section('content')
{{-- @php
    $setting = App\Models\GeneralSetting::first();
@endphp --}}
<style>
    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_details_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blog-img {
            width: 100% !important;
            height: 190px !important;
        }
    }

    @media (min-width: 577px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_details_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blog-img {
            width: 100% !important;
            height: 230px !important;
        }
    }


    @media (min-width: 768px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_details_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blog-img {
            width: 100% !important;
            height: 400px !important;
        }
    }


    @media (min-width: 992px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_details_banner)}}') !important;
            background-size: cover !important;
            height:400px!important;
            width:100%!important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blog-img {
            width: 100% !important;
            height: 400px !important;
        }
    }


    @media (min-width: 1200px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_details_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blog-img {
            width: 100% !important;
            height: 400px !important;
        }
    }


    @media (min-width: 1400px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_details_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .blog-img {
            width: 100% !important;
            height: 400px !important;
        }
    }
</style>

<!-- breadcrumb-area start -->
{{-- @dd($details) --}}


<div class=" bg-cover">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title text-white">Blog Details</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item text-white"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> Blog Details</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<div class="site-wrapper-reveal">

    <!--====================  Blog Area Start ====================-->
    <div class="blog-pages-wrapper section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Feature Start -->
                    <h3 class="post-title text-center">
                        {{ $details->title }}
                    </h3>

                    <!-- <div class="post-feature blog-thumbnail  wow move-up">
                        <img class=" rounded blog-img" src="{{ asset($details->image) }}" alt="Blog Images">
                    </div> -->
                    <!-- Post Feature End -->
                </div>
                <div class="col-lg-11 m-auto">
                    <div class="main-blog-wrap">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item  wow move-up">

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <!-- <div class="post-categories text-center">
                            <a href="#"> Success Story, Tips </a>
                        </div> -->

                                <!-- <h3 class="post-title text-center">
                                    {{ $details->title }}
                                </h3> -->

                                <div class="post-meta mt-20 justify-content-center">
                                    <div class="post-author">
                                        <a href="#">
                                            <img class="img-fluid avatar-96" src="assets/images/team/admin.webp" alt=""> {{ $details->author_name }}
                                        </a>
                                    </div>
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        {{ $details->created_at->format('D-M-Y') }}
                                    </div>
                                    <div class="post-view">
                                        <span class="meta-icon far fa-eye"></span>
                                        {{ $details->hits }} views
                                    </div>
                                    {{-- <div class="post-comments">
                                        <span class="far fa-comment-alt meta-icon"></span>
                                        <a href="#" class="smooth-scroll-link">4 Comments</a>
                                    </div> --}}
                                </div>

                                <div class="post-excerpt mt-15">
                                    <p>{!! $details->long_description !!}</p>

                                    {{-- <blockquote>
                                        <p class="p1">We’re on a mission to build a better future where technology creates good jobs for everyone. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse moles dolore eu feugiat..
                                        </p>
                                    </blockquote>

                                    <p>Regardless of our gender, race, religion, cultural beliefs or education, all of us are biased in some way. This no doubt seeps into recruitment – whether we are subconsciously looking for people we relate to, or we are actively going against this to try to diversify the workplace, personal feelings and opinion are making their way into the hiring process.</p>

                                    <p>Positive discrimination – giving an advantage to those from minority backgrounds or discriminated groups to put them on a level playing field with others – can only be a good thing. It increases the diversity of people, and therefore the diversity of ideas, in the workplace.</p>

                                    <p>Source:&nbsp;designweek.co.uk</p> --}}

                                    {{-- <div class="entry-post-share-wrap  border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="entry-post-tags">
                                                    <div class="tagcloud-icon">
                                                        <i class="fa fa-tags"></i>
                                                    </div>
                                                    <div class="tagcloud">
                                                        <a href="#">designer</a>, <a href="#">font</a>, <a href="#">mookup</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="entry-post-share">
                                                    <div class="share-label">
                                                        Share this post
                                                    </div>
                                                    <div class="share-media">
                                                        <span class="share-icon fas fa-share-alt"></span>

                                                        <div class="share-list">
                                                            <a class="hint--bounce hint--top hint--primary twitter" target="_blank" aria-label="Twitter" href="#">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                            <a class="hint--bounce hint--top hint--primary facebook" target="_blank" aria-label="Facebook" href="#">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                            <a class="hint--bounce hint--top hint--primary linkedin" target="_blank" aria-label="Linkedin" href="#">
                                                                <i class="fab fa-linkedin"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="entry-author">
                                        <div class="author-info">
                                            <div class="author-avatar">
                                                <img src="assets/images/team/avatar-06-90x90.webp" alt="">
                                                <div class="author-social-networks">
                                                    <div class="inner">
                                                        <a class="hint--bounce hint--top hint--primary" aria-label="Twitter" href="#" target="_blank">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>

                                                        <a class="hint--bounce hint--top hint--primary" aria-label="Facebook" href="#" target="_blank">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>

                                                        <a class="hint--bounce hint--top hint--primary" aria-label="Instagram" href="#" target="_blank">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="author-description">
                                                <h6 class="author-name">Owen Christ</h6>

                                                <div class="author-biographical-info">
                                                    Harry Ferguson is an author, blogger, and designer living in a suburb of Washington, DC. When he’s not designing, blogging, or writing, Ferguson can be found with his head in a book or pinning like a madman.
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="related-posts-wrapper">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Single Valid Post Start -->
                                                <a class="single-valid-post-wrapper" href="#">
                                                    <div class="single-blog__item">
                                                        <div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-03-370x120.webp">
                                                        </div>

                                                        <div class="post-content">
                                                            <h6 class="post-title font-weight--bold">Designers’ Identities & Social Unconscious Bias</h6>
                                                        </div>

                                                    </div>
                                                </a>
                                                <!-- Single Valid Post End -->
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- Single Valid Post Start -->
                                                <a class="single-valid-post-wrapper" href="#">
                                                    <div class="single-blog__item">
                                                        <div class="single-valid__thum bg-img" data-bg="assets/images/blog/blog-05-370x120.webp">
                                                        </div>

                                                        <div class="post-content">
                                                            <h6 class="post-title font-weight--bold">Designers’ Identities & Social Unconscious Bias</h6>
                                                        </div>

                                                    </div>
                                                </a>
                                                <!-- Single Valid Post End -->
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="comment-list-wrapper">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="widget-title section-space--mb_50">Comments (3) </h4>
                                            </div>
                                            <div class="col-lg-12">

                                                <ol class="comment-list">
                                                    <li class="comment border-bottom">
                                                        <div class="comment-2">
                                                            <div class="comment-author vcard">
                                                                <img alt="" src="assets/images/team/coment.webp">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="meta">
                                                                    <h6 class="fn">Edna Watson</h6>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                </div>

                                                                <div class="comment-actions">
                                                                    <div class="comment-datetime"> November 16, 2018 at 4:31 am </div><span> | </span>
                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li><!-- comment End-->
                                                    <li class="comment border-bottom">
                                                        <div class="comment-2">
                                                            <div class="comment-author vcard">
                                                                <img alt="" src="assets/images/team/comment-2.webp">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="meta">
                                                                    <h6 class="fn">Owen Christ</h6>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                </div>

                                                                <div class="comment-actions">
                                                                    <div class="comment-datetime"> November 19, 2018 at 4:31 am </div><span> | </span>
                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li><!-- comment End-->
                                                    <li class="comment">
                                                        <div class="comment-5">
                                                            <div class="comment-author vcard">
                                                                <img alt="" src="assets/images/team/comment-3.webp">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="meta">
                                                                    <h6 class="fn">James Scott</h6>
                                                                    <div class="comment-datetime">
                                                                        November 13, 2018 at 4:50 am </div>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                </div>

                                                                <div class="comment-actions">
                                                                    <div class="comment-datetime"> February 12, 2018 at 6:31 am </div><span> | </span>
                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ol class="children">
                                                            <li class="comment ">
                                                                <div class="comment-6">
                                                                    <div class="comment-author vcard">
                                                                        <img alt="" src="assets/images/team/reply-comm.webp">
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <div class="meta">
                                                                            <h6 class="fn">Harry Ferguson</h6>
                                                                            <div class="comment-datetime">
                                                                                February 13, 2019 at 4:51 am </div>
                                                                        </div>
                                                                        <div class="comment-text">
                                                                            <p>Thanks for always keeping your HTML Template up to date. Your level of support and dedication is second to none.</p>
                                                                        </div>

                                                                        <div class="comment-actions">
                                                                            <div class="comment-datetime"> November 13, 2018 at 4:31 am </div><span> | </span>
                                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><!-- comment End -->
                                                        </ol><!-- children End -->
                                                    </li><!-- comment End-->
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment-list-wrapper">

                                        <div class="row">

                                            <div class="col-lg-12">
                                                <h4 class="widget-title mb-20">Leave your thought here </h4>
                                                <p>Your email address will not be published. Required fields are marked *</p>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="contact-from-wrapper section-space--mt_30">
                                                    <form action="#" method="post">
                                                        <div class="contact-page-form">
                                                            <div class="contact-input">
                                                                <div class="contact-inner">
                                                                    <input name="name" type="text" placeholder="Your Comment *">
                                                                </div>
                                                                <div class="contact-inner">
                                                                    <input name="email" type="email" placeholder="Your Email *">
                                                                </div>

                                                            </div>
                                                            <div class="contact-inner contact-message">
                                                                <textarea name="comment" placeholder="Your Comment"></textarea>
                                                            </div>
                                                            <p class="comment-form-cookies-consent">
                                                                <input type="checkbox">
                                                                <label>Save my name, email, and website in this browser for the next time I comment.</label>
                                                            </p>
                                                            <div class="comment-submit-btn text-center">
                                                                <button class="ht-btn ht-btn-md" type="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>

                            </div>
                            <!-- Post info End -->
                        </div>
                        <!--===== Single Blog Item End =========-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  Blog Area End  ====================-->


</div>
@endsection