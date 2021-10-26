<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\EnvironmentalEffect;
use App\Models\Market;
use App\Models\OpportunityPoint;
use App\Models\Producer;
use App\Models\ProductCompetitor;
use App\Models\ProductCustomer;
use App\Models\ProductSupplyAndDemand;
use App\Models\RawMaterialSupplier;
use App\Models\Retail;
use App\Models\Strengths;
use App\Models\Supplier;
use App\Models\Threats;
use App\Models\UnitOfMeasurement;
use App\Models\WeakPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesMarketController extends Controller
{
    public function index()
    {
        $market = Market::where('team_id' , Auth::user()->team_id)->first();
        $product_supply_and_demand = ProductSupplyAndDemand::where('team_id' , Auth::user()->team_id)->get();
        $product_customers = ProductCustomer::where('team_id' , Auth::user()->team_id)->get();
        $raw_material_suppliers = RawMaterialSupplier::where('team_id' , Auth::user()->team_id)->get();
        $producers = Producer::where('team_id' , Auth::user()->team_id)->get();
        $suppliers = Supplier::where('team_id' , Auth::user()->team_id)->get();
        $retails = Retail::where('team_id' , Auth::user()->team_id)->get();
        $environmental_effect = EnvironmentalEffect::where('team_id' , Auth::user()->team_id)->first();
        $product_competitors = ProductCompetitor::where('team_id' , Auth::user()->team_id)->get();
        $strengths = Strengths::where('team_id' , Auth::user()->team_id)->get();
        $weak_points = WeakPoint::where('team_id' , Auth::user()->team_id)->get();
        $opportunity_points = OpportunityPoint::where('team_id' , Auth::user()->team_id)->get();
        $threats = Threats::where('team_id' , Auth::user()->team_id)->get();
        return view('user.description.market.index');
    }

    public function create()
    {
        $units = UnitOfMeasurement::all();
        return view('user.description.market.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
