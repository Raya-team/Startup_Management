<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationLaboratoryEquipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaboratoryEquipmentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.valuation.tangible.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;

        $valuation_laboratory_equipments = $request->valuation_laboratory_equipments;
        for ($i = 0; $i < sizeof($valuation_laboratory_equipments); $i++) {
            $valuation_laboratory_equipment = new ValuationLaboratoryEquipment();
            $valuation_laboratory_equipment->description = $valuation_laboratory_equipments[$i]['description'];
            $valuation_laboratory_equipment->number = $valuation_laboratory_equipments[$i]['number'];
            $valuation_laboratory_equipment->owner = $valuation_laboratory_equipments[$i]['owner'];
            $valuation_laboratory_equipment->dollar_unit_price = $valuation_laboratory_equipments[$i]['dollar_unit_price'];
            $valuation_laboratory_equipment->toman_unit_price = $valuation_laboratory_equipments[$i]['toman_unit_price'];
            $valuation_laboratory_equipment->total_price = $valuation_laboratory_equipments[$i]['total_price'];
            $valuation_laboratory_equipment->team_id = $team_id;
            $valuation_laboratory_equipment->updated_at = null;
            $valuation_laboratory_equipment->save();
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

    public function update(Request $request, $id)
    {
        $valuation_laboratory_equipment = ValuationLaboratoryEquipment::findorfail($id);
        $valuation_laboratory_equipment->description = $request['valuation_laboratory_equipments'][0]['description'];
        $valuation_laboratory_equipment->number = $request['valuation_laboratory_equipments'][0]['number'];
        $valuation_laboratory_equipment->owner = $request['valuation_laboratory_equipments'][0]['owner'];
        $valuation_laboratory_equipment->dollar_unit_price = $request['valuation_laboratory_equipments'][0]['dollar_unit_price'];
        $valuation_laboratory_equipment->toman_unit_price = $request['valuation_laboratory_equipments'][0]['toman_unit_price'];
        $valuation_laboratory_equipment->total_price = $request['valuation_laboratory_equipments'][0]['total_price'];
        $valuation_laboratory_equipment->team_id = Auth::user()->team_id;
        $valuation_laboratory_equipment->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }
}
