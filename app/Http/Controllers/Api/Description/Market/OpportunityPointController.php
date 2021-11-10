<?php

namespace App\Http\Controllers\Api\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\OpportunityPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpportunityPointController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $opportunity_points = OpportunityPoint::where('team_id' , $team_id)->paginate(10);

        return response()->json($opportunity_points);
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
        $opportunity_points = OpportunityPoint::where('id', $id)->first();
        return response()->json($opportunity_points);
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
