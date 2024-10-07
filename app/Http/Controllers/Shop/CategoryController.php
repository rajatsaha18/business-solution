<?php

namespace App\Http\Controllers\Shop;

use App\BdCategory;
use App\BdSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $categories = BdCategory::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $categories = $categories->where('name', 'like', '%'.$sort_search.'%');
        }
        $categories = $categories->paginate(15);
        return view('admin.advertise.category.index', compact('categories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertise.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new BdCategory();
        $category->name = $request->name;
        $category->select_type = $request->select_type;
        $category->quick_search = $request->quick_search;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->name));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
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
                $category->icon = $image_url;
            }
        }

        if($category->save()){
            Toastr::success('Category has been Saved successfully :-)','Success');
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
        $category = BdCategory::findOrFail(decrypt($id));
        return view('admin.advertise.category.edit', compact('category'));
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
        $category = BdCategory::findOrFail($id);

        $category->name = $request->name;
        $category->meta_title = $request->meta_title;
        $category->quick_search = $request->quick_search;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if($slug == ''){
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
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
                $category->icon = $image_url;
            }
        }
        if($category->save()){
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
        $category = BdCategory::findOrFail($id);
        $sub_cat = BdSubCategory::where('category_id', $category->id)->first();

        if($sub_cat){
            Toastr::error('This Category has another Table :-)','Error');
            return redirect()->back();
        }else{
            $category->delete();
            Toastr::success('Category has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
