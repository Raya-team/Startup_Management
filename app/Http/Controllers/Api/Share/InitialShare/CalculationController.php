<?php

namespace App\Http\Controllers\Api\Share\InitialShare;

use App\Http\Controllers\Controller;
use App\Models\PreviousInvestor;
use App\Models\ShareQuestion;
use App\Models\ShareVariable;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $variables = ShareVariable::where('team_id' , Auth::user()->team_id)->first();
        $member_share_questions = ShareQuestion::with('members')->get();
        $previous_investors = PreviousInvestor::where('team_id' , Auth::user()->team_id)->paginate(10);
        return response()->json([
            'team_id' => $team_id,
            'variables' => $variables,
            'member_share_questions' => $member_share_questions,
            'previousinvestors' => $previous_investors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shareholders = TeamMember::all();
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
