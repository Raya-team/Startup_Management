<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
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
        return view('user.financial.financial2.index');
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
        $insurances = $request->insurance;
        for ($i = 0; $i < sizeof($insurances); $i++) {
            $insurance = new Insurance();
            $insurance->description = $insurances[$i]['description'];
            $insurance->percent = $insurances[$i]['percent'];
            $insurance->total_cost = $insurances[$i]['total_cost'];
            $insurance->year = $request->year;
            $insurance->team_id = $team_id;
            $insurance->updated_at = null;
            $insurance->save();
        }
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
        return view('user.financial.financial2.index');
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
        $insurance = Insurance::findorfail($id);
        $insurance->description = $request['insurance'][0]['description'];
        $insurance->percent = $request['insurance'][0]['percent'];
        $insurance->total_cost = $request['insurance'][0]['total_cost'];
        $insurance->save();
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
        $insurance = Insurance::findorfail($id);
        $insurance->delete();
        return response(["deleted"], 201);
    }
}
