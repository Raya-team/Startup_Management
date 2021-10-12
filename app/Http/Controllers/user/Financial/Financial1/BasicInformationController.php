<?php

namespace App\Http\Controllers\user\Financial\Financial1;

use App\Http\Controllers\Controller;
use App\Http\Requests\BasicInformationRequest;
use App\Models\CountDay;
use App\Models\DepreciationRate;
use App\Models\Fiscal;
use App\Models\PlanYear;
use App\Models\TypeOfLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicInformationController extends Controller
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
        return view('user.financial.financial1.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BasicInformationRequest $request)
    {
        $year = new PlanYear();
        $year->number_of_plan_year = $request->input('number_of_plan_year');
        $year->team_id = Auth::user()->team_id;
        $year->updated_at = null;
        $year->save();

        $fiscal = new Fiscal();
        $fiscal->dollar = $request->input('dollar');
        $fiscal->inflation = $request->input('inflation');
        $fiscal->loan = $request->input('loan');
        $fiscal->profit = $request->input('profit');
        $fiscal->reimbursement = $request->input('reimbursement');
        $fiscal->team_id =  Auth::user()->team_id;
        $fiscal->updated_at = null;
        $fiscal->save();

        $count_day = new CountDay();
        $count_day->question_1 = $request->input('number_of_day_1');
        $count_day->question_2 = $request->input('number_of_day_2');
        $count_day->question_3 = $request->input('number_of_day_3');
        $count_day->question_4 = $request->input('number_of_day_4');
        $count_day->team_id =  Auth::user()->team_id;
        $count_day->updated_at = null;
        $count_day->save();

        $depreciation = new DepreciationRate();
        $depreciation->question_1 = $request->input('depreciation_rate_1');
        $depreciation->question_2 = $request->input('depreciation_rate_2');
        $depreciation->question_3 = $request->input('depreciation_rate_3');
        $depreciation->question_4 = $request->input('depreciation_rate_4');
        $depreciation->question_5 = $request->input('depreciation_rate_5');
        $depreciation->team_id =  Auth::user()->team_id;
        $depreciation->updated_at = null;
        $depreciation->save();

        $type = new TypeOfLocation();
        $type->type = $request->input('type');
        $type->team_id =  Auth::user()->team_id;
        $type->updated_at = null;
        $type->save();

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
        return view('user.financial.financial1.index');
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
