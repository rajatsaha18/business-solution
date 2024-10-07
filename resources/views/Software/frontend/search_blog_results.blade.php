@extends('Software.frontend.master')
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
    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media (min-width: 577px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 768px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 992px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_banner)}}') !important;
            background-size: cover !important;
            height:400px!important;
            width:100%!important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 1200px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 1400px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->blog_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
    .search-container {
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 600px;
    margin: 20px 0; /* Add some margin for spacing */
    position: absolute; /* Positions the element absolutely */
    left: 170px; /* Aligns it to the left */
    top: 20px; /* Adjust this value to position it vertically */
}

.search-input {
    flex-grow: 1;
    padding: 12px 15px;
    border: none;
    border-radius: 4px 0 0 4px;
    font-size: 14px;
    color: #666;
    background-color: #e0e0e0;
    outline: none;
    box-sizing: border-box;
}

.search-input::placeholder {
    color: #999;
}

.search-button {
    padding: 12px 20px;
    border: none;
    background-color: #00006B;
    color: white;
    cursor: pointer;
    border-radius: 0 4px 4px 0;
    font-size: 14px;
    outline: none;
    box-sizing: border-box;
}

.search-button:hover {
    background-color: #555;
}


</style>


<!-- breadcrumb-area start -->
<div class="bg-cover">
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
    <!--Search in blog start-->
    <div class="search-container">
    <form action="{{route('blog.search.software')}}" method="GET">
    <input type="text" name="query" placeholder="Search by blog" class="search-input">
    <button type="submit" class="search-button">Go</button>
    </form>
        
    </div>
    
    

    <div class="blog-pages-wrapper section-space--ptb_100">
        <div class="container">
            <div class="row">
            <h2>{{$query}}</h2>
            @if($posts->isEmpty())
                <p>No results found.</p>
            @else

                @forelse ($posts as $blog)
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
                @endif


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