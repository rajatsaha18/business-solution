<?php

namespace App\Http\Controllers\Hospital;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HospitalBlog;
use App\Models\HospitalBlogCategory;
use Illuminate\Support\Str;
use Toastr;

class HospitalBlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $categories = HospitalBlogCategory::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $categories = $categories->where('name', 'like', '%' . $sort_search . '%');
        }
        $categories = $categories->paginate(15);
        return view('Hospital.admin.blog.category.index', compact('categories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hospital.admin.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new HospitalBlogCategory();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if ($slug == '') {
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
        if ($category->save()) {
            Toastr::success('Category has been Saved successfully :-)', 'Success');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = HospitalBlogCategory::findOrFail(decrypt($id));
        return view('Hospital.admin.blog.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = HospitalBlogCategory::findOrFail($id);

        $category->name = $request->name;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if ($slug == '') {
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;

        $category->status = $request->status;
        if ($category->Update()) {

            Toastr::success('Category has been Updated successfully :-)', 'Success');
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
        $categories = HospitalBlogCategory::find($id);
        $sub_cat = HospitalBlog::where('hospital_category_id', $categories->id)->first();
        if ($sub_cat) {
            Toastr::error('This Category has another Table :-)', 'Error');
            return redirect()->back();
        } else {
            $categories->delete();
            // if($categories->image){
            //     unlink(public_path($categories->image));
            // }
            Toastr::success('Category has been Deleted successfully :-)', 'Success');
            return redirect()->back();
        }
    }
}
