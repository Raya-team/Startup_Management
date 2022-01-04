@extends('user.master')
@section('title', 'گزارش گیری - طرح توجیهی')
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
                            <a class="text-muted">طرح توجیهی</a>
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
                            <h1 class="card-title" style="margin: auto; font-size: 20px;"><b>اطلاعات مدیریتی</b></h1>
                        </div>
                        <div class="card-body">
                            <h4>1)مشخصات متقاضی:</h4><br>
                            <p>
                                تیم/ شرکت {{$team->name}}
                                @if($team->status == 1)
                                    با شماره ثبت {{$registered_team->registration_number}}
                                @endif
                                گزارش امکان سنجی طرح {{$team->project_name}} را تقدیم حضور می‌گرداند.
                                <br><br>
                                آدرس: {{$team->address}}
                                <br><br>
                                شماره تماس:{{$team->phone_number}}
                                <br><br>
                                ایمیل:{{$team->email}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>2)معرفی تیم:</h4><br>
                            <p>
                                @if(!$managerial)
                                @else
                                    {{$managerial->about_team}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>3)شایستگی های تیم:</h4><br>
                            <p>
                                @if(!$managerial)
                                @else
                                    {{$managerial->key_competencies}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4>4)مشخصات سهامداران:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">نام</th>
                                                <th>نام خانوادگی</th>
                                                <th>تحصیلات</th>
                                                <th>رشته</th>
                                                <th>سال تولد</th>
                                                <th>رزومه</th>
                                                <th>مسئولیت</th>
                                                <th>سرمایه گذاری</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($shareholders as $shareholder)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder->fname}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder->lname}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder->education->nickname}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder->major}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder->age}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder->resume}}</span>
                                                    </td>
                                                    <td>
                                                        @foreach($shareholder->responsibility as $responsibility)
                                                            <span class="text-dark-75">{{$responsibility->nickname}}<br></span>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder->investment}}</span>
                                                    </td>
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
                                <h4>5)معرفی پرسنل کلیدی:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">نام</th>
                                                <th>نام خانوادگی</th>
                                                <th>تحصیلات</th>
                                                <th>رشته</th>
                                                <th>سال تولد</th>
                                                <th>رزومه</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($key_employees as $key_employee)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$key_employee->fname}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$key_employee->lname}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$key_employee->education->nickname}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$key_employee->major}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$key_employee->age}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$key_employee->resume}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$key_employee->investment}}</span>
                                                    </td>
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
                            <h4>6)بیان مساله و مبانی علمی:</h4><br>
                            <p>
                                @if(!$managerial)
                                @else
                                    {{$managerial->problem_statement}}<br>
                                @endif
                                @if(!$technicals)
                                @else
                                    {{$technicals->scientific_principles}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>7)چشم انداز و ماموریت:</h4><br>
                            <p>
                                @if(!$managerial)
                                @else
                                    {{$managerial->mission}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>8)هدف از اجرای طرح:</h4><br>
                            <p>
                                @if(!$managerial)
                                @else
                                    {{$managerial->targets}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>9)ریسک طرح:</h4><br>
                            <p>
                                ریسک بازار: از آنجایی که سطح آمادگی بازار(MRL)    طرح در سطح ….. می‌باشد سطح ریسک بازار طرح ...... برآورد می‌شود. این سطح از ریسک ....... است.<br><br>
                                ریسک فنی: از آنجایی که سطح آمادگی فنی(TRL)    طرح در سطح ….. می‌باشد سطح ریسک فنی طرح ...... برآورد می‌شود. این سطح از ریسک ....... است.<br><br>
                                ریسک تولید: از آنجایی که سطح آمادگی تولید(mRL)    طرح در سطح ….. می‌باشد سطح ریسک تولید طرح ...... برآورد می‌شود. این سطح از ریسک ....... است.<br><br>
                                ریسک کسب و کار: از آنجایی که سطح آمادگی کسب و کار(BRL)    طرح در سطح ….. می‌باشد سطح ریسک کسب و کار طرح ...... برآورد می‌شود. این سطح از ریسک ....... است.<br><br>
                                با توجه به موارد بالا ریسک کسب و کار .... درصد برآورد می‌شود. این میزان، طرح فعلی را در درجه ریسک ....... قرار می‌دهد.
                            </p>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h1 class="card-title" style="margin: auto; font-size: 20px;"><b>اطلاعات فنی</b></h1>
                        </div>
                        <div class="card-body">
                            <h4>9)معرفی محصولات:</h4><br>
                            <p>
                                @if(!$technicals)
                                @else
                                    {{$technicals->product_introduction}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>10)مشخصات فنی محصول:</h4><br>
                            <p>
                                @if(!$technicals)
                                @else
                                    {{$technicals->technical_specifications}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>11)ویژگی های محصول:</h4><br>
                            <p>
                                @if(!$technicals)
                                @else
                                    {{$technicals->technical_features_product}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>12)سطح آمادگی فناوری(TRL):</h4><br>
                            <p>
                                @foreach($products as $product)
                                    با توجه به جدول محاسبه سطح آمادگی فناوری، سطح آمادگی فناوری   {{$product->type->nickname}} {{$product->name}} می باشد. <br><br></p>
                            @endforeach
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4>13)مجوز، استاندارد و گواهی‌نامه‌ها:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>اخذ شده؟</th>
                                                <th>نوع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($required_certificates as $required_certificate)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$required_certificate->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$required_certificate->received}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">
                                                            @if($required_certificate->type)
                                                                اجباری
                                                            @else
                                                                غیر اجباری
                                                            @endif
                                                        </span>
                                                    </td>
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
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h1 class="card-title" style="margin: auto; font-size: 20px;"><b>اطلاعات بازار</b></h1>
                        </div>
                        <div class="card-body">
                            <h4>14)بررسی بازار:</h4><br>
                            <h5>1_14)وضعیت بازار:</h5><br>
                            <p>
                                @if(!$markets)
                                @else
                                    {{$markets->market_status}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>2_14)وضعیت عرضه و تقاضا:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">سال</th>
                                                <th>تقاضای کل</th>
                                                <th>تولید داخل</th>
                                                <th>واردات</th>
                                                <th>واحد</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($supply_and_demand as $supply)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$supply->year}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$supply->general_request}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$supply->domestic_production}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$supply->importation}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$supply->Unit_id->name}}</span>
                                                    </td>
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
                                <h5>3_14)مشتریان:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">ویژگی مشتری</th>
                                                <th>مشتریان گروه اول</th>
                                                <th>مشتریان گروه دوم</th>
                                                <th>مشتریان گروه سوم</th>
                                                <th>مشتریان گروه چهارم</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($product_customers as $product_customer)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$product_customer->customer_features}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_customer->first_group_customers}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_customer->second_group_customers}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_customer->third_group_customers}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_customer->fourth_group_customers}}</span>
                                                    </td>
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
                                <h5>4_14)رقبا:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">نام رقیب</th>
                                                <th>منطقه جغرافیایی</th>
                                                <th>سهم از بازار</th>
                                                <th>ویژگی رقابتی</th>
                                                <th>نقطه ضعف</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($product_competitors as $product_competitor)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$product_competitor->name}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_competitor->geographical_region}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_competitor->market_share}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_competitor->competitive_feature}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$product_competitor->weakness}}</span>
                                                    </td>
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
                                <h5>5_14)محصولات جایگزین:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">نام محصول</th>
                                                <th>شرح</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($alternative_products as $alternative_product)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$alternative_product->product_title}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$alternative_product->description}}</span>
                                                    </td>
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
                            <h5>6_14)بازار هدف:</h5><br>
                            <p>
                                @if(!$markets)
                                @else
                                    {{$markets->target_market}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h5>7_14)استراتژی قیمت گذاری:</h5><br>
                            <p>
                                @if(!$markets)
                                @else
                                    {{$markets->product_pricing_strategy}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h5>8_14)استراتژی بازاریابی:</h5><br>
                            <p>
                                @if(!$markets)
                                @else
                                    {{$markets->product_marketing_strategy}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h5>9_14)مزیت رقابتی محصول:</h5><br>
                            <p>
                                @if(!$markets)
                                @else
                                    {{$markets->product_competitive_advantages}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h5>10_14)پیش بینی آینده بازار:</h5><br>
                            <p>
                                @if(!$markets)
                                @else
                                    {{$markets->forecast_the_future_of_the_market}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>11_14)تاثیرات محیطی طرح:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">اقتصادی</th>
                                                <th>اجتماعی</th>
                                                <th>سیاسی</th>
                                                <th>محیط زیستی</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">
                                                        @if(!$environmental_effects)
                                                        @else
                                                            {{$environmental_effects->economical}}
                                                        @endif
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">
                                                        @if(!$environmental_effects)
                                                        @else
                                                            {{$environmental_effects->social}}
                                                        @endif
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">
                                                        @if(!$environmental_effects)
                                                        @else
                                                            {{$environmental_effects->political}}
                                                        @endif
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">
                                                        @if(!$environmental_effects)
                                                        @else
                                                            {{$environmental_effects->environmental}}
                                                        @endif
                                                    </span>
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
                                <h5>12_14)بررسی نقاط قوت، ضعف، تهدیدها و فرصت‌ها:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>وزن</th>
                                                <th>امتیاز</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($strengths as $strength)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$strength->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$strength->weight}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$strength->score}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>وزن</th>
                                                <th>امتیاز</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($weakPoints as $weakPoint)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$weakPoint->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$weakPoint->weight}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$weakPoint->score}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>وزن</th>
                                                <th>امتیاز</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($opportunityPoints as $opportunityPoint)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$opportunityPoint->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$opportunityPoint->weight}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$opportunityPoint->score}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>وزن</th>
                                                <th>امتیاز</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($threats as $threat)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$threat->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$threat->weight}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$threat->score}}</span>
                                                    </td>
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
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h1 class="card-title" style="margin: auto; font-size: 20px;"><b>اطلاعات تولید</b></h1>
                        </div>
                        <div class="card-body">
                            <h4>15)شرایط و نوبت کاری:</h4><br>
                            <p>
                                @if(!$technicals)
                                @else
                                    {{$technicals->terms_and_conditions_of_work}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>16)برنامه تولید:</h4><br>
                            <p>
                                @if(!$technicals)
                                @else
                                    {{$technicals->production_schedule}}
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4>17)پیش‌ بینی برنامه زمانبندی اجرای طرح:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">موضوع کار</th>
                                                <th>مدت زمان کار</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($plan_implementation as $plan)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$plan->subject_of_work}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$plan->duration_of_work}}</span>
                                                    </td>
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
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h1 class="card-title" style="margin: auto; font-size: 20px;"><b>اطلاعات مالی</b></h1>
                        </div>
                        <div class="card-body">
                            <h4>18)فرضیات محاسبات مالی:</h4><br>
                            <p>
                                @if(!$plan_year)
                                @else
                                    در این طرح عمر فناوری {{$plan_year->number_of_plan_year}} ساله در نظر گرفته شده است و نرخ تورم سالیانه  {{$fiscal->inflation}}درصد می‌باشد. لازم به ذکر است قیمت روز دلار {{$fiscal->dollar}} تومان بوده و وامی {{$fiscal->loan}} تومانی با سود {{$fiscal->profit}} درصد و بازپرداخت {{$fiscal->reimbursement}} ماهانه درنظر گرفته شده است. با توجه به برآورد ریسک ..... محاسبه شده در سامانه و میزان تورم، نرخ تنزیل ...... در نظر گرفته می‌شود.
                                @endif
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4>19)هزینه های سرمایه گذاری:</h4><br>
                                <h5>1_19)مستغلات:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>متراژ کل</th>
                                                <th>مبلغ انجام شده</th>
                                                <th>مبلغ مورد نیاز</th>
                                                <th>جمع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($tenements as $tenement)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$tenement->Description->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$tenement->Description->area}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$tenement->total_price}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{($tenement->Description->price)-($tenement->total_price)}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$tenement->Description->price}}</span>
                                                    </td>
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
                                <h5>2_19)تاسیسات:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>تعداد</th>
                                                <th>مبلغ انجام شده</th>
                                                <th>مبلغ مورد نیاز</th>
                                                <th>جمع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($facilities as $facility)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{ $facility->Description->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $facility->Description->count }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $facility->total_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{($facility->Description->total_price) - ($facility->total_price) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $facility->Description->total_price }}</span>
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
                                                    <span class="text-dark-75">{{ $facilities->sum('total_price') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($facilities->sum('Description.total_price')) - ($facilities->sum('total_price')) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $facilities->sum('Description.total_price') }}</span>
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
                                <h5>3_19)ماشین آلات و تجهیزات فنی:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>تعداد</th>
                                                <th>مبلغ انجام شده</th>
                                                <th>مبلغ مورد نیاز</th>
                                                <th>جمع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($machineries as $machinery)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{ $machinery->Description->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $machinery->Description->count }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $machinery->total_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{($machinery->Description->total_price) - ($machinery->total_price) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $machinery->Description->total_price }}</span>
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
                                                    <span class="text-dark-75">{{ $machineries->sum('total_price') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($machineries->sum('Description.total_price')) - ($machineries->sum('total_price')) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $machineries->sum('Description.total_price') }}</span>
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
                                <h5>4_19)تجهیزات آزمایشگاهی:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>تعداد</th>
                                                <th>قیمت واحد(دلار)</th>
                                                <th>قیمت واحد(تومان)</th>
                                                <th>مبلغ انجام شده</th>
                                                <th>مبلغ مورد نیاز</th>
                                                <th>جمع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($laboratory_equipments as $laboratory_equipment)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{ $laboratory_equipment->Description->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $laboratory_equipment->Description->number }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $laboratory_equipment->Description->dollar_unit_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $laboratory_equipment->Description->toman_unit_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $laboratory_equipment->total_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ ($laboratory_equipment->Description->total_price) - ($laboratory_equipment->total_price) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $laboratory_equipment->Description->total_price }}</span>
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
                                                    <span class="text-dark-75">{{ $laboratory_equipments->sum('total_price') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($laboratory_equipments->sum('Description.total_price')) - ($laboratory_equipments->sum('total_price')) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $laboratory_equipments->sum('Description.total_price') }}</span>
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
                                <h5>5_19)اثاثه اداری:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>تعداد</th>
                                                <th>مبلغ انجام شده</th>
                                                <th>مبلغ مورد نیاز</th>
                                                <th>جمع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($offices as $office)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{ $office->Description->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $office->Description->count }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $office->total_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ ($office->Description->total_price) - ($office->total_price) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $office->Description->total_price }}</span>
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
                                                    <span class="text-dark-75">{{ $offices->sum('total_price') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($offices->sum('Description.total_price')) - ($offices->sum('total_price')) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $offices->sum('Description.total_price') }}</span>
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
                                <h5>6_19)وسایل نقلیه:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>تعداد</th>
                                                <th>مبلغ انجام شده</th>
                                                <th>مبلغ مورد نیاز</th>
                                                <th>جمع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transportations as $transportation)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{ $transportation->Description->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $transportation->Description->count }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $transportation->total_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ ($transportation->Description->total_price) - ($transportation->total_price) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $transportation->Description->total_price }}</span>
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
                                                    <span class="text-dark-75">{{ $transportations->sum('total_price') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($transportations->sum('Description.total_price')) - ($transportations->sum('total_price')) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $transportations->sum('Description.total_price') }}</span>
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
                                <h5>7_19)هزینه های قبل از بهره برداری:</h5><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th>مبلغ انجام شده</th>
                                                <th>مبلغ مورد نیاز</th>
                                                <th>جمع</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($pre_operation_costs as $pre_operation_cost)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{ $pre_operation_cost->Description->description }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $pre_operation_cost->total_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ ($pre_operation_cost->Description->total_price) - ($pre_operation_cost->total_price) }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $pre_operation_cost->Description->total_price }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $pre_operation_costs->sum('total_price') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($pre_operation_costs->sum('Description.total_price')) - ($pre_operation_costs->sum('total_price')) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $pre_operation_costs->sum('Description.total_price') }}</span>
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
                                <h5>8_19)سرمایه در گردش مورد نیاز:</h5><br>
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
                                                                <span class="text-dark-75">{{ round( ($count_day->question_1 + $count_day->question_2 + $count_day->question_3 + $count_day->question_4)/30 ) }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
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
                                            مبلغ ............... تومان می‌شود به عنوان سرمایه در گردش در نظر گرفته می‌شود.
                                        @endif
                                    </p>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::table-->
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h4>20)برآورد هزینه‌های دوران بهره‌برداری:</h4><br>
                                <h5>1_20)مواد اولیه و بسته‌بندی:</h5><br>
                                <h6>1_1_20)مشخصات مواد اولیه برای یک واحد محصول:</h6><br>
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
                                            @foreach($raw_materials as $raw_material)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$raw_material->description}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $raw_material->Unit->name }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $raw_material->unit_price }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ $raw_material->consumption }}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{ ($raw_material->consumption) * ($raw_material->unit_price) }}</span>
                                                    </td>
                                                </tr>
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
                                                    <span class="text-dark-75">{{ $raw_materials->sum('') }}</span>
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
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <a class="btn btn-primary" href="{{ URL::to('/reporting/justification-plan/pdf') }}">Export to PDF</a>
        </div>
    </div>
    <!--end::Entry-->
@endsection