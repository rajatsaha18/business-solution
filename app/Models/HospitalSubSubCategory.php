<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalSubSubCategory extends Model
{
    use HasFactory;
    public function subcategories()
    {
        return $this->belongsTo('App\Models\HospitalSubCategory', 'hospital_sub_category_id', 'id');
    }
    public function product()
    {
        return $this->hasMany('App\Models\HospitalProduct');
    }
}
