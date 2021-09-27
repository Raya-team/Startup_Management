<template>
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
                                        <div class="col-lg-2">
                                            <!--<ul class="nav nav-tabs" id="myTab" role="tablist">-->
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
                                        <div class="col-lg-10">
                                            <div class="tab-content mt-5" id="myTabContent">
                                                <div class="tab-pane fade active show" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <div class="col-xl-12">
                                                                <!--begin::List Widget 19-->
                                                                <div class="card card-custom card-stretch gutter-b">
                                                                    <!--begin::Header-->
                                                                    <div class="card-header border-0 pt-6 mb-2">
                                                                        <div class="card-toolbar">
                                                                            <!--<router-link :to="{ name: 'team-edit', params: { id: team.id }}">-->
                                                                            <a class="btn btn-light-success  btn-sm font-weight-bolder font-size-sm py-3 px-6">ویرایش</a>
                                                                            <!--</router-link>-->
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
                                                                                    <td class="w-40px align-middle pb-6 pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 align-middle w-150px pb-6">تعداد سال های طرح</td>
                                                                                    <td class="font-weight-bolder font-size-lg  text-dark-75 text-right align-middle pb-6">team project name</td>
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
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">قیمت روز دلار</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">بله</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pb-6 pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                                            <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">نرخ تورم</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">sdasd@asd.asd</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" fill="#000000" fill-rule="nonzero"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">وام (تومان)</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">098452</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                                                                                            <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>

                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">سود (درصد)</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">0954654</td>
                                                                                </tr>
                                                                                <!--end::Item-->  <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">بازپرداخت</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">عبادی</td>
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
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <div class="col-xl-12">
                                                                <!--begin::List Widget 19-->
                                                                <div class="card card-custom card-stretch gutter-b">
                                                                    <!--begin::Header-->
                                                                    <div class="card-header border-0 pt-6 mb-2">
                                                                        <div class="card-toolbar">
                                                                            <!--<router-link :to="{ name: 'team-edit', params: { id: team.id }}">-->
                                                                            <a class="btn btn-light-success  btn-sm font-weight-bolder font-size-sm py-3 px-6">ویرایش</a>
                                                                            <!--</router-link>-->
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
                                                                                    <td class="w-40px align-middle pb-6 pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 align-middle w-150px pb-6">تعداد سال های طرح</td>
                                                                                    <td class="font-weight-bolder font-size-lg  text-dark-75 text-right align-middle pb-6">team project name</td>
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
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">قیمت روز دلار</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">بله</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pb-6 pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                                            <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">نرخ تورم</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">sdasd@asd.asd</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" fill="#000000" fill-rule="nonzero"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">وام (تومان)</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">098452</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                                                                                            <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>

                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">سود (درصد)</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">0954654</td>
                                                                                </tr>
                                                                                <!--end::Item-->  <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">بازپرداخت</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">عبادی</td>
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
                                                    <!--begin::Entry-->
                                                    <div class="d-flex flex-column-fluid">
                                                        <!--begin::Container-->
                                                        <div class="container">
                                                            <div class="col-xl-12">
                                                                <!--begin::List Widget 19-->
                                                                <div class="card card-custom card-stretch gutter-b">
                                                                    <!--begin::Header-->
                                                                    <div class="card-header border-0 pt-6 mb-2">
                                                                        <div class="card-toolbar">
                                                                            <!--<router-link :to="{ name: 'team-edit', params: { id: team.id }}">-->
                                                                            <a class="btn btn-light-success  btn-sm font-weight-bolder font-size-sm py-3 px-6">ویرایش</a>
                                                                            <!--</router-link>-->
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
                                                                                    <td class="w-40px align-middle pb-6 pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                                                                                            <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 align-middle w-150px pb-6">تعداد سال های طرح</td>
                                                                                    <td class="font-weight-bolder font-size-lg  text-dark-75 text-right align-middle pb-6">team project name</td>
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
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">قیمت روز دلار</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">بله</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pb-6 pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                                                            <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">نرخ تورم</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">sdasd@asd.asd</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" fill="#000000" opacity="0.3"/>
                                                                                                            <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" fill="#000000" fill-rule="nonzero"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">وام (تومان)</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">098452</td>
                                                                                </tr>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
                                                                                                            <path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>

                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">سود (درصد)</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">0954654</td>
                                                                                </tr>
                                                                                <!--end::Item-->  <!--begin::Item-->
                                                                                <tr>
                                                                                    <td class="w-40px pl-0 pr-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40 symbol-light-dark align-middle">
                                                                                            <span class="symbol-label">
                                                                                                <span class="svg-icon svg-icon-lg svg-icon-dark">
                                                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                                                            <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
                                                                                                        </g>
                                                                                                    </svg>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </span>
                                                                                            </span>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                    </td>
                                                                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">بازپرداخت</td>
                                                                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">عبادی</td>
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
                                                <div class="tab-pane fade" id="lands" role="tabpanel" aria-labelledby="lands-tab">
                                                    <lands></lands>
                                                </div>
                                                <div class="tab-pane fade" id="buildings" role="tabpanel" aria-labelledby="buildings-tab">
                                                    <buildings></buildings>
                                                </div>
                                                <div class="tab-pane fade" id="machinery" role="tabpanel" aria-labelledby="machinery-tab">
                                                    <equipmentandmachineries></equipmentandmachineries>
                                                </div>
                                                <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                                                    <officeequipmentandsupplies></officeequipmentandsupplies>
                                                </div>
                                                <div class="tab-pane fade" id="facilities" role="tabpanel" aria-labelledby="facilities-tab">
                                                    <facilities></facilities>
                                                </div>
                                                <div class="tab-pane fade" id="transportation" role="tabpanel" aria-labelledby="transportation-tab">
                                                    <Transportations></Transportations>
                                                </div>
                                                <div class="tab-pane fade" id="operation" role="tabpanel" aria-labelledby="operation-tab">
                                                    <preoperatingcosts></preoperatingcosts>
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
    </div>
</template>

<script>

    export default {
        name: "index",
    }
</script>

<style scoped>

</style>