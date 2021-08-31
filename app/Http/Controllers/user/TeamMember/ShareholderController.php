<?php

namespace App\Http\Controllers\user\TeamMember;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShareholderRequest;
use App\Models\Education;
use App\Models\Responsibility;
use App\Models\Team;
use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class shareholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $team_id = Auth::user()->team_id;
//        $team_members = TeamMember::with(['team', 'education'])
//            ->where('team_id', $team_id)->get(['id', 'fname', 'lname', 'education_id', 'major', 'age', 'resume', 'investment']);
        return view('user.team-member.shareholders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $this_year = jdate(Carbon::now())->format('Y');
//        $responsibilities = Responsibility::all(['id','nickname']);
//        $education = Education::all(['id', 'nickname']);
//        return view('user.team-member.shareholders.create',compact(['this_year', 'responsibilities', 'education']));
        return view('user.master');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShareholderRequest $request, TeamMember $member)
    {
        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->team_id = Auth::user()->team_id;
        $member->education_id = $request->input('education');
        $member->major = $request->input('major');
        $member->age = $request->input('age');
        $member->resume = $request->input('resume');
        $member->investment = $request->input('investment');
        $member->updated_at = null;
        $member->save();
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
