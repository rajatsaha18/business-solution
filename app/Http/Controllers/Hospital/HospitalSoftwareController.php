<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HospitalSoftware;
use Toastr;

class HospitalSoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $software = HospitalSoftware::orderBy('id', 'desc')->get();
        return view('Hospital.admin.page.software.index', compact('software'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hospital.admin.page.software.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new HospitalSoftware();
        $data->name = $request->name;
        $data->type = $request->type;
        $data->status = $request->status;
        $data->description = $request->description;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/gallery/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->image = $image_url;
            }
        }
        if ($data->save()) {
            Toastr::success('Data  has been Saved successfully :-)', 'Success');
            return redirect()->back();
        } else {
            Toastr::error('Something went wrong :-)', 'Error');
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
        $data = HospitalSoftware::findOrFail(decrypt($id));
        return view('Hospital.admin.page.software.edit', compact('data'));
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
        $data = HospitalSoftware::find($id);
        $data->name = $request->name;
        $data->type = $request->type;
        $data->description = $request->description;
        $data->status = $request->status;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/gallery/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $data->image = $image_url;
            }
        }
        if ($data->save()) {
            Toastr::success('Data  has been Updated successfully :-)', 'Success');
            return redirect()->back();
        } else {
            Toastr::error('Something went wrong :-)', 'Error');
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
        $data = HospitalSoftware::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
