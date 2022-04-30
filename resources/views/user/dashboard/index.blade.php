@extends('user.master')
@section('title', 'داشبورد')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <div class="example-preview">
                                <table class="table table-bordered mb-6">
                                    <tbody class="text-center">
                                    <tr>
                                        <td>سطح آمادگی فناوری (TRL)</td>
                                        <td>{{ $TRL }}</td>
                                    </tr>
                                    <tr>
                                        <td>سطح آمادگی بازار (MRL)</td>
                                        <td>{{ $MRL }}</td>
                                    </tr>
                                    <tr>
                                        <td>سطح آمادگی تولید (mRL)</td>
                                        <td>{{ $mRL }}</td>
                                    </tr>
                                    <tr>
                                        <td>سطح آمادگی کسب و کار (BRL)</td>
                                        <td>{{ $BRL }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">
                            <div class="example-preview">
                                <table class="table table-bordered mb-6">
                                    <tbody class="text-center">
                                    <tr>
                                        <td>دوره بازگشت سرمایه</td>
                                        <td>... سال</td>
                                    </tr>
                                    <tr>
                                        <td>نرخ بازده فعلی (NPV)</td>
                                        <td>{{ $NPV }} تومان</td>
                                    </tr>
                                    <tr>
                                        <td>سرمایه مورد نیاز</td>
                                        <td>... تومان</td>
                                    </tr>
                                    <tr>
                                        <td>عمر طرح</td>
                                        <td>{{ $plan_life }} سال</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Example-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection