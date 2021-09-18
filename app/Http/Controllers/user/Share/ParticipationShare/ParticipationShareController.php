<?php

namespace App\Http\Controllers\user\Share\ParticipationShare;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipationShareController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('user.shares.participation-shares.index');
    }
}
