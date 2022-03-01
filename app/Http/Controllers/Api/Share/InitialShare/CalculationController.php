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
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $variables = ShareVariable::where('team_id' , $team_id)->first();
        $questions = ShareQuestion::with('members')->get();
        $previous_investors = PreviousInvestor::where('team_id' , $team_id)->paginate(10);

        $shareholders = TeamMember::with(['sharequestoins','responsibility'])->where('team_id', $team_id)->get();
        $arr = [];
        foreach ($shareholders as $shareholder)
        {
            $percent = 0;
            foreach ($shareholder->sharequestoins as $sharequestoin)
            {
                switch ($sharequestoin->id) {
                    case 1:
                        $percent += $variables->idea / count($questions[0]->members); break;
                    case 2:
                        $percent += $variables->finance / count($questions[1]->members); break;
                    case 3:
                        $percent += $variables->experience / count($questions[2]->members); break;
                    case 4:
                        $percent += $variables->risk / count($questions[3]->members); break;
                    case 5:
                        $percent += $variables->technology / count($questions[4]->members); break;
                    case 6:
                        $percent += $variables->investment / count($questions[5]->members); break;
                    case 7:
                        $percent += $variables->management / count($questions[6]->members); break;
                    case 8:
                        $percent += $variables->sale / count($questions[7]->members); break;
                    case 9:
                        $percent += $variables->full_time / count($questions[8]->members); break;
                    default;
                        $percent += 0; break;
                }
            }
            array_push($arr, [round($percent, 2), "$shareholder->fname $shareholder->lname", $shareholder->responsibility]);
        }

        return response()->json([
            'team_id' => $team_id,
            'variables' => $variables,
            'member_share_questions' => $questions,
            'previousinvestors' => $previous_investors,
            'percents' => $arr,
        ]);
    }

    public function create()
    {
        $team_id = Auth::user()->team_id;
        $shareholders = TeamMember::where('team_id', $team_id)->get();
        return response()->json($shareholders);
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
}
