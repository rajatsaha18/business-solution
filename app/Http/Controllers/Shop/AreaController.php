<?php

namespace App\Http\Controllers\Shop;

use App\AdvertisePost;
use App\Area;
use App\District;
use App\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::get();
        return view('admin.area.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::orderBy('name')->get();
        return view('admin.area.create',compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area = new Area();
        $area->district_id = $request->district_id;
        $area->name = $request->name;
        if($area->save()){
            Toastr::success('Area has been Added successfully :-)','Success');
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
        $data = Area::findOrFail(decrypt($id));
        $districts = District::orderBy('name')->get();
        return view('admin.area.edit',compact('data','districts'));
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
        $area = Area::find($id);
        $area->district_id = $request->district_id;
        $area->name = $request->name;
        if($area->save()){
            Toastr::success('Area has been Updated successfully :-)','Success');
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
        $area = Area::findOrFail($id);
        $advertise = AdvertisePost::where('area_id', $area->id)->first();
        if($advertise){
            Toastr::error('This Area has another Table :-)','Error');
            return redirect()->back();
        }else{
            $area->delete();
            Toastr::success('Area has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
    public function division(){
        $divisions = Division::get();
        return view('admin.area.division',compact('divisions'));
    }
    public function district(){
        $districts = District::get();
        return view('admin.area.district',compact('districts'));
    }

}
