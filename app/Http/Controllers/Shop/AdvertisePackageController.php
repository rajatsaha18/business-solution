<?php

namespace App\Http\Controllers\Shop;

use Toastr;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AdvertisePackage;
use App\Http\Controllers\Controller;

class AdvertisePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $advertise_packages = AdvertisePackage::where('status', 1)->get();
        return view('admin.advertise.package.index', compact('advertise_packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.advertise.package.create');
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
        $data = new AdvertisePackage();
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->number_of_advertise = $request->number_of_advertise;
        $data->amount = $request->amount;
        $data->day_limit = $request->day_limit;
        $data->description = $request->description;
        $data->status = $request->status;
        if ($data->save()) {
            Toastr::success('Advertise Package has been inserted successfully :-)', 'Success');
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
        //
        $data = AdvertisePackage::findOrFail(decrypt($id));
        return view('admin.advertise.package.edit', compact('data'));
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
        $data = AdvertisePackage::findOrFail($id);
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->number_of_advertise = $request->number_of_advertise;
        $data->amount = $request->amount;
        $data->day_limit = $request->day_limit;
        $data->description = $request->description;
        $data->status = $request->status;
        if ($data->save()) {
            $users = User::where('package_id', $id)->get();
            foreach ($users as $user) {
                $us = User::where('id', $user->id)->first();
                $us->Advertise_limit = $request->number_of_advertise;
                $us->day_limit = $request->day_limit;
                $us->save();
            }

            Toastr::success('Advertise Package has been Updated successfully :-)', 'Success');
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
        //
        $data = AdvertisePackage::findOrFail($id);
        $data->delete();
        Toastr::success('Advertise Package has been Deleted successfully :-)', 'Success');
        return redirect()->back();
    }
}
