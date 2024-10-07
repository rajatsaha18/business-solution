<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutWhoDesc;
use Illuminate\Http\Request;

class SoftwareAboutWhoDescController extends Controller
{
    
    public function index()
    {
        // $who_desc = AboutWhoDesc::get();
        // return view('admin.whatwedo.index', compact('who_desc'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }
    // public function edit(About $about)
    // {
    //     return view('admin.About.edit', compact('about'));
    // }
    public function edit(AboutWhoDesc $data, $id)
    {
        // $data = AboutWhoDesc:
        // return view('admin.whatwedo.edit', compact('data'));
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
