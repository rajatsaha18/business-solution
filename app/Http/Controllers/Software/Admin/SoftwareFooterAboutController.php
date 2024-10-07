<?php

namespace App\Http\Controllers\Software\Admin;

use App\Http\Controllers\Controller;
use App\Models\SoftwareFooterAbout;
use Illuminate\Http\Request;

use Toastr;

class SoftwareFooterAboutController extends Controller
{

    public function index()
    {
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $footer = SoftwareFooterAbout::first();
        if ($footer) {
            $elements = SoftwareFooterAbout::first();
            $elements->about = $request->about;
            $elements->copyright = $request->copyright;

            if ($elements->save()) {
                Toastr::success('Footer has been Updated successfully :-)', 'Success');
                return redirect()->back();
            } else {
                Toastr::error('Something went wrong :-)', 'Error');
                return redirect()->back();
            }
        } else {
            $elements = new SoftwareFooterAbout();
            $elements->about = $request->about;
            $elements->copyright = $request->copyright;

            if ($elements->save()) {
                Toastr::success('Footer has been Saved successfully :-)', 'Success');
                return redirect()->back();
            } else {
                Toastr::error('Something went wrong :-)', 'Error');
                return redirect()->back();
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
