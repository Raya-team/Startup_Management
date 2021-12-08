<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\RD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RDController extends Controller
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
        $rds = $request->r_d;
        for ($i = 0; $i < sizeof($rds); $i++) {
            $rd = new RD();
            $rd->description = $rds[$i]['description'];
            $rd->annual_cost = $rds[$i]['annual_cost'];
            $rd->year = $request->year;
            $rd->team_id = $team_id;
            $rd->updated_at = null;
            $rd->save();
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
        $rd = RD::findorfail($id);
        $rd->description = $request['r_d'][0]['description'];
        $rd->annual_cost = $request['r_d'][0]['annual_cost'];
        $rd->save();
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
        $rd = RD::findorfail($id);
        $rd->delete();
        return response(["deleted"], 201);
    }
}
