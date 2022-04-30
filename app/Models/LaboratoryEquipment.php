<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryEquipment extends Model
{
    use HasFactory;

    protected $table = 'laboratory_equipments';

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function laboratoryEquipment()
    {
        return $this->hasOne(ValuationLaboratoryEquipment::class,'description');
    }
}
