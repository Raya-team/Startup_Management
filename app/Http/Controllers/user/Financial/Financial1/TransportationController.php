<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransportationRequest;
use App\Models\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransportationController extends Controller
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
    public function store(TransportationRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $transportations = $request->transportations;
        for ($i = 0; $i < sizeof($transportations); $i++) {
            $transportation = new Transportation();
            $transportation->description = $transportations[$i]['description'];
            $transportation->count = $transportations[$i]['count'];
            $transportation->unit_price = $transportations[$i]['unit_price'];
            $transportation->total_price = $transportations[$i]['unit_price'] * $transportations[$i]['count'];
            $transportation->team_id = $team_id;
            $transportation->updated_at = null;
            $transportation->save();
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
        $transportation = Transportation::findorfail($id);
        if ($team_id == $transportation->team_id){
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
    public function update(TransportationRequest $request, Transportation $transportation)
    {
        $transportation->description = $request['transportations'][0]['description'];
        $transportation->count = $request['transportations'][0]['count'];
        $transportation->unit_price = $request['transportations'][0]['unit_price'];
        $transportation->total_price = $request['transportations'][0]['unit_price'] * $request['transportations'][0]['count'];
        $transportation->save();
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
        $facilities = Transportation::findorfail($id);
        $facilities->delete();
        return response(["deleted"], 201);
    }
}
