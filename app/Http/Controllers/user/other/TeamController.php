<?php

namespace App\Http\Controllers\user\other;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Models\User;
use App\Rules\Persian;
use App\Rules\Phone;
use App\Rules\Security;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;

        $team = Team::where('id', $team_id)->first();

        return view('user.other.team.index',compact('team'));

    }

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::where('id',$id)->first();
        //security
        if(isset($team->id) && Auth::user()->team_id == $team->id)
        {
            return view('user.other.team.edit',compact('team'));
        }
        elseif(! isset($team->id)){
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'team_name' => ['required', 'min:3', 'max:32', Rule::unique('teams', 'name')->ignore($id), new Persian()],
            'project_name' => ['required', 'min:3', 'max:32', new Security()],
            'status' => ['required', new Security()],
            'team_email' =>  ['required', 'email', 'max:255',  Rule::unique('teams', 'email')->ignore($id),],
            'team_phone' => ['required',  Rule::unique('teams', 'phone_number')->ignore($id),new Phone(), 'digits:11', 'numeric']
        ]);
        $team = Team::findorfail($id);
        $team->name = $request->input('team_name');
        $team->project_name = $request->input('project_name');
        $team->status = $request->input('status');
        $team->email = $request->input('team_email');
        $team->address = $request->input('address');
        $team->phone_number = $request->input('team_phone');
        $team->landline = $request->input('land_line');
        $team->save();
    }

}
