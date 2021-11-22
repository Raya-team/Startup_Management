<?php

namespace App\Http\Controllers\Api\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use App\Models\ParticipationPreInvestor;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreInvestorController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $participation_pre_investors = ParticipationPreInvestor::with('investor')->where('team_id' , $team_id)->paginate(10);

        return response()->json($participation_pre_investors);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $members = TeamMember::where('team_id', $team_id)->get();

        return response()->json($members);
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
        $team_id = Auth::user()->team_id;
        $members = TeamMember::where('team_id', $team_id)->get();
        $participation_pre_investor = ParticipationPreInvestor::where('id', $id)->first();
        return response()->json([
            'participation_pre_investor' => $participation_pre_investor,
            'members' => $members
        ]);
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
