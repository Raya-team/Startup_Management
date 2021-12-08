<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\TransportationCost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransportationCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.financial.financial2.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;
        $transportationCosts = $request->transportation_cost;
        for ($i = 0; $i < sizeof($transportationCosts); $i++) {
            $transportationCost = new TransportationCost();
            $transportationCost->description = $transportationCosts[$i]['description'];
            $transportationCost->number = $transportationCosts[$i]['number'];
            $transportationCost->unit_cost = $transportationCosts[$i]['unit_cost'];
            $transportationCost->total_cost = $transportationCosts[$i]['unit_cost'] * $transportationCosts[$i]['number'];
            $transportationCost->year = $request->year;
            $transportationCost->team_id = $team_id;
            $transportationCost->updated_at = null;
            $transportationCost->save();
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
        return view('user.financial.financial2.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transportationCost = TransportationCost::findorfail($id);
        $transportationCost->description = $request['transportation_cost'][0]['description'];
        $transportationCost->number = $request['transportation_cost'][0]['number'];
        $transportationCost->unit_cost = $request['transportation_cost'][0]['unit_cost'];
        $transportationCost->total_cost = $request['transportation_cost'][0]['unit_cost'] * $request['transportation_cost'][0]['number'];
        $transportationCost->save();
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
        $transportationCost = TransportationCost::findorfail($id);
        $transportationCost->delete();
        return response(["deleted"], 201);
    }
}
