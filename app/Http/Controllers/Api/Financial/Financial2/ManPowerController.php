<?php

namespace App\Http\Controllers\Api\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\ManPower;
use App\Models\ManPowerName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManPowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $team = Auth::user()->team;
        $man_power = ManPower::with('manpowerName')
            ->where('team_id', $team->id)->where('year', $year)->paginate(10);
        return response()->json($man_power);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productions = ManPowerName::where('manpower_type', 1)->get();
        $non_productions = ManPowerName::where('manpower_type', 0)->get();

        return response()->json([
            'productions' => $productions,
            'non_productions' => $non_productions
        ]);
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
        $man_power = ManPower::where('id', $id)->first();
        $productions = ManPowerName::where('manpower_type', 1)->get();
        $non_productions = ManPowerName::where('manpower_type', 0)->get();
        return response()->json([
            'man_power' => $man_power,
            'productions' => $productions,
            'non_productions' => $non_productions
        ]);
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
        //
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
