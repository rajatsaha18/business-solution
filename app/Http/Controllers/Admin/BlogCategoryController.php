<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Toastr;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $categories = BlogCategory::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $categories = $categories->where('name', 'like', '%'.$sort_search.'%');
        }
        $categories = $categories->paginate(15);
        return view('admin.blog.category.index', compact('categories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new BlogCategory();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->name));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
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
        $category = BlogCategory::findOrFail(decrypt($id));
        return view('admin.blog.category.edit', compact('category'));
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
        $category = BlogCategory::findOrFail($id);

        $category->name = $request->name;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if($slug == ''){
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;

        $category->status = $request->status;
        if($category->Update()){
            Toastr::success('Category has been Updated successfully :-)','Success');
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
        $categories = BlogCategory::find($id);
        $sub_cat = Blog::where('category_id', $categories->id)->first();
        if($sub_cat){
            Toastr::error('This Category has another Table :-)','Error');
            return redirect()->back();
        }else{
            $categories->delete();
            Toastr::success('Category has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
