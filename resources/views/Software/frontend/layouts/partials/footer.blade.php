<style>
    @media (min-width: 768px) {
        .bigSize {
            /* margin: 700px 0px 0px 0px!important */
        }
    }

    ;
</style>

<div class="footer-area-wrapper bigSize" style="background-color: #00006B">
    {{-- Call MOdels --}}
    @php
    $logo = App\Models\SoftwareGeneralSetting::first();
    $social = App\Models\SoftwareSocial::first();
    $footer_abouts = App\Models\SoftwareFooterAbout::first();
    $page_categories = App\Models\SoftwarePageCategory::where('status',1)->take(2)->get();
    @endphp
    {{-- @dd($page_categories) --}}
    <div class="footer-area section-space--ptb_80 text-white">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        {{-- @dd($logo) --}}
                        <img src="{{asset($logo->logo)}}" width="160" height="48" class="img-fluid" alt="">
                    </div>
                    <ul class="footer-widget__list">
                        <!-- <li>{{$logo->about}}</li> -->
                        {{ $footer_abouts->about }}
                        <li>{{$logo->location}}</li>
                        <li><a class="hover-style-link">{{$logo->email_address}}</a></li>
                        <li><a class="hover-style-link font-weight--bold">{{$logo->phone_number}}</a></li>
                        {{-- <li><a href="https://hasthemes.com/" class="hover-style-link text-color-primary">www.mitech.xperts.com</a></li> --}}
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20 text-white">Useful Links</h6>
                    @foreach ($page_categories as $item)

                    <ul class="footer-widget__list">
                        @if($item->slug !== 'our-products')
                        <li><a href="{{ route('blog')}}" class="hover-style-link">Blogs</a></li>
                        <li><a href="{{route('frontend.term') }} " class="hover-style-link">Terms of Services</a></li>
                        <li><a href="{{route('frontend.privacy')}}" class="hover-style-link">Privacy Policy</a></li>
                        {{-- <li class="mb-2"><a href="{{ route('blog')}}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> </a></li> --}}
                        @endif

                        {{-- <li><a href="#" class="hover-style-link">Managed IT</a></li>
                            <li><a href="#" class="hover-style-link">IT Support</a></li>
                            <li><a href="#" class="hover-style-link">IT Consultancy</a></li>
                            <li><a href="#" class="hover-style-link">Cloud Computing</a></li>
                            <li><a href="#" class="hover-style-link">Cyber Security</a></li> --}}
                    </ul>
                    @endforeach
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20 text-white">Our Service</h6>
                    <ul class="footer-widget__list">
                        {{-- <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                            <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                            <li><a href="#" class="hover-style-link">Privacy Policy</a></li> --}}
                        @php
                        $services = App\Models\SoftwareService::where('status', 1)->get();
                        // $pages = App\Models\Page::where('category_id',$item->id)->where('status',1)->get();
                        @endphp

                        @foreach ($services as $service)
                        {{-- @dd($service) --}}
                        @if($service->slug!=null)

                        <li><a href="{{route('services')}}" class="hover-style-link">{{$service->title}}</a></li>
                        @else
                        {{-- @dd($service->link) --}}
                        <li><a href="{{route('page-details',$service->slug)}}" class="hover-style-link">{{$service->title}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20 text-white">Newsletter</h6>

                    <div class="lg:col-span-3 md:col-span-4">

                        <p class="mt-6">Sign up and receive the latest tips via email.</p>
                        @if(session()->has('message'))
                        <div class="alert alert-success" style="color: green">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <form action="{{route('newsletter')}}" method="post">
                            @csrf
                            <div class="grid grid-cols-1">
                                <div class="foot-subscribe my-3">
                                    <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                        <input type="email" class="form-input border border-gray-800 text-gray-100 px-3 w-100 py-2 focus:shadow-none" placeholder="Email" name="email" required="">
                                    </div>
                                </div>

                                <button type="submit" id="submitsubscribe" name="send" class="ht-btn ht-btn-md btn-sm " style="background-color: #0072EF">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <div class="footer-widget__title section-space--mb_50"></div>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="image_btn" aria-label="Google play Button"><img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/icons/aeroland-button-google-play.webp" alt=""></a></li>
                <li><a href="#" class="image_btn" aria-label="App Store Button"><img class="img-fluid" src="{{ asset('frontend2') }}/assets/images/icons/aeroland-button-app-store.webp" alt=""></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>

<div class="footer-copyright-area section-space--pb_30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <span class="copyright-text text-white">&copy;<a href="{{ url('/') }}"> {{ $footer_abouts->copyright }}</a></span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <ul class="list ht-social-networks solid-rounded-icon">

                    <li class="item">
                        <a href="{{$social->twitter}}" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                            <i class="fab fa-twitter link-icon  text-white"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{$social->facebook}}" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                            <i class="fab fa-facebook-f link-icon  text-white"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{$social->youtube}}" target="_blank" aria-label="Youtube" class="social-link hint--bounce hint--top hint--primary">
                            <i class="fab fa-youtube link-icon  text-white"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a href="{{$social->linkdin}}" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                            <i class="fab fa-linkedin link-icon  text-white"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>