<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
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
        //
        $sort_search =null;
        $categories = Category::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $categories = $categories->where('name', 'like', '%'.$sort_search.'%');
        }
        $categories = $categories->get();
        return view('admin.page.Categories.index',compact('sort_search','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page.Categories.create');
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
       
     
        $category = new Category();
        $category->name = $request->name;
        $category->slug=Str::slug($request->name);
        $category->order = $request->order;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->status = $request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
              
                $category->image = $image_url;
            }
        }
        if($category->save()){
            Toastr::success('Category  has been Saved successfully :-)','Success');
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
        //
        $data = Category::findOrFail(decrypt($id));
        return view('admin.page.Categories.edit',compact('data'));
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
        //
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug=Str::slug($request->name);
        $category->order = $request->order;
       $category->meta_title = $request->meta_title;
       $category->meta_description = $request->meta_description;
       $category->status = $request->status;
       $image = $request->file('image');
       if($image)
       {
           $image_name= $image->getClientOriginalName();
           $image_name = preg_replace('/\s+/', '-', $image_name);
           $image_full_name = $image_name;
           $upload_path = 'uploads/categories/';
           $image_url = $upload_path.$image_full_name;
           $success = $image->move(($upload_path), $image_full_name);
           // $img = Image::make($image_url)->resize(400, 200)->save();
           if($success)
           {
            
               $category->image = $image_url;
           }
       }
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
       $category = Category::find($id);
       $category->delete();
    //    $sub_category=SubCategory::where('category_id',$id)->get();
        // if( $category){
        //    $category->delete();
        //    if($category->image){
        //     unlink(($category->image));
        //     }
        //    foreach($sub_category as $subcat){
        //      $subcat->delete();
        //      if($subcat->image){
        //         unlink(($subcat->image));
        //     }
        //    }
            Toastr::success('Category  has been Deleted successfully :-)','Success');
            return redirect()->back();
        
    }
}
