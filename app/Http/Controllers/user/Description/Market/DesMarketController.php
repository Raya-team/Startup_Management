<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\DesMarketEditRequest;
use App\Http\Requests\DesMarketRequest;
use App\Models\AlternativeProduct;
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
        return view('user.description.market.index');
    }

    public function create()
    {
        return view('user.description.market.index');
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
        $this->AlternativeProduct($request, $team_id);

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.description.market.index');
    }

    public function update(DesMarketEditRequest $request, $id)
    {
        $market = Market::findorfail($id);
        $market->product_introduction = $request->input('market.product_introduction');
        $market->product_features = $request->input('market.product_features');
        $market->product_competitive_advantages = $request->input('market.product_competitive_advantages');
        $market->position_analysis = $request->input('market.position_analysis');
        $market->product_pricing_strategy = $request->input('market.product_pricing_strategy');
        $market->product_marketing_strategy = $request->input('market.product_marketing_strategy');
        $market->market_status = $request->input('market.market_status');
        $market->target_market = $request->input('market.target_market');
        $market->forecast_the_future_of_the_market = $request->input('market.forecast_the_future_of_the_market');
        $market->save();

        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }

    protected function Market(DesMarketRequest $request, Market $market, $team_id)
    {
        $market->product_introduction = $request->input('market.product_introduction');
        $market->product_features = $request->input('market.product_features');
        $market->product_competitive_advantages = $request->input('market.product_competitive_advantages');
        $market->position_analysis = $request->input('market.position_analysis');
        $market->product_pricing_strategy = $request->input('market.product_pricing_strategy');
        $market->product_marketing_strategy = $request->input('market.product_marketing_strategy');
        $market->market_status = $request->input('market.market_status');
        $market->target_market = $request->input('market.target_market');
        $market->forecast_the_future_of_the_market = $request->input('market.forecast_the_future_of_the_market');
        $market->team_id = $team_id;
        $market->updated_at = null;
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
            $product_supply_and_demand->unit_id = $product_supplies[$i]['unit_id'];
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
            $raw_material_supplier->name = $raw_material_suppliers[$i]['name'];
            $raw_material_supplier->geographical_region = $raw_material_suppliers[$i]['geographical_region'];
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
            $producer->name = $producers[$i]['name'];
            $producer->geographical_region = $producers[$i]['geographical_region'];
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
            $supplier->name = $suppliers[$i]['name'];
            $supplier->geographical_region = $suppliers[$i]['geographical_region'];
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
            $retail->name = $retails[$i]['name'];
            $retail->geographical_region = $retails[$i]['geographical_region'];
            $retail->team_id = $team_id;
            $retail->updated_at = null;
            $retail->save();
        }
    }


    protected function EnvironmentalEffect(DesMarketRequest $request, EnvironmentalEffect $effect, $team_id)
    {
        $effect->economical = $request->input('environmental_effect.economical');
        $effect->social = $request->input('environmental_effect.social');
        $effect->political = $request->input('environmental_effect.political');
        $effect->environmental = $request->input('environmental_effect.environmental');
        $effect->team_id = $team_id;
        $effect->updated_at = null;
        $effect->save();
    }

    protected function ProductCompetitors(DesMarketRequest $request, $team_id)
    {
        $product_competitors = $request->product_competitors;
        for ($i = 0; $i < sizeof($product_competitors); $i++) {
            $product_competitor = new ProductCompetitor();
            $product_competitor->name = $product_competitors[$i]['name'];
            $product_competitor->geographical_region = $product_competitors[$i]['geographical_region'];
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
            $strength->description = $strengths[$i]['description'];
            $strength->weight = $strengths[$i]['weight'];
            $strength->score = $strengths[$i]['score'];
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
            $weak_point->description = $weak_points[$i]['description'];
            $weak_point->weight = $weak_points[$i]['weight'];
            $weak_point->score = $weak_points[$i]['score'];
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
            $opportunity_point->description = $opportunity_points[$i]['description'];
            $opportunity_point->weight = $opportunity_points[$i]['weight'];
            $opportunity_point->score = $opportunity_points[$i]['score'];
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
            $threat->description = $threats[$i]['description'];
            $threat->weight = $threats[$i]['weight'];
            $threat->score = $threats[$i]['score'];
            $threat->team_id = $team_id;
            $threat->updated_at = null;
            $threat->save();
        }
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function AlternativeProduct(DesMarketRequest $request, $team_id)
    {
        $alternative_products = $request->alternative_products;
        for ($i = 0; $i < sizeof($alternative_products); $i++) {
            $alternative_product = new AlternativeProduct();
            $alternative_product->product_title = $alternative_products[$i]['product_title'];
            $alternative_product->description = $alternative_products[$i]['description'];
            $alternative_product->team_id = $team_id;
            $alternative_product->updated_at = null;
            $alternative_product->save();
        }
    }


}
