@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<!-- <section class="shariah-based pt-5">
  <div class="container">
    <h1 class="text-center fw-bolder">We are strictly Shari'ah based</h1>
    <h5 class="text-center pt-2 fw-bold">Our Shari'ah Board ensures that all returns are halal</h5>
    <div class="row mt-5">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
        <a href="#">
          <img src="{{asset('halal-investment/assets/images/commitment.svg')}}" alt="">
        </a>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
        <a href="#">
          <img src="{{asset('halal-investment/assets/images/commitment2.svg')}}" alt="">
        </a>
      </div>
      <div class="text-center certificate">
        <a href="#" class="btn btn-outline-success fw-bolder mb-5">View Certificate</a>
      </div>
    </div>

  </div>
</section>
 -->
<section style="background-color: #F1FAF6;">
  <div class="container py-5">
    <h1 class="text-center fw-bolder">We are strictly Shari'ah based</h1>
    <h5 class="text-center py-2 fw-bold">Our Shari'ah Board ensures that all returns are halal</h5>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col ">
        <div class="card h-100" style="border-radius: 20px !important;">
          <img src="{{asset('halal-investment/assets/images/commitment.svg')}}" class="card-img-top " alt="...">
          
        </div>
      </div>
      
      <div class="col">
        <div class="card h-100" style="border-radius: 20px !important;">
          <img src="{{asset('halal-investment/assets/images/commitment2.svg')}}" class="card-img-top" alt="...">
          
        </div>
      </div>
      <div class="col ">
        <div class="card h-100" style="border-radius: 20px !important;">
          <img src="{{asset('halal-investment/assets/images/commitment.svg')}}" class="card-img-top " alt="...">
          
        </div>
      </div>

    </div>
  </div>
</section>

<section class="advisor">
  <div class="container our-advisor pt-5">
    <h3 class="fw-bolder text-center">Our Shariah Advisors</h3>
    <p class="text-center pt-3 fw-bold">our Shari’ah Review Board ensure that all returns are Shari'ah Compliant.</p>
    <div class="row mt-5 gap-3">

      @foreach($advisors as $item)
      <div div class="card mb-3 p-4" style="max-width: 550px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset($item->image)}}" class="img-fluid rounded-start" style="aspect-ratio: 9/8 !important; height: 100% ; " alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text">{{$item->designation}}</p>
              <p class="card-text"><small class="text-body-secondary">{{$item->country}}</small></p>
              <p class="card-text"><small class="text-body-secondary">{{$item->short_description}}</small></p>

            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section class="prohibited pt-4 pb-5">
  <div class="container">
    <h2 class="text-center fw-bolder">Prohibited Business Activities</h2>
    <div class="row mt-4">
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-adult-entertainment.svg')}}" alt="">
        <p class="fw-bolder">Adult
          Entertainment</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-alcohal.svg')}}" alt="">
        <p class="fw-bolder">Alcohal</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-cloning.svg')}}" alt="">
        <p class="fw-bolder">Cloning</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-excess-debt.svg')}}" alt="">
        <p class="fw-bolder">Excess Debt</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-firearms.svg')}}" alt="">
        <p class="fw-bolder">Firarms</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-gaming.svg')}}" alt="">
        <p class="fw-bolder">Gaming</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-interest.svg')}}" alt="">
        <p class="fw-bolder">Interest</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-marijuana.svg')}}" alt="">
        <p class="fw-bolder">Marijuana</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-pork.svg')}}" alt="">
        <p class="fw-bolder">Pork
          Related Product</p>
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="{{asset('halal-investment/assets/images/icon-tobacco.svg')}}" alt="">
        <p class="fw-bolder">Tobacco</p>
      </div>

    </div>
  </div>
</section>


@endsection