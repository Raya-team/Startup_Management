<?php

namespace App\Http\Controllers\user\Valuation\Cost;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValuationCostRequest;
use App\Models\ValuationCost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.valuation.cost.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.valuation.cost.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValuationCostRequest $request)
    {
        $costs = $request->costs;
        for ($i = 0; $i < sizeof($costs); $i++) {
            $cost = new ValuationCost();
            $cost->description = $costs[$i]['description'];
            $cost->total_price = $costs[$i]['total_price'];
            $cost->team_id = Auth::user()->team_id;
            $cost->updated_at = null;
            $cost->save();
        }
        return response(['success'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team_id = Auth::user()->team_id;
        $cost = ValuationCost::findorfail($id);
        if ($team_id == $cost->team_id) {
            return view('user.valuation.cost.index');
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValuationCostRequest $request, $id)
    {
        $cost = ValuationCost::findorfail($id);
        $cost->description = $request['costs'][0]['description'];
        $cost->total_price = $request['costs'][0]['total_price'];
        $cost->team_id = Auth::user()->team_id;
        $cost->save();
        return response(['success'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $land = ValuationCost::findorfail($id);
        $land->delete();
        return response(["deleted"], 201);
    }
}
