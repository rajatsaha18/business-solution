@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
    .blog a {
        text-decoration: none;
        color: black;
    }

    .se-input input {
        border-radius: 5px;
        border: none;
        background: #efefeff5;
    }

    .se-input input:focus {
        outline: none;
    }

    .se-input button {
        border: none;
    }

    .fa-back {
        background-color: black !important;
        border-radius: 50%;
        padding: 7px 9px;
        margin-left: -20px;
    }

    .fa-back .fa-search {
        color: white;
    }

    .search-inpu {
        border-radius: 5px;
    }

    @media(max-width:600px) {}

    .se-input {
        margin-top: 10px;
        justify-content: end !important;
    }
</style>
<section class="blog mt-5 pt-5">
    <div class="container">
        <a href="{{ route('halal.investment.blog') }}">
            <h3 class="text-success fw-bolder">All Blogs</h3>
        </a>

        <div class="d-flex justify-content-end se-input">
            <form action="{{route('halal.blog.search')}}" method="GET">
                <input type="text" placeholder="Search.." class="search-input p-2" name="search"><button class="fa-back" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <hr>
        <div class="row">
            @foreach($blogs as $blog)

            <div class="col-md-4 col-sm-12 card-elem">
                <a href="{{route('halal.investment.blog.detail',$blog->slug)}}">
                    <div class="card shadow border-0 p-2">
                        <div class="card-title">
                            <img src="{{asset($blog->image)}}" alt="">
                        </div>
                        <div class="card-body">
                            <p class="fw-bold text-secondary">{{$blog->category->name}}</p>
                            <h5 class="fw-bold" style="height:80px">{{$blog->title}}</h5>
                            <h6><span class="me-2">{{\Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</span> <span class="me-2">|</span> <span>Editor</span></h6>
                        </div>

                    </div>
                </a>
            </div>


            @endforeach

            <div class="mb-4">
                <div class="pagination-block">
                    <span class="page-numbers current">{{$blogs->links("pagination::bootstrap-4")}}</span>
                    {{-- <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
</section>




@endsection