@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
  .amount-card {
    height: 40px !important;
    padding: 10px;
    cursor: pointer;
  }
</style>
<section class="ongoing-investment-details mt-5">
  <div class="container">
    <div class="row invest-detail-part-one">
      <div class="col-md-6 col-sm-12">
        <img src="{{asset($data->image)}}" alt="">
        <table class="table table-bordered mt-5">

          <tbody>
            <tr>
              <th scope="row">Duration</th>
              <th scope="row" class="text-secondary">{{$data->duration}}</th>


            </tr>
            <tr>
              <th scope="row">Min. Investment</th>
              <th scope="row" class="text-secondary">{{$data->min_investment}}</th>



            </tr>
            <tr>
              <th scope="row">Projected ROI</th>
              <th scope="row" class="text-secondary">{{$data->project_roi}}</th>


            </tr>
            <tr>
              <th scope="row">Risk Grade</th>
              <th scope="row" class="text-secondary">{{$data->risk_grade}}</th>


            </tr>

          </tbody>
        </table>
        <div class="overview mt-5">
          <h3 class="fw-bolder">Overviwer</h3>
          <p style="text-align: justify;">{!! $data->description !!}</p>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 cad">
        <h6 class="bg-info w-75 text-center p-2">ASSET FINANCING <span class="text-light">|</span> SALE CONTRACT</h6>
        <h6 class="text-secondary fw-bolder" style="line-height:25px"><i class="fas fa-map-marker-alt"></i>
          {{$data->address}}
        </h6>
        <h4 class="fw-bolder mt-5">{{$data->company_name}}</h4>
        <div class="row">
          <div class="col-md-4 col-sm-12 p-1">
            <div class="card text-center p-3">
              <h4 class="text-info fw-bolder">{{$data->raised}}</h4>
              <h6 class="text-secondary fw-bolder">Raised</h6>
            </div>

          </div>
          <div class="col-md-4 col-sm-12 p-1">
            <div class="card text-center p-3">
              <h4 class="text-info fw-bolder">{{$data->being_processed}}</h4>
              <h6 class="text-secondary fw-bolder">Being Processed</h6>
            </div>

          </div>
          <div class="col-md-4 col-sm-12 p-1">
            <div class="card text-center p-3">
              <h4 class="text-info fw-bolder">{{$data->days_left}}</h4>
              <h6 class="text-secondary fw-bolder">Days Left</h6>
            </div>
          </div>
        </div>

        <h6 class="fw-bolder mt-5 mb-5">Goal: <span style="color:#0DCAF0">{{ $data->goal }}</span></h6>
        <form class="" action="{{ route('halal.investment.order') }}" method="POST">
          @csrf
          <div class="d-flex gap-2">
            <div class="card amount-card">
              <h5 onclick="getAmount(20000)">20000</h5>
            </div>
            <div class="card amount-card">
              <h5 onclick="getAmount(45000)">45000</h5>
            </div>
            <div class="card amount-card">
              <h5 onclick="getAmount(60000)">60000</h5>
            </div>
            <div class="card amount-card">
              <h5 onclick="getAmount(1000000)">1000000</h5>
            </div>
          </div>
          <div class="mt-3">
            <label for="">Amount to Invest </label>
            <input type="number" class="w-25 form-control" id="amount" name="invest_amount" required>
            <input type="hidden" value="{{ $data->id }}" name="company_id">
          </div>
          <div class="py-2">
            <button class="btn btn-warning mt-3">Invest Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
  function getAmount(amount) {
    const elem = document.getElementById("amount");
    elem.value = amount;

  }
</script>

@endsection