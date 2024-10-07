<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::latest()->get();

        return view('admin.page.Slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page.Slider.create');
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


        $slider = new Slider();
        $slider->slider_text = $request->slider_text;
        $slider->slider_p_text = $request->slider_p_text;
        $slider->slider_button_text = $request->slider_button_text;
        $slider->slider_link = $request->slider_link;
        $slider->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/sliders/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $slider->image = $image_url;
            }
        }
        if($slider->save()){
            Toastr::success('slider  has been Saved successfully :-)','Success');
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
        $data = slider::findOrFail(decrypt($id));
        return view('admin.page.Slider.edit',compact('data'));
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
        $slider = Slider::findOrFail($id);
        $slider->slider_text = $request->slider_text;
        $slider->slider_p_text = $request->slider_p_text;
        $slider->slider_button_text = $request->slider_button_text;
        $slider->slider_link = $request->slider_link;
        $slider->status=$request->status;

        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/sliders/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                if($slider->image){
                    unlink(($slider->image));
                }
                $slider->image = $image_url;
            }
        }
        if($slider->Update()){
            Toastr::success('slider has been Updated successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
       $slider = Slider::findOrFail($id);
        if( $slider){
            $slider->delete();
            if($slider->image){
                unlink(($slider->image));
            }
            Toastr::success('Slider  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
