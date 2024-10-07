@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<div class="container">
    <style>
        .dataTables_filter input {
            margin-bottom: 10px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        thead {
            background-color: rgba(128, 128, 128, 0.144);
        }

        .dataTables_length label {
            margin-bottom: 30px;
        }

        table.dataTable {
            width: 100%;
            margin: 0 auto;
            clear: both;
            border-collapse: unset !important;
            border-spacing: 0;
        }
        .search-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
    margin-right:-480px!important;
}

/* Input field styling */
.search-input {
    width: 60%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

/* Search button styling */
.search-btn {
    padding: 10px 20px;
    margin-left: 10px;
    background-color: #00006B;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.search-btn:hover {
    background-color: #00006B;
}
.btn
{
    background-color:#00006B!important;
    color:white!important;
}
      
    </style>
    <div class="row margin-bottom-10 margin-top-10">
        <div class="col-md-4">
            <div class="row">

                <div class="clearfix"></div>

                <!-- <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 text-center left-menu-heading">
                        <h4>Countries</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;" onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($countries as $item)
                        <?php
                        $count = count(DB::table('country_blogs')->where('country_id', $item->id)->get());
                        ?>
                        {{-- href="{{route('info-sc',$item->slug)}}" --}}
                        <a class="text-center" href="{{route('get.country.blog',$item->name)}}" target="_blank">{{$item->name}} ({{$count}}) </a>
                        @endforeach


                    </div>
                </div> -->
                @forelse ($latest_blogs as $blog)

                <div class="card border-0 mb-3 px-0" style="max-width: 540px;">
                    <div class="row g-0 ">
                        <div class="col-md-4 col-sm-4 col-3">
                            <img src="{{asset($blog->image)}}" style="aspect-ratio: 9/6;" class="img-fluid p-2 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 col-sm-8 col-9">
                            <div class="card-body py-1 pe-0">
                                <h6 class="card-title fs-6 mb-0"><a style="color: #00006b;" href="{{route('single.country.blog', $blog->slug) }}">{{$blog->title}}</a></h6>

                            </div>
                        </div>
                    </div>
                </div>

                @empty
                @endforelse

            </div>
        </div>

        <!-- Blog Card Section -->
        
        <div class="col-md-8">
            <!-- Search Bar -->
    <div class="search-container mb-4">
        <form action="{{ route('search.country.blog') }}" method="GET">
            <input type="text" name="search" placeholder="Search blogs..." class="search-input" required>
            <button type="submit" class="search-btn">Search</button>
        </form>
    </div>
            <div class="row">
                @foreach($country_blogs as $country_blog)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{route('single.country.blog',$country_blog->slug)}}">
                            <img src="{{asset($country_blog->image)}}" alt="blog-image" style="height:180px!important;width:100%!important">
                        </a>
                        <div class="card-body">
                            <a href="{{route('single.country.blog',$country_blog->slug)}}">
                                <h5 class="mb-2">{{$country_blog->title}}</h5>
                            </a>
                            <div class="text-center">
                                <a href="{{route('single.country.blog',$country_blog->slug)}}" class="btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="my-5">
                {{ $country_blogs->links('pagination::bootstrap-4') }}
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>

@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('table.table-data').DataTable();
    });
</script>
@endsection