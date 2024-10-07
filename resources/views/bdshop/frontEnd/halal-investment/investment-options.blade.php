@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
  .ongoingInvest a{
    text-decoration: none;
    color:black;
  }
</style>
<section id="investOption" class="invest-option mt-4 mb-4 pt-3 pb-3">
  <div class="container">
    <h2 class="text-center mb-5 fw-bolder">Ongoing Investment Options</h2>
    <div class="row ongoingInvest">
      @foreach($options as $item)
      <div class="col-md-4 col-sm-12 mb-3">
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
    <div class="mb-4">
        <div class="pagination-block">
            <span class="page-numbers current">{{$options->links("pagination::bootstrap-4")}}</span>
                {{-- <a class="page-numbers" href="#">2</a>
                <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a> --}}
        </div>
    </div>
  </div>
</section>





@endsection