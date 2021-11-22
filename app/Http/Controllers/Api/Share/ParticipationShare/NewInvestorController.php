<?php

namespace App\Http\Controllers\Api\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use App\Models\ParticipationNewInvestor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewInvestorController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $participation_new_investors = ParticipationNewInvestor::where('team_id' , $team_id)->paginate(10);

        return response()->json($participation_new_investors);
    }

    public function create()
    {
        //
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
        $participation_pre_investor = ParticipationNewInvestor::where('id', $id)->first();
        return response()->json($participation_pre_investor);
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
