<?php

namespace App\Http\Controllers\Admin;

use Toastr;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $data = Banner::find(1);
        return view('admin.page.Banner.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Banner::findOrFail(1);
        return view('admin.page.Banner.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bannerUpdate(Request $request)
    {
        //


        $banner = Banner::find(1);
        if($banner){
            $banner->banner_one_link = $request->banner_one_link;
            $banner->banner_two_link = $request->banner_two_link;
            $banner->banner_three_link = $request->banner_three_link;
            $banner->banner_four_link = $request->banner_four_link;
            $banner->banner_five_link = $request->banner_five_link;
            $banner->banner_six_link = $request->banner_six_link;
            $banner->banner_seven_link = $request->banner_seven_link;
            $banner_one = $request->file('banner_one');
            if($banner_one)
            {
                $banner_one_name= $banner_one->getClientOriginalName();
                $banner_one_name = preg_replace('/\s+/', '-', $banner_one_name);
                $banner_one_full_name = $banner_one_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_one_full_name;
                $success = $banner_one->move(($upload_path), $banner_one_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    if($banner->banner_one && !empty($banner->banner_one)){
                        unlink(($banner->banner_one));
                    }
                    $banner->banner_one = $image_url;
                }
            }
            $banner_two = $request->file('banner_two');
            if($banner_two)
            {
                $banner_two_name= $banner_two->getClientOriginalName();
                $banner_two_name = preg_replace('/\s+/', '-', $banner_two_name);
                $banner_two_full_name = $banner_two_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_two_full_name;
                $success = $banner_two->move(($upload_path), $banner_two_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    if($banner->banner_two  && !empty($banner->banner_two)){
                        unlink(($banner->banner_two));
                    }
                    $banner->banner_two = $image_url;
                }
            }
            $banner_three = $request->file('banner_three');
            if($banner_three)
            {
                $banner_three_name= $banner_three->getClientOriginalName();
                $banner_three_name = preg_replace('/\s+/', '-', $banner_three_name);
                $banner_three_full_name = $banner_three_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_three_full_name;
                $success = $banner_three->move(($upload_path), $banner_three_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    if($banner->banner_three && !empty($banner->banner_three)){
                        unlink(($banner->banner_three));
                    }
                    $banner->banner_three = $image_url;
                }
            }
            $banner_four = $request->file('banner_four');
            if($banner_four)
            {
                $banner_four_name= $banner_four->getClientOriginalName();
                $banner_four_name = preg_replace('/\s+/', '-', $banner_four_name);
                $banner_four_full_name = $banner_four_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_four_full_name;
                $success = $banner_four->move(($upload_path), $banner_four_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    if($banner->banner_four && !empty($banner->banner_four)){
                        unlink(($banner->banner_four));
                    }
                    $banner->banner_four = $image_url;
                }
            }
            $banner_five = $request->file('banner_five');
            if($banner_five)
            {
                $banner_five_name= $banner_five->getClientOriginalName();
                $banner_five_name = preg_replace('/\s+/', '-', $banner_five_name);
                $banner_five_full_name = $banner_five_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_five_full_name;
                $success = $banner_five->move(($upload_path), $banner_five_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    if($banner->banner_five && !empty($banner->banner_five)){
                        unlink(($banner->banner_five));
                    }
                    $banner->banner_five = $image_url;
                }
            }
            $banner_six = $request->file('banner_six');
            if($banner_six)
            {
                $banner_six_name= $banner_six->getClientOriginalName();
                $banner_six_name = preg_replace('/\s+/', '-', $banner_six_name);
                $banner_six_full_name = $banner_six_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_six_full_name;
                $success = $banner_six->move(($upload_path), $banner_six_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    if($banner->banner_six && !empty($banner->banner_six)){
                        unlink(($banner->banner_six));
                    }
                    $banner->banner_six = $image_url;
                }
            }
            $banner_seven = $request->file('banner_seven');
            if($banner_seven)
            {
                $banner_seven_name= $banner_seven->getClientOriginalName();
                $banner_seven_name = preg_replace('/\s+/', '-', $banner_seven_name);
                $banner_seven_full_name = $banner_seven_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_seven_full_name;
                $success = $banner_seven->move(($upload_path), $banner_seven_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    if($banner->banner_seven && !empty($banner->banner_seven)){
                        unlink(($banner->banner_seven));
                    }
                    $banner->banner_seven = $image_url;
                }
            }
            if($banner->update()){
                Toastr::success('Banner  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
            $banner=new Banner();
            $banner->banner_one_link = $request->banner_one_link;
            $banner->banner_two_link = $request->banner_two_link;
            $banner->banner_three_link = $request->banner_three_link;
            $banner->banner_four_link = $request->banner_four_link;
            $banner->banner_five_link = $request->banner_five_link;
            $banner->banner_six_link = $request->banner_six_link;
            $banner->banner_seven_link = $request->banner_seven_link;
            $banner_one = $request->file('banner_one');
            if($banner_one)
            {
                $banner_one_name= $banner_one->getClientOriginalName();
                $banner_one_name = preg_replace('/\s+/', '-', $banner_one_name);
                $banner_one_full_name = $banner_one_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_one_full_name;
                $success = $banner_one->move(($upload_path), $banner_one_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $banner->banner_one = $image_url;
                }
            }
            $banner_two = $request->file('banner_two');
            if($banner_two)
            {
                $banner_two_name= $banner_two->getClientOriginalName();
                $banner_two_name = preg_replace('/\s+/', '-', $banner_two_name);
                $banner_two_full_name = $banner_two_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_two_full_name;
                $success = $banner_two->move(($upload_path), $banner_two_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $banner->banner_two = $image_url;
                }
            }
            $banner_three = $request->file('banner_three');
            if($banner_three)
            {
                $banner_three_name= $banner_three->getClientOriginalName();
                $banner_three_name = preg_replace('/\s+/', '-', $banner_three_name);
                $banner_three_full_name = $banner_three_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_three_full_name;
                $success = $banner_three->move(($upload_path), $banner_three_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $banner->banner_three = $image_url;
                }
            }
            $banner_four = $request->file('banner_four');
            if($banner_four)
            {
                $banner_four_name= $banner_four->getClientOriginalName();
                $banner_four_name = preg_replace('/\s+/', '-', $banner_four_name);
                $banner_four_full_name = $banner_four_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_four_full_name;
                $success = $banner_four->move(($upload_path), $banner_four_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $banner->banner_four = $image_url;
                }
            }
            $banner_five = $request->file('banner_five');
            if($banner_five)
            {
                $banner_five_name= $banner_five->getClientOriginalName();
                $banner_five_name = preg_replace('/\s+/', '-', $banner_five_name);
                $banner_five_full_name = $banner_five_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_five_full_name;
                $success = $banner_five->move(($upload_path), $banner_five_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $banner->banner_five = $image_url;
                }
            }
            $banner_six = $request->file('banner_six');
            if($banner_six)
            {
                $banner_six_name= $banner_six->getClientOriginalName();
                $banner_six_name = preg_replace('/\s+/', '-', $banner_six_name);
                $banner_six_full_name = $banner_six_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_six_full_name;
                $success = $banner_six->move(($upload_path), $banner_six_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $banner->banner_six = $image_url;
                }
            }
            $banner_seven = $request->file('banner_seven');
            if($banner_seven)
            {
                $banner_seven_name= $banner_six->getClientOriginalName();
                $banner_seven_name = preg_replace('/\s+/', '-', $banner_seven_name);
                $banner_seven_full_name = $banner_seven_name;
                $upload_path = 'uploads/banners/';
                $image_url = $upload_path.$banner_seven_full_name;
                $success = $banner_six->move(($upload_path), $banner_seven_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $banner->banner_seven = $image_url;
                }
            }
            if($banner->save()){
                Toastr::success('Banner  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
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
        $data = Banner::findOrFail(decrypt($id));
        return view('admin.page.Banner.edit',compact('data'));
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
        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->order = $request->order;
       $banner->status = $request->status;
       $image = $request->file('image');
       if($image)
       {
           $image_name= $image->getClientOriginalName();
           $image_name = preg_replace('/\s+/', '-', $image_name);
           $image_full_name = $image_name;
           $upload_path = 'uploads/banners/';
           $image_url = $upload_path.$image_full_name;
           $success = $image->move(($upload_path), $image_full_name);
           // $img = Image::make($image_url)->resize(400, 200)->save();
           if($success)
           {
               $banner->image = $image_url;
           }
       }
        if($banner->Update()){
            Toastr::success('Banner has been Updated successfully :-)','Success');
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
       $banner = Banner::find($id);
        if( $banner){
           $banner->delete();
            Toastr::success('Banner  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
