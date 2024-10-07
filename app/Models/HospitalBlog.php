<?php

namespace App\Models;

use App\Models\BlogCategory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HospitalBlog extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(HospitalBlogCategory::class, 'hospital_category_id', 'id');
        // return "hello world";
    }
}
