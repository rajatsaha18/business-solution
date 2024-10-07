<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareCampusAmbassador extends Model
{
    use HasFactory;
    private static $campus;

    public static function newCampus($request){
        self::$campus = new SoftwareCampusAmbassador();
        self::$campus->email                = $request->email;
        self::$campus->name                 = $request->name;
        self::$campus->mobile               = $request->mobile;
        self::$campus->university_name      = $request->university_name;
        self::$campus->department           = $request->department;
        self::$campus->enrolled_year        = $request->enrolled_year;
        self::$campus->activity             = $request->activity;
        self::$campus->message              = $request->message;
        self::$campus->save();
    }
}
