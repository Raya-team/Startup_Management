<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\Outsourcing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OutsourcingController extends Controller
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
        $outsourcings = $request->outsourcing;
        for ($i = 0; $i < sizeof($outsourcings); $i++) {
            $outsourcing = new Outsourcing();
            $outsourcing->description = $outsourcings[$i]['description'];
            $outsourcing->number = $outsourcings[$i]['number'];
            $outsourcing->unit_cost = $outsourcings[$i]['unit_cost'];
            $outsourcing->total_cost = $outsourcings[$i]['total_cost'];
            $outsourcing->year = $request->year;
            $outsourcing->team_id = $team_id;
            $outsourcing->updated_at = null;
            $outsourcing->save();
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
        $outsourcing = Outsourcing::findorfail($id);
        $outsourcing->description = $request['outsourcing'][0]['description'];
        $outsourcing->number = $request['outsourcing'][0]['number'];
        $outsourcing->unit_cost = $request['outsourcing'][0]['unit_cost'];
        $outsourcing->total_cost = $request['outsourcing'][0]['total_cost'];
        $outsourcing->save();
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
        $outsourcing = Outsourcing::findorfail($id);
        $outsourcing->delete();
        return response(["deleted"], 201);
    }
}
