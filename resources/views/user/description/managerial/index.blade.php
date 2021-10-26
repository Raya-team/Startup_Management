@extends('user.master')
@section('title', 'توضیحات - مدیریتی')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">توضیحات</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <div class="text-muted">
                                <a class="text-muted">مدیریتی</a>
                            </div>
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
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <!--begin::Form-->
                        <form method="POST" action="{{route('description-managerial.store')}}" class="form" novalidate="novalidate" id="kt_login_signup_form">
                            @csrf
                            @include('errors')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">درباره تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">استقلال ازادی جمهوری اسلامی</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">چشم انداز تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">استقلال ازادی جمهوری اسلامی</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">ماموریت تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">استقلال ازادی جمهوری اسلامی</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">شایستگی‌های کلیدی تیم/شرکت</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">استقلال ازادی جمهوری اسلامی</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">اهداف</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">استقلال ازادی جمهوری اسلامی</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">بیان مساله</h3>
                                            </div>
                                            <div class="card-body">
                                                <p style="white-space: pre">استقلال ازادی جمهوری اسلامی</p>
                                            </div>
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button" style="margin-right: 788px;">ویرایش</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <!--begin::table-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">لیست استانداردها، گواهی‌ها و افتخارات کسب شده</span>
                                </h3>
                                <div class="card-toolbar my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="جستجو..." />
                                        <span>
                                <i class="flaticon2-search-1 text-muted"></i>
                            </span>
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <a class="btn btn-primary font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>افزودن
                                    </a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0 pb-3">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                        <thead>
                                        <tr class="bg-gray-100 text-center">
                                            <th>شرح</th>
                                            <th>سال اخذ</th>
                                            <th>توضیحات</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>
                                                <span class="text-dark-75">استقلال</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75">استقلال</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75">استقلال</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                    <i class="flaticon2-edit"></i>
                                                </a>
                                                <button type="button" @click="deleteShareholder(shareholder.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                    <i class="flaticon2-trash"></i>
                                                </button>
                                            </td>
                                            <hr/>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::table-->
                    </div>
                    <!--end::Card-->
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection


