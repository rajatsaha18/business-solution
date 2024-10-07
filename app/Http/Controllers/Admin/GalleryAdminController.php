<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewGallery;
use Illuminate\Http\Request;

class GalleryAdminController extends Controller
{
    private $galleries;
    private $gallery;
    public function index()
    {
        $this->galleries = NewGallery::all();
        return view('admin.business.gallery.index',['galleries' => $this->galleries]);
    }
    public function create()
    {

        return view('admin.business.gallery.create');
    }
    public function galleryAdd(Request $request)
    {
        NewGallery::newGallery($request);
        return redirect()->back()->with('message','Gallery Save Successfully');

    }
    public function edit($id)
    {
        $this->gallery = NewGallery::find($id);
        return view('admin.business.gallery.edit',['gallery' => $this->gallery]);

    }
    public function update(Request $request, $id)
    {
        NewGallery::updateGallery($request,$id);
        return redirect()->back()->with('message','Gallery Update Successfully');

    }
    public function delete($id)
    {
        NewGallery::deleteGallery($id);
        return redirect()->back()->with('message','Gallery Delete Successfully');

    }
}
