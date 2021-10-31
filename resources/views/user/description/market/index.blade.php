@extends('user.master')
@section('title', 'توضیحات - بازار')
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
                                <a href="#" class="text-muted">بازار</a>
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
                            <h3 class="card-label">بازار</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example">
                            <div class="example-preview">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                                            <li class="nav-item mb-2">
                                                <a class="nav-link active" id="market-tab" data-toggle="tab" href="#market">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">توضیحات اولیه</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="product-supply-and-demands-tab" data-toggle="tab" href="#product-supply-and-demands" aria-controls="lands">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">بررسی عرضه و تقاضای محصول</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="product-customers-tab" data-toggle="tab" href="#product-customers" aria-controls="office">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">مشتریان محصول</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="product-supply-chain-tab" data-toggle="tab" href="#product-supply-chain" aria-controls="facilities">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">زنجیره تامین محصول</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="environmental-effects-tab" data-toggle="tab" href="#environmental-effects" aria-controls="transportation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">تاثیرات محیطی</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="product-competitors-tab" data-toggle="tab" href="#product-competitors" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">رقبای محصول</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="strengths-tab" data-toggle="tab" href="#strengths">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">نقاط قوت</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="weak-points-tab" data-toggle="tab" href="#weak-points" aria-controls="operation">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">نقاط ضعف</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="opportunity-points-tab" data-toggle="tab" href="#opportunity-points">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">نقاط فرصت</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-2">
                                                <a class="nav-link" id="threats-tab" data-toggle="tab" href="#threats">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                    <span class="nav-text">نقاط تهدید</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="tab-content mt-5" id="myTabContent">
                                            <div class="tab-pane fade active show" id="market" role="tabpanel" aria-labelledby="market-tab">
                                                <!--begin::Entry-->
                                                <div class="d-flex flex-column-fluid">
                                                    <!--begin::Container-->
                                                    <div class="container">
                                                        <!--begin::Card-->
                                                        <div class="card card-custom gutter-b example example-compact">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <!--begin::Card-->
                                                                    <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">معرفی محصول</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">ویژگی های محصول</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">مزیت های رقابتی محصول</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">تجزیه و تحلیل موقعیت</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">استراتژی قیمت گذاری محصول</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">استراتژی بازاریابی محصول</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Card-->
                                                                </div>
                                                            </div>
                                                            <div class="card-footer d-flex flex-center">
                                                                <a class="btn btn-success font-weight-bolder">ویرایش اطلاعات</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Card-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="product-supply-and-demands" role="tabpanel" aria-labelledby="product-supply-and-demands-tab">
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
                                                                <!--begin::Table-->
                                                                <div class="table-responsive">
                                                                    <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                        <thead>
                                                                        <tr class="bg-gray-100 text-center">
                                                                            <th>سال</th>
                                                                            <th>تقاضای کل</th>
                                                                            <th>تولید داخل</th>
                                                                            <th>واردات</th>
                                                                            <th>واحد</th>
                                                                            <th>عملیات</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr class="text-center">
                                                                            <td>
                                                                                <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="text-dark-75">عبادی</span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
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
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::table-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="product-customers" role="tabpanel" aria-labelledby="product-customers-tab">
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
                                                                            <th>ویژگی مشتری</th>
                                                                            <th>مشتریان گروه اول</th>
                                                                            <th>مشتریان گروه دوم</th>
                                                                            <th>مشتریان گروه سوم</th>
                                                                            <th>مشتریان گروه چهارم</th>
                                                                            <th>عملیات</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
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
                                            <div class="tab-pane fade" id="product-supply-chain" role="tabpanel" aria-labelledby="product-supply-chain-tab">
                                                <!--begin::Entry-->
                                                <div class="d-flex flex-column-fluid">
                                                    <!--begin::Container-->
                                                    <div class="container">
                                                        <h5 style="text-align: center">تامین کننده مواد اولیه</h5>
                                                        <!--begin::table-->
                                                        <div class="card card-custom gutter-b">
                                                            <!--begin::Header-->
                                                            <div class="card-header border-0 py-5">
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
                                                                            <th>نام</th>
                                                                            <th>منطقه جغرافیایی</th>
                                                                            <th>عملیات</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
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
                                                        <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                        <h5 style="text-align: center">تولید کننده</h5>
                                                        <!--begin::table-->
                                                        <div class="card card-custom gutter-b">
                                                            <!--begin::Header-->
                                                            <div class="card-header border-0 py-5">
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
                                                                            <th>نام</th>
                                                                            <th>منطقه جغرافیایی</th>
                                                                            <th>عملیات</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
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
                                                        <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                        <h5 style="text-align: center">عرضه کننده</h5>
                                                        <!--begin::table-->
                                                        <div class="card card-custom gutter-b">
                                                            <!--begin::Header-->
                                                            <div class="card-header border-0 py-5">
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
                                                                            <th>نام</th>
                                                                            <th>منطقه جغرافیایی</th>
                                                                            <th>عملیات</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
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
                                                        <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                        <h5 style="text-align: center">خرده فروش</h5>
                                                        <!--begin::table-->
                                                        <div class="card card-custom gutter-b">
                                                            <!--begin::Header-->
                                                            <div class="card-header border-0 py-5">
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
                                                                            <th>نام</th>
                                                                            <th>منطقه جغرافیایی</th>
                                                                            <th>عملیات</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
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
                                            <div class="tab-pane fade" id="environmental-effects" role="tabpanel" aria-labelledby="environmental-effects-tab">
                                                <!--begin::Entry-->
                                                <div class="d-flex flex-column-fluid">
                                                    <!--begin::Container-->
                                                    <div class="container">
                                                        <!--begin::Card-->
                                                        <div class="card card-custom gutter-b example example-compact">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <!--begin::Card-->
                                                                    <div class="card card-custom gutter-b example example-compact" style="background-color:#eee">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">اقتصادی</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">اجتماعی</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">سیاسی</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
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
                                                                            <h3 class="card-title">محیط زیستی</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p style="white-space: pre"></p>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Card-->
                                                                </div>
                                                            </div>
                                                            <div class="card-footer d-flex flex-center">
                                                                <a class="btn btn-success font-weight-bolder">ویرایش اطلاعات</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Card-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="product-competitors" role="tabpanel" aria-labelledby="product-competitors-tab">
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
                                                            <!--begin::Table-->
                                                            <div class="table-responsive">
                                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                    <thead>
                                                                    <tr class="bg-gray-100 text-center">
                                                                        <th>نام رقیب</th>
                                                                        <th>منطقه جغرافیایی</th>
                                                                        <th>سهم از بازار</th>
                                                                        <th>ویژگی رقابتی</th>
                                                                        <th>نقطه ضعف</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="text-center">
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">عبادی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
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
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::table-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="strengths" role="tabpanel" aria-labelledby="strengths-tab">
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
                                                            <!--begin::Table-->
                                                            <div class="table-responsive">
                                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                    <thead>
                                                                    <tr class="bg-gray-100 text-center">
                                                                        <th>شرح</th>
                                                                        <th>وزن</th>
                                                                        <th>امتیاز</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="text-center">
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
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
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::table-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="weak-points" role="tabpanel" aria-labelledby="weak-points-tab">
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
                                                            <!--begin::Table-->
                                                            <div class="table-responsive">
                                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                    <thead>
                                                                    <tr class="bg-gray-100 text-center">
                                                                        <th>شرح</th>
                                                                        <th>وزن</th>
                                                                        <th>امتیاز</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="text-center">
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
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
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::table-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="opportunity-points" role="tabpanel" aria-labelledby="opportunity-points-tab">
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
                                                            <!--begin::Table-->
                                                            <div class="table-responsive">
                                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                    <thead>
                                                                    <tr class="bg-gray-100 text-center">
                                                                        <th>شرح</th>
                                                                        <th>وزن</th>
                                                                        <th>امتیاز</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="text-center">
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
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
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::table-->
                                                    </div>
                                                    <!--end::Container-->
                                                </div>
                                                <!--end::Entry-->
                                            </div>
                                            <div class="tab-pane fade" id="threats" role="tabpanel" aria-labelledby="threats-tab">
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
                                                            <!--begin::Table-->
                                                            <div class="table-responsive">
                                                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">
                                                                    <thead>
                                                                    <tr class="bg-gray-100 text-center">
                                                                        <th>شرح</th>
                                                                        <th>وزن</th>
                                                                        <th>امتیاز</th>
                                                                        <th>عملیات</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr class="text-center">
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-dark-75">استقلال ازادی جمهوری اسلامی</span>
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


