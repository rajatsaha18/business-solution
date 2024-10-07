<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HalalInvestmentBlog;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HalalInvestmentBlogCategory;

class HalalInvestmentBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs=HalalInvestmentBlog::latest()->get();
        return view('admin.halal-investment-blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blogcategories=HalalInvestmentBlogCategory::where('status',1)->get();
        return view('admin.halal-investment-blog.create',compact('blogcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=new HalalInvestmentBlog();
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->blog_category_id=$request->blog_category_id;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investmant-blog/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        $data->description=$request->description;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data Inserted Successfully');
        return redirect()->back();

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=HalalInvestmentBlog::findOrFail(decrypt($id));
        $blogcategories=HalalInvestmentBlogCategory::where('status',1)->get();
        return view('admin.halal-investment-blog.edit',compact('data','blogcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=HalalInvestmentBlog::find($id);
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->blog_category_id=$request->blog_category_id;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investmant-blog/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        $data->description=$request->description;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=HalalInvestmentBlog::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
