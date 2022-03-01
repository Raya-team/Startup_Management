<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Financial1Request;
use App\Models\CountDay;
use App\Models\DepreciationRate;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Fiscal;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\Transportation;
use App\Models\TypeOfLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Financial1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PlanYear = PlanYear::where('team_id' , Auth::user()->team_id)->first();
        if (!isset($PlanYear)){
            return redirect()->route('financial1.create');
        }
        return view('user.financial.financial1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $PlanYear = PlanYear::where('team_id' , Auth::user()->team_id)->first();
        if (isset($PlanYear)){
            return redirect()->route('financial1.index');
        }
        return view('user.financial.financial1.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Financial1Request $request)
    {
        $team_id = Auth::user()->team_id;
        $this->PlanYear($request, $team_id);
        $this->Fiscal($request, $team_id);
        $this->CountDay($request, $team_id);
        $this->DepreciationRate($request, $team_id);
        $this->TypeOfLocation($request, $team_id);
        $this->Land($request, $team_id);
        $this->LaboratoryEquipment($request, $team_id);
        $this->EquipmentAndMachinery($request, $team_id);
        $this->OfficeEquipmentAndSupply($request, $team_id);
        $this->Facility($request, $team_id);
        $this->Transportation($request, $team_id);
        $this->PreOperatingCost($request, $team_id);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function PlanYear(Financial1Request $request, $team_id)
    {
        $year = new PlanYear();
        $year->number_of_plan_year = $request->input('number_of_plan_year');
        $year->team_id = $team_id;
        $year->updated_at = null;
        $year->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function Fiscal(Financial1Request $request, $team_id)
    {
        $fiscal = new Fiscal();
        $fiscal->dollar = $request->input('dollar');
        $fiscal->inflation = $request->input('inflation');
        $fiscal->loan = $request->input('loan');
        $fiscal->profit = $request->input('profit');
        $fiscal->reimbursement = $request->input('reimbursement');
        $fiscal->team_id = $team_id;
        $fiscal->updated_at = null;
        $fiscal->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function CountDay(Financial1Request $request, $team_id)
    {
        $count_day = new CountDay();
        $count_day->question_1 = $request->input('number_of_day_1');
        $count_day->question_2 = $request->input('number_of_day_2');
        $count_day->question_3 = $request->input('number_of_day_3');
        $count_day->question_4 = $request->input('number_of_day_4');
        $count_day->team_id = $team_id;
        $count_day->updated_at = null;
        $count_day->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function DepreciationRate(Financial1Request $request, $team_id)
    {
        $depreciation = new DepreciationRate();
        $depreciation->question_1 = $request->input('depreciation_rate_1');
        $depreciation->question_2 = $request->input('depreciation_rate_2');
        $depreciation->question_3 = $request->input('depreciation_rate_3');
        $depreciation->question_4 = $request->input('depreciation_rate_4');
        $depreciation->question_5 = $request->input('depreciation_rate_5');
        $depreciation->question_6 = $request->input('depreciation_rate_6');
        $depreciation->team_id = $team_id;
        $depreciation->updated_at = null;
        $depreciation->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function TypeOfLocation(Financial1Request $request, $team_id)
    {
        $type = new TypeOfLocation();
        $type->type = $request->input('type');
        $type->team_id = $team_id;
        $type->updated_at = null;
        $type->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function Land(Financial1Request $request, $team_id)
    {
        $lands = $request->lands;
        for ($i = 0; $i < sizeof($lands); $i++) {
            $land = new Land();
            $land->description = $lands[$i]['description'];
            $land->area = $lands[$i]['area'];
            $land->price = $lands[$i]['price'];
            $land->team_id = $team_id;
            $land->updated_at = null;
            $land->save();
        }
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function LaboratoryEquipment(Financial1Request $request, $team_id)
    {
        $laboratory_equipments = $request->laboratory_equipments;
        for ($i = 0; $i < sizeof($laboratory_equipments); $i++) {
            $laboratory_equipment = new LaboratoryEquipment();
            $laboratory_equipment->description = $laboratory_equipments[$i]['description'];
            $laboratory_equipment->number = $laboratory_equipments[$i]['number'];
            $laboratory_equipment->dollar_unit_price = $laboratory_equipments[$i]['dollar_unit_price'];
            $laboratory_equipment->toman_unit_price = $laboratory_equipments[$i]['toman_unit_price'];
            $laboratory_equipment->total_price = $laboratory_equipments[$i]['toman_unit_price'] * $laboratory_equipments[$i]['number'];
            $laboratory_equipment->team_id = $team_id;
            $laboratory_equipment->updated_at = null;
            $laboratory_equipment->save();
        }
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function OfficeEquipmentAndSupply(Financial1Request $request, $team_id)
    {
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
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function Facility(Financial1Request $request, $team_id)
    {
        $facilities = $request->facilities;
        for ($i = 0; $i < sizeof($facilities); $i++) {
            $facility = new Facility();
            $facility->description = $facilities[$i]['description'];
            $facility->count = $facilities[$i]['count'];
            $facility->unit_price = $facilities[$i]['unit_price'];
            $facility->total_price = $facilities[$i]['unit_price'] * $facilities[$i]['count'];
            $facility->team_id = $team_id;
            $facility->updated_at = null;
            $facility->save();
        }
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function Transportation(Financial1Request $request, $team_id)
    {
        $transportations = $request->transportations;
        for ($i = 0; $i < sizeof($transportations); $i++) {
            $transportation = new Transportation();
            $transportation->description = $transportations[$i]['description'];
            $transportation->count = $transportations[$i]['count'];
            $transportation->unit_price = $transportations[$i]['unit_price'];
            $transportation->total_price = $transportations[$i]['unit_price'] * $transportations[$i]['count'];
            $transportation->team_id = $team_id;
            $transportation->updated_at = null;
            $transportation->save();
        }
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function EquipmentAndMachinery(Financial1Request $request, $team_id)
    {
        $equipmentandmachineries = $request->equipmentandmachineries;
        for ($i = 0; $i < sizeof($equipmentandmachineries); $i++) {
            $equipmentandmachinery = new EquipmentAndMachinery();
            $equipmentandmachinery->description = $equipmentandmachineries[$i]['description'];
            $equipmentandmachinery->count = $equipmentandmachineries[$i]['count'];
            $equipmentandmachinery->unit_price = $equipmentandmachineries[$i]['unit_price'];
            $equipmentandmachinery->total_price = $equipmentandmachineries[$i]['unit_price'] * $equipmentandmachineries[$i]['count'];
            $equipmentandmachinery->team_id = $team_id;
            $equipmentandmachinery->updated_at = null;
            $equipmentandmachinery->save();
        }
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function PreOperatingCost(Financial1Request $request, $team_id)
    {
        $preoperatingcosts = $request->preoperatingcosts;
        for ($i = 0; $i < sizeof($preoperatingcosts); $i++) {
            $preoperatingcost = new PreOperatingCost();
            $preoperatingcost->description = $preoperatingcosts[$i]['description'];
            $preoperatingcost->total_price = $preoperatingcosts[$i]['total_price'];
            $preoperatingcost->team_id = $team_id;
            $preoperatingcost->updated_at = null;
            $preoperatingcost->save();
        }
    }
}
