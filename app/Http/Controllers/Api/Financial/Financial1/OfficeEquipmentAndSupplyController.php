<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\OfficeEquipmentAndSupply;
use Illuminate\Http\Request;

class OfficeEquipmentAndSupplyController extends Controller
{
    public function edit($id)
    {
        return response()->json([
            'officeequipmentandsupplies' => OfficeEquipmentAndSupply::findorfail($id)
        ]);
    }
}
