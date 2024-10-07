@extends('bdshop.frontEnd.layouts.master')
@section('content')
<style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>
<section class="pt-5 pb-5">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://i.ibb.co/MshCpVN/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form class="card shadow p-4"  action="{{route('buy-sell.login')}}" method="POST">
          @csrf
          <div class="mx-auto">
            <p class="lead fw-normal mb-5 me-3">Sign in 

            </p>
            
          </div>

        

          <!-- Email input -->
          <div class="form-outline mb-4">
            
          <label class="form-label" for="form3Example3" style="color:black">Your Phone Number</label>
            <input type="number" id="form3Example3" name="phone" value="{{old('phone')}}" class="form-control  @error('phone') is-invalid @enderror"
              placeholder="Enter a valid phone number" />
              @error('name')
                        <div class="text-danger">* {{ $message }}</div>
              @enderror
           
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4" style="color:black">Password</label>
            <input type="password" id="form3Example4" name="password" class="form-control @error('password') is-invalid @enderror"
              placeholder="Enter password" />
              @error('password')
                        <div class="text-danger">* {{ $message }}</div>
              @enderror
           
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn"
              style="padding-left: 2.5rem; padding-right: 2.5rem;background-color:#FFCA2C;color:black">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('buy-sell-register')}}"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</section>



@endsection