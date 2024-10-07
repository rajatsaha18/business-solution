
@extends('bdshop.frontEnd.halal-investment.layouts.app')

@section('content')

<section class="login mt-5 mb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="form-card card shadow border-0 p-3">
              <h5 class="fw-bolder pt-2 pb-2">Assalamu Alaykum</h5>
                <p class="text-secondary fw-bolder">Join as an Investment Seeker</p>

                <form action="{{route('register.for.investment.seeker.submit')}}" method="POST">
                  @csrf
                    <div class="mb-3">
                        <label for="" class="fw-bolder mb-2">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')}}">
                        @error('name')
                        <div class="text-danger">* {{ $message }}</div>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bolder mb-2">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone')}}">
                        @error('phone')
                        <div class="text-danger">* {{ $message }}</div>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bolder mb-2">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}">
                        @error('email')
                        <div class="text-danger">* {{ $message }}</div>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bolder mb-2">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password">
                        @error('password')
                        <div class="text-danger">* {{ $message }}</div>
                       @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="fw-bolder mb-2">Confirm Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                        @error('password_confirmation')
                        <div class="text-danger">* {{ $message }}</div>
                       @enderror
                    </div>


                    <div>
                       <button class="btn btn-outline-success fw-bolder">Register</button>
                    </div>
                    <p class="pt-3">Already have an account? <a href="{{route('login.for.investment.seeker')}}" class="text-success">Login</a></p>
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
