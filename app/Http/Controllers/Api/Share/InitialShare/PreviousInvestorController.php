<?php

namespace App\Http\Controllers\Api\Share\InitialShare;

use App\Http\Controllers\Controller;
use App\Models\PreviousInvestor;
use Illuminate\Http\Request;

class PreviousInvestorController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json([
            'previousinvestors' => PreviousInvestor::findorfail($id)
        ]);
    }
}
