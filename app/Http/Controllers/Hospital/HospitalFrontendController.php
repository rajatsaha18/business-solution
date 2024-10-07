<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;

use App\Models\HospitalBlog;
use App\Models\HospitalNewsLatest;

use App\Models\HospitalBranch;
use App\Models\HospitalPage;
use App\Models\HospitalVideo;
use App\Models\HospitalBackService;
use App\Models\HospitalBanner;
use App\Models\HospitalSlider;
use App\Models\HospitalGallery;
use App\Models\HospitalClient;
use App\Models\HospitalTeam;
use App\Models\HospitalProduct;
use App\Models\HospitalCategory;
use App\Models\HospitalSiteSetting;
use App\Models\HospitalSubCategory;
use App\Models\HospitalBlogCategory;
use App\Models\HospitalProductimage;
use Illuminate\Http\Request;

class HospitalFrontendController extends Controller
{
    //
    public function index()
    {
        $products = HospitalProduct::where('status', '1')->where('type', 'product')->orderBy('id', 'desc')->take(8)->get();
        $products_services = HospitalProduct::where('status', '1')->where('type', 'service')->orderBy('id', 'desc')->take(8)->get();
        // $services = HospitalBackService::where('status', '1')->orderBy('id', 'desc')->take(8)->get();
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $blogs = HospitalBlog::where('status', '1')->get();
        $latestNews = HospitalBlog::where('status', '1')->latest()->get();
        // $latestNews = HospitalNewsLatest::where('status', '1')->latest()->get();
        $banner = HospitalBanner::find(1);
        $product_descs = HospitalProduct::where('status', '1')->latest()->get();
        $featured_products = HospitalProduct::where('status', '1')->where('featured_product', '1')->get();
        $sitesetting = HospitalSiteSetting::find(1);
        $clients = HospitalClient::all();

        $sliders = HospitalSlider::where('status', '1')->get();
        return view('Hospital.frontend.pages.home.home', compact('sitesetting', 'products_services', 'latestNews', 'clients', 'products', 'product_descs', 'featured_products', 'categories', 'subcategories', 'sliders', 'blogs', 'banner'));
    }
    public function singleProductShow($slug)
    {
        $product = HospitalProduct::where('slug', $slug)->first();
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1');
        $product_images = HospitalProductimage::where('hospital_product_id', $product->id)->get();
        $sitesetting = HospitalSiteSetting::find(1);
        $products = HospitalProduct::where('status', '1')->get();
        return view('Hospital.frontend.pages.home.singleProduct', compact('products', 'sitesetting', 'product', 'product_images', 'categories', 'subcategories'));
    }
    public function singleServiceShow($slug)
    {
        $service = HospitalBackService::where('slug', $slug)->first();
        // $categories=Category::where('status','1')->get();
        // $subcategories=SubCategory::where('status','1');
        // $product_images=Productimage::where('hospital_product_id',$product->id)->get();
        $sitesetting = HospitalSiteSetting::find(1);
        // $products=Product::where('status','1')->get();
        return view('Hospital.frontend.pages.home.singleService', compact('service', 'sitesetting'));
    }
    public function singleBlogShow($slug)
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1');
        $blog = HospitalBlog::where('slug', $slug)->first();
        $blog->hits = $blog->hits + 1;
        $blog->save();
        $blogs = HospitalBlog::limit(10)->get();
        $blog_categories = HospitalBlogCategory::where('status', '1')->get();
        $sitesetting = HospitalSiteSetting::find(1);

        return view('Hospital.frontend.pages.home.singleBlog', compact('sitesetting', 'blog', 'blogs', 'categories', 'subcategories', 'blog_categories'));
    }
    public function singleNewsShow($slug)
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1');

        $news = HospitalNewsLatest::where('slug', $slug)->first();
        $news->hits = $news->hits + 1;
        $news->save();
        $newses = HospitalNewsLatest::limit(10)->latest()->get();
        $sitesetting = HospitalSiteSetting::find(1);

        return view('Hospital.frontend.pages.home.singleNews', compact('sitesetting', 'news', 'newses', 'categories', 'subcategories'));
    }
    public function page_details($slug)
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $page_details = HospitalPage::where('slug', $slug)->first();
        $branches = HospitalBranch::where('status', '1')->get();
        return view('Hospital.frontend.page_details', compact('page_details', 'categories', 'branches'));
    }
    public function gallery()
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $galleries = HospitalGallery::where('status', 1)->where('type', 'gallery')->get();
        $recogs = HospitalGallery::where('status', 1)->where('type', 'recognitions')->get();
        return view('Hospital.frontend.pages.home.gallery', compact('galleries', 'recogs', 'categories'));
    }
    public function team()
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $management = HospitalTeam::where('status', 1)->where('type', 'Management')->get();
        $member = HospitalTeam::where('status', 1)->where('type', 'Member')->get();
        return view('Hospital.frontend.pages.home.team', compact('management', 'member', 'categories'));
    }
    public function findGallery(Request $request)
    {
        $data = HospitalGallery::where('id', $request->id)->first();
        return response()->json($data);
    }
    public function findTeam(Request $request)
    {
        $data = HospitalTeam::where('id', $request->id)->first();
        return response()->json($data);
    }

    public function getNextImage($id)
    {
        $nextImage = HospitalGallery::where('id', '>', $id)->orderBy('id')->first();
        return response()->json($nextImage);
    }

    public function getPreviousImage($id)
    {
        $previousImage = HospitalGallery::where('id', '<', $id)->orderByDesc('id')->first();
        return response()->json($previousImage);
    }
    public function getNextImageTeam($id)
    {
        $nextImageTeam = HospitalTeam::where('id', '>', $id)->orderBy('id')->first();
        return response()->json($nextImageTeam);
    }

    public function getPreviousImageTeam($id)
    {
        $previousImageTeam = HospitalTeam::where('id', '<', $id)->orderByDesc('id')->first();
        return response()->json($previousImageTeam);
    }

    public function video()
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $videos = HospitalVideo::where('status', 1)->get();

        return view('Hospital.frontend.pages.home.videos', compact('videos', 'categories'));
    }
    public function branches()
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $branches = HospitalBranch::where('status', '1')->get();
        return view('Hospital.frontend.pages.home.branches', compact('branches', 'categories'));
    }
    public function findBranch(Request $request)
    {
        $data = HospitalBranch::where('id', $request->id)->first();
        return view('Hospital.frontend.pages.home.branch-modal', compact('data'));
        //   return response()->json($data);
    }
}
