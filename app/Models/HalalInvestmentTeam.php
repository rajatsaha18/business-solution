<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalalInvestmentTeam extends Model
{
    use HasFactory;
    public function teamcategory(){
        return $this->belongsTo(HalalInvestmentTeamCategory::class,'team_category_id','id');
    }
}
