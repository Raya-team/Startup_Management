<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LaboratoryEquipmentRequest;
use App\Models\LaboratoryEquipment;
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
        return view('user.financial.financial1.index');
    }

    public function store(LaboratoryEquipmentRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $laboratory_equipments = $request->laboratory_equipments;
        for ($i = 0; $i < sizeof($laboratory_equipments); $i++) {
            $laboratory_equipment = new LaboratoryEquipment();
            $laboratory_equipment->description = $laboratory_equipments[$i]['description'];
            $laboratory_equipment->number = $laboratory_equipments[$i]['number'];
            $laboratory_equipment->dollar_unit_price = $laboratory_equipments[$i]['dollar_unit_price'];
            $laboratory_equipment->toman_unit_price = $laboratory_equipments[$i]['toman_unit_price'];
            $laboratory_equipment->total_price = $laboratory_equipments[$i]['toman_unit_price'] * $laboratory_equipments[$i]['number'];
            $laboratory_equipment->team_id = $team_id;
            $laboratory_equipment->updated_at = null;
            $laboratory_equipment->save();
        }
        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team_id = Auth::user()->team_id;
        $laboratory_equipment = LaboratoryEquipment::findorfail($id);
        if ($team_id == $laboratory_equipment->team_id){
            return view('user.financial.financial1.index');
        }
        abort(404);
    }

    public function update(LaboratoryEquipmentRequest $request, LaboratoryEquipment $laboratory_equipment)
    {
        $laboratory_equipment->description = $request['laboratory_equipments'][0]['description'];
        $laboratory_equipment->number = $request['laboratory_equipments'][0]['number'];
        $laboratory_equipment->dollar_unit_price = $request['laboratory_equipments'][0]['dollar_unit_price'];
        $laboratory_equipment->toman_unit_price = $request['laboratory_equipments'][0]['toman_unit_price'];
        $laboratory_equipment->total_price = $request['laboratory_equipments'][0]['toman_unit_price'] * $request['laboratory_equipments'][0]['number'];
        $laboratory_equipment->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $laboratory_equipment = LaboratoryEquipment::findorfail($id);
        $laboratory_equipment->delete();
        return response(["deleted"], 201);
    }
}
