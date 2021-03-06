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
        return view('user.team-member.shareholders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.team-member.shareholders.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShareholderRequest $request
     * @param TeamMember $member
     * @return \Illuminate\Http\Response
     */
    public function store(ShareholderRequest $request, TeamMember $member)
    {
        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->team_id = Auth::user()->team_id;
        $member->education_id = $request->input('education_id');
        $member->major = $request->input('major');
        $member->age = $request->input('age');
        $member->resume = $request->input('resume');
        $member->investment = $request->input('investment');
        $member->updated_at = null;
        $member->save();
        $member->responsibility()->sync($request->input('responsibility'));
        return response(['سهامدار مورد نظر با موفقیت ایجاد شد'], 201);
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
        $team_id = Auth::user()->team_id;
        $member = TeamMember::with(['team', 'education'])
            ->where('team_id', $team_id)
            ->where('id', $id)->first();
        return view('user.team-member.shareholders.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ShareholderRequest $request
     * @param TeamMember $member
     * @return \Illuminate\Http\Response
     */
    public function update(ShareholderRequest $request)
    {
        $member = TeamMember::findorfail($request->id);
        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->team_id = Auth::user()->team_id;
        $member->education_id = $request->input('education_id');
        $member->major = $request->input('major');
        $member->age = $request->input('age');
        $member->resume = $request->input('resume');
        $member->investment = $request->input('investment');
        $member->save();
        $member->responsibility()->sync($request->input('responsibility'));
        return response(['سهامدار مورد نظر با موفقیت ویرایش شد'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team_id = Auth::user()->team_id;
        $teamMember = TeamMember::where('team_id', $team_id)->get();
        if ($teamMember->count() > 1){
            $member = TeamMember::findorfail($id);
            $member->delete();
            return response(["deleted"], 201);
        }else{
            return response(["undeleted"], 201);
        }
    }
}
