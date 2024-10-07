<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categories()
    {
        return $this->belongsTo('App\Models\HospitalCategory', 'hospital_category_id', 'id');
    }
    public function product()
    {
        return $this->hasMany('App\Models\HospitalProduct');
    }
}
