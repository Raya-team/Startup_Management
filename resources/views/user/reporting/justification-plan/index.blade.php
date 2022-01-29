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
                                ریسک بازار:از آنجایی که سطح آمادگی بازار(MRL)طرح در سطح {{$MRL}} می‌باشد سطح ریسک بازار طرح {{$market_risk_level}} برآورد می‌شود.
                                @if($market_risk_level >= 0 && $market_risk_level <= 30)
                                    این سطح از ریسک کم است.
                                @elseif($market_risk_level >= 30 && $market_risk_level <= 50)
                                    این سطح از ریسک متوسط است.
                                @else($market_risk_level >= 50 && $market_risk_level <= 100)
                                    این سطح از ریسک زیاد است.
                                @endif
                                <br><br>
                                ریسک فنی:از آنجایی که سطح آمادگی فنی(TRL)طرح در سطح {{$TRL}} می‌باشد سطح ریسک فنی طرح {{$technology_risk_level}} برآورد می‌شود.
                                @if($technology_risk_level >= 0 && $technology_risk_level <= 30)
                                    این سطح از ریسک کم است.
                                @elseif($technology_risk_level >= 30 && $technology_risk_level <= 50)
                                    این سطح از ریسک متوسط است.
                                @else($technology_risk_level >= 50 && $technology_risk_level <= 100)
                                    این سطح از ریسک زیاد است.
                                @endif
                                <br><br>
                                ریسک تولید:از آنجایی که سطح آمادگی تولید(mRL)طرح در سطح {{$mRL}} می‌باشد سطح ریسک تولید طرح {{$manufacturing_risk_level}} برآورد می‌شود.
                                @if($manufacturing_risk_level >= 0 && $manufacturing_risk_level <= 30)
                                    این سطح از ریسک کم است.
                                @elseif($manufacturing_risk_level >= 30 && $manufacturing_risk_level <= 50)
                                    این سطح از ریسک متوسط است.
                                @else($manufacturing_risk_level >= 50 && $manufacturing_risk_level <= 100)
                                    این سطح از ریسک زیاد است.
                                @endif
                               <br><br>
                                ریسک کسب و کار:از آنجایی که سطح آمادگی کسب و کار(BRL)طرح در سطح {{$BRL}} می‌باشد سطح ریسک کسب و کار طرح {{$business_risk_level}} برآورد می‌شود.
                                @if($business_risk_level >= 0 && $business_risk_level <= 30)
                                    این سطح از ریسک کم است.
                                @elseif($business_risk_level >= 30 && $business_risk_level <= 50)
                                    این سطح از ریسک متوسط است.
                                @else($business_risk_level >= 50 && $business_risk_level <= 100)
                                    این سطح از ریسک زیاد است.
                                @endif
                                <br><br>
                                با توجه به موارد بالا ریسک کسب و کار {{ ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4 }} درصد برآورد می‌شود.
                                @if(($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4 >= 0 && ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4 <= 30)
                                    این سطح از ریسک کم است.
                                @elseif(($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4 >= 30 && ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4 <= 50)
                                    این سطح از ریسک متوسط است.
                                @else(($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4 >= 50 && ($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4 <= 100)
                                    این سطح از ریسک زیاد است.
                                @endif
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
                                    با توجه به جدول محاسبه سطح آمادگی فناوری، سطح آمادگی فناوری {{$product->type->nickname}}  {{$product->name}}  {{$TRL}} می باشد.  <br><br></p>
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
                                    در این طرح عمر فناوری {{$plan_year->number_of_plan_year}} ساله در نظر گرفته شده است و نرخ تورم سالیانه  {{$fiscal->inflation}}درصد می‌باشد. لازم به ذکر است قیمت روز دلار {{$fiscal->dollar}} تومان بوده و وامی {{$fiscal->loan}} تومانی با سود {{$fiscal->profit}} درصد و بازپرداخت {{$fiscal->reimbursement}} ماهانه درنظر گرفته شده است. با توجه به برآورد ریسک {{($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4}} محاسبه شده در سامانه و میزان تورم، نرخ تنزیل {{(($technology_risk_level + $manufacturing_risk_level + $market_risk_level + $business_risk_level)/4) + ($fiscal->inflation) }} در نظر گرفته می‌شود.
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
                                <h4>20)برآورد هزینه‌های دوران بهره‌برداری:</h4><br>
                                <h5>1_20)مواد اولیه و بسته‌بندی:</h5><br>
                                <h6>1_1_20)مشخصات مواد اولیه برای یک واحد محصول:</h6><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h6>2_1_20)پیش‌ بینی هزینه مواد اولیه و بسته‌بندی سالیانه:</h6><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">نام محصول</th>
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
                                                            @if( isset($annual_capacities[$i-1]->total_production) )
                                                                <span class="text-dark-75">{{ ( $annual_capacities[$i-1]->total_production ) * ( $product['rawMaterials']->where('year', $i)->sum('total_price' )) }}</span>
                                                            @else
                                                                <span class="text-dark-75">تعداد تولید واقعی محصول خودرا در سال {{$i}} وارد کنید.</span>
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
                                                        @if( isset($annual_capacities[$i-1]->total_production) )
                                                            <span class="text-dark-75">{{ ( ($annual_capacities[$i-1]->total_production) * ($annual_raw_material_price[$i-1] ) ) }}</span>
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
                                <h5>2_20)حقوق و دستمزد:</h5><br>
                                <h6>1_2_20)نیروی‌های موردنیاز در سال‌های اجرای طرح:</h6><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h6>2_2_20)هزینه‌ نیروی انسانی در سال‌های طرح:</h6><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">سال طرح</th>
                                                <th>هزینه نیروی تولیدی</th>
                                                <th>هزینه نیروی غیر تولیدی{{$i}}</th>
                                                <th>جمع کل</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for($i=1; $i<=$plan_year->number_of_plan_year; $i++)
                                                <tr class="text-center">
                                                    <td>
                                                        <span class="text-dark-75">{{$i}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$man_powers->where('year', $i)->where('manpower_type', 1)->sum('total_rights')}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$man_powers->where('year', $i)->where('manpower_type', 0)->sum('total_rights')}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$man_powers->where('year', $i)->sum('total_rights')}}</span>
                                                    </td>
                                                </tr>
                                            @endfor
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75"><b>جمع کل</b></span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $man_powers->where('manpower_type', 1)->sum('total_rights') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $man_powers->where('manpower_type', 0)->sum('total_rights') }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $man_powers->sum('total_rights') }}</span>
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
                                <h5>3_20) برآورد هزینه‌های انرژی مصرفی:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>4_20)برآورد هزینه‌های تعمیر و نگهداری:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>5_20)برآورد هزینه استهلاک:</h5><br>
                                <h6>1_5_20)فرضیات محاسبه استهلاک:</h6><br>
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
                                                    <span class="text-dark-75">{{ $lands }}</span>
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
                                                    <span class="text-dark-75">{{ $equipment_and_machineries }}</span>
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
                                                    <span class="text-dark-75">{{ $fin_laboratory_equipments }}</span>
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
                                                    <span class="text-dark-75">{{ $fin_facilities }}</span>
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
                                                    <span class="text-dark-75">{{ $office_equipment_and_supplise }}</span>
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
                                                    <span class="text-dark-75">{{ $fin_transportations }}</span>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h6>2_5_20)هزینه استهلاک:</h6><br>
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
                                <h5>6_20)برآورد هزینه اجاره:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>7_20)گارانتی:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>8_20)بازرگانی:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>9_20)حمل و نقل:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>10_20)بیمه:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>11_20)اقلام مصرفی:</h5><br>
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
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div>
                                <h5>12_20)بازپرداخت وام:</h5><br>
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
                                <h4>21)پیش‌بینی قیمت فروش محصولات:</h4><br>
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
                                <h4>22)پیش‌بینی درآمد حاصل از فروش محصولات:</h4><br>
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
                                <h4>23)بهای تمام شده محصول:</h4><br>
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
                                <h4>24)هزینه خالص سرمایه‌گذاری:</h4><br>
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                            <thead>
                                            <tr class="bg-gray-100 text-center">
                                                <th class="pl-7">شرح</th>
                                                <th class="pl-7">میزان(تومان)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">مستغلات</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $lands }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">ماشین‌آلات و تجهیزات فنی</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $equipment_and_machineries }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تجهیزات آزمایشگاه</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $fin_laboratory_equipments }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تجهیزات اداری</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $office_equipment_and_supplise }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">تاسیسات</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $fin_facilities }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">وسایل نقلیه</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $fin_transportations }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">هزینه‌های قبل از بهره‌برداری</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $pre_operating_cost }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">کل میزان سرمایه‌گذاری طرح</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $lands + $equipment_and_machineries + $fin_laboratory_equipments + $fin_facilities + $fin_transportations + $office_equipment_and_supplise + $pre_operating_cost }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">سرمایه مورد نیاز طرح</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ($lands + $equipment_and_machineries + $fin_laboratory_equipments + $fin_facilities + $fin_transportations + $office_equipment_and_supplise + $pre_operating_cost) - ( ($tenements->sum('total_price')) + ($facilities->sum('total_price')) + ($machineries->sum('total_price')) + ($laboratory_equipments->sum('total_price')) + ($offices->sum('total_price')) + ($transportations->sum('total_price')) + ($pre_operation_costs->sum('total_price')) + ($valuation_cost) )  }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">مبلغ وام</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ $fiscal->loan }}</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <span class="text-dark-75">خالص سرمایه‌گذاری</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">{{ ( ($lands + $equipment_and_machineries + $fin_laboratory_equipments + $fin_facilities + $fin_transportations + $office_equipment_and_supplise + $pre_operating_cost) - ( ($tenements->sum('total_price')) + ($facilities->sum('total_price')) + ($machineries->sum('total_price')) + ($laboratory_equipments->sum('total_price')) + ($offices->sum('total_price')) + ($transportations->sum('total_price')) + ($pre_operation_costs->sum('total_price')) + ($valuation_cost) ) ) - ($fiscal->loan) }}</span>
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
                                <h4>25)جدول هزینه‌های سالیانه طرح:</h4><br>
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
                                                        <span class="text-dark-75">{{ $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] }}</span>
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
                                <h4>26)پیش‌بینی سود و زیان و گردش وجوه نقدی:</h4><br>
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
                                                            <span class="text-dark-75">{{ ( $annual_after_sale_service[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) }}</span>
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
                                                            <span class="text-dark-75">{{ ( ( $annual_after_sale_service[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) }}</span>
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
                                                            <span class="text-dark-75">{{ ($otherInformation[$i-1]->tax_rate) * ( ( ( $annual_after_sale_service[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) ) }}</span>
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
                                                            <span class="text-dark-75">{{ ( ( ( $annual_after_sale_service[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] )  ) - ( ($otherInformation[$i-1]->tax_rate) * ( ( ( $annual_after_sale_service[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) ) ) }}</span>
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
                                                            <span class="text-dark-75">{{ ( ( ( ( $annual_after_sale_service[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] )  ) - ( ($otherInformation[$i-1]->tax_rate) * ( ( ( $annual_after_sale_service[$i-1] + $annual_capacities[$i-1]->total_production ) * ( ($otherInformation[$i-1]->sale_price)) ) - ( $annual_raw_material_price[$i-1] + $annual_man_powers_price[$i-1] + $annual_business_price[$i-1] + $annual_outsourcing_price[$i-1] + $annual_consumer_item_price[$i-1] + $annual_rent_price[$i-1] + $annual_energy_consumption_price[$i-1] + $annual_repair_price[$i-1] + $annual_rd_price[$i-1] + $annual_warranty_price[$i-1] +  $annual_fin2_transportation_price[$i-1] + $annual_depreciation[$i-1] + $annual_financial_expenses[$i-1] ) ) ) ) - ( $fiscal->loan ) + ( $annual_depreciation[$i-1] ) }}</span>
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
            <a class="btn btn-primary" href="{{ URL::to('/reporting/justification-plan/pdf') }}">Export to PDF</a>
        </div>
    </div>
    <!--end::Entry-->
@endsection