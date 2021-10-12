<?php

namespace App\Http\Controllers\user\Readiness;

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
        return view('user.Readiness.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.Readiness.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_id = Auth::user()->team_id;

        $this->Commercialization($request, $team_id);
        $this->PublicManagement($request, $team_id);
        $this->FunctionalManagement($request, $team_id);
        $this->SaleAndTechnicalSupport($request, $team_id);
        $this->LiquidityAndAccessToCapital($request, $team_id);
        $this->CompetitivePosition($request, $team_id);
        $this->CustomerRecognition($request, $team_id);
        $this->CustomerCommitment($request, $team_id);
        $this->Affordable($request, $team_id);
        $this->IntellectualPropertyManagement($request, $team_id);
        $this->SaleForecast($request, $team_id);
        $this->UncertaintyPrediction($request, $team_id);
        $this->SupplyChain($request, $team_id);
        $this->Rule($request, $team_id);

        return response(['success'], 201);
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function Commercialization(Request $request, $team_id)
    {
        $commercialization = new CommercializationQuestion();
        $commercialization->q1 = $request->commercialization['q1'];$commercialization->q2 = $request->commercialization['q2'];$commercialization->q3 = $request->commercialization['q3'];$commercialization->q4 = $request->commercialization['q4'];$commercialization->q5 = $request->commercialization['q5'];$commercialization->q6 = $request->commercialization['q6'];$commercialization->q7 = $request->commercialization['q7'];$commercialization->q8 = $request->commercialization['q8'];$commercialization->q9 = $request->commercialization['q9'];$commercialization->q10 = $request->commercialization['q10'];$commercialization->team_id = $team_id;$commercialization->updated_at = null;$commercialization->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function PublicManagement(Request $request, $team_id)
    {
        $public_management = new PublicManagementQuestion();
        $public_management->q1 = $request->public_management['q1'];$public_management->q2 = $request->public_management['q2'];$public_management->q3 = $request->public_management['q3'];$public_management->q4 = $request->public_management['q4'];$public_management->q5 = $request->public_management['q5'];$public_management->q6 = $request->public_management['q6'];$public_management->q7 = $request->public_management['q7'];$public_management->q8 = $request->public_management['q8'];$public_management->q9 = $request->public_management['q9'];$public_management->q10 = $request->public_management['q10'];$public_management->team_id = $team_id;$public_management->updated_at = null;$public_management->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function FunctionalManagement(Request $request, $team_id)
    {
        $functional_management = new FunctionalManagementQuestion();
        $functional_management->q1 = $request->functional_management['q1'];$functional_management->q2 = $request->functional_management['q2'];$functional_management->q3 = $request->functional_management['q3'];$functional_management->q4 = $request->functional_management['q4'];$functional_management->q5 = $request->functional_management['q5'];$functional_management->q6 = $request->functional_management['q6'];$functional_management->q7 = $request->functional_management['q7'];$functional_management->q8 = $request->functional_management['q8'];$functional_management->q9 = $request->functional_management['q9'];$functional_management->q10 = $request->functional_management['q10'];$functional_management->team_id = $team_id;$functional_management->updated_at = null;$functional_management->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function SaleAndTechnicalSupport(Request $request, $team_id)
    {
        $sale_and_technical_support = new SaleAndTechnicalSupportQuestion();
        $sale_and_technical_support->q1 = $request->sale_and_technical_support['q1'];$sale_and_technical_support->q2 = $request->sale_and_technical_support['q2'];$sale_and_technical_support->q3 = $request->sale_and_technical_support['q3'];$sale_and_technical_support->q4 = $request->sale_and_technical_support['q4'];$sale_and_technical_support->q5 = $request->sale_and_technical_support['q5'];$sale_and_technical_support->q6 = $request->sale_and_technical_support['q6'];$sale_and_technical_support->q7 = $request->sale_and_technical_support['q7'];$sale_and_technical_support->q8 = $request->sale_and_technical_support['q8'];$sale_and_technical_support->q9 = $request->sale_and_technical_support['q9'];$sale_and_technical_support->q10 = $request->sale_and_technical_support['q10'];$sale_and_technical_support->team_id = $team_id;$sale_and_technical_support->updated_at = null;$sale_and_technical_support->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function LiquidityAndAccessToCapital(Request $request, $team_id)
    {
        $liquidity_and_access_to_capital = new LiquidityAndAccessToCapitalQuestion();
        $liquidity_and_access_to_capital->q1 = $request->liquidity_and_access_to_capital['q1'];$liquidity_and_access_to_capital->q2 = $request->liquidity_and_access_to_capital['q2'];$liquidity_and_access_to_capital->q3 = $request->liquidity_and_access_to_capital['q3'];$liquidity_and_access_to_capital->q4 = $request->liquidity_and_access_to_capital['q4'];$liquidity_and_access_to_capital->q5 = $request->liquidity_and_access_to_capital['q5'];$liquidity_and_access_to_capital->q6 = $request->liquidity_and_access_to_capital['q6'];$liquidity_and_access_to_capital->q7 = $request->liquidity_and_access_to_capital['q7'];$liquidity_and_access_to_capital->q8 = $request->liquidity_and_access_to_capital['q8'];$liquidity_and_access_to_capital->q9 = $request->liquidity_and_access_to_capital['q9'];$liquidity_and_access_to_capital->q10 = $request->liquidity_and_access_to_capital['q10'];$liquidity_and_access_to_capital->team_id = $team_id;$liquidity_and_access_to_capital->updated_at = null;$liquidity_and_access_to_capital->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function CompetitivePosition(Request $request, $team_id)
    {
        $competitive_position = new CompetitivePositionQuestion();
        $competitive_position->q1 = $request->competitive_position['q1'];$competitive_position->q2 = $request->competitive_position['q2'];$competitive_position->q3 = $request->competitive_position['q3'];$competitive_position->q4 = $request->competitive_position['q4'];$competitive_position->q5 = $request->competitive_position['q5'];$competitive_position->q6 = $request->competitive_position['q6'];$competitive_position->q7 = $request->competitive_position['q7'];$competitive_position->q8 = $request->competitive_position['q8'];$competitive_position->q9 = $request->competitive_position['q9'];$competitive_position->q10 = $request->competitive_position['q10'];$competitive_position->team_id = $team_id;$competitive_position->updated_at = null;$competitive_position->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function CustomerRecognition(Request $request, $team_id)
    {
        $customer_recognition = new CustomerRecognitionQuestion();
        $customer_recognition->q1 = $request->customer_recognition['q1'];$customer_recognition->q2 = $request->customer_recognition['q2'];$customer_recognition->q3 = $request->customer_recognition['q3'];$customer_recognition->q4 = $request->customer_recognition['q4'];$customer_recognition->q5 = $request->customer_recognition['q5'];$customer_recognition->q6 = $request->customer_recognition['q6'];$customer_recognition->q7 = $request->customer_recognition['q7'];$customer_recognition->q8 = $request->customer_recognition['q8'];$customer_recognition->q9 = $request->customer_recognition['q9'];$customer_recognition->q10 = $request->customer_recognition['q10'];$customer_recognition->team_id = $team_id;$customer_recognition->updated_at = null;$customer_recognition->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function CustomerCommitment(Request $request, $team_id)
    {
        $customer_commitment = new CustomerCommitmentQuestion();
        $customer_commitment->q1 = $request->customer_commitment['q1'];$customer_commitment->q2 = $request->customer_commitment['q2'];$customer_commitment->q3 = $request->customer_commitment['q3'];$customer_commitment->q4 = $request->customer_commitment['q4'];$customer_commitment->q5 = $request->customer_commitment['q5'];$customer_commitment->q6 = $request->customer_commitment['q6'];$customer_commitment->q7 = $request->customer_commitment['q7'];$customer_commitment->q8 = $request->customer_commitment['q8'];$customer_commitment->q9 = $request->customer_commitment['q9'];$customer_commitment->q10 = $request->customer_commitment['q10'];$customer_commitment->team_id = $team_id;$customer_commitment->updated_at = null;$customer_commitment->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function Affordable(Request $request, $team_id)
    {
        $affordable = new AffordableQuestion();
        $affordable->q1 = $request->affordable['q1'];$affordable->q2 = $request->affordable['q2'];$affordable->q3 = $request->affordable['q3'];$affordable->q4 = $request->affordable['q4'];$affordable->q5 = $request->affordable['q5'];$affordable->q6 = $request->affordable['q6'];$affordable->q7 = $request->affordable['q7'];$affordable->q8 = $request->affordable['q8'];$affordable->q9 = $request->affordable['q9'];$affordable->q10 = $request->affordable['q10'];$affordable->team_id = $team_id;$affordable->updated_at = null;$affordable->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function IntellectualPropertyManagement(Request $request, $team_id)
    {
        $intellectual_property_management = new IntellectualPropertyManagementQuestion();
        $intellectual_property_management->q1 = $request->intellectual_property_management['q1'];$intellectual_property_management->q2 = $request->intellectual_property_management['q2'];$intellectual_property_management->q3 = $request->intellectual_property_management['q3'];$intellectual_property_management->q4 = $request->intellectual_property_management['q4'];$intellectual_property_management->q5 = $request->intellectual_property_management['q5'];$intellectual_property_management->q6 = $request->intellectual_property_management['q6'];$intellectual_property_management->q7 = $request->intellectual_property_management['q7'];$intellectual_property_management->q8 = $request->intellectual_property_management['q8'];$intellectual_property_management->q9 = $request->intellectual_property_management['q9'];$intellectual_property_management->q10 = $request->intellectual_property_management['q10'];$intellectual_property_management->team_id = $team_id;$intellectual_property_management->updated_at = null;$intellectual_property_management->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function SaleForecast(Request $request, $team_id)
    {
        $sale_forecast = new SaleForecastQuestion();
        $sale_forecast->q1 = $request->sale_forecast['q1'];$sale_forecast->q2 = $request->sale_forecast['q2'];$sale_forecast->q3 = $request->sale_forecast['q3'];$sale_forecast->q4 = $request->sale_forecast['q4'];$sale_forecast->q5 = $request->sale_forecast['q5'];$sale_forecast->q6 = $request->sale_forecast['q6'];$sale_forecast->q7 = $request->sale_forecast['q7'];$sale_forecast->q8 = $request->sale_forecast['q8'];$sale_forecast->q9 = $request->sale_forecast['q9'];$sale_forecast->q10 = $request->sale_forecast['q10'];$sale_forecast->team_id = $team_id;$sale_forecast->updated_at = null;$sale_forecast->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function UncertaintyPrediction(Request $request, $team_id)
    {
        $uncertainty_prediction_questions = new UncertaintyPredictionQuestion();
        $uncertainty_prediction_questions->q1 = $request->uncertainty_prediction_questions['q1'];$uncertainty_prediction_questions->q2 = $request->uncertainty_prediction_questions['q2'];$uncertainty_prediction_questions->q3 = $request->uncertainty_prediction_questions['q3'];$uncertainty_prediction_questions->q4 = $request->uncertainty_prediction_questions['q4'];$uncertainty_prediction_questions->q5 = $request->uncertainty_prediction_questions['q5'];$uncertainty_prediction_questions->q6 = $request->uncertainty_prediction_questions['q6'];$uncertainty_prediction_questions->q7 = $request->uncertainty_prediction_questions['q7'];$uncertainty_prediction_questions->q8 = $request->uncertainty_prediction_questions['q8'];$uncertainty_prediction_questions->q9 = $request->uncertainty_prediction_questions['q9'];$uncertainty_prediction_questions->q10 = $request->uncertainty_prediction_questions['q10'];$uncertainty_prediction_questions->team_id = $team_id;$uncertainty_prediction_questions->updated_at = null;$uncertainty_prediction_questions->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function SupplyChain(Request $request, $team_id)
    {
        $supply_chain = new SupplyChainQuestion();
        $supply_chain->q1 = $request->supply_chain['q1'];$supply_chain->q2 = $request->supply_chain['q2'];$supply_chain->q3 = $request->supply_chain['q3'];$supply_chain->q4 = $request->supply_chain['q4'];$supply_chain->q5 = $request->supply_chain['q5'];$supply_chain->q6 = $request->supply_chain['q6'];$supply_chain->q7 = $request->supply_chain['q7'];$supply_chain->q8 = $request->supply_chain['q8'];$supply_chain->q9 = $request->supply_chain['q9'];$supply_chain->q10 = $request->supply_chain['q10'];$supply_chain->team_id = $team_id;$supply_chain->updated_at = null;$supply_chain->save();
    }

    /**
     * @param Request $request
     * @param $team_id
     */
    protected function Rule(Request $request, $team_id)
    {
        $rule = new RuleQuestion();
        $rule->q1 = $request->rule['q1'];$rule->q2 = $request->rule['q2'];$rule->q3 = $request->rule['q3'];$rule->q4 = $request->rule['q4'];$rule->q5 = $request->rule['q5'];$rule->q6 = $request->rule['q6'];$rule->q7 = $request->rule['q7'];$rule->q8 = $request->rule['q8'];$rule->q9 = $request->rule['q9'];$rule->q10 = $request->rule['q10'];$rule->team_id = $team_id;$rule->updated_at = null;$rule->save();
    }
}
