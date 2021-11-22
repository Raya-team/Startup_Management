<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationMachinery extends Model
{
    use HasFactory;
    protected $hidden = ['created_at', 'updated_at', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function owner()
    {
        return $this->belongsTo(TeamMember::class, 'owner');
    }

    public function description()
    {
        return $this->belongsTo(EquipmentAndMachinery::class, 'description');
    }
}
