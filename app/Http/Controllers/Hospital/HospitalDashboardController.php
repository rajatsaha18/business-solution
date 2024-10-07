<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalDashboardController extends Controller
{
    public function index()
    {
        return view('Hospital.admin.dashboard');
    }
}
