@extends('user.master')
@section('title', 'محاسبه')
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
                                <a href="{{route('initial')}}" class="text-muted">سهام اولیه</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="{{route('calculations.index')}}" class="text-muted">محاسبه</a>
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
                    <div class="col-xl-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">سهام اولیه</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin::Example-->
                                <div class="example">
                                    <div class="example-preview">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="previous-tab" data-toggle="tab" href="#previous-investor">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-chat-1"></i>
                                                    </span>
                                                    <span class="nav-text">سرمایه گذاران قبلی</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="variables-tab" data-toggle="tab" href="#variables" aria-controls="profile">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-layers-1"></i>
                                                    </span>
                                                    <span class="nav-text">متغیرها</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="questions-tab" data-toggle="tab" href="#share_questions" aria-controls="contact">
                                                    <span class="nav-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="nav-text">سوالات</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-5" id="myTabContent">
                                            <div class="tab-pane fade active show" id="previous-investor" role="tabpanel" aria-labelledby="previous-tab">
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
                                                                            </span>افزودن سرمایه گذار قبلی
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
                                                                            <th>نام و نام خانوادگی</th>
                                                                            <th>درصد</th>
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
                                            <div class="tab-pane fade" id="variables" role="tabpanel" aria-labelledby="variables-tab">
                                                <!--begin::Entry-->
                                                <div class="d-flex flex-column-fluid">
                                                    <!--begin::Container-->
                                                    <div class="container">
                                                        <div class="col-xl-8">
                                                            <!--begin::List Widget 19-->
                                                            <div class="card card-custom card-stretch gutter-b">
                                                                <!--begin::Header-->
                                                                <div class="card-header border-0 pt-6 mb-2">
                                                                    <h3 class="card-title align-items-start flex-column">
                                                                        <span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3" style="color: red !important;">متغیر</span>
                                                                    </h3>
                                                                    <div class="card-toolbar">
                                                                        <span class="card-label font-weight-bold font-size-h4 text-dark-75 mb-3" style="color: red !important">وزن</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="card-body pt-2">
                                                                    <!--begin::Table-->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-borderless mb-0">
                                                                            <tbody>
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 align-middle w-150px pb-6">ایده</td>
                                                                                <td class="font-weight-bolder font-size-lg  text-dark-75 text-right align-middle pb-6">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">مباحث مالی</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6" >10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">تجربه</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">مسئولیت و ریسک</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">ایجاد و توسعه</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">جذب سرمایه گذار</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">مباحث مدیریتی</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">فروش</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <tr>
                                                                                <td class="w-40px pb-6 pl-0 pr-2">
                                                                                    <!--begin::Symbol-->
                                                                                    <div class="symbol symbol-40 symbol-light-dark align-middle">
                                            <span class="symbol-label">
                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M10.875,16.75 C10.6354167,16.75 10.3958333,16.6541667 10.2041667,16.4625 L8.2875,14.5458333 C7.90416667,14.1625 7.90416667,13.5875 8.2875,13.2041667 C8.67083333,12.8208333 9.29375,12.8208333 9.62916667,13.2041667 L10.875,14.45 L14.0375,11.2875 C14.4208333,10.9041667 14.9958333,10.9041667 15.3791667,11.2875 C15.7625,11.6708333 15.7625,12.2458333 15.3791667,12.6291667 L11.5458333,16.4625 C11.3541667,16.6541667 11.1145833,16.75 10.875,16.75 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                                                                    </div>
                                                                                    <!--end::Symbol-->
                                                                                </td>
                                                                                <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">تمام وقت بودن</td>
                                                                                <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">10</td>
                                                                            </tr>
                                                                            <!--end::Item-->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!--end::Table-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                            <!--end::List Widget 19-->
                                                        </div>
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="share_questions" role="tabpanel" aria-labelledby="questions-tab">
                                                <!--begin::Invoice Body-->
                                                <div class="position-relative">
                                                    <!--begin::Background Rows-->
                                                    <div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px" style="background-image: url(assets/media/svg/shapes/abstract-7.svg);"></div>
                                                    <div class="bg-white h-65px"></div>
                                                    <div class="bg-light h-65px"></div>
                                                    <div class="bg-white h-65px"></div>
                                                    <div class="bg-light h-65px"></div>
                                                    <!--end::Background Rows-->
                                                    <!--begin:Table-->
                                                    <div class="container position-absolute top-0 left-0 right-0">
                                                        <div class="row justify-content-center">
                                                            <div class="col-md-9">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr class="font-weight-boldest text-white h-65px">
                                                                            <td class="align-middle font-size-h4 text-center pl-0 border-0">سوالات</td>
                                                                            <td class="align-middle font-size-h4 text-center border-0">سهامداران</td>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                                                            <td class="align-middle text-center border-0">sdaasd</td>
                                                                            <td class="align-middle text-center border-0">
                                                                                <div>
                                                                                    <span class="label label-lg label-light-primary label-inline mt-1" >محمد مردانی</span>
                                                                                    <span class="label label-lg label-light-primary label-inline mt-1" >محمد مردانی</span>
                                                                                    <span class="label label-lg label-light-primary label-inline mt-1" >محمد مردانی</span>
                                                                                    <span class="label label-lg label-light-primary label-inline mt-1" >محمد مردانی</span>
                                                                                    <span class="label label-lg label-light-primary label-inline mt-1" >محمد مردانی</span>
                                                                                    <span class="label label-lg label-light-primary label-inline mt-1" >محمد مردانی</span>
                                                                                    <span class="label label-lg label-light-primary label-inline mt-1" >محمد مردانی</span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end:Table-->
                                                </div>
                                                <!--end::Invoice Body-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Example-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
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
