<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSupplyAndDemand extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function unit_id()
    {
        return $this->belongsTo(UnitOfMeasurement::class, 'unit_id');
    }
}
