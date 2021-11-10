<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\KeyEmployee;
use App\Models\Managerial;
use App\Models\RegisteredTeam;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\Technical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepJustificationPlanController extends Controller
{

    public function __invoke(Request $request)
    {
        $team_id = Auth::user()->team_id;
        $team = Team::where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first('registration_number');
        $shareholders = TeamMember::with('education')->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::where('team_id', $team_id)->get();
        $managerial = Managerial::where('team_id', $team_id)->first();
        $technicals = Technical::where('team_id', $team_id)->first();
        return view('user.reporting.justification-plan.index',compact('team','registered_team','shareholders','key_employees','managerial','technicals'));
    }
}
