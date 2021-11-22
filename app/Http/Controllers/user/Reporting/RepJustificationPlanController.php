<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\EnvironmentalEffect;
use App\Models\KeyEmployee;
use App\Models\Managerial;
use App\Models\Market;
use App\Models\OpportunityPoint;
use App\Models\Product;
use App\Models\ProductCompetitor;
use App\Models\ProductCustomer;
use App\Models\ProductSupplyAndDemand;
use App\Models\RegisteredTeam;
use App\Models\RequiredCertificate;
use App\Models\Strengths;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\Technical;
use App\Models\Threats;
use App\Models\WeakPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepJustificationPlanController extends Controller
{

    public function __invoke(Request $request)
    {
        $team_id = Auth::user()->team_id;
        $team = Team::where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first('registration_number');
        $shareholders = TeamMember::with(['education','responsibility'])->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::where('team_id', $team_id)->get();
        $managerial = Managerial::where('team_id', $team_id)->first();
        $technicals = Technical::where('team_id', $team_id)->first();
        $products = Product::with('type')->where('team_id', $team_id)->get();
        $required_certificates = RequiredCertificate::where('team_id', $team_id)->get();
        $markets = Market::where('team_id', $team_id)->first();
        $supply_and_demand = ProductSupplyAndDemand::with('unit_id')->where('team_id', $team_id)->get();
        $product_customers = ProductCustomer::where('team_id', $team_id)->get();
        $product_competitors = ProductCompetitor::where('team_id', $team_id)->get();
        $environmental_effects = EnvironmentalEffect::where('team_id', $team_id)->first();
        $strengths = Strengths::where('team_id', $team_id)->get();
        $weakPoints = WeakPoint::where('team_id', $team_id)->get();
        $opportunityPoints = OpportunityPoint::where('team_id', $team_id)->get();
        $threats = Threats::where('team_id', $team_id)->get();
        return view('user.reporting.justification-plan.index',compact('team','registered_team','shareholders','key_employees','managerial','technicals','products','required_certificates','markets','supply_and_demand','product_customers','product_competitors','environmental_effects','strengths','weakPoints','opportunityPoints','threats'));
    }
}
