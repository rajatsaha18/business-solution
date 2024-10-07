<?php

namespace App\Http\Controllers\Shop;

use App\Models\AddCompany;
use App\AdvertiseBanner;
use App\AdvertiseCategory;
use App\AdvertisePost;
use App\BdCategory;
use App\BdSubCategory;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Customer;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;
use Validator;
use Toastr;

class AddCompanyController extends Controller
{
    public function index()
    {
        $bdcategory = BdCategory::orderBy('id', 'desc')->where('status', 1)->get();
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 4)->get();
        $top_banner = AdvertiseBanner::take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->get();
        $bottom_banner = AdvertiseBanner::take(2)->get();
        $districts = District::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        $right_side_image = AdvertiseBanner::where('advertise_category_id', 9)->where('advertise_placement_id', 11)->orderBy('id', 'desc')->take(10)->get();

        return view('bdshop.frontEnd.add_company', compact('right_side_image', 'bdcategory', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner', 'districts', 'countries'));
    }
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                // 'captcha' => 'required|captcha',
                'business_category' => 'required',
                'business_name' => 'required|unique:add_companies,business_name',
                'slug' => 'unique:add_companies,slug',
                'address' => 'required',
                'phone' => 'required',
                'owner_name' => 'required',
                // 'country' => 'required',
                // 'state'=>'required',
                // 'city'=>'required',
                'email' => 'required',
            ]
        );
        $company = new AddCompany();
        $company->business_category = $request->business_category;
        $slug = Str::slug($request->business_name, '-');
        if ($slug == '') {
            $slug =  preg_replace('/\s+/u', '-', trim($request->business_name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $company->slug = $slug;
        $company->business_name = $request->business_name;
        $company->owner_name = $request->owner_name;
        $company->address = $request->address;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->facebook = $request->facebook;
        $company->google_location = $request->google_location;
        $company->city = $request->city;
        $company->country = $request->country;
        $company->state = $request->state;
        $company->keywords = $request->keywords;
        $company->status = 0;
        $company->save();

        $datas = AddCompany::where('slug', $slug)->get();

        if (count($datas) > 0) {
            Toastr::success('Company Data Saved Successfully');
            return redirect()->back();
        } else {
            if ($company->save()) {
                $emailCheck = User::where('email', $request->email)->first();
                if (!$emailCheck) {
                    $user = new User();
                    $user->name = $request->owner_name;
                    $user->business_name = $request->business_name;
                    $user->phone = $request->phone;
                    $user->address = $request->address;
                    $user->email = $request->email;
                    $user->company_id = $company->id;
                    $user->email_verified_at = date('Y-m-d H:m:s');
                    $user->role_id = 2;
                    $user->password = Hash::make(123456123);
                    $user->save();
                    $data = AddCompany::where('id', $company->id)->first();
                    $data->user_id = $user->id;
                    $data->save();
                    $customer = new Customer();
                    $customer->user_id = $user->id;
                    $customer->save();
                    Toastr::success('Your listing has been submitted successfully :-)', 'Success');
                    return redirect()->back();
                } else {
                    Toastr::error('Email Already Exist in Users Table :-)', 'Error');
                    return redirect()->back();
                }
            } else {
                flash(__('Something went wrong'))->error();
                return back();
            }
        }
    }
    public function advertise_with_us()
    {
        $advertise_cat = AdvertiseCategory::where('status', 1)->get();
        $bdcategory = BdCategory::orderBy('id', 'desc')->get();
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 4)->get();
        $top_banner = AdvertiseBanner::take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->get();
        $bottom_banner = AdvertiseBanner::take(2)->get();
        return view('bdshop.frontEnd.advertise_with_us', compact('advertise_cat', 'bdcategory', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }
    public function company_list($a)
    {
        $company_list = AdvertisePost::where('business_name', 'LIKE', "{$a}%")->get();
        $character = $a;
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 3)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->take(2)->get();
        return view('bdshop.frontEnd.company_list', compact('company_list', 'character', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }
    public function company($slug)
    {
        $company = AddCompany::where('slug', $slug)->first();
        $shop_categories = BdCategory::where('status', 1)->get();
        $subcategory = BdSubCategory::where('slug', $slug)->first();
        // $advertise = AdvertisePost::where('subcategory_id',$subcategory->id)->orderBy('id','desc')->where('status',1)->get();
        $left_banner = AdvertiseBanner::where('advertise_category_id', 3)->where('advertise_placement_id', 3)->get();
        $top_banner = AdvertiseBanner::where('advertise_category_id', 1)->where('advertise_placement_id', 1)->take(2)->get();
        $right_banner = AdvertiseBanner::take(2)->where('advertise_category_id', 4)->where('advertise_placement_id', 5)->get();
        $bottom_banner = AdvertiseBanner::where('advertise_category_id', 5)->where('advertise_placement_id', 7)->take(2)->get();
        return view('bdshop.frontEnd.company_details', compact('company', 'company', 'shop_categories', 'left_banner', 'top_banner', 'right_banner', 'bottom_banner'));
    }
    //admin add-company
    public function adminIndex()
    {
        $add_compaines = AddCompany::orderBy('id','desc')->get();
        return view('admin.advertise.add_company.index', compact('add_compaines'));
    }

    public function adminUpdateCompany($id)
    {
        $data = AddCompany::findOrFail(decrypt($id));
        $categories = BdCategory::get();
        $sub_categories = BdSubCategory::get();
        $countries = Country::all();
        return view('admin.advertise.add_company.edit', compact('data', 'categories', 'sub_categories', 'countries'));
    }
    public function adminStoreCompanyToPost(Request $request)
    {
        // print_r($request->all());
        // exit();
        // dd($request->all());
        if ($request->id) {
            $data = AddCompany::findOrFail($request->id);
            $data->count = 1;
            $data->update();
        }
        if ($request->id) {
            $posts = AdvertisePost::where('company_id', $request->id)->first();
            if ($posts) {
                Toastr::error('Already Exist');
                return redirect()->route('admin.advertise-post.index');
            } else {

                // $dis = District::find($request->district_id);
                $posts = new AdvertisePost();
                $posts->category_id = $request->category_id;
                $posts->company_id = $request->id;
                $posts->subcategory_id = $request->subcategory_id;
                $posts->business_name = $request->business_name;
                $posts->slug = $request->slug;
                $posts->owner_name = $request->owner_name;
                $posts->user_id = $request->user_id;
                $posts->address = $request->address;
                $posts->phone = $request->phone;
                $posts->email = $request->email;
                $posts->address = $request->address;
                $posts->website = $request->website;
                $posts->facebook = $request->facebook;
                $posts->google_location = $request->google_location;
                $posts->country_id = $request->country_id;
                $posts->state_id = $request->state_id;
                $posts->city_id = $request->city_id;


                $posts->keywords = $request->keywords;
                $posts->status = $request->status;
                $posts->meta_description = $request->meta_description;
                $posts->meta_title = $request->meta_title;

                if ($posts->save()) {
                    Toastr::success('Advertise has been inserted successfully :-)', 'Success');
                    return redirect()->back();
                } else {
                    Toastr::error('Something went wrong :-)', 'Error');
                    return redirect()->back();
                }
            }
        }
    }
}
