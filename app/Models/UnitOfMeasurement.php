<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitOfMeasurement extends Model
{
    use HasFactory;

    public function productSupplyAndDemand()
    {
        return $this->hasMany(ProductSupplyAndDemand::class);
    }

    public function rawMaterials()
    {
        return $this->hasMany(RawMaterial::class);
    }

    public function capacities()
    {
        return $this->hasMany(Capacity::class);
    }

    public function energyConsumptions()
    {
        return $this->hasMany(EnergyConsumption::class);
    }
}
