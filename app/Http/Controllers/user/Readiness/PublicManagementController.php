<?php

namespace App\Http\Controllers\user\Readiness;

use App\Http\Controllers\Controller;
use App\Models\PublicManagementQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicManagementController extends Controller
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
        $questions = PublicManagementQuestion::findorfail($id);
        if ($team_id == $questions->team_id){
            return view('user.Readiness.index');
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
    public function update(Request $request, $id)
    {
        $team_id = Auth::user()->team_id;

        $data = PublicManagementQuestion::findorfail($id);
        $data->team_id = $team_id;
        $data->q1 = $request->q1;
        $data->q2 = $request->q2;
        $data->q3 = $request->q3;
        $data->q4 = $request->q4;
        $data->q5 = $request->q5;
        $data->q6 = $request->q6;
        $data->q7 = $request->q7;
        $data->q8 = $request->q8;
        $data->q9 = $request->q9;
        $data->q10 = $request->q10;
        $data->save();

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
