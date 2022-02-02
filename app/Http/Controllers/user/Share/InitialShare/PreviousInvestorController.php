<?php

namespace App\Http\Controllers\user\Share\InitialShare;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreviousInvestorRequest;
use App\Models\PreviousInvestor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreviousInvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.shares.initial-shares.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreviousInvestorRequest $request)
    {
        $previousinvestors = $request->previous_investors;
        for ($i = 0; $i < sizeof($previousinvestors); $i++) {
            $previousinvestor = new PreviousInvestor();
            $previousinvestor->name = $previousinvestors[$i]['name'];
            $previousinvestor->percent = $previousinvestors[$i]['percent'];
            $previousinvestor->team_id = Auth::user()->team_id;
            $previousinvestor->updated_at = null;
            $previousinvestor->save();
        }
        return response(['success'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team_id = Auth::user()->team_id;
        $previousinvestor = PreviousInvestor::findorfail($id);
        if ($team_id == $previousinvestor->team_id){
            return view('user.shares.initial-shares.index');
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PreviousInvestorRequest $request, PreviousInvestor $previousinvestor)
    {
        $previousinvestor->name = $request['previous_investors'][0]['name'];
        $previousinvestor->percent = $request['previous_investors'][0]['percent'];
        $previousinvestor->team_id = Auth::user()->team_id;
        $previousinvestor->save();
        return response(['success'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $previousinvestor = PreviousInvestor::findorfail($id);
        $previousinvestor->delete();
        return response(["deleted"], 201);
    }
}
