@extends('user.master')
@section('title', 'محاسبه سهام مشارکت')
@section('content')
    <router-view></router-view>
   {{-- <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام مشارکت</h5>
                    <!--end::Page Title-->
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
                        <div class="card-body">
                            <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">کل سرمایه لازم</h6></th>
                                                <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">تامین شده</h6></th>
                                                <th class="font-weight-bold text-muted text-uppercase"><h6 style="color: rgb(83 150 219)">مورد نیاز</h6></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="font-weight-bolder">
                                                <td class="font-size-h3 font-weight-boldest">100000</td>
                                                <td class="font-size-h3 font-weight-boldest">90000</td>
                                                <td class="text-danger font-size-h3 font-weight-boldest">10000</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <span class="card-label font-weight-bolder text-dark">تامین از موسسین و سرمایه گذران قبلی</span>
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
                                    <table id="myTable" class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                                        <thead>
                                        <tr class="bg-gray-100 text-center">
                                            <th>نام تامین کننده</th>
                                            <th>میزان سرمایه گذاری</th>
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
                                                <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                    <i class="flaticon2-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                    <i class="flaticon2-trash"></i>
                                                </button>
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
                                    <span class="card-label font-weight-bolder text-dark">تامین از سرمایه گذران جدید</span>
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
                                    <table id="myTable" class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                                        <thead>
                                        <tr class="bg-gray-100 text-center">
                                            <th>نام تامین کننده</th>
                                            <th>میزان سرمایه گذاری</th>
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
                                                <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                    <i class="flaticon2-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                    <i class="flaticon2-trash"></i>
                                                </button>
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
                                    <span class="card-label font-weight-bolder text-dark">جدول سهامداران</span>
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
                                    <table id="myTable" class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                                        <thead>
                                        <tr class="bg-gray-100 text-center">
                                            <th>نام سهامدار</th>
                                            <th>سمت</th>
                                            <th>درصد سهم</th>
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
    </div>
    <!--end::Entry-->--}}
@endsection

