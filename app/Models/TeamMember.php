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

    public function planYear()
    {
        return $this->hasOne(PlanYear::class);
    }

    public function fiscal()
    {
        return $this->hasOne(Fiscal::class);
    }

    public function countDay()
    {
        return $this->hasOne(CountDay::class);
    }

    public function depreciationRate()
    {
        return $this->hasOne(DepreciationRate::class);
    }

    public function lands()
    {
        return $this->hasMany(Land::class);
    }

    public function buildings()
    {
        return $this->hasMany(Building::class);
    }

    public function equipmentAndMachineries()
    {
        return $this->hasMany(EquipmentAndMachinery::class);
    }

    public function officeEquipmentAndSupply()
    {
        return $this->hasMany(OfficeEquipmentAndSupply::class);
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function transportation()
    {
        return $this->hasMany(Transportation::class);
    }

    public function preOperatingCost()
    {
        return $this->hasMany(PreOperatingCost::class);
    }
}
