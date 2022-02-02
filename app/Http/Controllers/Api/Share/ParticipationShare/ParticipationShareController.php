<?php

namespace App\Http\Controllers\Api\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Fiscal;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\ParticipationNewInvestor;
use App\Models\ParticipationPreInvestor;
use App\Models\PreOperatingCost;
use App\Models\TeamMember;
use App\Models\Transportation;
use App\Models\ValuationCost;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationOtherAsset;
use App\Models\ValuationPreOperationCost;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipationShareController extends Controller
{
    public function index()
    {

        $team_id = Auth::user()->team_id;
        //اطلاعات مالی یک
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->sum('price');
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->sum('total_price');
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->sum('total_price');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->sum('total_price');
        $facilities = Facility::where('team_id', $team_id)->sum('total_price');
        $transportations = Transportation::where('team_id', $team_id)->sum('total_price');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        $financial_total_price = array_sum([$lands,$laboratory_equipments,$equipmentandmachineries,$officeequipmentandsupplies,$facilities,$transportations,$preoperatingcosts]);
        //ارزش گذاری مشهود
        $tenements = ValuationTenement::where('team_id', $team_id)->sum('total_price');
        $facilities = ValuationFacility::where('team_id', $team_id)->sum('total_price');
        $machineries = ValuationMachinery::where('team_id', $team_id)->sum('total_price');
        $laboratory_equipments = ValuationLaboratoryEquipment::where('team_id', $team_id)->sum('total_price');
        $offices = ValuationOfficeSupply::where('team_id', $team_id)->sum('total_price');
        $transportations = ValuationTransportation::where('team_id', $team_id)->sum('total_price');
        $pre_operation_costs = ValuationPreOperationCost::where('team_id', $team_id)->sum('total_price');
        //ارزش دانش فنی
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        $valuation_total_price = array_sum([$tenements,$facilities,$machineries,$laboratory_equipments,$offices,$transportations,$pre_operation_costs,$valuation_cost]);
        //خالص سرمایه گذاری
        $net_investment = ($financial_total_price) - ($valuation_total_price + $fiscal->loan);

        $pre_investors = ParticipationPreInvestor::with('investor')->where('team_id', $team_id)->get();
        $arr1=[];
        foreach ($pre_investors as $pre_investor)
        {
            $response_name = [];
            $collect = collect($pre_investor);
            $full_name = $collect['investor']['fname'] . " " . $collect['investor']['lname'];
            $responsibilities = $collect['investor']['responsibility'];
            foreach ($responsibilities as $responsibility){
                array_push($response_name, $responsibility['nickname']);
            }
            $investment =  ($collect['investment']/$net_investment)*100;
            array_push($arr1, [$full_name, $response_name, round($investment, 2)]);
        }

        $new_investors = ParticipationNewInvestor::where('team_id', $team_id)->get();
        foreach ($new_investors as $new_investor)
        {
            $collect = collect($new_investor);
            $name = $collect['supplier'];
            $investment =  ($collect['investment']/$net_investment)*100;
            array_push($arr1, [$name,['سرمایه گذار'], round($investment, 2)]);
        }
        return response()->json([
            'financial_total_price' => $financial_total_price,
            'valuation_total_price' => $valuation_total_price,
            'shareholders' => $arr1,
        ]);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $members = TeamMember::where('team_id', $team_id)->get();
        //اطلاعات مالی یک
        $lands = Land::where('team_id', $team_id)->sum('price');
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->sum('total_price');
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->sum('total_price');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->sum('total_price');
        $facilities = Facility::where('team_id', $team_id)->sum('total_price');
        $transportations = Transportation::where('team_id', $team_id)->sum('total_price');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        $financial_total_price = array_sum([$lands,$laboratory_equipments,$equipmentandmachineries,$officeequipmentandsupplies,$facilities,$transportations,$preoperatingcosts]);
        //ارزش گذاری مشهود
        $tenements = ValuationTenement::where('team_id', $team_id)->sum('total_price');
        $facilities = ValuationFacility::where('team_id', $team_id)->sum('total_price');
        $machineries = ValuationMachinery::where('team_id', $team_id)->sum('total_price');
        $laboratory_equipments = ValuationLaboratoryEquipment::where('team_id', $team_id)->sum('total_price');
        $offices = ValuationOfficeSupply::where('team_id', $team_id)->sum('total_price');
        $transportations = ValuationTransportation::where('team_id', $team_id)->sum('total_price');
        $pre_operation_costs = ValuationPreOperationCost::where('team_id', $team_id)->sum('total_price');
        //ارزش دانش فنی
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        $valuation_total_price = array_sum([$tenements,$facilities,$machineries,$laboratory_equipments,$offices,$transportations,$pre_operation_costs,$valuation_cost]);

        return response()->json([
            'members' => $members,
            'financial_total_price' => $financial_total_price,
            'valuation_total_price' => $valuation_total_price
        ]);
    }

    public function store(ParticipationShare $request)
    {
        $team_id = Auth::user()->team_id;
        $this->participationPreIinvestors($request, $team_id);
        $this->participationNewInvestors($request, $team_id);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
