<?php

namespace App\Http\Controllers\Api\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Land;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\PreOperatingCost;
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
    public function index($year)
    {
        $team = Auth::user()->team;
        $repair = Repair::where('team_id', $team->id)->where('year', $year)->paginate(10);
        return response()->json($repair);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_id = Auth::user()->team_id;
        /*$land = collect(Land::where('team_id', $team_id)->get('description'));
        $equipmentandmachineries = EquipmentAndMachinery::where('team_id', $team_id)->get('description');
        $officeequipmentandsupplies = OfficeEquipmentAndSupply::where('team_id', $team_id)->get('description');
        $facilities = Facility::where('team_id', $team_id)->get('description');
        $transportations = Transportation::where('team_id', $team_id)->get('description');
        $preoperatingcosts = PreOperatingCost::where('team_id', $team_id)->get('description');*/

        $descriptions = [];

        $description1 = new Des();
        $description2 = new Des();
        $description3 = new Des();
        $description4 = new Des();
        $description5 = new Des();
        $description6 = new Des();

        $description1->description = 'مستغلات';
        $description2->description = 'تجهیزات و ماشین آلات فنی';
        $description3->description = 'تجهیزات و لوازم دفتری';
        $description4->description = 'تاسیسات';
        $description5->description = 'وسایل حمل و نقل';
        $description6->description = 'تجهیزات آزمایشگاهی';

        array_push($descriptions, $description1);
        array_push($descriptions, $description2);
        array_push($descriptions, $description3);
        array_push($descriptions, $description4);
        array_push($descriptions, $description5);
        array_push($descriptions, $description6);

        /*$descriptions = $land
            ->merge($equipmentandmachineries)
            ->merge($officeequipmentandsupplies)
            ->merge($facilities)
            ->merge($transportations)
            ->merge($preoperatingcosts);*/

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
        /*$land = collect(Land::where('team_id', $team_id)->get('description'));
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
            ->merge($preoperatingcosts);*/


        $descriptions = [];

        $description1 = new Des();
        $description2 = new Des();
        $description3 = new Des();
        $description4 = new Des();
        $description5 = new Des();
        $description6 = new Des();

        $description1->description = 'مستغلات';
        $description2->description = 'تجهیزات و ماشین آلات فنی';
        $description3->description = 'تجهیزات و لوازم دفتری';
        $description4->description = 'تاسیسات';
        $description5->description = 'وسایل حمل و نقل';
        $description6->description = 'تجهیزات آزمایشگاهی';

        array_push($descriptions, $description1);
        array_push($descriptions, $description2);
        array_push($descriptions, $description3);
        array_push($descriptions, $description4);
        array_push($descriptions, $description5);
        array_push($descriptions, $description6);

        $repair = Repair::where('id', $id)->first();
        return response()->json([
            'descriptions' => $descriptions,
            'repair' => $repair
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
