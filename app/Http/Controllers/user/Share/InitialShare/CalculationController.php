<?php

namespace App\Http\Controllers\user\Share\InitialShare;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalculationRequest;
use App\Models\PreviousInvestor;
use App\Models\ShareQuestion;
use App\Models\ShareVariable;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalculationController extends Controller
{
    public function index()
    {
        $variables = ShareVariable::where('team_id' , Auth::user()->team_id)->first();
        $member_share_questions = ShareQuestion::with('members')->get();
        return $member_share_questions;
        return view('user.shares.initial-shares.calculation.index',compact('variables','member_share_questions'));
    }

    public function create()
    {
        $shareholders = TeamMember::all();
        return view('user.shares.initial-shares.calculation.create',compact('shareholders'));
    }

    public function store(CalculationRequest $request , PreviousInvestor $investor , ShareVariable $variable , TeamMember $member)
    {
        $this->PreviousInvestor($request,$investor);
        $this->ShareVariable($request,$variable);
        $this->MemberShareQuestion($request,$member);
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

    protected function PreviousInvestor(CalculationRequest $request , PreviousInvestor $investor)
    {
        $investor->name = $request->input('investor_name');
        $investor->percent = $request->input('percent');
        $investor->save();
    }
    protected function ShareVariable(CalculationRequest $request , ShareVariable $variable)
    {
        $variable->idea = $request->input('idea');
        $variable->finance = $request->input('finance');
        $variable->experience = $request->input('experience');
        $variable->risk = $request->input('risk');
        $variable->technology = $request->input('technology');
        $variable->investment = $request->input('investment');
        $variable->management = $request->input('management');
        $variable->sale = $request->input('sale');
        $variable->full_time = $request->input('full_time');
        $variable->team_id = Auth::user()->team_id;
        $variable->save();
    }
    protected function MemberShareQuestion(CalculationRequest $request , TeamMember $member)
    {
        $questions = ShareQuestion::all();

        foreach ($questions as $key => $question)
        {
            $q = "Q" . ++$key;
            $question->members()->sync($request->$q);
        }
    }
}
