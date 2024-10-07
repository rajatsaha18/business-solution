@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')

<section class="container pb-5">
    <h2 class="text-center fw-bolder mt-5 pb-5">Privacy Policy</h2>
    <p style="text-align:justify">{!!  $halalinvestmentsetting->privacy_policy   !!}</p>
</section>
@endsection