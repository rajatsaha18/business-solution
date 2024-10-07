@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
<style>
    .executive-team a,
    .management-team a,
    .marketing-team a {
        text-decoration: none;
        color: black;
    }
</style>
<!-- <section class="banner-sliders">
    <div class="container">
        <div class="banner-slider">
            @foreach($sliders as $slider)

            <div>
                <img style="aspect-ratio: 9/2 !important;" class="img-fluid" src="{{asset($slider->image)}}" alt="">
            </div>

            @endforeach

        </div>

    </div>
</section> -->
@include('bdshop.frontEnd.halal-investment.components.slider')
<section class="mission">
    <div class="container">
        <h3 class="text-center text-success fw-bolder">Our Mission</h3>
        <p class="text-center mt-3 fs-5"> {!! $halalinvestmentsetting->mission !!}</p>
        <img src="{{asset($halalinvestmentsetting->mission_image)}}" class="img-fluid w-100" alt="">
    </div>
</section>
<section class="vision mt-5">
    <div class="container pb-5">
        <h3 class="text-center text-success fw-bolder pt-5">Our Vision</h3>
        <p class="text-center mt-3 fs-5">{!! $halalinvestmentsetting->vision !!}</p>
        <img src="{{asset($halalinvestmentsetting->vision_image)}}" alt="">
    </div>
</section>
<!-- <section class="executive-team pt-5 pb-5">
    <div class="container">
        <h3 class="fw-bolder text-center text-success mb-5">Executive Team</h3>
        <div class="row">
            @foreach($executives as $team)

            <div class="col-md-4 col-12">
                <a href="#" id="team-{{$team->id}}" team_id="{{$team->id}}">
                    <div class="card p-3 border-0">
                        <img src="{{asset($team->image)}}" alt="">
                        <div class="card-body mt-2">
                            <h6 class="fw-bolder text-center">{{$team->name}}</h6>
                            <p class="fw-bold text-center">{{$team->designation}}</p>
                        </div>
                    </div>
                </a>
            </div>



            @endforeach

        </div>
    </div>
</section> -->


<!-- <section class="management-team pt-5 pb-5">
    <div class="container">
        <h3 class="fw-bolder text-center text-success mb-5">Management Team</h3>
        <div class="row">
            <div class="col-md-3 col-12">

            </div>
            @foreach($managements as $team)
            <div class="col-md-3 col-12">
                <a href="#" id="team-{{$team->id}}" team_id="{{$team->id}}">
                    <div class="card p-3 border-0">
                        <img src="{{asset($team->image)}}" alt="">
                        <div class="card-body mt-2">
                            <h6 class="fw-bolder text-center">{{$team->name}}</h6>
                            <p class="fw-bold text-center">{{$team->designation}}</p>
                        </div>
                    </div>
                </a>
            </div>





            @endforeach
            <div class="col-md-3 col-12">

            </div>
        </div>
    </div>
</section> -->


<section class="marketing-team pt-5 pb-5">
    <div class="container">
        <h3 class="fw-bolder text-center text-success mb-5">Team</h3>
        <div class="row">
            @foreach($marketings as $team)
            <div class="col-md-3 col-12">
                <a href="#" id="team-{{$team->id}}" team_id="{{$team->id}}">
                    <div class="card p-3 border-0">
                        <img src="{{asset($team->image)}}" alt="">
                        <div class="card-body mt-2">
                            <h6 class="fw-bolder text-center">{{$team->name}}</h6>
                            <p class="fw-bold text-center">{{$team->designation}}</p>
                        </div>
                    </div>
                </a>
            </div>


            @endforeach

        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade team_modal" id="myModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>

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

@endsection