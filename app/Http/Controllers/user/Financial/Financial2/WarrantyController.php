<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Http\Requests\WarrantyRequest;
use App\Models\Capacity;
use App\Models\OtherInformation;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarrantyController extends Controller
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
    public function store(WarrantyRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $warranties = $request->warranty;
        $capacity = Capacity::where('team_id', $team_id, 'year')->where('year', $request->year)->first();
        $other_information = OtherInformation::where('team_id', $team_id)->where('year', $request->year)->first();
        for ($i = 0; $i < sizeof($warranties); $i++) {
            $warranty = new Warranty();
            $warranty->product_name = $warranties[$i]['product_name'];
            $warranty->percent = $warranties[$i]['percent'];
            $warranty->total_cost = $capacity->total_production * $other_information->sale_price * $warranties[$i]['percent'];
            $warranty->year = $request->year;
            $warranty->team_id = $team_id;
            $warranty->updated_at = null;
            $warranty->save();
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
    public function update(WarrantyRequest $request, $id)
    {
        $team_id = Auth::user()->team_id;
        $warranty = Warranty::findorfail($id);
        $capacity = Capacity::where('team_id', $team_id, 'year')->where($request['warranty'][0]['year'])->first();
        $other_information = OtherInformation::where('team_id', $team_id, 'year')->where($request['warranty'][0]['year'])->first();
        $warranty->product_name = $request['warranty'][0]['product_name'];
        $warranty->percent = $request['warranty'][0]['percent'];
        $warranty->total_cost = $capacity->total_production * $other_information->sale_price * $request['warranty'][0]['percent'];
        $warranty->save();
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
        $warranty = Warranty::findorfail($id);
        $warranty->delete();
    }
}
