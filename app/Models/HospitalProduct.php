<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalProduct extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo('App\Models\HospitalCategory', 'hospital_category_id', 'id');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\HospitalSubCategory', 'hospital_sub_category_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo('App\Models\HospitalColor', 'hospital_color_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\HospitalBrand', 'hospital_brand_id', 'id');
    }
    public function images()
    {
        return $this->hasMany('App\Models\HospitalProductimage');
    }
}
