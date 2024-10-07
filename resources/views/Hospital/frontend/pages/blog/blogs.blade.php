@extends('Hospital.frontend.layouts.app')
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

    .fa-angle-left,
    .fa-angle-right {
        color: orange !important;
    }

    .imageSize {
        aspect-ratio: 9/6;
    }
    .search-container {
    display: flex;
    align-items: center;
    background-color: #333; /* Dark background color */
    border-radius: 5px;
    width: 300px; /* Adjust width as needed */
    margin-bottom:20px!important;
}

.search-container input {
    border: none;
    padding: 10px;
    width: 100%;
    color: #fff; /* Text color */
    background-color: #333; /* Same background as container */
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.search-container input::placeholder {
    color: #ccc; /* Placeholder text color */
}

.search-container button {
    background-color: #4285F4; /* Button color */
    border: none;
    padding: 10px 15px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    cursor: pointer;
}

.search-container button i {
    color: white;
}
.site-main
    {
        margin-top:-60px!important;
    }
@media (max-width: 600px) {
    .site-main
    {
        margin-top:-60px!important;
    }
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
        <!--Search in blog start-->
    <form action="{{route('hospital.blog.search')}}" method="GET">
        <div class="search-container">
            <input type="text" name="query" placeholder="Search">
            <button><i class="fa fa-search"></i></button>
        </div>
    </form>
    <!--Search in blog end-->
            <!-- row -->
            <div class="row">
            @foreach($blogs as $blog)
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="{{asset($blog->image)}}" alt="hospital-bog-image">
                        <div class="card-body">
                            <h6>{{ \Illuminate\Support\Str::limit($blog->title, 50) }}</h6>
                            <p>{{ \Illuminate\Support\Str::limit($blog->short_description, 100) }}</p>
                            <div class="text-center">
                                <a href="{{ route('hospital.home.single.blog.show', $blog->slug) }}" class="btn btn-info">View More</a>
                            </div>
                        </div>
                        

                    </div>
                </div>
            @endforeach
            </div>
            <li>{{$blogs->links()}}</li>
            
            
            <!-- row end -->
        </div>
</section>
<!-- sidebar end -->

</div><!--site-main end-->
@endsection
