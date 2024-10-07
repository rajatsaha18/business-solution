@extends('frontend.layouts.app')
@section('content')
    <style>
        .daohang>li>a {


            color: black !important;

        }

        .fas.fa-search {
            color: black !important
        }
    </style>





    <body>




        <!--  banner  -->

        <div class="fenbanner mat1">
            <img src="{{ asset('frontend_two/fenbanner_.png') }}" title="Company Overview" alt="Company Overview">
            <p class="fenbiao">{{ $page_details->name }}</p>

        </div>
        <!--  mianbao  -->
        <div class="mianbao mianbao2   zong">
            <a href="{{ route('home.index') }}" title="Home">Home</a>
            &gt;
            <a href="#">{{ $page_details->name }}</a>
        </div>




        <!--  main2  -->
        <div class="ab1main2">
            <div class="zong">
                <p>{!! $page_details->description !!}</p>

            </div>
        </div>




@endsection
