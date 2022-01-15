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
                                                        @if(isset($production_plan[$i]->nominal_capacity))
                                                            <span class="text-dark-75">{{$production_plan[$i]->nominal_capacity}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">ظرفیت عملی طرح(تعداد)</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($production_plan[$i]->total_production))
                                                            <span class="text-dark-75">{{$production_plan[$i]->total_production}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد ظرفیت عملی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($production_plan[$i]->nominal_capacity))
                                                            <span class="text-dark-75">{{ ($production_plan[$i]->nominal_capacity) / ($production_plan[$i]->total_production) }}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد افزایش تولید</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if( isset($production_plan[$i]->total_production) && $i != 0)
                                                            <span class="text-dark-75">{{ (($production_plan[$i]->total_production) / ($production_plan[$i-1]->total_production)) - 1 }}</span>
                                                        @elseif( isset($production_plan[$i]->total_production) && $i == 0)
                                                            <span class="text-dark-75">0</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
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
                                                <td class="pl-7"></td>
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
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">حوزه طرح</td>
                                                <td class="pl-7">{{$team->activity->nickname;}}</td>
                                                <td class="bg-gray-100 pl-7">ارزش دانش فنی</td>
                                                <td class="pl-7"></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">نرخ تنزیل</td>
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
                                                <td class="pl-7"></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سرمایه مورد نیاز طرح</td>
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">وام مورد نیاز</td>
                                                <td class="pl-7">{{$fiscal->loan}}</td>
                                                <td class="bg-gray-100 pl-7">خالص سرمایه‌گذاری پس از کسر وام</td>
                                                <td class="pl-7"></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">درصد سهام قابل واگذاری</td>
                                                <td class="pl-7">{{$total_percent}}</td>
                                                <td class="bg-gray-100 pl-7">میزان آورده مورد انتظار از سرمایه‌گذار</td>
                                                <td class="pl-7">{{$total_investment}}</td>
                                                <td class="bg-gray-100 pl-7">درصد سهام فناور</td>
                                                <td class="pl-7">{{($total_percent)- 1}}</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">آورده فناور</td>
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">میزان آورده نامشهود فناور</td>
                                                <td class="pl-7"></td>
                                                <td class="bg-gray-100 pl-7">میزان آورده مشهود فناور</td>
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
                                                        @if(isset($raw_material_price[$i]) && isset($production_plan[$i]->total_production))
                                                            <span class="text-dark-75">{{($raw_material_price[$i])*($production_plan[$i]->total_production)}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">حقوق و دستمزد</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($man_power_price[$i]))
                                                            <span class="text-dark-75">{{$man_power_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه اجاره</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($rent_price[$i]))
                                                            <span class="text-dark-75">{{$rent_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه انرژی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($energy_consumption_price[$i]))
                                                            <span class="text-dark-75">{{$energy_consumption_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه تعمیر و نگهداری</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($repair_price[$i]))
                                                            <span class="text-dark-75">{{$repair_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه حمل و نقل</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($transportation_cost_price[$i]))
                                                            <span class="text-dark-75">{{$transportation_cost_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه استهلاک</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($raw_material_price[$i]))
                                                            <span class="text-dark-75"></span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه برون سپاری</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($outsourcing_price[$i]))
                                                            <span class="text-dark-75">{{$outsourcing_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه بازرگانی و فروش</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($business_price[$i]))
                                                            <span class="text-dark-75">{{$business_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه تحقیق و توسعه</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($rd_price[$i]))
                                                            <span class="text-dark-75">{{$rd_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه بیمه</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($insurance_price[$i]))
                                                            <span class="text-dark-75">{{$insurance_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه گارانتی و خدمات پس از فروش</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($warranty_price[$i]))
                                                            <span class="text-dark-75">{{$warranty_price[$i]}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه مالی</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($business_price[$i]))
                                                            <span class="text-dark-75"></span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">هزینه مالی توسعه</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($business_price[$i]))
                                                            <span class="text-dark-75"></span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">جمع هزینه های جاری طرح</td>
                                                @for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($business_price[$i]))
                                                            <span class="text-dark-75"></span>
                                                        @else
                                                            <span class="text-dark-75"></span>
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
                                                        @if(isset($annual_other_information[$i]->sale_price) && isset($production_plan[$i]->total_production) && isset($after_sale_service_price[$i]))
                                                            <span class="text-dark-75">{{( ($annual_other_information[$i]->sale_price)*($production_plan[$i]->total_production) ) + ($after_sale_service_price[$i])}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">بهای تمام شده کالا فروش رفته</td>
                                                {{--@for($i = 0; $i < $plan_year->number_of_plan_year; $i++)--}}
                                                {{--<td>--}}
                                                {{--@if(isset($man_power_price[$i]))--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@else--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@endif--}}
                                                {{--</td>--}}
                                                {{--@endfor--}}
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سود و زیان ناخالص</td>
                                                {{--@for($i = 0; $i < $plan_year->number_of_plan_year; $i++)--}}
                                                {{--<td>--}}
                                                {{--@if(isset($rent_price[$i]))--}}
                                                {{--<span class="text-dark-75">{{$rent_price[$i]}}</span>--}}
                                                {{--@else--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@endif--}}
                                                {{--</td>--}}
                                                {{--@endfor--}}
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">مالیات</td>
                                                {{--@for($i = 0; $i < $plan_year->number_of_plan_year; $i++)--}}
                                                {{--<td>--}}
                                                {{--@if(isset($energy_consumption_price[$i]))--}}
                                                {{--<span class="text-dark-75">{{$energy_consumption_price[$i]}}</span>--}}
                                                {{--@else--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@endif--}}
                                                {{--</td>--}}
                                                {{--@endfor--}}
                                            </tr>
                                            <tr class="text-center">
                                                <td class="bg-gray-100 pl-7">سود پس از کسر مالیات</td>
                                                {{--@for($i = 0; $i < $plan_year->number_of_plan_year; $i++)--}}
                                                {{--<td>--}}
                                                {{--@if(isset($repair_price[$i]))--}}
                                                {{--<span class="text-dark-75">{{$repair_price[$i]}}</span>--}}
                                                {{--@else--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@endif--}}
                                                {{--</td>--}}
                                                {{--@endfor--}}
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
                                                {{--@for($i = 0; $i < $plan_year->number_of_plan_year; $i++)--}}
                                                {{--<td>--}}
                                                {{--@if(isset($raw_material_price[$i]))--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@else--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@endif--}}
                                                {{--</td>--}}
                                                {{--@endfor--}}
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
                                                {{--@for($i = 0; $i < $plan_year->number_of_plan_year; $i++)--}}
                                                {{--<td>--}}
                                                {{--@if(isset($business_price[$i]))--}}
                                                {{--<span class="text-dark-75">{{$business_price[$i]}}</span>--}}
                                                {{--@else--}}
                                                {{--<span class="text-dark-75"></span>--}}
                                                {{--@endif--}}
                                                {{--</td>--}}
                                                {{--@endfor--}}
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
                                                {{--@for($i = 0; $i < $plan_year->number_of_plan_year; $i++)
                                                    <td>
                                                        @if(isset($annual_other_information[$i]->sale_price) && isset($production_plan[$i]->total_production) && isset($after_sale_service_price[$i]))
                                                            <span class="text-dark-75">{{( ($annual_other_information[$i]->sale_price)*($production_plan[$i]->total_production) ) + ($after_sale_service_price[$i])}}</span>
                                                        @else
                                                            <span class="text-dark-75"></span>
                                                        @endif
                                                    </td>
                                                @endfor--}}
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
                                                    <span class="text-dark-75"></span>
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
                                                    <span class="text-dark-75">{{$equipments_price}}</span>
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
                                                    <span class="text-dark-75">{{$lands_price + $laboratory_equipments_price + $equipments_price + $office_equipments_price + $facilities_price + $transportations_price}}</span>
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
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>

        </div>
    </div>
    <!--end::Entry-->
@endsection