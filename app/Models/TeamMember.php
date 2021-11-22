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

    public function valuationTenements()
    {
        return $this->hasMany(ValuationTenement::class);
    }

    public function valuationMachineries()
    {
        return $this->hasMany(ValuationMachinery::class);
    }

    public function valuationOfficeSupplies()
    {
        return $this->hasMany(ValuationOfficeSupply::class);
    }

    public function valuationFacilities()
    {
        return $this->hasMany(ValuationFacility::class);
    }

    public function transportations()
    {
        return $this->hasMany(ValuationTransportation::class);
    }

    public function valuationPreOperationCosts()
    {
        return $this->hasMany(ValuationPreOperationCost::class);
    }

    public function valuationOtherAsset()
    {
        return $this->hasOne(ValuationOtherAsset::class);
    }

    public function businessManager()
    {
        return $this->hasOne(BusinessManager::class);
    }

    public function participationPreInvestors()
    {
        return $this->hasMany(ParticipationPreInvestor::class);
    }

}
