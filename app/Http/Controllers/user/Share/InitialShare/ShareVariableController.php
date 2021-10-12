<?php

namespace App\Http\Controllers\user\Share\InitialShare;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShareVariableRequest;
use App\Models\ShareVariable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShareVariableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $sharevariable = ShareVariable::findorfail($id);
        if ($team_id == $sharevariable->team_id){
            return view('user.shares.initial-shares.index');
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
    public function update(ShareVariableRequest $request, $id)
    {
        $variable = ShareVariable::findorfail($id);
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
        return response(['success'], 201);
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
