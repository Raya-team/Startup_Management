<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessManager extends Model
{
    use HasFactory;

    public function TeamMember()
    {
        return $this->belongsTo(TeamMember::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
