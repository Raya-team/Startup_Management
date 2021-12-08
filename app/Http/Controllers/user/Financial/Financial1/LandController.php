<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandRequest;
use App\Models\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\logicalAnd;

class LandController extends Controller
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
    public function store(LandRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $lands = $request->lands;
        for ($i = 0; $i < sizeof($lands); $i++) {
            $land = new Land();
            $land->description = $lands[$i]['description'];
            $land->area = $lands[$i]['area'];
            $land->price = $lands[$i]['price'];
            $land->team_id = $team_id;
            $land->updated_at = null;
            $land->save();
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
        $land = Land::findorfail($id);
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
    public function update(LandRequest $request, Land $land)
    {
        $land->description = $request['lands'][0]['description'];
        $land->area = $request['lands'][0]['area'];
        $land->price = $request['lands'][0]['price'];
        $land->team_id = Auth::user()->team_id;
        $land->save();
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
        $land = Land::findorfail($id);
        $land->delete();
        return response(["deleted"], 201);
    }
}
