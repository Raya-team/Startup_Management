<?php

namespace App\Http\Controllers\user\Reporting;

use App\Http\Controllers\Controller;
use App\Models\AffordableQuestion;
use App\Models\AfterSaleService;
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
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Fiscal;
use App\Models\FunctionalManagementQuestion;
use App\Models\Insurance;
use App\Models\IntellectualPropertyManagementQuestion;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\LiquidityAndAccessToCapitalQuestion;
use App\Models\ManPower;
use App\Models\ManufacturingQuestion;
use App\Models\MarketQuestion;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\OtherInformation;
use App\Models\Outsourcing;
use App\Models\ParticipationNewInvestor;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\Product;
use App\Models\PublicManagementQuestion;
use App\Models\RawMaterial;
use App\Models\RD;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\RuleQuestion;
use App\Models\SaleAndTechnicalSupportQuestion;
use App\Models\SaleForecastQuestion;
use App\Models\SupplyChainQuestion;
use App\Models\Team;
use App\Models\TechnologyQuestion;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\UncertaintyPredictionQuestion;
use App\Models\ValuationCost;
use App\Models\ValuationFacility;
use App\Models\ValuationLaboratoryEquipment;
use App\Models\ValuationMachinery;
use App\Models\ValuationOfficeSupply;
use App\Models\ValuationOfIntangibleAsset;
use App\Models\ValuationPreOperationCost;
use App\Models\ValuationTenement;
use App\Models\ValuationTransportation;
use App\Models\Warranty;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NPV;
use niklasravnsborg\LaravelPdf\Facades\Pdf as PDF;

