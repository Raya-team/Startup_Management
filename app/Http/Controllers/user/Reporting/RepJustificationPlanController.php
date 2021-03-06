<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\AffordableQuestion;
use App\Models\AfterSaleService;
use App\Models\AlternativeProduct;
use App\Models\Business;
use App\Models\Capacity;
use App\Models\CommercializationQuestion;
use App\Models\CompetitivePositionQuestion;
use App\Models\ConsumerItem;
use App\Models\CountDay;
use App\Models\CustomerCommitmentQuestion;
use App\Models\CustomerRecognitionQuestion;
use App\Models\DepreciationRate;
use App\Models\EnergyConsumption;
use App\Models\EnvironmentalEffect;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Fiscal;
use App\Models\FunctionalManagementQuestion;
use App\Models\Insurance;
use App\Models\IntellectualPropertyManagementQuestion;
use App\Models\KeyEmployee;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\LiquidityAndAccessToCapitalQuestion;
use App\Models\Managerial;
use App\Models\ManPower;
use App\Models\ManufacturingQuestion;
use App\Models\Market;
use App\Models\MarketQuestion;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\OpportunityPoint;
use App\Models\OtherInformation;
use App\Models\Outsourcing;
use App\Models\PlanImplementation;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\Product;
use App\Models\ProductCompetitor;
use App\Models\ProductCustomer;
use App\Models\ProductSupplyAndDemand;
use App\Models\PublicManagementQuestion;
use App\Models\RawMaterial;
use App\Models\RD;
use App\Models\RegisteredTeam;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\RequiredCertificate;
use App\Models\RuleQuestion;
use App\Models\SaleAndTechnicalSupportQuestion;
use App\Models\SaleForecastQuestion;
use App\Models\Strengths;
use App\Models\SupplyChainQuestion;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\Technical;
use App\Models\TechnologyQuestion;
use App\Models\Threats;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\UncertaintyPredictionQuestion;
use App\Models\ValuationCost;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationPreOperationCost;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use App\Models\Warranty;
use App\Models\WeakPoint;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;
use function PHPUnit\Framework\isNull;

class RepJustificationPlanController extends Controller
{
    public function index()
    {
        $team_id = Auth::user()->team_id;
        /* TRL */
        $TRL = 0;
        $techno_questions = TechnologyQuestion::where('team_id', $team_id)->first();
        if(isset($techno_questions->q31))
        {
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
            $value = '???????? ?????? ???????????? ?????? ???????????? ???? ?????????? ????????.';
            return view('user.reporting.justification-plan.Error', compact('value'));
        }

        /* mRL */
        $mRL = 0;
        $ManufacturingQuestion = ManufacturingQuestion::where('team_id', $team_id)->first();
        if(isset($ManufacturingQuestion))
        {
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
            $value = '???????? ?????? ?????????? ?????? ???????????? ???? ?????????? ????????.';
            return view('user.reporting.justification-plan.Error', compact('value'));
        }

        /* MRL */
        $MRL = 0;
        $MarketQuestion = MarketQuestion::where('team_id', $team_id)->first();
        if(isset($MarketQuestion))
        {
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
            $value = '???????? ?????? ?????????? ?????? ???????????? ???? ?????????? ????????.';
            return view('user.reporting.justification-plan.Error', compact('value'));
        }

        /* BRL */
        $cal_Commercialization = 0;
        $Commercialization = CommercializationQuestion::where('team_id', $team_id)->first();
        if(isset($Commercialization))
        {
            if ($Commercialization->q10){$cal_Commercialization = 10;}elseif($Commercialization->q9){$cal_Commercialization = 9;}elseif($Commercialization->q8){$cal_Commercialization = 8;}elseif($Commercialization->q7){$cal_Commercialization = 7;}elseif($Commercialization->q6){$cal_Commercialization = 6;}elseif($Commercialization->q5){$cal_Commercialization = 5;}elseif($Commercialization->q4){$cal_Commercialization = 4;}elseif($Commercialization->q3){$cal_Commercialization = 3;}elseif($Commercialization->q2){$cal_Commercialization = 2;}elseif($Commercialization->q1){$cal_Commercialization = 1;}
        }

        else{
            $value = '???????? ?????? ?????? ?? ?????? ?????? ???????????? ???? ?????????? ????????.';
            return view('user.reporting.justification-plan.Error', compact('value'));
        }

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

        /*?????? ???????? ????????????*/
        $technology_risk_level = 100 - ($TRL * 10);
        /* ?????? ???????? ?????????? */
        $manufacturing_risk_level = 100 - ($mRL * 10);
        /* ?????? ???????? ?????????? */
        $market_risk_level = 100 - ($MRL * 10);
        /* ?????? ???????? ?????? ?? ?????? */
        $business_risk_level = 100 - ($BRL * 10);

        /* ???????? ???????? */
        $percentage_of_risk = ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level) / 4;


