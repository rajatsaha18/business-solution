<style>
  .navbar {}
</style>
@php
$businessSiteSetting = App\Models\BusinessHomeSiteSetting::first();
@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">
      @if (isset($businessSiteSetting->logo))
      <img src="{{asset($businessSiteSetting->logo)}}" alt="" style="height: 20px;width:157px">

      @endif
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font_size">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}"><i class="fa-solid fa-house-user"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}"><i class="fa-regular fa-address-card"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('gallery.home')}}"><i class="fa-brands fa-envira"></i> Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('business-contact')}}"><i class="fa-regular fa-id-badge"></i> Contact</a>
        </li>


      </ul>
      @php
      $social_links = App\BdSocialLink::first();
      @endphp

      <div class="navbar-nav socialLink">
        <li class="nav-item">
          <a class="nav-link fs-6 fw-medium me-2" href="{{isset($social_links->facebook)?$social_links->facebook:''}}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 fw-medium me-2" href="#"><i class="fa-brands fa-x-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 fw-medium me-2" href="{{isset($social_links->linkdin)?$social_links->linkdin:''}}" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 fw-medium" href="{{isset($social_links->youtube)?$social_links->youtube:''}}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
        </li>


      </div>
    </div>
  </div>
</nav>