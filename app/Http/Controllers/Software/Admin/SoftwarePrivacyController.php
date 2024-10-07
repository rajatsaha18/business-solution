<?php

namespace App\Http\Controllers\Software\Admin;

use Illuminate\Http\Request;
use App\Models\SoftwarePrivacy;
use App\Http\Controllers\Controller;
use Toastr;

class SoftwarePrivacyController extends Controller
{

    public function index()
    {
        $data = SoftwarePrivacy::first();
        return view('Software.admin.Privacy.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = SoftwarePrivacy::first();
        if ($data) {
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
            Toastr::success('Data updated successfully');
            return redirect()->back();
        } else {
            $data = new SoftwarePrivacy();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
            Toastr::success('Data saved successfully');
            return redirect()->back();
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
