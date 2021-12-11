<?php

namespace App\Http\Controllers\user\Description\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.description.market.index');
    }

    public function store(SupplierRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $suppliers = $request->suppliers;
        for ($i = 0; $i < sizeof($suppliers); $i++) {
            $supplier = new Supplier();
            $supplier->name = $suppliers[$i]['name'];
            $supplier->geographical_region = $suppliers[$i]['geographical_region'];
            $supplier->team_id = $team_id;
            $supplier->updated_at = null;
            $supplier->save();
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

    public function update(SupplierRequest $request, $id)
    {
        $supplier = Supplier::findorfail($id);
        $supplier->name = $request['suppliers'][0]['name'];
        $supplier->geographical_region = $request['suppliers'][0]['geographical_region'];
        $supplier->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $supplier = Supplier::findorfail($id);
        $supplier->delete();
        return response(["deleted"], 201);
    }
}
