<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use Illuminate\Http\Request;
use App\Models\AboutPageFeature;
use App\Http\Controllers\Controller;
use App\Models\SoftwareAboutPageFeature;

class SoftwareAboutPageFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=SoftwareAboutPageFeature::first();
        return view('Software.admin.aboutFeature.index',compact('data'));
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
        $home = SoftwareAboutPageFeature::first();
        if($home){
            $home->content=$request->content;
            $home->meta_title=$request->meta_title;
            $home->meta_description=$request->meta_description;
           
            if($home->update()){
                Toastr::success('Data  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
           $home=new SoftwareAboutPageFeature();
           $home->content=$request->content;
           $home->meta_title=$request->meta_title;
           $home->meta_description=$request->meta_description;
            if($home->save()){
                Toastr::success('Data  has been Updated successfully :-)','Success');
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