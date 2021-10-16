<?php

namespace App\Http\Controllers\Api\JustificationPlan;

use App\Http\Controllers\Controller;
use App\Models\BusinessManager;
use App\Models\BusinessQuestion;
use App\Models\PreliminaryJustificationPlan;
use App\Models\RegisteredTeam;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JustificationPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $registered_team = RegisteredTeam::where('team_id' , $team_id)->first();
        $business_manager = BusinessManager::where('team_id' , $team_id)->first();
        $business_question = BusinessQuestion::where('team_id' , $team_id)->first();
        $justification_plan = PreliminaryJustificationPlan::where('team_id' , $team_id)->first();

        return response()->json([
            'registered_team' => $registered_team,
            'shareholders' => $business_manager,
            'business_question' => $business_question,
            'justification_plan' => $justification_plan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Auth::user()->team;
        $shareholders = TeamMember::where('team_id', $team->id)->get();
        return response()->json([
            'team' => $team,
            'shareholders' => $shareholders
        ]);
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
}
