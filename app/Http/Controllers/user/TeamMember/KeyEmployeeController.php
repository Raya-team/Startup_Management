<?php

namespace App\Http\Controllers\user\TeamMember;

use App\Http\Controllers\Controller;
use App\Http\Requests\KeyEmployeeRequest;
use App\Models\Education;
use App\Models\KeyEmployee;
use App\Models\Responsibility;
use App\Models\Team;
use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeyEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $key_employees = KeyEmployee::with(['team', 'education'])
            ->where('team_id', $team_id)->get(['id', 'fname', 'lname', 'education_id', 'major', 'age', 'resume']);
        return view('user.team-member.key-employees.index', compact('key_employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this_year = jdate(Carbon::now())->format('Y');
        $responsibilities = Responsibility::all(['id','nickname']);
        $education = Education::all(['id', 'nickname']);
        return view('user.team-member.key-employees.create',compact('this_year','responsibilities','education'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeyEmployeeRequest $request, KeyEmployee $keyEmployee)
    {
        $keyEmployee->fname = $request->input('fname');
        $keyEmployee->lname = $request->input('lname');
        $keyEmployee->team_id = Auth::user()->team_id;
        $keyEmployee->education_id = $request->input('education');
        $keyEmployee->major = $request->input('major');
        $keyEmployee->age = $request->input('age');
        $keyEmployee->resume = $request->input('resume');
        $keyEmployee->updated_at = null;
        $keyEmployee->save();
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
