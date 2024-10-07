<?php

namespace App\Http\Controllers\Shop;

use Str;
use Auth;
use Hash;
use Toastr;
use App\Thana;
use Validator;
use App\District;
use App\Division;
use App\BdProduct;
use Carbon\Carbon;
use App\BdCategory;
use App\Models\City;
use App\Models\Page;
use App\Models\User;
use App\Models\State;
use App\AdvertisePost;
use App\BdSubCategory;
use App\Models\Country;
use App\Models\Startup;
use App\AdvertiseBanner;
use App\Models\Category;
use App\Models\AdPayment;
use App\BdProductCategory;
use App\Models\AboutAdmin;
use App\Models\AddCompany;
use App\Models\NewGallery;
use App\Models\Newsletter;
use App\Models\CountryBlog;
use App\Models\FSInterview;
use App\Models\SiteSetting;
use App\Models\FounderStory;
use App\Models\PackageOrder;
use Illuminate\Http\Request;
use App\BdProductSubCategory;
use App\Models\PaymentMethod;
use App\Models\AdvertiseModal;
use App\Models\BuySellAdPrice;
use App\Models\BuySellProduct;
use App\Models\BusinessService;
use App\Models\AdvertisePackage;
use App\Models\BuySellSubCategory;
use Illuminate\Support\Facades\DB;
use App\Models\BuySellProductImage;
use App\Http\Controllers\Controller;
use App\Models\AdminBuySellCategory;
use App\Models\BuySellProductDetail;
use Illuminate\Support\Facades\Crypt;
use App\Models\SoftwareSiteSettingBanner;;

class HomeController extends Controller
{
    public function home()
    {
        $categories = BdCategory::orderBy('id', 'desc')->where('status', 1)->get();
        $sub_categories = BdSubCategory::orderBy('id', 'desc')->where('status', 1)->get();
        $quick_search_categories = BdCategory::orderBy('id', 'desc')->where('status', 1)->where('quick_search', 1)->get();
        $banner = AdvertiseBanner::get();
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 4)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->orderBy('id', 'desc')->take(5)->get();
        $right_banner = AdvertiseBanner::take(2)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->orderBy('id', 'desc')->take(5)->get();
        $right_side_image = AdvertiseBanner::where('advertise_category_id', 9)->where('advertise_placement_id', 11)->orderBy('id', 'desc')->take(10)->get();
        $buysellcategories = AdminBuySellCategory::where('status', 1)->get();
        $buysellsubcategories = BuySellSubCategory::where('status', 1)->get();

