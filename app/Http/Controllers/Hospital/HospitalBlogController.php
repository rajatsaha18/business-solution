<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Models\HospitalBlog;
use App\Models\HospitalBlogCategory;
use Illuminate\Http\Request;
use Str;
use Auth;
use Toastr;

class HospitalBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = HospitalBlog::orderBy('id', 'desc')->get();
        return view('Hospital.admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = HospitalBlogCategory::where('status', 1)->get();
        return view('Hospital.admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new HospitalBlog();
        $category->title = $request->title;
        $category->author_name = Auth::user()->name;
        $category->hospital_category_id = $request->category_id;
        $category->short_description = $request->short_description;
        $category->long_description = $request->long_description;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->title, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->title));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $category->image = $image_url;
            }
        }
        if ($category->save()) {
            Toastr::success('Blog has been Saved successfully :-)', 'Success');
            return redirect()->back();
        } else {
            Toastr::error('Something went wrong :-)', 'Error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories = HospitalBlogCategory::where('status', 1)->get();
        $data = HospitalBlog::findOrFail(decrypt($id));
        return view('Hospital.admin.blog.edit', compact('categories', 'data'));
    }

    public function update(Request $request, $id)
    {
        $category = HospitalBlog::find($id);
        $category->title = $request->title;
        $category->author_name = Auth::user()->name;
        $category->hospital_category_id = $request->category_id;
        $category->short_description = $request->short_description;
        $category->long_description = $request->long_description;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->title, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->title));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                // if($category->image){
                //     unlink(($category->image));
                // }
                $category->image = $image_url;
            }
        }
        if ($category->save()) {
            Toastr::success('Blog has been Updated successfully :-)', 'Success');
            return redirect()->back();
        } else {
            Toastr::error('Something went wrong :-)', 'Error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = HospitalBlog::find($id);
        if ($blog) {
            
            if($blog->image){
                unlink(($blog->image));
            }
            $blog->delete();
            Toastr::success('Blog has been Deleted successfully :-)', 'Success');
            return redirect()->back();
        }
    }
}
