<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilityRequest;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
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
    public function store(FacilityRequest $request)
    {
        $facilities = $request->facilities;
        for ($i = 0; $i < sizeof($facilities); $i++) {
            $facility = new Facility();
            $facility->description = $facilities[$i]['description'];
            $facility->count = $facilities[$i]['count'];
            $facility->unit_price = $facilities[$i]['unit_price'];
            $facility->total_price = $facilities[$i]['total_price'];
            $facility->team_id = Auth::user()->team_id;
            $facility->updated_at = null;
            $facility->save();
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
        $facility = Facility::findorfail($id);
        if ($team_id == $facility->team_id){
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
    public function update(FacilityRequest $request, Facility $facility)
    {
        $facility->description = $request['facilities'][0]['description'];
        $facility->count = $request['facilities'][0]['count'];
        $facility->unit_price = $request['facilities'][0]['unit_price'];
        $facility->total_price = $request['facilities'][0]['total_price'];
        $facility->team_id = Auth::user()->team_id;
        $facility->save();
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
        $facilities = Facility::findorfail($id);
        $facilities->delete();
        return response(["deleted"], 201);
    }
}
