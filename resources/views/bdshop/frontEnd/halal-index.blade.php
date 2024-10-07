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
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet"> -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Halal Investment</title>
  </head>
  <body>
     <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand fw-bolder" href="index.html"><img src="assets/images/favicon.png" alt="">    Halal Investment</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ps-3">


                      <li class="nav-item dropdown fw-bolder">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Invest
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item text-dark" href="#investOption">Investment Option</a></li>
                          <li><a class="dropdown-item text-dark"  href="#">Investment Seeker Application</a></li>
                          <li><a class="dropdown-item text-dark"  href="#">Partners</a></li>
                          <li><a class="dropdown-item text-dark"  href="#maturted">Matured Investments</a></li>
                          <li><a class="dropdown-item text-dark"  href="#">Be an Investor</a></li>
                          <li><a class="dropdown-item text-dark"  href="#faq">FAQ</a></li>




                        </ul>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="shariah.html">Shariah</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="who-are-we.html">Who are we?</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="contact.html">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active fw-bolder" aria-current="page" href="blog.html">Blog</a>
                      </li>


                      <li class="nav-item dropdown fw-bolder">
                        <a class="nav-link dropdown-toggle btn btn-success text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login/Registration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item text-dark" href="login-for-invest-seeker.html">Investment Seeker</a></li>
                          <li><a class="dropdown-item text-dark"  href="login-for-investor.html">Investor</a></li>

                        </ul>
                      </li>
                    </ul>

                  </div>
                </div>
              </nav>

        </div>
     </header>

     <section class="banner-sliders">
        <div class="container">
            <div class="banner-slider">
                <div>
                    <img src="assets/images/banner1.jpg" alt="">
                </div>
                <div>
                    <img src="assets/images/banner2.jpg" alt="">
                </div>
               <div>
                <img src="assets/images/banner3.jpg" alt="">
               </div>
            </div>

        </div>
     </section>
     <section class="counting mt-4">
        <div class="container counter p-3">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="row">
                        <div class="col-md-4">
                             <img src="assets/images/icon-users.svg" alt="">
                        </div>
                        <div class="col-md-8">
                           <h5>Tk 38,000,000+</h5>
                           <h5>Financed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row">
                        <div class="col-md-4">
                           <img src="assets/images/icon-stocks.svg" alt="">
                        </div>
                        <div class="col-md-8">
                            <h5>500+</h5>
                            <h5>Investment</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="row">
                        <div class="col-md-4">
                          <img src="assets/images/icon-stocks-covered.svg" alt="">
                        </div>
                        <div class="col-md-8">
                            <h5>Tk 9,000,000+</h5>
                            <h5>Repayment Completed</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <section id="investOption" class="invest-option mt-4 mb-4 pt-3 pb-3">
        <div class="container">
            <h2 class="text-center mb-5 fw-bolder">Ongoing Investment Options</h2>
            <div class="row">
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card shadow rounded">
                        <img src="assets/images/project1.png" alt="">
                       <div class="p-2">
                          <h4>Business Solution</h4>
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum deleniti non dolores debitis enim inventore odit dignissimos odio harum repellendus?</p>
                          <h5>16% profit over 12 months period</h5>
                      </div>
                       </div>
              </div>
              <div class="col-md-4 col-sm-12 mb-3">
                  <div class="card shadow rounded">
                      <img src="assets/images/project2.png" alt="">
                     <div class="p-2">
                        <h4>Sara Software BD</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum deleniti non dolores debitis enim inventore odit dignissimos odio harum repellendus?</p>
                        <h5>16% profit over 12 months period</h5>
                    </div>
                     </div>
            </div>
              <div class="col-md-4 col-sm-12 mb-3">
                <div class="card shadow rounded">
                    <img src="assets/images/project3.png" alt="">
                   <div class="p-2">
                      <h4>Biotech Bangladesh</h4>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum deleniti non dolores debitis enim inventore odit dignissimos odio harum repellendus?</p>
                      <h5>16% profit over 12 months period</h5>
                  </div>
                   </div>
              </div>
            </div>
        </div>
     </section>
     <section class="maturtd" id="maturted">
        <div class="container">
            <h3 class="text-center fw-bolder mb-5 mt-5">Matured Investments</h3>
            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="card shadow p-2">
                        <h5>INVESTMETN ON</h5>
                        <P>Trade Info</P>
                        <h4>Repaid Tk 21,48,557 </h4>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="card shadow p-2">
                        <h5>INVESTMETN ON</h5>
                        <P>Sara Software BD</P>
                        <h4>Repaid Tk 21,48,557 </h4>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="card shadow p-2">
                        <h5>INVESTMETN ON</h5>
                        <P>Biotech International</P>
                        <h4>Repaid Tk 21,48,557 </h4>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <section class="purify mt-4">
      <div class="container">
        <div class="text-center">
           <h3 class="text-success fw-bolder">Purify</h3>
           <h2  style="font-weight:900;color:#484848">Your Portfolio</h2>
        </div>
        <p class="text-center mt-4">Purification Calculator  is the simplest and most accurate way to purify your portfolio. With this solution, you can rest assured that your investments are not only Shariah Compliant but also correctly purified.</p>
        <div class="row">
          <div class="col-md-4 col-sm-12">
             <div class="row">
              <div class="col-md-1 col-1 mb-2">
                <i class="fas fa-check-circle fs-5 text-success"></i>
              </div>
              <div class="col-md-11 col-11">
                <h6 class="fw-bold">Dividend Purification Calculation</h6>
              </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-2">
            <div class="row">
              <div class="col-md-1 col-1">
                <i class="fas fa-check-circle fs-5 text-success"></i>
              </div>
              <div class="col-md-11 col-11">
                <h6 class="fw-bold">Interest Income Purification Calculation</h6>
              </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-2">
            <div class="row">
              <div class="col-md-1 col-1">
                <i class="fas fa-check-circle fs-5 text-success"></i>
              </div>
              <div class="col-md-11 col-11">
                <h6 class="fw-bold">Haram Income Purification Calculation</h6>
              </div>
             </div>
          </div>
        </div>
      </div>
     </section>

     <section class="experience-team mt-5 pt-3 pb-3">
      <div class="container">
         <h3 class="fw-bolder">Meet Our<br>
          Experienced Team</h3>
          <div class="row mt-5">
            <div class="col-md-4 col-sm-12 mb-3">
                 <div class="card shadow p-3">
                    <img src="assets/images/man1.jpg" alt="">
                    <div class="card-body">
                      <h5 class="fw-bolder">Md Hasan Mahamud</h5>
                      <h6 class="text-secondary fw-bold">Co-Founder & CEO</h6>
                      <hr>
                      <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime veniam suscipit.</p>
                      <a href="#" class="text-success fw-bolder vm">View More</a>
                    </div>
                 </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                 <div class="card shadow p-3">
                  <img src="assets/images/man2.jpg" alt="">
                  <div class="card-body">
                    <h5 class="fw-bolder">Md Nazmus Sakib</h5>
                    <h6 class="text-secondary fw-bold">Co-Founder & COO</h6>
                    <hr>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime veniam suscipit.</p>
                    <a href="#" class="text-success fw-bolder vm">View More</a>
                  </div>
                 </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
               <div class="card shadow p-3">
                <img src="assets/images/man3.jpg" alt="">
                <div class="card-body">
                  <h5 class="fw-bolder">Md Sifat Khan</h5>
                  <h6 class="text-secondary fw-bold">Co-Founder & CTO</h6>
                  <hr>
                  <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime veniam suscipit.</p>
                  <a href="#" class="text-success fw-bolder vm">View More</a>
                </div>
               </div>
            </div>
          </div>
      </div>

      <div class="container our-advisor mt-5">
          <h3 class="fw-bolder text-center">Our Shariah Advisors</h3>
          <div class="row mt-5">

            <div class="col-md-6 col-sm-12">

              <div class="card p-2 pt-5 pb-5 border-0 pare" style="border-radius:20px;">
                 <div class="row">
                  <div class="col-md-4 col-sm-12">
                    <img src="assets/images/man1.jpg" alt="">
                 </div>
                 <div class="col-md-8 col-sm-12">
                  <h5 class="fw-bolder pt-3">Shaikh Dr. Aznan Hasan</h5>
                  <h6 class="text-secondary fw-bold">MALAYSIA</h6>
                  <p style="text-align: justify;">Shariah Board member of Accounting and Auditing Organization for Islamic Financial Institutions (“AAOIFI”).</p>
                  </div>
                </div>

              </div>
              <i class="fas fa-quote-right text-success iconn"></i>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="card p-2 pt-5 pb-5 border-0 pare"style="border-radius: 20px;">
                   <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <img src="assets/images/man2.jpg" alt="">

                    </div>
                    <div class="col-md-8 col-sm-12">
                      <h5 class="fw-bolder pt-3">Mufti Faraz Adam</h5>
                      <h6 class="text-secondary fw-bold">UNITED KINGDOM</h6>
                      <p style="text-align: justify;">Well-known UK-based Islamic Finance consultant and heads the global Shariah advisory firm Amanah Advisors.</p>

                    </div>
                   </div>
               </div>
               <i class="fas fa-quote-right text-success iconn"></i>
            </div>
          </div>
      </div>
     </section>
     <section id="faq" class="faq mt-5 mb-5">
      <div class="container">
        <h6 class="text-center fw-bold text-secondary mb-5">Frequently Asked Questions</h6>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How do you assess the investment campaigns?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p style="text-align: justify;">With any type of investment, risk is determined by several factors. Both Shariah and conventional investments are evaluated using the same risk management techniques such as analyzing the business plan and commercial viability of the project, the track record of the issuer or project owner, and industry risks and macro-economic factors.

                  An additional level of analysis is carried out to ensure that businesses seeking investment are qualified as Shariah-compliant.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                When can I expect returns for my investment?

              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p style="text-align: justify;">The business will usually disburse your capital and profits (if any) after maturity of the investment period. Some longer-term campaigns may share profits periodically throughout the investment period.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Do You Charge any Fees?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               <p style="text-align: justify;">We do not charge investors any fees. We charge businesses a service fee of 3-5% on the amount of funding raised. This helps us to pay for our expenses to run the platform.</p>
            </div>
            </div>
          </div>
        </div>
        <div class="accordion-down">
          <p>More questions? Knock us on <a class="text-decoration-none text-gray-7" href="https://wa.me/8801927614040"><u>WhatsApp</u></a> or send us an <a href="mailto:sarasoftwarebd@gmail.com" class="text-gray-7 text-decoration-none"><u>an email</u></a></p>
        </div>
     </section>
     <div class="running-business mt-5 mb-5">
        <div class="container">
           <h4 class="fw-bolder text-center" style="color:#3FA02C">Running a business? Apply for investment!</h4>
           <div class="running-business-content">
              <h6> <i class="fas fa-check-circle fs-5 text-success"></i> <span>Collateral-free.
                No mortgage required.</span></h6>
                <h6> <i class="fas fa-check-circle fs-5 text-success"></i> <span>
                  Fast and Hassle-free.
                  No need to leave your office.
                </span></h6>
                  <h6> <i class="fas fa-check-circle fs-5 text-success"></i> <span>ransparent
                pricing.</span></h6>

                <div>
                  <a href="#" class="btn btn-outline-success fw-bolder">Apply for Investment</a>
                </div>
           </div>
        </div>
     </div>
    <footer>
      <div class="container pt-4 pb-4">
          <div class="row">
            <div class="col-md-3">
               <h5 class="mb-4">Important Link</h5>
               <div class="links d-flex flex-column">
                 <a href="#"><i class="fas fa-long-arrow-alt-right me-3"></i> Shariah</a>
                 <a href="#"><i class="fas fa-long-arrow-alt-right me-3"></i> Who are We?</a>
                 <a href="#"><i class="fas fa-long-arrow-alt-right me-3"></i> Blog</a>
               </div>

            </div>
            <div class="col-md-3">
              <h5 class="mb-4">Legal</h5>
              <div class="links d-flex flex-column">
                <a href="#"><i class="fas fa-long-arrow-alt-right me-3"></i>Terms of Use</a>
                <a href="#"><i class="fas fa-long-arrow-alt-right me-3"></i> Privacy Policy</a>
              </div>
            </div>
            <div class="col-md-4">
              <h5 class="mb-4">Contact</h5>
              <div class="links d-flex flex-row">
                <div>
                  <i class="fas fa-map-marker-alt me-2 text-success"></i>
                </div>
                <div>
                   <p>Rupayan Taj 1, H-6, 6th Floor, 1/1 Box Culvert Road, Naya Paltan, Dhaka-1000, Bangladesh,</p>
                </div>

              </div>
              <div class="links d-flex flex-row">
                <div>
                  <i class="fas fa-envelope me-2 text-success"></i>
                </div>
                <div>
                   <p>contact@tradeinfo.com.bd</p>
                </div>

              </div>
              <div class="links d-flex flex-row">
                <div>
                  <i class="fas fa-phone me-2 text-success"></i>
                </div>
                <div>
                   <p>01712262778</p>
                </div>

              </div>

            </div>
            <div class="col-md-2">
              <a class="navbar-brand fw-bolder" href="#"><img src="assets/images/favicon.png" alt="">    Halal Investment</a>
              <div class="map mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.39700798315!2d90.41007171498102!3d23.733218084597784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f5fe710463%3A0x1fcee9300ab32d9b!2zUnVwYXlhbiBUYWosIEN1bHZlcnQgUm9hZCwg4Kai4Ka-4KaV4Ka-IDEyMDU!5e0!3m2!1sbn!2sbd!4v1683101217399!5m2!1sbn!2sbd" width="220" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>

      </div>
      <hr>
      <div class="container">
        <div class="text-center pb-3">
          <span id="head" class="text-light "></span><a href=""id="changetext" target="__blank" ><span id="site" class="fw-bolder fs-6" style="color:#A1D154"> </span></a>
           </div>
      </div>
    </footer>
    <script>
      var head = ["The Largest business portal in bangladesh -- ", "The site is designed & hosted by -- ","Powered by -- "];
      var site = ["TradeInfo", "SaraSoftware","TradeInfo"];
      var link = ["https://tradeinfo.com.bd/", "https://sarasoftware.com.bd/","https://tradeinfo.com.bd/"];
  var counter = 0;
  var elem_one = document.getElementById("head");
  var elem_two = document.getElementById("site");
  var elem_three = document.getElementById("changetext");

  var inst = setInterval(change, 2000);

  function change() {
      elem_one.innerHTML = head[counter];
      elem_two.innerHTML = site[counter];
      elem_three.href = link[counter];
      elem_three.setAttribute("target", "__blank");
    counter++;
    if (counter >= head.length) {
      counter = 0;
      // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
    }
  }
  </script>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('halal-investment/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('halal-investment/assets/js/script.js')}}"></script>



  </body>
</html>
