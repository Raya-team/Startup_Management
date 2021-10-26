@extends('user.master')
@section('title', 'توضیحات - فنی')
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
                                <a class="text-muted">فنی</a>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                            <div class="card-header">
                                                <h3 class="card-title">معرفی محصول</h3>
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
                                                <h3 class="card-title">مشخصات فنی</h3>
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
                                                <h3 class="card-title">مبانی علمی</h3>
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
                                <a class="btn btn-success font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                    </span> ویرایش اطلاعات
                                </a>
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
                                    <span class="card-label font-weight-bolder text-dark">لیست مجوزها و گواهی‌نامه‌های موردنیاز</span>
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
                                    <a class="btn btn-success font-weight-bolder">ویرایش اطلاعات</a>
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
                                            <th>اخذ شده؟</th>
                                            <th>نوع</th>
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
                                                <span class="text-dark-75">اجباری</span>
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



