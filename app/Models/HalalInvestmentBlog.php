<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HalalInvestmentBlog extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(HalalInvestmentBlogCategory::class,'blog_category_id','id');
    }
}
