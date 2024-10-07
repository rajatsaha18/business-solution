<?php

namespace App\Http\Controllers\Shop;

use App\AdvertiseCategory;
use App\AdvertiseRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $advertise_rate = AdvertiseRate::get();
        $sort_search =null;
        $advertise_rate = AdvertiseRate::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $advertise_rate = $advertise_rate->where('page_title', 'like', '%'.$sort_search.'%');
        }
        $advertise_rate = $advertise_rate->get();
        return view('admin.advertise.rate.index',compact('advertise_rate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = AdvertiseCategory::where('status',1)->get();
        return view('admin.advertise.rate.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new AdvertiseRate();
        $category->advertise_category_id = $request->advertise_category_id;
        $category->page_title = $request->page_title;
        $category->usd_rate = $request->usd_rate;
        $category->bdt_rate = $request->bdt_rate;

        if($category->save()){
            Toastr::success('Advertsie rate has been Saved successfully :-)','Success');
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
        $data = AdvertiseRate::findOrFail(decrypt($id));
        $categories = AdvertiseCategory::where('status',1)->get();
        return view('admin.advertise.rate.edit',compact('categories','data'));
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
        $category = AdvertiseRate::find($id);
        $category->advertise_category_id = $request->advertise_category_id;
        $category->page_title = $request->page_title;
        $category->usd_rate = $request->usd_rate;
        $category->bdt_rate = $request->bdt_rate;

        if($category->update()){
            Toastr::success('Advertsie rate has been Update successfully :-)','Success');
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
        $rate = AdvertiseRate::findOrFail($id);
        $rate->delete();
        Toastr::success('Advertsie rate has been Deleted successfully :-)','Success');
        return redirect()->back();
    }
}
