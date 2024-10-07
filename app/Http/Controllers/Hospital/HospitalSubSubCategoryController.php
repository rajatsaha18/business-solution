<?php

namespace App\Http\Controllers\Hospital;

use Toastr;
use App\Models\HospitalSubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HospitalSubSubCategory;
use App\Http\Controllers\Controller;

class HospitalSubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $SubSubCategories = HospitalSubSubCategory::latest()->get();
        return view('Hospital.admin.page.subsubcategory.index', compact('SubSubCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subcategories = HospitalSubCategory::where('status', 1)->get();
        return view('Hospital.admin.page.subsubcategory.create', compact('subcategories'));
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
        $data = new HospitalSubSubCategory();
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->hospital_sub_category_id = $request->subcategory_id;
        $data->status = $request->status;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        if ($data->save()) {
            Toastr::success('Data has been Saved successfully :-)', 'Success');
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
        $data = HospitalSubSubCategory::findOrFail(decrypt($id));
        $subcategories = HospitalSubCategory::where('status', 1)->get();

        return view('Hospital.admin.page.subsubcategory.edit', compact('data', 'subcategories'));
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
        $data = HospitalSubSubCategory::find($id);
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->hospital_sub_category_id = $request->subcategory_id;
        $data->status = $request->status;
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        if ($data->save()) {
            Toastr::success('Data has been Updated successfully :-)', 'Success');
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
        $data = HospitalSubSubCategory::find($id);
        $data->delete();
        Toastr::success('Date deleted successfully');
        return redirect()->back();
    }
}
