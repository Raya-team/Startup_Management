<template>
    <div>
        <div class="row">
            <!--begin::Entry-->
            <div class="col-md-6">
                <!--begin::List Widget 19-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <!--<div class="card-header border-0 pt-6 mb-2">
                        <div class="card-toolbar">
                            &lt;!&ndash;<router-link :to="{ name: 'team-edit', params: { id: team.id }}">&ndash;&gt;
                            &lt;!&ndash;<a class="btn btn-light-success  btn-sm font-weight-bolder font-size-sm py-3 px-6">ویرایش</a>&ndash;&gt;
                            &lt;!&ndash;</router-link>&ndash;&gt;
                        </div>
                    </div>-->
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
                                    <td class="font-size-lg font-weight-bolder text-dark-75 align-middle w-150px pb-6">تعداد سال های طرح</td>
                                    <td class="font-weight-bolder font-size-lg  text-dark-75 text-right align-middle pb-6">{{ number_of_plan_year }}</td>
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
                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">{{ dollar }}</td>
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
                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle pb-6">نرخ تورم</td>
                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle pb-6">{{ inflation }}</td>
                                </tr>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <tr>
                                    <td class="w-40px pl-0 pr-2">
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
                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">وام (تومان)</td>
                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">{{ loan }}</td>
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
            <!--end::Entry-->
            <!--begin::Entry-->
            <div class="col-md-6">
                <!--begin::List Widget 19-->
                <div class="card card-custom card-stretch gutter-b">

                    <!--begin::Header-->
                    <!--<div class="card-header border-0 pt-6 mb-2">
                        <div class="card-toolbar">
                            &lt;!&ndash;<router-link :to="{ name: 'team-edit', params: { id: team.id }}">&ndash;&gt;
                            <h4 style="color: red;">میزان استهلاک</h4>
                            &lt;!&ndash;</router-link>&ndash;&gt;
                        </div>
                    </div>-->
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Table-->
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <tbody>
                                <!--begin::Item-->
                                <tr>
                                    <td class="w-40px pl-0 pr-2">
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
                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">سود (درصد)</td>
                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">{{ profit }}</td>
                                </tr>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <tr>
                                    <td class="w-40px pl-0 pr-2">
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
                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">بازپرداخت</td>
                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">{{ reimbursement }}</td>
                                </tr>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <tr>
                                    <td class="w-40px pl-0 pr-2">
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
                                    <td class="font-size-lg font-weight-bolder text-dark-75 w-150px align-middle">نوع محل اجرا</td>
                                    <td class="font-weight-bolder font-size-lg text-dark-75 text-right align-middle">{{ type }}</td>
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
            <!--end::Entry-->
        </div>
        <div class="card-body pt-0 pb-3">
            <div class="card card-custom gutter-b">
                <!--begin::Invoice Body-->
                <div class="position-relative">
                    <!--begin::Background Rows-->
                    <div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px" style="background-image: url(assets/media/svg/shapes/abstract-7.svg);"></div>
                    <div>
                        <div class="bg-white h-65px"></div>
                        <div class="bg-light h-65px"></div>
                        <div class="bg-white h-65px"></div>
                        <div class="bg-light h-65px"></div>
                    </div>
                    <!--end::Background Rows-->
                    <!--begin:Table-->
                    <div class="container position-absolute top-0 left-0 right-0">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr class="font-weight-boldest text-white h-65px">
                                            <td class="align-middle font-size-h4 text-center pl-0 border-0">سوالات</td>
                                            <td class="align-middle font-size-h4 text-center border-0">تعداد روز</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">تعداد روزی که طول می کشد مواد اولیه خریداری شود</td>
                                            <td class="align-middle text-center border-0">{{ number_of_day_1 }} روز</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">تعداد روزی که طول می کشد مواد اولیه تبدیل به محصول شود</td>
                                            <td class="align-middle text-center border-0">{{ number_of_day_2 }} روز</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">تعداد روزی که طول می کشد محصول به فروش برسد</td>
                                            <td class="align-middle text-center border-0">{{ number_of_day_3 }} روز</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">تعداد روزی که طول می کشد مطالبات فروش محصول وصول شود</td>
                                            <td class="align-middle text-center border-0">{{ number_of_day_4 }} روز</td>
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
        <div class="card-body pt-0 pb-3">
            <div class="card card-custom gutter-b">
                <!--begin::Invoice Body-->
                <div class="position-relative">
                    <!--begin::Background Rows-->
                    <div class="bgi-size-cover bgi-position-center bgi-no-repeat h-65px" style="background-image: url(assets/media/svg/shapes/abstract-10.svg);"></div>
                    <div>
                        <div class="bg-white h-65px"></div>
                        <div class="bg-light h-65px"></div>
                        <div class="bg-white h-65px"></div>
                        <div class="bg-light h-65px"></div>
                        <div class="bg-white h-65px"></div>
                        <div class="bg-light h-65px"></div>
                    </div>
                    <!--end::Background Rows-->
                    <!--begin:Table-->
                    <div class="container position-absolute top-0 left-0 right-0">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr class="font-weight-boldest text-white h-65px">
                                            <td class="align-middle font-size-h4 text-center pl-0 border-0">عنوان</td>
                                            <td class="align-middle font-size-h4 text-center border-0">میزان</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">میزان استهلاک مستغلات</td>
                                            <td class="align-middle text-center border-0">{{ depreciation_rate_1 }} %</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">میزان استهلاک ماشین آلات و تجهیزات فنی</td>
                                            <td class="align-middle text-center border-0">{{ depreciation_rate_2 }} %</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">میزان استهلاک تجهیزات دفتری</td>
                                            <td class="align-middle text-center border-0">{{ depreciation_rate_3 }} %</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">میزان استهلاک تاسیسات</td>
                                            <td class="align-middle text-center border-0">{{ depreciation_rate_4 }} %</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">میزان استهلاک وسایل حمل و نقل</td>
                                            <td class="align-middle text-center border-0">{{ depreciation_rate_5 }} %</td>
                                        </tr>
                                        <tr class="font-size-lg font-weight-bolder h-65px">
                                            <td class="align-middle text-center border-0">میزان استهلاک تجهیزات آزمایشگاهی</td>
                                            <td class="align-middle text-center border-0">{{ depreciation_rate_6 }} %</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-center pt-5" id="kt_sticky_toolbar_chat_toggler_2" data-placement="right">
                        <router-link :to="{name: 'basic-information-edit', params: { id: team_id }}">
                            <a class="btn btn-success font-weight-bolder font-size-sm py-3 px-14">ویرایش اطلاعات</a>
                        </router-link>
                    </div>
                    <!--end:Table-->
                </div>
                <!--end::Invoice Body-->
            </div>
        </div>
    </div>
