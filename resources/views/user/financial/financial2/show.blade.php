@extends('user.master')
@section('title', 'اطلاعات مالی دو')
@section('content')
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
                                    <a href="#" class="text-muted">مالی 2</a>
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
                                <h3 class="card-label">اطلاعات مالی 2</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Example-->
                            <div class="example">
                                <div class="example-preview">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <!--<ul class="nav nav-tabs" id="myTab" role="tablist">-->
                                            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link active" id="development-tab" data-toggle="tab" href="#development-cost">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های توسعه</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="capacity-tab" data-toggle="tab" href="#capacity" aria-controls="lands">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">ظرفیت</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="material-tab" data-toggle="tab" href="#raw-material" aria-controls="office">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">مواد اولیه وبسته بندی برای یک واحد محصول</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="man-power-tab" data-toggle="tab" href="#man-power" aria-controls="facilities">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">نیروی انسانی مورد نیاز</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" aria-controls="transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">اجاره</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="energy-tab" data-toggle="tab" href="#energy-consumption" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">انرژی مصرفی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="rd-tab" data-toggle="tab" href="#rd">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های R&D</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="business-tab" data-toggle="tab" href="#business" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه های بارزگانی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="insurance-tab" data-toggle="tab" href="#insurance">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه بیمه</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="repair-tab" data-toggle="tab" href="#repair">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه تعمیر و نگهداری</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="transportation-tab" data-toggle="tab" href="#transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه حمل و نقل</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="warranty-tab" data-toggle="tab" href="#warranty">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه گارانتی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="consumer-item-tab" data-toggle="tab" href="#consumer-item">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">هزینه اقلام مصرفی</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="sale-service-tab" data-toggle="tab" href="#sale-service">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">درآمد خدمات پس از فروش</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item mb-2">
                                                    <a class="nav-link" id="information-tab" data-toggle="tab" href="#information">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                        <span class="nav-text">اطلاعات دیگر</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="tab-content mt-5" id="myTabContent">
                                                <div class="tab-pane fade active show" id="development-cost" role="tabpanel" aria-labelledby="development-tab">
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
                                                                                <th>شرح</th>
                                                                                <th>هزینه کل</th>
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
                                                <div class="tab-pane fade" id="capacity" role="tabpanel" aria-labelledby="capacity-tab">
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
                                                                                <th>ظرفیت اسمی در سال</th>
                                                                                <th>واحد</th>
                                                                                <th>درصد استفاده از ظرفیت اسمی</th>
                                                                                <th>تعداد تولید واقعی</th>
                                                                                <th>واحد</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="raw-material" role="tabpanel" aria-labelledby="material-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>میزان مصرف</th>
                                                                                <th>واحد</th>
                                                                                <th>قیمت واحد</th>
                                                                                <th>قیمت کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="man-power" role="tabpanel" aria-labelledby="man-power-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>تعداد</th>
                                                                                <th>حقوق ماهانه</th>
                                                                                <th>حقوق کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>متراژ</th>
                                                                                <th>اجاره ماهانه</th>
                                                                                <th>اجاره کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                    <!--end::Entry-->                                                </div>
                                                <div class="tab-pane fade" id="energy-consumption" role="tabpanel" aria-labelledby="energy-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>واحد</th>
                                                                                <th>مصرف سالیانه</th>
                                                                                <th>هزینه واحد</th>
                                                                                <th>هزینه سالیانه</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="rd" role="tabpanel" aria-labelledby="rd-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>هزینه سالیانه</th>
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
                                                <div class="tab-pane fade" id="business" role="tabpanel" aria-labelledby="business-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>هزینه سالیانه</th>
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
                                                <div class="tab-pane fade" id="insurance" role="tabpanel" aria-labelledby="insurance-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>درصد</th>
                                                                                <th>هزینه کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="repair" role="tabpanel" aria-labelledby="repair-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>درصد</th>
                                                                                <th>هزینه کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="transportation" role="tabpanel" aria-labelledby="transportation-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>تعداد</th>
                                                                                <th>هزینه واحد</th>
                                                                                <th>هزینه کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="warranty" role="tabpanel" aria-labelledby="warranty-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>درصد از فروش</th>
                                                                                <th>هزینه کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="consumer-item" role="tabpanel" aria-labelledby="consumer-item-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>تعداد</th>
                                                                                <th>هزینه واحد</th>
                                                                                <th>هزینه کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="sale-service" role="tabpanel" aria-labelledby="sale-service-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>شرح</th>
                                                                                <th>تعداد</th>
                                                                                <th>هزینه واحد</th>
                                                                                <th>هزینه کل</th>
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
                                                                                    <span class="text-dark-75">عبادی</span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="text-dark-75">عبادی</span>
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
                                                <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
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
                                                                            </span>افزودن
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
                                                                                <th>قیمت فروش</th>
                                                                                <th>میزان مالیات</th>
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
@endsection


