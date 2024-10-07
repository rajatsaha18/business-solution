<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('halal-investment/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('halal-investment/assets/css/slick.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="{{asset('massage/toastr/toastr.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet"> -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Halal Investment</title>
  <!--google adsense code-->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9770250993832701" crossorigin="anonymous"></script>
  <!-- First Ad Size -->
  {{-- <ins class="adsbygoogle"
     style="display:block;width:1200px;height:90px;margin:0 auto"
     data-ad-client="ca-pub-9770250993832701"
     data-ad-slot="5253169634"></ins> --}}
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>

  <style>
    .buttonSize {
      padding: 10px !important;
      font-size: 14px !important;
      font-weight: 600 !important;
      background-color: #00a86b;
      color: #fff !important;
      border-radius: 3px !important;

    }

    .buttonSize:hover {
      background-color: #fff;
      color: #198754 !important;
      border: 1px solid #198754 !important;
      border-radius: 3px !important;
    }

    .buttonSize:focus {
      background-color: #fff;
      color: #198754 !important;
      border: 1px solid #198754 !important;
      border-radius: 3px !important;
    }

    .buttonSize:active {
      background-color: #fff;
      color: #198754 !important;
      border: 1px solid #198754 !important;
      border-radius: 3px !important;


    }

    .iconColor {
      color: #00a86b !important;
    }



    @media (max-width: 575px) {
      .containers {
        display: flex;
        width: 100%;
        justify-content: space-between;
        flex-direction: row-reverse
      }

      .showBtnLargeDevice {
        display: none;
      }
    }

    @media (min-width: 576px) {
      .containers {
        display: flex;
        width: 100%;
        justify-content: space-between;
        flex-direction: row-reverse
      }

      .showBtnLargeDevice {
        display: none;
      }
    }

    @media (min-width: 768px) {
      .containers {
        display: flex;
        width: 100%;
        justify-content: space-between;
        flex-direction: row-reverse
      }

      .showBtnLargeDevice {
        display: none;
      }
    }

    @media (min-width: 992px) {
      .btnShowDevice {
        display: none;
      }

      .showBtnLargeDevice {
        display: block;
        width: 16rem;
      }

      .containers {
        display: none;
      }
    }

    @media (min-width: 1200px) {
      .btnShowDevice {
        display: none;
      }

      .showBtnLargeDevice {
        display: block;
        width: 16rem;
      }

      .containers {
        display: none;
      }
    }

    @media (min-width: 1400px) {
      .btnShowDevice {
        display: none;
      }

      .showBtnLargeDevice {
        display: block;
        width: 16rem;
      }

      .containers {
        display: none;
      }
    }
  </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B6XRXQMN37"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-B6XRXQMN37');
</script>

<body>
  <style>
    .trade a {
      text-decoration: none;
      color: #3FA12D;
      font-weight: 600;
      font-size: 20px;

    }
  </style>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand fw-bolder" href="{{route('halal.investment.index')}}"><img style="aspect-ratio: 9/1 !important ; " src="{{asset('halal-investment/assets/images/Halal-Investment.png')}}" alt=""></a>

          <div class="containers mb-4">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="buttonSize btnShowDevice" style="text-decoration: none;" href="{{route('home')}}">
              << Back to Business Solution</a>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ps-3">


              <li class="nav-item dropdown fw-bolder">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Invest
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-dark" href="{{route('halal.investment.option')}}">Investment Option</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('login.for.investment.seeker')}}">Investment Seeker</a></li>
                  <!--<li><a class="dropdown-item text-dark" href="#">Partners</a></li>-->
                  <!--<li><a class="dropdown-item text-dark" href="#maturted">Matured Investments</a></li>-->
                  <li><a class="dropdown-item text-dark" href="{{route('login.for.investor')}}">Be an Investor</a></li>
                  <!--<li><a class="dropdown-item text-dark" href="#faq">FAQ</a></li>-->
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link active fw-bolder" aria-current="page" href="{{route('halal.investment.shariah')}}">Shariah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fw-bolder" aria-current="page" href="{{route('halal.investment.who.are.we')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fw-bolder" aria-current="page" href="{{route('halal.investment.contact')}}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fw-bolder" aria-current="page" href="{{route('halal.investment.blog')}}">Blog</a>
              </li>


              <li class="nav-item dropdown fw-bolder">
                @if(Auth::user() && Auth::user()->role_id==4 || Auth::user() && Auth::user()->role_id==5)

                <a class="nav-link dropdown-toggle btn btn-success text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @if(Auth::user() && Auth::user()->role_id==4)

                  <li><a class="dropdown-item text-dark" href="{{route('investmentseeker.dashboard')}}">Dashboard</a></li>
                  @elseif(Auth::user() && Auth::user()->role_id==5)

                  <li><a class="dropdown-item text-dark" href="{{route('investor.dashboard')}}">Dashboard</a></li>

                  @endif
                  <li> <a href="{{route('logout')}}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                    </a>
                    <br>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>

                </ul>

                @else
                <a class="nav-link dropdown-toggle btn text-light" style="background-color:#00a86b!important;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sign In
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-dark" href="{{route('login.for.investment.seeker')}}">Investment Seeker</a></li>
                  <li><a class="dropdown-item text-dark" href="{{route('login.for.investor')}}">Investor</a></li>

                </ul>


                @endif
              </li>
            </ul>

          </div>
        </div>
      </nav>
      <div class="container trade mb-4">
        <a class="buttonSize showBtnLargeDevice" href="{{route('home')}}">
          << Back to Business Solution</a>
      </div>

    </div>
  </header>


  @yield('content')



  <footer>
    <div class="container pt-4 pb-4">
      <div class="row">
        <div class="col-md-4">
          <h5 class="mb-4">Important Link</h5>
          <div class="links d-flex flex-column">
            <a href="{{route('halal.investment.shariah')}}"><i class="fas fa-long-arrow-alt-right me-3"></i> Shariah</a>
            <a href="{{route('halal.investment.who.are.we')}}"><i class="fas fa-long-arrow-alt-right me-3"></i> Who are We?</a>
            <a href="{{route('halal.investment.blog')}}"><i class="fas fa-long-arrow-alt-right me-3"></i> Blog</a>
            <div>
              <form action="{{ route('newsletter.store.submit') }}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="email" style="padding:5px; width: 80%; " placeholder="Enter Your Address" required>
                </div>
                <div class="d-block mx-auto">
                  <button type="submit" style="background-color:#00a86b!important;" class="btn mt-2 mb-2 btn-sm text-white ">Subscribe</button>
                </div>
              </form>
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <h5 class="mb-4">Legal</h5>
          <div class="links d-flex flex-column">
            <a href="{{route('halal.investment.terms.of.use')}}"><i class="fas fa-long-arrow-alt-right me-3"></i>Terms of Use</a>
            <a href="{{route('halal.investment.privacy.policy')}}"><i class="fas fa-long-arrow-alt-right me-3"></i> Privacy Policy</a>
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="mb-4">Contact</h5>
          <div class="links d-flex flex-row align-items-baseline">
            <div>
              <i class="fas fa-map-marker-alt me-2 iconColor"></i>
            </div>
            <div>
              <p>{!! $halalinvestmentsetting->address!!}</p>
            </div>

          </div>
          <div class="links d-flex flex-row">
            <div>
              <i class="fas fa-envelope me-2 iconColor"></i>
            </div>
            <div>
              <p>{{$halalinvestmentsetting->email}}</p>
            </div>

          </div>
          <div class="links d-flex flex-row">
            <div>
              <i class="fas fa-phone me-2 iconColor"></i>
            </div>
            <div>
              <p>{{$halalinvestmentsetting->phone}}</p>
            </div>

          </div>

        </div>
        <!-- <div class="col-md-2">
          <a class="navbar-brand fw-bolder" href="#"><img src="assets/images/favicon.png" alt="">Halal Investment</a>
          <div class="map mt-4">
            <iframe src="{{$halalinvestmentsetting->map}}" style="border:0; aspect-ratio: 9/3; width: 100; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div> -->
      </div>

    </div>
    <hr>
    <div class="container">
      <div class="text-center pb-3">
        <span>Business Solution All Rights Reserved</span>
      </div>
    </div>
    <!--<div class="container">-->
    <!--  <div class="text-center pb-3">-->
    <!--    <span id="head" class="text-light "></span><a href="" id="changetext" target="__blank"><span id="site" class="fw-bolder fs-6" style="color:#A1D154"> </span></a>-->
    <!--  </div>-->
    <!--</div>-->
  </footer>
  <script>
    // var head = ["The Largest business portal in bangladesh -- ", "The site is designed & hosted by -- ", "Powered by -- "];
    // var site = ["TradeInfo", "SaraSoftware", "TradeInfo"];
    // var link = ["https://tradeinfo.com.bd/", "https://sarasoftware.com.bd/", "https://tradeinfo.com.bd/"];
    // var counter = 0;
    // var elem_one = document.getElementById("head");
    // var elem_two = document.getElementById("site");
    // var elem_three = document.getElementById("changetext");

    // var inst = setInterval(change, 2000);

    // function change() {
    //   elem_one.innerHTML = head[counter];
    //   elem_two.innerHTML = site[counter];
    //   elem_three.href = link[counter];
    //   elem_three.setAttribute("target", "__blank");
    //   counter++;
    //   if (counter >= head.length) {
    //     counter = 0;

    //   }
    // }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{asset('halal-investment/assets/js/slick.min.js')}}"></script>
  <script src="{{asset('halal-investment/assets/js/script.js')}}"></script>
  <script src="{{asset('massage/toastr/toastr.js')}}"></script>



  @yield('js')
  {!! Toastr::message() !!}

</body>

</html>