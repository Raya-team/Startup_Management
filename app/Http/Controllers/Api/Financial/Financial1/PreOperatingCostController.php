<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\PreOperatingCost;
use Illuminate\Http\Request;

class PreOperatingCostController extends Controller
{
    public function edit($id)
    {
        return response()->json([
            'preoperatingcosts' => PreOperatingCost::findorfail($id)
        ]);
    }
}
