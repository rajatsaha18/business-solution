@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')

<section class="container pb-5">
    <h2 class="text-center fw-bolder mt-5 pb-5">Terms of Use</h2>
    <p style="text-align:justify">{!!  $halalinvestmentsetting->terms_of_use   !!}</p>
</section>
@endsection