<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageCategory;
use Illuminate\Support\Str;
use Toastr;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $pages = Page::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $pages = $pages->where('name', 'like', '%'.$sort_search.'%');
        }
        $pages = $pages->paginate(15);
        return view('admin.page.index', compact('pages', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PageCategory::where('status',1)->get();
        return view('admin.page.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Page();
        $category->name = $request->name;
        $category->category_id = $request->category_id;
        $category->link = $request->link;
        $category->description = $request->description;
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
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $category->image = $image_url;
            }
        }
        if($category->save()){
            Toastr::success('Page has been Saved successfully :-)','Success');
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
        $categories = PageCategory::where('status',1)->get();
        $data = Page::findOrFail(decrypt($id));
        return view('admin.page.edit',compact('categories','data'));
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
        $category = Page::findOrFail($id);
        $category->name = $request->name;
        $category->category_id = $request->category_id;
        $category->link = $request->link;
        $category->description = $request->description;
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

        $category->status = $request->status;
        if($category->Update()){
            Toastr::success('Page has been Updated successfully :-)','Success');
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
        $page = Page::find($id);
        if($page){
            $page->delete();
            Toastr::success('Page has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
