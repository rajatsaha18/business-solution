<?php

namespace App\Http\Controllers\Software\Admin;

use Illuminate\Http\Request;
use App\Models\SliderSoftware;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SoftwareSliderController extends Controller
{
    public function index()
    {
        $sliders = SliderSoftware::all();
        return view('Software.admin.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('Software.admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);
        SliderSoftware::newSlider($request);
        Toastr::success('Slider has been Saved successfully :-)','Success');
        return redirect()->back();
    }

    public function editSlider($id)
    {
        $slider = SliderSoftware::find($id);
        return view('Software.admin.slider.edit',compact('slider'));
    }

    public function updateSlider(Request $request,$id)
    {
        SliderSoftware::updateSlider($request,$id);
        Toastr::success('Slider has been Update successfully :-)','Success');
        return redirect()->back();
    }

    public function deleteSlider($id)
    {
        SliderSoftware::deleteSlider($id);
        Toastr::success('Slider has been Delete successfully :-)','Success');
        return redirect()->back();
    }
}
