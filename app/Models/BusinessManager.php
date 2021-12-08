<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessManager extends Model
{
    use HasFactory;

    public function Owner()
    {
        return $this->belongsTo(TeamMember::class, 'owner');
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
