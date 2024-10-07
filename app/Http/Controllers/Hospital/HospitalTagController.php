<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HospitalProductTag;

class HospitalTagController extends Controller
{
    public function index()
    {
        return view('Hospital.admin.tag.index');
    }
    public function store(Request $request)
    {
        $tag = new HospitalProductTag();
        $tag->tag_name = $request->tag_name;
        $tag->save();
        return redirect()->back();
    }
}
