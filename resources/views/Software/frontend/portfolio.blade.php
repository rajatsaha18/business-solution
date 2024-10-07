@extends('Software.frontend.master')
@section('meta-setup')
{{-- @dd($sitebanner) --}}
@endsection
@section('content')
<style>
    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->portfolio_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->portfolio_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->portfolio_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->portfolio_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->portfolio_banner)}}') !important;
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
            background-image: url('{{asset($sitebanner->portfolio_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
</style>

<!-- breadcrumb-area start -->
<div class="bg-cover ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title text-white">Portfolio</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item text-white"><a class=" text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> Portfolio</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======= Portfolio Section ======= -->
{{-- <section id="portfolio" class="portfolio m-5">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @isset($categories)
                            @foreach ($categories as $category)
                                <li data-filter=".filter{{ $category->name }}">
{{ $category->name ?? '' }}
</li>
@endforeach
@endisset
</ul>
</div>
</div>
<div class="row portfolio-container">
    @forelse ($projects as $portfolio)

    <div class="col-lg-4 col-md-6 portfolio-item filter{{ $portfolio->category->name }}">
        <a href="{{ $portfolio->website }}">
            <img src="{{ asset($portfolio->image) }}" class="img-fluid" alt="{{ $portfolio->name }}">
            <div class="portfolio-info">
                <h6 class="my-3">{{ $portfolio->name }}</h6>

                <a href="{{ asset($portfolio->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $portfolio->name }}"><i class="bx bx-plus"></i></a>


            </div>
        </a>
    </div>
    @empty
    @endforelse
</div>


</div>
</section>
--}}


<!--======== Tabs Wrapper Start ======== -->

<div class="tabs-wrapper bg-gray ">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="section-title-wrapper text-center wow move-up">
                    <h3 class="mb-2">Our Customer</h3>
                     <h3 class="section-title">We’ve come a long way in <span class="text-color-primary"> 25 years</span> </h3> 
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-12 ht-tab-wrap">
                {{-- <div class="text-center  ">
                        <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">
                            @forelse ($categories as $item)
                            
                                <li class="tab__item nav-item ">
                                    <a class="nav-link " id="nav-tab1" data-bs-toggle="tab" href="#{{ $item->slug }}" role="tab" aria-selected="true">{{ $item->name }}</a>
                </li>
                @empty
                @endforelse
                </ul>
            </div> --}}
            <div class="tab-content ht-tab__content">
                {{-- @forelse ($projects as $item) --}}
                {{-- <div class="tab-pane fade" id="{{$item->category->slug}}" role="tabpanel"> --}}
                <div class="tab-history-wrap section-space--mt_60">
                    <div class="row">
                        @forelse ($projects as $item)
                        <div class="col-lg-4 col-md-6">

                            <a href="{{ $item->website }}" class="ht-large-box-images style-04">
                                <div class="large-image-box ">
                                    <div class="box-image">
                                        <div class="default-image">
                                            <img class="img-fluid" src="{{ asset($item->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content pb-2">
                                        <h5 class="heading">{{ $item->name }}</h5>
                                        {{-- <div class="text">{{ $item-> }}
                                    </div>
                                    <div href="#" class="box-images-arrow">
                                        <span class="button-text">Discover now</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </div> --}}
                                </div>
                        </div>
                        </a>

                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
            {{-- </div> --}}
            {{-- @empty 
                        @endforelse --}}

        </div>
    </div>
</div>
</div>
</div>

<!--======== Tabs Wrapper End ======== -->


@endsection