class FinancialCalculationController extends Controller
{
    use NPV;
    public function index()
    {
        $team_id = Auth::user()->team_id;
        $team = Team::with('activity')->where('id', $team_id)->first();

        /* TRL */
        $TRL = 0;
        $techno_questions = TechnologyQuestion::where('team_id', $team_id)->first();

        if (isset($techno_questions)){
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
        }else{
            $value = 'لطفا بخش فناوری سطح آمادگی را تکمیل کنید';
            return view('user.reporting.financial-calculation.Error', compact('value'));
        }


        /* mRL */
        $mRL = 0;
        $ManufacturingQuestion = ManufacturingQuestion::where('team_id', $team_id)->first();
        if (isset($ManufacturingQuestion)){
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
        }else{
            $value = 'لطفا بخش تولید را تکمیل کنید';
            return view('user.reporting.financial-calculation.Error', compact('value'));
        }

        /* MRL */
        $MRL = 0;
        $MarketQuestion = MarketQuestion::where('team_id', $team_id)->first();
        if (isset($MarketQuestion)){
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
        }else{
            $value = 'لطفا بخش بازار را تکمیل کنید';
            return view('user.reporting.financial-calculation.Error', compact('value'));
        }

        /* BRL */
        $cal_Commercialization = 0;
        $Commercialization = CommercializationQuestion::where('team_id', $team_id)->first();
        if (isset($Commercialization)){
            if ($Commercialization->q10){$cal_Commercialization = 10;}elseif($Commercialization->q9){$cal_Commercialization = 9;}elseif($Commercialization->q8){$cal_Commercialization = 8;}elseif($Commercialization->q7){$cal_Commercialization = 7;}elseif($Commercialization->q6){$cal_Commercialization = 6;}elseif($Commercialization->q5){$cal_Commercialization = 5;}elseif($Commercialization->q4){$cal_Commercialization = 4;}elseif($Commercialization->q3){$cal_Commercialization = 3;}elseif($Commercialization->q2){$cal_Commercialization = 2;}elseif($Commercialization->q1){$cal_Commercialization = 1;}
        }else{
            $value = 'لطفا بخش کسب و کار را تکمیل کنید';
            return view('user.reporting.financial-calculation.Error', compact('value'));
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

        /*سطج ریسک فناوری*/
        $technology_risk_level = 100 - ($TRL * 10);
        /* سطح ریسک تولید */
        $manufacturing_risk_level = 100 - ($mRL * 10);
        /* سطح ریسک بازار */
        $market_risk_level = 100 - ($MRL * 10);
        /* سطح ریسک کسب و کار */
        $business_risk_level = 100 - ($BRL * 10);
        /* درصد ریسک */
        $percentage_of_risk = ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level) / 4;

        $products = Product::with(['type','rawMaterials'])->where('team_id', $team_id)->get();
        //ارزش دارایی های نامشهود
        $value = 0;
        $model = ValuationOfIntangibleAsset::with('valuationModel')->where('team_id', $team_id)->first();
        if ($model->valuationModel->name == 'هزینه محور'){
            $value = ValuationCost::where('team_id', $team_id)->get()->sum('total_price');
        }elseif($model->valuationModel->name == 'دستی'){
            $value = $model->value;
        }elseif ($model->valuationModel->name == 'درآمد محور'){
            $value = $this->NPV();
            if (is_string($value)){
                return view('user.reporting.financial-calculation.Error', compact('value'));
            }
        }
        //ارزش گذاری مشهود
        $tenements = ValuationTenement::where('team_id', $team_id)->sum('total_price');
        $val_facilities = ValuationFacility::where('team_id', $team_id)->sum('total_price');
        $machineries = ValuationMachinery::where('team_id', $team_id)->sum('total_price');
        $val_laboratory_equipments = ValuationLaboratoryEquipment::where('team_id', $team_id)->sum('total_price');
        $offices = ValuationOfficeSupply::where('team_id', $team_id)->sum('total_price');
        $val_transportations = ValuationTransportation::where('team_id', $team_id)->sum('total_price');
        $pre_operation_costs = ValuationPreOperationCost::where('team_id', $team_id)->sum('total_price');
        //ارزش دانش فنی
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        //اطلاعات مالی یک
        $plan_year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $depreciation_rate = DepreciationRate::where('team_id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->get();
        $lands_price = $lands->sum('price');
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get();
        $laboratory_equipments_price = $laboratory_equipments->sum('total_price');
        $equipments_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get();
        $equipments_price = $equipments_and_machineries->sum('total_price');
        $facilities = Facility::where('team_id', $team_id)->get();
        $facilities_price = $facilities->sum('total_price');
        $office_equipments = OfficeEquipmentAndSupply::where('team_id', $team_id)->get();
        $office_equipments_price = $office_equipments->sum('total_price');
        $transportations = Transportation::where('team_id', $team_id)->get();
        $transportations_price = $transportations->sum('total_price');
        $preoperating = PreOperatingCost::where('team_id', $team_id)->get();
        $preoperating_price = $preoperating->sum('total_price');
        //اطلاعات مالی دو
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
        $annual_man_powers_numbers = [];
        $annual_business_price = [];
        $annual_outsourcing_price = [];
        $annual_consumer_item_price = [];
        $annual_rent_price = [];
        $annual_energy_consumption_price = [];
        $annual_repair_price = [];
        $annual_rd_price = [];
        $annual_warranty_price = [];
        $annual_fin2_transportation_price = [];
        $annual_insurances_price = [];
        $annual_otherInformation_price = [];
        $annual_after_sale_service_price = [];
        //هزینه های استهلاک سالیانه
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
            $capacities = Capacity::where('team_id', $team_id)->where('year',$i)->first(['nominal_capacity','total_production']);
            array_push($annual_capacities,$capacities);


            $raw_material_price = $raw_material->where('year', $i)->sum('total_price');
            array_push($annual_raw_material_price,$raw_material_price);

            $man_powers_price = $man_powers->where('year', $i)->sum('total_rights');
            $man_powers_numbers = $man_powers->where('year', $i)->sum('number');
            array_push($annual_man_powers_price,$man_powers_price);
            array_push($annual_man_powers_numbers,$man_powers_numbers);

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

            $insurances_price = $insurances->where('year', $i)->sum('total_cost');
            array_push($annual_insurances_price,$insurances_price);

            $otherInformation_price = $otherInformation->where('year', $i)->sum('sale_price');
            array_push($annual_otherInformation_price,$otherInformation_price);

            $after_sale_service_price = $after_sale_service->where('year', $i)->sum('total_cost');
            array_push($annual_after_sale_service_price,$after_sale_service_price);

            if($i <= $fiscal->reimbursement)
            { $financial_expenses = ($fiscal->loan) * ( ($fiscal->profit) / 100 ); }
            else
            { $financial_expenses = 0; }
            array_push($annual_financial_expenses,$financial_expenses);
            /* هزینه استهلاک */
            if ($i == 1){
                $dep_tenements = $lands_price * ($depreciation_rate->question_1 / 100);
                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_asset_value_tenements, $lands_price);

                $dep_equipment_and_machineries = $equipments_price * ($depreciation_rate->question_2 / 100);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_asset_value_machineries, $equipments_price);

                $dep_office_equipment_and_supplise = $office_equipments_price * ($depreciation_rate->question_3 / 100);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_asset_value_office_equipment, $office_equipments_price);

