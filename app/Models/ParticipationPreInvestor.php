<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipationPreInvestor extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function investor()
    {
        return $this->belongsTo(TeamMember::class, 'investor')->with('responsibility');
    }
}
