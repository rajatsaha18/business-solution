  <!--  head  -->
  <style>
  .sou2{
        color:black!important;
    }
  .logo2{
    margin-bottom:-20px!important;
  }
  @media only screen and (max-width: 600px) {
    body{
        margin:0;
    }
    .logo2{
     height:60px!important;

  }
  .logo2 img {
        margin-top:-8px!important;
    }
    .first-nav .logo{
    margin-left:1px!important;
    padding-top:0!important;
}


}
@media only screen and (min-width: 1024px) {
    .logo1 img{
        margin-top:-35px!important;
  }

}

/* .head .navbar{
    padding-top:5px;
    padding-bottom:5px;
} */
.daohang>li:before{
    background: none;

}

.daohang>li>a{
    color:white;
}
/* .head{
    position: relative;
    background:none!important;
} */
/* Change background color to red for the first navbar */
.head:hover .first-nav:first-child{
    background-color: red;
}
.head:hover .first-nav:last-child{
    background-color: white;
}
/* .head:hover .first-nav:last-child a{
    color: black;
} */
.first-nav .logo{
    margin-left:20px;
    margin-bottom:10px;
}
.first-nav .sousuo{
    margin-right:20px;
}
.first-nav:hover .daohang li a{
    color:black;
}
.daohang {
    float: right;
    margin-top: 17px!important;
    transition: 0.5s;
    margin-right: 13px;
}
/* ul.daohang{
    margin:13px 10px 0px 0px;
} */
/* #second_nav
{
    padding:-10px!important;
} */
.sousuo
{
    margin-top:23px!important;
}
.menuBar {
    height:70px!important;
}
.logo1{
    margin-bottom:-100px!important;
}
/* .navBar a{
    width:5%;
} */
/* .first-nav:hover .sousuo{
    color:black;
} */
/* .zong .daohang a{
    color:black;
    
} */


