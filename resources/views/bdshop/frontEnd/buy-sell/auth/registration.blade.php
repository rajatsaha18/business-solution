@extends('bdshop.frontEnd.layouts.master')
@section('content')

<section style="background-color: #eee;" class="pt-5 pb-5">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4 card shadow p-3 rounded-2" action="{{route('buy-sell-register')}}" method="POST">
                    @csrf

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c">Your Name</label>
                      <input type="text" id="form3Example1c" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror"/>
                      @error('name')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                     <label class="form-label" for="form3Example3c">Your Phone Number</label>
                      <input type="number" id="form3Example3c" name="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror"/>
                      @error('phone')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label"  for="form3Example4c">Password</label>

                      <input type="password" id="form3Example4c" name="password" class="form-control @error('password') is-invalid @enderror"/>
                      @error('password')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label"  for="form3Example4cd">Repeat your password</label>

                      <input type="password" id="form3Example4cd"name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"/>
                      @error('password_confirmation')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                 
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn" style="background-color:#FFCA2C;color:black">Register</button>
                  </div>

                </form>
                <div class="text-center">
           
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{route('buy-sell.login')}}"
                class="link-danger">Login</a></p>
          </div>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://i.ibb.co/9TkVQyY/draw1-1.webp"
                  class="img-fluid" alt="Sample image">

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection