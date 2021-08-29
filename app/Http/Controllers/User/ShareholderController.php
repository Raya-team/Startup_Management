<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamMemberRequest;
use App\Models\Education;
use App\Models\Responsibility;
use App\Models\Team;
use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShareholderController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $this_year = jdate(Carbon::now())->format('Y');
        $responsibilities = Responsibility::all(['id','nickname']);
        $education = Education::all(['id', 'nickname']);
        return view('team_member',compact('this_year','responsibilities','education'));
    }

    public function store(TeamMemberRequest $request , Team $team , TeamMember $member)
    {
        $this->Member($request, $team, $member);
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

    protected function Member(TeamMemberRequest $request, Team $team, TeamMember $member)
    {
        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->team_id = $team->id;
        $member->education_id = $request->input('education');
        $member->major = $request->input('major');
        $member->age = $request->input('age');
        $member->resume = $request->input('resume');
        $member->investment = $request->input('investment');
        $member->updated_at = null;
        $member->save();
    }
}
