<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\TeamMember;
use App\Models\ValuationOfficeSupply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficeEquipmentAndSupplyController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $offices = ValuationOfficeSupply::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json($offices);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        $office_supplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->get();
        return response()->json([
            'shareholders' => $shareholders,
            'office_supplies' => $office_supplies
        ]);
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
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        $office_supplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->get();
        $valuation_office_supplies = ValuationOfficeSupply::where('id', $id)->first();
        return response()->json([
            'shareholders' => $shareholders,
            'office_supplies' => $office_supplies,
            'valuation_office_supplies' => $valuation_office_supplies
        ]);
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
