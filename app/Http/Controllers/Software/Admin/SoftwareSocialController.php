<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Models\SoftwareSocial;
use App\Http\Controllers\Controller;

class SoftwareSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $social = SoftwareSocial::first();
        if($social){
            $qn = SoftwareSocial::first();
            $qn->dribble = $request->dribble;
            $qn->benance = $request->benance;
            $qn->facebook = $request->facebook;
            $qn->youtube = $request->youtube;
            $qn->twitter = $request->twitter;
            $qn->linkdin = $request->linkdin;
            $qn->email = $request->email;
            if($qn->save()){
                Toastr::success('Social has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }else{
            $qn = new SoftwareSocial();
            $qn->dribble = $request->dribble;
            $qn->benance = $request->benance;
            $qn->facebook = $request->facebook;
            $qn->youtube = $request->youtube;
            $qn->twitter = $request->twitter;
            $qn->linkdin = $request->linkdin;
            $qn->email = $request->email;
            if($qn->save()){
                Toastr::success('Social has been Saved successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
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
        //
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
        $qn = SoftwareSocial::find($id);
        $qn->dribble = $request->dribble;
        $qn->benance = $request->benance;
        $qn->facebook = $request->facebook;
        $qn->youtube = $request->youtube;
        $qn->twitter = $request->twitter;
        $qn->linkdin = $request->linkdin;
        $qn->email = $request->email;
        if($qn->save()){
            Toastr::success('Social has been Updated successfully :-)','Success');
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
        //
    }
}
