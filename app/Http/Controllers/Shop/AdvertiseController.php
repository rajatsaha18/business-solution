<?php

namespace App\Http\Controllers\Shop;

use App\Models\AddCompany;
use App\AdvertiseCategory;
use App\AdvertiseRate;
use App\Area;
use App\BdCategory;
use App\BdSubCategory;
use App\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $advertise = AdvertiseCategory::get();
        $sort_search =null;
        $advertise = AdvertiseCategory::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $advertise = $advertise->where('title', 'like', '%'.$sort_search.'%');
        }
        $advertise = $advertise->get();
        return view('admin.advertise.index',compact('advertise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new AdvertiseCategory();
        $category->title = $request->title;
        $category->banner_size = $request->banner_size;
        $category->status = $request->status;
        if($category->save()){
            Toastr::success('Advertise Banner has been Saved successfully :-)','Success');
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
        $data = AdvertiseCategory::findOrFail(decrypt($id));
        return view('admin.advertise.edit',compact('data'));
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
        $category = AdvertiseCategory::findOrFail($id);
        $category->title = $request->title;
        $category->banner_size = $request->banner_size;
        $category->status = $request->status;

        if($category->save()){
            Toastr::success('Advertise Banner Size has been Update successfully :-)','Success');
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
        $ad_cate = AdvertiseCategory::findOrFail($id);
        $sub_cat = AdvertiseRate::where('advertise_category_id', $ad_cate->id)->first();
        if($sub_cat){
            Toastr::error('This Data has another Table :-)','Error');
            return redirect()->back();
        }
        else{
            $ad_cate->delete();
            Toastr::success('Suceessfully Deleted :-)','Success');
            return redirect()->back();
        }

    }
    public function advertise_request(Request $request){
        // $advertises = AddCompany::orderBy('id','desc')->get();
        $sort_search =null;
        $advertises = AddCompany::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $advertises = $advertises->where('business_name', 'like', '%'.$sort_search.'%');
        }
        $advertises = $advertises->get();
        return view('admin.shop.index',compact('advertises'));
    }
    public function edit_advertise_request($id){
        $advertise = AddCompany::findOrFail(decrypt($id));
        $categories = BdCategory::get();
        $sub_categories = BdSubCategory::get();
        $districts = District::orderBy('name')->get();
        $area = Area::orderBy('name')->get();
        return view('admin.admin.advertise_request.edit',compact('advertise','categories','sub_categories','districts','area'));
    }
}
