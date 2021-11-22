<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
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
        $offices = ValuationOfficeSupply::where('id', $id)->first();
        return response()->json($offices);
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
