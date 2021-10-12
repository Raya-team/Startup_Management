<?php

namespace App\Http\Controllers\Api\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationOtherAsset;
use App\Models\ValuationTenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TangibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $tenements = ValuationTenement::with('owner')->where('team_id', $team_id)->first();
        $machineries = ValuationMachinery::with('owner')->where('team_id', $team_id)->first();
        $offices = ValuationOfficeSupply::with('owner')->where('team_id', $team_id)->first();
        $others = ValuationOtherAsset::with('owner')->where('team_id', $team_id)->first();
        return response()->json([
            'team_id' => $team_id,
            'tenements' => $tenements,
            'machineries' => $machineries,
            'offices' => $offices,
            'others' => $others,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        return response()->json($shareholders);
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
        $shareholders = TeamMember::where('team_id', $team_id)->get();

        $tenements = ValuationTenement::where('team_id', $team_id)->first();
        $machineries = ValuationMachinery::where('team_id', $team_id)->first();
        $offices = ValuationOfficeSupply::where('team_id', $team_id)->first();
        $others = ValuationOtherAsset::where('team_id', $team_id)->first();

        return response()->json([
            'shareholders' => $shareholders,
            'team_id' => $team_id,
            'tenements' => $tenements,
            'machineries' => $machineries,
            'offices' => $offices,
            'others' => $others,
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
