<?php

namespace App\Models;

use App\Models\SoftwareProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SoftwareProject extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(SoftwareProjectCategory::class,'project_category_id');
    }
}
