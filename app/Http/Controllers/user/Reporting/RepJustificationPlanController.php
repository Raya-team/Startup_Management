<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\AlternativeProduct;
use App\Models\Business;
use App\Models\Capacity;
use App\Models\ConsumerItem;
use App\Models\CountDay;
use App\Models\DepreciationRate;
use App\Models\EnergyConsumption;
use App\Models\EnvironmentalEffect;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Fiscal;
use App\Models\Insurance;
use App\Models\KeyEmployee;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\Managerial;
use App\Models\ManPower;
use App\Models\Market;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\OpportunityPoint;
use App\Models\OtherInformation;
use App\Models\Outsourcing;
use App\Models\PlanImplementation;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\Product;
use App\Models\ProductCompetitor;
use App\Models\ProductCustomer;
use App\Models\ProductSupplyAndDemand;
use App\Models\RawMaterial;
use App\Models\RD;
use App\Models\RegisteredTeam;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\RequiredCertificate;
use App\Models\Strengths;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\Technical;
use App\Models\Threats;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\ValuationCost;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationPreOperationCost;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use App\Models\Warranty;
use App\Models\WeakPoint;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;
use function PHPUnit\Framework\isNull;

class RepJustificationPlanController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $team = Team::where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first('registration_number');
        $shareholders = TeamMember::with(['education','responsibility'])->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::with('education')->where('team_id', $team_id)->get();
        $managerial = Managerial::where('team_id', $team_id)->first();
        $technicals = Technical::where('team_id', $team_id)->first();
        $products = Product::with(['type','rawMaterials'])->where('team_id', $team_id)->get();
        $required_certificates = RequiredCertificate::where('team_id', $team_id)->get();
        $markets = Market::where('team_id', $team_id)->first();
        $supply_and_demand = ProductSupplyAndDemand::with('Unit_id')->where('team_id', $team_id)->get();
        $product_customers = ProductCustomer::where('team_id', $team_id)->get();
        $product_competitors = ProductCompetitor::where('team_id', $team_id)->get();
        $alternative_products = AlternativeProduct::where('team_id', $team_id)->get();
        $environmental_effects = EnvironmentalEffect::where('team_id', $team_id)->first();
        $strengths = Strengths::where('team_id', $team_id)->get();
        $weakPoints = WeakPoint::where('team_id', $team_id)->get();
        $opportunityPoints = OpportunityPoint::where('team_id', $team_id)->get();
        $threats = Threats::where('team_id', $team_id)->get();
        $plan_implementation = PlanImplementation::where('team_id', $team_id)->get();
         //ارزش گذاری مشهود
        $tenements = ValuationTenement::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $facilities = ValuationFacility::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $machineries = ValuationMachinery::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $laboratory_equipments = ValuationLaboratoryEquipment::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $offices = ValuationOfficeSupply::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $transportations = ValuationTransportation::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $pre_operation_costs = ValuationPreOperationCost::with(['Description','Owner'])->where('team_id', $team_id)->get();
        //ارزش دانش فنی
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        //اطلاعات مالی یک
        $plan_year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $depreciation_rate = DepreciationRate::where('team_id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->get()->sum('price');
        $equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        $fin_laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        $fin_facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        $fin_transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        $office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        $pre_operating_cost = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        //اطلاعات مالی دو
        $raw_material = RawMaterial::where('team_id', $team_id)->get();
        $man_powers = ManPower::with('manpowerName')->where('team_id', $team_id)->get();
        $business = Business::where('team_id', $team_id)->get();
        $outsourcing = Outsourcing::where('team_id', $team_id)->get();
        $consumer_item = ConsumerItem::where('team_id', $team_id)->get();
        $rent = Rent::where('team_id', $team_id)->get();
        $energy_consumption = EnergyConsumption::with('Unit')->where('team_id', $team_id)->get();
        $repair = Repair::where('team_id', $team_id)->get();
        $rd = RD::where('team_id', $team_id)->get();
        $warranty = Warranty::with('productName')->where('team_id', $team_id)->get();
        $fin2_transportation = TransportationCost::where('team_id', $team_id)->get();
        $insurances = Insurance::where('team_id', $team_id)->get();
        $otherInformation = OtherInformation::where('team_id', $team_id)->get();

        $annual_capacities = [];
        $annual_raw_material_price = [];
        $annual_man_powers_price = [];
        $annual_business_price = [];
        $annual_outsourcing_price = [];
        $annual_consumer_item_price = [];
        $annual_rent_price = [];
        $annual_energy_consumption_price = [];
        $annual_repair_price = [];
        $annual_rd_price = [];
        $annual_warranty_price = [];
        $annual_fin2_transportation_price = [];

        $annual_dep_tenements = [];
        $annual_dep_equipment_and_machineries = [];
        $annual_dep_office_equipment_and_supplise = [];
        $annual_dep_facilities = [];
        $annual_dep_transportations = [];
        $annual_dep_laboratory_equipments = [];
        $annual_financial_expenses = [];
        $annual_depreciation = [];

        $annual_asset_value_tenements = [];
        $annual_asset_value_machineries = [];
        $annual_asset_value_office_equipment = [];
        $annual_asset_value_facilities = [];
        $annual_asset_value_transportations = [];
        $annual_asset_value_laboratory_equipments = [];

        for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
        {
            $capacities = Capacity::where('team_id', $team_id)->where('year',$i)->first('total_production');
            array_push($annual_capacities,$capacities);

            $raw_material_price = $raw_material->where('year', $i)->sum('total_price');
            array_push($annual_raw_material_price,$raw_material_price);

            $man_powers_price = $man_powers->where('year', $i)->sum('total_rights');
            array_push($annual_man_powers_price,$man_powers_price);

            $business_price = $business->where('year', $i)->sum('annual_cost');
            array_push($annual_business_price,$business_price);

            $outsourcing_price = $outsourcing->where('year', $i)->sum('total_cost');
            array_push($annual_outsourcing_price,$outsourcing_price);

            $consumer_item_price = $consumer_item->where('year', $i)->sum('total_cost');
            array_push($annual_consumer_item_price,$consumer_item_price);

            $rent_price = $rent->where('year', $i)->sum('total_rent');
            array_push($annual_rent_price,$rent_price);

            $energy_consumption_price = $energy_consumption->where('year', $i)->sum('annual_cost');
            array_push($annual_energy_consumption_price,$energy_consumption_price);

            $repair_price = $repair->where('year', $i)->sum('total_cost');
            array_push($annual_repair_price,$repair_price);

            $rd_price = $rd->where('year', $i)->sum('annual_cost');
            array_push($annual_rd_price,$rd_price);

            $warranty_price = $warranty->where('year', $i)->sum('total_cost');
            array_push($annual_warranty_price,$warranty_price);

            $fin2_transportation_price = $fin2_transportation->where('year', $i)->sum('total_cost');
            array_push($annual_fin2_transportation_price,$fin2_transportation_price);

            if($i <= $fiscal->reimbursement)
            { $financial_expenses = ($fiscal->loan) * ( ($fiscal->profit) / 100 ); }
            else
            { $financial_expenses = 0; }
            array_push($annual_financial_expenses,$financial_expenses);
            /* هزینه استهلاک */
            if ($i == 1){
                $dep_tenements = $lands * ($depreciation_rate->question_1 / 100);
                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_asset_value_tenements, $lands);

                $dep_equipment_and_machineries = $equipment_and_machineries * ($depreciation_rate->question_2 / 100);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_asset_value_machineries, $equipment_and_machineries);

                $dep_office_equipment_and_supplise = $office_equipment_and_supplise * ($depreciation_rate->question_3 / 100);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_asset_value_office_equipment, $office_equipment_and_supplise);

                $dep_facilities = $fin_facilities * ($depreciation_rate->question_4 / 100);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_asset_value_facilities, $fin_facilities);

                $dep_transportations = $fin_transportations * ($depreciation_rate->question_5 / 100);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_asset_value_transportations, $fin_transportations);

                $dep_laboratory_equipments = $fin_laboratory_equipments * ($depreciation_rate->question_6 / 100);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                array_push($annual_asset_value_laboratory_equipments, $fin_laboratory_equipments);

                $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
            }else{
                $dep_tenements = ($annual_asset_value_tenements[$i-2] - $annual_dep_tenements[$i-2]) * ($depreciation_rate->question_1 / 100);
                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_asset_value_tenements, $annual_asset_value_tenements[$i-2] - $annual_dep_tenements[$i-2]);

                $dep_equipment_and_machineries = ($annual_asset_value_machineries[$i-2] - $annual_dep_equipment_and_machineries[$i-2]) * ($depreciation_rate->question_2 / 100);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_asset_value_machineries, $annual_asset_value_machineries[$i-2] - $annual_dep_equipment_and_machineries[$i-2]);

                $dep_office_equipment_and_supplise = ($annual_asset_value_office_equipment[$i-2] - $annual_dep_office_equipment_and_supplise[$i-2]) * ($depreciation_rate->question_3 / 100);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_asset_value_office_equipment, $annual_asset_value_office_equipment[$i-2] - $annual_dep_office_equipment_and_supplise[$i-2]);

                $dep_facilities = ($annual_asset_value_facilities[$i-2] - $annual_dep_facilities[$i-2]) * ($depreciation_rate->question_4 / 100);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_asset_value_facilities, $annual_asset_value_facilities[$i-2] - $annual_dep_facilities[$i-2]);

                $dep_transportations = ($annual_asset_value_transportations[$i-2] - $annual_dep_transportations[$i-2]) * ($depreciation_rate->question_5 / 100);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_asset_value_transportations, $annual_asset_value_transportations[$i-2] - $annual_dep_transportations[$i-2]);

                $dep_laboratory_equipments = ($annual_asset_value_laboratory_equipments[$i-2] - $annual_dep_laboratory_equipments[$i-2]) * ($depreciation_rate->question_6 / 100);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                array_push($annual_asset_value_laboratory_equipments, $annual_asset_value_laboratory_equipments[$i-2] - $annual_dep_laboratory_equipments[$i-2]);

                $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
            }
            array_push($annual_depreciation, $depreciation);
        }
        return view('user.reporting.justification-plan.index',compact('team','registered_team','shareholders','key_employees','managerial','technicals','products','required_certificates','markets','supply_and_demand','product_customers','product_competitors','alternative_products','environmental_effects','strengths','weakPoints','opportunityPoints','threats','plan_implementation','tenements','facilities','machineries','laboratory_equipments','offices','transportations','pre_operation_costs','plan_year','fiscal','count_day','annual_capacities','annual_depreciation','annual_financial_expenses','fin_facilities','fin_laboratory_equipments','fin_transportations','raw_material','annual_raw_material_price','man_powers','annual_man_powers_price','business','annual_business_price','outsourcing','annual_outsourcing_price','consumer_item','annual_consumer_item_price','rent','annual_rent_price','repair','annual_repair_price','rd','annual_rd_price','warranty','annual_warranty_price','fin2_transportation','annual_fin2_transportation_price','energy_consumption','annual_energy_consumption_price','insurances','otherInformation','lands','equipment_and_machineries','fin_laboratory_equipments','fin_facilities','fin_transportations','office_equipment_and_supplise','depreciation_rate','annual_asset_value_tenements','annual_asset_value_machineries','annual_asset_value_office_equipment','annual_asset_value_facilities','annual_asset_value_transportations','annual_asset_value_laboratory_equipments','annual_dep_tenements','annual_dep_equipment_and_machineries','annual_dep_office_equipment_and_supplise','annual_dep_facilities','annual_dep_transportations','annual_dep_laboratory_equipments','pre_operating_cost','valuation_cost'));
    }

    public function exportPDF()
    {
        $team_id = Auth::user()->team_id;
        $team = Team::where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first('registration_number');
        $shareholders = TeamMember::with(['education','responsibility'])->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::with('education')->where('team_id', $team_id)->get();
        $managerial = Managerial::where('team_id', $team_id)->first();
        $technicals = Technical::where('team_id', $team_id)->first();
        $products = Product::with('type')->where('team_id', $team_id)->get();
        $required_certificates = RequiredCertificate::where('team_id', $team_id)->get();
        $markets = Market::where('team_id', $team_id)->first();
        $supply_and_demand = ProductSupplyAndDemand::with('Unit_id')->where('team_id', $team_id)->get();
        $product_customers = ProductCustomer::where('team_id', $team_id)->get();
        $product_competitors = ProductCompetitor::where('team_id', $team_id)->get();
        $alternative_products = AlternativeProduct::where('team_id', $team_id)->get();
        $environmental_effects = EnvironmentalEffect::where('team_id', $team_id)->first();
        $strengths = Strengths::where('team_id', $team_id)->get();
        $weakPoints = WeakPoint::where('team_id', $team_id)->get();
        $opportunityPoints = OpportunityPoint::where('team_id', $team_id)->get();
        $threats = Threats::where('team_id', $team_id)->get();
        $plan_implementation = PlanImplementation::where('team_id', $team_id)->get();
        $tenements = ValuationTenement::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $facilities = ValuationFacility::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $machineries = ValuationMachinery::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $laboratory_equipments = ValuationLaboratoryEquipment::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $offices = ValuationOfficeSupply::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $transportations = ValuationTransportation::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $pre_operation_costs = ValuationPreOperationCost::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $plan_year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $raw_materials = RawMaterial::with('Unit')->where('team_id', $team_id)->where('year', 1)->get();


        $pdf = PDF::loadView('user.reporting.justification-plan.index', compact('team','registered_team','shareholders','key_employees','managerial','technicals','products','required_certificates','markets','supply_and_demand','product_customers','product_competitors','alternative_products','environmental_effects','strengths','weakPoints','opportunityPoints','threats','plan_implementation','tenements','facilities','machineries','laboratory_equipments','offices','transportations','pre_operation_costs','plan_year','fiscal','count_day','raw_materials'));
//        $pdf = PDF::loadHTML('<h1>سلام</h1>');
        $fileName = Carbon::now()->timestamp . '-justification-plan' . '.pdf';
        return $pdf->download($fileName);
    }
}
