<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\ManPower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManPowerController extends Controller
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
        $manPowers = $request->man_power;
        for ($i = 0; $i < sizeof($manPowers); $i++) {
            $manPower = new ManPower();
            $manPower->description = $manPowers[$i]['description'];
            $manPower->number = $manPowers[$i]['number'];
            $manPower->salary = $manPowers[$i]['salary'];
            $manPower->total_rights = $manPowers[$i]['total_rights'];
            $manPower->year = $request->year;
            $manPower->team_id = $team = Auth::user()->team_id;
            $manPower->updated_at = null;
            $manPower->save();
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
        $manPower = ManPower::findorfail($id);
        $manPower->description = $request['man_power'][0]['description'];
        $manPower->number = $request['man_power'][0]['number'];
        $manPower->salary = $request['man_power'][0]['salary'];
        $manPower->total_rights = $request['man_power'][0]['total_rights'];
        $manPower->save();
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
