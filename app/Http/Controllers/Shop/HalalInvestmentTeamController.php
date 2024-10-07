<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Models\HalalInvestmentTeam;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HalalInvestmentTeamCategory;


class HalalInvestmentTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams=HalalInvestmentTeam::latest()->get();
        return view('admin.halal-investment-team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teamcategories=HalalInvestmentTeamCategory::where('status',1)->get();
        return view('admin.halal-investment-team.create',compact('teamcategories'));
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
        $data=new HalalInvestmentTeam();
        $data->name=$request->name;
        $data->team_category_id=$request->team_category_id;
        $data->designation=$request->designation;
        $data->description=$request->description;
        $data->status=$request->status;
        $image = $request->file('image');
            if($image)
            {
                $image_name= $image->getClientOriginalName();
                $image_name = preg_replace('/\s+/', '-', $image_name);
                $image_full_name = $image_name;
                $upload_path = 'uploads/halal-investmant/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $data->image = $image_url;
                }
            }
        
                   
        $data->save();
        Toastr::success('Data Saved Successfully');
        return  redirect()->back();
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
        $teamcategories=HalalInvestmentTeamCategory::where('status',1)->get();
        $data=HalalInvestmentTeam::findOrFail(decrypt($id));
        return view('admin.halal-investment-team.edit',compact('teamcategories','data'));
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
        $data=HalalInvestmentTeam::find($id);
        $data->name=$request->name;
        $data->team_category_id=$request->team_category_id;
        $data->designation=$request->designation;
        $data->description=$request->description;
        $data->status=$request->status;
        $image = $request->file('image');
            if($image)
            {
                $image_name= $image->getClientOriginalName();
                $image_name = preg_replace('/\s+/', '-', $image_name);
                $image_full_name = $image_name;
                $upload_path = 'uploads/halal-invesement/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $data->image = $image_url;
                }
            }
        $data->save();
        Toastr::success('Data Updated Successfully');
        return  redirect()->back();
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
        $data=HalalInvestmentTeam::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
