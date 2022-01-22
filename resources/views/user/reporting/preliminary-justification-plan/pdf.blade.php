<html lang="en">
<head>
    <style>
        body{
            font-family: 'fa';
        }
        table, th, td {
            border: 1px solid ;
            vertical-align:top;
            text-align: center;
            border-collapse: collapse;
            /*border-radius: 5px;*/
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>طرح توجیهی مقدماتی</title>
    {{--<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">--}}
</head>
<body dir="rtl">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h1 class="card-title" style="margin: auto; font-size: 25px; text-align: center"><b>اطلاعات تیم/شرکت</b></h1>
            </div>
            <div class="card-body">
                <ul>
                    <li><h5>نام کسب و کار:</h5>{{$team->name}}</li><br>
                    <li><h5>صنعت فعالیت:</h5>{{$team->activity->nickname}}</li><br>
                    @if(!$business_questions)
                    @else
                        <li><h5>آدرس وب سایت:</h5>{{$business_questions->site_address}}</li><br>
                        <li><h5>آدرس دفتر کار:</h5>{{$business_questions->location_address}}</li><br>
                    @endif
                    @if($team->status == 1)
                        <li><h5>مشخصات شرکت ثبت شده:</h5>نام تیم:{{$team->name}}<br><br>شماره ثبت:{{$registered_team->registration_number}}<br><br>تاریخ ثبت:{{$registered_team->registration_date}}</li><br>
                    @endif
                    @if(!$business_questions)
                    @else
                        <li><h5>سابقه‌ی حضور در شتاب‌دهنده‌‌‌ها یا مراکز رشد(نام موسسه و درصد سهام آن‌ها):</h5>{{$business_questions->growth_center}}</li><br>
                    @endif
                    <li><h5>سرمایه‌گذار دیگر(نام موسسه و درصد سهام آن‌ها):</h5></li><br>
                </ul>
                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                            <thead>
                            <tr class="bg-gray-100 text-center">
                                <th class="pl-7">نام سرمایه گذار قبلی</th>
                                <th>درصد</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($previous_investors as $previous_investor)
                                <tr class="text-center">
                                    <td>
                                        <span class="text-dark-75">{{$previous_investor->name}}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{$previous_investor->percent}}</span>
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
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h1 class="card-title" style="margin: auto; font-size: 25px; text-align: center"><b>اطلاعات مدیر کسب و کار:</b></h1>
                <br>
            </div>
            <div class="card-body">
                <!--begin::Body-->
                <div class="card-body pt-0 pb-3">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                            <thead>
                            <tr class="bg-gray-100 text-center">
                                <th class="pl-7">نام و نام خانوادگی</th>
                                <th>شماره تماس</th>
                                <th>ایمیل</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!$business_manager)
                            @else
                                <tr class="text-center">
                                    <td>
                                        <span class="text-dark-75">{{$business_manager->Owner->fname}} {{$business_manager->Owner->lname}}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{$business_manager->phone_number}}</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">{{$business_manager->email}}</span>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h1 class="card-title" style="margin: auto; font-size: 25px; text-align: center"><b>اطلاعات تیم/شرکت:</b></h1>
            </div>
            <div class="card-body">
                <ul>
                    <li><h5>تعداد اعضای تیم/شرکت (شامل سهامداران و کارکنان):</h5>{{ ($shareholders->count()) + ($key_employees->count()) }}</li><br>
                    <li><h5>اطلاعات سهامداران و اعضای کلیدی تیم/شرکت</h5></li>
                </ul>
                <!--begin::table-->
                <div>
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
                <br><br>
                <!--begin::table-->
                <div>
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
                <!--end::Body-->
            </div>
        </div>
    </div>
    <!--end::Card-->
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">نیاز</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->requirement }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">راه حل</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->solution }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">رقبا</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->competitors }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">مزیت رقابتی</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->competitive_advantage }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">بازار هدف</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->target_market }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">سطح آمادگی فناوری</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->technology_level }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">بودجه مورد نیاز تقریبی</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->required_budget }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">درآمد تقریبی</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->income }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">عمر تکنولوژی(طرح)</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->technology_life }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">دلیل عدم  ایجاد/ توسعه طرح </h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->plan_development }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
<hr style="border: 1px solid black">
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">ارزش دانش فنی</h3>
            </div>
            <div class="card-body">
                @if(!$justification_plan)
                @else
                    <p style="white-space: pre">{{ $justification_plan->technical_knowledge }}</p>
                @endif
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>
</body>
</html>