<?php

namespace App\Http\Controllers\Hospital;

use App\Models\HospitalUserContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class HospitalUserContactHandleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_contacts=HospitalUserContact::latest()->get();
        return view('Hospital.admin.page.Usercontact.index',compact('user_contacts'));
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
        $data=HospitalUserContact::findOrFail(decrypt($id));
        return view('Hospital.admin.page.Usercontact.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        //
        $data=HospitalUserContact::findOrFail($id);
        $data->status=$request->status;
        if($data->update()){
            Toastr::success('User Contact has been Updated successfully :-)','Success');
            return redirect()->route('admin.hospital-usercontact.index');
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
        $data=HospitalUserContact::findOrFail($id);
        if($data){
            $data->delete();
            Toastr::success('UserContact  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
