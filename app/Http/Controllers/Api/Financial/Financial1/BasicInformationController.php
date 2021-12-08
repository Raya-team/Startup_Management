<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\CountDay;
use App\Models\DepreciationRate;
use App\Models\Fiscal;
use App\Models\PlanYear;
use App\Models\Type;
use App\Models\TypeOfLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicInformationController extends Controller
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
        $type = Type::all();
        return response()->json($type);
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
        $year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $depreciation = DepreciationRate::where('team_id', $team_id)->first();
        $type = TypeOfLocation::with('Type')->where('team_id', $team_id)->first();
        $types = Type::all();

        return response()->json([
            'team_id' => $team_id,
            'year' => $year,
            'fiscal' => $fiscal,
            'count_day' => $count_day,
            'depreciation' => $depreciation,
            'type' => $type,
            'types' => $types,
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
