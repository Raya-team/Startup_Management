<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterialName extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class,'product_name');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function rawMaterial()
    {
        return $this->hasOne(RawMaterial::class);
    }
}
