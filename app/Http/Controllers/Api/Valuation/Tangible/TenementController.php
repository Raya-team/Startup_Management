<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
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
        $tenements = ValuationTenement::where('id', $id)->first();
        return response()->json($tenements);
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
