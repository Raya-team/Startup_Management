<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $facilities = ValuationFacility::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json($facilities);
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
        $facilities = ValuationFacility::where('id', $id)->first();
        return response()->json($facilities);
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
