<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentAndMachinery extends Model
{
    use HasFactory;

    public function shareholder()
    {
        return $this->belongsTo(TeamMember::class);
    }
}
