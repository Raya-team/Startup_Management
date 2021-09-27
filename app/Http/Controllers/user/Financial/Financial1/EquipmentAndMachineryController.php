<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\EquipmentAndMachineryRequest;
use App\Models\EquipmentAndMachinery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipmentAndMachineryController extends Controller
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
        return view('user.financial.financial1.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentAndMachineryRequest $request)
    {
        $equipmentandmachineries = $request->equipmentandmachineries;
        for ($i = 0; $i < sizeof($equipmentandmachineries); $i++) {
            $equipmentandmachinery = new EquipmentAndMachinery();
            $equipmentandmachinery->description = $equipmentandmachineries[$i]['description'];
            $equipmentandmachinery->count = $equipmentandmachineries[$i]['count'];
            $equipmentandmachinery->unit_price = $equipmentandmachineries[$i]['unit_price'];
            $equipmentandmachinery->total_price = $equipmentandmachineries[$i]['total_price'];
            $equipmentandmachinery->team_id = Auth::user()->team_id;
            $equipmentandmachinery->updated_at = null;
            $equipmentandmachinery->save();
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
        $equipmentandmachinery = EquipmentAndMachinery::findorfail($id);
        if ($team_id == $equipmentandmachinery->team_id){
            return view('user.financial.financial1.index');
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
    public function update(EquipmentAndMachineryRequest $request, EquipmentAndMachinery $equipmentandmachinery)
    {
        $equipmentandmachinery->description = $request['equipmentandmachineries'][0]['description'];
        $equipmentandmachinery->count = $request['equipmentandmachineries'][0]['count'];
        $equipmentandmachinery->unit_price = $request['equipmentandmachineries'][0]['unit_price'];
        $equipmentandmachinery->total_price = $request['equipmentandmachineries'][0]['total_price'];
        $equipmentandmachinery->team_id = Auth::user()->team_id;
        $equipmentandmachinery->save();
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
        $equipmentandmachineries = EquipmentAndMachinery::findorfail($id);
        $equipmentandmachineries->delete();
        return response(["deleted"], 201);
    }
}
