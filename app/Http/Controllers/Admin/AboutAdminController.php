<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutAdmin;
use Illuminate\Http\Request;
use Session;

class AboutAdminController extends Controller
{
    private $abouts;
    private $about;
    public function index()
    {
        $this->abouts = AboutAdmin::all();
        return view('admin.business.about.index',['abouts' => $this->abouts]);
    }
    public function create()
    {
        return view('admin.business.about.create');
    }
    public function aboutNew(Request $request)
    {
        AboutAdmin::newAbout($request);
        return redirect()->back()->with('message','About Save Successfully');

    }
    public function edit($id)
    {
        $this->about = AboutAdmin::find($id);
        return view('admin.business.about.edit',['about' => $this->about]);

    }
    public function update(Request $request, $id)
    {
        AboutAdmin::updateAbout($id,$request);
        return redirect()->back()->with('message', 'About Update Successfully');

    }
    public function delete($id)
    {
        AboutAdmin::deleteAbout($id);
        return redirect()->back()->with('message', 'About Delete Successfully');

    }
}
