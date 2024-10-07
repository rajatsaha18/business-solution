<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessService;
use Illuminate\Http\Request;
use Toastr;

class BusinessServiceController extends Controller
{
    public function index()
    {
        //
        $categories= BusinessService::latest()->get();
        return view('admin.business-service.index',compact('categories'));
    }

    public function create()
    {
        //
        return view('admin.business-service.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data=new BusinessService();
        $data->title=$request->title;
        $data->link=$request->link;
        $data->status=$request->status;
        $image = $request->file('image');
            if($image)
            {
                $image_name= $image->getClientOriginalName();
                $image_name = preg_replace('/\s+/', '-', $image_name);
                $image_full_name = $image_name;
                $upload_path = 'uploads/business/image/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $data->image = $image_url;
                }
            }
        if($data->save()){
            Toastr::success('Data inserted Successfully');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       $data= BusinessService::findOrFail(decrypt($id));
       return view('admin.business-service.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
        $data= BusinessService::findOrFail($id);
        $data->title=$request->title;
        $data->link=$request->link;
        $data->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/business/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        if($data->save()){
            Toastr::success('Data Updated Successfully');
            return redirect()->back();
        }


    }

    public function destroy($id)
    {
        //
        $data= BusinessService::findOrFail($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
