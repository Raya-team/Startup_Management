<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManPowerName extends Model
{
    use HasFactory;

    public function manpower()
    {
        return $this->hasOne(ManPower::class);
    }
}
