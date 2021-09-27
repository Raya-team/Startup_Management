<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeEquipmentAndSupplyRequest;
use App\Models\OfficeEquipmentAndSupply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficeEquipmentAndSupplyController extends Controller
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
    public function store(OfficeEquipmentAndSupplyRequest $request)
    {
        $officeequipmentandsupplies = $request->officeequipmentandsupplies;
        for ($i = 0; $i < sizeof($officeequipmentandsupplies); $i++) {
            $officeequipmentandsupply = new OfficeEquipmentAndSupply();
            $officeequipmentandsupply->description = $officeequipmentandsupplies[$i]['description'];
            $officeequipmentandsupply->count = $officeequipmentandsupplies[$i]['count'];
            $officeequipmentandsupply->unit_price = $officeequipmentandsupplies[$i]['unit_price'];
            $officeequipmentandsupply->total_price = $officeequipmentandsupplies[$i]['total_price'];
            $officeequipmentandsupply->team_id = Auth::user()->team_id;
            $officeequipmentandsupply->updated_at = null;
            $officeequipmentandsupply->save();
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
        $officeequipmentandsupply = OfficeEquipmentAndSupply::findorfail($id);
        if ($team_id == $officeequipmentandsupply->team_id){
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
    public function update(OfficeEquipmentAndSupplyRequest $request, OfficeEquipmentAndSupply $officeequipmentandsupply)
    {
        $officeequipmentandsupply->description = $request['officeequipmentandsupplies'][0]['description'];
        $officeequipmentandsupply->count = $request['officeequipmentandsupplies'][0]['count'];
        $officeequipmentandsupply->unit_price = $request['officeequipmentandsupplies'][0]['unit_price'];
        $officeequipmentandsupply->total_price = $request['officeequipmentandsupplies'][0]['total_price'];
        $officeequipmentandsupply->team_id = Auth::user()->team_id;
        $officeequipmentandsupply->save();
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
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::findorfail($id);
        $officeequipmentandsupplies->delete();
        return response(["deleted"], 201);
    }
}
