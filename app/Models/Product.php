<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class);
    }
}
