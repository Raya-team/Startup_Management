<?php

namespace App\Http\Controllers\user\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParticipationPreInvestorRequest;
use App\Models\ParticipationPreInvestor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreInvestorController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.shares.participation-shares.index');
    }

    public function store(ParticipationPreInvestorRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $pre_investors = $request->pre_investors;
        for ($i = 0; $i < sizeof($pre_investors); $i++) {
            $pre_investor = new ParticipationPreInvestor();
            $pre_investor->investor = $pre_investors[$i]['investor'];
            $pre_investor->investment = $pre_investors[$i]['investment'];
            $pre_investor->team_id = $team_id;
            $pre_investor->updated_at = null;
            $pre_investor->save();
        }
        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.shares.participation-shares.index');
    }

    public function update(ParticipationPreInvestorRequest $request, $id)
    {
        $pre_investor = ParticipationPreInvestor::findorfail($id);
        $pre_investor->investor = $request['pre_investors'][0]['investor'];
        $pre_investor->investment = $request['pre_investors'][0]['investment'];
        $pre_investor->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $pre_investor = ParticipationPreInvestor::findorfail($id);
        $pre_investor->delete();
        return response(["deleted"], 201);
    }
}
