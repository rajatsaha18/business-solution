<?php

namespace App\Http\Controllers\Hospital;

use App\Models\HospitalBackService;
use App\Models\HospitalCategory;
use App\Models\HospitalSubCategory;
use App\Models\HospitalSubSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Toastr;

class HospitalBackServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $services = HospitalBackService::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $services = $products->where('title', 'like', '%' . $sort_search . '%');
        }
        $services = $services->get();
        $services = HospitalBackService::where('status', 1)->get();
        return view('Hospital.admin.page.backService.index', compact('services', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $subsubcategories = HospitalSubSubCategory::where('status', 1)->get();
        return view('Hospital.admin.page.backService.create', compact('categories', 'subcategories', 'subsubcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new HospitalBackService();
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->hospital_category_id = $request->category_id;
        $service->hospital_sub_category_id = $request->sub_category_id;
        $service->hospital_sub_sub_category_id = $request->sub_sub_category_id;
        // $product->hospital_color_id = $request->color_id;

        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;

        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->status = $request->status;
        $frontend_image = $request->file('frontend_image');
        if ($frontend_image) {
            $image_name = $frontend_image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/products/';
            $image_url = $upload_path . $image_full_name;
            $success = $frontend_image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $service->frontend_image = $image_url;
            }
        }


        if ($service->save()) {

            Toastr::success('Service has been Saved successfully :-)', 'Success');
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
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $subsubcategories = HospitalSubSubCategory::where('status', 1)->get();
        $data = HospitalBackService::findOrFail(decrypt($id));
        return view('Hospital.admin.page.backService.edit', compact('categories', 'subcategories', 'subsubcategories', 'data'));
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
        $service = HospitalBackService::findOrFail($id);
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->hospital_category_id = $request->category_id;
        $service->hospital_sub_category_id = $request->sub_category_id;
        $service->hospital_sub_sub_category_id = $request->sub_sub_category_id;
        // $product->color_id = $request->color_id;

        $service->short_description = $request->short_description;
        $service->long_description = $request->long_description;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->status = $request->status;
        $frontend_image = $request->file('frontend_image');
        if ($frontend_image) {
            $image_name = $frontend_image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/products/';
            $image_url = $upload_path . $image_full_name;
            $success = $frontend_image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                // if($product->frontend_image){
                //     unlink(($product->frontend_image));
                // }
                $service->frontend_image = $image_url;
            }
        }
        if ($service->Update()) {

            Toastr::success('service has been Updated successfully :-)', 'Success');
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
        $service = HospitalBackService::find($id);

        if ($service) {
            $service->delete();
            if ($service->frontend_image) {
                unlink(($service->frontend_image));
            }
            Toastr::success('Service  has been Deleted successfully :-)', 'Success');
            return redirect()->back();
        }
    }
}
