<?php

namespace App\Http\Controllers\user\other;

use App\Http\Controllers\Controller;
use App\Http\Requests\RawMaterialNameRequest;
use App\Models\RawMaterialName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
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
        return view('user.other.products.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RawMaterialNameRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $materials = $request->material;
        for ($i = 0; $i < sizeof($materials); $i++) {
            $material = new RawMaterialName();
            $material->name = $materials[$i]['name'];
            $material->product_name = $materials[$i]['product_name'];
            $material->team_id = $team_id;
            $material->updated_at = null;
            $material->save();
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
        return view('user.other.products.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RawMaterialNameRequest $request, $id)
    {
        $material = RawMaterialName::findorfail($id);
        $material->name = $request->material[0]['name'];
        $material->product_name = $request->material[0]['product_name'];
        $material->save();
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
        $material = RawMaterialName::findorfail($id);
        $material->delete();
        return response(["deleted"], 201);
    }
}
