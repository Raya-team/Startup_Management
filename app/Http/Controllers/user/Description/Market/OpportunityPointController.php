<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\OpportunityPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpportunityPointController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;

        $opportunity_points = $request->opportunity_points;
        for ($i = 0; $i < sizeof($opportunity_points); $i++) {
            $opportunity_point = new OpportunityPoint();
            $opportunity_point->description = $opportunity_points[$i]['description'];
            $opportunity_point->weight = $opportunity_points[$i]['weight'];
            $opportunity_point->score = $opportunity_points[$i]['score'];
            $opportunity_point->team_id = $team_id;
            $opportunity_point->updated_at = null;
            $opportunity_point->save();
        }

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.description.market.index');
    }

    public function update(Request $request, $id)
    {
        $opportunity_point = OpportunityPoint::findorfail($id);
        $opportunity_point->description = $request['opportunity_points'][0]['description'];
        $opportunity_point->weight = $request['opportunity_points'][0]['weight'];
        $opportunity_point->score = $request['opportunity_points'][0]['score'];
        $opportunity_point->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $opportunity_point = OpportunityPoint::findorfail($id);
        $opportunity_point->delete();
        return response(["deleted"], 201);
    }
}
