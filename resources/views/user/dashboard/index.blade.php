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
                                        <td>{{ ($lands + $equipment_and_machineries + $fin_laboratory_equipments + $fin_facilities + $fin_transportations + $office_equipment_and_supplise + $pre_operating_cost) - ( ($tenements->sum('total_price')) + ($facilities->sum('total_price')) + ($machineries->sum('total_price')) + ($laboratory_equipments->sum('total_price')) + ($offices->sum('total_price')) + ($transportations->sum('total_price')) + ($pre_operation_costs->sum('total_price')) )  }} تومان</td>
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