</template>

<script>
    import Auth from "../../../../Auth";

    export default {
        name: "index",
        data() {
            return {
                team_id: '',
                number_of_plan_year: '',
                dollar: '',
                inflation: '',
                loan: '',
                profit: '',
                type: '',
                reimbursement: '',
                number_of_day_1: '',
                number_of_day_2: '',
                number_of_day_3: '',
                number_of_day_4: '',
                depreciation_rate_1: '',
                depreciation_rate_2: '',
                depreciation_rate_3: '',
                depreciation_rate_4: '',
                depreciation_rate_5: '',
                depreciation_rate_6: '',
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/financial1')
                .then(response => {
                    this.team_id = response.data.team_id;
                    this.number_of_plan_year = response.data.year.number_of_plan_year;
                    this.dollar = response.data.fiscal.dollar;
                    this.inflation = response.data.fiscal.inflation;
                    this.loan = response.data.fiscal.loan;
                    this.profit = response.data.fiscal.profit;
                    this.reimbursement = response.data.fiscal.reimbursement;
                    this.type = response.data.type.type.type;
                    this.number_of_day_1 = response.data.count_day.question_1;
                    this.number_of_day_2 = response.data.count_day.question_2;
                    this.number_of_day_3 = response.data.count_day.question_3;
                    this.number_of_day_4 = response.data.count_day.question_4;
                    this.depreciation_rate_1 = response.data.depreciation.question_1;
                    this.depreciation_rate_2 = response.data.depreciation.question_2;
                    this.depreciation_rate_3 = response.data.depreciation.question_3;
                    this.depreciation_rate_4 = response.data.depreciation.question_4;
                    this.depreciation_rate_5 = response.data.depreciation.question_5;
                    this.depreciation_rate_6 = response.data.depreciation.question_6;

                })
                .catch(error => console.log(error));
        },
    }
</script>

<style scoped>

</style>