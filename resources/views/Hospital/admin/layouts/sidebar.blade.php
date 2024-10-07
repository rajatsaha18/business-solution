<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::to('/') }}" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="VGD Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item
            {{ request()->is('admin/profile') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.profile') }}"
                                class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.change-password') }}"
                                class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/sitesetting') ? 'active' : '' }}">
                            <a href="{{ route('admin.sitesetting.index') }}"
                                class="nav-link {{ request()->is('admin/sitesetting') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Site Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item
            {{ request()->is('admin/page-categories') ? 'menu-open' : '' }}
            {{ request()->is('admin/page') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Page
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.page-categories.index') }}"
                                class="nav-link {{ request()->is('admin/page-categories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.page.index') }}"
                                class="nav-link {{ request()->is('admin/page') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item
            {{ request()->is('admin/blog-categories') ? 'menu-open' : '' }}
            {{ request()->is('admin/blog') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.blog-categories.index') }}"
                                class="nav-link {{ request()->is('admin/blog-categories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blog.index') }}"
                                class="nav-link {{ request()->is('admin/blog') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog Post</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item
            {{ request()->is('admin/categories') ? 'menu-open' : '' }}
            {{ request()->is('admin/page') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}"
                                class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sub-categories.index') }}"
                                class="nav-link {{ request()->is('admin/subcategories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sub-sub-categories.index') }}"
                                class="nav-link {{ request()->is('admin/sub-sub-categories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Sub Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.banner.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Banner
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.gallery.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.client.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Clients Info
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.software.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Software
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.design.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Design & Layouts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.news.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Latest News
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.team.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Management & Team
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.video.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Video's
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.branch.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Branch
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.slider.index') }}" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.color.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-fill-drip"></i>
                        <p>
                            Color
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.brand.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Brand
                    </p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.product.index')}}" class="nav-link">
                  <i class="nav-icon fab fa-product-hunt"></i>
                  <p>
                    Product
                  </p>
                </a>
            </li>
              <li class="nav-item">
                <a href="{{route('admin.service.index')}}" class="nav-link">
                  <i class="nav-icon fab fa-product-hunt"></i>
                  <p>
                    Service
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.usercontact.index')}}" class="nav-link">
                  <i class="nav-icon fab fa-product-hunt"></i>
                  <p>
                    User Contact
                  </p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
