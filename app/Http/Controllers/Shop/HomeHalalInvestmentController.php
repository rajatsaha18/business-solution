<?php

namespace App\Http\Controllers\Shop;

use App\Models\User;
use App\Models\InvestorOder;
use Illuminate\Http\Request;
use App\Models\InvestmentCompany;
use App\Models\HalalInvestmentFaq;
use App\Models\InvestorGetPayment;
use App\Models\HalalInvestmentBlog;
use App\Models\HalalInvestmentTeam;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\HalalInvestmentSlider;
use Illuminate\Support\Facades\Redis;
use App\Models\HalalInvestmentSetting;
use App\Models\HalalInvestmentTeamCategory;
use App\Models\HalalInvestmentShariahAdvisor;
use App\Models\InvestmentSeekerBusinessProfile;
use App\Models\HalalInvestmentMaturedInvestment;

class HomeHalalInvestmentController extends Controller
{
    //
    public function index()
    {
        $sliders                    = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting     = HalalInvestmentSetting::first();
        $halalinvestmentfaqs        = HalalInvestmentFaq::where('status', 1)->get();
        $teamcategory               = HalalInvestmentTeamCategory::where('name', 'Executive')->first();
        $teams                      = HalalInvestmentTeam::where('status', 1)->get();
        $advisors                   = HalalInvestmentShariahAdvisor::where('status', 1)->get();
        $ongoinginvestments         = InvestmentCompany::where('status', 1)->get();
        $maturedinvestments         = HalalInvestmentMaturedInvestment::where('status', 1)->get();

        return view('bdshop.frontEnd.halal-investment.halal-investment-index', compact('ongoinginvestments', 'sliders', 'halalinvestmentsetting', 'halalinvestmentfaqs', 'teams', 'advisors', 'maturedinvestments'));
    }
    public function shariah()
    {
        $sliders                    = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting     = HalalInvestmentSetting::first();
        $advisors                   = HalalInvestmentShariahAdvisor::where('status', 1)->get();

        return view('bdshop.frontEnd.halal-investment.halal-investment-shariah', compact('advisors', 'sliders', 'halalinvestmentsetting'));
    }
    public function whoAreWe()
    {
        $sliders                    = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting     = HalalInvestmentSetting::first();
        $executive                  = HalalInvestmentTeamCategory::where('name', 'Executive')->first();
        $executives                 = HalalInvestmentTeam::where('status', 1)->get();
        $management                 = HalalInvestmentTeamCategory::where('name', 'Management')->first();
        $managements                = HalalInvestmentTeam::where('status', 1)->get();
        $marketing                  = HalalInvestmentTeamCategory::where('name', 'Marketing')->first();
        $marketings                 = HalalInvestmentTeam::where('status', 1)->get();
        return view('bdshop.frontEnd.halal-investment.halal-investment-who-are-we', compact('executives', 'managements', 'marketings', 'sliders', 'halalinvestmentsetting'));
    }
    public function contact()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.halal-investment-contact', compact('sliders', 'halalinvestmentsetting'));
    }
    public function blog()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $blogs = HalalInvestmentBlog::where('status', 1)->orderBy('id','desc')->paginate(6);
        return view('bdshop.frontEnd.halal-investment.halal-investment-blog', compact('blogs', 'sliders', 'halalinvestmentsetting'));
    }
    public function blogSearch(Request $request)
    {
        $search = $request->search;
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $blogs = HalalInvestmentBlog::where('title', 'LIKE', "%{$search}%")
            ->paginate(9);
        return view('bdshop.frontEnd.halal-investment.halal-investment-blog-search', compact('search', 'blogs', 'halalinvestmentsetting'));
    }
    public function blogDetail($slug)
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $blog = HalalInvestmentBlog::where('slug', $slug)->first();
        $blogs = HalalInvestmentBlog::latest()->take(3)->get();
        $blog->hits = $blog->hits + 1;
        $blog->save();
        return view('bdshop.frontEnd.halal-investment.halal-investment-blog-detail', compact('blog', 'blogs', 'sliders', 'halalinvestmentsetting'));
    }
    public function loginForInvestmentSeeker()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.auth.login-for-investment-seeker', compact('sliders', 'halalinvestmentsetting'));
    }
    public function registerForInvestmentSeeker()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.auth.register-for-investment-seeker', compact('sliders', 'halalinvestmentsetting'));
    }

    public function loginForInvestor()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.auth.login-for-investor', compact('sliders', 'halalinvestmentsetting'));
    }

    public function registerForInvestor()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.auth.register-for-investor', compact('sliders', 'halalinvestmentsetting'));
    }
    public function registerForInvestmentSeekerSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:10|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_type = 'investmentseeker';
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role_id = 4;
        $dataCheck = User::where('email', $request->email)->where('role_id', 4)->get();
        if (count($dataCheck) > 0) {
            Toastr::error('User already Exit');
            return redirect()->back();
        } else {
            $user->save();
            Toastr::success('Registration Successfull! :-)', 'Success');
            return redirect()->back();
        }
    }
    public function loginForInvestmentSeekerSubmit(Request $request)
    {

        $this->validate($request, [

            'email' => 'required',
            'password' => 'required|min:6'

        ]);
        if ($request->get('email')) {
            $user = User::where('role_id', 4)->where('email', $request->email)->first();

            if ($user != null) {
                if (Hash::check($request->password, $user->password)) {

                    auth()->login($user, false);
                    return redirect()->route('investmentseeker.dashboard');
                } else {
                    Toastr::error('Invalid Email or Password');
                    return redirect()->back();
                }
            } else {
                Toastr::error('User Not Found!!');
                return redirect()->back();
            }
        }

        return back();
    }


    public function investmetnSeekerDashboard()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $adminfeedback = InvestmentSeekerBusinessProfile::where('user_id', Auth::user()->id)->get();
        return view('bdshop.frontEnd.halal-investment.halal-investment-investment-seeker-dashboard', compact('sliders', 'halalinvestmentsetting', 'adminfeedback'));
    }


    public function registerForInvestorSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:10|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role_id = 5;
        $dataCheck = User::where('email', $request->email)->where('role_id', 5)->get();
        if (count($dataCheck) > 0) {
            Toastr::error('User already Exit');
            return redirect()->back();
        } else {
            $user->save();
            Toastr::success('Registration Successfull! :-)', 'Success');
            return redirect()->back();
        }
    }

    public function loginForInvestorSubmit(Request $request)
    {
        $this->validate($request, [

            'email' => 'required',
            'password' => 'required|min:6'

        ]);
        if ($request->get('email')) {
            $user = User::where('role_id', 5)->where('email', $request->email)->first();

            if ($user != null) {
                if (Hash::check($request->password, $user->password)) {

                    auth()->login($user, false);
                    return redirect()->route('investor.dashboard');
                } else {
                    Toastr::error('Invalid Email or Password');
                    return redirect()->back();
                }
            } else {
                Toastr::error('User Not Found!!');
                return redirect()->back();
            }
        }

        return back();
    }
    public function investmentInvestorDashboard()
    {
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.halal-investment-investor-dashboard', compact('sliders', 'halalinvestmentsetting'));
    }
    public function findTeam(Request $request)
    {
        $data = HalalInvestmentTeam::where('id', $request->id)->first();
        return view('bdshop.frontEnd.halal-investment.halal-investment-team-modal', compact('data'));
    }
    public function termsOfUse()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.terms-of-use', compact('halalinvestmentsetting'));
    }
    public function privacyPolicy()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.privacy-policy', compact('halalinvestmentsetting'));
    }
    public function investmentCompany($slug)
    {
        $data = InvestmentCompany::where('slug', $slug)->first();
        $halalinvestmentsetting = HalalInvestmentSetting::first();

        return view('bdshop.frontEnd.halal-investment.halal-investment-ongoing-investment-company', compact('halalinvestmentsetting', 'data'));
    }

    public function investmentOption()
    {
        $options = InvestmentCompany::where('status', 1)->latest()->paginate(9);
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.investment-options', compact('halalinvestmentsetting', 'options'));
    }
    public function businessSeekerInvestment()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.business-seeker-investment', compact('halalinvestmentsetting'));
    }

    public function investmentSeekerProfile()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $user = User::where('id', Auth::user()->id)->first();
        return view('bdshop.frontEnd.halal-investment.investment-seeker-profile', compact('halalinvestmentsetting', 'user'));
    }
    public function investorProfile()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $user = User::where('id', Auth::user()->id)->first();
        return view('bdshop.frontEnd.halal-investment.investor-profile', compact('halalinvestmentsetting', 'user'));
    }
    public function investorUpdateProfile(Request $request)
    {
        $data = User::where('id', $request->user_id)->first();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->dob = $request->dob;
        $data->nid = $request->nid;
        $data->address = $request->address;
        $image = $request->file('image');

        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/business-investment-seeker/profile/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->image = $image_url;
            }
        }
        $data->save();
        Toastr::success('Profile Updated Successfully');
        return redirect()->back();
    }
    public function investmentUpdateProfile(Request $request)
    {

        $data = User::where('id', $request->user_id)->first();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->dob = $request->dob;
        $data->nid = $request->nid;
        $data->address = $request->address;
        $image = $request->file('image');

        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/business-investment-seeker/profile/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->image = $image_url;
            }
        }
        $data->save();
        Toastr::success('Profile Updated Successfully');
        return redirect()->back();
    }

    public function investmentSeekerAccountDetail()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $user = User::where('id', Auth::user()->id)->first();
        return view('bdshop.frontEnd.halal-investment.investment-seeker-account-detail', compact('halalinvestmentsetting', 'user'));
    }
    public function investorAccountDetail()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $user = User::where('id', Auth::user()->id)->first();
        return view('bdshop.frontEnd.halal-investment.investor-account-detail', compact('halalinvestmentsetting', 'user'));
    }
    public function investorAccountDetailUpdate(Request $request)
    {
        $data = User::where('id', $request->user_id)->first();
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        Toastr::success('Data updated successfully');
        return redirect()->back();
    }
    public function investmentSeekerAccountDetailUpdate(Request $request)
    {
        $data = User::where('id', $request->user_id)->first();
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        Toastr::success('Data updated successfully');
        return redirect()->back();
    }

    public function investmentSeekerReceivePaymentAll()
    {

        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $data = InvestorOder::where('company_owner_id', Auth::user()->id)->where('status', 'Accepted')->get();

        return view('bdshop.frontEnd.halal-investment.investment-seeker-receive-payment', compact('halalinvestmentsetting', 'data'));
    }
    public function businessProfileSubmit(Request $request)
    {
        $this->validate($request, [
            'business_name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:10|unique:users',
            'address' => 'required',
            'nature_of_business' => 'required',
            'size_of_business_in_bdt' => 'required',
            'revenue_generated_per_month_in_bdt' => 'required',
            'required_funding_amount_through_our_paltform' => 'required',
            'how_will_funding_help_business' => 'required',
            'provide_as_security' => 'required',
            'how_do_you_maintain_the_financials_of_your_business' => 'required',
            'trade_license' => 'required|mimes:jpeg,jpg,png,gif,svg,pdf',
            'tin' => 'required|mimes:jpeg,jpg,png,gif,svg,pdf',
            'nid' => 'required|mimes:jpeg,jpg,png,gif,svg,pdf',
            'photo' => 'required|mimes:jpeg,jpg,png,gif,svg',
            'business_images' => 'required'

        ]);
        $data = new InvestmentSeekerBusinessProfile();
        $data->business_name = $request->business_name;
        $data->user_id = Auth::user()->id;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->nature_of_business = $request->nature_of_business;
        $data->size_of_business_in_bdt = $request->size_of_business_in_bdt;
        $data->revenue_generated_per_month_in_bdt = $request->revenue_generated_per_month_in_bdt;
        $data->required_funding_amount_through_our_paltform = $request->required_funding_amount_through_our_paltform;
        $data->how_will_funding_help_business = $request->how_will_funding_help_business;
        $data->provide_as_security = json_encode($request->provide_as_security);
        $data->how_do_you_maintain_the_financials_of_your_business = $request->how_do_you_maintain_the_financials_of_your_business;
        $data->how_did_you_know_about_us = $request->how_did_you_know_about_us;
        $data->add_additional_comment = $request->add_additional_comment;
        $tradeLicense = $request->file('trade_license');
        if ($tradeLicense) {
            $image_name = $tradeLicense->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investment/investment-seeker-profile/';
            $image_url = $upload_path . $image_full_name;
            $success = $tradeLicense->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->trade_license = $image_url;
            }
        }
        $tin = $request->file('tin');
        if ($tin) {
            $image_name = $tradeLicense->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investment/investment-seeker-profile/';
            $image_url = $upload_path . $image_full_name;
            $success = $tin->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->tin = $image_url;
            }
        }

        $bill = $request->file('bill');
        if ($bill) {
            $image_name = $bill->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investment/investment-seeker-profile/';
            $image_url = $upload_path . $image_full_name;
            $success = $bill->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->bill = $image_url;
            }
        }

        $nid = $request->file('nid');
        if ($nid) {
            $image_name = $nid->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investment/investment-seeker-profile/';
            $image_url = $upload_path . $image_full_name;
            $success = $nid->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->nid = $image_url;
            }
        }

        $photo = $request->file('photo');
        if ($photo) {
            $image_name = $photo->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investment/investment-seeker-profile/';
            $image_url = $upload_path . $image_full_name;
            $success = $photo->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->photo = $image_url;
            }
        }

        $businessImages = $request->file('business_images');
        if ($businessImages) {
            foreach ($businessImages as $file) {
                $image_name = $file->getClientOriginalName();
                $image_name = preg_replace('/\s+/', '-', $image_name);
                $image_full_name = $image_name;
                $upload_path = 'uploads/halal-investment/investment-seeker-profile/';
                $business_images[] = $upload_path . $image_full_name;
                $success = $file->move($upload_path, $image_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
            }
        }
        $data->business_images = json_encode($business_images);


        $data->save();
        Toastr::success('Data Saved Successfully');
        return redirect()->back();
    }
    public function halalInvestmentOrder(Request $request)
    {
        $investor_amount = $request->invest_amount;
        $company_id = $request->company_id;
        $company_name = InvestmentCompany::where('id', $request->company_id)->first();
        if (Auth::user() && Auth::user()->role_id == 5) {
            $sliders = HalalInvestmentSlider::where('status', 1)->get();
            $halalinvestmentsetting = HalalInvestmentSetting::first();


            return redirect()->route('investor.checkout', [
                'investor_amount' => $investor_amount,
                'company_id' => $company_id,
                'company_name' => $company_name,
            ]);
        } else {

            return redirect()->route('login.form.for.investor', [
                'investor_amount' => $investor_amount,
                'company_id' => $company_id,
                'company_name' => $company_name,
            ]);
        }
    }
    public function loginFormForInvestor(Request $request)
    {
        $investor_amount = $request->input('investor_amount');
        $company_id = $request->input('company_id');
        $company_name = InvestmentCompany::where('id', $request->input('company_id'))->first();
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.auth.login-form-for-investor', [
            'investor_amount' => $investor_amount,
            'company_id' => $company_id,
            'company_name' => $company_name,
            'sliders' => $sliders,
            'halalinvestmentsetting' => $halalinvestmentsetting
        ]);
    }
    public function loginFormForInvestorSubmit(Request $request)
    {

        $investor_amount = $request->input('investor_amount');
        $company_id = $request->input('company_id');
        $company_name = InvestmentCompany::where('id', $request->input('company_id'))->first();

        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $this->validate($request, [

            'email' => 'required',
            'password' => 'required|min:6'

        ]);
        if ($request->get('email')) {
            $user = User::where('role_id', 5)->where('email', $request->email)->first();

            if ($user != null) {
                if (Hash::check($request->password, $user->password)) {

                    auth()->login($user, false);
                    return redirect()->route('investor.checkout', compact('sliders', 'halalinvestmentsetting', 'investor_amount', 'company_id', 'company_name'));
                } else {
                    Toastr::error('Invalid Email or Password');
                    return redirect()->back();
                }
            } else {
                Toastr::error('User Not Found!!');
                return redirect()->back();
            }
        }

        return back();
    }
    public function investorCheckout(Request $request)
    {
        $investor_amount = $request->input('investor_amount');
        $company_id = $request->input('company_id');
        $company_name = InvestmentCompany::where('id', $request->input('company_id'))->first();
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();

        return view('bdshop.frontEnd.halal-investment.checkout', compact('sliders', 'halalinvestmentsetting', 'investor_amount', 'company_id', 'company_name'));
    }
    public function investorOrderSubmit(Request $request)
    {
        $this->validate($request, [
            'apartment'             => 'required',
            'address'               => 'required',
            'city'                  => 'required',
            'phone'                 => ['required', 'string', 'min:11', 'max:20', 'regex:/^[0-9+()\- ]+$/'],
            'bank_name'             => 'required',
            'account_name'          => 'required',
            'account_no'            => 'required',
            'branch_name'           => 'required',
            'nominee_name'          => 'required',
            'relationship'          => 'required',
            'nominee_contact_no'    => ['required', 'string', 'max:20'],

        ]);
        $order = new InvestorOder();
        $order->company_id = $request->company_id;
        $owner_id = InvestmentCompany::where('id', $request->company_id)->first();
        $order->company_owner_id = $owner_id->user_id;
        $order->investment_amount = $request->investment_amount;
        $order->user_id = Auth::user()->id;
        $order->apartment = $request->apartment;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->bank_name = $request->bank_name;
        $order->account_name = $request->account_name;
        $order->account_no = $request->account_no;
        $order->branch_name = $request->branch_name;
        $order->nominee_name = $request->nominee_name;
        $order->relationship = $request->relationship;
        $order->nominee_contact_no = $request->nominee_contact_no;
        $order->status = 'On Hold';
        $order->save();
        Toastr::success('Order Successfully placed:-)', 'Success');
        return redirect()->back();
    }

    public function investorOrders()
    {
        $user_id = Auth::user()->id;
        $orders = InvestorOder::where('user_id', $user_id)->latest()->get();

        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        return view('bdshop.frontEnd.halal-investment.halal-investment-investor-order-history', compact('sliders', 'halalinvestmentsetting', 'orders'));
    }
    public function investorOrder($id)
    {
        $user_id = Auth::user()->id;
        $orderExists = InvestorOder::where('user_id', $user_id)
            ->where('id', $id)
            ->exists();
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        if ($orderExists) {
            $order = InvestorOder::find($id);

            return view('bdshop.frontEnd.halal-investment.halal-investment-single-order', compact('order', 'sliders', 'halalinvestmentsetting'));
        } else {
            $message = 'Not Found';
            return view('bdshop.frontEnd.halal-investment.halal-investment-single-order', compact('message', 'sliders', 'halalinvestmentsetting'));
        }
    }
    public function investorOrderEdit($id)
    {
        $user_id = Auth::user()->id;
        $orderExists = InvestorOder::where('user_id', $user_id)
            ->where('id', $id)
            ->exists();
        $sliders = HalalInvestmentSlider::where('status', 1)->get();
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        if ($orderExists) {
            $order = InvestorOder::find($id);

            return view('bdshop.frontEnd.halal-investment.halal-investment-single-order-edit', compact('order', 'sliders', 'halalinvestmentsetting'));
        } else {
            $message = 'Not Found';
            return view('bdshop.frontEnd.halal-investment.halal-investment-single-order-edit', compact('message', 'sliders', 'halalinvestmentsetting'));
        }
    }
    public function investorOrderUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'apartment'             => 'required',
            'address'               => 'required',
            'city'                  => 'required',
            'phone'                 => ['required', 'string', 'min:11', 'max:20', 'regex:/^[0-9+()\- ]+$/'],
            'bank_name'             => 'required',
            'account_name'          => 'required',
            'account_no'            => 'required',
            'branch_name'           => 'required',
            'nominee_name'          => 'required',
            'relationship'          => 'required',
            'nominee_contact_no'    => ['required', 'string', 'max:20'],

        ]);
        // dd($request->all());
        $order = InvestorOder::findOrFail($id);
        $order->company_id = $request->company_id;
        $owner_id = InvestmentCompany::where('id', $request->company_id)->first();
        $order->company_owner_id = $owner_id->user_id;
        $order->apartment = $request->apartment;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->bank_name = $request->bank_name;
        $order->account_name = $request->account_name;
        $order->account_no = $request->account_no;
        $order->branch_name = $request->branch_name;
        $order->nominee_name = $request->nominee_name;
        $order->relationship = $request->relationship;
        $order->nominee_contact_no = $request->nominee_contact_no;

        $order->save();
        Toastr::success('Order Successfully updated:-)', 'Success');
        return redirect()->back();
    }

    public function investorGetPayment()
    {
        $halalinvestmentsetting = HalalInvestmentSetting::first();
        $data = InvestorGetPayment::where('investor_id', Auth::user()->id)->get();
        return view('bdshop.frontEnd.halal-investment.investor-get-payment', compact('halalinvestmentsetting', 'data'));
    }
}
