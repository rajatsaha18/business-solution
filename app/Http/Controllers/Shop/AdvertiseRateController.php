<?php

namespace App\Http\Controllers\Shop;

use App\AdveriseRate;
use App\AdvertiseRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertiseRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertise = AdvertiseRate::get();
        return view('admin.advertise.rate.index',compact('advertise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertise.rate.create');
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
        $category->title = $request->title;
        $category->banner_size = $request->banner_size;
        $category->page_title = $request->page_title;
        $category->usd_rate = $request->usd_rate;
        $category->usd_rate = $request->usd_rate;
        $category->bdt_rate = $request->bdt_rate;

        if($category->save()){
            flash(__('Advertise rate has been inserted successfully'))->success();
            return redirect()->route('advertise-rate.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
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
        $data = AdveriseRate::findOrFail(decrypt($id));
        return view('bdshop.advertiseRate.edit',compact('data'));
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
        $category = AdveriseRate::findOrFail($id);
        $category->title = $request->title;
        $category->banner_size = $request->banner_size;
        $category->page_title = $request->page_title;
        $category->usd_rate = $request->usd_rate;
        $category->usd_rate = $request->usd_rate;
        $category->bdt_rate = $request->bdt_rate;

        if($category->save()){
            flash(__('Advertise rate has been updated successfully'))->success();
            return redirect()->route('advertise-rate.index');
        }
        else{
            flash(__('Something went wrong'))->error();
            return back();
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
        $rate = AdveriseRate::findOrFail($id);
        $rate->delete();
        flash(__('Advertise has been deleted successfully'))->success();
        return redirect()->route('advertise-rate.index');

    }
}
