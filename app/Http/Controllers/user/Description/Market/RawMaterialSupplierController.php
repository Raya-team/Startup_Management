<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\RawMaterialSupplierRequest;
use App\Models\RawMaterialSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RawMaterialSupplierController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(RawMaterialSupplierRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $raw_material_suppliers = $request->raw_material_suppliers;
        for ($i = 0; $i < sizeof($raw_material_suppliers); $i++) {
            $raw_material_supplier = new RawMaterialSupplier();
            $raw_material_supplier->name = $raw_material_suppliers[$i]['name'];
            $raw_material_supplier->geographical_region = $raw_material_suppliers[$i]['geographical_region'];
            $raw_material_supplier->team_id = $team_id;
            $raw_material_supplier->updated_at = null;
            $raw_material_supplier->save();
        }

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.description.market.index');
    }

    public function update(RawMaterialSupplierRequest $request, $id)
    {
        $raw_material_supplier = RawMaterialSupplier::findorfail($id);
        $raw_material_supplier->name = $request['raw_material_suppliers'][0]['name'];
        $raw_material_supplier->geographical_region = $request['raw_material_suppliers'][0]['geographical_region'];
        $raw_material_supplier->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $raw_material_supplier = RawMaterialSupplier::findorfail($id);
        $raw_material_supplier->delete();
        return response(["deleted"], 201);
    }
}
