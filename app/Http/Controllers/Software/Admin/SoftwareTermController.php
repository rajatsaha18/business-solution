<?php

namespace App\Http\Controllers\Software\Admin;

use App\Http\Controllers\Controller;
use App\Models\SoftwareTerm;
use Illuminate\Http\Request;
use Toastr;

class SoftwareTermController extends Controller
{

    public function index()
    {
        $data = SoftwareTerm::first();
        return view('Software.admin.Term.index', compact('data'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = SoftwareTerm::first();
        if ($data) {
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
            Toastr::success('Data updated successfully');
            return redirect()->back();
        } else {
            $data = new SoftwareTerm();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
            Toastr::success('Data saved successfully');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
