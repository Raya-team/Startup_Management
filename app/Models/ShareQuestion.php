<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ShareQuestion extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function members()
    {
        return $this->belongsToMany(TeamMember::class ,'member_share_question','question_id','member_id')->where('team_id' , Auth::user()->team_id);
    }
}
