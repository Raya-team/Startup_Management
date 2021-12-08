<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\EnergyConsumption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnergyConsumptionController extends Controller
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
    public function create($year)
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
        $energyConsumptions = $request->energy_consumption;
        for ($i = 0; $i < sizeof($energyConsumptions); $i++) {
            $energyConsumption = new EnergyConsumption();
            $energyConsumption->description = $energyConsumptions[$i]['description'];
            $energyConsumption->unit = $energyConsumptions[$i]['unit'];
            $energyConsumption->annual_consumption = $energyConsumptions[$i]['annual_consumption'];
            $energyConsumption->unit_cost = $energyConsumptions[$i]['unit_cost'];
            $energyConsumption->annual_cost = $energyConsumptions[$i]['unit_cost'] * $energyConsumptions[$i]['annual_consumption'];
            $energyConsumption->year = $request->year;
            $energyConsumption->team_id = $team_id;
            $energyConsumption->updated_at = null;
            $energyConsumption->save();
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
        $energyConsumption = EnergyConsumption::findorfail($id);
        $energyConsumption->description = $request['energy_consumption'][0]['description'];
        $energyConsumption->unit = $request['energy_consumption'][0]['unit'];
        $energyConsumption->annual_consumption = $request['energy_consumption'][0]['annual_consumption'];
        $energyConsumption->unit_cost = $request['energy_consumption'][0]['unit_cost'];
        $energyConsumption->annual_cost = $request['energy_consumption'][0]['unit_cost'] * $request['energy_consumption'][0]['annual_consumption'];
        $energyConsumption->save();
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
        $energyConsumption = EnergyConsumption::findorfail($id);
        $energyConsumption->delete();
        return response(["deleted"], 201);
    }
}
