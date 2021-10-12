<?php

namespace App\Http\Controllers\user\Valuation\Intangible;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntangibleRequest;
use App\Models\ValuationAdditionalQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntangibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.valuation.intangible.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.valuation.intangible.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntangibleRequest $request)
    {
        $intangible = new ValuationAdditionalQuestion();
        $intangible->question_1 = $request->question_1;
        $intangible->question_2 = $request->question_2;
        $intangible->question_3 = $request->question_3;
        $intangible->question_4 = $request->question_4;
        $intangible->team_id = Auth::user()->team_id;
        $intangible->updated_at = null;
        $intangible->save();

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
        if (Auth::user()->team_id == $id){
            return view('user.valuation.intangible.index');
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
    public function update(IntangibleRequest $request, $id)
    {
        $team_id = Auth::user()->team_id;
        $intangible = ValuationAdditionalQuestion::where('team_id', $team_id)->first();
        $intangible->question_1 = $request->question_1;
        $intangible->question_2 = $request->question_2;
        $intangible->question_3 = $request->question_3;
        $intangible->question_4 = $request->question_4;
        $intangible->save();

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
