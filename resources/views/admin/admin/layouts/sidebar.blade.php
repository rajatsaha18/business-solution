<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::to('/') }}" class="brand-link">
        <img src="{{ Auth::user()->image }}" alt="Sara Software" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
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
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('admin.contact.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Contact
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('admin.newsletter.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            NewsLetter
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item
            {{ request()->is('admin/profile') ? 'menu-open' : '' }}
            {{ request()->is('admin/change-password') ? 'menu-open' : '' }}
            {{ request()->is('admin/page-setup') ? 'menu-open' : '' }}
            ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ request()->is('admin/site-setting-banner') ? 'active' : '' }}">
                            <a href="{{ route('admin.site-setting-banner.index') }}"
                                class="nav-link {{ request()->is('admin/site-setting-banner') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Site Settings Banner</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.profile') }}"
                                class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.change-password') }}"
                                class="nav-link {{ request()->is('admin/change-password') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.page-setup') }}"
                                class="nav-link {{ request()->is('admin/page-setup') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Page Setup</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/about-page-seo') ? 'active' : '' }}">
                            <a href="{{ route('admin.about-page-seo.index') }}"
                                class="nav-link {{ request()->is('admin/about-page-seo') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Page SEO</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/portfolio-page-seo') ? 'active' : '' }}">
                            <a href="{{ route('admin.portfolio-page-seo.index') }}"
                                class="nav-link {{ request()->is('admin/portfolio-page-seo') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolio Page SEO</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/service-page-seo') ? 'active' : '' }}">
                            <a href="{{ route('admin.service-page-seo.index') }}"
                                class="nav-link {{ request()->is('admin/service-page-seo') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Service Page SEO</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/pricing-page-seo') ? 'active' : '' }}">
                            <a href="{{ route('admin.pricing-page-seo.index') }}"
                                class="nav-link {{ request()->is('admin/pricing-page-seo') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pricing Page SEO</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/product-page-seo') ? 'active' : '' }}">
                            <a href="{{ route('admin.product-page-seo.index') }}"
                                class="nav-link {{ request()->is('admin/product-page-seo') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product Page SEO</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/team-page-seo') ? 'active' : '' }}">
                            <a href="{{ route('admin.team-page-seo.index') }}"
                                class="nav-link {{ request()->is('admin/team-page-seo') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Team Page SEO</p>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->is('admin/contact-page-seo') ? 'active' : '' }}">
                          <a href="{{ route('admin.contact-page-seo.index') }}"
                              class="nav-link {{ request()->is('admin/contact-page-seo') ? 'active' : '' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Contact Page SEO</p>
                          </a>
                      </li>
                      <li class="nav-item {{ request()->is('admin/career-page-seo') ? 'active' : '' }}">
                        <a href="{{ route('admin.career-page-seo.index') }}"
                            class="nav-link {{ request()->is('admin/caree-page-seo') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Career Page SEO</p>
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
                {{ request()->is('admin/page-categories') ? 'menu-open' : '' }}
                {{ request()->is('admin/page') ? 'menu-open' : '' }}
                ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}"
                                class="nav-link {{ request()->is('admin/page-categories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item
                {{ request()->is('admin/job') ? 'menu-open' : '' }}
                {{ request()->is('admin/applied-job') ? 'menu-open' : '' }}
                ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Job
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.job.index') }}"
                                class="nav-link {{ request()->is('admin/job') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Job</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.applied-job.index') }}"
                                class="nav-link {{ request()->is('admin/applied-job') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Job Applied</p>
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
                {{ request()->is('admin/project-categories') ? 'menu-open' : '' }}
                {{ request()->is('admin/project') ? 'menu-open' : '' }}
                ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Project
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.project-categories.index') }}"
                                class="nav-link {{ request()->is('admin/project-categories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.project.index') }}"
                                class="nav-link {{ request()->is('admin/project') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item
                {{ request()->is('admin/team') ? 'menu-open' : '' }}
                {{ request()->is('admin/frequently-ask-qn') ? 'menu-open' : '' }}
                {{ request()->is('admin/service') ? 'menu-open' : '' }}
                {{ request()->is('admin/what-we-do') ? 'menu-open' : '' }}
                {{ request()->is('admin/client-review') ? 'menu-open' : '' }}
                {{ request()->is('admin/client-logo') ? 'menu-open' : '' }}
                {{ request()->is('admin/pricing-plan') ? 'menu-open' : '' }}
                {{ request()->is('admin/key-feature') ? 'menu-open' : '' }}
                ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Website Setup
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.team.index') }}"
                                class="nav-link {{ request()->is('admin/team') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teams</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.frequently-ask-qn.index') }}"
                                class="nav-link {{ request()->is('admin/frequently-ask-qn') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Frequently Ask Qn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.service.index') }}"
                                class="nav-link {{ request()->is('admin/service') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.home-what-do.index') }}"
                                class="nav-link {{ request()->is('admin/home-what-do') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Page What We Do</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.home-who-we.index') }}"
                                class="nav-link {{ request()->is('admin/home-who-we') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Page Who We Are</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.home-fast.index') }}"
                                class="nav-link {{ request()->is('admin/home-fast') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home Page Fast</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pro-team.index') }}"
                                class="nav-link {{ request()->is('admin/pro-team') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Team Page Pro Team Content</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.about-feature.index') }}"
                                class="nav-link {{ request()->is('admin/about-feature') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Page Feature</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.what-we-do.index') }}"
                                class="nav-link {{ request()->is('admin/what-we-do') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>What We Do</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.client-review.index') }}"
                                class="nav-link {{ request()->is('admin/client-review') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Client Review</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.key-feature.index') }}"
                                class="nav-link {{ request()->is('admin/key-feature') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Key Features</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pricing-plan.index') }}"
                                class="nav-link {{ request()->is('admin/pricing-plan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pricing Plan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.client-logo.index') }}"
                                class="nav-link {{ request()->is('admin/client-logo') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Client Logo</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
