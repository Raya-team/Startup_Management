<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Models\ValuationTenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenementController extends Controller
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

        $valuation_tenements = $request->valuation_tenements;
        for ($i = 0; $i < sizeof($valuation_tenements); $i++) {
            $valuation_tenement = new ValuationTenement();
            $valuation_tenement->description = $valuation_tenements[$i]['description'];
            $valuation_tenement->area = $valuation_tenements[$i]['area'];
            $valuation_tenement->owner = $valuation_tenements[$i]['owner'];
            $valuation_tenement->total_price = $valuation_tenements[$i]['total_price'];
            $valuation_tenement->team_id = $team_id;
            $valuation_tenement->updated_at = null;
            $valuation_tenement->save();
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
        $valuation_tenement = ValuationTenement::findorfail($id);
        $valuation_tenement->description = $request['valuation_tenements'][0]['description'];
        $valuation_tenement->area = $request['valuation_tenements'][0]['area'];
        $valuation_tenement->owner = $request['valuation_tenements'][0]['owner'];
        $valuation_tenement->total_price = $request['valuation_tenements'][0]['total_price'];
        $valuation_tenement->team_id = Auth::user()->team_id;
        $valuation_tenement->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        //
    }
}
