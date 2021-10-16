<?php

namespace App\Http\Controllers\user\Justificationplan;

use App\Http\Controllers\Controller;
use App\Http\Requests\JustificationPlanRequest;
use App\Models\BusinessManager;
use App\Models\BusinessQuestion;
use App\Models\PreliminaryJustificationPlan;
use App\Models\RegisteredTeam;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JustificationPlanController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team;
        return $team_id->status;
        $registered_team = RegisteredTeam::where('team_id' , $team_id)->first();
        $business_manager = BusinessManager::where('team_id' , $team_id)->first();
        $business_question = BusinessQuestion::where('team_id' , $team_id)->first();
        $justification_plan = PreliminaryJustificationPlan::where('team_id' , $team_id)->first();
        return view('user.justification-plan.index');
    }

    public function create()
    {
        return view('user.justification-plan.create');
    }

    public function store(JustificationPlanRequest $request , RegisteredTeam $registeredTeam , BusinessManager $businessManager , BusinessQuestion $businessQuestion , PreliminaryJustificationPlan $justificationPlan)
    {
        return $request;
        $team = Auth::user()->team;
        if ($team->status) {
        $this->RegisteredTeam($request, $registeredTeam, $team);
        }
        $this->BusinessManager($request, $businessManager, $team);
        $this->BusinessQuestion($request, $businessQuestion, $team);
        $this->JustificationPlan($request, $justificationPlan, $team);
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

    /**
     * @param JustificationPlanRequest $request
     * @param RegisteredTeam $registeredTeam
     */
    protected function RegisteredTeam(JustificationPlanRequest $request, RegisteredTeam $registeredTeam, $team)
    {
        $request->validate([
            'registered_team.registration_number' => ['required'],
            'registered_team.registration_date' => ['required']
        ]);
        $registeredTeam->registration_number = $request->input('registration_number');
        $registeredTeam->registration_date = $request->input('registration_date');
        $registeredTeam->team_id = $team->id;
        $registeredTeam->save();
    }

    /**
     * @param JustificationPlanRequest $request
     * @param BusinessManager $businessManager
     */
    protected function BusinessManager(JustificationPlanRequest $request, BusinessManager $businessManager, $team)
    {
        $businessManager->name = $request->input('name');
        $businessManager->phone_number = $request->input('manager_phone_number');
        $businessManager->email = $request->input('email');
        $businessManager->team_id = $team->id;
        $businessManager->save();
    }

    /**
     * @param JustificationPlanRequest $request
     * @param BusinessQuestion $businessQuestion
     */
    protected function BusinessQuestion(JustificationPlanRequest $request, BusinessQuestion $businessQuestion, $team)
    {
        $businessQuestion->growth_center = $request->input('growth_center');
        $businessQuestion->start_date = $request->input('start_date');
        $businessQuestion->location_address = $request->input('location_address');
        $businessQuestion->phone_number = $request->input('phone_number');
        $businessQuestion->site_address = $request->input('site_address');
        $businessQuestion->important_note = $request->input('important_note');
        $businessQuestion->team_id = $team->id;
        $businessQuestion->save();
    }

    /**
     * @param JustificationPlanRequest $request
     * @param PreliminaryJustificationPlan $justificationPlan
     */
    protected function JustificationPlan(JustificationPlanRequest $request, PreliminaryJustificationPlan $justificationPlan, $team)
    {
        $justificationPlan->requirement = $request->input('requirement');
        $justificationPlan->solution = $request->input('solution');
        $justificationPlan->competitors = $request->input('competitors');
        $justificationPlan->competitive_advantage = $request->input('competitive_advantage');
        $justificationPlan->target_market = $request->input('target_market');
        $justificationPlan->Technology_level = $request->input('Technology_level');
        $justificationPlan->required_budget = $request->input('required_budget');
        $justificationPlan->Income = $request->input('Income');
        $justificationPlan->technology_life = $request->input('technology_life');
        $justificationPlan->plan_development = $request->input('plan_development');
        $justificationPlan->technical_knowledge = $request->input('technical_knowledge');
        $justificationPlan->technical_knowledge = $request->input('technical_knowledge');
        $justificationPlan->team_id = $team->id;
        $justificationPlan->save();
    }
}
