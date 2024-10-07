<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorOder extends Model
{
    use HasFactory;
    public function company(){
        return $this->belongsTo(InvestmentCompany::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
