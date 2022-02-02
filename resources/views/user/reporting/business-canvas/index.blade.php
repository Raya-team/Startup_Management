@extends('user.master')
@section('title', 'بوم کسب و کار')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">بوم کسب و کار</h5>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="{{ route('business-canvas.export') }}" target="_blank" class="btn btn-light-danger font-weight-bold ml-2">PDF</a>
                <!--end::Button-->
            </div>
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
                            <h3 class="card-title">شرکای کلیدی</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->key_partners))
                                <p>{{ $business_canvas->key_partners }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">فعالیت های اصلی</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->main_activities))
                                <p>{{ $business_canvas->main_activities }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">منابع اصلی</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->main_sources))
                                <p>{{ $business_canvas->main_sources }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">ساختار هزینه</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->cost_structure))
                                <p>{{ $business_canvas->cost_structure }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">ارزش پیشنهادی</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->suggested_value))
                                <p>{{ $business_canvas->suggested_value }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">ارتباط با مشتریان</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->communication_with_clients))
                                <p>{{ $business_canvas->communication_with_clients }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">کانال توزیع</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->distribution_channels))
                                <p>{{ $business_canvas->distribution_channels }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">بخش مشتریان</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->customer_section))
                                <p>{{ $business_canvas->customer_section }}</p>
                            @else
                                <p></p>
                            @endif
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
                            <h3 class="card-title">جریان درآمد</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($business_canvas->income_flow))
                                <p>{{ $business_canvas->income_flow }}</p>
                            @else
                                <p></p>
                            @endif
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Entry-->
@endsection

