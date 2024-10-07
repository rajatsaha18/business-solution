<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PricingCategory;
use App\Http\Controllers\Controller;
use App\Models\SoftwarePricingCategory;

class SoftwarePricingCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pricingcategories=SoftwarePricingCategory::latest()->get();
        return view('Software.admin.pricing_category.index',compact('pricingcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Software.admin.pricing_category.create');
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
        $data=new SoftwarePricingCategory();
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->status=$request->status;
        if($data->save()){
            Toastr::success('Data Inserted Successfully');
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
        $data=SoftwarePricingCategory::findOrFail(decrypt($id));
        return view('Software.admin.pricing_category.edit',compact('data'));
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
        $data=SoftwarePricingCategory::findOrFail($id);
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->status=$request->status;
        if($data->update()){
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
        $data=SoftwarePricingCategory::find($id);
        $data->delete();
        Toastr::success('Data deleted successfully');
        return redirect()->back();
    }
}
