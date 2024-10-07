<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Str;
use Toastr;
use App\Models\Team;
use App\Models\SoftwareTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoftwareTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = SoftwareTeam::orderBy('id', 'desc')->get();
        return view('Software.admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Software.admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);
        $team = new SoftwareTeam();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->order = $request->order;
        $team->short_details = $request->short_details;
        $team->facebook = $request->facebook;
        $team->status = $request->status;
        $team->instragram = $request->instragram;
        $team->twitter = $request->twitter;
        $team->linkdin = $request->linkdin;
        $slug = Str::slug($request->name, '-');
        if ($slug == '') {
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $team->slug = $slug;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/teams/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $team->image = $image_url;
            }
        }
        if ($team->save()) {
            Toastr::success('Team has been Saved successfully :-)', 'Success');
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
        $data = SoftwareTeam::findOrFail(decrypt($id));
        return view('Software.admin.team.edit', compact('data'));
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
        $team = SoftwareTeam::find($id);
        $team->name = $request->name;
        $team->order = $request->order;
        $team->designation = $request->designation;
        $team->short_details = $request->short_details;
        $team->facebook = $request->facebook;
        $team->status = $request->status;
        $team->instragram = $request->instragram;
        $team->twitter = $request->twitter;
        $team->linkdin = $request->linkdin;
        $slug = Str::slug($request->name, '-');
        if ($slug == '') {
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $team->slug = $slug;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/teams/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $team->image = $image_url;
            }
        }
        if ($team->save()) {
            Toastr::success('Team has been Updated successfully :-)', 'Success');
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
        $team = SoftwareTeam::find($id);
        if ($team) {
            $team->delete();
            Toastr::success('Team has been Deleted successfully :-)', 'Success');
            return redirect()->back();
        }
    }
}
