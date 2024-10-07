<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\Campus;
use Illuminate\Http\Request;
use App\Models\CampusAmbassador;
use App\Http\Controllers\Controller;
use App\Models\SoftwareCampusAmbassador;

class SoftwareCampusController extends Controller
{
    public function index(){
        $campus = SoftwareCampusAmbassador::all();
        return view('Software.admin.campus.index',compact('campus'));
    }
    public function destroy($id)
    {
        $campus = SoftwareCampusAmbassador::find($id);
        $campus->delete();
        return redirect()->back();
    }
}
