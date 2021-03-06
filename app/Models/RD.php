<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RD extends Model
{
    public $table = 'rds';

    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
