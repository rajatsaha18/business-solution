@extends('Hospital.frontend.layouts.app')
@section('content')
@include('Hospital.frontend.components.slider')
<!-- END REVOLUTION SLIDER -->


<!--site-main start-->
<div class="site-main">

  <!-- @include('Hospital.frontend.pages.home.banner') -->
  <style>
    .categories-parent {
      width: 150px;
      height: 220px;
    }

    .categories-parent .categories-img-zoom {
      overflow: hidden;
    }

    .categories-wrap {
      padding: 4px;
      height: auto;
      width: 100%;
      margin: 10px 0px;
      border: 1px solid #d9d7d7;
    }

    .cat-cards .cat-a:hover {
      color: #0089D0 !important;
    }

    .cat-name {
      height: 120px !important;
    }

    @media (max-width: 600px) {
      .cat-cards {
        width: 100% !important;
      }

      .cat-name {
        height: 140px !important;
      }

    }

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

    .clients-class .topPrevarrow {
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

    .your-class .topNextarrow {
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
      /* right: -12px; */
      right: -22px;
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

    .clients-class .topNextarrow {
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
      /* right: -12px; */
      right: -22px;
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

    .imageSize {
      aspect-ratio: 9/8;
    }

    .newsImageSize {
      aspect-ratio: 9/6;
    }
  </style>

  <!-- sidebar -->
  <div class="sidebar ttm-sidebar-left pt-40 pb-40 clearfix">
    <h4 class="text-center pb-5" style="color:#193D87">Products</h4>
    <div class="container" style="margin-top:50px">
      <!-- row -->
      <div class="row">

        <?php
        $categories = DB::table('hospital_categories')->where('status', 1)->get();
        ?>
        @foreach($products as $product)

        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 cat-cards text-center mb-3">
          <a href="{{route('hospital.home.single.product.show',$product->slug)}}">
            <div class="card pb-2 shadow">
              <div style="text-align:center;display:block;margin:0 auto">
                {{-- @dd($product->frontend_image); --}}
                <img class="card-img-top imageSize" src="{{asset($product->frontend_image)}}" alt="Card image cap">
              </div>

              <div class="card-body cat-name" style="padding-top:20px">

                <a href="{{route('hospital.home.single.product.show',$product->slug)}}" class="cat-a" style="font-size:16px;font-weight:600;">{{$product->title}}</a>
              </div>
            </div>
          </a>
        </div>

        @endforeach
      </div><!-- row end -->
    </div>
  </div>
  <div class="sidebar ttm-sidebar-left pt-40 pb-40 clearfix">
    <h4 class="text-center pb-5" style="color:#193D87">Services</h4>
    <div class="container" style="margin-top:50px">
      <!-- row -->
      <div class="row">

        <?php
        $categories = DB::table('hospital_categories')->where('status', 1)->get();
        ?>
        @foreach($products_services as $product)

        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 cat-cards text-center mb-3">
          <a href="{{route('hospital.home.single.product.show',$product->slug)}}">
            <div class="card pb-2 shadow">
              <div style="text-align:center;display:block;margin:0 auto">
                <img class="card-img-top imageSize" src="{{asset($product->frontend_image)}}" alt="Card image cap">
              </div>

              <div class="card-body cat-name" style="padding-top:20px">

                <a href="{{route('hospital.home.single.product.show',$product->slug)}}" class="cat-a" style="font-size:16px;font-weight:600;">{{$product->title}}</a>
              </div>
            </div>
          </a>
        </div>

        @endforeach
      </div><!-- row end -->
    </div>
  </div>
  <div class="sidebar ttm-sidebar-left pt-40 pb-40 clearfix">
    <h4 class="text-center pb-5" style="color:#193D87">Latest News and Blogs</h4>
    <div class="container" style="margin-top:50px">
      <div class="row">
        <div class="col-md-12">
          <div class="your-class">
            @foreach ($latestNews as $blog)
            <div class="card mr-2" style="width: 18rem;">
              <img class="img-fluid newsImageSize" src="{{ URL::to('/') }}/{{ $blog->image }}" style="height:380px!important" alt="" target="_blank">
              <div class="card-body">

                <!-- <p class="card-text">Latest News</p> -->
                <p class="card-text"><a href="{{ route('hospital.home.single.blog.show', $blog->slug) }}" target="_blank"><b>{{$blog->title}}</b></a></p>
                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-black" href="{{ route('hospital.home.single.blog.show', $blog->slug) }}" title="">Read More <i class="ti ti-angle-double-right"></i></a>
              </div>
            </div>
            @endforeach

          </div>



        </div>
      </div>
    </div>
  </div>
  <div class="sidebar ttm-sidebar-left pt-40 pb-40 clearfix">
    <h4 class="text-center pb-5" style="color:#193D87">Clients We Serve</h4>
    <div class="container" style="margin-top:50px">
      <div class="row">
        <div class="col-md-12">
          <div class="clients-class">
            @foreach ($clients as $client)
            <div class="card mr-1" style="width: 18rem;">
              <img class="img-fluid" src="{{ URL::to('/') }}/{{ $client->image }}" style="width:100%;height:150px;" alt="" target="_blank">

            </div>
            @endforeach

          </div>



        </div>
      </div>
    </div>
  </div>



  <!-- sidebar end -->

</div>
<!--site-main end-->

@endsection
@section('script')

<script>
  $('.your-class').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    infinite: true,
    centerPadding: '40px',
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fa fa-angle-left topPrevarrow"></i>',
    nextArrow: '<i class="fa fa-angle-right topNextarrow"></i>',
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 414,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
  $('.clients-class').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    infinite: true,
    centerPadding: '40px',
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow: '<i class="fa fa-angle-left topPrevarrow"></i>',
    nextArrow: '<i class="fa fa-angle-right topNextarrow"></i>',
    responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 414,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      }
    ]
  });
</script>
@endsection