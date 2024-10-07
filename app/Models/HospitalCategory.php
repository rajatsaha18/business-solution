<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalCategory extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function subcategories(){
        return $this->hasMany('App\Models\HospitalSubCategory');
    }
    public function product(){
        return $this->hasMany('App\Models\HospitalProduct');
    }
}
