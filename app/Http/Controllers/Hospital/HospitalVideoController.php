<?php

namespace App\Http\Controllers\Hospital;

use App\Models\HospitalVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class HospitalVideoController extends Controller
{

    public function index(Request $request)
    {
        $sort_search = null;
        $videos = HospitalVideo::latest()->get();



        return view('Hospital.admin.page.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Hospital.admin.page.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cor_videos = new HospitalVideo();
        $cor_videos->title = $request->title;
        $cor_videos->video_url = $request->video_url;

        $cor_videos->status = $request->status;
        if ($cor_videos->save()) {
            Toastr::success('Video has been Saved successfully :-)', 'Success');
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
        $data = HospitalVideo::findOrFail(decrypt($id));
        return view('Hospital.admin.page.video.edit', compact('data'));
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
        $cor_videos = HospitalVideo::findOrFail($id);
        $cor_videos->title = $request->title;
        $cor_videos->status = $request->status;
        $cor_videos->video_url = $request->video_url;
        if ($cor_videos->Update()) {
            Toastr::success('Corporate Video has been Updated successfully :-)', 'Success');
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
        $cor_videos = HospitalVideo::find($id);
        if ($cor_videos) {
            $cor_videos->delete();
            Toastr::success('Corporate videos  has been Deleted successfully :-)', 'Success');
            return redirect()->back();
        }
    }
}
