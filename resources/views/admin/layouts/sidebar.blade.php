<style>
  .businessBg {
    background-color: #006400;
  }

  .softwareBg {
    background-color: #00006B;
  }

  .halalBg {
    background-color: indigo;
  }

  .hospitalBg {
    background-color: #002fff;
  }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{URL::to('/')}}" class="brand-link">
    <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="VGD Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Business Solution</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="{{route('dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        {{-- <li class="nab-item">
            <a href="{{route('admin.business-service.index')}}" class="nav-link">
        <i class="nav-icon fas fa-edit mr-2"></i>
        <p>Business Solution<i class="fas fa-angle-left right"></i></p>
        </a>
        </li> --}}


        {{-- Start Software Part --}}
        <li class="nav-item
        {{ request()->is('admin/business-service') ? 'menu-open' : '' }}
        {{ request()->is('admin/about') ? 'menu-open' : '' }}
        {{ request()->is('admin/gallery') ? 'menu-open' : '' }}
        {{ request()->is('superadmin/home-sitesetting') ? 'menu-open' : '' }}
          ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Business Solution
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="{{route('admin.business-service.index')}}" class="nav-link {{ request()->is('admin/business-service') ? 'active' : '' }}">
                <i class="nav-icon fas fa-edit"></i>
                <p>Service Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.about.index')}}" class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}">
                <i class="nav-icon fas fa-edit"></i>
                <p>About Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.gallery.index')}}" class="nav-link {{ request()->is('admin/gallery') ? 'active' : '' }}">
                <i class="nav-icon fas fa-edit"></i>
                <p>Gallery Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.home.sitesetting.index')}}" class="nav-link {{ request()->is('superadmin/home-sitesetting') ? 'active' : '' }}">
                <i class="nav-icon fas fa-edit"></i>
                <p>SiteSetting</p>
              </a>
            </li>

            {{-- <li class="nav-item">
            <a href="{{ route('admin.contact.index') }}"
            class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Contact Page</p>
            </a>
        </li> --}}


      </ul>
      </li>
      {{-- End Software Part --}}




      {{-- Start Business Insights --}}
      <li class="nav-item businessBg

          {{--  --}}
          {{ request()->is('admin/categories') ? 'menu-open' : '' }}
          {{ request()->is('admin/sub-categories') ? 'menu-open' : '' }}
          {{ request()->is('admin/shop-advertise') ? 'menu-open' : '' }}
          {{ request()->is('admin/advertise-rate') ? 'menu-open' : '' }}
          {{ request()->is('admin/advertise-post') ? 'menu-open' : '' }}
          {{ request()->is('admin/advertise-banner') ? 'menu-open' : '' }}
          {{ (request()->is('admin/advertise-modal')) ? 'menu-open' : '' }}
          {{ (request()->is('admin/add-your-company-request')) ? 'menu-open' : '' }}
          {{ (request()->is('admin/advertise-package')) ? 'menu-open' : '' }}
          {{ (request()->is('admin/district')) ? 'menu-open' : '' }}
          {{ request()->is('admin/shop-area') ? 'menu-open' : '' }}
          {{ request()->is('admin/division') ? 'menu-open' : '' }}
          {{ request()->is('admin/buy-sell-category') ? 'menu-open' : '' }}
          {{ request()->is('admin/buy-sell-subcategory') ? 'menu-open' : '' }}
          {{ request()->is('admin/buy-sell-item') ? 'menu-open' : '' }}
          {{ request()->is('admin/buy-sell-ad-price') ? 'menu-open' : '' }}
          {{ request()->is('admin/admin-handle-buy-sell-ad-payment') ? 'menu-open' : '' }}
          {{ (request()->is('admin/buysell-post-expire')) ? 'menu-open' : '' }}
          {{ (request()->is('admin/country-blog')) ? 'menu-open' : '' }}
          {{ request()->is('admin/startup') ? 'menu-open' : '' }}
          {{ request()->is('admin/fs-interview') ? 'menu-open' : '' }}

          {{ request()->is('admin/product-categories') ? 'menu-open' : '' }}
          {{ request()->is('admin/product-subcategories') ? 'menu-open' : '' }}
          {{ request()->is('admin/product-type') ? 'menu-open' : '' }}
          {{ request()->is('admin/brand') ? 'menu-open' : '' }}
          {{ request()->is('admin/product') ? 'menu-open' : '' }}

          {{ request()->is('admin/page-categories') ? 'menu-open' : '' }}
          {{ request()->is('admin/pages') ? 'menu-open' : '' }}

          {{ (request()->is('admin/payment-method')) ? 'menu-open' : '' }}
          {{ (request()->is('admin/userpackage-order')) ? 'menu-open' : '' }}
          {{ (request()->is('admin/user-package-expire')) ? 'menu-open' : '' }}

          {{ request()->is('admin/site-setting') ? 'menu-open' : '' }}
          {{ request()->is('admin/profile') ? 'menu-open' : '' }}
          ">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Business Insights
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">


          <li class="nav-item
                {{ request()->is('admin/categories') ? 'menu-open' : '' }}
                {{ request()->is('admin/sub-categories') ? 'menu-open' : '' }}
                {{ request()->is('admin/shop-advertise') ? 'menu-open' : '' }}
                {{ request()->is('admin/advertise-rate') ? 'menu-open' : '' }}
                {{ request()->is('admin/advertise-post') ? 'menu-open' : '' }}
                {{ request()->is('admin/advertise-banner') ? 'menu-open' : '' }}
                {{ (request()->is('admin/advertise-modal')) ? 'menu-open' : '' }}
                {{ (request()->is('admin/add-your-company-request')) ? 'menu-open' : '' }}
                {{ (request()->is('admin/advertise-package')) ? 'menu-open' : '' }}


              ">
            <a href="#" class="nav-link
                {{ request()->is('admin/categories') ? 'active' : '' }}
                {{ request()->is('admin/sub-categories') ? 'active' : '' }}
                {{ request()->is('admin/shop-advertise') ? 'active' : '' }}
                {{ request()->is('admin/advertise-rate') ? 'active' : '' }}
                {{ request()->is('admin/advertise-post') ? 'active' : '' }}
                {{ request()->is('admin/advertise-banner') ? 'active' : '' }}
                {{ (request()->is('admin/advertise-modal')) ? 'active' : '' }}
                {{ (request()->is('admin/add-your-company-request')) ? 'active' : '' }}
                {{ (request()->is('advertise-package')) ? 'active' : '' }}


                ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Advertise
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php
              $count_add_company_req = count(DB::table('add_companies')->where('count', 0)->get());
              ?>
              <li class="nav-item">
                <a href="{{route('add-your-company-request')}}" class="nav-link {{ (request()->is('admin/add-your-company-request')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Company Request <span class="bg-danger text-light" style="border-radius: 50%;padding:5px 10px 5px 10px">{{$count_add_company_req}}</span></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.advertise-banner.index')}}" class="nav-link {{ (request()->is('admin/advertise-banner')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.shop-advertise.index')}}" class="nav-link {{ (request()->is('admin/shop-advertise')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.advertise-modal.index')}}" class="nav-link {{ (request()->is('admin/advertise-modal')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modal Image</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.sub-categories.index')}}" class="nav-link {{ (request()->is('admin/sub-categories')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.categories.index')}}" class="nav-link {{ (request()->is('admin/categories')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.advertise-package.index')}}" class="nav-link {{ (request()->is('admin/advertise-package')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Package</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.advertise-post.index')}}" class="nav-link {{ (request()->is('admin/advertise-post')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.advertise-rate.index')}}" class="nav-link {{ (request()->is('admin/advertise-rate')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rate</p>
                </a>
              </li>




            </ul>
          </li>


          <li class="nav-item
                {{ request()->is('admin/division') ? 'menu-open' : '' }}
                {{ request()->is('admin/district') ? 'menu-open' : '' }}
                {{ request()->is('admin/shop-area') ? 'menu-open' : '' }}
              ">
            <a href="#" class="nav-link

                {{ request()->is('admin/division') ? 'active' : '' }}
                {{ request()->is('admin/district') ? 'active' : '' }}
                {{ request()->is('admin/shop-area') ? 'active' : '' }}
                ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Area
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item {{ (request()->is('admin/shop-area')) ? 'active' : '' }}">
                <a href="{{route('admin.shop-area.index')}}" class="nav-link {{ (request()->is('admin/shop-area')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.shop-district')}}" class="nav-link {{ (request()->is('admin/district')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>District</p>
                </a>
              </li>
              <li class="nav-item {{ (request()->is('admin/division')) ? 'active' : '' }}">
                <a href="{{route('admin.shop-division')}}" class="nav-link {{ (request()->is('admin/division')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Division</p>
                </a>
              </li>


            </ul>
          </li>

          <li class="nav-item
              {{ request()->is('admin/buy-sell-category') ? 'menu-open' : '' }}
              {{ request()->is('admin/buy-sell-subcategory') ? 'menu-open' : '' }}
              {{ request()->is('admin/buy-sell-item') ? 'menu-open' : '' }}
              {{ request()->is('admin/buy-sell-ad-price') ? 'menu-open' : '' }}
              {{ request()->is('admin/admin-handle-buy-sell-ad-payment') ? 'menu-open' : '' }}
              {{ (request()->is('admin/admin-handle-buy-sell-ad-payment')) ? 'menu-open' : '' }}
              {{ (request()->is('admin/buysell-post-expire')) ? 'menu-open' : '' }}

                ">
            <a href="#" class="nav-link
              {{ request()->is('admin/buy-sell-category') ? 'active' : '' }}
              {{ request()->is('admin/buy-sell-subcategory') ? 'active' : '' }}
              {{ request()->is('admin/buy-sell-item') ? 'active' : '' }}
              {{ request()->is('admin/buy-sell-ad-price') ? 'active' : '' }}
              {{ (request()->is('admin/admin-handle-buy-sell-ad-payment')) ? 'active' : '' }}
              {{ (request()->is('admin/buysell-post-expire')) ? 'active' : '' }}

                ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Buy Sell Items
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.buy-sell-category.index')}}" class="nav-link {{ (request()->is('admin/buy-sell-category')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sell Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.buy-sell-subcategory.index')}}" class="nav-link {{ (request()->is('admin/buy-sell-subcategory')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sell SubCategory</p>
                </a>
              </li>

              <li class="nav-item">
                <?php
                $count_add = count(DB::table('buy_sell_products')->where('count', 0)->get());
                ?>
                <a href="{{route('admin.buy-sell-item.index')}}" class="nav-link {{ (request()->is('admin/buy-sell-item')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sell Items <span class="bg-danger text-light" style="border-radius: 50%;padding:5px 10px 5px 10px">{{$count_add}}</span></p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('admin.buy-sell-ad-price.index')}}" class="nav-link {{ (request()->is('admin/buy-sell-ad-price')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sell Ad Price</p>
                </a>
              </li>
              <?php
              $count_ad_payment = count(DB::table('ad_payments')->where('payment_status', 'pending')->get());
              ?>
              <li class="nav-item">
                <a href="{{route('admin.admin-handle-buy-sell-ad-payment.index')}}" class="nav-link {{ (request()->is('admin/admin-handle-buy-sell-ad-payment')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sell Ad Payment <span class="bg-danger text-light" style="border-radius: 50%;padding:5px 10px 5px 10px">{{$count_ad_payment}}</span></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.buysell.post.expire')}}" class="nav-link {{ (request()->is('admin/buysell-post-expire')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sell Ad Expire Check </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.country-blog.index')}}" class="nav-link {{ (request()->is('admin/country-blog')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Country Blog</p>
            </a>
          </li>

          {{-- <li class="nav-item">
              <a href="{{route('admin.country-blog.index')}}" class="nav-link {{ (request()->is('admin/country-blog')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit mr-2"></i>
          <p>
            Country Blog
            <i class="fas fa-angle-left right"></i>
          </p>
          </a>
      </li> --}}


      <li class="nav-item
                {{ request()->is('admin/startup') ? 'menu-open' : '' }}
                {{ request()->is('admin/fs-interview') ? 'menu-open' : '' }}

              ">
        <a href="#" class="nav-link
                {{ request()->is('admin/startup') ? 'active' : '' }}
                {{ request()->is('admin/fs-interview') ? 'active' : '' }}

                ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Future StartUp
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          {{-- <li class="nav-item">
                  <a href="{{route('admin.founder-stories.index')}}" class="nav-link {{ (request()->is('admin/founder-stories')) ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Founder Stories</p>
          </a>
      </li> --}}
      <li class="nav-item">
        <a href="{{route('admin.startup.index')}}" class="nav-link {{ (request()->is('admin/startup')) ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Startup</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.fs-interview.index')}}" class="nav-link {{ (request()->is('admin/fs-interview')) ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Startup Interview</p>
        </a>
      </li>


      </ul>
      </li>


      <li class="nav-item
              {{ request()->is('admin/product-categories') ? 'menu-open' : '' }}
              {{ request()->is('admin/product-subcategories') ? 'menu-open' : '' }}
              {{ request()->is('admin/product-type') ? 'menu-open' : '' }}
              {{ request()->is('admin/brand') ? 'menu-open' : '' }}
              {{ request()->is('admin/product') ? 'menu-open' : '' }}
              ">
        <a href="#" class="nav-link
                {{ request()->is('admin/product-categories') ? 'active' : '' }}
                {{ request()->is('admin/product-subcategories') ? 'active' : '' }}
                {{ request()->is('admin/product-type') ? 'active' : '' }}
                {{ request()->is('admin/brand') ? 'active' : '' }}
                {{ request()->is('admin/product') ? 'active' : '' }}
                ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Product
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('admin.brand.index')}}" class="nav-link {{ (request()->is('admin/brand')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Brand</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.product-categories.index')}}" class="nav-link {{ (request()->is('admin/product-categories')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.product-subcategories.index')}}" class="nav-link {{ (request()->is('admin/product-subcategories')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Sub Category</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.product-type.index')}}" class="nav-link {{ (request()->is('admin/product-type')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Product Type</p>
            </a>
          </li>
          <?php
          $count = count(DB::table('bd_products')->where('count', 0)->get());
          ?>
          <li class="nav-item">
            <a href="{{route('admin.product.index')}}" class="nav-link {{ (request()->is('admin/product')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Product <span class="bg-danger text-light" style="border-radius: 50%;padding:5px 10px 5px 10px">{{$count}}</span></p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item
              {{ request()->is('admin/page-categories') ? 'menu-open' : '' }}
              {{ request()->is('admin/pages') ? 'menu-open' : '' }}
              ">
        <a href="#" class="nav-link
                {{ request()->is('admin/page-categories') ? 'active' : '' }}
                {{ request()->is('admin/pages') ? 'active' : '' }}
                ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Page
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('admin.pages.index')}}" class="nav-link {{ (request()->is('admin/pages')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Page</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.page-categories.index')}}" class="nav-link {{ (request()->is('admin/page-categories')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Page Category</p>
            </a>
          </li>

        </ul>
      </li>


      <li class="nav-item">
        <a href="{{route('admin.payment-method.index')}}" class="nav-link {{ (request()->is('admin/payment-method')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Payment Methods</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('admin.site-setting.index')}}" class="nav-link {{ (request()->is('admin/site-setting')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Site Setting</p>
        </a>
      </li>


      <!-- <li class="nav-item
              {{ request()->is('admin/profile') ? 'menu-open' : '' }}
              ">
        <a href="#" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Settings
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item {{ (request()->is('admin/profile')) ? 'active' : '' }}">
            <a href="{{route('admin.profile')}}" class="nav-link {{ (request()->is('admin/profile')) ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Profile</p>
            </a>
          </li>
        </ul>
      </li> -->

      <li class="nav-item
              {{ request()->is('admin/user') ? 'menu-open' : '' }}
              {{ (request()->is('admin/userpackage-order')) ? 'menu-open' : '' }}
              ">
        <a href="#" class="nav-link
                {{ (request()->is('admin/userpackage-order')) ? 'active' : '' }}
                ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            User
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          {{-- <li class="nav-item {{ (request()->is('admin/user')) ? 'active' : '' }}">
          <a href="{{route('admin.user.index')}}" class="nav-link {{ (request()->is('admin/user')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-edit"></i>
            <p>User Manage</p>
          </a>
      </li> --}}
      <?php
      $count_order_req = count(DB::table('package_orders')->where('count', 0)->get());
      ?>
      <li class="nav-item {{ (request()->is('admin/userpackage-order')) ? 'active' : '' }}">
        <a href="{{route('admin.userpackage-order.index')}}" class="nav-link {{ (request()->is('admin/userpackage-order')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>User Package Order <span class="bg-danger text-light" style="border-radius: 50%;padding:5px 10px 5px 10px">{{$count_order_req}}</span></p>
        </a>
      </li>
      </ul>
      </li>


      <li class="nav-item {{ (request()->is('admin/user-package-expire')) ? 'active' : '' }}">
        <a href="{{route('admin.user-package-expire')}}" class="nav-link {{ (request()->is('admin/user-package-expire')) ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>User Package Expire Check </p>
        </a>
      </li>

      </ul>
      </li>
      {{-- End Business Insights --}}



      {{-- Start Software Part --}}
      <li class="nav-item softwareBg

            {{ request()->is('admin/product-subcategories') ? 'menu-open' : '' }}
            {{ request()->is('admin/product-type') ? 'menu-open' : '' }}
            {{ request()->is('admin/brand') ? 'menu-open' : '' }}
            {{ request()->is('admin/product') ? 'menu-open' : '' }}


            {{--  --}}
            {{ request()->is('admin/contact') ? 'menu-open' : '' }}
            {{ request()->is('admin/newsletter') ? 'menu-open' : '' }}
            {{ request()->is('admin/newsletter/send') ? 'menu-open' : '' }}
            {{ request()->is('admin/product-contact') ? 'menu-open' : '' }}
            {{ request()->is('admin/site-setting-banner') ? 'menu-open' : '' }}
            {{ request()->is('admin/change-password') ? 'menu-open' : '' }}
            {{ request()->is('admin/page-setup') ? 'menu-open' : '' }}
            {{ request()->is('admin/footer-categories') ? 'menu-open' : '' }}
            {{ request()->is('admin/product-features') ? 'menu-open' : '' }}
            {{ request()->is('admin/page') ? 'menu-open' : '' }}
            {{ request()->is('admin/blog-categories') ? 'menu-open' : '' }}
            {{ request()->is('admin/blog') ? 'menu-open' : '' }}
            {{ request()->is('admin/top-products') ? 'menu-open' : '' }}

            {{ request()->is('admin/team') ? 'menu-open' : '' }}
            {{ request()->is('admin/frequently-ask-qn') ? 'menu-open' : '' }}
            {{ request()->is('admin/service') ? 'menu-open' : '' }}
            {{ request()->is('admin/what-we-do') ? 'menu-open' : '' }}
            {{ request()->is('admin/client-review') ? 'menu-open' : '' }}
            {{ request()->is('admin/client-logo') ? 'menu-open' : '' }}
            {{ request()->is('admin/pricing-plan') ? 'menu-open' : '' }}
            {{ request()->is('admin/key-feature') ? 'menu-open' : '' }}

            {{ request()->is('admin/who-we') ? 'menu-open' : '' }}

            {{ request()->is('admin/counters') ? 'menu-open' : '' }}
            {{ request()->is('admin/project') ? 'menu-open' : '' }}
            {{ request()->is('admin/terms') ? 'menu-open' : '' }}
             {{ request()->is('admin/privacies') ? 'menu-open' : '' }}
            ">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Software
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          {{-- <li class="nav-item has-treeview menu-open">
                <a href="{{ route('dashboard') }}" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
          </a>
      </li> --}}


      <li class="nav-item {{ request()->is('admin/site-setting-banner') ? 'active' : '' }}">
        <a href="{{ route('admin.site-setting-banner.index') }}" class="nav-link {{ request()->is('admin/site-setting-banner') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Banner Image</p>
        </a>
      </li>
      <li class="nav-item
              {{ request()->is('admin/blog-categories') ? 'menu-open' : '' }}
              {{ request()->is('admin/blog') ? 'menu-open' : '' }}
              ">
        <a href="#" class="nav-link
              {{ request()->is('admin/blog-categories') ? 'active' : '' }}
              {{ request()->is('admin/blog') ? 'active' : '' }}
              ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Blog Post
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview {{ request()->is('admin/blog-categories') ? 'active' : '' }}">
          <li class="nav-item">
            <a href="{{ route('admin.blog-categories.index') }}" class="nav-link {{ request()->is('admin/blog-categories') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.blog.index') }}" class="nav-link {{ request()->is('admin/blog') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Post</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{ route('admin.client-logo.index') }}" class="nav-link {{ request()->is('admin/client-logo') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Client Logo</p>
        </a>
      </li>
      <!--slider-->
      <li class="nav-item">
        <a href="{{ route('admin.slider.index') }}" class="nav-link {{ request()->is('admin/slider') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Slider</p>
        </a>
      </li>

      <li class="nav-item
                {{ request()->is('admin/contact') ? 'menu-open' : '' }}
                {{ request()->is('admin/product-contact') ? 'menu-open' : '' }}
                {{-- {{ request()->is('admin/product-contact') ? 'menu-open' : '' }} --}}

                ">
        {{-- <a href="#" class="nav-link "> --}}
        <a href="#" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Contacts
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="{{ route('admin.contact.index') }}" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Contact Page</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.product-contact.index') }}" class="nav-link {{ request()->is('admin/product-contact') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Product Contact</p>
            </a>
          </li>
        </ul>

      </li>

      <li class="nav-item">
        <a href="{{ route('admin.counters.index') }}" class="nav-link {{ request()->is('admin/counters') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Counters</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('admin.footer-categories.index') }}" class="nav-link  {{ request()->is('admin/footer-categories') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Footer Category</p>
        </a>
      </li>

      <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
        <a href="{{ route('admin.page-setup') }}" class="nav-link {{ request()->is('admin/page-setup') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Home Page</p>
        </a>
      </li>




      <li class="nav-item has-treeview menu-open">
        <a href="{{ url('admin/newsletter') }}" class="nav-link {{ request()->is('admin/newsletter') ? 'active' : '' }}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            NewsLetter
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview menu-open">
        <a href="{{ route('admin.newsletter.send') }}" class="nav-link {{ request()->is('admin/newsletter/send') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            NewsLetter Send
          </p>
        </a>
      </li>

      <li class="nav-item

                {{ request()->is('admin/page') ? 'menu-open' : '' }}
                {{ request()->is('admin/product-features') ? 'menu-open' : '' }}
                {{ request()->is('admin/top-products') ? 'menu-open' : '' }}
                ">
        <a href="#" class="nav-link
                  {{ (request()->is('admin/page')) ? 'active' : '' }}
                  {{ request()->is('admin/product-features') ? 'active' : '' }}
                  {{ request()->is('admin/top-products') ? 'active' : '' }}
                  ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Product Details
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="{{ route('admin.top-products.index') }}" class="nav-link {{ request()->is('admin/top-products') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.page.index') }}" class="nav-link {{ request()->is('admin/page') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.product-features.index') }}" class="nav-link {{ request()->is('admin/product-features') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Core Features</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item {{ request()->is('admin/project') ? 'active' : '' }}">
        <a href="{{ route('admin.project.index') }}" class="nav-link {{ request()->is('admin/project') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Project</p>
        </a>
      </li>

      <li class="nav-item {{ request()->is('admin/privacies') ? 'active' : '' }}">
        <a href="{{ route('admin.privacies.index') }}" class="nav-link {{ request()->is('admin/privacies') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Privacy & Policy</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.client-review.index') }}" class="nav-link {{ request()->is('admin/client-review') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Reviews</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.service.index') }}" class="nav-link {{ request()->is('admin/service') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Service</p>
        </a>
      </li>


      <li class="nav-item">
        <a href="{{ route('admin.team.index') }}" class="nav-link {{ request()->is('admin/team') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Teams Member</p>
        </a>
      </li>

      <li class="nav-item {{ request()->is('admin/terms') ? 'active' : '' }}">
        <a href="{{ route('admin.terms.index') }}" class="nav-link {{ request()->is('admin/terms') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>Terms & Condition</p>
        </a>
      </li>

      <li class="nav-item
                {{ request()->is('admin/who-we') ? 'menu-open' : '' }}
                {{ request()->is('admin/what-we-do') ? 'menu-open' : '' }}
                {{-- {{ request()->is('admin/product-contact') ? 'menu-open' : '' }} --}}

                ">
        {{-- <a href="#" class="nav-link "> --}}
        <a href="#" class="nav-link
                  {{ request()->is('admin/who-we') ? 'active' : '' }}
                  {{ request()->is('admin/what-we-do') ? 'active' : '' }}
                  ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Who We Are
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">



          <li class="nav-item">
            <a href="{{ route('admin.who-we.index') }}" class="nav-link {{ request()->is('admin/who-we') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Description</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.what-we-do.index') }}" class="nav-link {{ request()->is('admin/what-we-do') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Card Section</p>
            </a>
          </li>
        </ul>
      </li>

      </ul>
      </li>
      {{-- End Software Part --}}



      <li class="nav-item halalBg
            {{ request()->is('admin/buy-sell-category') ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-slider')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-faq')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-shariah-advisor')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-team-category')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-team')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-blog-category')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-blog')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-setting')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-matured')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/halal-investment-company')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/investment-profile-manage')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/investor-order-handle')) ? 'menu-open' : '' }}
            {{ (request()->is('admin/investor-get-payment')) ? 'menu-open' : '' }}
           ">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Halal Investment
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-blog.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-blog')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Blog</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.halal-investment-blog-category.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-blog-category')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Blog Category</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-faq.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-faq')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Faqs</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-company.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-company')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Investment Company</p>
            </a>
          </li>
          @php
          $data = App\Models\User::where('role_id', 4);
          @endphp
          <li class="nav-item">
            <a href="{{route('admin.investment-profile-manage.index')}}" class="nav-link {{ (request()->is('admin/investment-profile-manage')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Investment Seeker <span class="bg-danger text-light" style="border-radius: 50%;padding:5px 10px 5px 10px">{{ $data->count()}}</span> </p>
            </a>
          </li>
          <?php
          $count = count(DB::table('investor_oders')->where('count', 0)->get());
          ?>
          <li class="nav-item">
            <a href="{{route('admin.investor-order-handle.index')}}" class="nav-link {{ (request()->is('admin/investor-order-handle')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Investor Order Handle <span class="bg-danger text-light" style="border-radius: 50%;padding:5px 10px 5px 10px">{{$count}}</span></p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.investor-get-payment.index')}}" class="nav-link {{ (request()->is('admin/investor-get-payment')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Investor Get Payment</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-matured.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-matured')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Matured Investment</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-slider.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-slider')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Sliders</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('admin.halal-investment-shariah-advisor.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-shariah-advisor')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Shariah Advisor</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-setting.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-setting')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Setting</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-team-category.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-team-category')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Team Category</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.halal-investment-team.index')}}" class="nav-link {{ (request()->is('admin/halal-investment-team')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>Team</p>
            </a>
          </li>







        </ul>
      </li>



      {{-- Hospital Solution Start --}}
      <li class="nav-item hospitalBg
            {{ request()->is('superadmin/hospital-buy-sell-category') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-page-categories') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-page') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-blog-categories') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-blog') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-categories') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-page') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-sub-categories') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-sub-sub-categories') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-banner') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-gallery') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-client') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-software') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-design') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-news') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-team') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-video') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-branch') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-slider') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-color') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-brand') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-product') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-service') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-usercontact') ? 'menu-open' : '' }}
            {{ request()->is('superadmin/hospital-sitesetting') ? 'menu-open' : '' }}

           ">
        <a href="#" class="nav-link
                {{ request()->is('superadmin/hospital-buy-sell-category') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-page-categories') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-page') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-blog-categories') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-blog') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-categories') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-page') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-sub-categories') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-sub-sub-categories') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-banner') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-gallery') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-client') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-software') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-design') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-news') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-team') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-video') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-branch') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-slider') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-color') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-brand') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-product') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-service') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-usercontact') ? 'active' : '' }}
                {{ request()->is('superadmin/hospital-sitesetting') ? 'active' : '' }}
                ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Hospital Solution
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          {{-- <li class="nav-item has-treeview menu-open">
                  <a href="{{ route('hospital-dashboard') }}" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
          </a>
      </li> --}}
      <li class="nav-item
                     {{ request()->is('superadmin/hospital-sitesetting') ? 'menu-open' : '' }}
                  ">
        <a href="#" class="nav-link  {{ request()->is('superadmin/hospital-sitesetting') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Settings
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          {{-- <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
          <a href="{{ route('admin.hospital-profile') }}" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
            <i class="far fa-circle nav-icon"></i>
            <p>Profile</p>
          </a>
      </li> --}}
      {{-- <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
      <a href="{{ route('admin.hospital-change-password') }}" class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
        <i class="far fa-circle nav-icon"></i>
        <p>Change Password</p>
      </a>
      </li> --}}
      <li class="nav-item {{ request()->is('superadmin/hospital-sitesetting') ? 'active' : '' }}">
        <a href="{{ route('admin.hospital-sitesetting.index') }}" class="nav-link {{ request()->is('superadmin/hospital-sitesetting') ? 'active' : '' }}">
          <i class="far fa-circle nav-icon"></i>
          <p>Site Setting</p>
        </a>
      </li>
      </ul>
      </li>
      <li class="nav-item
                  {{ request()->is('superadmin/hospital-page-categories') ? 'menu-open' : '' }}
                  {{ request()->is('superadmin/hospital-page') ? 'menu-open' : '' }}
                  ">
        <a href="#" class="nav-link
                    {{ request()->is('superadmin/hospital-page-categories') ? 'active' : '' }}
                    {{ request()->is('superadmin/hospital-page') ? 'active' : '' }}
                    ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Page
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.hospital-page-categories.index') }}" class="nav-link {{ request()->is('superadmin/hospital-page-categories') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Page Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.hospital-page.index') }}" class="nav-link {{ request()->is('superadmin/hospital-page') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Page</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item
                  {{ request()->is('superadmin/hospital-blog-categories') ? 'menu-open' : '' }}
                  {{ request()->is('superadmin/hospital-blog') ? 'menu-open' : '' }}
                  ">
        <a href="#" class="nav-link
                    {{ request()->is('superadmin/hospital-blog-categories') ? 'active' : '' }}
                    {{ request()->is('superadmin/hospital-blog') ? 'active' : '' }}
                    ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Blog
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.hospital-blog-categories.index') }}" class="nav-link {{ request()->is('superadmin/hospital-blog-categories') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p> Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.hospital-blog.index') }}" class="nav-link {{ request()->is('superadmin/hospital-blog') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Blog Post</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item
                  {{ request()->is('superadmin/hospital-categories') ? 'menu-open' : '' }}
                  {{ request()->is('superadmin/hospital-sub-categories') ? 'menu-open' : '' }}
                  {{ request()->is('superadmin/hospital-sub-sub-categories') ? 'menu-open' : '' }}
                  ">
        <a href="#" class="nav-link
                    {{ request()->is('superadmin/hospital-categories') ? 'active' : '' }}
                    {{ request()->is('superadmin/hospital-sub-categories') ? 'active' : '' }}
                    {{ request()->is('superadmin/hospital-sub-sub-categories') ? 'active' : '' }}
                    ">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Category
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.hospital-categories.index') }}" class="nav-link {{ request()->is('superadmin/hospital-categories') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.hospital-sub-categories.index') }}" class="nav-link {{ request()->is('superadmin/hospital-sub-categories') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Sub Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.hospital-sub-sub-categories.index') }}" class="nav-link {{ request()->is('superadmin/hospital-sub-sub-categories') ? 'active' : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Sub Sub Categories</p>
            </a>
          </li>
        </ul>
      </li>
      <!-- <li class="nav-item">
        <a href="{{ route('admin.hospital-banner.index') }}" class="nav-link
                  {{ request()->is('superadmin/hospital-banner') ? 'active' : '' }}
                  ">
          <i class="nav-icon far fa-images"></i>
          <p>
            Banner
          </p>
        </a>
      </li> -->
      <li class="nav-item">
        <a href="{{ route('admin.hospital-gallery.index') }}" class="nav-link {{ request()->is('superadmin/hospital-gallery') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Gallery
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.hospital-client.index') }}" class="nav-link {{ request()->is('superadmin/hospital-client') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Clients Info
          </p>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a href="{{ route('admin.hospital-software.index') }}" class="nav-link {{ request()->is('superadmin/hospital-software') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Software
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.hospital-design.index') }}" class="nav-link {{ request()->is('superadmin/hospital-design') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Design & Layouts
          </p>
        </a>
      </li> -->
      <li class="nav-item">
        <a href="{{ route('admin.hospital-news.index') }}" class="nav-link {{ request()->is('superadmin/hospital-news') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Latest News
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.hospital-team.index') }}" class="nav-link {{ request()->is('superadmin/hospital-team') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Management & Team
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.hospital-video.index') }}" class="nav-link {{ request()->is('superadmin/hospital-video') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Video's
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.hospital-branch.index') }}" class="nav-link {{ request()->is('superadmin/hospital-branch') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Branch
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.hospital-slider.index') }}" class="nav-link {{ request()->is('superadmin/hospital-slider') ? 'active' : '' }}">
          <i class="nav-icon far fa-images"></i>
          <p>
            Slider
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.hospital-color.index') }}" class="nav-link {{ request()->is('superadmin/hospital-color') ? 'active' : '' }}">
          <i class="nav-icon fas fa-fill-drip"></i>
          <p>
            Color
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.hospital-brand.index')}}" class="nav-link {{ request()->is('superadmin/hospital-brand') ? 'active' : '' }}">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Brand
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{route('admin.hospital-product.index')}}" class="nav-link {{ request()->is('superadmin/hospital-product') ? 'active' : '' }}">
          <i class="nav-icon fab fa-product-hunt"></i>
          <p>
            Product
          </p>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a href="{{route('admin.hospital-service.index')}}" class="nav-link {{ request()->is('superadmin/hospital-service') ? 'active' : '' }}">
          <i class="nav-icon fab fa-product-hunt"></i>
          <p>
            Service
          </p>
        </a>
      </li> -->

      <li class="nav-item">
        <a href="{{route('admin.hospital-usercontact.index')}}" class="nav-link {{ request()->is('superadmin/hospital-usercontact') ? 'active' : '' }}">
          <i class="nav-icon fab fa-product-hunt"></i>
          <p>
            User Contact
          </p>
        </a>
      </li>
      </ul>




      </ul>
      </li>






      {{-- <li class="nab-item">
            <a href="{{route('admin.newsletter.create')}}" class="nav-link">
      <i class="nav-icon fas fa-edit mr-2"></i>
      <p>
        Newsletter
        <i class="fas fa-angle-left right"></i>
      </p>
      </a>
      </li> --}}






      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>