<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\Land;
use App\Models\TeamMember;
use App\Models\ValuationTenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenementController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $tenements = ValuationTenement::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json($tenements);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        $tenements = Land::where('team_id', $team_id)->get();
        return response()->json([
            'shareholders' => $shareholders,
            'tenements' => $tenements
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
        $tenements = Land::where('team_id', $team_id)->get();
        $valuation_tenements = ValuationTenement::where('id', $id)->first();
        return response()->json([
            'shareholders' => $shareholders,
            'tenements' => $tenements,
            'valuation_tenements' => $valuation_tenements
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
