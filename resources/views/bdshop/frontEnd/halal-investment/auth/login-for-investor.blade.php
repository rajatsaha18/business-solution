@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')


<section class="login mt-5 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="form-card card shadow border-0 p-3">
                <h5 class="fw-bolder pt-2 pb-2">Assalamu Alaykum</h5>
                <p class="text-secondary fw-bolder">Login For Investor</p>
                <form action="{{route('login.for.investor.submit')}}" method="POST">
                  @csrf
                    <div class="mb-3">
                        <label for="" class="fw-bolder mb-2">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}">
                        @error('email')
                        <div class="text-danger">* {{ $message }}</div>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bolder mb-2">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                        <div class="text-danger">* {{ $message }}</div>
                       @enderror
                    </div>


                    <div>
                       <button class="btn btn-outline-success fw-bolder">Login</button>
                    </div>
                    <p class="pt-3">Don't have an account? <a href="{{route('register.for.investor')}}" class="text-success">Register</a></p>
                </form>

              </div>

            </div>
            <div class="col-md-2 col-sm-12">

            </div>
            <div class="col-md-6 col-sm-12">
                 <img src="{{asset('halal-investment/assets/images/auth.jpg')}}" alt="">
            </div>
          </div>
        </div>
      </section>
      @endsection
