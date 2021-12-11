<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThreatsRequest;
use App\Models\Threats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreatController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(ThreatsRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $threats = $request->threats;
        for ($i = 0; $i < sizeof($threats); $i++) {
            $threat = new Threats();
            $threat->description = $threats[$i]['description'];
            $threat->weight = $threats[$i]['weight'];
            $threat->score = $threats[$i]['score'];
            $threat->team_id = $team_id;
            $threat->updated_at = null;
            $threat->save();
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

    public function update(ThreatsRequest $request, $id)
    {
        $threat = Threats::findorfail($id);
        $threat->description = $request['threats'][0]['description'];
        $threat->weight = $request['threats'][0]['weight'];
        $threat->score = $request['threats'][0]['score'];
        $threat->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $threat = Threats::findorfail($id);
        $threat->delete();
        return response(["deleted"], 201);
    }
}
