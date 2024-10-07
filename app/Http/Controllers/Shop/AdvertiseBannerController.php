<?php

namespace App\Http\Controllers\Shop;

use App\AdvertiseBanner;
use App\AdvertiseCategory;
use App\AdvertiseRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class AdvertiseBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $advertise_banner = AdvertiseBanner::orderBy('id','desc')->get();
        $sort_search =null;
        $advertise_banner = AdvertiseBanner::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $advertise_banner = $advertise_banner->where('title', 'like', '%'.$sort_search.'%');
        }
        $advertise_banner = $advertise_banner->get();
        return view('admin.advertise.banner.index',compact('advertise_banner','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advertise_category = AdvertiseCategory::where('status',1)->get();
        $advertise_placement = AdvertiseRate::get();
        return view('admin.advertise.banner.create',compact('advertise_category','advertise_placement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new AdvertiseBanner();
        $banner->title = $request->title;
        $banner->advertise_category_id = $request->advertise_category_id;
        $banner->advertise_placement_id = $request->advertise_placement_id;
        $banner->url = $request->url;
        $image = $request->file('image');
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
                $banner->image = $image_url;
            }
        }
        if($banner->save()){
            Toastr::success('Advertise Banner has been inserted successfully :-)','Success');
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
        $data = AdvertiseBanner::findOrFail(decrypt($id));
        $advertise_category = AdvertiseCategory::where('status',1)->get();
        $advertise_placement = AdvertiseRate::get();
        return view('admin.advertise.banner.edit',compact('data','advertise_category','advertise_placement'));
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
        {
            $banner = AdvertiseBanner::find($id);
            $banner->title = $request->title;
            $banner->advertise_category_id = $request->advertise_category_id;
            $banner->advertise_placement_id = $request->advertise_placement_id;
            $banner->url = $request->url;
            $image = $request->file('image');
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
                    $banner->image = $image_url;
                }
            }
            if($banner->save()){
                Toastr::success('Advertise Banner has been updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
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
        $advertise_banner = AdvertiseBanner::find($id);
        $advertise_banner->delete();
        Toastr::success('Advertise Banner has been deleted successfully :-)','Success');
        return redirect()->back();
    }
}