/* If there's a specific class or ID for the navigation links, you might need to adjust their styles as well */
.zong.first-nav ul.daohang li {
    background-color: none; /* Change the background color to transparent for list items */
}

  </style>
  

  <div class="head">
  <div class="first-nav" id="first_nav">
  <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto navBar">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('media.center')}}"><i class="fa-solid fa-photo-film"></i> Media Center |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('investor')}}"><i class="fa-solid fa-warehouse"></i> Investor Relations |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('contact.index') }}"><i class="fa-solid fa-address-book"></i> Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
  </div>
      <div class="first-nav menuBar" id="second_nav">
          <div class="logo">
              <a href="{{ route('home.index') }}" title="" class="logon"
                  style=" display:block; position:relative; height:0px; padding-bottom:27.66%;">
                  <picture class="logo1">
                      <source type="image/webp" srcset="{{ asset($sitesetting->logo) }}">
                      <img src="{{ asset($sitesetting->logo) }}" alt="Empex" title="Empex"
                          style="position:absolute; width:100%; left:0px; top:0px;">
                  </picture>
                  <picture class="logo2">
                      <source type="image/webp" srcset="{{ asset($sitesetting->logo2) }}">
                      <img src="{{ asset($sitesetting->logo2) }}" alt="Empex" title="Empex"
                          style="position:absolute; width:100%; left:0px; top:0px;">
                  </picture>
              </a>
          </div>
          <div class="sousuo">
              <span class="sou2 iconfont icon-sousuo"></span>
              <form action="{{ route('show.product.by.search.name') }}" name="productform" method="get">
                  <input class="sou fl" type="text" placeholder="Search..." name="s">
                  <input class="suo fl" type="submit" value="">
                  <span class="sou1 iconfont icon-sousuo"></span>
              </form>
          </div>

          <div class="clear2">
          </div>
          <ul class="daohang">
              <li class="dangqiandao">
                  <a href="{{ route('home.index') }}" title="Home"><i class="fa-solid fa-house"></i> Home</a>
              </li>
              
              @php
                  $page_categories = App\Models\PageCategory::where('status', 1)
                      ->where('slug', 'quick-link')
                      ->first();

                  $pages = App\Models\Page::where('status', 1)
                      ->where('category_id', $page_categories->id)
                      ->get();
              @endphp
              <li>
                  <a href="#" title="About Us">About</a>
                  <ul class="yijiw">
                      <div class="yiji">
                          @foreach ($pages as $page)
                              <li><a href="{{ route('page-details', $page->slug) }}">{{ $page->name }}</a></li>
                          @endforeach

                          <li><a href="{{ route('team') }}">Management & Team</a></li>

                          <li><a href="{{ route('branches') }}">Our Branches</a></li>
                      </div>
                  </ul>


              </li>
              <li>
                <a href="{{ url('products') }}" title="Products">Products</a>
                <ul class="yijiw">
                    <div class="yiji">
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('show.product.by.category', $category->slug) }}"
                                    title="{{ $category->name }}">{{ $category->name }}</a>
                                @if ($category->subcategories->count() > 0)
                                    <ul class="erji">
                                        @foreach ($category->subcategories as $subcategory)
                                            <li>
                                                <a href="{{ route('show.product.by.subcategory', $subcategory->slug) }}"
                                                    title="{{ $subcategory->name }}">{{ $subcategory->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </div>
                </ul>
            </li>
            <li>
                <a href="{{ route('home.index') }}" title="Contact Us">Our Service</a>
            </li>
            <li>
                <a href="{{ route('home.index') }}" title="Contact Us">Gallery</a>
            </li>
              <li>
                  <a href="#" title="Specialties">Blog</a>
                  <ul class="yijiw">
                      <div class="yiji">
                          <li>
                              <a href="{{ url('blog') }}"
                                  title="Radiology">Blogs</a>
                          </li>
                          <li>
                              <a href="{{ url('gallery') }}"
                                  title="Cardiovascular">Gallery & Recognitions</a>
                          </li>
                          <li>
                              <a href="{{ url('video') }}"
                                  title="Women&#039;s Health">Video's</a>
                          </li>

                      </div>
                  </ul>



              </li>
              <li>
                  <a href="{{ route('contact.index') }}" title="Contact Us"><i class="fa-solid fa-address-book"></i> Contact</a>
              </li>
              <div class="clear">
              </div>
          </ul>
          <div class="clear">
          </div>
      </div>
  </div>
  @section('script')
  <script>
    window.addEventListener('scroll', function() {
        var firstNav = document.getElementById('first_nav');
        var secondNav = document.getElementById('second_nav');
        if (window.scrollY > 50) {
            // If scrolled more than 50 pixels, hide the first navbar
            firstNav.style.display = 'none';
            // Add padding to the body to compensate for the removed navbar height
            document.body.style.paddingTop = secondNav.offsetHeight + 'px';
        } else {
            // If not scrolled enough, show the first navbar
            firstNav.style.display = 'block';
            // Remove padding from the body
            document.body.style.paddingTop = 0;
        }
    });

    // JavaScript for navbar hover effects
    // var firstNav = document.getElementById('first_nav');
    // var secondNav = document.getElementById('second_nav');

    // firstNav.addEventListener('mouseenter', function() {
    //     firstNav.style.backgroundColor = 'red';
    // });

    // firstNav.addEventListener('mouseleave', function() {
    //     firstNav.style.backgroundColor = '';
    // });

    // secondNav.addEventListener('mouseenter', function() {
    //     secondNav.style.backgroundColor = 'white';
    // });

    // secondNav.addEventListener('mouseleave', function() {
    //     secondNav.style.backgroundColor = '';
    // });
    // var lastScrollTop = 0;
    //     navbar = document.getElementById("navbar");
    //     window.addEventListener("scroll",function(){
    //         var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    //         if(scrollTop > lastScrollTop)
    //         {
    //             navbar.style.top = "-80px";
    //         }
    //         else
    //         {
    //             navbar.style.top = "0";
    //         }
    //     });
  </script>
  
  @endsection
