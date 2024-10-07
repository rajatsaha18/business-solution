<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
    $ssetting=App\Models\SiteSetting::first();
   @endphp
   @php
        $general_settings = App\BdGeneralSetting::first();
        $cate = App\Models\PageCategory::where('slug','important-link')->where('status',1)->first();
         $pages = App\Models\Page::where('status',1)->where('category_id',$cate->id)->get();
    @endphp
    @php
      $social_links = App\BdSocialLink::first();
    @endphp
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    @if(isset($ssetting->meta_title))
    <title>{{$ssetting->meta_title}}</title>
    @else
    <title>Business Solution</title>
    @endif
    <meta name="description" content="{{isset($ssetting->meta_description)?$ssetting->meta_description:''}}">
    <meta name="keywords" content="{{isset($ssetting->meta_keyword)?$ssetting->meta_keyword:''}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('buysell/asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('buysell/asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('buysell/asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <link rel="stylesheet" href="{{asset('massage/toastr/toastr.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
       <!--google adsense code-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9770250993832701"
     crossorigin="anonymous"></script>
</head>

<style>
  .navbar-toggler {

    background-color: none!important;
    border: none!important;
    color:white!important;

}
.navbar-toggler.collapsed{
  color:white!important;
}
footer a{
  color:#1895D7!important;
  padding-bottom:10px;
  font-weight: 500;
  text-decoration: none;
}
footer h6{
  color:#424E4E!important;
  font-weight: 600;
  padding-bottom:20px;

}
@media(max-width:600px){
  .nav-item a{
    padding:10px 10px!important;
    margin-bottom:10px;
    display:block;
    text-align:center;
    width:200px;

  }
  .me-3{
    margin-right:0px!important;
  }
}
</style>
<body style="background-color:#E7EDEE">
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #e0e0e0;">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars text-light" aria-hidden="true"></i>

              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                  <li class="nav-item me-4">
                    <a class="nav-link" aria-current="page" href="{{route('info')}}">
 @if(isset($general_settings->logo))

 <img src="{{asset($general_settings->logo)}}" alt="" style="height: 61px;width:166px">

 @endif
                           </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn" href="{{route('all.ads')}}" style="background-color: #ffffff4a;color:black!important;font-weight: 600;">All Ads</a>
                  </li>

                </ul>
                <divclass="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center text-dark">
                        @if(Auth::user() && Auth::user()->role_id=='3')

                        <li class="nav-item me-3">
                          <a class="nav-link btn" style="background-color: #b7b7b7;color:black!important;font-weight: 600;" aria-current="page" href="{{route('buyselluser.dashboard')}}">My Account</a>
                        </li>
                        @else
                        <li class="nav-item me-3">
                          <a class="nav-link btn" style="background-color: #b7b7b7;color:black!important;font-weight: 600;" aria-current="page" href="{{route('buy-sell.login')}}">Login</a>
                        </li>
                        @endif

                        <li class="nav-item">
                          <a class="nav-link btn btn-warning" href="{{route('buyselluser.post.add')}}" style="color:black!important;font-weight:600;">Post Your Ads</a>
                        </li>

                      </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    @yield('content')

    <footer style="background-color:white" class="mt-4">
       <div class="container pt-4 pb-2">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <h6>Connect Us</h6>
            <a href="{{$social_links->facebook}}" style="color:#3B63B7!important;font-weight:500" target="_blank"><i class="fa fa-facebook-square fs-4" style="background-color:transparent!important" aria-hidden="true"></i>
            Like Us On Facebook</a>

          </div>
          <div class="col-md-3 col-sm-12">
            <h6>About Us</h6>
            <p style="text-align:justify">{{isset($ssetting->about)?$ssetting->about:''}}</p>

          </div>
          <div class="col-md-3 col-sm-12">
            <h6>Follow TradeInfo</h6>
             <div style="display:flex;flex-direction:column">
                <a href="{{$social_links->facebook}}">Facebook</a>
                <a href="{{$social_links->linkdin}}">Linkedin</a>
                <a href="{{$social_links->youtube}}">YouTube</a>
             </div>

          </div>
          <div class="col-md-3 col-sm-12">
            <h6>About TradeInfo</h6>

             <div style="display:flex;flex-direction:column">
             @foreach($pages as $page)
             <a href="{{route('page-details',$page->slug)}}">{{$page->name}}</a>
              @endforeach
             </div>

          </div>
        </div>
        <hr>
         <p class="text-center">© 2021-<script>document.write(new Date().getFullYear())</script> TradeInfoBd All Rights Reserved</p>
       </div>
    </footer>

    <script src="{{asset('buysell/asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('buysell/asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('massage/toastr/toastr.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @yield('js')


    <script>
         $(document).ready(function() {
  $('#summernote').summernote();
});
    </script>


</body>
</html>