                $dep_facilities = $facilities_price * ($depreciation_rate->question_4 / 100);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_asset_value_facilities, $facilities_price);

                $dep_transportations = $transportations_price * ($depreciation_rate->question_5 / 100);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_asset_value_transportations, $transportations_price);

                $dep_laboratory_equipments = $laboratory_equipments_price * ($depreciation_rate->question_6 / 100);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                array_push($annual_asset_value_laboratory_equipments, $laboratory_equipments_price);

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
        //خالص سرمایه گذاری
        $net_investment = ($lands_price + $laboratory_equipments_price + $equipments_price + $facilities_price + $office_equipments_price + $transportations_price + $preoperating_price) - ($valuation_cost + $tenements + $val_facilities + $machineries + $val_laboratory_equipments + $offices + $val_transportations + $pre_operation_costs + $fiscal->loan);
        $new_investors = ParticipationNewInvestor::where('team_id', $team_id)->get();
        $total_investment_percentage = 0;
        $total_investment = 0;
        foreach ($new_investors as $new_investor)
        {
            $total_investment += $new_investor->investment;
            $investment_percentage =  ( ($new_investor->investment/$net_investment) ) * 100;
            $total_investment_percentage += $investment_percentage;
        }
        return view('user.reporting.financial-calculation.index',compact('team_id','plan_year','fiscal','valuation_cost','team','lands','lands_price','laboratory_equipments','laboratory_equipments_price','equipments_and_machineries','equipments_price','office_equipments','office_equipments_price','facilities','facilities_price','preoperating','preoperating_price','transportations','transportations_price','total_investment','total_investment_percentage','annual_capacities','annual_raw_material_price','annual_man_powers_price','annual_business_price','annual_outsourcing_price','annual_consumer_item_price','annual_rent_price','annual_energy_consumption_price','annual_repair_price','annual_rd_price','annual_warranty_price','annual_fin2_transportation_price','annual_insurances_price','annual_otherInformation_price','annual_after_sale_service_price','TRL','MRL','mRL','BRL','technology_risk_level','manufacturing_risk_level','market_risk_level','business_risk_level','percentage_of_risk','annual_asset_value_machineries','annual_asset_value_office_equipment','annual_asset_value_facilities','annual_asset_value_transportations','annual_asset_value_laboratory_equipments','annual_dep_tenements','annual_dep_equipment_and_machineries','annual_dep_office_equipment_and_supplise','annual_dep_facilities','annual_dep_transportations','annual_dep_laboratory_equipments','count_day','annual_depreciation','annual_financial_expenses','value','total_investment_percentage','otherInformation','annual_man_powers_numbers','energy_consumption','man_powers','rent','products','consumer_item','business','fin2_transportation','insurances','repair','warranty','rd','outsourcing','depreciation_rate','annual_asset_value_tenements'));
    }

    public function exportPDF()
    {
        $team_id = Auth::user()->team_id;
        $team = Team::with('activity')->where('id', $team_id)->first();

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

        /*سطج ریسک فناوری*/
        $technology_risk_level = 100 - ($TRL * 10);
        /* سطح ریسک تولید */
        $manufacturing_risk_level = 100 - ($mRL * 10);
        /* سطح ریسک بازار */
        $market_risk_level = 100 - ($MRL * 10);
        /* سطح ریسک کسب و کار */
        $business_risk_level = 100 - ($BRL * 10);
        /* درصد ریسک */
        $percentage_of_risk = ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level) / 4;

        $products = Product::with(['type','rawMaterials'])->where('team_id', $team_id)->get();
        //ارزش دارایی های نامشهود
        $value = 0;
        $model = ValuationOfIntangibleAsset::with('valuationModel')->where('team_id', $team_id)->first();
        if ($model->valuationModel->name == 'هزینه محور'){
            $value = ValuationCost::where('team_id', $team_id)->get()->sum('total_price');
        }elseif($model->valuationModel->name == 'دستی'){
            $value = $model->value;
        }elseif ($model->valuationModel->name == 'درآمد محور'){
            $value = $this->NPV();
        }
        //ارزش گذاری مشهود
        $tenements = ValuationTenement::where('team_id', $team_id)->sum('total_price');
        $val_facilities = ValuationFacility::where('team_id', $team_id)->sum('total_price');
        $machineries = ValuationMachinery::where('team_id', $team_id)->sum('total_price');
        $val_laboratory_equipments = ValuationLaboratoryEquipment::where('team_id', $team_id)->sum('total_price');
        $offices = ValuationOfficeSupply::where('team_id', $team_id)->sum('total_price');
        $val_transportations = ValuationTransportation::where('team_id', $team_id)->sum('total_price');
        $pre_operation_costs = ValuationPreOperationCost::where('team_id', $team_id)->sum('total_price');
        //ارزش دانش فنی
        $valuation_cost = ValuationCost::where('team_id', $team_id)->sum('total_price');
        //اطلاعات مالی یک
        $plan_year = PlanYear::where('team_id', $team_id)->first();
        $fiscal = Fiscal::where('team_id', $team_id)->first();
        $count_day = CountDay::where('team_id', $team_id)->first();
        $depreciation_rate = DepreciationRate::where('team_id', $team_id)->first();
        $lands = Land::where('team_id', $team_id)->get();
        $lands_price = $lands->sum('price');
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get();
        $laboratory_equipments_price = $laboratory_equipments->sum('total_price');
        $equipments_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get();
        $equipments_price = $equipments_and_machineries->sum('total_price');
        $facilities = Facility::where('team_id', $team_id)->get();
        $facilities_price = $facilities->sum('total_price');
        $office_equipments = OfficeEquipmentAndSupply::where('team_id', $team_id)->get();
        $office_equipments_price = $office_equipments->sum('total_price');
        $transportations = Transportation::where('team_id', $team_id)->get();
        $transportations_price = $transportations->sum('total_price');
        $preoperating = PreOperatingCost::where('team_id', $team_id)->get();
        $preoperating_price = $preoperating->sum('total_price');
        //اطلاعات مالی دو
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
        $annual_man_powers_numbers = [];
        $annual_business_price = [];
        $annual_outsourcing_price = [];
        $annual_consumer_item_price = [];
        $annual_rent_price = [];
        $annual_energy_consumption_price = [];
        $annual_repair_price = [];
        $annual_rd_price = [];
        $annual_warranty_price = [];
        $annual_fin2_transportation_price = [];
        $annual_insurances_price = [];
        $annual_otherInformation_price = [];
        $annual_after_sale_service_price = [];
        //هزینه های استهلاک سالیانه
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
            $capacities = Capacity::where('team_id', $team_id)->where('year',$i)->first(['nominal_capacity','total_production']);
            array_push($annual_capacities,$capacities);


            $raw_material_price = $raw_material->where('year', $i)->sum('total_price');
            array_push($annual_raw_material_price,$raw_material_price);

            $man_powers_price = $man_powers->where('year', $i)->sum('total_rights');
            $man_powers_numbers = $man_powers->where('year', $i)->sum('number');
            array_push($annual_man_powers_price,$man_powers_price);
            array_push($annual_man_powers_numbers,$man_powers_numbers);

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

            $insurances_price = $insurances->where('year', $i)->sum('total_cost');
            array_push($annual_insurances_price,$insurances_price);

            $otherInformation_price = $otherInformation->where('year', $i)->sum('sale_price');
            array_push($annual_otherInformation_price,$otherInformation_price);

            $after_sale_service_price = $after_sale_service->where('year', $i)->sum('total_cost');
            array_push($annual_after_sale_service_price,$after_sale_service_price);

            if($i <= $fiscal->reimbursement)
            { $financial_expenses = ($fiscal->loan) * ( ($fiscal->profit) / 100 ); }
            else
            { $financial_expenses = 0; }
            array_push($annual_financial_expenses,$financial_expenses);
            /* هزینه استهلاک */
            if ($i == 1){
                $dep_tenements = $lands_price * ($depreciation_rate->question_1 / 100);
                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_asset_value_tenements, $lands_price);

                $dep_equipment_and_machineries = $equipments_price * ($depreciation_rate->question_2 / 100);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_asset_value_machineries, $equipments_price);

                $dep_office_equipment_and_supplise = $office_equipments_price * ($depreciation_rate->question_3 / 100);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_asset_value_office_equipment, $office_equipments_price);

                $dep_facilities = $facilities_price * ($depreciation_rate->question_4 / 100);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_asset_value_facilities, $facilities_price);

                $dep_transportations = $transportations_price * ($depreciation_rate->question_5 / 100);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_asset_value_transportations, $transportations_price);

                $dep_laboratory_equipments = $laboratory_equipments_price * ($depreciation_rate->question_6 / 100);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);
                array_push($annual_asset_value_laboratory_equipments, $laboratory_equipments_price);

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
        //خالص سرمایه گذاری
        $net_investment = ($lands_price + $laboratory_equipments_price + $equipments_price + $facilities_price + $office_equipments_price + $transportations_price + $preoperating_price) - ($valuation_cost + $tenements + $val_facilities + $machineries + $val_laboratory_equipments + $offices + $val_transportations + $pre_operation_costs + $fiscal->loan);
        $new_investors = ParticipationNewInvestor::where('team_id', $team_id)->get();
        $total_investment_percentage = 0;
        $total_investment = 0;
        foreach ($new_investors as $new_investor)
        {
            $total_investment += $new_investor->investment;
            $investment_percentage =  ( ($new_investor->investment/$net_investment) ) * 100;
            $total_investment_percentage += $investment_percentage;
        }

        $pdf = PDF::loadView('user.reporting.financial-calculation.pdf', compact('team_id','plan_year','fiscal','valuation_cost','team','lands','lands_price','laboratory_equipments','laboratory_equipments_price','equipments_and_machineries','equipments_price','office_equipments','office_equipments_price','facilities','facilities_price','preoperating','preoperating_price','transportations','transportations_price','total_investment','total_investment_percentage','annual_capacities','annual_raw_material_price','annual_man_powers_price','annual_business_price','annual_outsourcing_price','annual_consumer_item_price','annual_rent_price','annual_energy_consumption_price','annual_repair_price','annual_rd_price','annual_warranty_price','annual_fin2_transportation_price','annual_insurances_price','annual_otherInformation_price','annual_after_sale_service_price','TRL','MRL','mRL','BRL','technology_risk_level','manufacturing_risk_level','market_risk_level','business_risk_level','percentage_of_risk','annual_asset_value_machineries','annual_asset_value_office_equipment','annual_asset_value_facilities','annual_asset_value_transportations','annual_asset_value_laboratory_equipments','annual_dep_tenements','annual_dep_equipment_and_machineries','annual_dep_office_equipment_and_supplise','annual_dep_facilities','annual_dep_transportations','annual_dep_laboratory_equipments','count_day','annual_depreciation','annual_financial_expenses','value','total_investment_percentage','otherInformation','annual_man_powers_numbers','energy_consumption','man_powers','rent','products','consumer_item','business','fin2_transportation','insurances','repair','warranty','rd','outsourcing','depreciation_rate','annual_asset_value_tenements'), [],
            [
                'title' => 'مدل بوم کسب و کار',
                'format' => 'A4',
                'display_mode' => 'fullpage',
//                'orientation' => 'L',
            ]);
        $fileName = Carbon::now()->timestamp . '-financial' . '.pdf';

        return $pdf->download($fileName);

