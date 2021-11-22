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
                                {{$managerial->about_team}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>3)شایستگی های تیم:</h4><br>
                            <p>
                                {{$managerial->key_competencies}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div class="card card-custom gutter-b">
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
                            <div class="card card-custom gutter-b">
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
                                                <th>مسئولیت</th>
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
                                                        <span class="text-dark-75">{{$key_employee->lname}}</span>
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
                                {{$managerial->problem_statement}}<br>
                                {{$technicals->scientific_principles}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>7)چشم انداز و ماموریت:</h4><br>
                            <p>
                                {{$managerial->mission}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>8)هدف از اجرای طرح:</h4><br>
                            <p>
                                {{$managerial->targets}}
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
                                {{$technicals->product_introduction}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>10)مشخصات فنی محصول:</h4><br>
                            <p>
                                {{$technicals->technical_specifications}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>11)ویژگی های محصول:</h4><br>
                            <p>
                                {{$technicals->technical_features_product}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h4>12)سطح آمادگی فناوری(TRL):</h4><br>
                            <p>
                                @foreach($products as $product)
                                    با توجه به جدول محاسبه سطح آمادگی فناوری، سطح آمادگی فناوری   {{$product->type->nickname}} {{$product->name}} می باشد. <br><br></p>
                                @endforeach
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div class="card card-custom gutter-b">
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
                                {{$technicals->product_introduction}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div class="card card-custom gutter-b">
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
                                                        <span class="text-dark-75">{{$supply->unit_id}}</span>
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
                            <div class="card card-custom gutter-b">
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
                            <div class="card card-custom gutter-b">
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
                            <h5>7_14)استراتژی قیمت گذاری:</h5><br>
                            <p>
                                {{$markets->product_pricing_strategy}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h5>8_14)استراتژی بازاریابی:</h5><br>
                            <p>
                                {{$markets->product_marketing_strategy}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <h5>9_14)مزیت رقابتی محصول:</h5><br>
                            <p>
                                {{$markets->product_competitive_advantages}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div class="card card-custom gutter-b">
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
                                                        <span class="text-dark-75">{{$environmental_effects->economical}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$environmental_effects->social}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$environmental_effects->political}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$environmental_effects->environmental}}</span>
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
                            <div class="card card-custom gutter-b">
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
        </div>
    </div>
    <!--end::Entry-->
@endsection

