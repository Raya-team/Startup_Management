<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Http\Requests\RepairRequest;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\Repair;
use App\Models\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepairController extends Controller
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
    public function store(RepairRequest $request)
    {
        $team_id = Auth::user()->team_id;
        /* (اطلاعات مالی1) */
        /* مستغلات */
        $tenements = Land::where('team_id', $team_id)->get()->sum('price');
        /* تجهیزات و ماشین آلات فنی */
        $equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات آزمایشگاهی */
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات و لوازم دفتری */
        $office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        /* تاسیسات */
        $facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        /* وسایل حمل و نقل */
        $transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        /* مجموع اطلاعات مالی 1 به غیر از هزینه های قبل بهره برداری */
        $total_financial1 = $tenements + $equipment_and_machineries + $laboratory_equipments + $facilities + $transportations + $office_equipment_and_supplise;

        $repairs = $request->repair;
        for ($i = 0; $i < sizeof($repairs); $i++) {
            $repair = new Repair();
            $repair->description = $repairs[$i]['description'];
            $repair->percent = $repairs[$i]['percent'];
            $repair->total_cost = $total_financial1 * $repairs[$i]['percent'];
            $repair->year = $request->year;
            $repair->team_id = $team_id;
            $repair->updated_at = null;
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
        return view('user.financial.financial2.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RepairRequest $request, $id)
    {
        $team_id = Auth::user()->team_id;
        /* (اطلاعات مالی1) */
        /* مستغلات */
        $tenements = Land::where('team_id', $team_id)->get()->sum('price');
        /* تجهیزات و ماشین آلات فنی */
        $equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات آزمایشگاهی */
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات و لوازم دفتری */
        $office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        /* تاسیسات */
        $facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        /* وسایل حمل و نقل */
        $transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        /* مجموع اطلاعات مالی 1 به غیر از هزینه های قبل بهره برداری */
        $total_financial1 = $tenements + $equipment_and_machineries + $laboratory_equipments + $facilities + $transportations + $office_equipment_and_supplise;

        $repair = Repair::findorfail($id);
        $repair->description = $request['repair'][0]['description'];
        $repair->percent = $request['repair'][0]['percent'];
        $repair->total_cost = $total_financial1 * $request['repair'][0]['percent'];
        $repair->save();
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
        $repair = Repair::findorfail($id);
        $repair->delete();
        return response(["deleted"], 201);
    }
}
