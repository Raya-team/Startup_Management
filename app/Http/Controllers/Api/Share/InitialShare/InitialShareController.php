<?php

namespace App\Http\Controllers\Api\Share\InitialShare;

use App\Http\Controllers\Controller;
use App\Models\ShareVariable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InitialShareController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $team_id = ShareVariable::where('team_id',Auth::user()->team_id)->first();
        if (isset($team_id)){
            return true;
        }
        return false;
    }
}
