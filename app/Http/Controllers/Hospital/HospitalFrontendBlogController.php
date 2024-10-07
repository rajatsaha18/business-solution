<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;

use App\Models\HospitalBlog;
use App\Models\HospitalCategory;
use App\Models\HospitalSiteSetting;
use App\Models\HospitalSubCategory;
use App\Models\HospitalBlogCategory;
use Illuminate\Http\Request;

class HospitalFrontendBlogController extends Controller
{
    //
    public function index()
    {
        $blogs = HospitalBlog::where('status', '1')->orderBy('id','desc')->paginate(6);
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        // $blog_categories=BlogCategory::where('status','1')->get();
        // $blogss=Blog::limit(10)->latest()->get();
        $sitesetting = HospitalSiteSetting::find(1);
        return view('Hospital.frontend.pages.blog.blogs', compact('sitesetting', 'blogs', 'categories', 'subcategories'));
    }
    public function hospitalSearchBlog(Request $request)
    {
        
        $sitesetting = HospitalSiteSetting::find(1);
        $query = $request->input('query');

        // Search in the 'title' and 'description' columns of the 'blogs' table
        $blogs = HospitalBlog::where('title', 'LIKE', "%$query%")
                      ->orWhere('short_description', 'LIKE', "%$query%")
                      ->paginate(6);

        // Return the search results to a view
        return view('Hospital.frontend.pages.blog.search-results-hospital', compact('blogs', 'query','sitesetting'));
    }
    
    public function showBlogByCategory($slug)
    {
        $blog = HospitalBlogCategory::where('slug', $slug)->first();
        $blogs = HospitalBlog::where('hospital_category_id', $blog->id)->paginate(3);
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $blog_categories = HospitalBlogCategory::where('status', '1')->get();
        $blogss = HospitalBlog::limit(3)->latest()->get();
        $sitesetting = HospitalSiteSetting::find(1);

        return view('Hospital.frontend.pages.blog.blogs', compact('sitesetting', 'blogs', 'blogss', 'categories', 'subcategories', 'blog_categories'));
    }
}
