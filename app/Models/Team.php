<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

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
    public function keyEmployees()
    {
        return $this->hasMany(KeyEmployee::class);
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

    public function developmentCost()
    {
        return $this->hasOne(DevelopmentCost::class);
    }

    public function capacity()
    {
        return $this->hasOne(Capacity::class);
    }

    public function rawMaterials()
    {
        return $this->hasMany(RawMaterial::class);
    }

    public function manPowers()
    {
        return $this->hasMany(ManPower::class);
    }

    public function rents()
    {
        return $this->hasMany(Rent::class);
    }

    public function energyConsumptions()
    {
        return $this->hasMany(EnergyConsumption::class);
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function rds()
    {
        return $this->hasMany(RD::class);
    }

    public function insurances()
    {
        return $this->hasMany(Insurance::class);
    }

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }

    public function transportationCosts()
    {
        return $this->hasMany(TransportationCost::class);
    }

    public function warranties()
    {
        return $this->hasMany(Warranty::class);
    }

    public function consumerItems()
    {
        return $this->hasMany(ConsumerItem::class);
    }

    public function afterSaleServices()
    {
        return $this->hasMany(AfterSaleService::class);
    }

    public function otherInformation()
    {
        return $this->hasOne(ConsumerItem::class);
    }

    public function valuationCosts()
    {
        return $this->hasMany(ValuationCost::class);
    }

    public function valuationTenement()
    {
        return $this->hasOne(ValuationTenement::class);
    }

    public function valuationMachinery()
    {
        return $this->hasOne(ValuationMachinery::class);
    }

    public function valuationOfficeSupply()
    {
        return $this->hasOne(ValuationOfficeSupply::class);
    }

    public function valuationOtherAsset()
    {
        return $this->hasOne(ValuationOtherAsset::class);
    }

    public function valuationAdditionalQuestion()
    {
        return $this->hasOne(ValuationAdditionalQuestion::class);
    }

    public function registeredTeam()
    {
        return $this->hasOne(RegisteredTeam::class);
    }

    public function businessQuestion()
    {
        return $this->hasOne(BusinessQuestion::class);
    }


    public function preliminaryJustificationPlan()
    {
        return $this->hasOne(PreliminaryJustificationPlan::class);
    }

    public function businessCanvas()
    {
        return $this->hasOne(BusinessCanvas::class);
    }

    public function businessManager()
    {
        return $this->hasOne(BusinessManager::class);
    }

    public function managerial()
    {
        return $this->hasOne(Managerial::class);
    }


    public function market()
    {
        return $this->hasOne(Market::class);
    }

    public function technical()
    {
        return $this->hasOne(Technical::class);
    }

    public function obtainedCertificates()
    {
        return $this->hasMany(ObtainedCertificate::class);
    }

    public function environmentalEffect()
    {
        return $this->hasOne(EnvironmentalEffect::class);
    }

    public function opportunityPoints()
    {
        return $this->hasMany(OpportunityPoint::class);
    }

    public function producers()
    {
        return $this->hasMany(Producer::class);
    }

    public function productCompetitors()
    {
        return $this->hasMany(ProductCompetitor::class);
    }

    public function productCustomers()
    {
        return $this->hasMany(ProductCustomer::class);
    }

    public function productSupplyAndDemand()
    {
        return $this->hasMany(ProductSupplyAndDemand::class);
    }

    public function rawMaterialSuppliers()
    {
        return $this->hasMany(ProductCustomer::class);
    }

    public function requiredCertificates()
    {
        return $this->hasMany(RequiredCertificate::class);
    }

    public function retails()
    {
        return $this->hasMany(Retail::class);
    }

    public function strengths()
    {
        return $this->hasMany(Strengths::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function threats()
    {
        return $this->hasMany(Threats::class);
    }

    public function weakPoints()
    {
        return $this->hasMany(WeakPoint::class);
    }

}
