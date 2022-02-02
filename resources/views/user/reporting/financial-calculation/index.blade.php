@extends('user.master')
@section('title', 'گزارش گیری - مالی')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">گزارش گیری</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">مالی</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h1 class="card-title" style="margin: auto; font-size: 20px;"><b>گزارش مدیریتی طرح</b></h1>
                        </div>
                        <div class="card-body">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">برنامه تولید:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ظرفیت عملی طرح(تعداد)</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
                                                    <th>سال{{$i}}</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">ظرفیت اسمی طرح(تعداد)</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->nominal_capacity))
                                                            <span class="text-dark-75">{{$annual_capacities[$i]->nominal_capacity}}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">ظرفیت عملی طرح(تعداد)</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->total_production))
                                                            <span class="text-dark-75">{{$annual_capacities[$i]->total_production}}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد ظرفیت عملی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->nominal_capacity))
                                                            <span class="text-dark-75">{{ ($annual_capacities[$i]->nominal_capacity) / ($annual_capacities[$i]->total_production) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد افزایش تولید</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i]->total_production) && $i != 0)
                                                            <span class="text-dark-75">{{ (($annual_capacities[$i]->total_production) / ($annual_capacities[$i-1]->total_production)) - 1 }}</span>
                                                        @elseif( isset($annual_capacities[$i]->total_production) && $i == 0)
                                                            <span class="text-dark-75">0</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">مفروضات طرح:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">میزان تسهیلات دریافتی</td>
                                                <td class="pl-7">{{$fiscal->loan}}</td>
                                                <td class="bg-gray-100 pl-7">مدت مشارکت</td>
                                                <td class="pl-7">{{$plan_year->number_of_plan_year}}</td>
                                                <td class="bg-gray-100 pl-7">تورم</td>
                                                <td class="pl-7">{{$fiscal->inflation}}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">نرخ تسهیلات دریافتی</td>
                                                <td class="pl-7">{{$fiscal->profit}}</td>
                                                <td class="bg-gray-100 pl-7">نرخ دلار</td>
                                                <td class="pl-7">{{$fiscal->dollar}}</td>
                                                <td class="bg-gray-100 pl-7">ریسک طرح</td>
                                                <td class="pl-7">{{$percentage_of_risk}}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">مدت بازپرداخت تسهیلات</td>
                                                <td class="pl-7">{{$fiscal->reimbursement}}</td>
                                                <td class="bg-gray-100 pl-7">انحراف</td>
                                                <td class="pl-7">0</td>
                                                <td class="bg-gray-100 pl-7">هزینه جهت رسیدن به فناوری</td>
                                                <td class="pl-7">{{$valuation_cost}}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سطح آمادگی فناوری</td>
                                                <td class="pl-7">TRL {{$TRL}}</td>
                                                <td class="bg-gray-100 pl-7">حوزه طرح</td>
                                                <td class="pl-7">{{$team->activity->nickname}}</td>
                                                <td class="bg-gray-100 pl-7">ارزش دانش فنی</td>
                                                <td class="pl-7">{{$value}}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">نرخ تنزیل</td>
                                                <td class="pl-7">{{ $percentage_of_risk + $fiscal->inflation }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">سرمایه گذاری طرح:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه سرمایه ای</td>
                                                <td class="pl-7">{{$lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price}}</td>
                                                <td class="bg-gray-100 pl-7">هزینه قبل از بهره برداری</td>
                                                <td class="pl-7">{{$preoperating_price}}</td>
                                                <td class="bg-gray-100 pl-7">سرمایه در گردش</td>
                                                <td class="pl-7">{{ round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 )   }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سرمایه مورد نیاز طرح</td>
                                                <td class="pl-7">{{ ( $lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price ) + ( $preoperating_price )  + ( round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) )  }}</td>
                                                <td class="bg-gray-100 pl-7">وام مورد نیاز</td>
                                                <td class="pl-7">{{$fiscal->loan}}</td>
                                                <td class="bg-gray-100 pl-7">خالص سرمایه‌گذاری پس از کسر وام</td>
                                                <td class="pl-7">{{ ( ( $lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price ) + ( $preoperating_price )  + ( round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) - ( $fiscal->loan ) ) }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد سهام قابل واگذاری</td>
                                                <td class="pl-7">{{ round($total_investment_percentage,2)}}</td>
                                                <td class="bg-gray-100 pl-7">میزان آورده مورد انتظار از سرمایه‌گذار</td>
                                                <td class="pl-7">{{$total_investment}}</td>
                                                <td class="bg-gray-100 pl-7">درصد سهام فناور</td>
                                                <td class="pl-7">{{ ( round($total_investment_percentage,2) - 1 ) }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">آورده فناور</td>
                                                <td class="pl-7">{{ ( ( ( $lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price ) + ( $preoperating_price )  + ( round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) - ( $fiscal->loan ) ) ) - ( $total_investment ) }}</td>
                                                <td class="bg-gray-100 pl-7">میزان آورده نامشهود فناور</td>
                                                <td class="pl-7">{{ $value }}</td>
                                                <td class="bg-gray-100 pl-7">میزان آورده مشهود فناور</td>
                                                <td class="pl-7">{{ ( ( ( ( $lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price ) + ( $preoperating_price )  + ( round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) - ( $fiscal->loan ) ) ) - ( $total_investment ) ) - ( $value ) }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">نتایج طرح:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">نرخ بازده داخلی</td>
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">مدت زمان سرمایه در گردش</td>
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">ارزش خالص کنونی </td>
                                                <td class="pl-7"></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">نرخ بازده تعدیل شده</td>
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">شاخص سوددهی</td>
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">نرخ بازده سرمایه‌گذاری</td>
                                                <td class="pl-7"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">جدول هزینه‌های جاری</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">عنوان</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
                                                    <th>سال{{$i}}</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">مواد اولیه و بسته بندی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_raw_material_price[$i]) && isset($annual_capacities[$i]->total_production))
                                                            <span class="text-dark-75">{{($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)}}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">حقوق و دستمزد</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_man_powers_price[$i]))
                                                            <span class="text-dark-75">{{$annual_man_powers_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه اجاره</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_rent_price[$i]))
                                                            <span class="text-dark-75">{{$annual_rent_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه انرژی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_energy_consumption_price[$i]))
                                                            <span class="text-dark-75">{{$annual_energy_consumption_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه تعمیر و نگهداری</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_repair_price[$i]))
                                                            <span class="text-dark-75">{{$annual_repair_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه حمل و نقل</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_fin2_transportation_price[$i]))
                                                            <span class="text-dark-75">{{$annual_fin2_transportation_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه استهلاک</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_depreciation[$i]))
                                                            <span class="text-dark-75">{{ $annual_depreciation[$i] }}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه برون سپاری</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_outsourcing_price[$i]))
                                                            <span class="text-dark-75">{{$annual_outsourcing_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه بازرگانی و فروش</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_business_price[$i]))
                                                            <span class="text-dark-75">{{$annual_business_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه تحقیق و توسعه</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_rd_price[$i]))
                                                            <span class="text-dark-75">{{$annual_rd_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه بیمه</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_insurances_price[$i]))
                                                            <span class="text-dark-75">{{$annual_insurances_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه گارانتی و خدمات پس از فروش</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_warranty_price[$i]))
                                                            <span class="text-dark-75">{{$annual_warranty_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه مالی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_financial_expenses[$i]))
                                                            <span class="text-dark-75">{{ $annual_financial_expenses[$i] }}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">جمع هزینه های جاری طرح</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i]->total_production) )
                                                            <span class="text-dark-75">{{ ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">جریان های نقدینگی</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">عنوان</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
                                                    <th>سال{{$i}}</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درآمد حاصل از فروش</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_otherInformation_price[$i]) && isset($annual_capacities[$i]->total_production) && isset($annual_after_sale_service_price[$i]))
                                                            <span class="text-dark-75">{{( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i])}}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">بهای تمام شده کالا فروش رفته</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->total_production))
                                                            <span class="text-dark-75">{{ ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سود و زیان ناخالص</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_otherInformation_price[$i]) && isset($annual_capacities[$i]->total_production) && isset($annual_after_sale_service_price[$i]) && isset($annual_capacities[$i]->total_production))
                                                            <span class="text-dark-75">{{ ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">مالیات</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i]->total_production) && isset($otherInformation[$i]->tax_rate) )
                                                            <span class="text-dark-75">{{ ( ($otherInformation[$i]->tax_rate)/100 ) * ( ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی و نرخ مالیات را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سود پس از کسر مالیات</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->total_production) && isset($otherInformation[$i]->tax_rate))
                                                            <span class="text-dark-75">{{ ( ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) ) - ( ( ($otherInformation[$i]->tax_rate)/100 ) * ( ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) ) ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی و نرخ مالیات را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">بازپرداخت اصل تسهیلات</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if( $i == ($plan_year->number_of_plan_year)-1 )
                                                            <span class="text-dark-75">{{$fiscal->loan}}</span>
                                                        @else
                                                            <span class="text-dark-75">0</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه استهلاک</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_depreciation[$i] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درآمد غیر عملیاتی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">0</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">جریان نقدینگی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->total_production) && isset($otherInformation[$i]->tax_rate) && $i==0 )
                                                            <span class="text-dark-75">{{ ( ( ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) ) - ( ( ($otherInformation[$i]->tax_rate)/100 ) * ( ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) ) ) ) - ( $fiscal->loan ) + ( $annual_depreciation[$i] ) - (  ( round(  ( ( ( $annual_raw_material_price[$i] + $annual_man_powers_price[$i] + $annual_business_price[$i] + $annual_outsourcing_price[$i] + $annual_consumer_item_price[$i] + $annual_rent_price[$i] + $annual_energy_consumption_price[$i] + $annual_repair_price[$i] + $annual_rd_price[$i] + $annual_warranty_price[$i] + $annual_fin2_transportation_price[$i] + $annual_depreciation[$i] + $annual_financial_expenses[$i] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) ) - ( $annual_rd_price[$i] ) }}</span>
                                                        @elseif(isset($annual_capacities[$i]->total_production) && isset($otherInformation[$i]->tax_rate) && $i!=0 )
                                                            <span class="text-dark-75">{{ ( ( ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) ) - ( ( ($otherInformation[$i]->tax_rate)/100 ) * ( ( ( ($annual_otherInformation_price[$i])*($annual_capacities[$i]->total_production) ) + ($annual_after_sale_service_price[$i]) - ( ( ($annual_raw_material_price[$i])*($annual_capacities[$i]->total_production)) + ($annual_man_powers_price[$i]) + ($annual_rent_price[$i]) + ($annual_energy_consumption_price[$i]) + ($annual_repair_price[$i]) + ($annual_fin2_transportation_price[$i]) + ($annual_depreciation[$i]) + ($annual_outsourcing_price[$i]) + ($annual_business_price[$i]) + ($annual_rd_price[$i]) + ($annual_insurances_price[$i]) + ($annual_warranty_price[$i]) + ($annual_financial_expenses[$i]) ) ) ) ) ) - ( $fiscal->loan ) + ( $annual_depreciation[$i] ) - (  ( round(  ( ( ( $annual_raw_material_price[$i] + $annual_man_powers_price[$i] + $annual_business_price[$i] + $annual_outsourcing_price[$i] + $annual_consumer_item_price[$i] + $annual_rent_price[$i] + $annual_energy_consumption_price[$i] + $annual_repair_price[$i] + $annual_rd_price[$i] + $annual_warranty_price[$i] + $annual_fin2_transportation_price[$i] + $annual_depreciation[$i] + $annual_financial_expenses[$i] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) - ( round(  ( ( ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] + $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) ) - ( $annual_rd_price[$i] ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی و نرخ مالیات را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">اشتغال زایی</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                @for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
                                                    <th>اشتغال زایی در سال{{$i}}</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if( isset($annual_man_powers_numbers[$i]) && $i == 0 )
                                                            <span class="text-dark-75">{{ $annual_man_powers_numbers[$i]  }}</span>
                                                        @elseif( isset($annual_man_powers_numbers[$i]) && $i != 0 )
                                                            <span class="text-dark-75">{{ ( $annual_man_powers_numbers[$i] ) - ( $annual_man_powers_numbers[$i-1] ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">0000</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">مفروضات طرح</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th>انحراف</th>
                                                <th>قیمت دلار</th>
                                                <th>میزان وام</th>
                                                <th>سال بازپرداخت</th>
                                                <th>سود وام(درصد)</th>
                                                <th>ریسک طرح</th>
                                                <th>نرخ تورم</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">0</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$fiscal->dollar}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$fiscal->loan}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$fiscal->reimbursement}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$fiscal->profit}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$percentage_of_risk}}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$fiscal->inflation}}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">هزینه های سرمایه ای</h4><br>
                                <h5>محل اجرای طرح</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>نوع</th>
                                                <th>متراژ کل</th>
                                                <th>قیمت کل(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($lands as $key => $land)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key+1}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$land->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$land->area}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$land->price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $lands_price }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>ماشین آلات و تجهیزات فنی</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>نام</th>
                                                <th>تعداد</th>
                                                <th>هزینه واحد(تومان)</th>
                                                <th>هزینه کل(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($equipments_and_machineries as $key => $equipment)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key+1}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$equipment->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$equipment->count}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$equipment->unit_price}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$equipment->total_price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $equipments_price }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>ماشین آلات و تجهیزات آزمایشگاهی</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>نام</th>
                                                <th>تعداد</th>
                                                <th>هزینه واحد(تومان)</th>
                                                <th>هزینه واحد(دلار)</th>
                                                <th>هزینه کل(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($laboratory_equipments as $key => $laboratory_equipment)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key+1}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$laboratory_equipment->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$laboratory_equipment->number}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$laboratory_equipment->toman_unit_price}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$laboratory_equipment->dollar_unit_price}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$laboratory_equipment->total_price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $laboratory_equipments_price }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>تاسیسات عمومی</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>نام و نوع</th>
                                                <th>تعداد</th>
                                                <th>هزینه واحد(تومان)</th>
                                                <th>هزینه کل(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($facilities as $key => $facility)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key+1}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$facility->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$facility->count}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$facility->unit_price}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$facility->total_price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $facilities_price }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>تجهیزات و لوازم دفتری</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>نام</th>
                                                <th>تعداد</th>
                                                <th>هزینه واحد(تومان)</th>
                                                <th>هزینه کل(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($office_equipments as $key => $office_equipment)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key+1}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$office_equipment->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$office_equipment->count}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$office_equipment->unit_price}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$office_equipment->total_price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $office_equipments_price }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>وسایل حمل و نقل</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>شرح وسایل</th>
                                                <th>تعداد</th>
                                                <th>هزینه واحد(تومان)</th>
                                                <th>هزینه کل(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transportations as $key => $transportation)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key+1}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$transportation->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$transportation->count}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$transportation->unit_price}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$transportation->total_price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $transportations_price }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>جمع هزینه های سرمایه ای</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>شرح</th>
                                                <th>مبلغ(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">1</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">محل اجرای طرح</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$lands_price}}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">2</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">ماین آلات و تجهیزات</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$equipments_price}}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">3</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">ماین آلات و تجهیزات آزمایشگاهی</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$laboratory_equipments_price}}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">4</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">تاسیسات</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$facilities_price}}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">5</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">وسایل حمل و نقل</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$transportations_price}}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">6</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">وسایل دفتری</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{$office_equipments_price}}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">7</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">پیش بینی نشده(پنج درصد اقلام بالا)</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ( 0.05 ) * ( $office_equipments_price + $transportations_price + $facilities_price + $laboratory_equipments_price + $equipments_price + $lands_price ) }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price) + ( ( 0.05 ) * ( $office_equipments_price + $transportations_price + $facilities_price + $laboratory_equipments_price + $equipments_price + $lands_price ) )}}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">هزینه های قبل از بهره برداری</h4><br>
                                <h5>جمع هزینه های قبل از بهره برداری</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ردیف</th>
                                                <th>شرح</th>
                                                <th>مبلغ(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($preoperating as $key => $pre)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$pre->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$pre->total_price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: #c9c5c5">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $preoperating_price }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">محاسبات سرمایه گذاری اولیه</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سرمایه ثابت</td>
                                                <td class="pl-7">{{ ( ($lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price) + ( ( 0.05 ) * ( $office_equipments_price + $transportations_price + $facilities_price + $laboratory_equipments_price + $equipments_price + $lands_price ) ) ) + ( $preoperating_price ) }}</td>
                                                <td class="bg-gray-100 pl-7">سرمایه در گردش سال اول</td>
                                                <td class="pl-7">{{  round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 )  }}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سرمایه گذاری مورد نیاز طرح</td>
                                                <td class="pl-7">{{ ( round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) + ( ( ($lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price) + ( ( 0.05 ) * ( $office_equipments_price + $transportations_price + $facilities_price + $laboratory_equipments_price + $equipments_price + $lands_price ) ) ) + ( $preoperating_price ) ) }}</td>
                                                <td class="bg-gray-100 pl-7">میزان وام</td>
                                                <td class="pl-7">{{$fiscal->loan}}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">خالص سرمایه گذاری پس از کسر وام</td>
                                                <td class="pl-7">{{ ( ( round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) + ( ( ($lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price) + ( ( 0.05 ) * ( $office_equipments_price + $transportations_price + $facilities_price + $laboratory_equipments_price + $equipments_price + $lands_price ) ) ) + ( $preoperating_price ) ) ) - ( $fiscal->loan ) }}</td>
                                                <td class="bg-gray-100 pl-7">درصد سهام فناور</td>
                                                <td class="pl-7">( {{ ( (round($total_investment_percentage,2) - 1)/100 ) * ( ( ( round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 ) ) + ( ( ($lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price) + ( ( 0.05 ) * ( $office_equipments_price + $transportations_price + $facilities_price + $laboratory_equipments_price + $equipments_price + $lands_price ) ) ) + ( $preoperating_price ) ) ) - ( $fiscal->loan ) ) }} ) {{ ( round($total_investment_percentage,2) - 1 ) }} %</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">آورده نقدی فناور</td>
                                                <td class="pl-7"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">سرمایه در گردش مورد نیاز:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">مدت زمانی که طول می‌کشد ماده اولیه خریده شده و تبدیل به محصول شوند (روز)</th>
                                                <th>مدت زمانی که طول می‌کشد محصول به فروش رود (روز)</th>
                                                <th>مدت زمانی که طول می‌کشد مطالبات وصول شود (روز)</th>
                                                <th>جمع کل (روز)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    @if(!$count_day)
                                                    @else
                                                        <span class="text-dark-75">{{ ($count_day->question_1) + ($count_day->question_2) }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!$count_day)
                                                    @else
                                                        <span class="text-dark-75">{{ $count_day->question_3 }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!$count_day)
                                                    @else
                                                        <span class="text-dark-75">{{ $count_day->question_4 }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!$count_day)
                                                    @else
                                                        <span class="text-dark-75">{{ ($count_day->question_1) + ($count_day->question_2) + ($count_day->question_3) + ($count_day->question_4) }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <br><br>
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>مدت(ماه)</th>
                                                <th>سرمایه در گردش مورد نیاز</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!$plan_year)
                                            @else
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75">سال{{$i}}</span>
                                                        </td>
                                                        <td>
                                                            @if(!$count_day)
                                                            @else
                                                                <span class="text-dark-75">{{ round( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) }}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if(!$count_day)
                                                            @else
                                                                <span class="text-dark-75">{{ round(  ( ( ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] + $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 )   }}</span>
                                                            @endif
                                                        </td>
                                                @endfor
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <br><br>
                                    <p>
                                        @if(!$count_day)
                                        @else
                                            با توجه به سیکل خرید مواد اولیه، تولید، فروش و وصول مطالبات که {{($count_day->question_1) + ($count_day->question_2) + ($count_day->question_3) + ($count_day->question_4)}} روزه پیش‌ بینی می‌گردد
                                            به اندازه {{ round( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) }} ماه از هزینه‌های تولید را که
                                            مبلغ {{ round(  ( ( ( $annual_raw_material_price[0] + $annual_man_powers_price[0] + $annual_business_price[0] + $annual_outsourcing_price[0] + $annual_consumer_item_price[0] + $annual_rent_price[0] + $annual_energy_consumption_price[0] + $annual_repair_price[0] + $annual_rd_price[0] + $annual_warranty_price[0] + $annual_fin2_transportation_price[0] + $annual_depreciation[0] + $annual_financial_expenses[0] )/12 ) * ( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) ),2 )   }} تومان می‌شود به عنوان سرمایه در گردش در نظر گرفته می‌شود.
                                        @endif
                                    </p>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">ظرفیت طرح:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ظرفیت عملی طرح(تعداد)</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year;$i++)
                                                    <th>سال{{$i}}</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">ظرفیت اسمی طرح(تعداد)</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->nominal_capacity))
                                                            <span class="text-dark-75">{{$annual_capacities[$i]->nominal_capacity}}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">ظرفیت عملی طرح(تعداد)</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->total_production))
                                                            <span class="text-dark-75">{{$annual_capacities[$i]->total_production}}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد ظرفیت عملی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_capacities[$i]->nominal_capacity))
                                                            <span class="text-dark-75">{{ ($annual_capacities[$i]->nominal_capacity) / ($annual_capacities[$i]->total_production) }}</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد افزایش تولید</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i]->total_production) && $i != 0)
                                                            <span class="text-dark-75">{{ (($annual_capacities[$i]->total_production) / ($annual_capacities[$i-1]->total_production)) - 1 }}</span>
                                                        @elseif( isset($annual_capacities[$i]->total_production) && $i == 0)
                                                            <span class="text-dark-75">0</span>
                                                        @else
                                                            <span class="text-dark-75">ابتدا تعداد تولید واقعی در جدول ظرفیت را پر کنید.</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">هزینه های تولید و فروش</h4><br>
                                <h5>نیروی‌های موردنیاز</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                    <!--begin::Body-->
                                    <div class="card-body pt-0 pb-3">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                <thead>
                                                <tr class="bg-gray-100 text-center">
                                                    <th class="pl-7">نوع نیروی انسانی</th>
                                                    <th>شرح</th>
                                                    <th>تعداد</th>
                                                    <th>حقوق ماهیانه</th>
                                                    <th>جمع کل حقوق</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php
                                                    $powers = $man_powers->where('year', $i);
                                                @endphp
                                                @foreach($powers as $power)
                                                    <tr class="text-center">
                                                        <td>
                                                            @if( ($power->manpower_type) == 1 )
                                                                <span class="text-dark-75">تولیدی</span>
                                                            @else
                                                                <span class="text-dark-75">غیر تولیدی</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $power->manpowerName->name }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $power->number }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $power->salary }}</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ ( ($power->number) * ($power->salary) * 16 ) + ( ($power->number) * ($power->salary) * 16 * (23/100) ) }}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Body-->
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>اجاره فضای تولید/اداری</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($rent->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>اجاره ماهانه</th>
                                                        <th>اجاره کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $rents_var = $rent->where('year', $i);
                                                    @endphp
                                                    @foreach($rents_var as $rent_var)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $rent_var->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $rent_var->monthly_rent }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $rent_var->total_rent }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td style="background-color: rgb(201, 197, 197);">
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $rent->where('year', $i)->sum('total_rent') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>مواد اولیه و بسته بندی</h5><br>
                                @foreach($products as $product)
                                    @if(count($product->rawMaterials) >= 1)
                                        <h6 style="text-align: center">{{$product->name}}</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح مواد مصرفی</th>
                                                        <th>واحد</th>
                                                        <th>قیمت واحد</th>
                                                        <th>مقدار مصرف براي هرواحد محصول</th>
                                                        <th>هزینه مصرف براي هرواحد محصول</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $total_price = 0;
                                                    @endphp
                                                    @foreach($product->rawMaterials as $material)

                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{$material->rawMaterialName->name}}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $material->Unit->name }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $material->unit_price }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $material->consumption }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ ($material->consumption) * ($material->unit_price) }}</span>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $total_price += $material->total_price;
                                                        @endphp
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع هزينه مواد اوليه و بسته‌بندی برای هر واحد محصول </b></span>
                                                        </td>
                                                        <td style="background-color: #c9c5c5">
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td style="background-color: #c9c5c5">
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td style="background-color: #c9c5c5">
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ ($annual_capacities[0]->total_production) * ($total_price) }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @endif
                                @endforeach
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>اقلام مصرفی</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($consumer_item->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>هزینه کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $cons_item = $consumer_item->where('year', $i);
                                                    @endphp
                                                    @foreach($cons_item as $item)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $item->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $item->total_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $consumer_item->where('year', $i)->sum('total_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>بازرگانی</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($business->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>هزینه سالیانه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $business_var = $business->where('year', $i);
                                                    @endphp
                                                    @foreach($business_var as $bus_var)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $bus_var->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $bus_var->annual_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $business->where('year', $i)->sum('annual_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>حمل و نقل</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($fin2_transportation->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>هزینه کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $transports = $fin2_transportation->where('year', $i);
                                                    @endphp
                                                    @foreach($transports as $transport)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $transport->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $transport->total_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $fin2_transportation->where('year', $i)->sum('total_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>بیمه</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($insurances->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>هزینه کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $insurance = $insurances->where('year', $i);
                                                    @endphp
                                                    @foreach($insurance as $insu)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $insu->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $insu->total_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $insurances->where('year', $i)->sum('total_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>تعمیر و نگهداری</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($repair->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>درصد</th>
                                                        <th>هزینه کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $repairs = $repair->where('year', $i);
                                                    @endphp
                                                    @foreach($repairs as $rep)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $rep->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $rep->percent }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $rep->total_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td style="background-color: rgb(201, 197, 197);">
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $repair->where('year', $i)->sum('total_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>انرژی مصرفی:</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($energy_consumption->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>واحد</th>
                                                        <th>هزینه سالیانه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $energies = $energy_consumption->where('year', $i);
                                                    @endphp
                                                    @foreach($energies as $energy)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $energy->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $energy->Unit->name }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $energy->annual_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td style="background-color: rgb(201, 197, 197);">
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $energy_consumption->where('year', $i)->sum('annual_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>گارانتی:</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($warranty->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>درصد از فروش</th>
                                                        <th>هزینه سالیانه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $warranties_var = $warranty->where('year', $i);
                                                    @endphp
                                                    @foreach($warranties_var as $warranty_var)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $warranty_var->productName->name }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $warranty_var->percent }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $warranty_var->total_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td style="background-color: rgb(201, 197, 197);">
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $warranty->where('year', $i)->sum('total_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>تحقیق و توسعه</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($rd->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th>هزینه کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $rds = $rd->where('year', $i);
                                                    @endphp
                                                    @foreach($rds as $r)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $r->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $r->annual_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $rds->where('year', $i)->sum('annual_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>برون سپاری</h5><br>
                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                    @if(count($outsourcing->where('year', $i)) >= 1)
                                        <h6 style="text-align: center;">سال {{$i}} طرح</h6><br>
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                    <thead>
                                                    <tr class="bg-gray-100 text-center">
                                                        <th class="pl-7">شرح</th>
                                                        <th class="pl-7">تعداد</th>
                                                        <th class="pl-7">هزینه واحد</th>
                                                        <th>هزینه کل</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php
                                                        $outs = $outsourcing->where('year', $i);
                                                    @endphp
                                                    @foreach($outs as $out)
                                                        <tr class="text-center">
                                                            <td>
                                                                <span class="text-dark-75">{{ $out->description }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $out->number }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $out->unit_cost }}</span>
                                                            </td>
                                                            <td>
                                                                <span class="text-dark-75">{{ $out->total_cost }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"><b>جمع کل</b></span>
                                                        </td>
                                                        <td style="background-color: rgb(201, 197, 197);">
                                                            <span class="text-dark-75"><b></b></span>
                                                        </td>
                                                        <td style="background-color: rgb(201, 197, 197);">
                                                            <span class="text-dark-75"><b></b></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $outsourcing->where('year', $i)->sum('total_cost') }}</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Body-->
                                    @else
                                    @endif
                                @endfor
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">هزینه استهلاک:</h4><br>
                                <h5>فرضیات محاسبه استهلاک</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح دارایی</th>
                                                <th>ارزش اولیه دارایی</th>
                                                <th>درصد استهلاک</th>
                                                <th>ارزش اسقاط</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">مستغلات</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $lands_price }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $depreciation_rate->question_1 }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $annual_asset_value_tenements[($plan_year->number_of_plan_year)-1] - $annual_dep_tenements[($plan_year->number_of_plan_year)-1] }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">ماشین‌آلات و تجهیزات فنی</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $equipments_price }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $depreciation_rate->question_2 }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $annual_asset_value_machineries[($plan_year->number_of_plan_year)-1] - $annual_dep_equipment_and_machineries[($plan_year->number_of_plan_year)-1]  }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تجهیزات آزمایشگاهی</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $laboratory_equipments_price }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $depreciation_rate->question_6 }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $annual_asset_value_laboratory_equipments[($plan_year->number_of_plan_year)-1] - $annual_dep_laboratory_equipments[($plan_year->number_of_plan_year)-1] }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تاسیسات</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $facilities_price }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $depreciation_rate->question_4 }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $annual_asset_value_facilities[($plan_year->number_of_plan_year)-1] - $annual_dep_facilities[($plan_year->number_of_plan_year)-1] }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تجهیزات دفتری</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $office_equipments_price }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $depreciation_rate->question_3 }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $annual_asset_value_office_equipment[($plan_year->number_of_plan_year)-1] - $annual_dep_office_equipment_and_supplise[($plan_year->number_of_plan_year)-1] }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">وسایل حمل و نقل</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $transportations_price }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $depreciation_rate->question_5 }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $annual_asset_value_transportations[($plan_year->number_of_plan_year)-1] - $annual_dep_transportations[($plan_year->number_of_plan_year)-1] }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td style="background-color: rgb(201, 197, 197);">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td style="background-color: rgb(201, 197, 197);">
                                                    <span class="text-dark-75"></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ( $annual_asset_value_tenements[($plan_year->number_of_plan_year)-1] - $annual_dep_tenements[($plan_year->number_of_plan_year)-1] ) + ( $annual_asset_value_machineries[($plan_year->number_of_plan_year)-1] - $annual_dep_equipment_and_machineries[($plan_year->number_of_plan_year)-1] ) + ( $annual_asset_value_laboratory_equipments[($plan_year->number_of_plan_year)-1] - $annual_dep_laboratory_equipments[($plan_year->number_of_plan_year)-1] ) + ( $annual_asset_value_facilities[($plan_year->number_of_plan_year)-1] - $annual_dep_facilities[($plan_year->number_of_plan_year)-1] ) + ( $annual_asset_value_office_equipment[($plan_year->number_of_plan_year)-1 ] - $annual_dep_office_equipment_and_supplise[($plan_year->number_of_plan_year)-1] ) + ( $annual_asset_value_transportations[($plan_year->number_of_plan_year)-1] - $annual_dep_transportations[($plan_year->number_of_plan_year)-1] ) }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <br>
                            <!--begin::table-->
                            <div>
                                <h5>هزینه استهلاک:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th>شرح دارایی</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <th>هزینه استهلاک در سال{{$i}}طرح</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">مستغلات</span>
                                                </td>
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_dep_tenements[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">ماشین‌آلات و تجهیزات فنی</span>
                                                </td>
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_dep_equipment_and_machineries[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تجهیزات آزمایشگاهی</span>
                                                </td>
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_dep_laboratory_equipments[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تاسیسات</span>
                                                </td>
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_dep_facilities[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تجهیزات دفتری</span>
                                                </td>
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_dep_office_equipment_and_supplise[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">وسایل حمل و نقل</span>
                                                </td>
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_dep_transportations[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_depreciation[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">هزینه های تولید سالیانه</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <th class="pl-7">سال {{$i}} طرح</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">مواد اولیه و بسته‌بندی</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_raw_material_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">حقوق و دستمزد</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_man_powers_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">بازرگانی و فروش</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_business_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">برون سپاری</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_outsourcing_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">اقلام مصرفی</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_consumer_item_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">اجاره</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_rent_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">بیمه</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_insurances_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">انرژی</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_energy_consumption_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تعمیر و نگهداری</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_repair_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تحقیق و توسعه</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_rd_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">گارانتی و خدمات پس از فروش</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_warranty_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">حمل و نقل</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_fin2_transportation_price[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">استهلاک</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_depreciation[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">هزینه مالی</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_financial_expenses[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">جمع کل</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_insurances_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>اصل تسهیلات بانکی</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">میزان وام اخذ شده</th>
                                                <th>سود</th>
                                                <th>زمان بازپرداخت اصل تسهیلات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">{{ $fiscal->loan }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $fiscal->profit }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $fiscal->reimbursement }}</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                                <br>
                                <p>جزئیات هزینه‌های تولید در سال‌های مختلف را می‌توانید در گزارش مالی طرح ببینید.</p>
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">پیش‌بینی قیمت فروش محصولات</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7" rowspan="2">محصول/سال طرح</th>
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <th class="pl-7" colspan="2">سال {{$i}}</th>
                                                @endfor
                                            </tr>
                                            <tr class="bg-gray-100 text-center">
                                                @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                    <th class="pl-7">تعداد</th>
                                                    <th class="pl-7">قیمت</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$product->name}}</span>
                                                    </td>
                                                    @for($i=1;$i <= $plan_year->number_of_plan_year;$i++)
                                                        <td>
                                                            @if( isset($annual_capacities[$i-1]->total_production) )
                                                                <span class="text-dark-75">{{ $annual_capacities[$i-1]->total_production  }}</span>
                                                            @else
                                                                <span class="text-dark-75">-</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if( isset($otherInformation[$i-1]->sale_price) )
                                                                <span class="text-dark-75">{{ $otherInformation[$i-1]->sale_price }}</span>
                                                            @else
                                                                <span class="text-dark-75">-</span>
                                                            @endif
                                                        </td>
                                                    @endfor
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">پیش‌بینی درآمد حاصل از فروش محصولات</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">محصول/سال طرح</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <th>سال{{$i}}</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$product->name}}</span>
                                                    </td>
                                                    @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                        <td>
                                                            @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                                <span class="text-dark-75">{{ ( $annual_capacities[$i-1]->total_production ) * ( $otherInformation[$i-1]->sale_price) }}</span>
                                                            @else
                                                                <span class="text-dark-75">-</span>
                                                            @endif
                                                        </td>
                                                    @endfor
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                            <span class="text-dark-75">{{  ( $annual_capacities[$i-1]->total_production ) * ($otherInformation[$i-1]->sale_price) * (count($products)) }}</span>
                                                        @else
                                                            <span class="text-dark-75">-</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">بهای تمام شده محصول</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7" colspan="2">سال</th>
                                                <th class="pl-7">محصول</th>
                                                <th class="pl-7">ضریب تعدیل</th>
                                                <th class="pl-7">هزینه مشترک</th>
                                                <th class="pl-7">هزینه مواد اولیه</th>
                                                <th class="pl-7">بهای تمام شده محصول</th>
                                                <th class="pl-7">حاشیه سود محضول</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                <tr>
                                                    <td rowspan="4"><b>سال {{$i}} طرح</b></td>
                                                </tr>
                                                @foreach($products as $product)
                                                    <tr class="text-center">
                                                        <td>
                                                            <span class="text-dark-75"></span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $product->name }}</span>
                                                        </td>
                                                        <td>
                                                            @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                                <span class="text-dark-75">{{ round( ( ($annual_capacities[$i-1]->total_production ) * ($otherInformation[$i-1]->sale_price) ) / ( ($annual_capacities[$i-1]->total_production) * ($otherInformation[$i-1]->sale_price) * (count($products)) ), 2)  }}</span>
                                                            @else
                                                                <span class="text-dark-75">-</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">{{ $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_financial_expenses[$i-1] }}</span>
                                                        </td>
                                                        <td>
                                                            @if( isset($annual_capacities[$i-1]->total_production) && isset($product->rawMaterials) )
                                                                <span class="text-dark-75">{{ $product->rawMaterials->where('year',$i)->sum('total_price') }}</span>
                                                            @else
                                                                <span class="text-dark-75">-</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) && isset($product->rawMaterials) )
                                                                <span class="text-dark-75">{{ round( ( ( ($annual_capacities[$i-1]->total_production) * ($otherInformation[$i-1]->sale_price) * (count($products)) ) - ( $product->rawMaterials->where('year',$i)->sum('total_price') ) - ( ( ( ($annual_capacities[$i-1]->total_production ) * ($otherInformation[$i-1]->sale_price) ) / ( ($annual_capacities[$i-1]->total_production) * ($otherInformation[$i-1]->sale_price) * (count($products)) ) )    * ( $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_financial_expenses[$i-1]) ) ) / ($annual_capacities[$i-1]->total_production), 2) }}</span>
                                                            @else
                                                                <span class="text-dark-75">-</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) && isset($product->rawMaterials) )
                                                                <span class="text-dark-75">{{  round( ( ($annual_capacities[$i-1]->total_production) * ($otherInformation[$i-1]->sale_price) ) - ( ( ( ($annual_capacities[$i-1]->total_production) * ($otherInformation[$i-1]->sale_price) * (count($products)) ) - ( $product->rawMaterials->where('year',$i)->sum('total_price') ) - ( ( ( ($annual_capacities[$i-1]->total_production ) * ($otherInformation[$i-1]->sale_price) ) / ( ($annual_capacities[$i-1]->total_production) * ($otherInformation[$i-1]->sale_price) * (count($products)) ) )    * ( $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_financial_expenses[$i-1]) ) ) / ($annual_capacities[$i-1]->total_production) ), 2)  }}</span>
                                                            @else
                                                                <span class="text-dark-75">-</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4 style="text-align: center">محاسبات مالی</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <th class="pl-7">سال {{$i}} طرح</th>
                                                @endfor
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">درآمد</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                            <span class="text-dark-75">{{ ( $annual_after_sale_service_price[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) }}</span>
                                                        @else
                                                            <span class="text-dark-75">-</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">هزینه</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">سود ناخالص</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                            <span class="text-dark-75">{{ ( ( $annual_after_sale_service_price[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">-</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">مالیات</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                            <span class="text-dark-75">{{ ($otherInformation[$i-1]->tax_rate) * ( ( ( $annual_after_sale_service_price[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">-</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">سودخالص</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                            <span class="text-dark-75">{{ ( ( ( $annual_after_sale_service_price[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] )  ) - ( ($otherInformation[$i-1]->tax_rate) * ( ( ( $annual_after_sale_service_price[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) ) ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">-</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">اصل تسهیلات بانکی</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $fiscal->loan }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">استهلاک</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">{{ $annual_depreciation[$i-1] }}</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">درآمد غیر عملیاتی</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        <span class="text-dark-75">0</span>
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">جریان نقدینگی</span>
                                                </td>
                                                @for($i=1;$i<=$plan_year->number_of_plan_year ;$i++)
                                                    <td>
                                                        @if( isset($annual_capacities[$i-1]->total_production) && isset($otherInformation[$i-1]->sale_price) )
                                                            <span class="text-dark-75">{{ ( ( ( ( $annual_after_sale_service_price[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] )  ) - ( ($otherInformation[$i-1]->tax_rate) * ( ( ( $annual_after_sale_service_price[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) ) ) ) - ( $fiscal->loan ) + ( $annual_depreciation[$i-1] ) }}</span>
                                                        @else
                                                            <span class="text-dark-75">-</span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>

        </div>
    </div>
    <!--end::Entry-->
@endsection