<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationLaboratoryEquipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaboratoryEquipmentController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $laboratory_equipments = ValuationLaboratoryEquipment::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json($laboratory_equipments);
    }

    public function create()
    {
        //
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
        $laboratory_equipments = ValuationLaboratoryEquipment::where('id', $id)->first();
        return response()->json($laboratory_equipments);
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