        $site_setting = SiteSetting::first();
        $modal = AdvertiseModal::first();
        return view('welcome', compact('buysellsubcategories', 'buysellcategories', 'modal', 'site_setting', 'right_side_image', 'sub_categories', 'categories', 'quick_search_categories', 'banner', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }
    public function index()
    {
        $businessService = BusinessService::where('status', 1)->get();
        $newGallery = NewGallery::where('status', 1)->take(8)->get();
        $aboutUs = AboutAdmin::where('status', 1)->first();
        $categories = BdCategory::orderBy('id', 'desc')->where('status', 1)->get();
        $buysellsubcategories = BuySellSubCategory::where('status', 1)->get();
        $buysellcategories = AdminBuySellCategory::where('status', 1)->get();
        $sub_categories = BdSubCategory::orderBy('id', 'desc')->where('status', 1)->get();
        $quick_search_categories = BdCategory::orderBy('id', 'desc')->where('status', 1)->where('quick_search', 1)->get();
        $banner = AdvertiseBanner::get();
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 4)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->orderBy('id', 'desc')->take(5)->get();
        $right_banner = AdvertiseBanner::take(5)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->orderBy('id', 'desc')->take(5)->get();
        $right_side_image = AdvertiseBanner::where('advertise_category_id', 9)->where('advertise_placement_id', 11)->orderBy('id', 'desc')->take(10)->get();

        $site_setting = SiteSetting::first();
        return view('bdshop.frontEnd.welcome', compact('businessService', 'buysellsubcategories', 'newGallery', 'aboutUs', 'buysellcategories', 'site_setting', 'right_side_image', 'sub_categories', 'categories', 'quick_search_categories', 'banner', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }

    public function shop_sub_category($slug)
    {
        $shop_category = BdCategory::where('slug', $slug)->first();
        $shop_sub_categories = BdSubCategory::where('category_id', $shop_category->id)->get();
        return view('bdshop.frontEnd.shop_subcategory', compact('shop_sub_categories', 'shop_category'));
    }
    public function product()
    {
        $products = BdProduct::where('status', 1)->orderBy('id', 'desc')->paginate(12);
        $productCategories = BdProductCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $random_products = BdProduct::where('status', 1)
            ->orderBy('click_count', 'desc')
            ->take(10)
            ->get();
        return view('bdshop.frontEnd.product.index', compact('products', 'productCategories', 'random_products'));
    }
    //product by category
    public function showProductByCategory($slug)
    {
        $cat_id = BdProductCategory::where('slug', $slug)->first();

        $products = BdProduct::where('product_cat_id', $cat_id->id)->where('status', 1)->orderBy('id', 'desc')->paginate(12);

        $productCategories = BdProductCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $random_products = BdProduct::where('status', 1)
            ->orderBy('click_count', 'desc')
            ->take(10)
            ->get();
        return view('bdshop.frontEnd.product.index', compact('products', 'productCategories', 'random_products'));
    }
    public function productSearch(Request $request)
    {

        $search = $request->search_product;
        $products = DB::table('bd_products')->where('title', 'LIKE', '%' . $search . '%')
            ->where('status', 1)->paginate(10);
        $productCategories = BdProductCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $random_products = BdProduct::where('status', 1)
            ->orderBy('click_count', 'desc')
            ->take(10)
            ->get();
        return view('bdshop.frontEnd.product.index', compact('products', 'productCategories', 'random_products'));
    }
    // public function product_details($slug)
    // {
    //     $product_details = BdProduct::where('slug', $slug)->first();

    //     $product_details->click_count = $product_details->click_count + 1;
    //     $product_details->update();
    //     $related_products = BdProduct::where('product_cat_id', $product_details->product_cat_id)->where('id', '!=', $product_details->id)->where('status', 1)->get();
    //     $user = User::where('id', $product_details->bd_user_id)->first();
    //     $categories = BdProductCategory::where('status', 1)->get();
    //     return view('bdshop.frontEnd.product.details', compact('product_details', 'user', 'related_products', 'categories'));
    // }
    public function product_details($slug)
    {
        $product_details = BdProduct::where('slug', $slug)->first();

        // Check if the product belongs to a user with a package
        $user = User::where('id', $product_details->bd_user_id)->first();
        $package_info = null;
        if ($user) {
            $packageOrder = PackageOrder::where('user_id', $user->id)
                ->where('package_id', $user->package_id)
                ->where('payment_status', 1)
                ->where('order_status', 1)
                ->first();

            if ($packageOrder) {
                // Adjust approved_time with day_limit
                $expiryDate = Carbon::parse($packageOrder->approved_at)->addDays($packageOrder->package->day_limit);

                // Compare with today's date
                $today = now();

                if ($expiryDate->gte($today)) {
                    // User's package is still valid, you can show the information
                    $package_info = "active";
                } else {
                    // User's package has expired, hide the information
                    $package_info = "expire";
                }
            } else {
                // No package for the user
                $package_info = "No package";
            }
        }
        // Update click_count
        $product_details->click_count = $product_details->click_count + 1;
        $product_details->update();

        // Fetch related products
        $related_products = BdProduct::where('product_cat_id', $product_details->product_cat_id)
            ->where('id', '!=', $product_details->id)
            ->where('status', 1)
            ->get();

        // Fetch categories
        $categories = BdProductCategory::where('status', 1)->get();

        return view('bdshop.frontEnd.product.details', compact('product_details', 'user', 'related_products', 'categories', 'package_info'));
    }


    public function visitStore($id)
    {
        $products = DB::table('bd_products')->where('bd_user_id', $id)
            ->where('status', 1)->paginate(12);
        $productCategories = BdProductCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $random_products = BdProduct::where('status', 1)
            ->orderBy('click_count', 'desc')
            ->take(10)
            ->get();
        return view('bdshop.frontEnd.product.visit-store', compact('products', 'productCategories', 'random_products'));
    }
    public function sub_category($slug)
    {
        $category = BdProductCategory::where('slug', $slug)->first();
        $sub_categories = BdProductSubCategory::where('category_id', $category->id)->get();
        $categories = BdProductCategory::where('status', 1)->get();
        return view('bdshop.frontEnd.sub_category', compact('sub_categories', 'category', 'categories'));
    }
    public function sub_category_product($slug)
    {
        $categories = BdProductCategory::where('status', 1)->get();
        $sub_category = BdProductSubCategory::where('slug', $slug)->first();
        $products = BdProduct::where('product_sub_cat_id', $sub_category->id)->where('status', 1)->get();
        return view('bdshop.frontEnd.product.sub_product', compact('products', 'sub_category', 'categories'));
    }
    public function category_all($slug)
    {
        $shop_categories = BdCategory::where('status', 1)->get();
        $subcategory = BdSubCategory::where('slug', $slug)->first();
        if ($subcategory) {
            $advertise = AdvertisePost::where('subcategory_id', $subcategory->id)->orderBy('id', 'desc')->where('status', 1)->paginate(10);
        } else {
            $advertise = [];
        }
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 3)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->take(2)->get();
        return view('bdshop.frontEnd.advertise', compact('subcategory', 'advertise', 'shop_categories', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }
    //blog
    public function blogs()
    {
        $countries = Country::all();
        $country_blogs = CountryBlog::orderBy('id','desc')->paginate(6);
        $latest_blogs = CountryBlog::orderBy('id','desc')->take(6)->get();
        return view('bdshop.frontEnd.blogs', compact('latest_blogs', 'countries', 'country_blogs'));
    }
    //search blog
    public function searchBlog(Request $request)
    {
        $countries = Country::all();
        $latest_blogs = CountryBlog::latest('id')->take(6)->get();
        $searchTerm = $request->input('search');

        // Query the database to find matching blogs
        $country_blogs = CountryBlog::where('title', 'LIKE', '%' . $searchTerm . '%')
                                    ->paginate(6); // Adjust pagination as needed

        // Return the search results to the view (reusing your index view or a separate one)
        return view('bdshop.frontEnd.country_blog_search', compact('country_blogs','countries','latest_blogs'));
    }
    //all companies
    public function allCompanies()
    {
        $advertises = AdvertisePost::where('status', 1)->paginate(4);
        return view('bdshop.frontEnd.all_companies', compact('advertises'));
    }
    //get country post
    public function getCountryProduct($name)
    {
        $country = Country::where('name', $name)->first();
        $advertises = AdvertisePost::where('country_id', $country->id)->orderBy('id', 'desc')->where('status', 1)->get();
        return view('bdshop.frontEnd.country_post', compact('advertises', 'name'));
    }
    //get country blog
    public function getCountryBlog($name)
    {
        $data = Country::where('name', $name)->first();
        $countryblog = CountryBlog::where('country_id', $data->id)->paginate(5);
        $countries = Country::all();
        return view('bdshop.frontEnd.country_blog', compact('countryblog', 'countries', 'data'));
    }
    //get company
    public function productByCompany()
    {
        $users = User::whereNotNull('business_name')->get();

        return view('bdshop.frontEnd.product_by_company', compact('users'));
    }
    //view product by company
    public function singleCompany($name)
    {
        $product = User::where('business_name', $name)->first();
        $products = BdProduct::where('bd_user_id', $product->id)->where('status', 1)->get();
        return view('bdshop.frontEnd.company_product', compact('products', 'product'));
    }
    public function singleBlog($slug)
    {
        $data = CountryBlog::where('slug', $slug)->first();
        $countries = Country::all();
        $latest_blogs = CountryBlog::latest('id')->take(10)->get();
        return view('bdshop.frontEnd.single_country_blog', compact('latest_blogs', 'data', 'countries'));
    }
    public function login()
    {
        $categories = BdProductCategory::where('status', 1)->get();
        return view('bdshop.frontEnd.login', compact('categories'));
    }
    public function info_user_login(Request $request)
    {
        if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            $user = User::where('role_id', 2)->where('email', $request->email)->first();

            if ($user != null) {
                if (Hash::check($request->password, $user->password)) {
                    if ($request->has('remember')) {
                        // auth()->login($user, true);

                        if (auth()->user()->user_type == 'info-user') {
                            return redirect()->route('info-profile');
                        }
                    } else {
                        auth()->login($user, false);
                        // dd(Auth::user()->id);
                        // if(Auth::user()->role_id == 2){
                        return redirect()->route('user.info-profile');
                        // }
                    }
                } else {
                    Toastr::error('Invalid Phone or password!');
                    return redirect()->back();
                }
            } else {
                Toastr::error('User Not Found');
                return redirect()->back();
            }
        }

        return back();
    }
    public function profile()
    {
        $categories = BdProductCategory::where('status', 1)->get();
        $products = BdProduct::where('status', 1)->where('bd_user_id', Auth::user()->id)->get();
        return view('bdshop.frontEnd.home.profile', compact('categories', 'products'));
    }
    public function CompanyDetail()
    {
        $categories = BdProductCategory::where('status', 1)->get();
        $products = BdProduct::where('status', 1)->where('bd_user_id', Auth::user()->id)->get();
        $user = Auth::user()->id;
        $company = User::where('id', $user)->first();
        $data = AdvertisePost::where('user_id', $user)->first();

        return view('bdshop.frontEnd.home.company-detail', compact('categories', 'products', 'data'));
    }

    public function CompanyDetailSubmit($id, Request $request)
    {
        $data = AdvertisePost::find($id);

        $data->about = $request->about;
        $data->founded_date = $request->founded_date;
        $data->operating_status = $request->operating_status;
        $data->total_employee = $request->total_employee;
        $data->investments = $request->investments;
        $data->total_funding_amount = $request->total_funding_amount;
        $data->funding_details = $request->funding_details;
        $data->save();
        Toastr::success('Date Saved Successfully');
        return redirect()->back();
    }
    // public function myPackage()
    // {
    //     $user = Auth::user()->id;
    //     $categories = BdProductCategory::where('status', 1)->get();
    //     $products = BdProduct::where('status', 1)->where('bd_user_id', $user)->get();
    //     $packageOrders = PackageOrder::where('user_id', $user)->get();
    //     $advertises_remain = count(BdProduct::where('bd_user_id', $user)->get());
    //     $user_advertise_limit = User::where('id', $user)->first();
    //     $packageApprove = PackageOrder::where('package_id', $user_advertise_limit->package_id)->where('user_id', $user)->where('order_status', 1)->first();
    //     if (!empty($packageApprove->approved_at)) {
    //         $advertise_remain = $user_advertise_limit->Advertise_limit - $advertises_remain;
    //     } else {
    //         $advertise_remain = 0;
    //     }

    //     if (!empty($packageApprove->approved_at)) {
    //         $approve_time = $packageApprove->approved_at;
    //     } else {
    //         $approve_time = '';
    //     }
    //     $today_time = now();


    //     if (!empty($approve_time)) {
    //         // $time_to=date_add($approve_time, date_interval_create_from_date_string($user_advertise_limit->day_limit));
    //         $time_to = (new Carbon($approve_time))->addDays($user_advertise_limit->day_limit);
    //         $start_time = strtotime($today_time);
    //         $end_time = strtotime($time_to);
    //         // dd($time_to,$start_time,$end_time);
    //         // // Check if $time_to exceeds $today_time

    //         if ($start_time> $end_time) {
    //             $time_to = 0;
    //             $years = 0;
    //             $months = 0;
    //             $days = 0;
    //             $hours = 0;
    //             $minutes = 0;
    //             $seconds = 0;
    //         } else {
    //             $times = abs($end_time - $start_time);
    //             $years = floor($times / (365 * 60 * 60 * 24));
    //             $months = floor(($times - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    //             $days = floor(($times - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
    //             $hours = floor(($times - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
    //             $minutes = floor(($times - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
    //             $seconds = floor(($times - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minutes * 60));
    //         }

    //         // Now you can use $years, $months, $days, $hours, $minutes, and $seconds as needed.




    //     } else {
    //         $time_to = 0;
    //         $times = 0;
    //         $years = 0;
    //         $months = 0;
    //         $days = 0;
    //         $hours = 0;
    //         $minutes = 0;
    //         $seconds = 0;
    //     }



    //     return view('bdshop.frontEnd.home.my_package', compact('categories', 'products', 'packageOrders', 'advertise_remain',  'years', 'months', 'days', 'hours', 'minutes', 'seconds'));
    // }
    public function myPackage()
    {
        $user = Auth::user()->id;
        $categories = BdProductCategory::where('status', 1)->get();
        $products = BdProduct::where('status', 1)->where('bd_user_id', $user)->get();
        $packageOrders = PackageOrder::where('user_id', $user)->get();
        $advertises_remain = count(BdProduct::where('bd_user_id', $user)->get());
        $user_advertise_limit = User::where('id', $user)->first();
        $packageApprove = PackageOrder::where('package_id', $user_advertise_limit->package_id)
            ->where('user_id', $user)
            ->where('order_status', 1)
            ->first();

        $advertise_remain = !empty($packageApprove->approved_at) ? $user_advertise_limit->Advertise_limit - $advertises_remain : 0;
        $approve_time = !empty($packageApprove->approved_at) ? new Carbon($packageApprove->approved_at) : null;
        $today_time = now();
        $remainingDays = 0;
        $remainingHours = 0;
        $remainingMinutes = 0;
        $time_to = $approve_time->addDays($user_advertise_limit->day_limit);

        if ($today_time < $time_to) {
            $remainingDays = now()->diffInDays($time_to);
            $remainingHours = now()->diffInHours($time_to);
            $remainingMinutes = now()->diffInMinutes($time_to);
        } else {
            $remainingDays = 0;
            $remainingHours = 0;
            $remainingMinutes = 0;
        }

        return view('bdshop.frontEnd.home.my_package', compact(
            'categories',
            'products',
            'packageOrders',
            'advertise_remain',
            'remainingDays',
            'remainingHours',
            'remainingMinutes'
        ));
    }


    public function change_password()
    {
        $categories = BdProductCategory::where('status', 1)->get();
        return view('bdshop.frontEnd.home.change_password', compact('categories'));
    }
    public function save_chnage_password(Request $request)
    {
        $data = User::where('id', Auth::user()->id)->first();

        if ($request->old_password) {

            $this->validate($request, [
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ]);
            if (!(Hash::check($request->get('old_password'), $data->password))) {
                return redirect()->back()->with('message', 'Your current password does not matches with the password you provided. Please try again!');
                // The passwords matches
            }
            $data->password = bcrypt($request->password);
        }
        $data->save();
        return redirect()->back()->with('message', 'Successfully Updated Password');
    }
    public function info_search(Request $request)
    {
        $search = $request->search;
        $shop_categories = BdCategory::where('status', 1)->get();
        $advertise  = AdvertisePost::where('business_name', 'LIKE', "%{$search}%")
            ->orWhere('keywords', 'LIKE', "%{$search}%")
            ->get();

        if (count($advertise) == 0) {
            $advertise  = BdCategory::where('name', 'LIKE', "%{$search}%")

                ->get();
            return view('bdshop.frontEnd.categorysearch', compact('advertise', 'shop_categories', 'search'));
        }


        return view('bdshop.frontEnd.search', compact('advertise', 'shop_categories', 'search'));
    }
    public function advance_search()
    {
        // $search = $request->search;
        $shop_categories = BdCategory::where('status', 1)->get();
        $advertise  = AdvertisePost::all();
        $countries = Country::orderBy('name')->get();

        // ->where('business_name', 'LIKE', "%{$search}%")
        // ->orWhere('keywords', 'LIKE', "%{$search}%")
        // ->get();
        return view('bdshop.frontEnd.advancesearch', compact('countries', 'shop_categories', 'advertise'));
    }
    public function get_advance_search_result()
    {
        $shop_categories = BdCategory::where('status', 1)->get();
        $advertise  = AdvertisePost::all();
        $countries = Country::orderBy('name')->get();
        return view('bdshop.frontEnd.getadvanceresult', compact('countries', 'shop_categories', 'advertise'));
    }
    public function advance_search_result(Request $request)
    {
        $search = $request->keyword;

        $country_id = $request->country_id;
        $state_id = $request->state_id;
        $city_id = $request->city_id;

        $countries = Country::all();
        $country_name = Country::find($country_id);
        $state_name = State::find($state_id);
        $city_name = City::find($city_id);
        $countries = Country::all();
        // $states=State::all();
        // $cities=City::all();
        $shop_categories = BdCategory::where('status', 1)->get();
        $advertise  = AdvertisePost::query()
            ->where('business_name', 'LIKE', "%{$search}%")
            // ->orWhere('keywords', 'LIKE', "%{$search}%")
            ->where('country_id', $country_id)
            ->where('state_id', $state_id)
            ->where('city_id', $city_id)
            ->get();
        return view('bdshop.frontEnd.getadvancesearch', compact('countries', 'advertise', 'shop_categories', 'search', 'country_name', 'state_name', 'city_name', 'country_id', 'state_id', 'city_id'));
    }
    public function paymentMethod(Request $request)
    {
        $data = PaymentMethod::where('id', $request->id)->first();
        return response()->json($data);
    }
    public function adShowType(Request $request)
    {
        $data = BuySellAdPrice::where('id', $request->id)->first();
        return response()->json($data);
    }
    public function find_state(Request $request)
    {
        $data = State::where('country_id', $request->id)->get();
        return response()->json($data);
    }
    public function find_district(Request $request)
    {
        $data = District::where('division_id', $request->id)->get();
        return response()->json($data);
    }
    public function find_city(Request $request)
    {
        $data = City::where('state_id', $request->id)->get();
        return response()->json($data);
    }
    public function findBuySellCategory(Request $request)
    {
        $data = BuySellSubCategory::where('category_id', $request->id)->get();
        return response()->json($data);
    }
    public function alpha_category($a)
    {
        $sub_category = BdSubCategory::where('name', 'LIKE', "{$a}%")->get();
        $character = $a;
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 3)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->take(2)->get();
        return view('bdshop.frontEnd.alpha_cat', compact('sub_category', 'character', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }
    public function edit_profile()
    {
        $categories = BdProductCategory::where('status', 1)->get();
        $products = BdProduct::where('status', 1)->where('company_id', Auth::user()->company_id)->get();
        $company = AddCompany::find(Auth::user()->company_id);
        $countries = Country::where('id', 18)->get();
        $cities = District::orderBy('name')->get();
        return view('bdshop.frontEnd.home.edit_profile', compact('categories', 'products', 'company', 'countries', 'cities'));
    }
    public function update_profile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->business_name = $request->stall_name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->remarks = $request->remarks;
        $image = $request->file('logo');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/icon/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $user->avatar_original = $image_url;
            }
        }
        $user->update();

        $company = AddCompany::where('id', Auth::user()->company_id)->first();
        if ($company) {
            $company->business_name = $request->stall_name;
            $company->address = $request->address;
            $company->phone = $request->phone;
            $company->website = $request->website;
            $company->email = $request->email;
            $company->owner_name = $request->name;
            $company->update();
        } else {
            $company = new AddCompany();
            $company->business_category = $request->business_category;
            $slug = Str::slug($request->business_name, '-');
            if ($slug == '') {
                $slug =  preg_replace('/\s+/u', '-', trim($request->business_name));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
            }
            $company->slug = $slug;
            $company->business_name = $request->stall_name;
            $company->owner_name = $request->owner_name;
            $company->address = $request->address;
            $company->phone = $request->phone;
            $company->email = $request->email;
            $company->website = $request->website;
            $company->facebook = $request->facebook;
            $company->google_location = $request->google_location;
            $company->city = $request->city;
            $company->country = $request->country;
            $company->keywords = $request->keywords;
            $company->save();
            $user = User::find(Auth::user()->id);
            $user->company_id = $company->id;
            $user->update();
        }
        return redirect()->back()->with('message', 'Successfully Updated');
    }
    public function contact()
    {

        return view('bdshop.frontEnd.contact');
    }
    public function business_contact()
    {
        $contactCover = SoftwareSiteSettingBanner::first();
        return view('bdshop.frontEnd.contact2', compact('contactCover'));
    }
    public function contactAdd(Request $request)
    {

        return view('bdshop.frontEnd.contact');
    }
    public function allCountries()
    {
        $all_countries = Country::all();
        return view('bdshop.frontEnd.all_countries', compact('all_countries'));
    }
    public function showPackage()
    {
        $categories = BdProductCategory::where('status', 1)->get();
        $packages = AdvertisePackage::where('status', 1)->get();
        return view('bdshop.frontEnd.packages', compact('categories', 'packages'));
    }
    public function packageOrder($id)
    {
        if (Auth::user()) {
            $categories = BdProductCategory::where('status', 1)->get();
            $package = AdvertisePackage::findOrFail($id);
            $payment_methods = PaymentMethod::latest()->get();
            return view('bdshop.frontEnd.package_order', compact('categories', 'package', 'payment_methods'));
        } else {
            return redirect()->route('info-login');
        }
    }
    public function packageOrderSubmit(Request $request)
    {
        $order = new PackageOrder();
        $order->package_id = $request->package_id;
        $order->user_id = Auth::user()->id;
        $order->payment_method_id = $request->payment_method_id;
        $order->transaction_id = $request->transaction_id;
        $order->payment_status = 0;
        $order->order_status = 0;
        $order->save();
        return redirect()->back()->with('message', 'Your order successfully Placed');
    }
    public function pageDetails($slug)
    {
        $page_details = Page::where('slug', $slug)->first();
        $categories = BdProductCategory::where('status', 1)->get();
        return view('bdshop.frontEnd.page_details', compact('categories', 'page_details'));
    }
    public function companyShow($slug)
    {
        $shop_categories = BdCategory::where('status', 1)->get();
        $company = AdvertisePost::where('slug', $slug)->first();

        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 3)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->take(2)->get();
        return view('bdshop.frontEnd.show-company', compact('company', 'shop_categories', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }
    public function companyDetial($slug)
    {
        $shop_categories = BdCategory::where('status', 1)->get();
        $company = AdvertisePost::where('slug', $slug)->first();

        $products = BdProduct::where('bd_user_id', $company->user_id)->where('status', 1)->latest()->get();

        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 3)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->take(2)->get();
        $businessstories = Startup::where('status', 1)->latest()->take(3)->get();
        return view('bdshop.frontEnd.show_company_detail', compact('company', 'shop_categories', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner', 'businessstories', 'products'));
    }
    public function buySellRegister()
    {
        return view('bdshop.frontEnd.buy-sell.auth.registration');
    }
    public function registerStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|min:10|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role_id = 3;
        $user->save();
        Toastr::success('Registration Successfull! :-)', 'Success');
        return redirect()->back();
    }

    public function buySellLogin()
    {
        return view('bdshop.frontEnd.buy-sell.auth.login');
    }
    // public function buySellLoginStore(Request $request)
    // {
    //     $this->validate($request, [

    //         'phone' => 'required|min:10',
    //         'password' => 'required|min:6'

    //     ]);
    //     $user = User::where('role_id', 3)->where('email', $request->phone)->first();

    //     if($user != null){

    //         if(Hash::check($request->password, $user->password)){

    //             Toastr::success('Welcome!Login Successfull');
    //             return redirect()->route('buyselluser.dashboard');

    //             }
    //             else {
    //                 Toastr::error('Invalid Phone number or Password');
    //                 return redirect()->back();
    //             }
    //     }
    //     else
    //     {
    //         Toastr::error('User Not Found!!');
    //         return redirect()->back();
    //     }



    // }
    public function buySellLoginStore(Request $request)
    {
        $this->validate($request, [

            'phone' => 'required|min:10',
            'password' => 'required|min:6'

        ]);
        if ($request->get('phone')) {
            $user = User::where('role_id', 3)->where('phone', $request->phone)->first();

            if ($user != null) {
                if (Hash::check($request->password, $user->password)) {

                    auth()->login($user, false);
                    return redirect()->route('buyselluser.dashboard');
                } else {
                    Toastr::error('Invalid Phone number or Password');
                    return redirect()->back();
                }
            } else {
                Toastr::error('User Not Found!!');
                return redirect()->back();
            }
        }

        return back();
    }
    public function buySellUserDashboard()
    {
        return view('bdshop.frontEnd.buy-sell.buy-sell-user-dashboard');
    }
    public function addBuySellPost()
    {
        if (Auth::user() && Auth::user()->role_id == 3) {
            return redirect()->route('buyselluser.dashboard');
        } else {
            return redirect()->route('buy-sell.login');
        }
    }
    public function buysellUserSetting()
    {

        $user = User::findOrFail(Auth::user()->id);
        $divisions = Division::where('status', 1)->get();
        $districts = District::where('status', 1)->get();
        return view('bdshop.frontEnd.buy-sell.buy-sell-user-setting', compact('user', 'divisions', 'districts'));
    }

    public function buysellUserUpdate(Request $request, $id)
    {
        $data = User::find($id);

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->division = $request->division;
        $data->district = $request->district;
        $data->save();
        Toastr::success('Data Update Successfull');
        return redirect()->back();
    }
    public function buysellPostAd()
    {
        $user = User::where('role_id', 3)->where('id', Auth::user()->id)->first();
        $categories = AdminBuySellCategory::where('status', 1)->get();
        return view('bdshop.frontEnd.buy-sell.post_ad', compact('user', 'categories'));
    }

    public function buysellItem($id)
    {
        $item = BuySellSubCategory::findOrFail($id);
        $user = User::where('role_id', 3)->where('id', Auth::user()->id)->first();
        $item_category = $item->category_id;
        if ($item->form_type == "land") {
            return view('bdshop.frontEnd.buy-sell.landform', compact('item', 'item_category', 'user'));
        } else if ($item->form_type == "commercial") {
            return view('bdshop.frontEnd.buy-sell.commercialform', compact('item', 'item_category', 'user'));
        } else if ($item->form_type == "room") {
            return view('bdshop.frontEnd.buy-sell.roomform', compact('item', 'item_category', 'user'));
        } else if ($item->form_type == "house") {
            return view('bdshop.frontEnd.buy-sell.houseform', compact('item', 'item_category', 'user'));
        } else if ($item->form_type == "apartment") {
            return view('bdshop.frontEnd.buy-sell.apartmentform', compact('item', 'item_category', 'user'));
        } else if ($item->form_type == "car") {
            return view('bdshop.frontEnd.buy-sell.carform', compact('item', 'item_category', 'user'));
        } else if ($item->form_type == "motorbike") {
            return view('bdshop.frontEnd.buy-sell.motorbikeform', compact('item', 'item_category', 'user'));
        }
        // return view('bdshop.frontEnd.buy-sell.item',compact('item'));

    }
    public function buysellItemSubmit(Request $request)
    {

        $item = BuySellSubCategory::findOrFail($request->item_id);
        if ($item->form_type == "land") {
            $this->validate($request, [

                'land_type' => 'required',
                'land_size' => 'required',
                'land_unit' => 'required',
                'price_unit' => 'required',
                'address' => 'required',
                'title' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required'

            ]);
        } else if ($item->form_type == "apartment") {
            $this->validate($request, [
                'beds' => 'required',
                'baths' => 'required',
                'size' => 'required',
                'facing' => 'required',
                'completion_status' => 'required',
                'address' => 'required',
                'title' => 'required',
                'price_unit' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required'
            ]);
        } else if ($item->form_type == "house") {
            $this->validate($request, [
                'beds' => 'required',
                'baths' => 'required',
                'land_size' => 'required',
                'land_unit' => 'required',
                'house_size' => 'required',
                'house_unit' => 'required',
                'address' => 'required',
                'title' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required'
            ]);
        } else if ($item->form_type == "commercial") {
            $this->validate($request, [
                'property_type' => 'required',
                'size' => 'required',
                'facing' => 'required',
                'completion_status' => 'required',
                'land_unit' => 'required',
                'price_unit' => 'required',
                'address' => 'required',
                'title' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required'
            ]);
        } else if ($item->form_type == "room") {
            $this->validate($request, [
                'property_type' => 'required',
                'address' => 'required',
                'title' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required',
                'unit_three' => 'required'
            ]);
        } else if ($item->form_type == "car") {
            $this->validate($request, [
                'title' => 'required',
                'conditions' => 'required',
                'brand' => 'required',
                'model' => 'required',
                'address' => 'required',
                'year_of_manufacture' => 'required',
                'engine_capacity' => 'required',
                'fuel_type' => 'required',
                'transmission' => 'required',
                'body_type' => 'required',
                'kilometers_run' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required',

            ]);
        } else if ($item->form_type == "motorbike") {
            $this->validate($request, [
                'title' => 'required',
                'bike_type' => 'required',
                'conditions' => 'required',
                'brand' => 'required',
                'model' => 'required',
                'address' => 'required',
                'year_of_manufacture' => 'required',
                'engine_capacity' => 'required',
                'kilometers_run' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required',

            ]);
        }


        $data = new BuySellProduct();
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->user_id = Auth::user()->id;
        $data->category_id = $item->category_id;
        $data->subcategory_id = $item->id;
        $data->address = $request->address;
        $data->description = $request->description;
        $data->rent = $request->rent;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->is_reason = 0;
        $data->status = 0;
        if ($request->negotiable) {
            $data->negotiable = $request->negotiable;
        } else {
            $data->negotiable = 0;
        }
        $image = $request->file('thumbnail_img');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/buysell_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->thumbnail_img = $image_url;
            }
        }
        // $data->save();

