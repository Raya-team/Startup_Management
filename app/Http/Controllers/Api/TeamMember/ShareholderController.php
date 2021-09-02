<?php

namespace App\Http\Controllers\Api\TeamMember;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Responsibility;
use App\Models\TeamMember;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShareholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $team_members = TeamMember::with(['team', 'education'])
            ->where('team_id', $team_id)->get(['id', 'fname', 'lname', 'education_id', 'major', 'age', 'resume', 'investment']);
//        return datatables()->of($team_members)->tojson();
        return response()->json($team_members);
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
        return response()->json([
            'this_year' => $this_year,
            'responsibilities' => $responsibilities,
            'education' => $education
        ]);
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
        $team_id = Auth::user()->team_id;
        $member = TeamMember::with(['team', 'education'])
            ->where('team_id', $team_id)
            ->where('id', $id)->first();
        return response()->json($member);
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
