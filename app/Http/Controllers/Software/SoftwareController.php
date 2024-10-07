<?php

namespace App\Http\Controllers\Software;

use App\Models\SoftwareJob;
use App\Models\SoftwareBlog;

use App\Models\SoftwarePage;
use App\Models\SoftwareTeam;
use Illuminate\Http\Request;
use App\Models\SoftwareWhoWe;
use App\Models\SoftwareContact;
use App\Models\SoftwareCounter;
use App\Models\SoftwarePrivacy;
use App\Models\SoftwareProject;
use App\Models\SoftwareService;
use App\Models\SoftwareWhatWeDo;
use App\Models\SoftwareJobApplied;
use App\Models\SoftwareNewsLetter;
use App\Models\SoftwareTopProduct;
use App\Models\SoftwarePricingPlan;
use App\Http\Controllers\Controller;
use App\Models\SoftwareClientReview;
use App\Models\SoftwareProjectImage;
use App\Models\SoftwareGeneralSetting;
use App\Models\SoftwareProductContact;
use App\Models\SoftwareProductFeature;
use App\Models\SoftwareFrequentlyAskQn;
use App\Models\SoftwarePricingCategory;
use App\Models\SoftwareProjectCategory;
use App\Models\SoftwareCampusAmbassador;
use App\Models\SoftwareSiteSettingBanner;
use App\Models\SoftwareTerm;
use App\Models\SliderSoftware;

