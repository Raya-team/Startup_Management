<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function edit($id)
    {
        return response()->json([
            'facilities' => Facility::findorfail($id)
        ]);
    }
}
