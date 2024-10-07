<?php

namespace App\Http\Controllers\Shop;

use Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HalalInvestmentSetting;

class HalalInvestmentSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $businessSiteSetting = HalalInvestmentSetting::first();
        $data = HalalInvestmentSetting::first();
        return view('admin.halal-investment-setting.index', compact('data', 'businessSiteSetting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = HalalInvestmentSetting::first();
        if ($data) {
            $data->mission = $request->mission;
            $data->vision = $request->vision;
            $data->terms_of_use = $request->terms_of_use;
            $data->privacy_policy = $request->privacy_policy;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->map = $request->map;
            $data->financed = $request->financed;
            $data->investment = $request->investment;
            $data->repayment_completed = $request->repayment_completed;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keywords = $request->meta_keywords;

            $image = $request->file('mission_image');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $data->mission_image = $image_url;
                }
            }
            $image = $request->file('vision_image');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $data->vision_image = $image_url;
                }
            }

            $data->save();
            Toastr::success('Data Updated Successfully');
            return redirect()->back();
        } else {
            $data = new HalalInvestmentSetting();
            $data->mission = $request->mission;
            $data->vision = $request->vision;
            $data->terms_of_use = $request->terms_of_use;
            $data->privacy_policy = $request->privacy_policy;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->map = $request->map;
            $data->financed = $request->financed;
            $data->investment = $request->investment;
            $data->repayment_completed = $request->repayment_completed;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keywords = $request->meta_keywords;


            $image = $request->file('mission_image');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $data->mission_image = $image_url;
                }
            }
            $image = $request->file('vision_image');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $data->vision_image = $image_url;
                }
            }
            $data->save();
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
    }
}
