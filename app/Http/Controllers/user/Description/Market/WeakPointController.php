<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\WeakPointRequest;
use App\Models\WeakPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WeakPointController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(WeakPointRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $weak_points = $request->weak_points;
        for ($i = 0; $i < sizeof($weak_points); $i++) {
            $weak_point = new WeakPoint();
            $weak_point->description = $weak_points[$i]['description'];
            $weak_point->weight = $weak_points[$i]['weight'];
            $weak_point->score = $weak_points[$i]['score'];
            $weak_point->team_id = $team_id;
            $weak_point->updated_at = null;
            $weak_point->save();
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

    public function update(WeakPointRequest $request, $id)
    {
        $weak_point = WeakPoint::findorfail($id);
        $weak_point->description = $request['weak_points'][0]['description'];
        $weak_point->weight = $request['weak_points'][0]['weight'];
        $weak_point->score = $request['weak_points'][0]['score'];
        $weak_point->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $weak_point = WeakPoint::findorfail($id);
        $weak_point->delete();
        return response(["deleted"], 201);
    }
}
