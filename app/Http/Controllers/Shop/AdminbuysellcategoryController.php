<?php

namespace App\Http\Controllers\Shop;

use Toastr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminBuySellCategory;

class AdminbuysellcategoryController extends Controller
{
    
    public function index()
    {
        //
        $categories=AdminBuySellCategory::latest()->get();
        return view('admin.buy-sell-category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response  
     */
    public function create()
    {
        //
        return view('admin.buy-sell-category.create');
    }

    public function store(Request $request)
    {
        //
        $data=new AdminBuySellCategory();
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->status=$request->status;
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
                    $data->icon = $image_url;
                }
            }
        if($data->save()){
            Toastr::success('Data inserted Successfully');
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

    public function edit($id)
    {
       $data=AdminBuySellCategory::findOrFail(decrypt($id));
       return view('admin.buy-sell-category.edit',compact('data'));
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
        $data=AdminBuySellCategory::findOrFail($id);
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->status=$request->status;
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
                $data->icon = $image_url;
            }
        }
        if($data->save()){
            Toastr::success('Data Updated Successfully');
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
        //
        $data=AdminBuySellCategory::findOrFail($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
