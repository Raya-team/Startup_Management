<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Http\Requests\TangibleEditRequest;
use App\Http\Requests\TangibleRequest;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationPreOperationCost;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use Illuminate\Support\Facades\Auth;

class TangibleController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $valuation_tenement = ValuationTenement::where('team_id', $team_id)->first();
        $valuation_laboratory_equipments = ValuationLaboratoryEquipment::where('team_id', $team_id)->first();
        $valuation_machineries = ValuationMachinery::where('team_id', $team_id)->first();
        $valuation_office_supplies = ValuationOfficeSupply::where('team_id', $team_id)->first();
        $valuation_facilities = ValuationFacility::where('team_id', $team_id)->first();
        $valuation_transportations = ValuationTransportation::where('team_id', $team_id)->first();
        $valuation_pre_operation_costs = ValuationPreOperationCost::where('team_id', $team_id)->first();
        if (!isset($valuation_tenement) && !isset($valuation_laboratory_equipments) && !isset($valuation_machineries) && !isset($valuation_office_supplies) && !isset($valuation_facilities) && !isset($valuation_transportations) && !isset($valuation_pre_operation_costs)){
            return redirect()->route('valuation-tangible.create');
        }
        return view('user.valuation.tangible.index');
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $valuation_tenement = ValuationTenement::where('team_id', $team_id)->first();
        $valuation_laboratory_equipments = ValuationLaboratoryEquipment::where('team_id', $team_id)->first();
        $valuation_machineries = ValuationMachinery::where('team_id', $team_id)->first();
        $valuation_office_supplies = ValuationOfficeSupply::where('team_id', $team_id)->first();
        $valuation_facilities = ValuationFacility::where('team_id', $team_id)->first();
        $valuation_transportations = ValuationTransportation::where('team_id', $team_id)->first();
        $valuation_pre_operation_costs = ValuationPreOperationCost::where('team_id', $team_id)->first();
        if (isset($valuation_tenement) && isset($valuation_laboratory_equipments) && isset($valuation_machineries) && isset($valuation_office_supplies) && isset($valuation_facilities) && isset($valuation_transportations) && isset($valuation_pre_operation_costs)){
            return redirect()->route('valuation-tangible.index');
        }
        return view('user.valuation.tangible.index');
    }

    public function store(TangibleRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $this->ValuationTenement($request, $team_id);
        $this->ValuationLaboratoryEquipment($request, $team_id);
        $this->ValuationMachinery($request, $team_id);
        $this->ValuationOfficeSupply($request, $team_id);
        $this->ValuationFacility($request, $team_id);
        $this->ValuationTransportation($request, $team_id);
        $this->ValuationPreOperationCost($request, $team_id);

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (Auth::user()->team_id == $id){
            return view('user.valuation.tangible.index');
        }
        abort(404);
    }

    public function update(TangibleEditRequest $request, $id)
    {
       //
    }

    public function destroy($id)
    {
        //
    }

    protected function ValuationTenement(TangibleRequest $request, $team_id)
    {
        $valuation_tenements = $request->valuation_tenements;
        for ($i = 0; $i < sizeof($valuation_tenements); $i++) {
            $valuation_tenement = new ValuationTenement();
            $valuation_tenement->description = $valuation_tenements[$i]['description'];
            $valuation_tenement->area = $valuation_tenements[$i]['area'];
            $valuation_tenement->owner = $valuation_tenements[$i]['owner'];
            $valuation_tenement->total_price = $valuation_tenements[$i]['total_price'];
            $valuation_tenement->team_id = $team_id;
            $valuation_tenement->updated_at = null;
            $valuation_tenement->save();
        }
    }

    protected function ValuationLaboratoryEquipment(TangibleRequest $request, $team_id)
    {
        $valuation_laboratory_equipments = $request->valuation_laboratory_equipments;
        for ($i = 0; $i < sizeof($valuation_laboratory_equipments); $i++) {
            $valuation_laboratory_equipment = new ValuationLaboratoryEquipment();
            $valuation_laboratory_equipment->description = $valuation_laboratory_equipments[$i]['description'];
            $valuation_laboratory_equipment->number = $valuation_laboratory_equipments[$i]['number'];
            $valuation_laboratory_equipment->owner = $valuation_laboratory_equipments[$i]['owner'];
            $valuation_laboratory_equipment->dollar_unit_price = $valuation_laboratory_equipments[$i]['dollar_unit_price'];
            $valuation_laboratory_equipment->toman_unit_price = $valuation_laboratory_equipments[$i]['toman_unit_price'];
            $valuation_laboratory_equipment->total_price = $valuation_laboratory_equipments[$i]['toman_unit_price'] * $valuation_laboratory_equipments[$i]['number'];
            $valuation_laboratory_equipment->team_id = $team_id;
            $valuation_laboratory_equipment->updated_at = null;
            $valuation_laboratory_equipment->save();
        }
    }

    protected function ValuationMachinery(TangibleRequest $request, $team_id)
    {
        $valuation_machineries = $request->valuation_machineries;
        for ($i = 0; $i < sizeof($valuation_machineries); $i++) {
            $valuation_machinerie = new ValuationMachinery();
            $valuation_machinerie->description = $valuation_machineries[$i]['description'];
            $valuation_machinerie->number = $valuation_machineries[$i]['number'];
            $valuation_machinerie->owner = $valuation_machineries[$i]['owner'];
            $valuation_machinerie->unit_price = $valuation_machineries[$i]['unit_price'];
            $valuation_machinerie->total_price = $valuation_machineries[$i]['unit_price'] * $valuation_machineries[$i]['number'];
            $valuation_machinerie->team_id = $team_id;
            $valuation_machinerie->updated_at = null;
            $valuation_machinerie->save();
        }
    }

    protected function ValuationOfficeSupply(TangibleRequest $request, $team_id)
    {
        $valuation_office_supplies = $request->valuation_office_supplies;
        for ($i = 0; $i < sizeof($valuation_office_supplies); $i++) {
            $valuation_office_supply = new ValuationOfficeSupply();
            $valuation_office_supply->description = $valuation_office_supplies[$i]['description'];
            $valuation_office_supply->number = $valuation_office_supplies[$i]['number'];
            $valuation_office_supply->owner = $valuation_office_supplies[$i]['owner'];
            $valuation_office_supply->unit_price = $valuation_office_supplies[$i]['unit_price'];
            $valuation_office_supply->total_price = $valuation_office_supplies[$i]['unit_price'] * $valuation_office_supplies[$i]['number'];
            $valuation_office_supply->team_id = $team_id;
            $valuation_office_supply->updated_at = null;
            $valuation_office_supply->save();
        }
    }

    protected function ValuationFacility(TangibleRequest $request, $team_id)
    {
        $valuation_facilities = $request->valuation_facilities;
        for ($i = 0; $i < sizeof($valuation_facilities); $i++) {
            $valuation_facilitie = new ValuationFacility();
            $valuation_facilitie->description = $valuation_facilities[$i]['description'];
            $valuation_facilitie->number = $valuation_facilities[$i]['number'];
            $valuation_facilitie->owner = $valuation_facilities[$i]['owner'];
            $valuation_facilitie->unit_price = $valuation_facilities[$i]['unit_price'];
            $valuation_facilitie->total_price = $valuation_facilities[$i]['unit_price'] * $valuation_facilities[$i]['number'];
            $valuation_facilitie->team_id = $team_id;
            $valuation_facilitie->updated_at = null;
            $valuation_facilitie->save();
        }
    }

    protected function ValuationTransportation(TangibleRequest $request, $team_id)
    {
        $valuation_transportations = $request->valuation_transportations;
        for ($i = 0; $i < sizeof($valuation_transportations); $i++) {
            $valuation_transportation = new ValuationTransportation();
            $valuation_transportation->description = $valuation_transportations[$i]['description'];
            $valuation_transportation->number = $valuation_transportations[$i]['number'];
            $valuation_transportation->owner = $valuation_transportations[$i]['owner'];
            $valuation_transportation->unit_price = $valuation_transportations[$i]['unit_price'];
            $valuation_transportation->total_price = $valuation_transportations[$i]['unit_price'] * $valuation_transportations[$i]['number'];
            $valuation_transportation->team_id = $team_id;
            $valuation_transportation->updated_at = null;
            $valuation_transportation->save();
        }
    }

    protected function ValuationPreOperationCost(TangibleRequest $request, $team_id)
    {
        $valuation_pre_operation_costs = $request->valuation_pre_operation_costs;
        for ($i = 0; $i < sizeof($valuation_pre_operation_costs); $i++) {
            $valuation_pre_operation_cost = new ValuationPreOperationCost();
            $valuation_pre_operation_cost->description = $valuation_pre_operation_costs[$i]['description'];
            $valuation_pre_operation_cost->owner = $valuation_pre_operation_costs[$i]['owner'];
            $valuation_pre_operation_cost->total_price = $valuation_pre_operation_costs[$i]['total_price'];
            $valuation_pre_operation_cost->team_id = $team_id;
            $valuation_pre_operation_cost->updated_at = null;
            $valuation_pre_operation_cost->save();
        }
    }
}
