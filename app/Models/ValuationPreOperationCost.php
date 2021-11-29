<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationPreOperationCost extends Model
{
    use HasFactory;

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
        return $this->belongsTo(PreOperatingCost::class, 'description');
    }
}
