<?php

namespace App\Http\Controllers\user\Readiness;

use App\Http\Controllers\Controller;
use App\Models\TechnologyQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.readiness.technology.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.readiness.technology.index');
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

        $techno = new TechnologyQuestion();
        $techno->team_id = $team_id;
        $techno->q1 = $request->q1;
        $techno->q2 = $request->q2;
        $techno->q3 = $request->q3;
        $techno->q4 = $request->q4;
        $techno->q5 = $request->q5;
        $techno->q6 = $request->q6;
        $techno->q7 = $request->q7;
        $techno->q8 = $request->q8;
        $techno->q9 = $request->q9;
        $techno->q10 = $request->q10;
        $techno->q11 = $request->q11;
        $techno->q12 = $request->q12;
        $techno->q13 = $request->q13;
        $techno->q14 = $request->q14;
        $techno->q15 = $request->q15;
        $techno->q16 = $request->q16;
        $techno->q17 = $request->q17;
        $techno->q18 = $request->q18;
        $techno->q19 = $request->q19;
        $techno->q20 = $request->q20;
        $techno->q21 = $request->q21;
        $techno->q22 = $request->q22;
        $techno->q23 = $request->q23;
        $techno->q24 = $request->q24;
        $techno->q25 = $request->q25;
        $techno->q26 = $request->q26;
        $techno->q27 = $request->q27;
        $techno->q28 = $request->q28;
        $techno->q29 = $request->q29;
        $techno->q30 = $request->q30;
        $techno->q31 = $request->q31;
        $techno->q32 = $request->q32;
        $techno->q33 = $request->q33;
        $techno->q34 = $request->q34;
        $techno->q35 = $request->q35;
        $techno->save();

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
        $questions = TechnologyQuestion::findorfail($id);
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

        $techno = TechnologyQuestion::findorfail($id);
        $techno->team_id = $team_id;
        $techno->q1 = $request->q1;
        $techno->q2 = $request->q2;
        $techno->q3 = $request->q3;
        $techno->q4 = $request->q4;
        $techno->q5 = $request->q5;
        $techno->q6 = $request->q6;
        $techno->q7 = $request->q7;
        $techno->q8 = $request->q8;
        $techno->q9 = $request->q9;
        $techno->q10 = $request->q10;
        $techno->q11 = $request->q11;
        $techno->q12 = $request->q12;
        $techno->q13 = $request->q13;
        $techno->q14 = $request->q14;
        $techno->q15 = $request->q15;
        $techno->q16 = $request->q16;
        $techno->q17 = $request->q17;
        $techno->q18 = $request->q18;
        $techno->q19 = $request->q19;
        $techno->q20 = $request->q20;
        $techno->q21 = $request->q21;
        $techno->q22 = $request->q22;
        $techno->q23 = $request->q23;
        $techno->q24 = $request->q24;
        $techno->q25 = $request->q25;
        $techno->q26 = $request->q26;
        $techno->q27 = $request->q27;
        $techno->q28 = $request->q28;
        $techno->q29 = $request->q29;
        $techno->q30 = $request->q30;
        $techno->q31 = $request->q31;
        $techno->q32 = $request->q32;
        $techno->q33 = $request->q33;
        $techno->q34 = $request->q34;
        $techno->q35 = $request->q35;
        $techno->save();

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
