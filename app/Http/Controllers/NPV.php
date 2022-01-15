<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 1/15/2022
 * Time: 12:20 PM
 */

namespace App\Http\Controllers;


use App\Models\AffordableQuestion;
use App\Models\AfterSaleService;
use App\Models\Business;
use App\Models\Capacity;
use App\Models\CommercializationQuestion;
use App\Models\CompetitivePositionQuestion;
use App\Models\ConsumerItem;
use App\Models\CustomerCommitmentQuestion;
use App\Models\CustomerRecognitionQuestion;
use App\Models\DepreciationRate;
use App\Models\DevelopmentCost;
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
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\PublicManagementQuestion;
use App\Models\RawMaterial;
use App\Models\RD;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\RuleQuestion;
use App\Models\SaleAndTechnicalSupportQuestion;
use App\Models\SaleForecastQuestion;
use App\Models\SupplyChainQuestion;
use App\Models\TechnologyQuestion;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\UncertaintyPredictionQuestion;
use App\Models\Warranty;
use Illuminate\Support\Facades\Auth;

trait NPV
{
    public function NPV()
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

        $BRL = ($cal_Commercialization + $cal_PublicManagement + $cal_FunctionalManagement + $cal_SaleAndTechnicalSupport + $cal_LiquidityAndAccessToCapital + $cal_CompetitivePosition + $cal_CustomerRecognition + $cal_CustomerCommitment + $cal_Affordable + $cal_IntellectualPropertyManagement + $cal_SaleForecast + $cal_UncertaintyPrediction + $cal_SupplyChain + $cal_Rule) / 14;

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



        $other_information_first = OtherInformation::where('team_id', $team_id)->where('year', 1)->first();
        /* نرخ مالیات */
        $tax_rate = 0;
        $tax_rate = $other_information_first->tax_rate;
        $fiscal = Fiscal::where('team_id', $team_id)->first();

        /* نرخ تورم */
        $inflation = 0;
        $inflation = $fiscal->inflation;
        $depreciation_rate = DepreciationRate::where('team_id', $team_id)->first();

        /* سال صفر (اطلاعات مالی1) */
        /* مستغلات */
        $tenements = Land::where('team_id', $team_id)->get()->sum('price');
        /* تجهیزات فنی */
        $equipment_and_machineries = EquipmentAndMachinery::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات آزمایشگاهی */
        $laboratory_equipments = LaboratoryEquipment::where('team_id', $team_id)->get()->sum('total_price');
        /* تاسیسات */
        $facilities = Facility::where('team_id', $team_id)->get()->sum('total_price');
        /* وسایل حمل و نقل */
        $transportations = Transportation::where('team_id', $team_id)->get()->sum('total_price');
        /* تجهیزات دفتری */
        $office_equipment_and_supplise = OfficeEquipmentAndSupply::where('team_id', $team_id)->get()->sum('total_price');
        /* هزینه قبل بهره‌برداری */
        $pre_operating_cost = PreOperatingCost::where('team_id', $team_id)->get()->sum('total_price');
        /* میزان وام دریافتی */
        $loan = $fiscal->loan;
        /* خالص سرمایه گذاری */
        $net_investment = ($tenements + $equipment_and_machineries + $laboratory_equipments + $facilities + $transportations + $office_equipment_and_supplise + $pre_operating_cost) - $loan;


        /* نرخ تنزیل */
        $discount_rate = round($inflation + $percentage_of_risk, 2);

        $zero_year = [];
        array_push($zero_year, [
            'محل اجرای طرح', $tenements,
            'تجهیزات فنی', $equipment_and_machineries,
            'تجهیزات آزمایشگاهی', $laboratory_equipments,
            'تاسیسات', $facilities,
            'وسایل حمل و نقل', $transportations,
            'تجهیزات دفتری', $office_equipment_and_supplise,
            'هزینه قبل بهره‌برداری', $pre_operating_cost,
            'میزان وام دریافتی', $loan,
            'خالص سرمایه گذاری', $net_investment,
        ]);

        /* محسابه NPV هر سال به تفکیک */
        $annual_dep_tenements = [];
        $annual_dep_equipment_and_machineries = [];
        $annual_dep_office_equipment_and_supplise = [];
        $annual_dep_facilities = [];
        $annual_dep_transportations = [];
        $annual_dep_laboratory_equipments = [];
        $year = PlanYear::where('team_id', $team_id)->first()->number_of_plan_year;


