<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\ProductSupplyAndDemand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSupplyAndDemandController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;

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

    public function update(Request $request, $id)
    {
        $product_supply_and_demand = ProductSupplyAndDemand::findorfail($id);
        $product_supply_and_demand->year = $request['product_supplies'][0]['year'];
        $product_supply_and_demand->general_request = $request['product_supplies'][0]['general_request'];
        $product_supply_and_demand->domestic_production = $request['product_supplies'][0]['domestic_production'];
        $product_supply_and_demand->importation = $request['product_supplies'][0]['importation'];
        $product_supply_and_demand->unit_id = $request['product_supplies'][0]['unit_id'];
        $product_supply_and_demand->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $product_supply_and_demand = ProductSupplyAndDemand::findorfail($id);
        $product_supply_and_demand->delete();
        return response(["deleted"], 201);
    }
}
