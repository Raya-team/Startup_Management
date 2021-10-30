<?php

namespace App\Http\Controllers\user\Readiness;

use App\Http\Controllers\Controller;
use App\Models\MarketQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.Readiness.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.readiness.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;

        $market = new MarketQuestion();
        $market->team_id = $team_id;
        $market->q1 = $request->q1;
        $market->q2 = $request->q2;
        $market->q3 = $request->q3;
        $market->q4 = $request->q4;
        $market->q5 = $request->q5;
        $market->q6 = $request->q6;
        $market->q7 = $request->q7;
        $market->q8 = $request->q8;
        $market->q9 = $request->q9;
        $market->q10 = $request->q10;
        $market->save();

        return response(['success'], 201);
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
        $questions = MarketQuestion::findorfail($id);
        if ($team_id == $questions->team_id){
            return view('user.readiness.technology.index');
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

        $market = MarketQuestion::findorfail($id);
        $market->team_id = $team_id;
        $market->q1 = $request->q1;
        $market->q2 = $request->q2;
        $market->q3 = $request->q3;
        $market->q4 = $request->q4;
        $market->q5 = $request->q5;
        $market->q6 = $request->q6;
        $market->q7 = $request->q7;
        $market->q8 = $request->q8;
        $market->q9 = $request->q9;
        $market->q10 = $request->q10;
        $market->save();

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
