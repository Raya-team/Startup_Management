<?php

namespace App\Http\Controllers\Api\Readiness;

use App\Http\Controllers\Controller;
use App\Models\AffordableQuestion;
use App\Models\CommercializationQuestion;
use App\Models\CompetitivePositionQuestion;
use App\Models\CustomerCommitmentQuestion;
use App\Models\CustomerRecognitionQuestion;
use App\Models\FunctionalManagementQuestion;
use App\Models\IntellectualPropertyManagementQuestion;
use App\Models\LiquidityAndAccessToCapitalQuestion;
use App\Models\PublicManagementQuestion;
use App\Models\RuleQuestion;
use App\Models\SaleAndTechnicalSupportQuestion;
use App\Models\SaleForecastQuestion;
use App\Models\SupplyChainQuestion;
use App\Models\UncertaintyPredictionQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $commercialization = CommercializationQuestion::where('team_id', $team_id)->first();
        $public_management = PublicManagementQuestion::where('team_id', $team_id)->first();
        $functional_management = FunctionalManagementQuestion::where('team_id', $team_id)->first();
        $sale_and_technical_support = SaleAndTechnicalSupportQuestion::where('team_id', $team_id)->first();
        $liquidity_and_access = LiquidityAndAccessToCapitalQuestion::where('team_id', $team_id)->first();
        $competitive_position = CompetitivePositionQuestion::where('team_id', $team_id)->first();
        $customer_recognition = CustomerRecognitionQuestion::where('team_id', $team_id)->first();
        $customer_commitment = CustomerCommitmentQuestion::where('team_id', $team_id)->first();
        $affordable = AffordableQuestion::where('team_id', $team_id)->first();
        $intellectual_management = IntellectualPropertyManagementQuestion::where('team_id', $team_id)->first();
        $sale_forecast = SaleForecastQuestion::where('team_id', $team_id)->first();
        $uncertainty_prediction = UncertaintyPredictionQuestion::where('team_id', $team_id)->first();
        $supply_chain = SupplyChainQuestion::where('team_id', $team_id)->first();
        $rule = RuleQuestion::where('team_id', $team_id)->first();
        return response()->json([
            'commercialization' => $commercialization,
            'public_management' => $public_management,
            'functional_management' => $functional_management,
            'sale_and_technical_support' => $sale_and_technical_support,
            'liquidity_and_access' => $liquidity_and_access,
            'competitive_position' => $competitive_position,
            'customer_recognition' => $customer_recognition,
            'customer_commitment' => $customer_commitment,
            'affordable' => $affordable,
            'intellectual_management' => $intellectual_management,
            'sale_forecast' => $sale_forecast,
            'uncertainty_prediction' => $uncertainty_prediction,
            'supply_chain' => $supply_chain,
            'rule' => $rule,
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
        //
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
