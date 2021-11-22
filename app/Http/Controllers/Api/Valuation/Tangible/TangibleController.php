<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\PreOperatingCost;
use App\Models\TeamMember;
use App\Models\Transportation;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationOtherAsset;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TangibleController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $transportations = ValuationTransportation::with(['owner', 'description'])->where('team_id', $team_id)->paginate(10);
        return response()->json([
            'transportations' => $transportations,
        ]);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        $tenements = Land::where('team_id', $team_id)->get();
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get();
        $machineries = EquipmentAndMachinery::where('team_id', $team_id)->get();
        $office_supplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->get();
        $facilities = Facility::where('team_id', $team_id)->get();
        $transportations = Transportation::where('team_id', $team_id)->get();
        $pre_operation_costs = PreOperatingCost::where('team_id', $team_id)->get();
        return response()->json([
            'shareholders' => $shareholders,
            'tenements' => $tenements,
            'laboratory_equipments' => $laboratory_equipments,
            'machineries' => $machineries,
            'office_supplies' => $office_supplies,
            'facilities' => $facilities,
            'transportations' => $transportations,
            'pre_operation_costs' => $pre_operation_costs
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

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
