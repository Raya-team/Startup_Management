<?php

namespace App\Http\Controllers\user\Readiness;

use App\Http\Controllers\Controller;
use App\Models\ManufacturingQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManufacturingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.readiness.index');
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

        $manufacturing = new ManufacturingQuestion();
        $manufacturing->team_id = $team_id;
        $manufacturing->q1 = $request->q1;
        $manufacturing->q2 = $request->q2;
        $manufacturing->q3 = $request->q3;
        $manufacturing->q4 = $request->q4;
        $manufacturing->q5 = $request->q5;
        $manufacturing->q6 = $request->q6;
        $manufacturing->q7 = $request->q7;
        $manufacturing->q8 = $request->q8;
        $manufacturing->q9 = $request->q9;
        $manufacturing->q10 = $request->q10;
        $manufacturing->q11 = $request->q11;
        $manufacturing->q12 = $request->q12;
        $manufacturing->q13 = $request->q13;
        $manufacturing->q14 = $request->q14;
        $manufacturing->q15 = $request->q15;
        $manufacturing->q16 = $request->q16;
        $manufacturing->q17 = $request->q17;
        $manufacturing->q18 = $request->q18;
        $manufacturing->q19 = $request->q19;
        $manufacturing->q20 = $request->q20;
        $manufacturing->q21 = $request->q21;
        $manufacturing->q22 = $request->q22;
        $manufacturing->q23 = $request->q23;
        $manufacturing->q24 = $request->q24;
        $manufacturing->q25 = $request->q25;
        $manufacturing->q26 = $request->q26;
        $manufacturing->q27 = $request->q27;
        $manufacturing->q28 = $request->q28;
        $manufacturing->q29 = $request->q29;
        $manufacturing->q30 = $request->q30;
        $manufacturing->save();

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
        $questions = ManufacturingQuestion::findorfail($id);
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

        $manufacturing = ManufacturingQuestion::findorfail($id);
        $manufacturing->team_id = $team_id;
        $manufacturing->q1 = $request->q1;
        $manufacturing->q2 = $request->q2;
        $manufacturing->q3 = $request->q3;
        $manufacturing->q4 = $request->q4;
        $manufacturing->q5 = $request->q5;
        $manufacturing->q6 = $request->q6;
        $manufacturing->q7 = $request->q7;
        $manufacturing->q8 = $request->q8;
        $manufacturing->q9 = $request->q9;
        $manufacturing->q10 = $request->q10;
        $manufacturing->q11 = $request->q11;
        $manufacturing->q12 = $request->q12;
        $manufacturing->q13 = $request->q13;
        $manufacturing->q14 = $request->q14;
        $manufacturing->q15 = $request->q15;
        $manufacturing->q16 = $request->q16;
        $manufacturing->q17 = $request->q17;
        $manufacturing->q18 = $request->q18;
        $manufacturing->q19 = $request->q19;
        $manufacturing->q20 = $request->q20;
        $manufacturing->q21 = $request->q21;
        $manufacturing->q22 = $request->q22;
        $manufacturing->q23 = $request->q23;
        $manufacturing->q24 = $request->q24;
        $manufacturing->q25 = $request->q25;
        $manufacturing->q26 = $request->q26;
        $manufacturing->q27 = $request->q27;
        $manufacturing->q28 = $request->q28;
        $manufacturing->q29 = $request->q29;
        $manufacturing->q30 = $request->q30;
        $manufacturing->save();

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
