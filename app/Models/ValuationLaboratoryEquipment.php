<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationLaboratoryEquipment extends Model
{
    use HasFactory;

    protected $table = 'valuation_laboratory_equipments';

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function Owner()
    {
        return $this->belongsTo(TeamMember::class, 'owner');
    }

    public function Description()
    {
        return $this->belongsTo(LaboratoryEquipment::class, 'description');
    }
}