        $team = Team::where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first('registration_number');
        $shareholders = TeamMember::with(['education','responsibility'])->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::with('education')->where('team_id', $team_id)->get();
        $managerial = Managerial::where('team_id', $team_id)->first();
        $technicals = Technical::where('team_id', $team_id)->first();
        $products = Product::with(['type','rawMaterials'])->where('team_id', $team_id)->get();
        $required_certificates = RequiredCertificate::where('team_id', $team_id)->get();
        $markets = Market::where('team_id', $team_id)->first();
        $supply_and_demand = ProductSupplyAndDemand::with('Unit_id')->where('team_id', $team_id)->get();
        $product_customers = ProductCustomer::where('team_id', $team_id)->get();
        $product_competitors = ProductCompetitor::where('team_id', $team_id)->get();
        $alternative_products = AlternativeProduct::where('team_id', $team_id)->get();
        $environmental_effects = EnvironmentalEffect::where('team_id', $team_id)->first();
        $strengths = Strengths::where('team_id', $team_id)->get();
        $weakPoints = WeakPoint::where('team_id', $team_id)->get();
        $opportunityPoints = OpportunityPoint::where('team_id', $team_id)->get();
        $threats = Threats::where('team_id', $team_id)->get();
        $plan_implementation = PlanImplementation::where('team_id', $team_id)->get();
        //???????? ?????????? ??????????
        $tenements = ValuationTenement::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $facilities = ValuationFacility::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $machineries = ValuationMachinery::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $laboratory_equipments = ValuationLaboratoryEquipment::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $offices = ValuationOfficeSupply::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $transportations = ValuationTransportation::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $pre_operation_costs = ValuationPreOperationCost::with(['Description','Owner'])->where('team_id', $team_id)->get();
        //???????? ???????? ??????
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        //?????????????? ???????? ????
        $plan_year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $depreciation_rate = DepreciationRate::where('team_id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->get()->sum('price');
        $rep_lands = Land::with('tenement')->where('team_id', $team_id)->get();
        $equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        $rep_equipment_and_machineries = EquipmentAndMachinery::with('machinery')->where('team_id', $team_id)->get();
        $fin_laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        $rep_fin_laboratory_equipments = LaboratoryEquipment::with('laboratoryEquipment')->where('team_id', $team_id)->get();
        $fin_facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        $rep_fin_facilities = Facility::with('facility')->where('team_id', $team_id)->get();
        $fin_transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        $rep_fin_transportations = Transportation::with('transportation')->where('team_id', $team_id)->get();
        $office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        $rep_office_equipment_and_supplise = OfficeEquipmentAndSupply::with('officeSupply')->where('team_id', $team_id)->get();
        $pre_operating_cost = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        $rep_pre_operating_cost = PreOperatingCost::with('preOperationCost')->where('team_id', $team_id)->get();
        //?????????????? ???????? ????
        $raw_material = RawMaterial::where('team_id', $team_id)->get();
        $man_powers = ManPower::with('manpowerName')->where('team_id', $team_id)->get();
        $business = Business::where('team_id', $team_id)->get();
        $outsourcing = Outsourcing::where('team_id', $team_id)->get();
        $consumer_item = ConsumerItem::where('team_id', $team_id)->get();
        $rent = Rent::where('team_id', $team_id)->get();
        $energy_consumption = EnergyConsumption::with('Unit')->where('team_id', $team_id)->get();
        $repair = Repair::where('team_id', $team_id)->get();
        $rd = RD::where('team_id', $team_id)->get();
        $warranty = Warranty::with('productName')->where('team_id', $team_id)->get();
        $fin2_transportation = TransportationCost::where('team_id', $team_id)->get();
        $insurances = Insurance::where('team_id', $team_id)->get();
        $otherInformation = OtherInformation::where('team_id', $team_id)->get();
        $after_sale_service = AfterSaleService::where('team_id', $team_id)->get();


        $annual_capacities = [];
        $annual_raw_material_price = [];
        $annual_man_powers_price = [];
        $annual_business_price = [];
        $annual_outsourcing_price = [];
        $annual_consumer_item_price = [];
        $annual_rent_price = [];
        $annual_energy_consumption_price = [];
        $annual_repair_price = [];
        $annual_rd_price = [];
        $annual_warranty_price = [];
        $annual_fin2_transportation_price = [];
        $annual_after_sale_service = [];

        $annual_dep_tenements = [];
        $annual_dep_equipment_and_machineries = [];
        $annual_dep_office_equipment_and_supplise = [];
        $annual_dep_facilities = [];
        $annual_dep_transportations = [];
        $annual_dep_laboratory_equipments = [];
        $annual_financial_expenses = [];
        $annual_depreciation = [];

        $annual_asset_value_tenements = [];
        $annual_asset_value_machineries = [];
        $annual_asset_value_office_equipment = [];
        $annual_asset_value_facilities = [];
        $annual_asset_value_transportations = [];
        $annual_asset_value_laboratory_equipments = [];

        if(isset($plan_year->number_of_plan_year))
        {
            for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
            {
                $capacities = Capacity::where('team_id', $team_id)->where('year',$i)->first('total_production');
                array_push($annual_capacities,$capacities);

                $raw_material_price = $raw_material->where('year', $i)->sum('total_price');
                array_push($annual_raw_material_price,$raw_material_price);

                $man_powers_price = $man_powers->where('year', $i)->sum('total_rights');
                array_push($annual_man_powers_price,$man_powers_price);

                $business_price = $business->where('year', $i)->sum('annual_cost');
                array_push($annual_business_price,$business_price);

                $outsourcing_price = $outsourcing->where('year', $i)->sum('total_cost');
                array_push($annual_outsourcing_price,$outsourcing_price);

                $consumer_item_price = $consumer_item->where('year', $i)->sum('total_cost');
                array_push($annual_consumer_item_price,$consumer_item_price);

                $rent_price = $rent->where('year', $i)->sum('total_rent');
                array_push($annual_rent_price,$rent_price);

                $energy_consumption_price = $energy_consumption->where('year', $i)->sum('annual_cost');
                array_push($annual_energy_consumption_price,$energy_consumption_price);

                $repair_price = $repair->where('year', $i)->sum('total_cost');
                array_push($annual_repair_price,$repair_price);

                $rd_price = $rd->where('year', $i)->sum('annual_cost');
                array_push($annual_rd_price,$rd_price);

                $warranty_price = $warranty->where('year', $i)->sum('total_cost');
                array_push($annual_warranty_price,$warranty_price);

                $fin2_transportation_price = $fin2_transportation->where('year', $i)->sum('total_cost');
                array_push($annual_fin2_transportation_price,$fin2_transportation_price);

                $after_sale_service_price = $after_sale_service->where('year', $i)->sum('total_cost');
                array_push($annual_after_sale_service,$after_sale_service_price);

                if($i <= $fiscal->reimbursement)
                { $financial_expenses = ($fiscal->loan) * ( ($fiscal->profit) / 100 ); }
                else
                { $financial_expenses = 0; }
                array_push($annual_financial_expenses,$financial_expenses);
                /* ?????????? ?????????????? */
                if ($i == 1){
                    $dep_tenements = $lands * ($depreciation_rate->question_1 / 100);
                    array_push($annual_dep_tenements, $dep_tenements);
                    array_push($annual_asset_value_tenements, $lands);

                    $dep_equipment_and_machineries = $equipment_and_machineries * ($depreciation_rate->question_2 / 100);
                    array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                    array_push($annual_asset_value_machineries, $equipment_and_machineries);

                    $dep_office_equipment_and_supplise = $office_equipment_and_supplise * ($depreciation_rate->question_3 / 100);
                    array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                    array_push($annual_asset_value_office_equipment, $office_equipment_and_supplise);

                    $dep_facilities = $fin_facilities * ($depreciation_rate->question_4 / 100);
                    array_push($annual_dep_facilities, $dep_facilities);
                    array_push($annual_asset_value_facilities, $fin_facilities);

                    $dep_transportations = $fin_transportations * ($depreciation_rate->question_5 / 100);
                    array_push($annual_dep_transportations, $dep_transportations);
                    array_push($annual_asset_value_transportations, $fin_transportations);

                    $dep_laboratory_equipments = $fin_laboratory_equipments * ($depreciation_rate->question_6 / 100);
                    array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                    array_push($annual_asset_value_laboratory_equipments, $fin_laboratory_equipments);

                    $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
                }else{
                    $dep_tenements = ($annual_asset_value_tenements[$i-2] - $annual_dep_tenements[$i-2]) * ($depreciation_rate->question_1 / 100);
                    array_push($annual_dep_tenements, $dep_tenements);
                    array_push($annual_asset_value_tenements, $annual_asset_value_tenements[$i-2] - $annual_dep_tenements[$i-2]);

                    $dep_equipment_and_machineries = ($annual_asset_value_machineries[$i-2] - $annual_dep_equipment_and_machineries[$i-2]) * ($depreciation_rate->question_2 / 100);
                    array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                    array_push($annual_asset_value_machineries, $annual_asset_value_machineries[$i-2] - $annual_dep_equipment_and_machineries[$i-2]);

                    $dep_office_equipment_and_supplise = ($annual_asset_value_office_equipment[$i-2] - $annual_dep_office_equipment_and_supplise[$i-2]) * ($depreciation_rate->question_3 / 100);
                    array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                    array_push($annual_asset_value_office_equipment, $annual_asset_value_office_equipment[$i-2] - $annual_dep_office_equipment_and_supplise[$i-2]);

                    $dep_facilities = ($annual_asset_value_facilities[$i-2] - $annual_dep_facilities[$i-2]) * ($depreciation_rate->question_4 / 100);
                    array_push($annual_dep_facilities, $dep_facilities);
                    array_push($annual_asset_value_facilities, $annual_asset_value_facilities[$i-2] - $annual_dep_facilities[$i-2]);

                    $dep_transportations = ($annual_asset_value_transportations[$i-2] - $annual_dep_transportations[$i-2]) * ($depreciation_rate->question_5 / 100);
                    array_push($annual_dep_transportations, $dep_transportations);
                    array_push($annual_asset_value_transportations, $annual_asset_value_transportations[$i-2] - $annual_dep_transportations[$i-2]);

                    $dep_laboratory_equipments = ($annual_asset_value_laboratory_equipments[$i-2] - $annual_dep_laboratory_equipments[$i-2]) * ($depreciation_rate->question_6 / 100);
                    array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                    array_push($annual_asset_value_laboratory_equipments, $annual_asset_value_laboratory_equipments[$i-2] - $annual_dep_laboratory_equipments[$i-2]);

                    $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
                }
                array_push($annual_depreciation, $depreciation);
            }

        }
        else{
            $value = '???????? ?????????? ?????? ?????? ?????? ???? ?????? ???????? 1 ???? ?????????? ????????.';
            return view('user.reporting.justification-plan.Error', compact('value'));
        }
        return view('user.reporting.justification-plan.index',compact('team','registered_team','shareholders','key_employees','managerial','technicals','products','required_certificates','markets','supply_and_demand','product_customers','product_competitors','alternative_products','environmental_effects','strengths','weakPoints','opportunityPoints','threats','plan_implementation','tenements','facilities','machineries','laboratory_equipments','offices','transportations','pre_operation_costs','plan_year','fiscal','count_day','annual_capacities','annual_depreciation','annual_financial_expenses','fin_facilities','fin_laboratory_equipments','fin_transportations','raw_material','annual_raw_material_price','man_powers','annual_man_powers_price','business','annual_business_price','outsourcing','annual_outsourcing_price','consumer_item','annual_consumer_item_price','rent','annual_rent_price','repair','annual_repair_price','rd','annual_rd_price','warranty','annual_warranty_price','fin2_transportation','annual_fin2_transportation_price','energy_consumption','annual_energy_consumption_price','insurances','otherInformation','lands','equipment_and_machineries','fin_laboratory_equipments','fin_facilities','fin_transportations','office_equipment_and_supplise','depreciation_rate','annual_asset_value_tenements','annual_asset_value_machineries','annual_asset_value_office_equipment','annual_asset_value_facilities','annual_asset_value_transportations','annual_asset_value_laboratory_equipments','annual_dep_tenements','annual_dep_equipment_and_machineries','annual_dep_office_equipment_and_supplise','annual_dep_facilities','annual_dep_transportations','annual_dep_laboratory_equipments','pre_operating_cost','valuation_cost','annual_after_sale_service','TRL','MRL','mRL','BRL','technology_risk_level','manufacturing_risk_level','market_risk_level','business_risk_level','percentage_of_risk','rep_lands','rep_fin_facilities','rep_equipment_and_machineries','rep_fin_laboratory_equipments','rep_office_equipment_and_supplise','rep_fin_transportations','rep_pre_operating_cost'));
    }

