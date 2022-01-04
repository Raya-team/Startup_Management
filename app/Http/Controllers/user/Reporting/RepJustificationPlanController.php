<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\AlternativeProduct;
use App\Models\CountDay;
use App\Models\EnvironmentalEffect;
use App\Models\Fiscal;
use App\Models\KeyEmployee;
use App\Models\Managerial;
use App\Models\Market;
use App\Models\OpportunityPoint;
use App\Models\PlanImplementation;
use App\Models\PlanYear;
use App\Models\Product;
use App\Models\ProductCompetitor;
use App\Models\ProductCustomer;
use App\Models\ProductSupplyAndDemand;
use App\Models\RawMaterial;
use App\Models\RegisteredTeam;
use App\Models\RequiredCertificate;
use App\Models\Strengths;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\Technical;
use App\Models\Threats;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationPreOperationCost;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use App\Models\WeakPoint;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

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
//        return $raw_materials;
        return view('user.reporting.justification-plan.index',compact('team','registered_team','shareholders','key_employees','managerial','technicals','products','required_certificates','markets','supply_and_demand','product_customers','product_competitors','alternative_products','environmental_effects','strengths','weakPoints','opportunityPoints','threats','plan_implementation','tenements','facilities','machineries','laboratory_equipments','offices','transportations','pre_operation_costs','plan_year','fiscal','count_day','raw_materials'));
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
