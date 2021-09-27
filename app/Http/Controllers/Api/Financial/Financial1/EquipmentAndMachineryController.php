<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\EquipmentAndMachinery;
use Illuminate\Http\Request;

class EquipmentAndMachineryController extends Controller
{
    public function edit($id)
    {
        return response()->json([
            'equipmentandmachineries' => EquipmentAndMachinery::findorfail($id)
        ]);
    }
}
