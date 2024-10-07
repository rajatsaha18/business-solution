<?php

namespace App\Http\Controllers\Shop;

use App\AdvertisePost;
use App\BdCategory;
use App\BdSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Toastr;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $subcategories = BdSubCategory::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $subcategories = $subcategories->where('name', 'like', '%'.$sort_search.'%');
        }
        $subcategories = $subcategories->get();
        return view('admin.advertise.subcategory.index', compact('subcategories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BdCategory::all();
        return view('admin.advertise.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'category_id' => 'required',
            ],[
                'category_id.required' => 'Category is required',
            ]
        );
        $subcategory = new BdSubCategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->hot_category = $request->hot_category;
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if($slug == ''){
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $subcategory->slug = $slug;
        $image = $request->file('icon');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $subcategory->icon = $image_url;
            }
        }
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $subcategory->image = $image_url;
            }
        }
        if($subcategory->save()){
            Toastr::success('Category has been updated successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
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
        $subcategory = BdSubCategory::findOrFail(decrypt($id));
        $categories = BdCategory::all();
        return view('admin.advertise.subcategory.edit', compact('categories', 'subcategory'));
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
        $subcategory = BdSubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->hot_category = $request->hot_category;
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if($slug == ''){
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $subcategory->slug = $slug;
        $image = $request->file('icon');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $subcategory->icon = $image_url;
            }
        }
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $subcategory->image = $image_url;
            }
        }
        if($subcategory->save()){
            Toastr::success('Category has been updated successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
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
        $subcategory = BdSubCategory::findOrFail($id);
        $sub_cat = AdvertisePost::where('subcategory_id', $subcategory->id)->first();
        if($sub_cat){
            Toastr::error('This Sub Category has another Table :-)','Error');
            return redirect()->back();
        }
        else{
            $subcategory->delete();
            Toastr::success('Sub Category has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
