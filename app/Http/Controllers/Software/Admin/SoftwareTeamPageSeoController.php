<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\TeamPageSeo;
use Illuminate\Http\Request;
use App\Models\SoftwareTeamPageSeo;
use App\Http\Controllers\Controller;

class SoftwareTeamPageSeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=SoftwareTeamPageSeo::first();
        return view('Software.admin.team-page-seo.index',compact('data'));
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
        //
       $data=SoftwareTeamPageSeo::first();
       if($data){
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        $data->meta_keyword=$request->meta_keyword;
        $data->short_description=$request->short_description;
        $data->save();
        Toastr::success('Data updated successfully');
        return redirect()->back();
       }
       else{
        $data=new SoftwareTeamPageSeo();
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        $data->meta_keyword=$request->meta_keyword;
        $data->short_description=$request->short_description;
        $data->save();
        Toastr::success('Data saved successfully');
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
        //
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