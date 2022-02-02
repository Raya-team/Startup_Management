<html lang="en">
<head>
    <style>
        body{
            font-family: 'fa';
        }
        table, th, td {
            border: 1px solid ;
            vertical-align:top;
            border-collapse: collapse;
            border-radius: 5px;
            /*height: 100%;*/
            /*width: 100%;*/
            margin-left: auto;
            margin-right: auto;
        }
        /*h1 {*/
            /*font-size: 2000px;*/
        /*}*/
        /*p {*/
            /*font-size: 500px;*/
        /*}*/
        /*.aaa{*/
            /*font-size: 800px;*/
        /*}*/
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">--}}
    <title>مدل بوم کسب و کار</title>
</head>
<body dir="rtl">
<div class="table-responsive">
</div>
{{--<div>
    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                <tbody>
                <tr>
                    <td rowspan="2">
                        <h1>بخش مشتریان</h1><br>
                        <span class="text-dark-75">{{ $canvas->customer_section }}</span>
                    </td>
                    <td>
                        <h1>ارتباط با مشتریان</h1>
                        <span class="text-dark-75">{{ $canvas->communication_with_clients }}</span>
                    </td>
                    <td rowspan="2">
                        <h1>ارزش پیشنهادی</h1>
                        <span class="text-dark-75">{{ $canvas->suggested_value }}</span>
                    </td>
                    <td>
                        <h1>فعالیت های اصلی</h1>
                        <span class="text-dark-75">{{ $canvas->main_activities }}</span>
                    </td>
                    <td rowspan="2">
                        <h1>شرکای کلیدی</h1>
                        <span class="text-dark-75">{{ $canvas->key_partners }}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1>کانال توزیع</h1>
                        <span class="text-dark-75">{{ $canvas->distribution_channels }}</span>
                    </td>
                    <td>
                        <h1>منابع اصلی</h1>
                        <span class="text-dark-75">{{ $canvas->main_sources }}</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h1>جریان درآمد</h1>
                        <span class="text-dark-75">{{ $canvas->income_flow }}</span>
                    </td>
                    <td colspan="2">
                        <h1>ساختار هزینه</h1>
--}}{{--                        <span class="text-dark-75">{{ $canvas->cost_structure }}</span>--}}{{--
--}}{{--                        <span class="text-dark-75">{{ str_split($canvas->cost_structure, 50) }}</span>--}}{{--
                        <span class="text-dark-75">@php for ($i = 0; $i < mb_strlen($canvas->cost_structure); $i++) {
                                                        if ($i % 52){
                                                        echo mb_substr($canvas->cost_structure, 0 , 52) . '<br />';
                                                        $canvas->cost_structure = mb_substr($canvas->cost_structure, 52, mb_strlen($canvas->cost_structure));
                                                        }
                                                        } @endphp</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>--}}

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">شرکای کلیدی</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->key_partners }}</p>
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
                    <h3 class="card-title">فعالیت های اصلی</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->main_activities }}</p>
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
                    <h3 class="card-title">منابع اصلی</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->main_sources }}</p>
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
                    <h3 class="card-title">ساختار هزینه</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->cost_structure }}</p>
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
                    <h3 class="card-title">ارزش پیشنهادی</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->suggested_value }}</p>
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
                    <h3 class="card-title">ارتباط با مشتریان</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->communication_with_clients }}</p>
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
                    <h3 class="card-title">کانال توزیع</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->distribution_channels }}</p>
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
                    <h3 class="card-title">بخش مشتریان</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->customer_section }}</p>
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
                    <h3 class="card-title">جریان درآمد</h3>
                </div>
                <div class="card-body">
                    <p>{{ $business_canvas->income_flow }}</p>
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>

{{--<script>--}}
{{--window.print();--}}
{{--</script>--}}
</body>
</html>