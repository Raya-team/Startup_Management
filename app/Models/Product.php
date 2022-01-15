<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function materials()
    {
        return $this->hasMany();
    }

    public function rawMaterials()
    {
        return $this->hasMany(RawMaterial::class);
    }

    public function warranty()
    {
        return $this->hasOne(RawMaterial::class);
    }
}
