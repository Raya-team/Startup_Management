<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\DesMarketRequest;
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
        $team_id = Auth::user()->team_id;
        $market = Market::where('team_id' , $team_id)->first();
        $product_supply_and_demand = ProductSupplyAndDemand::where('team_id' , $team_id)->paginate(10);
        $product_customers = ProductCustomer::where('team_id' , $team_id)->paginate(10);
        $raw_material_suppliers = RawMaterialSupplier::where('team_id' , $team_id)->paginate(10);
        $producers = Producer::where('team_id' , $team_id)->paginate(10);
        $suppliers = Supplier::where('team_id' , $team_id)->paginate(10);
        $retails = Retail::where('team_id' , $team_id)->paginate(10);
        $environmental_effect = EnvironmentalEffect::where('team_id' , $team_id)->first();
        $product_competitors = ProductCompetitor::where('team_id' , $team_id)->paginate(10);
        $strengths = Strengths::where('team_id' , $team_id)->paginate(10);
        $weak_points = WeakPoint::where('team_id' , $team_id)->paginate(10);
        $opportunity_points = OpportunityPoint::where('team_id' , $team_id)->paginate(10);
        $threats = Threats::where('team_id' , $team_id)->paginate(10);
        return view('user.description.market.index');
    }

    public function create()
    {
        $units = UnitOfMeasurement::all();
        return view('user.description.market.create');
    }

    public function store(DesMarketRequest $request , Market $market , EnvironmentalEffect $effect)
    {
        $team_id = Auth::user()->team_id;
        $this->Market($request, $market, $team_id);
        $this->ProductSupplyAndDemand($request, $team_id);
        $this->ProductCustomers($request, $team_id);
        $this->RawMaterialSuppliers($request, $team_id);
        $this->Producers($request, $team_id);
        $this->Suppliers($request, $team_id);
        $this->Retails($request, $team_id);
        $this->EnvironmentalEffect($request, $effect, $team_id);
        $this->ProductCompetitors($request, $team_id);
        $this->Strengths($request, $team_id);
        $this->WeakPoints($request, $team_id);
        $this->OpportunityPoints($request, $team_id);
        $this->Threats($request, $team_id);
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

    protected function Market(DesMarketRequest $request, Market $market, $team_id)
    {
        $market->product_introduction = $request->input('product_introduction');
        $market->product_features = $request->input('product_features');
        $market->product_competitive_advantages = $request->input('product_competitive_advantages');
        $market->position_analysis = $request->input('position_analysis');
        $market->product_pricing_strategy = $request->input('pricing_strategy');
        $market->product_marketing_strategy = $request->input('marketing_strategy');
        $market->team_id = $team_id;
        $market->save();
    }

    protected function ProductSupplyAndDemand(DesMarketRequest $request, $team_id)
    {
        $product_supplies = $request->product_supplies;
        for ($i = 0; $i < sizeof($product_supplies); $i++) {
            $product_supply_and_demand = new ProductSupplyAndDemand();
            $product_supply_and_demand->year = $product_supplies[$i]['year'];
            $product_supply_and_demand->general_request = $product_supplies[$i]['general_request'];
            $product_supply_and_demand->domestic_production = $product_supplies[$i]['domestic_production'];
            $product_supply_and_demand->importation = $product_supplies[$i]['importation'];
            $product_supply_and_demand->unit = $product_supplies[$i]['unit'];
            $product_supply_and_demand->team_id = $team_id;
            $product_supply_and_demand->updated_at = null;
            $product_supply_and_demand->save();
        }
    }

    protected function ProductCustomers(DesMarketRequest $request, $team_id)
    {
        $product_customers = $request->product_customers;
        for ($i = 0; $i < sizeof($product_customers); $i++) {
            $product_customer = new ProductCustomer();
            $product_customer->customer_features = $product_customers[$i]['customer_features'];
            $product_customer->first_group_customers = $product_customers[$i]['first_group_customers'];
            $product_customer->second_group_customers = $product_customers[$i]['second_group_customers'];
            $product_customer->third_group_customers = $product_customers[$i]['third_group_customers'];
            $product_customer->fourth_group_customers = $product_customers[$i]['fourth_group_customers'];
            $product_customer->team_id = $team_id;
            $product_customer->updated_at = null;
            $product_customer->save();
        }
    }

    protected function RawMaterialSuppliers(DesMarketRequest $request, $team_id)
    {
        $raw_material_suppliers = $request->raw_material_suppliers;
        for ($i = 0; $i < sizeof($raw_material_suppliers); $i++) {
            $raw_material_supplier = new RawMaterialSupplier();
            $raw_material_supplier->name = $raw_material_suppliers[$i]['material_suppliers_name'];
            $raw_material_supplier->geographical_region = $raw_material_suppliers[$i]['material_suppliers_region'];
            $raw_material_supplier->team_id = $team_id;
            $raw_material_supplier->updated_at = null;
            $raw_material_supplier->save();
        }
    }

    protected function Producers(DesMarketRequest $request, $team_id)
    {
        $producers = $request->producers;
        for ($i = 0; $i < sizeof($producers); $i++) {
            $producer = new Producer();
            $producer->name = $producers[$i]['producers_name'];
            $producer->geographical_region = $producers[$i]['producers_region'];
            $producer->team_id = $team_id;
            $producer->updated_at = null;
            $producer->save();
        }
    }

    protected function Suppliers(DesMarketRequest $request, $team_id)
    {
        $suppliers = $request->suppliers;
        for ($i = 0; $i < sizeof($suppliers); $i++) {
            $supplier = new Supplier();
            $supplier->name = $suppliers[$i]['suppliers_name'];
            $supplier->geographical_region = $suppliers[$i]['suppliers_region'];
            $supplier->team_id = $team_id;
            $supplier->updated_at = null;
            $supplier->save();
        }
    }

    protected function Retails(DesMarketRequest $request, $team_id)
    {
        $retails = $request->retails;
        for ($i = 0; $i < sizeof($retails); $i++) {
            $retail = new Retail();
            $retail->name = $retails[$i]['retails_name'];
            $retail->geographical_region = $retails[$i]['retails_region'];
            $retail->team_id = $team_id;
            $retail->updated_at = null;
            $retail->save();
        }
    }


    protected function EnvironmentalEffect(DesMarketRequest $request, EnvironmentalEffect $effect, $team_id)
    {
        $effect->economical = $request->input('economical');
        $effect->social = $request->input('social');
        $effect->political = $request->input('political');
        $effect->environmental = $request->input('environmental');
        $effect->team_id = $team_id;
        $effect->save();
    }

    protected function ProductCompetitors(DesMarketRequest $request, $team_id)
    {
        $product_competitors = $request->product_competitors;
        for ($i = 0; $i < sizeof($product_competitors); $i++) {
            $product_competitor = new ProductCompetitor();
            $product_competitor->name = $product_competitors[$i]['competitor_name'];
            $product_competitor->geographical_region = $product_competitors[$i]['competitors_region'];
            $product_competitor->market_share = $product_competitors[$i]['market_share'];
            $product_competitor->competitive_feature = $product_competitors[$i]['competitive_feature'];
            $product_competitor->weakness = $product_competitors[$i]['weakness'];
            $product_competitor->team_id = $team_id;
            $product_competitor->updated_at = null;
            $product_competitor->save();
        }
    }

    protected function Strengths(DesMarketRequest $request, $team_id)
    {
        $strengths = $request->strengths;
        for ($i = 0; $i < sizeof($strengths); $i++) {
            $strength = new Strengths();
            $strength->description = $strengths[$i]['strengths_description'];
            $strength->weight = $strengths[$i]['strengths_weight'];
            $strength->score = $strengths[$i]['strengths_score'];
            $strength->team_id = $team_id;
            $strength->updated_at = null;
            $strength->save();
        }
    }

    protected function WeakPoints(DesMarketRequest $request, $team_id)
    {
        $weak_points = $request->weak_points;
        for ($i = 0; $i < sizeof($weak_points); $i++) {
            $weak_point = new WeakPoint();
            $weak_point->description = $weak_points[$i]['weak_points_description'];
            $weak_point->weight = $weak_points[$i]['weak_points_weight'];
            $weak_point->score = $weak_points[$i]['weak_points_score'];
            $weak_point->team_id = $team_id;
            $weak_point->updated_at = null;
            $weak_point->save();
        }
    }

    protected function OpportunityPoints(DesMarketRequest $request, $team_id)
    {
        $opportunity_points = $request->opportunity_points;
        for ($i = 0; $i < sizeof($opportunity_points); $i++) {
            $opportunity_point = new OpportunityPoint();
            $opportunity_point->description = $opportunity_points[$i]['opportunity_points_description'];
            $opportunity_point->weight = $opportunity_points[$i]['opportunity_points_weight'];
            $opportunity_point->score = $opportunity_points[$i]['opportunity_points_score'];
            $opportunity_point->team_id = $team_id;
            $opportunity_point->updated_at = null;
            $opportunity_point->save();
        }
    }

    protected function Threats(DesMarketRequest $request, $team_id)
    {
        $threats = $request->threats;
        for ($i = 0; $i < sizeof($threats); $i++) {
            $threat = new Threats();
            $threat->description = $threats[$i]['threats_description'];
            $threat->weight = $threats[$i]['threats_weight'];
            $threat->score = $threats[$i]['threats_score'];
            $threat->team_id = $team_id;
            $threat->updated_at = null;
            $threat->save();
        }
    }


}
