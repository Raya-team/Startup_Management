<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuildingRequest;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuildingController extends Controller
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
        return view('user.financial.financial1.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuildingRequest $request)
    {
        $buildings = $request->buildings;
        for ($i = 0; $i < sizeof($buildings); $i++) {
            $building = new Building();
            $building->description = $buildings[$i]['description'];
            $building->area = $buildings[$i]['area'];
            $building->price = $buildings[$i]['price'];
            $building->team_id = Auth::user()->team_id;
            $building->updated_at = null;
            $building->save();
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
        $team_id = Auth::user()->team_id;
        $land = Building::findorfail($id);
        if ($team_id == $land->team_id){
            return view('user.financial.financial1.index');
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
    public function update(BuildingRequest $request, Building $building)
    {
        $building->description = $request['buildings'][0]['description'];
        $building->area = $request['buildings'][0]['area'];
        $building->price = $request['buildings'][0]['price'];
        $building->team_id = Auth::user()->team_id;
        $building->save();
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
        $building = Building::findorfail($id);
        $building->delete();
        return response(["deleted"], 201);
    }
}
