<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyEmployee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function responsibility()
    {
        return $this->belongsToMany(Responsibility::class,'employee_responsibility','employee_id','responsibility_id');
    }
}
