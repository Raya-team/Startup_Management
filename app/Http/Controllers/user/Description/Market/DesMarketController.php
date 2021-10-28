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

    protected function Market(DesMarketRequest $request, Market $market)
    {
        $market->product_introduction = $request->input('product_introduction');
        $market->Product_features = $request->input('product_features');
        $market->Product_competitive_advantages = $request->input('product_competitive_advantages');
        $market->position_analysis = $request->input('position_analysis');
        $market->product_pricing_strategy = $request->input('pricing_strategy');
        $market->product_marketing_strategy = $request->input('marketing_strategy');
        $market->team_id = Auth::user()->team_id;
        $market->save();
    }

    protected function ProductSupplyAndDemand(DesMarketRequest $request)
    {
        $certificates = $request->certificates;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $product_supply_and_demand = new ProductSupplyAndDemand();
            $product_supply_and_demand->year = $certificates[$i]['year'];
            $product_supply_and_demand->general_request = $certificates[$i]['general_request'];
            $product_supply_and_demand->domestic_production = $certificates[$i]['domestic_production'];
            $product_supply_and_demand->importation = $certificates[$i]['importation'];
            $product_supply_and_demand->unit = $certificates[$i]['unit'];
            $product_supply_and_demand->team_id = Auth::user()->team_id;
            $product_supply_and_demand->updated_at = null;
            $product_supply_and_demand->save();
        }
    }

    protected function ProductCustomers(DesMarketRequest $request)
    {
        $product_customers = $request->product_customers;
        for ($i = 0; $i < sizeof($product_customers); $i++) {
            $product_customer = new ProductCustomer();
            $product_customer->customer_features = $product_customers[$i]['customer_features'];
            $product_customer->first_group_customers = $product_customers[$i]['first_group_customers'];
            $product_customer->second_group_customers = $product_customers[$i]['second_group_customers'];
            $product_customer->third_group_customers = $product_customers[$i]['third_group_customers'];
            $product_customer->fourth_group_customers = $product_customers[$i]['fourth_group_customers'];
            $product_customer->team_id = Auth::user()->team_id;
            $product_customer->updated_at = null;
            $product_customer->save();
        }
    }

    protected function RawMaterialSuppliers(DesMarketRequest $request)
    {
        $certificates = $request->certificates;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $raw_material_suppliers = new RawMaterialSupplier();
            $raw_material_suppliers->name = $certificates[$i]['material_suppliers_name'];
            $raw_material_suppliers->geographical_region = $certificates[$i]['material_suppliers_region'];
            $raw_material_suppliers->team_id = Auth::user()->team_id;
            $raw_material_suppliers->updated_at = null;
            $raw_material_suppliers->save();
        }
    }

    protected function Producers(DesMarketRequest $request)
    {
        $certificates = $request->certificates;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $producers = new Producer();
            $producers->name = $certificates[$i]['producers_name'];
            $producers->geographical_region = $certificates[$i]['producers_region'];
            $producers->team_id = Auth::user()->team_id;
            $producers->updated_at = null;
            $producers->save();
        }
    }

    protected function Suppliers(DesMarketRequest $request)
    {
        $certificates = $request->certificates;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $suppliers = new Supplier();
            $suppliers->name = $certificates[$i]['suppliers_name'];
            $suppliers->geographical_region = $certificates[$i]['suppliers_region'];
            $suppliers->team_id = Auth::user()->team_id;
            $suppliers->updated_at = null;
            $suppliers->save();
        }
    }

    protected function Retails(DesMarketRequest $request)
    {
        $certificates = $request->certificates;
        for ($i = 0; $i < sizeof($certificates); $i++) {
            $retails = new Retail();
            $retails->name = $certificates[$i]['retails_name'];
            $retails->geographical_region = $certificates[$i]['retails_region'];
            $retails->team_id = Auth::user()->team_id;
            $retails->updated_at = null;
            $retails->save();
        }
    }


    protected function EnvironmentalEffect(DesMarketRequest $request, EnvironmentalEffect $effect)
    {
        $effect->economical = $request->input('economical');
        $effect->social = $request->input('social');
        $effect->political = $request->input('political');
        $effect->environmental = $request->input('environmental');
        $effect->team_id = Auth::user()->team_id;
        $effect->save();
    }


}
