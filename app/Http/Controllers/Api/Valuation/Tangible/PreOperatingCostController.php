<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\PreOperatingCost;
use App\Models\TeamMember;
use App\Models\ValuationPreOperationCost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreOperatingCostController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $pre_operation_costs = ValuationPreOperationCost::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json($pre_operation_costs);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        $pre_operation_costs = PreOperatingCost::where('team_id', $team_id)->get();
        return response()->json([
            'shareholders' => $shareholders,
            'pre_operation_costs' => $pre_operation_costs
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
        $pre_operation_costs = PreOperatingCost::where('team_id', $team_id)->get();
        $valuation_pre_operation_costs = ValuationPreOperationCost::where('id', $id)->first();
        return response()->json([
            'shareholders' => $shareholders,
            'pre_operation_costs' => $pre_operation_costs,
            'valuation_pre_operation_costs' => $valuation_pre_operation_costs
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
