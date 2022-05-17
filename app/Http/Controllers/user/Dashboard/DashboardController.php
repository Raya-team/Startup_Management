<?php

namespace App\Http\Controllers\user\Dashboard;

use App\Http\Controllers\Calculations\NPV;
use App\Http\Controllers\Controller;
use App\Models\AffordableQuestion;
use App\Models\CommercializationQuestion;
use App\Models\CompetitivePositionQuestion;
use App\Models\CustomerCommitmentQuestion;
use App\Models\CustomerRecognitionQuestion;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\FunctionalManagementQuestion;
use App\Models\IntellectualPropertyManagementQuestion;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\LiquidityAndAccessToCapitalQuestion;
use App\Models\ManufacturingQuestion;
use App\Models\MarketQuestion;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\PublicManagementQuestion;
use App\Models\RuleQuestion;
use App\Models\SaleAndTechnicalSupportQuestion;
use App\Models\SaleForecastQuestion;
use App\Models\SupplyChainQuestion;
use App\Models\TechnologyQuestion;
use App\Models\Transportation;
use App\Models\UncertaintyPredictionQuestion;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationPreOperationCost;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    use NPV;

    public function index()
    {
        $team_id = Auth::user()->team_id;
        /* TRL */
        $techno_questions = TechnologyQuestion::where('team_id', $team_id)->first();
        if(isset($techno_questions->q31))
        {
            $TRL = 0;
            if ($techno_questions->q31 || $techno_questions->q32 || $techno_questions->q33 || $techno_questions->q34 || $techno_questions->q35){
                $TRL = 9;
            }elseif ($techno_questions->q27 || $techno_questions->q28 || $techno_questions->q29 || $techno_questions->q30){
                $TRL = 8;
            }elseif ($techno_questions->q23 || $techno_questions->q24 || $techno_questions->q25 || $techno_questions->q26){
                $TRL = 7;
            }elseif ($techno_questions->q19 || $techno_questions->q20 || $techno_questions->q21 || $techno_questions->q22){
                $TRL = 6;
            }
            elseif ($techno_questions->q15 || $techno_questions->q16 || $techno_questions->q17 || $techno_questions->q18){
                $TRL = 5;
            }elseif ($techno_questions->q10 || $techno_questions->q11 || $techno_questions->q12 ||  $techno_questions->q13 ||  $techno_questions->q14){
                $TRL = 4;
            }elseif ($techno_questions->q7 || $techno_questions->q8 || $techno_questions->q9){
                $TRL = 3;
            }elseif ($techno_questions->q4 || $techno_questions->q5 || $techno_questions->q6){
                $TRL = 2;
            }elseif ($techno_questions->q1 || $techno_questions->q2 || $techno_questions->q3){
                $TRL = 1;
            }
        }
        else{
            $TRL = '...';
        }

        /* mRL */

        $ManufacturingQuestion = ManufacturingQuestion::where('team_id', $team_id)->first();
        if(isset($ManufacturingQuestion))
        {
            $mRL = 0;
            if ($ManufacturingQuestion->q24 || $ManufacturingQuestion->q25 || $ManufacturingQuestion->q26 || $ManufacturingQuestion->q27 || $ManufacturingQuestion->q28 || $ManufacturingQuestion->q29 && $ManufacturingQuestion->q30){
                $mRL = 10;
            }elseif ($ManufacturingQuestion->q20 || $ManufacturingQuestion->q21 || $ManufacturingQuestion->q22 || $ManufacturingQuestion->q23){
                $mRL = 9;
            }elseif ($ManufacturingQuestion->q14 || $ManufacturingQuestion->q15 || $ManufacturingQuestion->q16 || $ManufacturingQuestion->q17 || $ManufacturingQuestion->q18 || $ManufacturingQuestion->q19){
                $mRL = 8;
            }elseif ($ManufacturingQuestion->q13){
                $mRL = 7;
            }elseif ($ManufacturingQuestion->q9 || $ManufacturingQuestion->q10 || $ManufacturingQuestion->q11 || $ManufacturingQuestion->q12){
                $mRL = 6;
            }elseif ($ManufacturingQuestion->q6 || $ManufacturingQuestion->q7 || $ManufacturingQuestion->q8){
                $mRL = 5;
            }elseif ($ManufacturingQuestion->q1 || $ManufacturingQuestion->q2 || $ManufacturingQuestion->q3 || $ManufacturingQuestion->q4 || $ManufacturingQuestion->q5){
                $mRL = 4;
            }
        }
        else{
            $mRL = '...';
        }

        /* MRL */
        $MarketQuestion = MarketQuestion::where('team_id', $team_id)->first();
        if(isset($MarketQuestion))
        {
            $MRL = 0;
            if ($MarketQuestion->q9){
                $MRL = 9;
            }elseif ($MarketQuestion->q8){
                $MRL = 8;
            }elseif ($MarketQuestion->q7){
                $MRL = 7;
            }elseif ($MarketQuestion->q6){
                $MRL = 6;
            }elseif ($MarketQuestion->q5){
                $MRL = 5;
            }elseif ($MarketQuestion->q4){
                $MRL = 4;
            }elseif ($MarketQuestion->q3){
                $MRL = 3;}
            elseif ($MarketQuestion->q2){
                $MRL = 2;
            }elseif ($MarketQuestion->q1){
                $MRL = 1;
            }
        }
        else{
            $MRL = '...';
        }

        /* BRL */
        $Commercialization = CommercializationQuestion::where('team_id', $team_id)->first();
        if(isset($Commercialization))
        {
            $cal_Commercialization = 0;
            if ($Commercialization->q10){$cal_Commercialization = 10;}elseif($Commercialization->q9){$cal_Commercialization = 9;}elseif($Commercialization->q8){$cal_Commercialization = 8;}elseif($Commercialization->q7){$cal_Commercialization = 7;}elseif($Commercialization->q6){$cal_Commercialization = 6;}elseif($Commercialization->q5){$cal_Commercialization = 5;}elseif($Commercialization->q4){$cal_Commercialization = 4;}elseif($Commercialization->q3){$cal_Commercialization = 3;}elseif($Commercialization->q2){$cal_Commercialization = 2;}elseif($Commercialization->q1){$cal_Commercialization = 1;}

            $cal_PublicManagement = 0;
            $PublicManagement = PublicManagementQuestion::where('team_id', $team_id)->first();
            if ($PublicManagement->q10){$cal_PublicManagement = 10;}elseif($PublicManagement->q9){$cal_PublicManagement = 9;}elseif($PublicManagement->q8){$cal_PublicManagement = 8;}elseif($PublicManagement->q7){$cal_PublicManagement = 7;}elseif($PublicManagement->q6){$cal_PublicManagement = 6;}elseif($PublicManagement->q5){$cal_PublicManagement = 5;}elseif($PublicManagement->q4){$cal_PublicManagement = 4;}elseif($PublicManagement->q3){$cal_PublicManagement = 3;}elseif($PublicManagement->q2){$cal_PublicManagement = 2;}elseif($PublicManagement->q1){$cal_PublicManagement = 1;}

            $cal_FunctionalManagement = 0;
            $FunctionalManagement = FunctionalManagementQuestion::where('team_id', $team_id)->first();
            if ($FunctionalManagement->q10){$cal_FunctionalManagement = 10;}elseif($FunctionalManagement->q9){$cal_FunctionalManagement = 9;}elseif($FunctionalManagement->q8){$cal_FunctionalManagement = 8;}elseif($FunctionalManagement->q7){$cal_FunctionalManagement = 7;}elseif($FunctionalManagement->q6){$cal_FunctionalManagement = 6;}elseif($FunctionalManagement->q5){$cal_FunctionalManagement = 5;}elseif($FunctionalManagement->q4){$cal_FunctionalManagement = 4;}elseif($FunctionalManagement->q3){$cal_FunctionalManagement = 3;}elseif($FunctionalManagement->q2){$cal_FunctionalManagement = 2;}elseif($FunctionalManagement->q1){$cal_FunctionalManagement = 1;}

            $cal_SaleAndTechnicalSupport = 0;
            $SaleAndTechnicalSupport = SaleAndTechnicalSupportQuestion::where('team_id', $team_id)->first();
            if ($SaleAndTechnicalSupport->q10){$cal_SaleAndTechnicalSupport = 10;}elseif($SaleAndTechnicalSupport->q9){$cal_SaleAndTechnicalSupport = 9;}elseif($SaleAndTechnicalSupport->q8){$cal_SaleAndTechnicalSupport = 8;}elseif($SaleAndTechnicalSupport->q7){$cal_SaleAndTechnicalSupport = 7;}elseif($SaleAndTechnicalSupport->q6){$cal_SaleAndTechnicalSupport = 6;}elseif($SaleAndTechnicalSupport->q5){$cal_SaleAndTechnicalSupport = 5;}elseif($SaleAndTechnicalSupport->q4){$cal_SaleAndTechnicalSupport = 4;}elseif($SaleAndTechnicalSupport->q3){$cal_SaleAndTechnicalSupport = 3;}elseif($SaleAndTechnicalSupport->q2){$cal_SaleAndTechnicalSupport = 3;}elseif($SaleAndTechnicalSupport->q1){$cal_SaleAndTechnicalSupport = 3;}

            $cal_LiquidityAndAccessToCapital = 0;
            $LiquidityAndAccessToCapital = LiquidityAndAccessToCapitalQuestion::where('team_id', $team_id)->first();
            if ($LiquidityAndAccessToCapital->q10){$cal_LiquidityAndAccessToCapital = 10;}elseif($LiquidityAndAccessToCapital->q9){$cal_LiquidityAndAccessToCapital = 9;}elseif($LiquidityAndAccessToCapital->q8){$cal_LiquidityAndAccessToCapital = 8;}elseif($LiquidityAndAccessToCapital->q7){$cal_LiquidityAndAccessToCapital = 7;}elseif($LiquidityAndAccessToCapital->q6){$cal_LiquidityAndAccessToCapital = 6;}elseif($LiquidityAndAccessToCapital->q5){$cal_LiquidityAndAccessToCapital = 5;}elseif($LiquidityAndAccessToCapital->q4){$cal_LiquidityAndAccessToCapital = 4;}elseif($LiquidityAndAccessToCapital->q3){$cal_LiquidityAndAccessToCapital = 3;}elseif($LiquidityAndAccessToCapital->q2){$cal_LiquidityAndAccessToCapital = 2;}elseif($LiquidityAndAccessToCapital->q1){$cal_LiquidityAndAccessToCapital = 1;}

            $cal_CompetitivePosition = 0;
            $CompetitivePosition = CompetitivePositionQuestion::where('team_id', $team_id)->first();
            if ($CompetitivePosition->q10){$cal_CompetitivePosition = 10;}elseif($CompetitivePosition->q9){$cal_CompetitivePosition = 9;}elseif($CompetitivePosition->q8){$cal_CompetitivePosition = 8;}elseif($CompetitivePosition->q7){$cal_CompetitivePosition = 7;}elseif($CompetitivePosition->q6){$cal_CompetitivePosition = 6;}elseif($CompetitivePosition->q5){$cal_CompetitivePosition = 5;}elseif($CompetitivePosition->q4){$cal_CompetitivePosition = 4;}elseif($CompetitivePosition->q3){$cal_CompetitivePosition = 3;}elseif($CompetitivePosition->q2){$cal_CompetitivePosition = 2;}elseif($CompetitivePosition->q1){$cal_CompetitivePosition = 1;}

            $cal_CustomerRecognition = 0;
            $CustomerRecognition = CustomerRecognitionQuestion::where('team_id', $team_id)->first();
            if ($CustomerRecognition->q10){$cal_CustomerRecognition = 10;}elseif($CustomerRecognition->q9){$cal_CustomerRecognition = 9;}elseif($CustomerRecognition->q8){$cal_CustomerRecognition = 8;}elseif($CustomerRecognition->q7){$cal_CustomerRecognition = 7;}elseif($CustomerRecognition->q6){$cal_CustomerRecognition = 6;}elseif($CustomerRecognition->q5){$cal_CustomerRecognition = 5;}elseif($CustomerRecognition->q4){$cal_CustomerRecognition = 4;}elseif($CustomerRecognition->q3){$cal_CustomerRecognition = 3;}elseif($CustomerRecognition->q2){$cal_CustomerRecognition = 2;}elseif($CustomerRecognition->q1){$cal_CustomerRecognition = 1;}

            $cal_CustomerCommitment = 0;
            $CustomerCommitment = CustomerCommitmentQuestion::where('team_id', $team_id)->first();
            if ($CustomerCommitment->q10){$cal_CustomerCommitment = 10;}elseif($CustomerCommitment->q9){$cal_CustomerCommitment = 9;}elseif($CustomerCommitment->q8){$cal_CustomerCommitment = 8;}elseif($CustomerCommitment->q7){$cal_CustomerCommitment = 7;}elseif($CustomerCommitment->q6){$cal_CustomerCommitment = 6;}elseif($CustomerCommitment->q5){$cal_CustomerCommitment = 5;}elseif($CustomerCommitment->q4){$cal_CustomerCommitment = 4;}elseif($CustomerCommitment->q3){$cal_CustomerCommitment = 3;}elseif($CustomerCommitment->q2){$cal_CustomerCommitment = 3;}elseif($CustomerCommitment->q1){$cal_CustomerCommitment = 3;}

            $cal_Affordable = 0;
            $Affordable = AffordableQuestion::where('team_id', $team_id)->first();
            if ($Affordable->q10){$cal_Affordable = 10;}elseif($Affordable->q9){$cal_Affordable = 9;}elseif($Affordable->q8){$cal_Affordable = 8;}elseif($Affordable->q7){$cal_Affordable = 7;}elseif($Affordable->q6){$cal_Affordable = 6;}elseif($Affordable->q5){$cal_Affordable = 5;}elseif($Affordable->q4){$cal_Affordable = 4;}elseif($Affordable->q3){$cal_Affordable = 3;}elseif($Affordable->q2){$cal_Affordable = 2;}elseif($Affordable->q1){$cal_Affordable = 1;}

            $cal_IntellectualPropertyManagement = 0;
            $IntellectualPropertyManagement = IntellectualPropertyManagementQuestion::where('team_id', $team_id)->first();
            if ($IntellectualPropertyManagement->q10){$cal_IntellectualPropertyManagement = 10;}elseif($IntellectualPropertyManagement->q9){$cal_IntellectualPropertyManagement = 9;}elseif($IntellectualPropertyManagement->q8){$cal_IntellectualPropertyManagement = 8;}elseif($IntellectualPropertyManagement->q7){$cal_IntellectualPropertyManagement = 7;}elseif($IntellectualPropertyManagement->q6){$cal_IntellectualPropertyManagement = 6;}elseif($IntellectualPropertyManagement->q5){$cal_IntellectualPropertyManagement = 5;}elseif($IntellectualPropertyManagement->q4){$cal_IntellectualPropertyManagement = 4;}elseif($IntellectualPropertyManagement->q3){$cal_IntellectualPropertyManagement = 3;}elseif($IntellectualPropertyManagement->q2){$cal_IntellectualPropertyManagement = 2;}elseif($IntellectualPropertyManagement->q1){$cal_IntellectualPropertyManagement = 1;}

            $cal_SaleForecast = 0;
            $SaleForecast = SaleForecastQuestion::where('team_id', $team_id)->first();
            if ($SaleForecast->q10){$cal_SaleForecast = 10;}elseif($SaleForecast->q9){$cal_SaleForecast = 9;}elseif($SaleForecast->q8){$cal_SaleForecast = 8;}elseif($SaleForecast->q7){$cal_SaleForecast = 7;}elseif($SaleForecast->q6){$cal_SaleForecast = 6;}elseif($SaleForecast->q5){$cal_SaleForecast = 5;}elseif($SaleForecast->q4){$cal_SaleForecast = 4;}elseif($SaleForecast->q3){$cal_SaleForecast = 3;}elseif($SaleForecast->q2){$cal_SaleForecast = 2;}elseif($SaleForecast->q1){$cal_SaleForecast = 1;}

            $cal_UncertaintyPrediction = 0;
            $UncertaintyPrediction = UncertaintyPredictionQuestion::where('team_id', $team_id)->first();
            if ($UncertaintyPrediction->q10){$cal_UncertaintyPrediction = 10;}elseif($UncertaintyPrediction->q9){$cal_UncertaintyPrediction = 9;}elseif($UncertaintyPrediction->q8){$cal_UncertaintyPrediction = 8;}elseif($UncertaintyPrediction->q7){$cal_UncertaintyPrediction = 7;}elseif($UncertaintyPrediction->q6){$cal_UncertaintyPrediction = 6;}elseif($UncertaintyPrediction->q5){$cal_UncertaintyPrediction = 5;}elseif($UncertaintyPrediction->q4){$cal_UncertaintyPrediction = 4;}elseif($UncertaintyPrediction->q3){$cal_UncertaintyPrediction = 3;}elseif($UncertaintyPrediction->q2){$cal_UncertaintyPrediction = 2;}elseif($UncertaintyPrediction->q1){$cal_UncertaintyPrediction = 1;}

            $cal_SupplyChain = 0;
            $SupplyChain = SupplyChainQuestion::where('team_id', $team_id)->first();
            if ($SupplyChain->q10){$cal_SupplyChain = 10;}elseif($SupplyChain->q9){$cal_SupplyChain = 9;}elseif($SupplyChain->q8){$cal_SupplyChain = 8;}elseif($SupplyChain->q7){$cal_SupplyChain = 7;}elseif($SupplyChain->q6){$cal_SupplyChain = 6;}elseif($SupplyChain->q5){$cal_SupplyChain = 5;}elseif($SupplyChain->q4){$cal_SupplyChain = 4;}elseif($SupplyChain->q3){$cal_SupplyChain = 3;}elseif($SupplyChain->q2){$cal_SupplyChain = 2;}elseif($SupplyChain->q1){$cal_SupplyChain = 1;}

            $cal_Rule = 0;
            $Rule = RuleQuestion::where('team_id', $team_id)->first();
            if ($Rule->q10){$cal_Rule = 10;}elseif($Rule->q9){$cal_Rule = 9;}elseif($Rule->q8){$cal_Rule = 8;}elseif($Rule->q7){$cal_Rule = 7;}elseif($Rule->q6){$cal_Rule = 6;}elseif($Rule->q5){$cal_Rule = 5;}elseif($Rule->q4){$cal_Rule = 4;}elseif($Rule->q3){$cal_Rule = 3;}elseif($Rule->q2){$cal_Rule = 2;}elseif($Rule->q1){$cal_Rule = 1;}

            $BRL = round(($cal_Commercialization + $cal_PublicManagement + $cal_FunctionalManagement + $cal_SaleAndTechnicalSupport + $cal_LiquidityAndAccessToCapital + $cal_CompetitivePosition + $cal_CustomerRecognition + $cal_CustomerCommitment + $cal_Affordable + $cal_IntellectualPropertyManagement + $cal_SaleForecast + $cal_UncertaintyPrediction + $cal_SupplyChain + $cal_Rule) / 14,2) ;
        }
        else{
            $BRL = '...';
        }

        $plan_year = PlanYear::where('team_id', $team_id)->first();
        if(isset($plan_year->number_of_plan_year)){
            $plan_life = $plan_year->number_of_plan_year;
        }else{
            $plan_life = '...';
        }

        $NPV = $this->NPV();

        $lands = Land::where('team_id', $team_id)->get()->sum('price');
        $equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        $fin_laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        $fin_facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        $fin_transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        $office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        $pre_operating_cost = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        $tenements = ValuationTenement::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $facilities = ValuationFacility::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $machineries = ValuationMachinery::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $laboratory_equipments = ValuationLaboratoryEquipment::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $offices = ValuationOfficeSupply::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $transportations = ValuationTransportation::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $pre_operation_costs = ValuationPreOperationCost::with(['Description','Owner'])->where('team_id', $team_id)->get();

        return view('user.dashboard.index', compact(['TRL', 'mRL', 'MRL', 'BRL', 'plan_life', 'NPV', 'lands', 'equipment_and_machineries', 'fin_laboratory_equipments', 'fin_facilities', 'fin_transportations', 'office_equipment_and_supplise', 'pre_operating_cost', 'tenements', 'facilities', 'machineries', 'laboratory_equipments', 'offices', 'transportations', 'pre_operation_costs']));
    }
}