    public function exportPDF()
    {
        $team_id = Auth::user()->team_id;
        /* TRL */
        $TRL = 0;
        $techno_questions = TechnologyQuestion::where('team_id', $team_id)->first();

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

        /* mRL */
        $mRL = 0;
        $ManufacturingQuestion = ManufacturingQuestion::where('team_id', $team_id)->first();
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

        /* MRL */
        $MRL = 0;
        $MarketQuestion = MarketQuestion::where('team_id', $team_id)->first();
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

        /* BRL */
        $cal_Commercialization = 0;
        $Commercialization = CommercializationQuestion::where('team_id', $team_id)->first();
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

        /*?????? ???????? ????????????*/
        $technology_risk_level = 100 - ($TRL * 10);
        /* ?????? ???????? ?????????? */
        $manufacturing_risk_level = 100 - ($mRL * 10);
        /* ?????? ???????? ?????????? */
        $market_risk_level = 100 - ($MRL * 10);
        /* ?????? ???????? ?????? ?? ?????? */
        $business_risk_level = 100 - ($BRL * 10);

        /* ???????? ???????? */
        $percentage_of_risk = ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level) / 4;


        $team = Team::where('id', $team_id)->first();
        $registered_team = RegisteredTeam::where('team_id', $team_id)->first('registration_number');
        $shareholders = TeamMember::with(['education','responsibility'])->where('team_id', $team_id)->get();
        $key_employees = KeyEmployee::with('education')->where('team_id', $team_id)->get();
        $managerial = Managerial::where('team_id', $team_id)->first();
        $technicals = Technical::where('team_id', $team_id)->first();
        $products = Product::with(['type','rawMaterials'])->where('team_id', $team_id)->get();
        $required_certificates = RequiredCertificate::where('team_id', $team_id)->get();
        $markets = Market::where('team_id', $team_id)->first();
        $supply_and_demand = ProductSupplyAndDemand::with('Unit_id')->where('team_id', $team_id)->get();
        $product_customers = ProductCustomer::where('team_id', $team_id)->get();
        $product_competitors = ProductCompetitor::where('team_id', $team_id)->get();
        $alternative_products = AlternativeProduct::where('team_id', $team_id)->get();
        $environmental_effects = EnvironmentalEffect::where('team_id', $team_id)->first();
        $strengths = Strengths::where('team_id', $team_id)->get();
        $weakPoints = WeakPoint::where('team_id', $team_id)->get();
        $opportunityPoints = OpportunityPoint::where('team_id', $team_id)->get();
        $threats = Threats::where('team_id', $team_id)->get();
        $plan_implementation = PlanImplementation::where('team_id', $team_id)->get();
        //???????? ?????????? ??????????
        $tenements = ValuationTenement::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $facilities = ValuationFacility::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $machineries = ValuationMachinery::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $laboratory_equipments = ValuationLaboratoryEquipment::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $offices = ValuationOfficeSupply::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $transportations = ValuationTransportation::with(['Description','Owner'])->where('team_id', $team_id)->get();
        $pre_operation_costs = ValuationPreOperationCost::with(['Description','Owner'])->where('team_id', $team_id)->get();
        //???????? ???????? ??????
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        //?????????????? ???????? ????
        $plan_year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $depreciation_rate = DepreciationRate::where('team_id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->get()->sum('price');
        $equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        $fin_laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        $fin_facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        $fin_transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        $office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        $pre_operating_cost = PreOperatingCost::where('team_id', $team_id)->sum('total_price');
        //?????????????? ???????? ????
        $raw_material = RawMaterial::where('team_id', $team_id)->get();
        $man_powers = ManPower::with('manpowerName')->where('team_id', $team_id)->get();
        $business = Business::where('team_id', $team_id)->get();
        $outsourcing = Outsourcing::where('team_id', $team_id)->get();
        $consumer_item = ConsumerItem::where('team_id', $team_id)->get();
        $rent = Rent::where('team_id', $team_id)->get();
        $energy_consumption = EnergyConsumption::with('Unit')->where('team_id', $team_id)->get();
        $repair = Repair::where('team_id', $team_id)->get();
        $rd = RD::where('team_id', $team_id)->get();
        $warranty = Warranty::with('productName')->where('team_id', $team_id)->get();
        $fin2_transportation = TransportationCost::where('team_id', $team_id)->get();
        $insurances = Insurance::where('team_id', $team_id)->get();
        $otherInformation = OtherInformation::where('team_id', $team_id)->get();
        $after_sale_service = AfterSaleService::where('team_id', $team_id)->get();


        $annual_capacities = [];
        $annual_raw_material_price = [];
        $annual_man_powers_price = [];
        $annual_business_price = [];
        $annual_outsourcing_price = [];
        $annual_consumer_item_price = [];
        $annual_rent_price = [];
        $annual_energy_consumption_price = [];
        $annual_repair_price = [];
        $annual_rd_price = [];
        $annual_warranty_price = [];
        $annual_fin2_transportation_price = [];
        $annual_after_sale_service = [];

        $annual_dep_tenements = [];
        $annual_dep_equipment_and_machineries = [];
        $annual_dep_office_equipment_and_supplise = [];
        $annual_dep_facilities = [];
        $annual_dep_transportations = [];
        $annual_dep_laboratory_equipments = [];
        $annual_financial_expenses = [];
        $annual_depreciation = [];

        $annual_asset_value_tenements = [];
        $annual_asset_value_machineries = [];
        $annual_asset_value_office_equipment = [];
        $annual_asset_value_facilities = [];
        $annual_asset_value_transportations = [];
        $annual_asset_value_laboratory_equipments = [];

        for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
        {
            $capacities = Capacity::where('team_id', $team_id)->where('year',$i)->first('total_production');
            array_push($annual_capacities,$capacities);

            $raw_material_price = $raw_material->where('year', $i)->sum('total_price');
            array_push($annual_raw_material_price,$raw_material_price);

            $man_powers_price = $man_powers->where('year', $i)->sum('total_rights');
            array_push($annual_man_powers_price,$man_powers_price);

            $business_price = $business->where('year', $i)->sum('annual_cost');
            array_push($annual_business_price,$business_price);

            $outsourcing_price = $outsourcing->where('year', $i)->sum('total_cost');
            array_push($annual_outsourcing_price,$outsourcing_price);

            $consumer_item_price = $consumer_item->where('year', $i)->sum('total_cost');
            array_push($annual_consumer_item_price,$consumer_item_price);

            $rent_price = $rent->where('year', $i)->sum('total_rent');
            array_push($annual_rent_price,$rent_price);

            $energy_consumption_price = $energy_consumption->where('year', $i)->sum('annual_cost');
            array_push($annual_energy_consumption_price,$energy_consumption_price);

            $repair_price = $repair->where('year', $i)->sum('total_cost');
            array_push($annual_repair_price,$repair_price);

            $rd_price = $rd->where('year', $i)->sum('annual_cost');
            array_push($annual_rd_price,$rd_price);

            $warranty_price = $warranty->where('year', $i)->sum('total_cost');
            array_push($annual_warranty_price,$warranty_price);

            $fin2_transportation_price = $fin2_transportation->where('year', $i)->sum('total_cost');
            array_push($annual_fin2_transportation_price,$fin2_transportation_price);

            $after_sale_service_price = $after_sale_service->where('year', $i)->sum('total_cost');
            array_push($annual_after_sale_service,$after_sale_service_price);

            if($i <= $fiscal->reimbursement)
            { $financial_expenses = ($fiscal->loan) * ( ($fiscal->profit) / 100 ); }
            else
            { $financial_expenses = 0; }
            array_push($annual_financial_expenses,$financial_expenses);
            /* ?????????? ?????????????? */
            if ($i == 1){
                $dep_tenements = $lands * ($depreciation_rate->question_1 / 100);
                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_asset_value_tenements, $lands);

                $dep_equipment_and_machineries = $equipment_and_machineries * ($depreciation_rate->question_2 / 100);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_asset_value_machineries, $equipment_and_machineries);

                $dep_office_equipment_and_supplise = $office_equipment_and_supplise * ($depreciation_rate->question_3 / 100);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_asset_value_office_equipment, $office_equipment_and_supplise);

