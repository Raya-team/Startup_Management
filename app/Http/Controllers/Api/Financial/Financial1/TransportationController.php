<?php

namespace App\Http\Controllers\Api\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Models\Transportation;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function edit($id)
    {
        return response()->json([
            'transportations' => Transportation::findorfail($id)
        ]);
    }
}
