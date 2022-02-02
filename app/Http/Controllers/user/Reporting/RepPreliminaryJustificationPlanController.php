<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\BusinessManager;
use App\Models\BusinessQuestion;
use App\Models\KeyEmployee;
use App\Models\PreliminaryJustificationPlan;
use App\Models\PreviousInvestor;
use App\Models\RegisteredTeam;
use App\Models\Team;
use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class RepPreliminaryJustificationPlanController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $team = Team::with('activity')->where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first();
        $business_manager = BusinessManager::with('Owner')->where('team_id', $team_id)->first();
        $business_questions = BusinessQuestion::where('team_id', $team_id)->first();
        $previous_investors = PreviousInvestor::where('team_id', $team_id)->get();
        $shareholders = TeamMember::with(['education','responsibility'])->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::with('education')->where('team_id', $team_id)->get();
        $justification_plan = PreliminaryJustificationPlan::where('team_id', $team_id)->first();
        return view('user.reporting.preliminary-justification-plan.index',compact('team','registered_team','business_manager','business_questions','previous_investors','shareholders','key_employees','justification_plan'));
    }

    public function exportPDF()
    {
        $team_id = Auth::user()->team_id;
        $team = Team::with('activity')->where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first();
        $business_manager = BusinessManager::with('Owner')->where('team_id', $team_id)->first();
        $business_questions = BusinessQuestion::where('team_id', $team_id)->first();
        $previous_investors = PreviousInvestor::where('team_id', $team_id)->get();
        $shareholders = TeamMember::with(['education','responsibility'])->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::with('education')->where('team_id', $team_id)->get();
        $justification_plan = PreliminaryJustificationPlan::where('team_id', $team_id)->first();

        $pdf = PDF::loadView('user.reporting.preliminary-justification-plan.pdf', compact('team','registered_team','business_manager','business_questions','previous_investors','shareholders','key_employees','justification_plan'), [],
            [
                'title' => 'طرح توجیهی مقدماتی',
                'format' => 'A4',
                'display_mode' => 'fullpage',
            ]);
        $fileName = Carbon::now()->timestamp . '-preliminary-justification-plan' . '.pdf';

        return $pdf->download($fileName);


//        return view('user.reporting.preliminary-justification-plan.pdf',compact('team','registered_team','business_manager','business_questions','previous_investors','shareholders','key_employees','justification_plan'));
    }
}