                $dep_facilities = $fin_facilities * ($depreciation_rate->question_4 / 100);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_asset_value_facilities, $fin_facilities);

                $dep_transportations = $fin_transportations * ($depreciation_rate->question_5 / 100);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_asset_value_transportations, $fin_transportations);

                $dep_laboratory_equipments = $fin_laboratory_equipments * ($depreciation_rate->question_6 / 100);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                array_push($annual_asset_value_laboratory_equipments, $fin_laboratory_equipments);

                $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
            }else{
                $dep_tenements = ($annual_asset_value_tenements[$i-2] - $annual_dep_tenements[$i-2]) * ($depreciation_rate->question_1 / 100);
                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_asset_value_tenements, $annual_asset_value_tenements[$i-2] - $annual_dep_tenements[$i-2]);

                $dep_equipment_and_machineries = ($annual_asset_value_machineries[$i-2] - $annual_dep_equipment_and_machineries[$i-2]) * ($depreciation_rate->question_2 / 100);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_asset_value_machineries, $annual_asset_value_machineries[$i-2] - $annual_dep_equipment_and_machineries[$i-2]);

                $dep_office_equipment_and_supplise = ($annual_asset_value_office_equipment[$i-2] - $annual_dep_office_equipment_and_supplise[$i-2]) * ($depreciation_rate->question_3 / 100);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_asset_value_office_equipment, $annual_asset_value_office_equipment[$i-2] - $annual_dep_office_equipment_and_supplise[$i-2]);

                $dep_facilities = ($annual_asset_value_facilities[$i-2] - $annual_dep_facilities[$i-2]) * ($depreciation_rate->question_4 / 100);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_asset_value_facilities, $annual_asset_value_facilities[$i-2] - $annual_dep_facilities[$i-2]);

                $dep_transportations = ($annual_asset_value_transportations[$i-2] - $annual_dep_transportations[$i-2]) * ($depreciation_rate->question_5 / 100);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_asset_value_transportations, $annual_asset_value_transportations[$i-2] - $annual_dep_transportations[$i-2]);

                $dep_laboratory_equipments = ($annual_asset_value_laboratory_equipments[$i-2] - $annual_dep_laboratory_equipments[$i-2]) * ($depreciation_rate->question_6 / 100);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                array_push($annual_asset_value_laboratory_equipments, $annual_asset_value_laboratory_equipments[$i-2] - $annual_dep_laboratory_equipments[$i-2]);

                $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
            }
            array_push($annual_depreciation, $depreciation);
        }

        $pdf = PDF::loadView('user.reporting.justification-plan.pdf', compact('team','registered_team','shareholders','key_employees','managerial','technicals','products','required_certificates','markets','supply_and_demand','product_customers','product_competitors','alternative_products','environmental_effects','strengths','weakPoints','opportunityPoints','threats','plan_implementation','tenements','facilities','machineries','laboratory_equipments','offices','transportations','pre_operation_costs','plan_year','fiscal','count_day','annual_capacities','annual_depreciation','annual_financial_expenses','fin_facilities','fin_laboratory_equipments','fin_transportations','raw_material','annual_raw_material_price','man_powers','annual_man_powers_price','business','annual_business_price','outsourcing','annual_outsourcing_price','consumer_item','annual_consumer_item_price','rent','annual_rent_price','repair','annual_repair_price','rd','annual_rd_price','warranty','annual_warranty_price','fin2_transportation','annual_fin2_transportation_price','energy_consumption','annual_energy_consumption_price','insurances','otherInformation','lands','equipment_and_machineries','fin_laboratory_equipments','fin_facilities','fin_transportations','office_equipment_and_supplise','depreciation_rate','annual_asset_value_tenements','annual_asset_value_machineries','annual_asset_value_office_equipment','annual_asset_value_facilities','annual_asset_value_transportations','annual_asset_value_laboratory_equipments','annual_dep_tenements','annual_dep_equipment_and_machineries','annual_dep_office_equipment_and_supplise','annual_dep_facilities','annual_dep_transportations','annual_dep_laboratory_equipments','pre_operating_cost','valuation_cost','annual_after_sale_service','TRL','MRL','mRL','BRL','technology_risk_level','manufacturing_risk_level','market_risk_level','business_risk_level','percentage_of_risk'), [],
            [
                'title' => '?????? ????????????',
                'format' => 'A4',
                'display_mode' => 'fullpage',
            ]);
        $fileName = Carbon::now()->timestamp . '-justification-plan' . '.pdf';

        return $pdf->download($fileName);

