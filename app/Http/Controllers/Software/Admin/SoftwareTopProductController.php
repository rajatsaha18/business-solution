<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\TopProduct;
use Illuminate\Http\Request;
use App\Models\SoftwareTopProduct;
use App\Http\Controllers\Controller;

class SoftwareTopProductController extends Controller
{
    public function index()
    {
        $blogs = SoftwareTopProduct::orderBy('id','desc')->get();
        return view('Software.admin.top-product.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = BlogCategory::where('status',1)->get();
        return view('Software.admin.top-product.create');
    }


    public function store(Request $request)
    {
        $category = new SoftwareTopProduct();
        $category->title = $request->title;
        $category->status = $request->status;

        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/top-products/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $category->image = $image_url;
            }
        }
        if($category->save()){
            Toastr::success('TopProduct has been Saved successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // $categories = TopProductCategory::where('status',1)->get();
        $data = SoftwareTopProduct::findOrFail(decrypt($id));
        return view('Software.admin.top-product.edit',compact('data'));
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
        $category = SoftwareTopProduct::find($id);
        $category->title = $request->title;
        
        $category->status = $request->status;
        
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
            Toastr::success('TopProduct has been Updated successfully :-)','Success');
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
        $top_product = SoftwareTopProduct::find($id);
        if($top_product){
            $top_product->delete();
            Toastr::success('Top-product has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
