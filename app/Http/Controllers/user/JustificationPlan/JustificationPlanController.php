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
        return view('user.justification-plan.index');
    }

    public function create()
    {
        return view('user.justification-plan.index');
    }

    public function store(JustificationPlanRequest $request , RegisteredTeam $registeredTeam , BusinessManager $businessManager , BusinessQuestion $businessQuestion , PreliminaryJustificationPlan $justificationPlan)
    {
        $team = Auth::user()->team;
        if ($team->status) {
            $this->RegisteredTeam($request, $registeredTeam, $team);
        }
        $this->BusinessManager($request, $businessManager, $team);
        $this->BusinessQuestion($request, $businessQuestion, $team);
        $this->JustificationPlan($request, $justificationPlan, $team);

        return response()->json(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $team_id = Auth::user()->team_id;
        if ($team_id == $id){
            return view('user.justification-plan.index');
        }
        abort(404);
    }

    public function update(JustificationPlanRequest $request, $id)
    {
        $team = Auth::user()->team;
        if ($team->status) {
            $registeredTeam = RegisteredTeam::findorfail($request->input('registered_team.id'));
            $registeredTeam->registration_number = $request->input('registered_team.registration_number');
            $registeredTeam->registration_date = $request->input('registered_team.registration_date');
            $registeredTeam->save();
        }

        $businessManager = BusinessManager::findorfail($request->input('business_manager.id'));
        $businessManager->owner = $request->input('business_manager.owner');
        $businessManager->phone_number = $request->input('business_manager.phone_number');
        $businessManager->email = $request->input('business_manager.email');
        $businessManager->save();

        $businessQuestion = BusinessQuestion::findorfail($request->input('business_question.id'));
        $businessQuestion->growth_center = $request->input('business_question.growth_center');
        $businessQuestion->start_date = $request->input('business_question.start_date');
        $businessQuestion->location_address = $request->input('business_question.location_address');
        $businessQuestion->phone_number = $request->input('business_question.phone_number');
        $businessQuestion->site_address = $request->input('business_question.site_address');
        $businessQuestion->important_note = $request->input('business_question.important_note');
        $businessQuestion->save();

        $justificationPlan = PreliminaryJustificationPlan::findorfail($request->input('justification_plan.id'));
        $justificationPlan->requirement = $request->input('justification_plan.requirement');
        $justificationPlan->solution = $request->input('justification_plan.solution');
        $justificationPlan->competitors = $request->input('justification_plan.competitors');
        $justificationPlan->competitive_advantage = $request->input('justification_plan.competitive_advantage');
        $justificationPlan->target_market = $request->input('justification_plan.target_market');
        $justificationPlan->Technology_level = $request->input('justification_plan.technology_level');
        $justificationPlan->required_budget = $request->input('justification_plan.required_budget');
        $justificationPlan->Income = $request->input('justification_plan.income');
        $justificationPlan->technology_life = $request->input('justification_plan.technology_life');
        $justificationPlan->plan_development = $request->input('justification_plan.plan_development');
        $justificationPlan->technical_knowledge = $request->input('justification_plan.technical_knowledge');
        $justificationPlan->technical_knowledge = $request->input('justification_plan.technical_knowledge');
        $justificationPlan->save();

        return response()->json(['success'], 201);
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
        $registeredTeam->registration_number = $request->input('registered_team.registration_number');
        $registeredTeam->registration_date = $request->input('registered_team.registration_date');
        $registeredTeam->team_id = $team->id;
        $registeredTeam->updated_at = null;
        $registeredTeam->save();
    }

    /**
     * @param JustificationPlanRequest $request
     * @param BusinessManager $businessManager
     */
    protected function BusinessManager(JustificationPlanRequest $request, BusinessManager $businessManager, $team)
    {
        $businessManager->owner = $request->input('business_manager.owner');
        $businessManager->phone_number = $request->input('business_manager.phone_number');
        $businessManager->email = $request->input('business_manager.email');
        $businessManager->team_id = $team->id;
        $businessManager->updated_at = null;
        $businessManager->save();
    }

    /**
     * @param JustificationPlanRequest $request
     * @param BusinessQuestion $businessQuestion
     */
    protected function BusinessQuestion(JustificationPlanRequest $request, BusinessQuestion $businessQuestion, $team)
    {
        $businessQuestion->growth_center = $request->input('business_question.growth_center');
        $businessQuestion->start_date = $request->input('business_question.start_date');
        $businessQuestion->location_address = $request->input('business_question.location_address');
        $businessQuestion->phone_number = $request->input('business_question.phone_number');
        $businessQuestion->site_address = $request->input('business_question.site_address');
        $businessQuestion->important_note = $request->input('business_question.important_note');
        $businessQuestion->team_id = $team->id;
        $businessQuestion->updated_at = null;
        $businessQuestion->save();
    }

    /**
     * @param JustificationPlanRequest $request
     * @param PreliminaryJustificationPlan $justificationPlan
     */
    protected function JustificationPlan(JustificationPlanRequest $request, PreliminaryJustificationPlan $justificationPlan, $team)
    {
        $justificationPlan->requirement = $request->input('justification_plan.requirement');
        $justificationPlan->solution = $request->input('justification_plan.solution');
        $justificationPlan->competitors = $request->input('justification_plan.competitors');
        $justificationPlan->competitive_advantage = $request->input('justification_plan.competitive_advantage');
        $justificationPlan->target_market = $request->input('justification_plan.target_market');
        $justificationPlan->Technology_level = $request->input('justification_plan.technology_level');
        $justificationPlan->required_budget = $request->input('justification_plan.required_budget');
        $justificationPlan->Income = $request->input('justification_plan.income');
        $justificationPlan->technology_life = $request->input('justification_plan.technology_life');
        $justificationPlan->plan_development = $request->input('justification_plan.plan_development');
        $justificationPlan->technical_knowledge = $request->input('justification_plan.technical_knowledge');
        $justificationPlan->technical_knowledge = $request->input('justification_plan.technical_knowledge');
        $justificationPlan->team_id = $team->id;
        $justificationPlan->updated_at = null;
        $justificationPlan->save();
    }
}
