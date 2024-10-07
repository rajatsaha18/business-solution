<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;
use Toastr;
use App\Models\WhoWe;
use Illuminate\Http\Request;
use App\Models\SoftwareWhoWe;
use App\Http\Controllers\Controller;

class SoftwareWhoWeController extends Controller
{
   
    public function index()
    {
        $data=SoftwareWhoWe::first();
        return view('Software.admin.Who-We.index',compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=SoftwareWhoWe::first();
       if($data){
        $data->title=$request->title;
        $data->description=$request->description;
        $data->save();
        Toastr::success('Data updated successfully');
        return redirect()->back();
       }
       else{
        $data=new SoftwareWhoWe();
        $data->title=$request->title;
        $data->description=$request->description;
        $data->save();
        Toastr::success('Data saved successfully');
        return redirect()->back();
       }
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
