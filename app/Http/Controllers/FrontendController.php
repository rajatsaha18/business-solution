<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Page;

use App\Models\Team;
use App\Models\Video;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use App\Models\NewsLatest;
use App\Models\SiteSetting;
use App\Models\SubCategory;
use App\Models\BlogCategory;
use App\Models\Productimage;
use App\Models\SoftwareBlog;
use Illuminate\Http\Request;
use App\Models\SoftwareSiteSettingBanner;


class FrontendController extends Controller
{
    //
    public function index(){
        $products=Product::where('status','1')->get();
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $blogs = Blog::where('status', '1')->latest()->take(3)->get();
        $latestNews=NewsLatest::where('status','1')->latest()->get();
        $banner=Banner::find(1);
        $product_descs=Product::where('status','1')->latest()->get();
        $featured_products=Product::where('status','1')->where('featured_product','1')->get();
        $sitesetting=SiteSetting::first();

        $sliders=Slider::where('status','1')->get();
        return view('frontend.pages.home_page',compact('sitesetting','latestNews','products','product_descs','featured_products','categories','subcategories','sliders','blogs','banner'));
    }
    public function singleProductShow($slug){
        $product=Product::where('slug',$slug)->first();
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1');
        $product_images=Productimage::where('product_id',$product->id)->get();
        $sitesetting=SiteSetting::find(1);
        $products=Product::where('status','1')->get();
        return view('frontend.pages.single_product',compact('products','sitesetting','product','product_images','categories','subcategories'));
    }
    public function singleBlogShow($slug){
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1');
        $blog=Blog::where('slug',$slug)->first();
        $blog->hits=$blog->hits+1;
        $blog->save();
        $blogs=Blog::where('slug','!=',$slug)->limit(10)->latest()->get();
        $blog_categories=BlogCategory::where('status','1')->get();
        $sitesetting=SiteSetting::find(1);

        return view('frontend.pages.blog_details',compact('sitesetting','blog','blogs','categories','subcategories','blog_categories'));
    }

    public function singleNewsShow($slug){
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1');

        $news=NewsLatest::where('slug',$slug)->first();
        $news->hits=$news->hits+1;
        $news->save();
        $newses=NewsLatest::limit(10)->latest()->get();
        $sitesetting=SiteSetting::find(1);

        return view('frontend.pages.home.singleNews',compact('sitesetting','news','newses','categories','subcategories'));
    }
    public function page_details($slug){
        $categories=Category::where('status','1')->get();
        $page_details = Page::where('slug',$slug)->first();
         $branches=Branch::where('status','1')->get();
         $sitesetting=SiteSetting::first();
        return view('frontend.page_details',compact('page_details','categories','branches','sitesetting'));
    }
    public function gallery(){
        $categories=Category::where('status','1')->get();
        $galleries=Gallery::where('status',1)->where('type','gallery')->get();
        $recogs=Gallery::where('status',1)->where('type','recognitions')->get();
        $sitesetting=SiteSetting::first();
        return view('frontend.pages.gallery',compact('galleries','recogs','categories','sitesetting'));
    }
    public function mediaCenter(){
        $categories=Category::where('status','1')->get();
        
        $sitesetting=SiteSetting::first();
        return view('frontend.pages.media-center',compact('categories','sitesetting'));
    }
    public function investorRelation(){
        $categories=Category::where('status','1')->get();
        
        $sitesetting=SiteSetting::first();
        return view('frontend.pages.investor',compact('categories','sitesetting'));
    }
    public function team(){
        $categories=Category::where('status','1')->get();
        $management =Team::where('status',1)->where('type','Management')->get();
        $itItem =Team::where('status',1)->where('type','IT')->get();
        $feildEngineer =Team::where('status',1)->where('type','Field Service Engineer')->get();
        $productItem =Team::where('status',1)->where('type','Product Specialist')->get();
        $marketItem =Team::where('status',1)->where('type','Marketing & Sales')->get();
        $applicationItem =Team::where('status',1)->where('type','Application')->get();
        $logistics =Team::where('status',1)->where('type','Logistics')->get();
        $administrative =Team::where('status',1)->where('type','Administrative')->get();
        $accounts =Team::where('status',1)->where('type','Accounts')->get();
        $store =Team::where('status',1)->where('type','Store')->get();
        $distribution =Team::where('status',1)->where('type','Distribution')->get();
        $others =Team::where('status',1)->where('type','Others')->get();
        $sitesetting=SiteSetting::first();
        return view('frontend.pages.team',compact('management','others','distribution','store','accounts','administrative','logistics','applicationItem','itItem','feildEngineer','productItem','marketItem','categories','sitesetting'));
    }
    public function findGallery(Request $request){
        $data = Gallery::where('id', $request->id)->first();
        return response()->json($data);
    }
    public function findTeam(Request $request){
        $data = Team::where('id', $request->id)->first();
        return response()->json($data);
    }

    public function getNextImage($id)
    {
        $nextImage = Gallery::where('id', '>', $id)->orderBy('id')->first();
        return response()->json($nextImage);
    }

    public function getPreviousImage($id)
    {
        $previousImage = Gallery::where('id', '<', $id)->orderByDesc('id')->first();
        return response()->json($previousImage);
    }
    public function getNextImageTeam($id)
    {
        $nextImageTeam = Team::where('id', '>', $id)->orderBy('id')->first();
        return response()->json($nextImageTeam);
    }

    public function getPreviousImageTeam($id)
    {
        $previousImageTeam = Team::where('id', '<', $id)->orderByDesc('id')->first();
        return response()->json($previousImageTeam);
    }

    public function video(){
        $categories=Category::where('status','1')->get();
        $videos=Video::where('status',1)->get();
        $sitesetting=SiteSetting::first();
        return view('frontend.pages.video',compact('videos','categories','sitesetting'));
    }
    public function branches(){
        $categories=Category::where('status','1')->get();
        $branches=Branch::where('status','1')->get();
        $sitesetting=SiteSetting::first();
        return view('frontend.pages.branch',compact('branches','categories','sitesetting'));
    }
    public function findBranch(Request $request){
        $data=Branch::where('id',$request->id)->first();
        return view('frontend.pages.home.branch-modal',compact('data'));
    //   return response()->json($data);
    }

    // Software
    public function softblog()
    {
        $sitebanner = SoftwareSiteSettingBanner::first();
        $blogs = SoftwareBlog::where('status', 1)->latest()->paginate(6);
        return view('frontend.blog', compact('blogs', 'sitebanner'));
    }
}
