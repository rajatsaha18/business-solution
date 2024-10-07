<?php

namespace App\Http\Controllers\Hospital;

use Illuminate\Http\Request;
use App\Models\HospitalDesign;
use App\Models\HospitalBackService;
use App\Models\HospitalSoftware;

class HospitalServiceController extends Controller
{
    public function index()
    {
        $designs = HospitalDesign::all();
        return view('Hospital.frontend.pages.service.design-layout',compact('designs'));
    }
    public function serviceItem()
    {
        
        // $serviceItems=BackService::where('category_id',$category->id)->paginate(12);
        $serviceItems = HospitalBackService::all();
        return view('Hospital.frontend.pages.service.service-item',compact('serviceItems'));
    }
    public function details($id)
    {
        $item = HospitalDesign::find($id);
        return view('Hospital.frontend.pages.service.design-details',compact('item'));
    }
    public function medicalSoftware()
    {
        // $item = Design::find($id);
        $software = HospitalSoftware::all();
        return view('Hospital.frontend.pages.service.medical-software',compact('software'));
    }
    public function softwareDetails($id)
    {
        // $item = Design::find($id);
        $item = HospitalSoftware::find($id);
        return view('.Hospitalfrontend.pages.service.softwareDetails',compact('item'));
    }
}
