<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function users()
    {
        return $this->hasMany(Team::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function members()
    {
        return $this->hasMany(TeamMember::class);
    }
}
