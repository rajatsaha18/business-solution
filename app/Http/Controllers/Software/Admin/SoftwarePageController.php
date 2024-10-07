<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\Page;
use Nette\Utils\Image;
use Illuminate\Support\Str;
use App\Models\PageCategory;
use App\Models\SoftwarePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SoftwarePageCategory;

class SoftwarePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $pages = SoftwarePage::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $pages = $pages->where('name', 'like', '%' . $sort_search . '%');
        }
        $pages = $pages->paginate(15);
        return view('Software.admin.page.index', compact('pages', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = SoftwarePageCategory::where('status', 1)->get();
        return view('Software.admin.page.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new SoftwarePage();
        $category->name = $request->name;
        $category->about = $request->about;
        $category->why_need_it = $request->why_need_it;
        if ($request->benefits) {
            $category->benefits = json_encode($request->benefits);
        } else {
            $category->benefits = [];
        }

        $category->category_id = $request->category_id;
        $category->link = $request->link;
        $category->description = $request->description;
        $category->basic_price = $request->basic_price;
        $category->advance_price = $request->advance_price;
        $category->video = $request->video;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;

        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if ($slug == '') {
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $category->image = $image_url;
            }
        }
        $brochure = $request->file('brochure');
        if ($brochure) {
            $brochure_name = $brochure->getClientOriginalName();
            $brochure_name = preg_replace('/\s+/', '-', $brochure_name);
            $brochure_full_name = $brochure_name;
            $upload_path = 'uploads/categories/brochure/';
            $brochure_url = $upload_path . $brochure_full_name;
            $success = $brochure->move($upload_path, $brochure_full_name);
            // $img = brochure::make($brochure_url)->resize(400, 200)->save();
            if ($success) {
                $category->brochure = $brochure_url;
            }
        }
        $user_manual = $request->file('user_manual');
        if ($user_manual) {
            $user_manual_name = $user_manual->getClientOriginalName();
            $user_manual_name = preg_replace('/\s+/', '-', $user_manual_name);
            $user_manual_full_name = $user_manual_name;
            $upload_path = 'uploads/categories/user_manual/';
            $user_manual_url = $upload_path . $user_manual_full_name;
            $success = $user_manual->move($upload_path, $user_manual_full_name);
            // $img = user_manual::make($user_manual_url)->resize(400, 200)->save();
            if ($success) {
                $category->user_manual = $user_manual_url;
            }
        }
        if ($category->save()) {
            Toastr::success('Page has been Saved successfully :-)', 'Success');
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
        $categories = SoftwarePageCategory::where('status', 1)->get();
        $data = SoftwarePage::findOrFail(decrypt($id));
        return view('Software.admin.page.edit', compact('categories', 'data'));
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
        $category = SoftwarePage::findOrFail($id);
        $category->name = $request->name;
        $category->about = $request->about;
        $category->why_need_it = $request->why_need_it;
        if ($request->benefits) {
            $category->benefits = json_encode($request->benefits);
        } else {
            $category->benefits = [];
        }
        $category->category_id = $request->category_id;
        $category->link = $request->link;
        $category->description = $request->description;
        $category->basic_price = $request->basic_price;
        $category->advance_price = $request->advance_price;
        $category->video = $request->video;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
        if ($slug == '') {
            $slug =  preg_replace('/\s+/u', '-', trim($request->name));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category->slug = $slug;
        $image = $request->file('image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $image = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $category->image = $image_url;
            }
        }
        $brochure = $request->file('brochure');
        if ($brochure) {
            $brochure_name = $brochure->getClientOriginalName();
            $brochure_name = preg_replace('/\s+/', '-', $brochure_name);
            $brochure_full_name = $brochure_name;
            $upload_path = 'uploads/categories/brochure/';
            $brochure_url = $upload_path . $brochure_full_name;
            $success = $brochure->move($upload_path, $brochure_full_name);
            // $brochure = brochure::make($brochure_url)->resize(400, 200)->save();
            if ($success) {
                $category->brochure = $brochure_url;
            }
        }
        $user_manual = $request->file('user_manual');
        if ($user_manual) {
            $user_manual_name = $user_manual->getClientOriginalName();
            $user_manual_name = preg_replace('/\s+/', '-', $user_manual_name);
            $user_manual_full_name = $user_manual_name;
            $upload_path = 'uploads/categories/user_manual/';
            $user_manual_url = $upload_path . $user_manual_full_name;
            $success = $user_manual->move($upload_path, $user_manual_full_name);
            // $user_manual = user_manual::make($user_manual_url)->resize(400, 200)->save();
            if ($success) {
                $category->user_manual = $user_manual_url;
            }
        }
        $category->status = $request->status;
        if ($category->Update()) {
            Toastr::success('Page has been Updated successfully :-)', 'Success');
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
        $page = SoftwarePage::find($id);
        if ($page) {
            $page->delete();
            Toastr::success('Page has been Deleted successfully :-)', 'Success');
            return redirect()->back();
        }
    }
}