//        return view('user.reporting.justification-plan.pdf',compact('team','registered_team','shareholders','key_employees','managerial','technicals','products','required_certificates','markets','supply_and_demand','product_customers','product_competitors','alternative_products','environmental_effects','strengths','weakPoints','opportunityPoints','threats','plan_implementation','tenements','facilities','machineries','laboratory_equipments','offices','transportations','pre_operation_costs','plan_year','fiscal','count_day','annual_capacities','annual_depreciation','annual_financial_expenses','fin_facilities','fin_laboratory_equipments','fin_transportations','raw_material','annual_raw_material_price','man_powers','annual_man_powers_price','business','annual_business_price','outsourcing','annual_outsourcing_price','consumer_item','annual_consumer_item_price','rent','annual_rent_price','repair','annual_repair_price','rd','annual_rd_price','warranty','annual_warranty_price','fin2_transportation','annual_fin2_transportation_price','energy_consumption','annual_energy_consumption_price','insurances','otherInformation','lands','equipment_and_machineries','fin_laboratory_equipments','fin_facilities','fin_transportations','office_equipment_and_supplise','depreciation_rate','annual_asset_value_tenements','annual_asset_value_machineries','annual_asset_value_office_equipment','annual_asset_value_facilities','annual_asset_value_transportations','annual_asset_value_laboratory_equipments','annual_dep_tenements','annual_dep_equipment_and_machineries','annual_dep_office_equipment_and_supplise','annual_dep_facilities','annual_dep_transportations','annual_dep_laboratory_equipments','pre_operating_cost','valuation_cost','annual_after_sale_service','TRL','MRL','mRL','BRL','technology_risk_level','manufacturing_risk_level','market_risk_level','business_risk_level','percentage_of_risk'));
    }
}
