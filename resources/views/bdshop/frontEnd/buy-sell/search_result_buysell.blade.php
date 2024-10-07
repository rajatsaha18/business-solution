@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  a {
    text-decoration: none;
  }

  i {
    background-color: #FFC800;
    border-radius: 50%;
    padding: 7px;

  }

  .search-form h4 {
    margin-left: -40px;
    margin-top: 5px;
  }

  .cate a {
    text-decoration: none;
    margin-bottom: 4px;
  }

  .break {
    border: 1px solid #00000026;
    float: left;
    height: 50%;
    width: 2px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgb(190, 187, 187);
  }

  .carousel-item img {
    linear-gradient: (rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
    height: 306px !important;
  }

  .ad-image {
    position: sticky;
    position: -webkit-sticky;
    top: 0;

  }

  @media(max-width:600px) {
    .thum-img img {
      width: 100px !important;
      height: 100px !important;
    }

    .item-card .card {
      height: 220px !important;
    }
  }
</style>
<!-- Button trigger modal -->
<section class="big-banner">
  <div class="container mt-2">
    <img src="https://i.ibb.co/ZK4PV5x/6958738679706018389.png" style="width:100%;height:250px" alt="">
  </div>
</section>

<section class="all-items mt-5 mb-5 pb-5">
  <div class="container bg-light">
    <div class="row p-3">
      <div class="col-md-6 col-sm-12">
        <h6 type="button" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i class="fa fa-tags" aria-hidden="true"></i> Select Category
        </h6>
      </div>
      <div class="col-md-6 col-sm-12">
        <form action="{{route('buysell.item.search')}}" method="GET" class="search-form">
          @csrf
          <div class="d-flex">
            <input type="text" name="search" class="form-control" style="border-radius:20px" value="{{$search}}" placeholder="What are you looking for?">
            <button style="background-color:#ffdb00;padding:10px;border-radius:50%;margin-left:-35px
                                "><i class="fa fa-search" aria-hidden="true"></i></button>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <div>
          <h6>Sort Results By</h6>

          <select name="sort_by" id="sort_by" class="form-select">
            <option value="">--Sort By--</option>
            <option value="1">Date: Newest on Top</option>
            <option value="2">Date: Oldest on Top</option>
            <option value="3">Price: High to Low</option>
            <option value="4">Price: Low to High</option>
          </select>

        </div>
        <hr>
        <div class="d-flex flex-column cate">
          <h6>Category</h6>
          @foreach($buysellcategories as $itemcat)
          @php

          $count=count(DB::table('buy_sell_products')->where('status',1)->where('category_id',$itemcat->id)->get());
          @endphp
          <a href="{{route('buysell.category.showpost',$itemcat->slug)}}">{{$itemcat->title}} <span class="text-dark">({{$count}})</span></a>
          @endforeach
          @foreach($buysellsubcategories as $itemcat)
          @php

          $count=count(DB::table('buy_sell_products')->where('status',1)->where('subcategory_id',$itemcat->id)->get());
          @endphp
          <a href="{{route('buysell.subcategory.showpost',$itemcat->slug)}}">{{$itemcat->title}} <span class="text-dark">({{$count}})</span></a>
          @endforeach

        </div>
      </div>
      <div class="col-md-1">
        <span class="break"></span>
      </div>

      @if(count($buysellitems)>0)
      <div class="col-md-6 col-sm-12">
        <h6>Buy, Sell, Rent or Find Anything in Bangladesh</h6>
        <style>
          .slider-slider {
            position: relative;
          }

          .item-c {
            position: relative;
          }

          .slider-badge {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
          }

          .badge-c {
            position: absolute;
            top: 0;
            right: 2%;
          }

          .badge-cc {
            position: absolute;
            top: 0;
            right: 2%;
          }
        </style>

        @if(count($spotlightitems)>0)

        <div class="slider item-c">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              @foreach($spotlightitems as $key=>$slider)
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" hidden></button>
              @endforeach
            </div>
            <div class="carousel-inner">
              @foreach($spotlightitems as $key=>$slider)

              <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                <img src="{{asset($slider->thumbnail_img)}}" class="d-block w-100" alt="...">
                <a href="{{route('single.ad.detail',$slider->slug)}}">
                  <div class="carousel-caption  d-md-block" style="background: #00000091;padding:10px">
                    <h5 class="fw-bold">{{$slider->title}}</h5>

                    <p class="fw-bold text-success">Price: {{$slider->rent}} Tk</p>
                  </div>
                </a>
              </div>

              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="badge-cc">
            <h5 class="badge bg-success">Spotlight</h5>
          </div>
        </div>

        <br>

        @endif
        <div class="item-card">

                @if(count($urgentitems)>0)

                @foreach($urgentitems as $item)
                  <a href="{{route('single.ad.detail',$item->slug)}}">
                    
                <div class="card shadow p-2 item-c" style="height:167px">
                    <div class="row slider-slide">
                      <div class="col-md-4 col-4 thum-img">
                      <img src="{{asset($item->thumbnail_img)}}" style="width:160px;height:120px" alt="">
                      </div>
                      <div class="col-md-8 col-8">
                          <h6 style="color:black">{{$item->title}}</h6>
                          <p style="color:black">{{$item->address}}, {{$item->subcategory->title}}</p>
                          <p class="text-success fw-bold">Tk {{$item->rent}}</p>
                          <p class="text-end text-dark" >{{$item->created_at->diffForHumans()}}</p>
                      </div>
                    </div>
                    <div class="badge-c">
                    <h5 class="badge bg-warning">Urgent</h5>
                  </div>
                  </div>
                  
                  </a>
                  <br>
                

                  @endforeach

              @endif

        </div>

        <div class="item-card">
                  
                  @if(count($adtopitems)>0)
  
                  @foreach($adtopitems as $item)
                     <a href="{{route('single.ad.detail',$item->slug)}}">
                      
                   <div class="card shadow p-2 item-c" style="height:167px">
                      <div class="row">
                        <div class="col-md-4 col-4 thum-img">
                         <img src="{{asset($item->thumbnail_img)}}" style="width:160px;height:120px" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                            <h6 style="color:black">{{$item->title}}</h6>
                            <p style="color:black">{{$item->address}}, {{$item->subcategory->title}}</p>
                            <p class="text-success fw-bold">Tk {{$item->rent}}</p>
                            <p class="text-end text-dark" >{{$item->created_at->diffForHumans()}}</p>
                        </div>
                      </div>
                      <div class="badge-c">
                      <h5 class="badge bg-info text-light">Top Ad</h5>
                    </div>
                    </div>
                     </a>
                    <br>
                   
  
                   @endforeach
  
                  @endif
                  
  
        </div>
                <div class="item-card">
                    
                 
  
                  @foreach($regularitems as $item)
                     <a href="{{route('single.ad.detail',$item->slug)}}">
                      
                   <div class="card shadow p-2" style="height:167px">
                      <div class="row">
                        <div class="col-md-4 col-4 thum-img">
                         <img src="{{asset($item->thumbnail_img)}}" style="width:160px;height:120px" alt="">
                        </div>
                        <div class="col-md-8 col-8">
                            <h6 style="color:black">{{$item->title}}</h6>
                            <p style="color:black">{{$item->address}}, {{$item->subcategory->title}}</p>
                            <p class="text-success fw-bold">Tk {{$item->rent}}</p>
                            <p class="text-end text-dark" >{{$item->created_at->diffForHumans()}}</p>
                        </div>
                      </div>
  
                    </div>
                     </a>
                    <br>
                   
  
                   @endforeach
  
                
                  
                  
      </div>
      @else
      <div class="col-md-6 col-sm-12">
        <h4 class="text-center text-danger mt-5">{{$not_found}}</h4>
      </div>
      @endif
      <!-- <div class="col-md-2 col-sm-12">
        <img src="https://i.ibb.co/XyRLqRs/Capture.png" class="ad-image" alt="">
      </div> -->
    </div>
    <div class="add-image mt-4 pb-5">
      <img src="https://i.ibb.co/6Jz95b6/Capture.png" class="w-100" style="object-fit:cover" alt="">
    </div>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <style>
    .modal-header {

      border-bottom: 1px solid #ffffff !important;

    }

    .itemss {
      cursor: pointer;

    }

    .itemss p:hover {
      color: #FFCA2C !important;
    }
  </style>
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <h6>Select a category</h6>
            <hr>
            @foreach($categories as $item)
            <div class="d-flex itemss">


              <p style="color:#5274C9" id="item-{{$item->id}}" data="{{$item->id}}"><img src="{{asset($item->icon)}}" class="me-3" style="width:17px;height:17px;object-fit:cover" alt="">{{$item->title}}</p>

              <p class="ms-4 fs-6 fw-bolder">></p>


            </div>
            @endforeach
          </div>
          <div class="col-md-6 col-sm-6 buysellsubcategory">

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
@section('js')
<script>
  $('#sort_by').on('change', function() {
    let sort_by = $('#sort_by').val();


    $.ajax({
      url: "{{route('sort.by')}}",
      method: "GET",
      data: {
        sort_by: sort_by
      },
      success: function(data) {
        $('.item-card').html(data);
      }
    })
  });
</script>

<script>
  $(document).ready(function() {
    $('p[id^="item"]').on('click', function() {
      let id = $(this).attr('data');
      $.ajax({
        method: "GET",
        url: "{{ route('find.buysell.category') }}",
        data: {
          'id': id
        },
        dataType: 'json', //return data will be json
        success: function(data) {
          //   alert(data)
          $('.buysellsubcategory').html(' <h6>Select a subcategory</h6>');
          $('.buysellsubcategory').append('<hr>');
          for (let i = 0; i < data.length; i++) {
            $('.buysellsubcategory').append(`
                        
                        <div class="d-flex itemss" id="itemsub">
                            <p style="color:#5274C9" id="subitem-${data[i].id}"  subcat="${data[i].slug}">${data[i].title}</p>
                            <p class="ms-4 fs-6 fw-bolder">></p>
                        </div>
                        
                        `);
          }
        },
        error: function() {}
      });
    });


  });




  $(document).on("click", 'p[id^="subitem"]', function(event) {
    let slug = $(this).attr('subcat');
    var url = "{{ route('buysell.subcategory.showpost', ':slug') }}";
    url = url.replace(':slug', slug);
    location.href = url;

  });
</script>

@endsection