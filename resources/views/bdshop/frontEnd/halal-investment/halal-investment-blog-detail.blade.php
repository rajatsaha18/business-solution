@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
  .other-blogs a {
    text-decoration: none;
    color: black;
  }

  .imageSize {
    width:800px!important;
    height:500px!important;
    object-fit: cover!important;
  }
</style>
<section class="blog-details">
  <div class="container">
    <h6>Blog <span class="fw-bolder ms-2 me-2">></span> {{$blog->category->name}}</h6>
    <div class="row">
      <!--<div class="col-md-6 col-12">-->
      <!--   <h1 class="fw-bold lh-base pt-3">{{$blog->title}}</h1>-->
      <!--   <p class="fw-bold">By-->
      <!--    Halal Investment Editor-->
      <!--    </p>-->
      <!--    <p class="fw-bold">{{\Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</p>-->
      <!--</div>-->
      <div class="col-xl-12 col-lg-12, col-md-12 col-sm-12 col-12">
        <img src="{{asset($blog->image)}}" alt="blog-image" class="imageSize"></br>
        <span>View: {{$blog->hits}}</span>
      </div>
    </div>
    <h1 class="fw-bold lh-base pt-3">{{$blog->title}}</h1>
    <p class="fw-bold">By
      Halal Investment Editor
    </p>
    <p class="fw-bold">{{\Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</p>
    <div class="blog-description mt-4">
      <p style="text-align: justify;">{!! $blog->description !!}</p>
    </div>
  </div>
</section>

<div class="section other-blogs mt-5">
  <div class="container">
    <div class="d-flex justify-content-between">
      <h4 class="text-success fw-bolder">Other Blogs</h4>
      <a href="{{route('halal.investment.blog')}}" class="btn btn-outline-success fw-bolder">View All</a>
    </div>
    <div class="row mt-3 mb-3">
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



    </div>
  </div>
</div>

@endsection