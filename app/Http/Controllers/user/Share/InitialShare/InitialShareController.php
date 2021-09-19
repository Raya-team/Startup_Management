<?php

namespace App\Http\Controllers\user\Share\InitialShare;

use App\Http\Controllers\Controller;
use App\Models\ShareVariable;
use Illuminate\Http\Request;

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
        $test= ShareVariable::all();
        if(! isset($test))
        {return 'null';}
        else{return 'hello';}
//        return view('user.shares.initial-shares.index');
    }
}
