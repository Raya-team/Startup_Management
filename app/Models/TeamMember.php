<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
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
        return $this->belongsToMany(Responsibility::class,'responsibility_member','member_id','responsibility_id');
    }

    public function sharequestoins()
    {
        return $this->belongsToMany(ShareQuestion::class,'member_share_question','member_id','question_id');
    }
}
