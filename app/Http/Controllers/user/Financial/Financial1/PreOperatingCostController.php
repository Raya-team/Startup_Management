<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreOperatingCostRequest;
use App\Models\PreOperatingCost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreOperatingCostController extends Controller
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
    public function store(PreOperatingCostRequest $request)
    {
        $preoperatingcosts = $request->preoperatingcosts;
        for ($i = 0; $i < sizeof($preoperatingcosts); $i++) {
            $preoperatingcost = new PreOperatingCost();
            $preoperatingcost->description = $preoperatingcosts[$i]['description'];
            $preoperatingcost->total_price = $preoperatingcosts[$i]['total_price'];
            $preoperatingcost->team_id = Auth::user()->team_id;
            $preoperatingcost->updated_at = null;
            $preoperatingcost->save();
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
        $preoperatingcost = PreOperatingCost::findorfail($id);
        if ($team_id == $preoperatingcost->team_id){
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
    public function update(PreOperatingCostRequest $request,PreOperatingCost $preoperatingcost)
    {
        $preoperatingcost->description = $request['preoperatingcosts'][0]['description'];
        $preoperatingcost->total_price = $request['preoperatingcosts'][0]['total_price'];
        $preoperatingcost->team_id = Auth::user()->team_id;
        $preoperatingcost->save();
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
        $preoperatingcosts = PreOperatingCost::findorfail($id);
        $preoperatingcosts->delete();
        return response(["deleted"], 201);
    }
}
