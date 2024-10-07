<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\SoftwarePage;
use Illuminate\Http\Request;
use App\Models\ProductFeature;
use App\Http\Controllers\Controller;
use App\Models\SoftwarePageCategory;
use App\Models\SoftwareProductFeature;

class SoftwareProductFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productFeatures=SoftwareProductFeature::latest()->get();
        return view('Software.admin.product_features.index',compact('productFeatures'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_category=SoftwarePageCategory::where('slug','our-products')->first();
        $products=SoftwarePage::where('category_id',$page_category->id)->where('status',1)->get();
        return view('Software.admin.product_features.create',compact('products'));
        
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
        $data=new SoftwareProductFeature();
        $data->title=$request->title;
        $data->product_id=$request->product_id;
        $data->short_content=$request->short_content;

        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/feature/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->image = $image_url;
            }
        }

        $data->status=$request->status;
        $data->save();
        Toastr::success('Data has been inserted');
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
        $data=SoftwareProductFeature::find(decrypt($id));
        $page_category=SoftwarePageCategory::where('slug','our-products')->first();
        $products=Page::where('category_id',$page_category->id)->where('status',1)->get();
        return view('Software.admin.product_features.edit',compact('data','products'));

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
        $data=SoftwareProductFeature::find($id);
        $data->title=$request->title;
        $data->product_id=$request->product_id;
        $data->short_content=$request->short_content;

        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/feature/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->image = $image_url;
            }
        }

        $data->status=$request->status;
        $data->save();
        Toastr::success('Data has been Updated');
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
        $data=SoftwareProductFeature::find($id);
        $data->delete();
        Toastr::success('Data has been Deleted');
        return redirect()->back();
    }
}
