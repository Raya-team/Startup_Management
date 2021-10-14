@extends('user.master')
@section('title', 'طرح توجیهی مقدماتی')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">طرح توجیهی مقدماتی</h5>
                        <!--end::Page Title-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <div class="card-toolbar">
                    <router-link :to="{ name: 'valuation-tangible-edit', params: { id: team_id } }">
                        <a class="btn btn-success font-weight-bolder">
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
                            </span>ویرایش اطلاعات
                        </a>
                    </router-link>
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
                    <div class="col-md-6">
                        <!--begin::table-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">مشخصات شرکت ثبت شده</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0 pb-3">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable">

                                        <thead>
                                        <tr class="bg-gray-100 text-center">
                                            <th>نام شرکت</th>
                                            <th>شماره ثبت</th>
                                            <th>تاریخ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>
                                                <span class="text-dark-75">استقلال</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75">123</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75">1400/7/3</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-750"></span>
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
                    <div class="col-md-6">
                        <!--begin::table-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">اطلاعات مدیر کسب وکار</span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0 pb-3">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable2">
                                        <thead>
                                        <tr class="bg-gray-100 text-center">
                                            <th>نام و نام خانوادگی</th>
                                            <th>شماره تماس</th>
                                            <th>ایمیل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="text-center">
                                            <td>
                                                <span class="text-dark-75">مهدی مردانی</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75">092388348</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75">mahdy</span>
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
                </div>
            </div>
            <!--end::Container-->
        </div>
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="col-md-12">
                    <!--begin::table-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">سوالات کسب و کار</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0 pb-3">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless" id="myTable3">
                                    <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>نام مرکز شتابدهنده/رشد</th>
                                        <th>تاریخ شروع رسمی کسب و کار</th>
                                        <th>آدرس محل فعالیت</th>
                                        <th>شماره تماس</th>
                                        <th>آدرس وب سایت</th>
                                        <th>نکته قابل توجه</th>
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
                                            <span class="text-dark-750">استقلال</span>
                                        </td>
                                        <td>
                                            <span class="text-dark-750">استقلال</span>
                                        </td>
                                        <td>
                                            <span class="text-dark-750">آدرس وبسایت خود را در صورت وجود بنویسید.گر نکته‌ قابل توجه‌ای وجود دارد که می‌خواهید سرمایه‌گذار بداند آن را در اینجا بنویسید.</span>
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
            </div>
            <!--end::Container-->
        </div>
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">نیاز</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">راه حل</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">رقبا</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">مزیت رقابتی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">بازار هدف</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">سطح آمادگی فناوری</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">بودجه مورد نیاز تقریبی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">درآمد تقریبی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">کل ایده تجاری شما به حل یک مشکل خاص متکی است، آن را به روشنی توصیف نماید. (هرچه کمی‌تر بهتر)</p>
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
                                <h3 class="card-title">عمر تکنولوژی(طرح)</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">عمر طرح مورد نظر چند سال است؟</p>
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
                                <h3 class="card-title">دلیل عدم  ایجاد/ توسعه طرح </h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">دانش‌فنی خود را به طور تقریبی چه میزان ارزیابی می‌کنید؟</p>
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
                                <h3 class="card-title">ارزش دانش فنی</h3>
                            </div>
                            <div class="card-body">
                                <p style="white-space: pre">دانش‌فنی خود را به طور تقریبی چه میزان ارزیابی می‌کنید؟</p>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::Entry-->
    </div>
@endsection

