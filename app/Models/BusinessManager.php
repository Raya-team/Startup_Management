<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessManager extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(TeamMember::class, 'shareholder_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
