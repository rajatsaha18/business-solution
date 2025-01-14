<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageOrder extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function package(){
        return $this->belongsTo(AdvertisePackage::class,'package_id'); 
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function payment_method(){
        return $this->belongsTo(PaymentMethod::class,'payment_method_id');
    }
}