class SoftwareController extends Controller
{
    public $siteBannerVariable;
    public function index()
    {
        return redirect()->route('encrypt-url');
    }
    public function encrypt_url()
    {
        $top_product = SoftwareTopProduct::where('status', 1)->orderBy('created_at', 'ASC')->take(6)->get();
        $blogs = SoftwareBlog::where('status', 1)->orderBy('created_at', 'ASC')->take(1)->get();

        $latestBlogs = SoftwareBlog::where('status', 1)->take(3)->latest()->get();
        $sitebanner = SoftwareGeneralSetting::orderBy('id', 'DESC')->take(1)->get();
        $services = SoftwareService::where('status', 1)->get();
        $whatwedo = SoftwareWhatWeDo::where('status', 1)->get();
        $sliders = SliderSoftware::orderBy('id','desc')->where('status',1)->get();
        // return view('frontend.master', compact('blogs'));
        return view('Software.frontend.dashboard', compact('top_product','sliders', 'sitebanner', 'services', 'latestBlogs', 'blogs', 'whatwedo'));
    }
    public function contact_us()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        return view('Software.frontend.contact-us', compact('sitebanner'));
    }

    public function product_contact()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        return view('Software.frontend.product-contact', compact('sitebanner'));
    }
    public function services()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $projects = SoftwareProject::where('status', 1)->orderBy('id', 'desc')->get();
        $services = SoftwareService::where('status', 1)->get();
        return view('Software.frontend.service', compact('projects', 'services', 'sitebanner'));
    }
    public function about_us()
    {
        $data = SoftwareWhoWe::first();
        $counters = SoftwareCounter::first();
        $sitebanner = SoftwareSiteSettingBanner::first();
        $what_we_do = SoftwareWhatWeDo::where('status', 1)->orderBy('id', 'desc')->take(6)->get();
        $reviews = SoftwareClientReview::where('status', 1)->orderBy('id', 'desc')->get();
        return view('Software.frontend.about-us', compact('sitebanner', 'what_we_do', 'reviews', 'data', 'counters'));
    }
    public function team()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $teams = SoftwareTeam::where('status', 1)->orderBy('id', 'desc')->get();
        return view('Software.frontend.team', compact('sitebanner', 'teams'));
    }
    public function pricing()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();

        $frequently_ask_qn = SoftwareFrequentlyAskQn::where('status', 1)->get();
        $reviews = SoftwareClientReview::where('status', 1)->orderBy('id', 'desc')->get();
        $pricing = SoftwarePricingPlan::where('status', 1)->get();
        $pricingcategories = SoftwarePricingCategory::where('status', 1)->get();
        return view('Software.frontend.pricing', compact('frequently_ask_qn', 'reviews', 'pricing', 'sitebanner', 'pricingcategories'));
    }
    public function find_price(Request $request)
    {
        $data = SoftwarePricingPlan::where('id', $request->id)->first();
        return view('frontend.pages.price_modal', compact('data'));
        //   return response()->json($data);
    }
    public function submit_contact(Request $request)
    {
        $contact = new SoftwareContact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->question = $request->subject;
        $contact->comment = $request->comments;
        $contact->save();
        return redirect()->back()->with('message', 'Message send successfully.Please wait for reply!');
    }

    public function product_submit_contact(Request $request)
    {
        // dd($request->all());
        $contact = new SoftwareProductContact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->address = $request->address;
        $contact->save();
        return redirect()->back()->with('message', 'Message send successfully.Please wait for reply!');
    }
    public function porjectDetails($slug)
    {
        $project = SoftwareProject::where('slug', $slug)->first();
        $project_img = SoftwareProjectImage::where('project_id', $project->id)->get();
        return view('frontend.pages.project_details', compact('project_img', 'project'));
    }
    public function pageDetails($slug)
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $product_details = SoftwarePage::where('slug', $slug)->first();
        if ($product_details) {
            $pagecategory = $product_details->category->slug;
            // dd($pagecategory);

            $features = SoftwareProductFeature::where('product_id', $product_details->id)->get();

            return view('Software.frontend.product_details', compact('product_details', 'features', 'sitebanner'));
        } else {
            return "No Page Found";
        }
    }
    public function blogDetails($slug)
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $details = SoftwareBlog::where('slug', $slug)->first();
        $details->hits = $details->hits + 1;
        $details->save();
        $recent_posts = SoftwareBlog::orderBy('id', 'desc')->take(10)->get();
        return view('Software.frontend.bolg-details', compact('sitebanner', 'details', 'recent_posts'));
    }
    public function newsletter(Request $request)
    {
        $newsletter = new SoftwareNewsLetter();
        $newsletter->email = $request->email;
        $newsletter->save();
        return redirect()->back()->with('message', 'Subscribed successfully.!');
    }
    public function career()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $jobs = SoftwareJob::orderBy('id', 'desc')->where('status', 1)->get();
        return view('frontend.pages.career', compact('jobs', 'sitebanner'));
    }

    public function campusAmbassador()
    {
        $this->siteBannerVariable = SoftwareSiteSettingBanner::first();
        return view('frontend.pages.campus.campus-ambassador', ['sitebanner' => $this->siteBannerVariable]);
    }

    public function createCampus(Request $request)
    {
        $request->validate([
            'email'             => 'required',
            'name'              => 'required',
            'mobile'            => 'required',
            'university_name'   => 'required',
            'department'        => 'required',
        ]);
        SoftwareCampusAmbassador::newCampus($request);
        return redirect()->back()->with('message', 'information Send Successfully');
    }
    public function jobDetails($slug)
    {
        $job_details = SoftwareJob::where('slug', $slug)->first();
        return view('frontend.pages.job_details', compact('job_details'));
    }
    public function job_apply($slug)
    {
        $job = SoftwareJob::where('slug', $slug)->first();
        return view('frontend.pages.apply_job', compact('job'));
    }
    public function save_apply_job(Request $request)
    {
        $apply = new SoftwareJobApplied();
        $apply->job_id = $request->job_id;
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->phone = $request->phone;
        $apply->job_title = $request->job_title;
        $apply->comment = $request->comment;
        $image = $request->file('file');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/job/file/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $apply->file = $image_url;
            }
        }
        $apply->save();
        return redirect()->back()->with('message', 'Applied successfully.Please wait!');
    }
    public function portfolio()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $categories = SoftwareProjectCategory::where('status', 1)->get();
        $projects = SoftwareProject::where('status', 1)->orderBy('id', 'desc')->get();
        return view('Software.frontend.portfolio', compact('categories', 'projects', 'sitebanner'));
    }
    public function blog()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $blogs = SoftwareBlog::where('status', 1)->latest()->paginate(6);
        return view('Software.frontend.blog', compact('blogs', 'sitebanner'));
    }
    public function blogSearchSoftware(Request $request)
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $blogs = SoftwareBlog::where('status', 1)->latest()->paginate(6);
        $query = $request->input('query');
        
        // Searching for posts by title or content
        $posts = SoftwareBlog::where('title', 'LIKE', "%{$query}%")
                         ->orWhere('short_description', 'LIKE', "%{$query}%")
                         ->get();

        return view('Software.frontend.search_blog_results', compact('posts','blogs', 'query','sitebanner'));
    }
    public function privacy()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $privacies = SoftwarePrivacy::first();
        return view('Software.frontend.privacy', compact('privacies', 'sitebanner'));
    }
    public function term()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $terms = SoftwareTerm::first();
        return view('Software.frontend.term', compact('terms', 'sitebanner'));
    }
}
