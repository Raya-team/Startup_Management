<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function edit($id)
    {
        return response()->json([
            'buildings' => Building::findorfail($id)
        ]);
    }
}
