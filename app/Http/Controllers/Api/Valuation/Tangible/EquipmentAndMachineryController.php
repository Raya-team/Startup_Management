<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationMachinery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipmentAndMachineryController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $machineries = ValuationMachinery::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json($machineries);
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
        $machineries = ValuationMachinery::where('id', $id)->first();
        return response()->json($machineries);
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
