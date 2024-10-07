<?php

namespace App\Http\Controllers\Hospital;

use App\Models\HospitalCategory;
use App\Models\HospitalSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Toastr;

class HospitalSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //
        $sort_search = null;
        $subcategories = HospitalSubCategory::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $subcategories = $subcategories->where('name', 'like', '%' . $sort_search . '%');
        }
        $subcategories =  $subcategories->get();
        return view('Hospital.admin.page.Subcategory.index', compact('sort_search', 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = HospitalCategory::where('status', '1')->get();
        return view('Hospital.admin.page.Subcategory.create', compact('categories'));
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

        $subcategory = new HospitalSubCategory();
        $subcategory->name = $request->name;
        $subcategory->slug = Str::slug($request->name);
        $subcategory->hospital_category_id = $request->category_id;
        $subcategory->order = $request->order;
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $subcategory->status = $request->status;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/subcategories/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move(($upload_path), $image_full_name);

            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $subcategory->image = $image_url;
            }
        }
        if ($subcategory->save()) {
            Toastr::success('SubCategory  has been Saved successfully :-)', 'Success');
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
        $categories = HospitalCategory::where('status', '1')->get();

        $data = HospitalSubCategory::findOrFail(decrypt($id));
        return view('Hospital.admin.page.Subcategory.edit', compact('data', 'categories'));
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
        $subcategory = HospitalSubCategory::findOrFail($id);
        $subcategory->name = $request->name;
        $subcategory->hospital_category_id = $request->category_id;
        $subcategory->order = $request->order;
        $subcategory->meta_title = $request->meta_title;
        $subcategory->meta_description = $request->meta_description;
        $subcategory->status = $request->status;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/subcategories/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move(($upload_path), $image_full_name);

            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                if ($subcategory->image) {
                    unlink(($subcategory->image));
                }
                $subcategory->image = $image_url;
            }
        }
        if ($subcategory->Update()) {
            Toastr::success('SubCategory has been Updated successfully :-)', 'Success');
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
        $subcategory = HospitalSubCategory::find($id);
        if ($subcategory) {
            
            if ($subcategory->image) {
                unlink(($subcategory->image));
            }
            $subcategory->delete();
            Toastr::success('SubCategory  has been Deleted successfully :-)', 'Success');
            return redirect()->back();
        }
    }
}
