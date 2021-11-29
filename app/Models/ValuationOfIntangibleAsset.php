<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationOfIntangibleAsset extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function valuationModel()
    {
        return $this->belongsTo(ValuationModel::class, 'valuation_model');
    }
}
