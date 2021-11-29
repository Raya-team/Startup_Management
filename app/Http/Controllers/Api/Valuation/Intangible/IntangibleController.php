<?php

namespace App\Http\Controllers\Api\Valuation\Intangible;

use App\Http\Controllers\Controller;
use App\Models\AfterSaleService;
use App\Models\Business;
use App\Models\Capacity;
use App\Models\ConsumerItem;
use App\Models\DevelopmentCost;
use App\Models\EnergyConsumption;
use App\Models\EquipmentAndMachinery;
use App\Models\Facility;
use App\Models\Fiscal;
use App\Models\Insurance;
use App\Models\LaboratoryEquipment;
use App\Models\Land;
use App\Models\ManPower;
use App\Models\OfficeEquipmentAndSupply;
use App\Models\OtherInformation;
use App\Models\Outsourcing;
use App\Models\PlanYear;
use App\Models\PreOperatingCost;
use App\Models\RawMaterial;
use App\Models\RD;
use App\Models\Rent;
use App\Models\Repair;
use App\Models\TechnologyQuestion;
use App\Models\Transportation;
use App\Models\TransportationCost;
use App\Models\ValuationAdditionalQuestion;
use App\Models\ValuationCost;
use App\Models\ValuationModel;
use App\Models\ValuationOfIntangibleAsset;
use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IntangibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = 0;
        $team_id = Auth::user()->team_id;
        $questions = ValuationAdditionalQuestion::where('team_id', $team_id)->first();

        $model = ValuationOfIntangibleAsset::with('valuationModel')->where('team_id', $team_id)->first();

        if ($model->valuationModel->name == 'هزینه محور'){
            $value = ValuationCost::where('team_id', $team_id)->get()->sum('total_price');
        }elseif ($model->valuationModel->name == 'درآمد محور'){
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

            $other_information_first = OtherInformation::where('team_id', $team_id)->where('year', 1)->first();
            /* نرخ مالیات */
            $tax_rate = 0;
            $tax_rate = $other_information_first->tax_rate;
            $fiscal = Fiscal::where('team_id', $team_id)->first();
            /* نرخ تورم */
            $inflation = 0;
            $inflation = $fiscal->inflation;
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

            /* محسابه NPV هر سال به تفکیک */
            $NPV = [];
            $year = PlanYear::where('team_id', $team_id)->first()->number_of_plan_year;

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
                $the_cost_of_the_whole_product = $adjustment_factor * $total_annual_cost;
                /* بهای تمام شده */
                $cost_of = round($the_cost_of_the_whole_product / $number_of_product, 2);

                /* سود ناخالص */
                $gross_profit = $the_outcome_of_selling - $cost_of;

                /* مالیات */
                if ($gross_profit < 0){
                    $taxation = 0;
                } else {
                    $taxation = $gross_profit * $other_information->tax_rate;
                }

                /* سود پس از کسر مالیات */
                $profit_after_tax = $gross_profit - ($gross_profit * $other_information->tax_rate);

                /* بازپرداخت اصل تسهیلات */
               /* for ($j = $fiscal->reimbursement; $j >= 1 ; $j--){

                }
                $repayment_of_the_original_facility = $loan;*/

               /*  */
                return $profit_after_tax;
            }
        }

        return response()->json([
            'team_id' => $team_id,
            'questions' => $questions,
            'value' => $value,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $models = ValuationModel::all();
        return response()->json($models);
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
        $questions = ValuationAdditionalQuestion::where('team_id', $team_id)->first();
        return response()->json([
            'questions' => $questions
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
