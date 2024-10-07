<?php

namespace App\Http\Controllers\Shop;

use Toastr;
use App\Models\FSInterview;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FSInterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $interviews=FSInterview::latest()->get();
        return view('admin.fs_interview.index',compact('interviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fs_interview.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new FSInterview();
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->founder_name=$request->founder_name;
        $data->company_name=$request->company_name;
        $data->description=$request->description;
        $data->video=$request->video;
        $data->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        $data->save();
        Toastr::success('Data Inserted successfully');
        return redirect()->back();
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
        $data=FSInterview::findOrFail($id);
        return view('admin.fs_interview.edit',compact('data'));
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
        $data=FSInterview::find($id);
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->founder_name=$request->founder_name;
        $data->company_name=$request->company_name;
        $data->description=$request->description;
        $data->video=$request->video;
        $data->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        $data->save();
        Toastr::success('Data Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=FSInterview::findOrFail($id);
        
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
