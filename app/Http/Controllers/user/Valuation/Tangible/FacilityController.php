<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
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

        $valuation_facilities = $request->valuation_facilities;
        for ($i = 0; $i < sizeof($valuation_facilities); $i++) {
            $valuation_facilitie = new ValuationFacility();
            $valuation_facilitie->description = $valuation_facilities[$i]['description'];
            $valuation_facilitie->number = $valuation_facilities[$i]['number'];
            $valuation_facilitie->owner = $valuation_facilities[$i]['owner'];
            $valuation_facilitie->unit_price = $valuation_facilities[$i]['unit_price'];
            $valuation_facilitie->total_price = $valuation_facilities[$i]['unit_price'] * $valuation_facilities[$i]['number'];
            $valuation_facilitie->team_id = $team_id;
            $valuation_facilitie->updated_at = null;
            $valuation_facilitie->save();
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
        $valuation_facilitie = ValuationFacility::findorfail($id);
        $valuation_facilitie->description = $request['valuation_facilities'][0]['description'];
        $valuation_facilitie->number = $request['valuation_facilities'][0]['number'];
        $valuation_facilitie->owner = $request['valuation_facilities'][0]['owner'];
        $valuation_facilitie->unit_price = $request['valuation_facilities'][0]['unit_price'];
        $valuation_facilitie->total_price = $request['valuation_facilities'][0]['unit_price'] * $request['valuation_facilities'][0]['number'];
        $valuation_facilitie->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }
}
