<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BuySellSubCategory;
use App\Http\Controllers\Controller;
use App\Models\AdminBuySellCategory;
use Toastr;

class BuySellSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategories=BuySellSubCategory::latest()->get();
        return view('admin.buy-sell-subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=AdminBuySellCategory::where('status',1)->get();
        return view('admin.buy-sell-subcategory.create',compact('categories'));

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
        $data=new BuySellSubCategory();
        $data->title=$request->title;
        $data->slug=Str::slug($data->title);
        $data->form_type=$request->form_type;
        $data->category_id=$request->category_id;
        $data->status=$request->status;
        $image = $request->file('icon');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/subcategories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->icon = $image_url;
            }
        }
        if($data->save()){
            Toastr::success('Data insert Successfull');
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
        $data=BuySellSubCategory::findOrFail(decrypt($id));
        $categories=AdminBuySellCategory::where('status',1)->get();
        return view('admin.buy-sell-subcategory.edit',compact('data','categories'));
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
        $data=BuySellSubCategory::findOrFail($id);
        $data->title=$request->title;
        $data->slug=Str::slug($data->title);
        $data->form_type=$request->form_type;
        $data->category_id=$request->category_id;
        $data->status=$request->status;
        $image = $request->file('icon');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/subcategories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->icon = $image_url;
            }
        }
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
        $data=BuySellSubCategory::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
