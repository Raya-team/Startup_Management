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
        return view('user.other.team.index');
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
            return view('user.other.team.index');
        }
        abort(404);

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
        $this->TeamValidation($request, $id);
        $team = Team::findorfail($id);
        $team->name = $request->input('name');
        $team->project_name = $request->input('project_name');
        $team->status = $request->input('status');
        $team->email = $request->input('email');
        $team->address = $request->input('address');
        $team->phone_number = $request->input('phone_number');
        $team->landline = $request->input('landline');
        $team->save();
        return response(['success'], 201);
    }

    /**
     * @param Request $request
     * @param $id
     */
    protected function TeamValidation(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:32', Rule::unique('teams')->ignore($id)],
            'project_name' => ['required', 'min:3', 'max:32', new Security()],
            'status' => ['required', new Security()],
            'email' => ['required', 'email', 'max:255', Rule::unique('teams')->ignore($id),],
            'phone_number' => ['required', Rule::unique('teams')->ignore($id), new Phone(), 'digits:11', 'numeric']
        ]);
    }

}
