<?php

namespace App\Http\Controllers\Shop;

use Toastr;
use App\Models\Startup;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $startups=Startup::latest()->get();
        return view('admin.startup.index',compact('startups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.startup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Startup();
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->founder_name=$request->founder_name;
        $data->company_name=$request->company_name;
        $data->description=$request->description;
        $data->youtube=$request->youtube;
        $data->status=$request->status;
        $image_one = $request->file('image_one');
        if($image_one)
        {
            $image_name= $image_one->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_one->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image_one = $image_url;
            }
        }
        $image_two = $request->file('image_two');
        if($image_two)
        {
            $image_name= $image_two->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_two->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image_two = $image_url;
            }
        }
        $image_three = $request->file('image_three');
        if($image_three)
        {
            $image_name= $image_three->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_three->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image_three = $image_url;
            }
        }
        $data->save();
        Toastr::success('Data Insert Successfull');
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
        //
        $data=Startup::findOrFail($id);
        return view('admin.startup.edit',compact('data'));
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
        $data=Startup::find($id);
        $data->title=$request->title;
        $data->slug=Str::slug($request->title);
        $data->founder_name=$request->founder_name;
        $data->company_name=$request->company_name;
        $data->description=$request->description;
        $data->youtube=$request->youtube;
        $data->status=$request->status;
        $image_one = $request->file('image_one');
        if($image_one)
        {
            $image_name= $image_one->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_one->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image_one = $image_url;
            }
        }
        $image_two = $request->file('image_two');
        if($image_two)
        {
            $image_name= $image_two->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_two->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image_two = $image_url;
            }
        }
        $image_three = $request->file('image_three');
        if($image_three)
        {
            $image_name= $image_three->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/founder_story/';
            $image_url = $upload_path.$image_full_name;
            $success = $image_three->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image_three = $image_url;
            }
        }
        $data->save();
        Toastr::success('Data udpated Successfull');
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
        //
        $data=Startup::find($id);
       
        $data->delete();
        Toastr::success('Data delete successfull');
        return redirect()->back();
    }
}
