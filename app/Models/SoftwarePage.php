<?php

namespace App\Models;

use App\Models\SoftwarePageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SoftwarePage extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(SoftwarePageCategory::class, 'category_id');
    }
}
