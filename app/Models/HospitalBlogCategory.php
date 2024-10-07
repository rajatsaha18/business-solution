<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalBlogCategory extends Model
{
    use HasFactory;
    protected $guraded = [];
    public function blogs()
    {
        return $this->hasMany('App\Models\HospitalBlog', 'hospital_category_id');
    }
}
