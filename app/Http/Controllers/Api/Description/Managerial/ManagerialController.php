<?php

namespace App\Http\Controllers\Api\Description\Managerial;

use App\Http\Controllers\Controller;
use App\Models\Managerial;
use App\Models\ObtainedCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $managerial = Managerial::where('team_id' , $team_id)->first();
        $certificate = ObtainedCertificate::where('team_id' , $team_id)->paginate(10);

        return response()->json([
            'managerial' => $managerial,
            'certificate' => $certificate,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $managerial = Managerial::where('team_id' , $team_id)->first();

        return response()->json([
            'managerial' => $managerial,
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
