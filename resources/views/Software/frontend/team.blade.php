@extends('Software.frontend.master')
@section('content')
{{-- @dd( $sitebanner) --}}
<style>
    @media (max-width: 576px) {

        .bg-cover {
            background-image: url('{{asset($sitebanner->team_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-space {
            padding-left: 60px !important;
            padding-right: 60px !important;
        }
    }

    @media (min-width: 577px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->team_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 768px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->team_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 992px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->team_banner)}}') !important;
            background-size: cover !important;
            height:400px!important;
            width:100%!important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 1200px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->team_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }


    @media (min-width: 1400px) {
        .bg-cover {
            background-image: url('{{asset($sitebanner->team_banner)}}') !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            aspect-ratio: 16/6;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }



    /*  */
</style>
<!-- breadcrumb-area start -->
<div class="bg-cover">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title text-white">Team</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list text-white">
                        <li class="breadcrumb-item"><a class="" href="{{ url('/') }}">Home</a></li>
                        <li class="active text-white">> Team</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->





<div class="site-wrapper-reveal">
    <!-- ============ Team Member Wrapper Start =============== -->
    <div class="team-member-wrapper section-space--pt_100 section-space--pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-space--mb_60 text-center">
                        <h3 class="heading">We pride ourselves on having a team <br> of <span class="text-color-primary">highly-skilled</span> experts</h3>
                    </div>
                </div>
            </div>
            {{-- <div class="row ht-team-member-style-two">
                <div class="col-lg-4 col-md-6 wow move-up">
                    <div class="grid-item">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/team/team-member-07-370x455.webp" alt="">
            <div class="social-networks">
                <div class="inner">
                    <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                    </a>
                    <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                    </a>
                    <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="team-info text-center">
            <h5 class="name">Dollie Horton </h5>
            <div class="position">Marketing</div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-4 col-md-6 wow move-up">
    <div class="grid-item">
        <div class="ht-team-member">
            <div class="team-image">
                <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/team/team-member-01-370x455.webp" alt="">
                <div class="social-networks">
                    <div class="inner">
                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-info text-center">
                <h5 class="name">Stephen Mearsley </h5>
                <div class="position">President & CEO</div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 wow move-up">
    <div class="grid-item">
        <div class="ht-team-member">
            <div class="team-image">
                <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/team/team-member-06-370x455.webp" alt="">
                <div class="social-networks">
                    <div class="inner">
                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-info text-center">
                <h5 class="name">Maggie Strickland </h5>
                <div class="position">Financial Services</div>
            </div>
        </div>
    </div>
</div>
</div> --}}
<div class="row ht-team-member-style-three">

    {{-- <div class="col-lg-3 col-md-6 wow move-up">
                    <div class="grid-item mb-30">
                        <div class="ht-team-member">
                            <div class="team-image">
                                <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/team/team-member-04-370x452.webp" alt="">
    <div class="social-networks">
        <div class="inner">
            <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
            </a>
            <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
            </a>
            <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</div>
<div class="team-info text-center">
    <h6 class="name">Stephany Mearsley </h6>
    <div class="position">Marketing</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 wow move-up">
    <div class="grid-item  mb-30">
        <div class="ht-team-member">
            <div class="team-image">
                <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/team/team-member-05-370x452.webp" alt="">
                <div class="social-networks">
                    <div class="inner">
                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-info text-center">
                <h6 class="name">Monica Blews </h6>
                <div class="position">Marketing</div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 wow move-up">
    <div class="grid-item mb-30">
        <div class="ht-team-member">
            <div class="team-image">
                <img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/team/team-member-03-370x452.webp" alt="">
                <div class="social-networks">
                    <div class="inner">
                        <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-info text-center">
                <h6 class="name">Maggie Strickland </h6>
                <div class="position">Marketing</div>
            </div>
        </div>
    </div>
</div> --}}
@forelse ($teams as $team)
{{-- @dd($team) --}}
@if (!empty($team->image))
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 card-space wow move-up ">
    <div class="grid-item mb-30 shadow">
        <div class="ht-team-member">
            <div class="team-image">
                <img style="height: 250px; width:100%" class="img-fluid" src="{{ asset($team->image) }}" alt="{{ $team->name }}">
                <div class="social-networks">
                    <div class="inner">
                        <a target="_blank" href="{{ $team->facebook }}" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                        </a>
                        <a target="_blank" href="{{ $team->twitter }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="{{ $team->instragram }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-info text-center pb-3">
                <h6 class="name">{{ $team->name }}</h6>
                <div class="position">{{ $team->designation }}</div>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 card-space wow move-up">
    <div class="grid-item mb-30 shadow">
        <div class="ht-team-member ">
            <div class="team-image">
                <img style="height: 250px; width:100%" class="img-fluid" src="{{ asset('frontend2/assets/img/No-Image.svg.png') }}" alt="{{ $team->name }}">
                <div class="social-networks">
                    <div class="inner">
                        <a target="_blank" href="{{ $team->facebook }}" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                        </a>
                        <a target="_blank" href="{{ $team->twitter }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                        </a>
                        <a target="_blank" href="{{ $team->instragram }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="team-info text-center pb-3">
                <h6 class="name">{{ $team->name }}</h6>
                <div class="position">{{ $team->designation }}</div>
            </div>
        </div>
    </div>
</div>
@endif
@empty
@endforelse

</div>

</div>
</div>
<!-- ============ Team Member Wrapper End =============== -->


</div>
@endsection