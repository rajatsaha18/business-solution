@extends('frontend.master')
{{-- @dd($blogs ) --}}
@section('meta-setup')
    @forelse ($blogs as $blog)
        <title>{{$blog->meta_title ?? ''}}</title>
        <meta content="{{$blog->meta_description ?? ''}}" name="description" />
        <meta itemprop="name" content="{{$blog->meta_title ?? ''}}">
        <meta itemprop="description" content="{{$blog->meta_description ?? ''}}"> 
        <meta itemprop="keywords" content="{{$blog->meta_keyword ?? ''}}"> 
    @empty
    @endforelse 
@endsection

@section('content')

{{-- @dd($sitebanner) --}}
<style>
    .bg-cover{
        background: url({{ asset($sitebanner->blog_banner) }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    };
    /*  */
   
</style>


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title text-white">Blog Update</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item text-white"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="active text-white">> Blog</li>
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

                @forelse ($blogs as $blog)
                    {{-- @dd($blog) --}}
                    <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item blog-grid">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail">
                                <a href="{{ route('blog-details', $blog->slug) }}">
                                    <img class="img-fluid" src="{{ asset($blog->image) }}" alt=" {{ $blog->title }}">
                                </a>
                            </div>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        {{ $blog->created_at->format('D-M-Y') }}
                                    </div>
                                </div>

                                <h5 class="post-title font-weight--bold">
                                    <a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                                </h5>

                                <div class="post-excerpt mt-15">
                                    <p>{{ $blog->short_description }}</p>
                                </div>
                                <div class="btn-text">
                                    <a href="{{ route('blog-details', $blog->slug) }}">Read more <i class="ml-1 button-icon fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <!--===== Single Blog Item End =========-->
                    </div>
                @empty
                @endforelse

                
                <div class="col-lg-12 wow move-up">
                    <div class="ht-pagination mt-30 pagination justify-content-center">
                        <div class="pagination-wrapper">

                            <ul class="page-pagination">
                                <li>{{ $blogs->links('pagination::bootstrap-4') }}</li>
                               
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--====================  Blog Area End  ====================-->

</div>
@endsection