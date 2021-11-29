<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationModel extends Model
{
    use HasFactory;

    public function assets()
    {
        return $this->hasMany(ValuationOfIntangibleAsset::class);
    }
}
