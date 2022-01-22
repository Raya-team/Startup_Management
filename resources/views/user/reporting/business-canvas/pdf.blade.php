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
        table{

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
<table>
    <tr>
        <td rowspan="2">
            <h1>بخش مشتریان</h1><br>
            <p>{{ $canvas->key_partners }}</p>
        </td>
        <td>
            <h1>ارتباط با مشتریان</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
        <td rowspan="2">
            <h1>ارزش پیشنهادی</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
        <td>
            <h1>فعالیت های کلیدی</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
        <td rowspan="2">
            <h1>شرکای کلیدی</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h1>کانال های ارتباطی</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
        <td>
            <h1>منابع اصلی</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <h1>جریان درآمد</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
        <td colspan="2">
            <h1>ساختار هزینه</h1>
            <p>{{ $canvas->key_partners }}</p>
        </td>
    </tr>
</table>







{{--<script>--}}
    {{--window.print();--}}
{{--</script>--}}
</body>
</html>