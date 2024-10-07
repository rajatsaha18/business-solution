<?php

namespace App\Http\Controllers\Shop;

use App\BdProduct;
use App\BdProductCategory;
use App\BdProductSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Toastr;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $subcategories = BdProductSubCategory::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $subcategories = $subcategories->where('name', 'like', '%'.$sort_search.'%');
        }
        $subcategories = $subcategories->paginate(15);
        return view('admin.product.subcategory.index', compact('subcategories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BdProductCategory::all();
        return view('admin.product.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new BdProductSubCategory();
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $subcategory->status = $request->status;
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
            Toastr::success('Subcategory has been saved successfully :-)','Success');
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
        $subcategory = BdProductSubCategory::findOrFail(decrypt($id));
        $categories = BdProductCategory::all();
        return view('admin.product.subcategory.edit', compact('categories', 'subcategory'));
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
        $subcategory = BdProductSubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $subcategory->status = $request->status;
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
        if($subcategory->update()){
            Toastr::success('Subcategory has been updated successfully :-)','Success');
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
        $sub_categories = BdProductSubCategory::find($id);
        $sub_cat = BdProduct::where('product_sub_cat_id', $sub_categories->id)->first();
        if($sub_cat){
            Toastr::error('This Category has another Table :-)','Error');
            return redirect()->back();
        }else{
            $sub_categories->delete();
            Toastr::success('Sub Category has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
