<?php

namespace App\Http\Controllers\user\Financial\Financial2;

use App\Http\Controllers\Controller;
use App\Http\Requests\AfterSaleServiceRequest;
use App\Models\AfterSaleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AfterSaleServiceController extends Controller
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
    public function store(AfterSaleServiceRequest $request)
    {
        $team_id = Auth::user()->team_id;
        $afterSaleServices = $request->after_sale_service;
        for ($i = 0; $i < sizeof($afterSaleServices); $i++) {
            $afterSaleService = new AfterSaleService();
            $afterSaleService->description = $afterSaleServices[$i]['description'];
            $afterSaleService->number = $afterSaleServices[$i]['number'];
            $afterSaleService->unit_cost = $afterSaleServices[$i]['unit_cost'];
            $afterSaleService->total_cost = $afterSaleServices[$i]['unit_cost'] * $afterSaleServices[$i]['number'];
            $afterSaleService->year = $request->year;
            $afterSaleService->team_id = $team_id;
            $afterSaleService->updated_at = null;
            $afterSaleService->save();
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
    public function update(AfterSaleServiceRequest $request, $id)
    {
        $afterSaleService = AfterSaleService::findorfail($id);
        $afterSaleService->description = $request['after_sale_service'][0]['description'];
        $afterSaleService->number = $request['after_sale_service'][0]['number'];
        $afterSaleService->unit_cost = $request['after_sale_service'][0]['unit_cost'];
        $afterSaleService->total_cost = $request['after_sale_service'][0]['unit_cost'] * $request['after_sale_service'][0]['number'];
        $afterSaleService->save();
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
        $afterSaleService = AfterSaleService::findorfail($id);
        $afterSaleService->delete();
        return response(["deleted"], 201);
    }
}
