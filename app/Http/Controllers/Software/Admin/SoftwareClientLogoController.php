<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Image;
use Toastr;
use App\Models\ClientLogo;
use Illuminate\Http\Request;
use App\Models\SoftwareClientLogo;
use App\Http\Controllers\Controller;

class SoftwareClientLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client_logo = SoftwareClientLogo::get();
        return view('Software.admin.clientlogo.index',compact('client_logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Software.admin.clientlogo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new SoftwareClientLogo();
        $review->name = $request->name;
        $review->link = $request->link;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/client/logo/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(72, 24)->save();
            if($success)
            {
                $review->logo = $image_url;
            }
        }
        $review->status = $request->status;
        if($review->save()){
            Toastr::success('Review has been Saved successfully :-)','Success');
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
        $data = SoftwareClientLogo::findOrFail(decrypt($id));
        return view('Software.admin.clientlogo.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $review = SoftwareClientLogo::find($id);
        $review->name = $request->name;
        $review->link = $request->link;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/client/logo/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(72, 24)->save();
            if($success)
            {
                $review->logo = $image_url;
            }
        }
        $review->status = $request->status;
        if($review->save()){
            Toastr::success('Review has been Saved successfully :-)','Success');
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
        $logo = SoftwareClientLogo::find($id);
        if($logo){
            $logo->delete();
            Toastr::success('Client Logo has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
