<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\SiteSetting;
use App\Models\SubCategory;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    //
    public function index()
    {
        $blogs=Blog::where('status','1')->get();
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        // $blog_categories=BlogCategory::where('status','1')->get();
        // $blogss=Blog::limit(10)->latest()->get();
        $sitesetting=SiteSetting::find(1);
        return view('frontend.pages.blog',compact('sitesetting','blogs','categories','subcategories'));
    }
    public function showBlogByCategory($slug)
    {
        $blog=BlogCategory::where('slug',$slug)->first();
        $blogs=Blog::where('category_id',$blog->id)->paginate(3);
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $blog_categories=BlogCategory::where('status','1')->get();
        $blogss=Blog::limit(3)->latest()->get();
        $sitesetting=SiteSetting::find(1);

        return view('frontend.pages.blog.blogs',compact('sitesetting','blogs','blogss','categories','subcategories','blog_categories'));


    }
}
