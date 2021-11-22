<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationTransportation extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Transportation::class, 'description');
    }
}
