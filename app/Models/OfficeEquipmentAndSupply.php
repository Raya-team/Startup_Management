<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeEquipmentAndSupply extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function officeSupply()
    {
        return $this->hasOne(ValuationOfficeSupply::class,'description');
    }
}
