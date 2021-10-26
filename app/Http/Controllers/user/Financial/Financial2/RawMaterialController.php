<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\RawMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RawMaterialController extends Controller
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
    public function create($year)
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
        $rawMaterials = $request->raw_material;
        for ($i = 0; $i < sizeof($rawMaterials); $i++) {
            $rawMaterial = new RawMaterial();
            $rawMaterial->description = $rawMaterials[$i]['description'];
            $rawMaterial->unit = $rawMaterials[$i]['unit'];
            $rawMaterial->unit_price = $rawMaterials[$i]['unit_price'];
            $rawMaterial->total_price = $rawMaterials[$i]['total_price'];
            $rawMaterial->consumption = $rawMaterials[$i]['consumption'];
            $rawMaterial->year = $request->year;
            $rawMaterial->team_id = $team = Auth::user()->team_id;
            $rawMaterial->updated_at = null;
            $rawMaterial->save();
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
        $rawMaterial = RawMaterial::findorfail($id);
        $rawMaterial->description = $request['raw_material'][0]['description'];
        $rawMaterial->unit = $request['raw_material'][0]['unit'];
        $rawMaterial->unit_price = $request['raw_material'][0]['unit_price'];
        $rawMaterial->total_price = $request['raw_material'][0]['total_price'];
        $rawMaterial->consumption = $request['raw_material'][0]['consumption'];
        $rawMaterial->save();
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
        //
    }
}
