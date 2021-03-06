<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function members()
    {
        return $this->belongsToMany(TeamMember::class);
    }
    public function keyEmployees ()
    {
        return $this->belongsToMany(KeyEmployee::class);
    }
}
