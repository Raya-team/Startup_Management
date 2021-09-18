@extends('user.master')
@section('title', 'تست')
@section('content')
    <div>
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <a class="text-muted">سهام اولیه</a>
                                </div>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <a class="text-muted">دستی</a>
                                </div>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">تخصیص درصد</div>
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
                <!--begin::table-->
                <div class="card card-custom gutter-b col-xl-8 offset-xl-2">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">سهامداران شرکت</span>
                        </h3>
                        <div class="card-toolbar my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="جستجو..." />
                                <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                                {{--<div class="d-flex align-items-center" v-if="progress">--}}
                                {{--<div class="mr-2 text-muted">لطفا صبر کنید...</div>--}}
                                {{--<div class="spinner mr-10"></div>--}}
                                {{--</div>--}}
                                <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="pl-7">نام و نام خانوادگی</th>
                                    <th>مسئولیت</th>
                                    <th>میزان سهام (درصد)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="pl-0 py-0">
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark mb-1">
                                                احسان روزبخش
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">
                                            <span class="label label-lg label-light-primary label-inline mt-1" >بازاریاب</span><br>
                                            <span class="label label-lg label-light-primary label-inline mt-1" >بخش فنی</span><br>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-nm fas fa-percent"></i>
                                                </span>
                                                </div>
                                                <input type="text" class="form-control" value="0">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-0">
                                        <div class="d-flex align-items-center">
                                            <div class="text-dark mb-1">
                                                مهدی مردانی
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark-75">
                                            <span class="label label-lg label-light-primary label-inline mt-1" >بازاریاب</span><br>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-nm fas fa-percent"></i>
                                                </span>
                                                </div>
                                                <input type="text" class="form-control" value="0">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::table-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

@endsection