<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function Unit()
    {
        return $this->belongsTo(UnitOfMeasurement::class,'unit');
    }

    public function productName()
    {
        return $this->belongsTo(Product::class,'product_name');
    }

    public function rawMaterialName()
    {
        return $this->belongsTo(RawMaterialName::class, 'name');
    }
}
