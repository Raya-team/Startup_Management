<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationMachinery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EquipmentAndMachineryController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.valuation.tangible.index');
    }

    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;

        $valuation_machineries = $request->valuation_machineries;
        for ($i = 0; $i < sizeof($valuation_machineries); $i++) {
            $valuation_machinerie = new ValuationMachinery();
            $valuation_machinerie->description = $valuation_machineries[$i]['description'];
            $valuation_machinerie->number = $valuation_machineries[$i]['number'];
            $valuation_machinerie->owner = $valuation_machineries[$i]['owner'];
            $valuation_machinerie->unit_price = $valuation_machineries[$i]['unit_price'];
            $valuation_machinerie->total_price = $valuation_machineries[$i]['unit_price'] * $valuation_machineries[$i]['number'];
            $valuation_machinerie->team_id = $team_id;
            $valuation_machinerie->updated_at = null;
            $valuation_machinerie->save();
        }

        return response(['success'], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('user.valuation.tangible.index');
    }

    public function update(Request $request, $id)
    {
        $valuation_machinerie = ValuationMachinery::findorfail($id);
        $valuation_machinerie->description = $request['valuation_machineries'][0]['description'];
        $valuation_machinerie->number = $request['valuation_machineries'][0]['number'];
        $valuation_machinerie->owner = $request['valuation_machineries'][0]['owner'];
        $valuation_machinerie->unit_price = $request['valuation_machineries'][0]['unit_price'];
        $valuation_machinerie->total_price = $request['valuation_machineries'][0]['unit_price'] * $request['valuation_machineries'][0]['number'];
        $valuation_machinerie->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }
}
