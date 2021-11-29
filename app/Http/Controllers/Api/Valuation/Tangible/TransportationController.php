<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\Transportation;
use App\Models\ValuationTransportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransportationController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $transportations = ValuationTransportation::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json($transportations);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        $transportations = Transportation::where('team_id', $team_id)->get();
        return response()->json([
            'shareholders' => $shareholders,
            'transportations' => $transportations
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
        $transportations = Transportation::where('team_id', $team_id)->get();
        $valuation_transportations = ValuationTransportation::where('id', $id)->first();
        return response()->json([
            'shareholders' => $shareholders,
            'transportations' => $transportations,
            'valuation_transportations' => $valuation_transportations
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
