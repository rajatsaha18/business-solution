@extends('bdshop.frontEnd.layouts2.master')
@section('content')
<style>
    .founder-img img {
        width: 100%;
        height: 317px;
        object-fit: cover;
        position: relative;
    }

    .post-date {
        position: absolute;

        top: 8%;
        left: 70%;
        background-color: rgba(0, 0, 0, 0.63);
        color: white;
        padding: 5px;

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

    @media(max-width:600px) {
        .se-input {
            margin-top: 10px;
            justify-content: center !important;
        }
    }
</style>
<section class="founder_stories mt-5 mb-5">
    <div class="container mt-5 mb-2">
        <div class="text-center mx-auto">
            <h4 class="fw-bolder" style="color:#00006b">Founder Stories</h4>
        </div>
        <div class="d-flex justify-content-end se-input">
            <form action="{{route('founder.stories.search')}}" method="GET">
                <input type="text" placeholder="Search.." class="search-input p-2" name="search"><button class="fa-back" style="background-color:#00006b!important" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <hr class="mt-3 mb-3">
        <div class="row">
            @foreach($founderstories as $item)

            <div class="col-md-4 col-sm-12 mt-4">
                <a href="{{route('founder.single.story',$item->slug)}}">
                    <div class="card shadow">
                        <div>
                            <div class="founder-img">
                                <img src="{{asset($item->image)}}" alt="">
                            </div>
                            <div class="post-date">
                                <h6 class="text-light fw-bolder">{{ Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</h6>

                            </div>
                        </div>
                        <div class="p-2">
                            <h5 style="font-family: 'Newsreader';
                        font-weight: 600;height:100px;color:black!important">{{$item->title}}</h5>
                        </div>
                        <p class="p-2 fw-bolder" style="color:#6a68a5;">Business Solution</p>
                    </div>
                </a>
            </div>



            @endforeach

        </div>
    </div>
</section>


@endsection