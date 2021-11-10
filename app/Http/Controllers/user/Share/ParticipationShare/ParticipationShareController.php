<?php

namespace App\Http\Controllers\user\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParticipationShare;
use App\Models\Building;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\ParticipationNewInvestor;
use App\Models\ParticipationPreInvestor;
use App\Models\PreOperatingCost;
use App\Models\TeamMember;
use App\Models\Transportation;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationOtherAsset;
use App\Models\ValuationTenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipationShareController extends Controller
{
    public function index()
    {

        $team_id = Auth::user()->team_id;
        $lands = Land::where('team_id', $team_id)->sum('price');
        $buildings = Building::where('team_id', $team_id)->sum('price');
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->sum('total_price');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->sum('total_price');
        $facilities = Facility::where('team_id', $team_id)->sum('total_price');
        $transportations = Transportation::where('team_id', $team_id)->sum('total_price');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        $financial_total_price = array_sum([$lands,$buildings,$equipmentandmachineries,$officeequipmentandsupplies,$facilities,$transportations,$preoperatingcosts]);
        $tenements = ValuationTenement::where('team_id', $team_id)->sum('total_price');
        $machineries = ValuationMachinery::where('team_id', $team_id)->sum('total_price');
        $offices = ValuationOfficeSupply::where('team_id', $team_id)->sum('total_price');
        $others = ValuationOtherAsset::where('team_id', $team_id)->sum('total_price');
        $valuation_total_price = array_sum([$tenements,$machineries,$offices,$others]);

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
            $investment =  ($collect['investment']/100000)*100;
            array_push($arr1, [$full_name, $response_name, $investment]);
        }

        $new_investors = ParticipationNewInvestor::where('team_id', $team_id)->get();
        foreach ($new_investors as $new_investor)
        {
            $collect = collect($new_investor);
            $name = $collect['supplier'];
            $investment =  ($collect['investment']/100000)*100;
            array_push($arr1, [$name,['سرمایه گذار'],$investment]);
        }
return $arr1;
        return view('user.shares.participation-shares.index');
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $members = TeamMember::where('team_id', $team_id)->get();
        $lands = Land::where('team_id', $team_id)->sum('price');
        $buildings = Building::where('team_id', $team_id)->sum('price');
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->sum('total_price');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->sum('total_price');
        $facilities = Facility::where('team_id', $team_id)->sum('total_price');
        $transportations = Transportation::where('team_id', $team_id)->sum('total_price');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        $financial_total_price = array_sum([$lands,$buildings,$equipmentandmachineries,$officeequipmentandsupplies,$facilities,$transportations,$preoperatingcosts]);
        $tenements = ValuationTenement::where('team_id', $team_id)->sum('total_price');
        $machineries = ValuationMachinery::where('team_id', $team_id)->sum('total_price');
        $offices = ValuationOfficeSupply::where('team_id', $team_id)->sum('total_price');
        $others = ValuationOtherAsset::where('team_id', $team_id)->sum('total_price');
        $valuation_total_price = array_sum([$tenements,$machineries,$offices,$others]);
        return view('user.shares.participation-shares.create');
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

    protected function participationPreIinvestors(Request $request, $team_id)
    {
        $pre_investors = $request->pre_investors;
        for ($i = 0; $i < sizeof($pre_investors); $i++) {
            $pre_investor = new ParticipationPreInvestor();
            $pre_investor->investors_id = $pre_investors[$i]['pre_supplier_name'];
            $pre_investor->investment = $pre_investors[$i]['pre_investment'];
            $pre_investor->team_id = $team_id;
            $pre_investor->updated_at = null;
            $pre_investor->save();
        }
    }

    protected function participationNewInvestors(Request $request, $team_id)
    {
        $new_investors = $request->new_investors;
        for ($i = 0; $i < sizeof($new_investors); $i++) {
            $new_investor = new ParticipationNewInvestor();
            $new_investor->supplier = $new_investors[$i]['new_supplier_name'];
            $new_investor->investment = $new_investors[$i]['new_investment'];
            $new_investor->team_id = $team_id;
            $new_investor->updated_at = null;
            $new_investor->save();
        }
    }
}
