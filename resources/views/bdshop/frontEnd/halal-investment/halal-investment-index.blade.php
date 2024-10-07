@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
  .invest-option a {
    text-decoration: none;
    color: black;
  }



  @media (max-width: 767px) {
    .bannerImage {
      height: 120px !important;
      width: 100%;
    }
  }

  @media (max-width: 575px) {
    /* .alignMent {
      padding-left: 70px;
    } */
  }

  @media (min-width: 576px) and (max-width: 767px) {
    /* .alignMent {
      padding-left: 70px;
    } */
  }

  @media (min-width: 768px) and (max-width: 991px) {
    /* .alignMent {
      padding-left: 70px;
    } */
  }

  @media (min-width: 992px) and (max-width: 1199px) {
    .alignMent {
      padding-left: 80px;
    }
  }

  @media (min-width: 1200px) and (max-width: 1399px) {
    .alignMent {
      padding-left: 80px;
    }
  }

  @media (min-width: 1400px) {
    .alignMent {
      padding-left: 80px;
    }
  }
</style>



<section class="banner-sliders pb-4">
  <div class="container">
    <div class="banner-slider">
      @foreach($sliders as $slider)

      <div class="bannerImage ">
        <img class="img-fluid bannerImage pb-3" src="{{asset($slider->image)}}" alt="">
      </div>

      @endforeach

    </div>

  </div>
</section>
<section class="counting mt-4">
  <div class="container counter p-3" style=" background-color: #007F4E;">
    <div class="row" style="align-items: center">
      <div class="col-md-4 col-12">
        <div class="row" style="align-items: center">
          <div class="col-md-4">
            <img src="{{asset('halal-investment/assets/images/icon-users.svg')}}" alt="">
          </div>
          <div class="col-md-8 pt-2">
            <h5>{{$halalinvestmentsetting->financed}}</h5>
            <h5>Financed</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="row" style="align-items: center">
          <div class="col-md-4">
            <img src="{{asset('halal-investment/assets/images/icon-stocks.svg')}}" alt="">
          </div>
          <div class="col-md-8 pt-2">
            <h5>{{$halalinvestmentsetting->investment}}</h5>
            <h5>Investment</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="row" style="align-items: center">
          <div class="col-md-4">
            <img src="{{asset('halal-investment/assets/images/icon-stocks-covered.svg')}}" alt="">
          </div>
          <div class="col-md-8 pt-2">
            <h5>{{$halalinvestmentsetting->repayment_completed}}</h5>
            <h5>Repayment Completed</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="investOption" class="invest-option my-5 py-2">
  <div class="container">
    <h2 class="text-center mb-5 fw-bolder">Ongoing Investment Options</h2>
    <div class="row ongoingInvest">
      @foreach($ongoinginvestments as $item)
      <div class="col-md-4 px-1">
        <a href="{{route('halal.investment.investment.company',$item->slug)}}">
          <div class="card  rounded">
            <img src="{{asset($item->image)}}" alt="">
            <div class="p-2">
              <h4 class="fw-bolder">{{$item->company_name}}</h4>
              <p style="height:50px">{{$item->short_info}}</p>
              <h5 class="fw-bolder">{{$item->profit_per_annum}}</h5>
              <h5>{{$item->profit_period}}</h5>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
<section class="maturtd" id="maturted">
  <div class="container">
    <h3 class="text-center fw-bolder mb-5 mt-5 pt-4">Matured Investments</h3>
    <div class="row maturtedInvest">
      @foreach($maturedinvestments as $item)
      <div class="col-md-4 px-1">
        <div class="card  p-2">
          <h5>INVESTMENT ON</h5>
          <P>{{$item->company_name}}</P>
          <h4>Repaid {{$item->total_repaid}} </h4>
        </div>
      </div>



      @endforeach

    </div>
  </div>
