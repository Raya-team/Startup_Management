<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationTransportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransportationController extends Controller
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

        $valuation_transportations = $request->valuation_transportations;
        for ($i = 0; $i < sizeof($valuation_transportations); $i++) {
            $valuation_transportation = new ValuationTransportation();
            $valuation_transportation->description = $valuation_transportations[$i]['description'];
            $valuation_transportation->number = $valuation_transportations[$i]['number'];
            $valuation_transportation->owner = $valuation_transportations[$i]['owner'];
            $valuation_transportation->unit_price = $valuation_transportations[$i]['unit_price'];
            $valuation_transportation->total_price = $valuation_transportations[$i]['unit_price'] * $valuation_transportations[$i]['number'];
            $valuation_transportation->team_id = $team_id;
            $valuation_transportation->updated_at = null;
            $valuation_transportation->save();
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
        $valuation_transportation = ValuationTransportation::findorfail($id);
        $valuation_transportation->description = $request['valuation_transportations'][0]['description'];
        $valuation_transportation->number = $request['valuation_transportations'][0]['number'];
        $valuation_transportation->owner = $request['valuation_transportations'][0]['owner'];
        $valuation_transportation->unit_price = $request['valuation_transportations'][0]['unit_price'];
        $valuation_transportation->total_price = $request['valuation_transportations'][0]['unit_price'] * $request['valuation_transportations'][0]['number'];
        $valuation_transportation->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }
}
