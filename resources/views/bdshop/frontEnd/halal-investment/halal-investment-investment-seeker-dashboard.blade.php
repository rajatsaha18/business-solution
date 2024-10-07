@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')
    <style>
        .investmentseeker-navbar a {
            text-decoration: none;
            color: green;
            font-weight: 600;
            font-size: 20px;
        }

        .user a {
            text-decoration: none;
        }
    </style>
    <section class="container mt-3 investmentseeker-navbar">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('investmentseeker.dashboard') }}">Dashboard</a>
                    <a href="{{ route('investmentseeker.investment.seeker.profile') }}">Profile</a>
                    <a href="{{ route('investmentseeker.investment.seeker.account.detail') }}">Account Details</a>
                    @if(Auth::user()->role_id==4)
                    <a href="{{ route('investmentseeker.investment.seeker.receive.payment') }}">Receive Payment</a>

                    @endif
                </div>
            </div>
        </div>
        <hr>
    </section>
    <section class="user container mt-5 mb-3 pb-5">
        <h4 class="fw-bolder">Hello <span class="text-success">{{ Auth::user()->name }}</span>, Welcome to your dashboard</h4>
        <h5>Click for <a href="{{ route('investmentseeker.business.seeker.investment') }}"
                class="text-success fw-bold">Application form for Businesses seeking investment</a>. or Feedback from <a
                id="adminfedback" style="cursor:pointer" class="text-success fw-bold">Admin Feedback</a></h5>
    </section>

    <section>
        <div class="container admin-feedback">
            @if (count($adminfeedback)>0)
                @foreach ($adminfeedback as $item)
                    <h5 class="fw-bolder">Business Name: {{ $item->business_name }}</h5>
                    <p class="fw-bolder mb-3">Admin Feedback: {{ $item->admin_review }}</p>
                @endforeach
            @else
                <h5 class="text-danger">You have not submit your company info yet!</h5>
            @endif
        </div>
    </section>
@endsection
@section('js')
    <script>
        $('.admin-feedback').hide();
        $('#adminfedback').click(function() {
            $('.admin-feedback').show();
        });
    </script>
@endsection