        if ($data->save()) {
            $datad = new BuySellProductDetail();
            $datad->buysell_product_id = $data->id;
            $datad->land_type = $request->land_type;
            $datad->land_size = $request->land_size;
            $datad->land_unit = $request->land_unit;
            $datad->beds = $request->beds;
            $datad->baths = $request->baths;
            $datad->size = $request->size;
            $datad->features = $request->features;
            $datad->facing = $request->facing;
            $datad->completion_status = $request->completion_status;
            $datad->property_type = $request->property_type;
            $datad->price_unit = $request->price_unit;
            $datad->house_unit = $request->house_unit;
            $datad->house_size = $request->house_size;
            $datad->conditions = $request->conditions;
            $datad->brand = $request->brand;
            $datad->model = $request->model;
            $datad->year_of_manufacture = $request->year_of_manufacture;
            $datad->engine_capacity = $request->engine_capacity;
            $datad->fuel_type = $request->fuel_type;
            $datad->transmission = $request->transmission;
            $datad->body_type = $request->body_type;
            $datad->kilometers_run = $request->kilometers_run;
            $datad->trim = $request->trim;
            $datad->registration_year = $request->registration_year;
            $datad->bike_type = $request->bike_type;


            $datad->save();

            if ($request->hasFile('images')) {
                foreach (($request->file('images')) as $file) {
                    $image_name = $file->getClientOriginalName();
                    $image_name = preg_replace('/\s+/', '-', $image_name);
                    $image_full_name = $image_name;
                    $upload_path = 'uploads/buysell_image/';
                    $image_url = $upload_path . $image_full_name;
                    $success = $file->move($upload_path, $image_full_name);
                    BuySellProductImage::create([
                        'buysell_product_id' => $data->id,
                        'images' => $image_url,

                    ]);
                }
            }
            // $ad=BuySellProduct::where('id',$data->id)->first();
            // $ad_details=BuySellProductDetail::where('buysell_product_id',$data->id)->first();
            // $payments=BuySellAdPrice::where('status',1)->get();

            // $payment_methods=PaymentMethod::where('status',1)->get();
            return redirect()->route('buyselluser.user.ad.payment', $data->slug);
        } else {

            Toastr::error('Something wrong');
            return redirect()->back();
        }
    }
    //ad payment
    public function buysellUserAdPayment($slug)
    {
        $ad = BuySellProduct::where('slug', $slug)->first();
        $ad_details = BuySellProductDetail::where('buysell_product_id', $ad->id)->first();
        $payments = BuySellAdPrice::where('status', 1)->get();

        $payment_methods = PaymentMethod::where('status', 1)->get();
        return view('bdshop.frontEnd.buy-sell.payment', compact('ad', 'ad_details', 'payments', 'payment_methods'));
    }
    //show all ads
    public function allAds()
    {
        $categories = AdminBuySellCategory::where('status', 1)->get();
        $buysellcategories = AdminBuySellCategory::where('status', 1)->get();
        $buysellsubcategories = BuySellSubCategory::where('status', 1)->get();
        // $buysellitems=BuySellProduct::where('status',1)->latest()->paginate(20);
        $slideritems = BuySellProduct::where('status', 1)->where('type', 'Spotlight')->get();
        $urgentitems = BuySellProduct::where('status', 1)->where('type', 'Urgent')->get();
        $topaditems = BuySellProduct::where('status', 1)->where('type', 'Top Ad')->get();
        $regularitems = BuySellProduct::where('status', 1)->where('type', 'Regular')->paginate(20);
        return view('bdshop.frontEnd.buy-sell.all-ads', compact('buysellcategories', 'buysellsubcategories', 'slideritems', 'urgentitems', 'topaditems', 'regularitems', 'categories'));
    }
    public function sortBy(Request $request)
    {
        $categories = AdminBuySellCategory::where('status', 1)->get();
        if ($request->sort_by == 1) {
            $urgentitems = BuySellProduct::where('status', 1)->where('type', 'Urgent')->latest()->get();
            $topaditems = BuySellProduct::where('status', 1)->where('type', 'Top Ad')->latest()->get();
            $regularitems = BuySellProduct::where('status', 1)->where('type', 'Regular')->latest()->get();
        }
        if ($request->sort_by == 2) {
            $urgentitems = BuySellProduct::where('status', 1)->where('type', 'Urgent')->get();
            $topaditems = BuySellProduct::where('status', 1)->where('type', 'Top Ad')->get();
            $regularitems = BuySellProduct::where('status', 1)->where('type', 'Regular')->get();
        }
        if ($request->sort_by == 3) {
            $urgentitems = BuySellProduct::orderBy('rent', 'desc')->where('status', 1)->where('type', 'Urgent')->get();
            $topaditems = BuySellProduct::orderBy('rent', 'desc')->where('status', 1)->where('type', 'Top Ad')->get();
            $regularitems = BuySellProduct::orderBy('rent', 'desc')->where('status', 1)->where('type', 'Regular')->get();
        }
        if ($request->sort_by == 4) {
            $urgentitems = BuySellProduct::orderBy('rent', 'asc')->where('status', 1)->where('type', 'Urgent')->get();
            $topaditems = BuySellProduct::orderBy('rent', 'asc')->where('status', 1)->where('type', 'Top Ad')->get();
            $regularitems = BuySellProduct::orderBy('rent', 'asc')->where('status', 1)->where('type', 'Regular')->get();
        }

        return view('bdshop.frontEnd.buy-sell.search_result', compact('urgentitems', 'topaditems', 'regularitems', 'categories'));
    }
    public function buysellCategoryShowPost($slug)
    {
        $categories = AdminBuySellCategory::where('status', 1)->get();
        $data = AdminBuySellCategory::where('slug', $slug)->first();
        $buysellcategories = AdminBuySellCategory::where('status', 1)->get();
        $buysellsubcategories = BuySellSubCategory::where('status', 1)->get();
        $slideritems = BuySellProduct::where('status', 1)->where('category_id', $data->id)->where('type', 'Spotlight')->get();
        $urgentitems = BuySellProduct::where('status', 1)->where('category_id', $data->id)->where('type', 'Urgent')->get();
        $topaditems = BuySellProduct::where('status', 1)->where('category_id', $data->id)->where('type', 'Top Ad')->get();
        $regularitems = BuySellProduct::where('status', 1)->where('category_id', $data->id)->where('type', 'Regular')->paginate(20);
        return view('bdshop.frontEnd.buy-sell.adshow-by-slug', compact('data', 'buysellcategories', 'buysellsubcategories', 'slideritems', 'categories', 'urgentitems', 'topaditems', 'regularitems'));
    }

    public function buysellSubCategoryShowPost($slug)
    {
        $categories = AdminBuySellCategory::where('status', 1)->get();
        $data = BuySellSubCategory::where('slug', $slug)->first();
        $buysellcategories = AdminBuySellCategory::where('status', 1)->get();
        $buysellsubcategories = BuySellSubCategory::where('status', 1)->get();
        $slideritems = BuySellProduct::where('status', 1)->where('subcategory_id', $data->id)->where('type', 'Spotlight')->get();
        $urgentitems = BuySellProduct::where('status', 1)->where('subcategory_id', $data->id)->where('type', 'Urgent')->get();
        $topaditems = BuySellProduct::where('status', 1)->where('subcategory_id', $data->id)->where('type', 'Top Ad')->get();
        $regularitems = BuySellProduct::where('status', 1)->where('subcategory_id', $data->id)->where('type', 'Regular')->paginate(20);
        return view('bdshop.frontEnd.buy-sell.adshow-by-slug', compact('data', 'buysellcategories', 'buysellsubcategories', 'slideritems', 'categories', 'urgentitems', 'topaditems', 'regularitems'));
    }
    public function buysellItemSearch(Request $request)
    {
        $categories = AdminBuySellCategory::where('status', 1)->get();
        $buysellcategories = AdminBuySellCategory::where('status', 1)->get();
        $buysellsubcategories = BuySellSubCategory::where('status', 1)->get();
        $search = $request->search;
        $category = AdminBuySellCategory::where('status', 1)->where('title', 'LIKE', "%{$search}%")->get();
        $subcategory = BuySellSubCategory::where('status', 1)->where('title', 'Like', "%{$search}%")->get();
        $products = BuySellProduct::where('status', 1)->where('title', 'Like', "%{$search}%")->get();
        $buysellitemss = array();
        $buysellitems = array();
        $spotlightitems = array();
        $urgentitems = array();
        $adtopitems = array();
        $regularitems = array();
        $not_found = '';
        if (count($category) > 0) {

            foreach ($category as $cat) {
                $item = BuySellProduct::where('status', 1)->where('category_id', $cat->id)->get();
                array_push($buysellitemss, $item);
            }
            foreach ($buysellitemss as $items) {
                foreach ($items as $item) {
                    array_push($buysellitems, $item);
                }
            }
        } else if (count($subcategory)) {
            foreach ($subcategory as $subcat) {
                $itemss = BuySellProduct::where('status', 1)->where('subcategory_id', $subcat->id)->get();
                array_push($buysellitemss, $itemss);
            }


            foreach ($buysellitemss as $items) {

                foreach ($items as $item) {
                    array_push($buysellitems, $item);
                }
            }
        } else if (count($products) > 0) {
            foreach ($products as $item) {
                array_push($buysellitems, $item);
            }
        } else {
            $not_found = "No Data Found!";
        }

        if (count($buysellitems) > 0) {
            foreach ($buysellitems as $iteam) {
                if ($iteam->type == 'Spotlight') {
                    array_push($spotlightitems, $iteam);
                } elseif ($iteam->type == 'Urgent') {
                    array_push($urgentitems, $iteam);
                } elseif ($iteam->type == 'Top Ad') {
                    array_push($adtopitems, $iteam);
                } elseif ($iteam->type == 'Regular') {
                    array_push($regularitems, $iteam);
                }
            }
        }
        return view('bdshop.frontEnd.buy-sell.search_result_buysell', compact('spotlightitems', 'buysellitems', 'urgentitems', 'adtopitems', 'regularitems', 'buysellcategories', 'buysellsubcategories', 'buysellitems', 'categories', 'not_found', 'search'));
    }
    public function singleAdDetail($slug)
    {
        $ad = BuySellProduct::where('slug', $slug)->first();
        $ad_detail = BuySellProductDetail::where('buysell_product_id', $ad->id)->first();
        $ad_images = BuySellProductImage::where('buysell_product_id', $ad->id)->get();


        $ads = BuySellProduct::where('subcategory_id', $ad->subcategory_id)->where('status', 1)->get();

        return view('bdshop.frontEnd.buy-sell.buy_sell_item_details', compact('ad', 'ads', 'ad_detail', 'ad_images'));
    }
    public function buysellUserMyAds()
    {
        $ads = BuySellProduct::where('user_id', Auth::user()->id)->where('status', 0)->where('is_reason', 0)->get();
        $count = count(BuySellProduct::where('user_id', Auth::user()->id)->where('is_reason', 1)->get());
        $editable = BuySellProduct::where('user_id', Auth::user()->id)->where('status', 0)->where('is_reason', 1)->get();

        return view('bdshop.frontEnd.buy-sell.my_ads', compact('ads', 'count', 'editable'));
    }
    public function buysellUserAdEdit($slug)
    {
        $data = BuySellProduct::where('slug', $slug)->first();
        $data_details = BuySellProductDetail::where('buysell_product_id', $data->id)->first();
        $data_images = BuySellProductImage::where('buysell_product_id', $data->id)->get();

        if ($data->subcategory->slug == 'land-for-sale') {
            return view('bdshop.frontEnd.buy-sell.edit_landform', compact('data', 'data_details', 'data_images'));
        } else if ($data->subcategory->slug == 'house-for-sale') {
            return view('bdshop.frontEnd.buy-sell.edit_houseform', compact('data', 'data_details', 'data_images'));
        } else if ($data->subcategory->slug == 'commercial-properties-for-sale') {
            return view('bdshop.frontEnd.buy-sell.edit_commercialform', compact('data', 'data_details', 'data_images'));
        } else if ($data->subcategory->slug == 'apartments-for-sale') {
            return view('bdshop.frontEnd.buy-sell.edit_apartmentform', compact('data', 'data_details', 'data_images'));
        } else if ($data->subcategory->slug == 'car-for-sale') {
            return view('bdshop.frontEnd.buy-sell.edit_carform', compact('data', 'data_details', 'data_images'));
        } else if ($data->subcategory->slug == 'motorbike') {
            return view('bdshop.frontEnd.buy-sell.edit_motorbikeform', compact('data', 'data_details', 'data_images'));
        }
    }
    public function buysellUserAdUpdate(Request $request, $id)
    {

        $data = BuySellProduct::find($id);

        if ($data->subcategory->slug == 'land-for-sale') {
            $this->validate($request, [

                'land_type' => 'required',
                'land_size' => 'required',
                'land_unit' => 'required',
                'price_unit' => 'required',
                'address' => 'required',
                'title' => 'required',
                'description' => 'required',
                'rent' => 'required',



            ]);
        } else if ($data->subcategory->slug == 'apartments-for-sale') {
            $this->validate($request, [
                'beds' => 'required',
                'baths' => 'required',
                'size' => 'required',
                'facing' => 'required',
                'completion_status' => 'required',
                'address' => 'required',
                'title' => 'required',
                'price_unit' => 'required',
                'description' => 'required',
                'rent' => 'required',


            ]);
        } else if ($data->subcategory->slug == 'commercial-properties-for-sale') {

            $this->validate($request, [
                'property_type' => 'required',
                'size' => 'required',
                'facing' => 'required',
                'completion_status' => 'required',
                'land_unit' => 'required',
                'price_unit' => 'required',
                'address' => 'required',
                'title' => 'required',
                'description' => 'required',
                'rent' => 'required',

            ]);
        } else if ($data->subcategory->slug == 'house-for-sale') {
            $this->validate($request, [
                'beds' => 'required',
                'baths' => 'required',
                'land_size' => 'required',
                'land_unit' => 'required',
                'house_size' => 'required',
                'house_unit' => 'required',
                'address' => 'required',
                'title' => 'required',
                'description' => 'required',
                'rent' => 'required',

            ]);
        } else if ($data->subcategory->slug == 'car_for_sale') {
            $this->validate($request, [
                'title' => 'required',
                'conditions' => 'required',
                'brand' => 'required',
                'model' => 'required',
                'address' => 'required',
                'year_of_manufacture' => 'required',
                'engine_capacity' => 'required',
                'fuel_type' => 'required',
                'transmission' => 'required',
                'body_type' => 'required',
                'kilometers_run' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required',

            ]);
        } else if ($data->form_type == "motorbike") {
            $this->validate($request, [
                'title' => 'required',
                'bike_type' => 'required',
                'conditions' => 'required',
                'brand' => 'required',
                'model' => 'required',
                'address' => 'required',
                'year_of_manufacture' => 'required',
                'engine_capacity' => 'required',
                'kilometers_run' => 'required',
                'description' => 'required',
                'rent' => 'required',
                'thumbnail_img' => 'required',
                'rent' => 'required',

            ]);
        }
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->user_id = Auth::user()->id;

        $data->address = $request->address;
        $data->description = $request->description;
        $data->rent = $request->rent;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->status = 0;
        if ($request->negotiable) {
            $data->negotiable = $request->negotiable;
        } else {
            $data->negotiable = 0;
        }
        $image = $request->file('thumbnail_img');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/buysell_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->thumbnail_img = $image_url;
            }
        }
        $data->save();

        $datad = BuySellProductDetail::where('buysell_product_id', $id)->first();
        $datad->buysell_product_id = $data->id;
        $datad->land_type = $request->land_type;
        $datad->land_size = $request->land_size;
        $datad->land_unit = $request->land_unit;
        $datad->bike_type = $request->bike_type;
        $datad->beds = $request->beds;
        $datad->baths = $request->baths;
        $datad->size = $request->size;
        $datad->features = $request->features;
        $datad->facing = $request->facing;
        $datad->completion_status = $request->completion_status;
        $datad->property_type = $request->property_type;
        $datad->price_unit = $request->price_unit;
        $datad->house_unit = $request->house_unit;
        $datad->house_size = $request->house_size;
        $datad->conditions = $request->conditions;
        $datad->brand = $request->brand;
        $datad->model = $request->model;
        $datad->year_of_manufacture = $request->year_of_manufacture;
        $datad->engine_capacity = $request->engine_capacity;
        $datad->fuel_type = $request->fuel_type;
        $datad->transmission = $request->transmission;
        $datad->body_type = $request->body_type;
        $datad->kilometers_run = $request->kilometers_run;
        $datad->trim = $request->trim;
        $datad->registration_year = $request->registration_year;

        $datad->save();

        if ($request->hasFile('images')) {
            foreach (($request->file('images')) as $file) {
                $image_name = $file->getClientOriginalName();
                $image_name = preg_replace('/\s+/', '-', $image_name);
                $image_full_name = $image_name;
                $upload_path = 'uploads/buysell_image/';
                $image_url = $upload_path . $image_full_name;
                $success = $file->move($upload_path, $image_full_name);
                BuySellProductImage::create([
                    'buysell_product_id' => $data->id,
                    'images' => $image_url,

                ]);
            }
        }
        $ads = BuySellProduct::where('user_id', Auth::user()->id)->where('status', 0)->where('is_reason', 0)->get();
        $count = count(BuySellProduct::where('user_id', Auth::user()->id)->where('is_reason', 1)->get());
        $editable = BuySellProduct::where('user_id', Auth::user()->id)->where('status', 0)->where('is_reason', 1)->get();
        Toastr::success('Your Post Updated Successfully');
        return view('bdshop.frontEnd.buy-sell.my_ads', compact('ads', 'count', 'editable'));
    }
    public function buysellUserAdConfirmDelete($slug)
    {
        $data = BuySellProduct::where('slug', $slug)->first();
        if (BuySellProduct::where('slug', $slug)->where('user_id', Auth::user()->id)->first()) {
            return view('bdshop.frontEnd.buy-sell.delete_ad', compact('data'));
        } else {
            $ads = BuySellProduct::where('user_id', Auth::user()->id)->where('status', 0)->get();
            $count = count(BuySellProduct::where('user_id', Auth::user()->id)->where('is_reason', 1)->get());
            Toastr::error('Unauthorized Access');
            return redirect()->route('buyselluser.user.myads', compact('ads', 'count'));
        }
    }

    public function buysellUserAdDelete($slug)
    {
        $data = BuySellProduct::where('slug', $slug)->first();

        unlink($data->thumbnail_img);
        $product_details = BuySellProductDetail::where('buysell_product_id', $data->id)->first();
        $images = BuySellProductImage::where('buysell_product_id', $data->id)->get();

        if (count($images) > 0) {
            foreach ($images as $image) {
                unlink($image->images);
                $image->delete();
            }
        }
        $data->delete();
        $product_details->delete();
        $ads = BuySellProduct::where('user_id', Auth::user()->id)->where('status', 0)->get();
        $count = count(BuySellProduct::where('user_id', Auth::user()->id)->where('is_reason', 1)->get());
        $ad_payment_delete = AdPayment::where('buysell_product_id', $data->id)->first();
        if ($ad_payment_delete) {
            $ad_payment_delete->delete();
        }

        Toastr::success('Data delete successfully');
        return redirect()->route('buyselluser.user.myads', compact('ads', 'count'));
    }
    public function buysellUserAdImageDelete($id)
    {
        $data = BuySellProductImage::find($id);
        unlink($data->images);
        $data->delete();
        Toastr::success('Ad Image Deleted successfully');
        return redirect()->back();
    }
    //ad payment submit
    public function adPaymentSubmit(Request $request)
    {
        $data = new AdPayment();
        $data->user_id = Auth::user()->id;
        $data->buysell_product_id = $request->buysell_product_id;
        $data->ad_show_type_id = $request->ad_show_type_id;
        $data->payment_method_id = $request->payment_method_id;
        $data->user_transaction_id = $request->user_transaction_id;
        $data->payment_status = 'pending';
        $data->save();
        Toastr::success('Data has been Recorded');
        return redirect()->route('buyselluser.user.myads');
    }
    //ad payment update
    public function buysellUserAdUpdatePayment($slug)
    {
        $ad = BuySellProduct::where('slug', $slug)->first();
        $update_ad = AdPayment::where('buysell_product_id', $ad->id)->first();
        $ad_details = BuySellProductDetail::where('buysell_product_id', $ad->id)->first();
        $payments = BuySellAdPrice::where('status', 1)->get();
        $payment_methods = PaymentMethod::where('status', 1)->get();
        $adprices = BuySellAdPrice::where('status', 1)->get();
        return view('bdshop.frontEnd.buy-sell.payment_update', compact('ad', 'update_ad', 'ad_details', 'payments', 'payment_methods', 'adprices'));
    }
    public function buysellUserUpdateAdPayment(Request $request, $id)
    {
        $data = AdPayment::find($id);
        $data->user_id = Auth::user()->id;
        $data->buysell_product_id = $request->buysell_product_id;
        $data->ad_show_type_id = $request->ad_show_type_id;
        $data->payment_method_id = $request->payment_method_id;
        $data->user_transaction_id = $request->user_transaction_id;
        $data->payment_status = 'pending';
        $data->save();
        Toastr::success('Data has been Recorded');
        return redirect()->route('buyselluser.user.myads');
    }
    public function buysellPostExpire()
    {
        $ads = AdPayment::where('payment_status', 'correct')->get();
        return view('admin.buysell_post_expire', compact('ads'));
    }

    public function buysellAdExpireDelete(Request $request)
    {
        $id = $request->id;
        $data = BuySellProduct::where('id', $id)->first();
        unlink($data->thumbnail_img);
        $product_details = BuySellProductDetail::where('buysell_product_id', $data->id)->first();
        $images = BuySellProductImage::where('buysell_product_id', $data->id)->get();

        if (count($images) > 0) {
            foreach ($images as $image) {
                unlink($image->images);
                $image->delete();
            }
        }
        $data->delete();
        $product_details->delete();
        $ads = BuySellProduct::where('user_id', Auth::user()->id)->where('status', 0)->get();
        $count = count(BuySellProduct::where('user_id', Auth::user()->id)->where('is_reason', 1)->get());
        $ad_payment_delete = AdPayment::where('buysell_product_id', $data->id)->first();
        if ($ad_payment_delete) {
            $ad_payment_delete->delete();
        }

        Toastr::success('Data delete successfully');
        return redirect()->back();
    }
    //founder stories
    public function founderStories()
    {
        $founderstories = FounderStory::where('status', 1)->latest()->get();
        return view('bdshop.frontEnd.founderstories', compact('founderstories'));
    }
    //founder single story
    public function founderSingleStory($slug)
    {

        $data = FounderStory::where('slug', $slug)->first();
        return view('bdshop.frontEnd.founderSingleStory', compact('data'));
    }
    //founder startup interview
    public function founderStartupIn()
    {
        $fsinterviews = FSInterview::where('status', 1)->latest()->get();
        return view('bdshop.frontEnd.fsinterview', compact('fsinterviews'));
    }
    //founder startup single interview
    public function founderStartupSingleInterview($slug)
    {
        $data = FSInterview::where('slug', $slug)->first();
        return view('bdshop.frontEnd.fsSingleInterview', compact('data'));
    }
    //business stories
    public function businessStory()
    {
        $businessstories = Startup::where('status', 1)->latest()->get();
        return view('bdshop.frontEnd.businessStories', compact('businessstories'));
    }
    //business single stories

    public function businessSingleStory($slug)
    {
        $data = Startup::where('slug', $slug)->first();
        return view('bdshop.frontEnd.businesssinglestory', compact('data'));
    }
    //founder stories search
    public function FounderStoriesSearch(Request $request)
    {
        $search = $request->search;
        $founderstories = FounderStory::where('title', 'LIKE', "%{$search}%")
            ->orWhere('founder_name', 'LIKE', "%{$search}%")
            ->orWhere('company_name', 'LIKE', "%{$search}%")
            ->get();

        return view('bdshop.frontEnd.founder_stories_search_result', compact('founderstories', 'search'));
    }
    public function FsInterviewSearch(Request $request)
    {
        $search = $request->search;
        $fsinterviews = FSInterview::where('title', 'LIKE', "%{$search}%")
            ->orWhere('founder_name', 'LIKE', "%{$search}%")
            ->orWhere('company_name', 'LIKE', "%{$search}%")
            ->get();

        return view('bdshop.frontEnd.fs_interview_search_result', compact('fsinterviews', 'search'));
    }
    //business story search
    public function BusinessStorySearch(Request $request)
    {
        $search = $request->search;
        $businessstories = Startup::where('title', 'LIKE', "%{$search}%")
            ->orWhere('founder_name', 'LIKE', "%{$search}%")
            ->orWhere('company_name', 'LIKE', "%{$search}%")
            ->get();

        return view('bdshop.frontEnd.business_story_search_result', compact('businessstories', 'search'));
    }

    public function halalInvestmentindex()
    {
        echo "wait";
    }
    public function newsletterStore(Request $request)
    {
        $data = new Newsletter();
        $data->email = $request->email;

        $data->save();
        Toastr::success('Thank You for Subscribing');
        return redirect()->back();
    }
}
