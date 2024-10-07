<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HospitalNewsLatest;
use Str;
use Auth;
use Toastr;

class HospitalLatestNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = HospitalNewsLatest::orderBy('id','desc')->get();
        return view('Hospital.admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hospital.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new HospitalNewsLatest();
        $news->title = $request->title;
        $news->author_name = Auth::user()->name;
        $news->short_description = $request->short_description;
        $news->long_description = $request->long_description;
        $news->status = $request->status;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        // $slug = Str::slug($request->title, '-');
        //     if($slug == ''){
        //         $slug =  preg_replace('/\s+/u', '-', trim($request->title));
        //         $slug = preg_replace('/[&]/', '-and-', $slug);
        //         $slug = preg_replace('/[;]/', '-and-', $slug);
        // }
       function make_slug($string) {
    return preg_replace('/\s+/u', '-', trim($string));
    }
    $news->slug = make_slug($request->title);
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $news->image = $image_url;
            }
        }
        if($news->save()){
            Toastr::success('News has been Saved successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
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
        $data = HospitalNewsLatest::findOrFail(decrypt($id));
        return view('Hospital.admin.news.edit',compact('data'));
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
        $news = HospitalNewsLatest::find($id);
        $news->title = $request->title;
        $news->author_name = Auth::user()->name;
        $news->short_description = $request->short_description;
        $news->long_description = $request->long_description;
        $news->status = $request->status;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        // $slug = Str::slug($request->title, '-');
        //     if($slug == ''){
        //         $slug =  preg_replace('/\s+/u', '-', trim($request->title));
        //         $slug = preg_replace('/[&]/', '-and-', $slug);
        //         $slug = preg_replace('/[;]/', '-and-', $slug);
        // }
        function make_slug($string) {
    return preg_replace('/\s+/u', '-', trim($string));
}
       $news->slug = make_slug($request->title);
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($category->image){
                //     unlink(($category->image));
                // }
                $news->image = $image_url;
            }
        }
        if($news->save()){
            Toastr::success('News has been Updated successfully :-)','Success');
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
        $news = HospitalNewsLatest::find($id);
        if($news){
            $news->delete();
            // if($blog->image){
            //     unlink(($blog->image));
            // }
            Toastr::success('News has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
