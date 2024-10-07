<?php

namespace App\Http\Controllers\Admin;

use Toastr;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $SubSubCategories=SubSubCategory::latest()->get();
        return view('admin.page.subsubcategory.index',compact('SubSubCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subcategories=SubCategory::where('status',1)->get();
        return view('admin.page.subsubcategory.create',compact('subcategories'));
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
        $data=new SubSubCategory();
        $data->name=$request->name;
        $data->slug=Str::slug($request->name);
        $data->subcategory_id=$request->subcategory_id;
        $data->status=$request->status;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        if($data->save()){
            Toastr::success('Data has been Saved successfully :-)','Success');
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
        $data=SubSubCategory::findOrFail(decrypt($id));
        $subcategories=SubCategory::where('status',1)->get();

        return view('admin.page.subsubcategory.edit',compact('data','subcategories'));
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
        $data=SubSubCategory::find($id);
        $data->name=$request->name;
        $data->slug=Str::slug($request->name);
        $data->subcategory_id=$request->subcategory_id;
        $data->status=$request->status;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        if($data->save()){
            Toastr::success('Data has been Updated successfully :-)','Success');
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
        $data=SubSubCategory::find($id);
        $data->delete();
        Toastr::success('Date deleted successfully');
        return redirect()->back();
    }
}
