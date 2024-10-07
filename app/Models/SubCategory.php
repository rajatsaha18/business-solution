<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function categories(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    public function product(){
        return $this->hasMany('App\Models\Product');
    }
}
