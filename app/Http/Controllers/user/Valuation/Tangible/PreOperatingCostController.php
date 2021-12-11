<?php

namespace App\Http\Controllers\user\Valuation\Tangible;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValuationPreOperationCostRequest;
use App\Models\ValuationPreOperationCost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreOperatingCostController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.valuation.tangible.index');
    }

    public function store(ValuationPreOperationCostRequest $request)
    {
        $team_id = Auth::user()->team_id;

        $valuation_pre_operation_costs = $request->valuation_pre_operation_costs;
        for ($i = 0; $i < sizeof($valuation_pre_operation_costs); $i++) {
            $valuation_pre_operation_cost = new ValuationPreOperationCost();
            $valuation_pre_operation_cost->description = $valuation_pre_operation_costs[$i]['description'];
            $valuation_pre_operation_cost->owner = $valuation_pre_operation_costs[$i]['owner'];
            $valuation_pre_operation_cost->total_price = $valuation_pre_operation_costs[$i]['total_price'];
            $valuation_pre_operation_cost->team_id = $team_id;
            $valuation_pre_operation_cost->updated_at = null;
            $valuation_pre_operation_cost->save();
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

    public function update(ValuationPreOperationCostRequest $request, $id)
    {
        $valuation_pre_operation_cost = ValuationPreOperationCost::findorfail($id);
        $valuation_pre_operation_cost->description = $request['valuation_pre_operation_costs'][0]['description'];
        $valuation_pre_operation_cost->owner = $request['valuation_pre_operation_costs'][0]['owner'];
        $valuation_pre_operation_cost->total_price = $request['valuation_pre_operation_costs'][0]['total_price'];
        $valuation_pre_operation_cost->team_id = Auth::user()->team_id;
        $valuation_pre_operation_cost->save();
        return response(['success'], 201);
    }

    public function destroy($id)
    {
        $data = ValuationPreOperationCost::findorfail($id);
        $data->delete();
        return response(["deleted"], 201);
    }
}
