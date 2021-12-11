<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValuationOfficeSupplyRequest;
use App\Models\ValuationOfficeSupply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficeEquipmentAndSupplyController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.valuation.tangible.index');
    }

    public function store(ValuationOfficeSupplyRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $valuation_office_supplies = $request->valuation_office_supplies;
        for ($i = 0; $i < sizeof($valuation_office_supplies); $i++) {
            $valuation_office_supply = new ValuationOfficeSupply();
            $valuation_office_supply->description = $valuation_office_supplies[$i]['description'];
            $valuation_office_supply->number = $valuation_office_supplies[$i]['number'];
            $valuation_office_supply->owner = $valuation_office_supplies[$i]['owner'];
            $valuation_office_supply->unit_price = $valuation_office_supplies[$i]['unit_price'];
            $valuation_office_supply->total_price = $valuation_office_supplies[$i]['unit_price'] * $valuation_office_supplies[$i]['number'];
            $valuation_office_supply->team_id = $team_id;
            $valuation_office_supply->updated_at = null;
            $valuation_office_supply->save();
        }

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.valuation.tangible.index');
    }

    public function update(ValuationOfficeSupplyRequest $request, $id)
    {
        $valuation_office_supply = ValuationOfficeSupply::findorfail($id);
        $valuation_office_supply->description = $request['valuation_office_supplies'][0]['description'];
        $valuation_office_supply->number = $request['valuation_office_supplies'][0]['number'];
        $valuation_office_supply->owner = $request['valuation_office_supplies'][0]['owner'];
        $valuation_office_supply->unit_price = $request['valuation_office_supplies'][0]['unit_price'];
        $valuation_office_supply->total_price = $request['valuation_office_supplies'][0]['unit_price'] * $request['valuation_office_supplies'][0]['number'];
        $valuation_office_supply->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $data = ValuationOfficeSupply::findorfail($id);
        $data->delete();
        return response(["deleted"], 201);
    }
}
