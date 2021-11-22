<?php

namespace App\Http\Controllers\user\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use App\Models\ParticipationNewInvestor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewInvestorController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.shares.participation-shares.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;
        $new_investors = $request->new_investors;
        for ($i = 0; $i < sizeof($new_investors); $i++) {
            $new_investor = new ParticipationNewInvestor();
            $new_investor->supplier = $new_investors[$i]['supplier'];
            $new_investor->investment = $new_investors[$i]['investment'];
            $new_investor->team_id = $team_id;
            $new_investor->updated_at = null;
            $new_investor->save();
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

    public function update(Request $request, $id)
    {
        $new_investor = ParticipationNewInvestor::findorfail($id);
        $new_investor->supplier = $request['new_investors'][0]['supplier'];
        $new_investor->investment = $request['new_investors'][0]['investment'];
        $new_investor->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $new_investor = ParticipationNewInvestor::findorfail($id);
        $new_investor->delete();
        return response(["deleted"], 201);
    }
}