        $Annual_DATA = [];
        for ($i = 1; $i <= $year; $i++){
            /* تعداد محصول */
            $capacity = Capacity::where('team_id', $team_id)->where('year', $i)->first();
            $number_of_product = $capacity->total_production;
            /* قیمت */
            $other_information = OtherInformation::where('team_id', $team_id)->where('year', $i)->first();
            $price = $other_information->sale_price;
            /* مجموع قیمت کل درآمد خدمات پس از فروش */
            $total_after_sales_services = AfterSaleService::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            /* درآمد حاصل از فروش */
            $the_outcome_of_selling = ($number_of_product * $price) + $total_after_sales_services;
            /* فروش محصول */
            $product_sales = $number_of_product * $price;
            /* فروش کل */
            $total_sales = $the_outcome_of_selling;
            /* ضریب تعدیل */
            $adjustment_factor = $product_sales / $total_sales;
            /* هزینه مالی */
            $financial_expenses = $fiscal->profit;
            /* کل هزینه سالانه */
            $total_development_cost = DevelopmentCost::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            $total_raw_material = RawMaterial::where('team_id', $team_id)->where('year', $i)->get()->sum('total_price');
            $total_man_power = ManPower::where('team_id', $team_id)->where('year', $i)->get()->sum('total_rights');
            $total_rent = Rent::where('team_id', $team_id)->where('year', $i)->get()->sum('total_rent');
            $total_energy_consumption = EnergyConsumption::where('team_id', $team_id)->where('year', $i)->get()->sum('annual_cost');
            $total_rd = RD::where('team_id', $team_id)->where('year', $i)->get()->sum('annual_cost');
            $total_business = Business::where('team_id', $team_id)->where('year', $i)->get()->sum('annual_cost');
            $total_insurance = Insurance::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            $total_repair = Repair::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            $total_transportation_cost = TransportationCost::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            $total_warranty = Warranty::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            $total_consumer_item = ConsumerItem::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            $total_after_sale_service = $total_after_sales_services;
            $total_outsourcing = Outsourcing::where('team_id', $team_id)->where('year', $i)->get()->sum('total_cost');
            $total_annual_cost = ($total_development_cost + $total_raw_material + $total_man_power + $total_rent + $total_energy_consumption + $total_rd + $total_business + $total_insurance + $total_repair + $total_transportation_cost + $total_warranty + $total_consumer_item + $total_after_sale_service + $total_outsourcing) + $financial_expenses;
            /* بهای تمام شده کل محصول */
            $the_cost_of_the_whole_product = round($adjustment_factor * $total_annual_cost, 2);
            /* بهای تمام شده */
            $cost_of = round($the_cost_of_the_whole_product / $number_of_product, 2);

            /* سود ناخالص */
            $gross_profit = $the_outcome_of_selling - $cost_of;

            /* مالیات */
            if ($gross_profit < 0){
                $taxation = 0;
            } else {
                $taxation = round($gross_profit * $other_information->tax_rate, 2);
            }

            /* سود پس از کسر مالیات */
            $profit_after_tax = round($gross_profit - ($gross_profit * $other_information->tax_rate), 2);

            /* بازپرداخت اصل تسهیلات */
            if ($year == $i){
                $repayment_of_the_original_facility = $loan;
            }else{
                $repayment_of_the_original_facility = 0;
            }

            /* هزینه استهلاک */
            if ($i == 1){
                $dep_tenements = $tenements * ($depreciation_rate->question_1 / 100);
                $dep_equipment_and_machineries = $equipment_and_machineries * ($depreciation_rate->question_2 / 100);
                $dep_office_equipment_and_supplise = $office_equipment_and_supplise * ($depreciation_rate->question_3 / 100);
                $dep_facilities = $facilities * ($depreciation_rate->question_4 / 100);
                $dep_transportations = $transportations * ($depreciation_rate->question_5 / 100);
                $dep_laboratory_equipments = $laboratory_equipments * ($depreciation_rate->question_6 / 100);

                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);

                $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
            }else{
                $dep_tenements = ($tenements - $annual_dep_tenements[$i-2]) * ($depreciation_rate->question_1 / 100);
                $dep_equipment_and_machineries = ($equipment_and_machineries - $annual_dep_equipment_and_machineries[$i-2]) * ($depreciation_rate->question_2 / 100);
                $dep_office_equipment_and_supplise = ($office_equipment_and_supplise - $annual_dep_office_equipment_and_supplise[$i-2]) * ($depreciation_rate->question_3 / 100);
                $dep_facilities = ($facilities - $annual_dep_facilities[$i-2]) * ($depreciation_rate->question_4 / 100);
                $dep_transportations = ($transportations - $annual_dep_transportations[$i-2]) * ($depreciation_rate->question_5 / 100);
                $dep_laboratory_equipments = ($laboratory_equipments - $annual_dep_laboratory_equipments[$i-2]) * ($depreciation_rate->question_6 / 100);

                array_push($annual_dep_tenements, $dep_tenements);
                array_push($annual_dep_equipment_and_machineries, $dep_equipment_and_machineries);
                array_push($annual_dep_office_equipment_and_supplise, $dep_office_equipment_and_supplise);
                array_push($annual_dep_facilities, $dep_facilities);
                array_push($annual_dep_transportations, $dep_transportations);
                array_push($annual_dep_laboratory_equipments, $dep_laboratory_equipments);

                $depreciation = round($dep_tenements + $dep_equipment_and_machineries + $dep_office_equipment_and_supplise + $dep_facilities + $dep_transportations + $dep_laboratory_equipments, 2);
            }

            /* درآمد غیرعملیاتی */
            $Non_operating_income = 0;

            /* خالص جریان نقدینگی */
            $net_cash_flow = round($profit_after_tax - $repayment_of_the_original_facility + $depreciation + $Non_operating_income, 2);

            /* NPV هر سال */
            $Annual_NPV = round($net_cash_flow / pow((1 + $discount_rate), $i), 2);

            array_push($Annual_DATA, [
                'درآمد حاصل از فروش' , $the_outcome_of_selling,
                'بهای تمام شده' , $cost_of,
                'سود ناخالص' , $gross_profit,
                'مالیات' , $taxation,
                'سود پس از کسر مالیات' , $profit_after_tax,
                'بازپرداخت اصل تسهیلات' , $repayment_of_the_original_facility,
                'هزینه استهلاک' , $depreciation,
                'درآمد غیرعملیاتی' , $Non_operating_income,
                'خالص جریان نقدینگی' , $net_cash_flow,
                'NPV' , $Annual_NPV,
            ]);
        }
//            return $Annual_DATA;
        $NPV = 0;
        for ($j = 0 ; $j < count($Annual_DATA); $j++){
            $NPV += $Annual_DATA [$j][19];
        }
        return round($NPV, 2);
    }
}