</section>
<section class="purify mt-4">
  <div class="container">
    <div class="text-center">
      <h3 class="text-success fw-bolder mt-5 pt-4">Purify</h3>
      <h2 style="font-weight:900;color:#484848">Your Portfolio</h2>
    </div>
    <p class="text-center mt-4">Purification Calculator is the simplest and most accurate way to purify your portfolio. With this solution, you can rest assured that your investments are not only Shariah Compliant but also correctly purified.</p>
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="row">
          <div class="col-md-1 col-1 mb-2">
            <i class="fas fa-check-circle fs-5 text-success"></i>
          </div>
          <div class="col-md-11 col-11">
            <h6 class="fw-bold">Dividend Purification Calculation</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-2">
        <div class="row">
          <div class="col-md-1 col-1">
            <i class="fas fa-check-circle fs-5 text-success"></i>
          </div>
          <div class="col-md-11 col-11">
            <h6 class="fw-bold">Interest Income Purification Calculation</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-2">
        <div class="row">
          <div class="col-md-1 col-1">
            <i class="fas fa-check-circle fs-5 text-success"></i>
          </div>
          <div class="col-md-11 col-11">
            <h6 class="fw-bold">Haram Income Purification Calculation</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="experience-team mt-5 pt-3 pb-3">
  <div class="container">
    <h3 class="fw-bolder">Meet Our<br>
      Experienced Team</h3>
    <div class="row mt-5">
      @foreach($teams as $team)

      <div class="col-md-4 col-sm-12 mb-3">
        <div class="card shadow p-3">
          <img src="{{asset($team->image)}}" alt="">
          <div class="card-body">
            <h5 class="fw-bolder">{{$team->name}}</h5>
            <h6 class="text-secondary fw-bold">{{$team->designation}}</h6>
            <hr>
            <p style="text-align: justify;">{{Str::limit($team->description,80)}}</p>
            <a href="#" class="text-success fw-bolder vm" id="team-{{$team->id}}" team_id="{{$team->id}}">View More</a>
          </div>
        </div>
      </div>


      @endforeach

    </div>
  </div>
  <!-- modal open for team -->

  <!-- Modal -->
  <div class="modal fade team_modal" id="myModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

  </div>
  <div class="container our-advisor mt-5">
    <h3 class="fw-bolder text-center">Our Shariah Advisors</h3>
    <div class="row mt-5">

      @foreach($advisors as $item)

      <div class="col-md-6 col-sm-12">

        <div class="card p-2 pt-5 pb-2 border-0 pare" style="border-radius:20px;">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <img class="img-fluid " src="{{asset($item->image)}}" alt="">
            </div>
            <div class="col-md-8 col-sm-12">
              <h5 class="fw-bolder pt-3">{{$item->name}}</h5>
              <h6 class="fw-bold">{{$item->designation}}</h6>
              <h6 class="text-secondary fw-bold">{{$item->country}}</h6>
              <p style="text-align: justify;">{{$item->short_description}}</p>
            </div>
          </div>

        </div>
        <i class="fas fa-quote-right text-success iconn"></i>
      </div>


      @endforeach

    </div>
  </div>
</section>
<section id="faq" class="faq mt-5 mb-5">
  <div class="container">
    <h6 class="text-center fw-bold text-secondary mb-5">Frequently Asked Questions</h6>
    <div class="accordion" id="accordionExample">
      @foreach($halalinvestmentfaqs as $item)

      <div class="accordion-item">
        <h2 class="accordion-header" id="heading-{{$item->id}}">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$item->id}}" aria-expanded="true" aria-controls="collapse-{{$item->id}}">
            {{$item->question}}
          </button>
        </h2>
        <div id="collapse-{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$item->id}}" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p style="text-align: justify;">{{$item->answer}}</p>
          </div>
        </div>
      </div>


      @endforeach

    </div>
    <div class="accordion-down">
      <p>More questions? Knock us on <a class="text-decoration-none text-gray-7" href="https://wa.me/8801927614040"><u>WhatsApp</u></a> or send us an <a href="mailto:sarasoftwarebd@gmail.com" class="text-gray-7 text-decoration-none"><u>an email</u></a></p>
    </div>
</section>


<section class="purify my-4">
  <div class="container alignMent">
    <div class="text-center">
      <h4 class="text-success fw-bolder my-4 pt-4">Running a business? Apply for investment!</h4>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="row">
          <div class="col-md-1 col-1 mb-2">
            <i class="fas fa-check-circle fs-5 text-success"></i>
          </div>
          <div class="col-md-11 col-11">
            <h6 class="fw-bold">Collateral-free. No mortgage required.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-2">
        <div class="row">
          <div class="col-md-1 col-1">
            <i class="fas fa-check-circle fs-5 text-success"></i>
          </div>
          <div class="col-md-11 col-11">
            <h6 class="fw-bold">Fast and Hassle-free. No need to leave your office.</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 mb-2">
        <div class="row">
          <div class="col-md-1 col-1">
            <i class="fas fa-check-circle fs-5 text-success"></i>
          </div>
          <div class="col-md-11 col-11">
            <h6 class="fw-bold">Transparent pricing.</h6>
          </div>
        </div>
      </div>
      <div class="mt-3">
        <a href="#" class="btn btn-outline-success fw-bolder">Apply for Investment</a>
      </div>
    </div>
  </div>
</section>
@endsection
@section('js')

<script>
  $(document).on("click", 'a[id^="team"]', function(event) {
    event.preventDefault();

    let id = $(this).attr('team_id');

    $.ajax({
      url: "{{route('find.team')}}",
      method: "GET",
      data: {
        id: id
      },
      success: function(data) {
        $('.modal').html(data);

        $('.team_modal').modal('show');
      }


    });


  });
</script>
<script>
  $('.ongoingInvest').slick({

    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,

        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
</script>
<script>
  $('.maturtedInvest').slick({

    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,

        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
</script>
@endsection