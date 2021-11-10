<?php

namespace App\Http\Controllers\Api\Description\Market;

use App\Http\Controllers\Controller;
use App\Models\ProductSupplyAndDemand;
use App\Models\UnitOfMeasurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSupplyAndDemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $product_supply_and_demand = ProductSupplyAndDemand::with('unit_id')->where('team_id' , $team_id)->paginate(10);

        return response()->json($product_supply_and_demand);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = UnitOfMeasurement::all();
        return response()->json($units);
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
        $product_supply_and_demand = ProductSupplyAndDemand::where('id', $id)->first();
        $units = UnitOfMeasurement::all();
        return response()->json([
            'product_supply_and_demand' => $product_supply_and_demand,
            'units' => $units
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
