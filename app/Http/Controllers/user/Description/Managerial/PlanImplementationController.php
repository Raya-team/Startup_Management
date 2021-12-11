<?php

namespace App\Http\Controllers\user\Description\Managerial;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanImplementationRequest;
use App\Models\PlanImplementation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanImplementationController extends Controller
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
        return view('user.description.managerial.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanImplementationRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $plan_implementations = $request->plan_implementations;
        for ($i = 0; $i < sizeof($plan_implementations); $i++) {
            $plan_implementation = new PlanImplementation();
            $plan_implementation->subject_of_work = $plan_implementations[$i]['subject_of_work'];
            $plan_implementation->duration_of_work = $plan_implementations[$i]['duration_of_work'];
            $plan_implementation->team_id = $team_id;
            $plan_implementation->updated_at = null;
            $plan_implementation->save();
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
        return view('user.description.managerial.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlanImplementationRequest $request, $id)
    {
        $plan_implementation = PlanImplementation::findorfail($id);
        $plan_implementation->subject_of_work = $request['plan_implementations'][0]['subject_of_work'];
        $plan_implementation->duration_of_work = $request['plan_implementations'][0]['duration_of_work'];
        $plan_implementation->save();
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
        $plan_implementation = PlanImplementation::findorfail($id);
        $plan_implementation->delete();
        return response(["deleted"], 201);
    }
}
