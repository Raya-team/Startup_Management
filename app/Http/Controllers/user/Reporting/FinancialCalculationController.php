<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\AfterSaleService;
use App\Models\Business;
use App\Models\Capacity;
use App\Models\ConsumerItem;
use App\Models\EnergyConsumption;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Fiscal;
use App\Models\Insurance;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\ManPower;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\OtherInformation;
use App\Models\Outsourcing;
use App\Models\ParticipationNewInvestor;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\RawMaterial;
use App\Models\RD;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\Team;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\ValuationCost;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinancialCalculationController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $plan_year = PlanYear::where('team_id', $team_id)->first();
        $production_plan=[];
        $raw_material_price = [];
        $man_power_price = [];
        $business_price = [];
        $outsourcing_price = [];
        $consumer_item_price = [];
        $rent_price = [];
        $energy_consumption_price = [];
        $repair_price = [];
        $rd_price = [];
        $warranty_price = [];
        $transportation_cost_price = [];
        $insurance_price = [];
        $annual_other_information = [];
        $after_sale_service_price = [];
        for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
        {
            $capacities = Capacity::where('team_id', $team_id)->where('year',$i)->first(['nominal_capacity','total_production']);
            array_push($production_plan,$capacities);
            $raw_material = RawMaterial::where('team_id', $team_id)->where('year', $i)->sum('total_price');
            array_push($raw_material_price,$raw_material);
            $man_power = ManPower::where('team_id', $team_id)->where('year', $i)->sum('total_rights');
            array_push($man_power_price,$man_power);
            $business = Business::where('team_id', $team_id)->where('year', $i)->sum('annual_cost');
            array_push($business_price,$business);
            $outsourcing = Outsourcing::where('team_id', $team_id)->where('year', $i)->sum('total_cost');
            array_push($outsourcing_price,$outsourcing);
            $consumer_item = ConsumerItem::where('team_id', $team_id)->where('year', $i)->sum('total_cost');
            array_push($consumer_item_price,$consumer_item);
            $rent = Rent::where('team_id', $team_id)->where('year', $i)->sum('total_rent');
            array_push($rent_price,$rent);
            $energy_consumption = EnergyConsumption::where('team_id', $team_id)->where('year', $i)->sum('annual_cost');
            array_push($energy_consumption_price,$energy_consumption);
            $repair = Repair::where('team_id', $team_id)->where('year', $i)->sum('total_cost');
            array_push($repair_price,$repair);
            $rd = RD::where('team_id', $team_id)->where('year', $i)->sum('annual_cost');
            array_push($rd_price,$rd);
            $warranty = Warranty::where('team_id', $team_id)->where('year', $i)->sum('total_cost');
            array_push($warranty_price,$warranty);
            $transportation_cost = TransportationCost::where('team_id', $team_id)->where('year', $i)->sum('total_cost');
            array_push($transportation_cost_price,$transportation_cost);
            $insurance = Insurance::where('team_id', $team_id)->where('year', $i)->sum('total_cost');
            array_push($insurance_price,$insurance);
            $other_information = OtherInformation::where('team_id', $team_id)->where('year', $i)->first('sale_price');
            array_push($annual_other_information,$other_information);
            $after_sale_service = AfterSaleService::where('team_id', $team_id)->where('year', $i)->sum('total_cost');
            array_push($after_sale_service_price,$after_sale_service);
        }
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        $team = Team::with('activity')->where('id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->get();
        $lands_price = $lands->sum('price');
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get();
        $laboratory_equipments_price = $laboratory_equipments->sum('total_price');
        $equipments_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get();
        $equipments_price = $equipments_and_machineries->sum('total_price');
        $office_equipments = OfficeEquipmentAndSupply::where('team_id', $team_id)->get();
        $office_equipments_price = $office_equipments->sum('total_price');
        $facilities = Facility::where('team_id', $team_id)->get();
        $facilities_price = $facilities->sum('total_price');
        $transportations = Transportation::where('team_id', $team_id)->get();
        $transportations_price = Transportation::where('team_id', $team_id)->sum('total_price');
        $preoperating = PreOperatingCost::where('team_id', $team_id)->get();
        $preoperating_price = $preoperating->sum('total_price');
        $new_investors = ParticipationNewInvestor::where('team_id', $team_id)->get();
        $total_investment = $new_investors->sum('investment');
        $arr1 =[];
        foreach ($new_investors as $new_investor)
        {
            $investment_percent =(($new_investor->investment)/10000)*100;
            array_push($arr1, round($investment_percent, 2));
        }
        $total_percent = array_sum($arr1);
        return view('user.reporting.financial-calculation.index',compact('team_id','plan_year','production_plan','fiscal','valuation_cost','team','lands','lands_price','laboratory_equipments','laboratory_equipments_price','equipments_and_machineries','equipments_price','office_equipments','office_equipments_price','facilities','facilities_price','preoperating','preoperating_price','transportations','transportations_price','total_investment','total_percent','raw_material_price','man_power_price','business_price','outsourcing_price','consumer_item_price','rent_price','energy_consumption_price','rd_price','repair_price','warranty_price','transportation_cost_price','insurance_price','annual_other_information','after_sale_service_price'));
    }
}
