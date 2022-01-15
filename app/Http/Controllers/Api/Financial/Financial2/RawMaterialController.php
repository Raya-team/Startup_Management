<?php

namespace App\Http\Controllers\Api\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\RawMaterial;
use App\Models\RawMaterialName;
use App\Models\UnitOfMeasurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year)
    {
        $team = Auth::user()->team;
        $raw_material = RawMaterial::with(['Unit', 'productName', 'rawMaterialName'])
            ->where('team_id', $team->id)->where('year', $year)->paginate(10);
        return response()->json($raw_material);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = UnitOfMeasurement::all();
        $team = Auth::user()->team;
        $products = Product::where('team_id', $team->id)->get();
        $materials = RawMaterialName::where('team_id', $team->id)->get();
        return response()->json([
            'units' => $units,
            'products' => $products,
            'materials' => $materials,
        ]);
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
        $team = Auth::user()->team;
        $units = UnitOfMeasurement::all();
        $raw_material = RawMaterial::where('id', $id)->first();
        $products = Product::where('team_id', $team->id)->get();
        $materials = RawMaterialName::where('team_id', $team->id)->get();
        return response()->json([
            'units' => $units,
            'raw_material' => $raw_material,
            'products' => $products,
            'materials' => $materials,
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
