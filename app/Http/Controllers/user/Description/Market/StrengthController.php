<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\StrengthsRequest;
use App\Models\Strengths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StrengthController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(StrengthsRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $strengths = $request->strengths;
        for ($i = 0; $i < sizeof($strengths); $i++) {
            $strength = new Strengths();
            $strength->description = $strengths[$i]['description'];
            $strength->weight = $strengths[$i]['weight'];
            $strength->score = $strengths[$i]['score'];
            $strength->team_id = $team_id;
            $strength->updated_at = null;
            $strength->save();
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

    public function update(StrengthsRequest $request, $id)
    {
        $strength = Strengths::findorfail($id);
        $strength->description = $request['strengths'][0]['description'];
        $strength->weight = $request['strengths'][0]['weight'];
        $strength->score = $request['strengths'][0]['score'];
        $strength->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $strength = Strengths::findorfail($id);
        $strength->delete();
        return response(["deleted"], 201);
    }
}
