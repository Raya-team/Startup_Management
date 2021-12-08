<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\Building;
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

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $team_id = Auth::user()->team_id;
        $year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $depreciation = DepreciationRate::where('team_id', $team_id)->first();
        $type = TypeOfLocation::with('Type')->where('team_id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->paginate(10);
//        $buildings = Building::where('team_id', $team_id)->paginate(10);
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->paginate(10);
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->paginate(10);
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->paginate(10);
        $facilities = Facility::where('team_id', $team_id)->paginate(10);
        $transportations = Transportation::where('team_id', $team_id)->paginate(10);
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->paginate(10);
        return response()->json([
            'team_id' => $team_id,
            'year' => $year,
            'fiscal' => $fiscal,
            'count_day' => $count_day,
            'depreciation' => $depreciation,
            'type' => $type,
            'lands' => $lands,
//            'buildings' => $buildings,
            'laboratory_equipments' => $laboratory_equipments,
            'equipmentandmachineries' => $equipmentandmachineries,
            'officeequipmentandsupplies' => $officeequipmentandsupplies,
            'facilities' => $facilities,
            'transportations' => $transportations,
            'preoperatingcosts' => $preoperatingcosts,
        ]);
    }
}
