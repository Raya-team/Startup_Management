<?php

namespace App\Http\Controllers\Api\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Insurance;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\PreOperatingCost;
use App\Models\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $team = Auth::user()->team;
        $insurance = Insurance::where('team_id', $team->id)->where('year', $year)->paginate(10);
        return response()->json($insurance);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_id = Auth::user()->team_id;
        $land = collect(Land::where('team_id', $team_id)->get('description'));
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->get('description');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->get('description');
        $facilities = Facility::where('team_id', $team_id)->get('description');
        $transportations = Transportation::where('team_id', $team_id)->get('description');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->get('description');

        $descriptions = $land
            ->merge($equipmentandmachineries)
            ->merge($officeequipmentandsupplies)
            ->merge($facilities)
            ->merge($transportations)
            ->merge($preoperatingcosts);

        return response()->json($descriptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $land = collect(Land::where('team_id', $team_id)->get('description'));
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->get('description');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->get('description');
        $facilities = Facility::where('team_id', $team_id)->get('description');
        $transportations = Transportation::where('team_id', $team_id)->get('description');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->get('description');

        $descriptions = $land
            ->merge($equipmentandmachineries)
            ->merge($officeequipmentandsupplies)
            ->merge($facilities)
            ->merge($transportations)
            ->merge($preoperatingcosts);

        $insurance = Insurance::where('id', $id)->first();
        return response()->json([
            'descriptions' => $descriptions,
            'insurance' => $insurance
        ]);
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
}
