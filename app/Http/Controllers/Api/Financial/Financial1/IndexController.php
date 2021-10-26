<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\Building;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\PreOperatingCost;
use App\Models\Transportation;
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
        $lands = Land::where('team_id', $team_id)->paginate(10);
        $buildings = Building::where('team_id', $team_id)->paginate(10);
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->paginate(10);
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->paginate(10);
        $facilities = Facility::where('team_id', $team_id)->paginate(10);
        $transportations = Transportation::where('team_id', $team_id)->paginate(10);
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->paginate(10);
        return response()->json([
            'lands' => $lands,
            'buildings' => $buildings,
            'equipmentandmachineries' => $equipmentandmachineries,
            'officeequipmentandsupplies' => $officeequipmentandsupplies,
            'facilities' => $facilities,
            'transportations' => $transportations,
            'preoperatingcosts' => $preoperatingcosts,
        ]);
    }
}
