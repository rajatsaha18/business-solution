<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Str;
use Toastr;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\SoftwareService;
use App\Http\Controllers\Controller;

class SoftwareServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = SoftwareService::orderBy('id','desc')->get();
        return view('Software.admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Software.admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qn = new SoftwareService();
        $qn->title = $request->title;
        $slug = Str::slug($request->title, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->title));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $qn->slug = $slug;
        $image = $request->file('icon');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/project/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $qn->icon = $image_url;
            }
        }
        $qn->short_description = $request->short_description;
        $qn->font_icon = $request->font_icon;
        $qn->meta_title=$request->meta_title;
        $qn->meta_description=$request->meta_description;
        $qn->status = $request->status;
        if($qn->save()){
            Toastr::success('Services has been Saved successfully :-)','Success');
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
        $data = SoftwareService::findOrFail(decrypt($id));;
        return view('Software.admin.service.edit',compact('data'));
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
        $qn = SoftwareService::find($id);
        $qn->title = $request->title;
        $image = $request->file('icon');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/project/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $qn->icon = $image_url;
            }
        }
        $qn->font_icon = $request->font_icon;
        $qn->short_description = $request->short_description;
        $qn->meta_title=$request->meta_title;
        $qn->meta_description=$request->meta_description;
        $qn->status = $request->status;
        if($qn->save()){
            Toastr::success('Services has been Updated successfully :-)','Success');
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
        $service = SoftwareService::find($id);
        if($service){
            $service->delete();
            Toastr::success('Service has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
