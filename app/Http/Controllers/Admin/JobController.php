<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplied;
use Illuminate\Http\Request;
use Toastr;
use Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('id','desc')->get();
        return view('admin.job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job();
        $job->title = $request->title;
        $job->company_name = $request->company_name;
        $job->address = $request->address;
        $job->job_type = $request->job_type;
        $job->salary_range = $request->salary_range;
        $job->company_name = $request->company_name;
        $job->description = $request->description;
        $job->status = $request->status;
        $job->meta_title = $request->meta_title;
        $job->meta_description = $request->meta_description;
        $slug = Str::slug($request->title, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->title));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $job->slug = $slug;
        $image = $request->file('logo');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/job/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $job->logo = $image_url;
            }
        }
        if($job->save()){
            Toastr::success('Job has been Saved successfully :-)','Success');
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
        $data = Job::findOrFail(decrypt($id));
        return view('admin.job.edit',compact('data'));
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
        $job = Job::find($id);
        $job->title = $request->title;
        $job->company_name = $request->company_name;
        $job->address = $request->address;
        $job->job_type = $request->job_type;
        $job->salary_range = $request->salary_range;
        $job->company_name = $request->company_name;
        $job->description = $request->description;
        $job->status = $request->status;
        $job->meta_title = $request->meta_title;
        $job->meta_description = $request->meta_description;
        $slug = Str::slug($request->title, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->title));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $job->slug = $slug;
        $image = $request->file('logo');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/job/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $job->logo = $image_url;
            }
        }
        if($job->update()){
            Toastr::success('Job has been Update successfully :-)','Success');
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
        $job = Job::find($id);
        if($job){
            $job->delete();
            Toastr::success('Job has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
    public function applied_job(){
        $applied_jobs = JobApplied::orderBy('id','desc')->get();
        return view('admin.job.applied_job',compact('applied_jobs'));
    }
}
