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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات مالی</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <a class="text-muted">مالی 1</a>
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
                <!--begin::table-->
                <div class="card card-custom gutter-b col-xl-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">اطلاعات مالی 1</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <div class="example-preview">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            {{--<ul class="nav nav-tabs" id="myTab" role="tablist">--}}
                                            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">اطلاعات اولیه</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="lands-tab" data-toggle="tab" href="#lands" aria-controls="lands">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                        <span class="nav-text">زمین ها</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="buildings-tab" data-toggle="tab" href="#buildings" aria-controls="buildings">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                        <span class="nav-text">ساختمان ها</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="machinery-tab" data-toggle="tab" href="#machinery" aria-controls="machinery">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                        <span class="nav-text">تجهیزات و ماشین آلات فنی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="office-tab" data-toggle="tab" href="#office" aria-controls="office">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                        <span class="nav-text">تجهیزات و لوازم دفتری</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="facilities-tab" data-toggle="tab" href="#facilities" aria-controls="facilities">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                        <span class="nav-text">تاسیسات</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="transportation-tab" data-toggle="tab" href="#transportation" aria-controls="transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                        <span class="nav-text">وسایل حمل و نقل</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="operation-tab" data-toggle="tab" href="#operation" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های قبل بهره برداری</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="tab-content mt-5" id="myTabContent">
                                                <div class="tab-pane fade active show" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                                    اطلاعات اولیه
                                                </div>
                                                <div class="tab-pane fade" id="lands" role="tabpanel" aria-labelledby="lands-tab">
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <!--begin::table-->
                                                            <div class="card card-custom gutter-b">
                                                                <!--begin::Header-->
                                                                <div class="card-header border-0 py-5">
                                                                    <div class="card-toolbar my-2 my-md-0">
                                                                        <div class="input-icon">
                                                                            {{--<input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />--}}
                                                                            <input type="text" class="form-control" placeholder="جستجو..." />
                                                                            <span>
                                                                                <i class="flaticon2-search-1 text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-toolbar">
                                                                        {{--<router-link :to="{ name: 'shareholders-create' }">--}}
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
                                                                            </span>افزودن سهامدار جدید
                                                                        </a>
                                                                        {{--</router-link>--}}
                                                                    </div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-0 pb-3">
                                                                    <!--begin::Table-->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                            {{--<div class="d-flex align-items-center" v-if="progress">--}}
                                                                            {{--<div class="mr-2 text-muted">لطفا صبر کنید...</div>--}}
                                                                            {{--<div class="spinner mr-10"></div>--}}
                                                                            {{--</div>--}}
                                                                            {{--<thead v-else>--}}
                                                                            <thead>
                                                                            <tr class="bg-gray-100 text-center">
                                                                                <th>ردیف</th>
                                                                                <th>شرح</th>
                                                                                <th>مساحت (متر مربع)</th>
                                                                                <th>قیمت کل (تومان)</th>
                                                                                <th>عملیات</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            {{--<tr v-for="(shareholder, index) in shareholdersFilter" :id="'del'+shareholder.id" :key="index" class="text-center">--}}
                                                                            <tr class="text-center">
                                                                                <td>
                                                                                    <span class="text-dark-75">1</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">78</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-750">700,000</span>
                                                                                </td>
                                                                                <td>
                                                                                    {{--<router-link :to="{ name: 'shareholders-edit', params: { id: shareholder.id }}">--}}
                                                                                    <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                                                        <i class="flaticon2-edit"></i>
                                                                                    </a>
                                                                                    {{--</router-link>--}}
                                                                                    {{--<button type="button" @click="deleteShareholder(shareholder.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">--}}
                                                                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                                                        {{--<i class="flaticon2-trash" :id="'icon'+shareholder.id"></i>--}}
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
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Entry-->
                                                </div>
                                                <div class="tab-pane fade" id="buildings" role="tabpanel" aria-labelledby="buildings-tab">
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <!--begin::table-->
                                                            <div class="card card-custom gutter-b">
                                                                <!--begin::Header-->
                                                                <div class="card-header border-0 py-5">
                                                                    <div class="card-toolbar my-2 my-md-0">
                                                                        <div class="input-icon">
                                                                            {{--<input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />--}}
                                                                            <input type="text" class="form-control" placeholder="جستجو..." />
                                                                            <span>
                                                                                <i class="flaticon2-search-1 text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-toolbar">
                                                                        {{--<router-link :to="{ name: 'shareholders-create' }">--}}
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
                                                                            </span>افزودن سهامدار جدید
                                                                        </a>
                                                                        {{--</router-link>--}}
                                                                    </div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-0 pb-3">
                                                                    <!--begin::Table-->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                            {{--<div class="d-flex align-items-center" v-if="progress">--}}
                                                                            {{--<div class="mr-2 text-muted">لطفا صبر کنید...</div>--}}
                                                                            {{--<div class="spinner mr-10"></div>--}}
                                                                            {{--</div>--}}
                                                                            {{--<thead v-else>--}}
                                                                            <thead>
                                                                            <tr class="bg-gray-100 text-center">
                                                                                <th>ردیف</th>
                                                                                <th>شرح</th>
                                                                                <th>مساحت (متر مربع)</th>
                                                                                <th>قیمت کل (تومان)</th>
                                                                                <th>عملیات</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            {{--<tr v-for="(shareholder, index) in shareholdersFilter" :id="'del'+shareholder.id" :key="index" class="text-center">--}}
                                                                            <tr class="text-center">
                                                                                <td>
                                                                                    <span class="text-dark-75">1</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">78</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-750">700,000</span>
                                                                                </td>
                                                                                <td>
                                                                                    {{--<router-link :to="{ name: 'shareholders-edit', params: { id: shareholder.id }}">--}}
                                                                                    <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                                                        <i class="flaticon2-edit"></i>
                                                                                    </a>
                                                                                    {{--</router-link>--}}
                                                                                    {{--<button type="button" @click="deleteShareholder(shareholder.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">--}}
                                                                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                                                        {{--<i class="flaticon2-trash" :id="'icon'+shareholder.id"></i>--}}
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
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Entry-->
                                                </div>
                                                <div class="tab-pane fade" id="machinery" role="tabpanel" aria-labelledby="machinery-tab">
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <!--begin::table-->
                                                            <div class="card card-custom gutter-b">
                                                                <!--begin::Header-->
                                                                <div class="card-header border-0 py-5">
                                                                    <div class="card-toolbar my-2 my-md-0">
                                                                        <div class="input-icon">
                                                                            {{--<input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />--}}
                                                                            <input type="text" class="form-control" placeholder="جستجو..." />
                                                                            <span>
                                                                                <i class="flaticon2-search-1 text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-toolbar">
                                                                        {{--<router-link :to="{ name: 'shareholders-create' }">--}}
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
                                                                            </span>افزودن سهامدار جدید
                                                                        </a>
                                                                        {{--</router-link>--}}
                                                                    </div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-0 pb-3">
                                                                    <!--begin::Table-->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                            {{--<div class="d-flex align-items-center" v-if="progress">--}}
                                                                            {{--<div class="mr-2 text-muted">لطفا صبر کنید...</div>--}}
                                                                            {{--<div class="spinner mr-10"></div>--}}
                                                                            {{--</div>--}}
                                                                            {{--<thead v-else>--}}
                                                                            <thead>
                                                                            <tr class="bg-gray-100 text-center">
                                                                                <th>ردیف</th>
                                                                                <th>شرح</th>
                                                                                <th>مساحت (متر مربع)</th>
                                                                                <th>قیمت کل (تومان)</th>
                                                                                <th>عملیات</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            {{--<tr v-for="(shareholder, index) in shareholdersFilter" :id="'del'+shareholder.id" :key="index" class="text-center">--}}
                                                                            <tr class="text-center">
                                                                                <td>
                                                                                    <span class="text-dark-75">1</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">78</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-750">700,000</span>
                                                                                </td>
                                                                                <td>
                                                                                    {{--<router-link :to="{ name: 'shareholders-edit', params: { id: shareholder.id }}">--}}
                                                                                    <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                                                        <i class="flaticon2-edit"></i>
                                                                                    </a>
                                                                                    {{--</router-link>--}}
                                                                                    {{--<button type="button" @click="deleteShareholder(shareholder.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">--}}
                                                                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                                                        {{--<i class="flaticon2-trash" :id="'icon'+shareholder.id"></i>--}}
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
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Entry-->
                                                </div>
                                                <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <!--begin::table-->
                                                            <div class="card card-custom gutter-b">
                                                                <!--begin::Header-->
                                                                <div class="card-header border-0 py-5">
                                                                    <div class="card-toolbar my-2 my-md-0">
                                                                        <div class="input-icon">
                                                                            {{--<input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />--}}
                                                                            <input type="text" class="form-control" placeholder="جستجو..." />
                                                                            <span>
                                                                                <i class="flaticon2-search-1 text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-toolbar">
                                                                        {{--<router-link :to="{ name: 'shareholders-create' }">--}}
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
                                                                            </span>افزودن سهامدار جدید
                                                                        </a>
                                                                        {{--</router-link>--}}
                                                                    </div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-0 pb-3">
                                                                    <!--begin::Table-->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                            {{--<div class="d-flex align-items-center" v-if="progress">--}}
                                                                            {{--<div class="mr-2 text-muted">لطفا صبر کنید...</div>--}}
                                                                            {{--<div class="spinner mr-10"></div>--}}
                                                                            {{--</div>--}}
                                                                            {{--<thead v-else>--}}
                                                                            <thead>
                                                                            <tr class="bg-gray-100 text-center">
                                                                                <th>ردیف</th>
                                                                                <th>شرح</th>
                                                                                <th>مساحت (متر مربع)</th>
                                                                                <th>قیمت کل (تومان)</th>
                                                                                <th>عملیات</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            {{--<tr v-for="(shareholder, index) in shareholdersFilter" :id="'del'+shareholder.id" :key="index" class="text-center">--}}
                                                                            <tr class="text-center">
                                                                                <td>
                                                                                    <span class="text-dark-75">1</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">78</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-750">700,000</span>
                                                                                </td>
                                                                                <td>
                                                                                    {{--<router-link :to="{ name: 'shareholders-edit', params: { id: shareholder.id }}">--}}
                                                                                    <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                                                        <i class="flaticon2-edit"></i>
                                                                                    </a>
                                                                                    {{--</router-link>--}}
                                                                                    {{--<button type="button" @click="deleteShareholder(shareholder.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">--}}
                                                                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                                                        {{--<i class="flaticon2-trash" :id="'icon'+shareholder.id"></i>--}}
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
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Entry-->
                                                </div>
                                                <div class="tab-pane fade" id="facilities" role="tabpanel" aria-labelledby="facilities-tab">
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <!--begin::table-->
                                                            <div class="card card-custom gutter-b">
                                                                <!--begin::Header-->
                                                                <div class="card-header border-0 py-5">
                                                                    <div class="card-toolbar my-2 my-md-0">
                                                                        <div class="input-icon">
                                                                            {{--<input type="text" v-model="filterText" class="form-control" placeholder="جستجو..." />--}}
                                                                            <input type="text" class="form-control" placeholder="جستجو..." />
                                                                            <span>
                                                                                <i class="flaticon2-search-1 text-muted"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-toolbar">
                                                                        {{--<router-link :to="{ name: 'shareholders-create' }">--}}
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
                                                                            </span>افزودن سهامدار جدید
                                                                        </a>
                                                                        {{--</router-link>--}}
                                                                    </div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-0 pb-3">
                                                                    <!--begin::Table-->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                            {{--<div class="d-flex align-items-center" v-if="progress">--}}
                                                                            {{--<div class="mr-2 text-muted">لطفا صبر کنید...</div>--}}
                                                                            {{--<div class="spinner mr-10"></div>--}}
                                                                            {{--</div>--}}
                                                                            {{--<thead v-else>--}}
                                                                            <thead>
                                                                            <tr class="bg-gray-100 text-center">
                                                                                <th>ردیف</th>
                                                                                <th>شرح</th>
                                                                                <th>مساحت (متر مربع)</th>
                                                                                <th>قیمت کل (تومان)</th>
                                                                                <th>عملیات</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            {{--<tr v-for="(shareholder, index) in shareholdersFilter" :id="'del'+shareholder.id" :key="index" class="text-center">--}}
                                                                            <tr class="text-center">
                                                                                <td>
                                                                                    <span class="text-dark-75">1</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">78</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-750">700,000</span>
                                                                                </td>
                                                                                <td>
                                                                                    {{--<router-link :to="{ name: 'shareholders-edit', params: { id: shareholder.id }}">--}}
                                                                                    <a href="#" class="btn btn-icon btn-light-success btn-sm mr-2">
                                                                                        <i class="flaticon2-edit"></i>
                                                                                    </a>
                                                                                    {{--</router-link>--}}
                                                                                    {{--<button type="button" @click="deleteShareholder(shareholder.id, index)"  class="btn btn-icon btn-light-danger btn-sm mr-2">--}}
                                                                                    <button type="button" class="btn btn-icon btn-light-danger btn-sm mr-2">
                                                                                        {{--<i class="flaticon2-trash" :id="'icon'+shareholder.id"></i>--}}
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
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Entry-->
                                                </div>
                                                <div class="tab-pane fade" id="transportation" role="tabpanel" aria-labelledby="transportation-tab">وسایل حمل و نقل</div>
                                                <div class="tab-pane fade" id="operation" role="tabpanel" aria-labelledby="operation-tab">هزینه های قبل بهره برداری</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Example-->
                        </div>
                    </div>
                </div>
                <!--end::table-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

@endsection

@section('script')
    <script>
        $('#myTab a[href="#contact"]').tab('show');
    </script>
@endsection

@section('css')
    <style>
        /*.flex-column{*/
            /*border-left: 2px solid #E4E6EF;*/
        /*}*/
        @media (min-width: 1170px) {
            .flex-column {
                border-left: 2px solid #E4E6EF;
            }
        }
        @media (max-width: 1170px) {
            .flex-column {
                border-bottom: 2px solid #E4E6EF;
            }
        }
    </style>
@endsection