//        return view('user.reporting.financial-calculation.pdf',compact('team_id','plan_year','fiscal','valuation_cost','team','lands','lands_price','laboratory_equipments','laboratory_equipments_price','equipments_and_machineries','equipments_price','office_equipments','office_equipments_price','facilities','facilities_price','preoperating','preoperating_price','transportations','transportations_price','total_investment','total_investment_percentage','annual_capacities','annual_raw_material_price','annual_man_powers_price','annual_business_price','annual_outsourcing_price','annual_consumer_item_price','annual_rent_price','annual_energy_consumption_price','annual_repair_price','annual_rd_price','annual_warranty_price','annual_fin2_transportation_price','annual_insurances_price','annual_otherInformation_price','annual_after_sale_service_price','TRL','MRL','mRL','BRL','technology_risk_level','manufacturing_risk_level','market_risk_level','business_risk_level','percentage_of_risk','annual_asset_value_machineries','annual_asset_value_office_equipment','annual_asset_value_facilities','annual_asset_value_transportations','annual_asset_value_laboratory_equipments','annual_dep_tenements','annual_dep_equipment_and_machineries','annual_dep_office_equipment_and_supplise','annual_dep_facilities','annual_dep_transportations','annual_dep_laboratory_equipments','count_day','annual_depreciation','annual_financial_expenses','value','total_investment_percentage','otherInformation','annual_man_powers_numbers','energy_consumption','man_powers','rent','products','consumer_item','business','fin2_transportation','insurances','repair','warranty','rd','outsourcing','depreciation_rate','annual_asset_value_tenements'));
    }
}
