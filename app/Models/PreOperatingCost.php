<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreOperatingCost extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function preOperationCost()
    {
        return $this->hasOne(ValuationPreOperationCost::class,'description');
    }
}
