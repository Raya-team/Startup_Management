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
                            <h1 class="card-title">اطلاعات مدیریتی</h1>
                        </div>
                        <div class="card-body">
                            <p style="white-space: pre">
                                <h4>1-مشخصات متقاضی:</h4><br>
                            تیم/شرکت
                            {{$team->name}}
                            @if($team->status == 1)
                            با شماره ثبت
                            {{$registered_team->registration_number}}
                            @endif
                            گزارش امکان سنجی طرح
                            {{$team->project_name}}
                            را تقدیم حضور می‌گرداند.
                            <br><br>
                            آدرس: {{$team->address}}
                            <br><br>
                             شماره تماس:{{$team->phone_number}}
                            <br><br>
                            ایمیل:{{$team->email}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <p style="white-space: pre">
                            <h4>2-معرفی تیم:</h4><br>
                            {{$managerial->about_team}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <p style="white-space: pre">
                            <h4>3-شایستگی های تیم:</h4><br>
                            {{$managerial->key_competencies}}
                            </p>
                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                            <!--begin::table-->
                            <div class="card card-custom gutter-b">
                                <h4>4-مشخصات سهامداران:</h4><br>
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
                                                        <span class="text-dark-75">استقالا</span>
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
                                                        <span class="text-dark-75">{{$shareholder->investment}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75">{{$shareholder}}</span>
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

<hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">

