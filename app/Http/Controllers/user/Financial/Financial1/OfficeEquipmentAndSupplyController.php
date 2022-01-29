<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeEquipmentAndSupplyRequest;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\Repair;
use App\Models\Transportation;
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
        $team_id = Auth::user()->team_id;
        $officeequipmentandsupplies = $request->officeequipmentandsupplies;
        for ($i = 0; $i < sizeof($officeequipmentandsupplies); $i++) {
            $officeequipmentandsupply = new OfficeEquipmentAndSupply();
            $officeequipmentandsupply->description = $officeequipmentandsupplies[$i]['description'];
            $officeequipmentandsupply->count = $officeequipmentandsupplies[$i]['count'];
            $officeequipmentandsupply->unit_price = $officeequipmentandsupplies[$i]['unit_price'];
            $officeequipmentandsupply->total_price = $officeequipmentandsupplies[$i]['unit_price'] * $officeequipmentandsupplies[$i]['count'];
            $officeequipmentandsupply->team_id = $team_id;
            $officeequipmentandsupply->updated_at = null;
            $officeequipmentandsupply->save();
        }

        $sum_tenements = Land::where('team_id', $team_id)->get()->sum('price');
        /* تجهیزات و ماشین آلات فنی */
        $sum_equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات آزمایشگاهی */
        $sum_laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات و لوازم دفتری */
        $sum_office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        /* تاسیسات */
        $sum_facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        /* وسایل حمل و نقل */
        $sum_transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        /* مجموع اطلاعات مالی 1 به غیر از هزینه های قبل بهره برداری */
        $total_financial1 = $sum_tenements + $sum_equipment_and_machineries + $sum_laboratory_equipments + $sum_facilities + $sum_transportations + $sum_office_equipment_and_supplise;

        $repairs = Repair::where('team_id', $team_id)->get();

        foreach ($repairs as $repair){
            $repair->total_cost = $total_financial1 * $repair->percent;
            $repair->save();
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
        $officeequipmentandsupply->total_price = $request['officeequipmentandsupplies'][0]['unit_price'] * $request['officeequipmentandsupplies'][0]['count'];
        $officeequipmentandsupply->save();

        $team_id = Auth::user()->team_id;

        $sum_tenements = Land::where('team_id', $team_id)->get()->sum('price');
        /* تجهیزات و ماشین آلات فنی */
        $sum_equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات آزمایشگاهی */
        $sum_laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات و لوازم دفتری */
        $sum_office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        /* تاسیسات */
        $sum_facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        /* وسایل حمل و نقل */
        $sum_transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        /* مجموع اطلاعات مالی 1 به غیر از هزینه های قبل بهره برداری */
        $total_financial1 = $sum_tenements + $sum_equipment_and_machineries + $sum_laboratory_equipments + $sum_facilities + $sum_transportations + $sum_office_equipment_and_supplise;

        $repairs = Repair::where('team_id', $team_id)->get();

        foreach ($repairs as $repair){
            $repair->total_cost = $total_financial1 * $repair->percent;
            $repair->save();
        }

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
