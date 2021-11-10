<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
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
        return view('user.financial.financial2.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rents = $request->rent;
        for ($i = 0; $i < sizeof($rents); $i++) {
            $rent = new Rent();
            $rent->description = $rents[$i]['description'];
            $rent->area = $rents[$i]['area'];
            $rent->monthly_rent = $rents[$i]['monthly_rent'];
            $rent->total_rent = $rents[$i]['total_rent'];
            $rent->year = $request->year;
            $rent->team_id = $team = Auth::user()->team_id;
            $rent->updated_at = null;
            $rent->save();
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
        return view('user.financial.financial2.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rent = Rent::findorfail($id);
        $rent->description = $request['rent'][0]['description'];
        $rent->area = $request['rent'][0]['area'];
        $rent->monthly_rent = $request['rent'][0]['monthly_rent'];
        $rent->total_rent = $request['rent'][0]['total_rent'];
        $rent->save();
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
        $rent = Rent::findorfail($id);
        $rent->delete();
        return response(["deleted"], 201);
    }
}
