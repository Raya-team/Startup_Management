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
                            <a class="text-muted">مدیریتی</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a class="text-muted">ایجاد</a>
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
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">تجربه تجاری سازی</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">مدیریت عمومی</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">مدیریت عملکردی</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">فروش و پشتیبانی فنی</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->
                                <!--begin::Wizard Step 5 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">نقدینگی و دسترسی به سرمایه</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 5 Nav-->
                                <!--begin::Wizard Step 6 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">جایگاه رقابتی</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 6 Nav-->
                                <!--begin::Wizard Step 7 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">دانش (شناخت) مشتری</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 7 Nav-->
                                <!--begin::Wizard Step 8 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">تعهد مشتری (مشتری های سازمانی و عمده)</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 8 Nav-->
                                <!--begin::Wizard Step 9 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">مقرون به صرفه بودن</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 9 Nav-->
                                <!--begin::Wizard Step 10 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">مدیریت مالکیت معنوی</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 10 Nav-->
                                <!--begin::Wizard Step 11 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">پیش بینی فروش</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 11 Nav-->
                                <!--begin::Wizard Step 12 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">پیش بینی عدم اطمینان</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 12 Nav-->
                                <!--begin::Wizard Step 13 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">زنجیره تامین</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 13 Nav-->
                                <!--begin::Wizard Step 14 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">قوانین</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 14 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin: Wizard Form-->
                            <div class="row">
                                <div class="col-xxl-12">
                                    <form class="form" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 1-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 4-->
                                        <!--begin: Wizard Step 5-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 5-->
                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 6-->
                                        <!--begin: Wizard Step 7-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 7-->
                                        <!--begin: Wizard Step 8-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 8-->
                                        <!--begin: Wizard Step 9-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 9-->
                                        <!--begin: Wizard Step 10-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-vertical-center" id="myTable1">
                                                    <thead>
                                                    <tr class="bg-gray-100">
                                                        <th class="text-left">ردیف</th>
                                                        <th class="text-center">سوال</th>
                                                        <th class="text-left">پاسخ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">1</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر در حال توسعه محصول در اوقات فراغت است. مبتکر دارای اشتغال اولیه‌ای است که توسعه این محصول را شامل نمی‌شود.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">2</span></td>
                                                        <td><span class="text-dark-75">مبتکر منابع شخصی قابل توجهی را در توسعه محصول سرمایه‌گذاری کرده است.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td>
                                                            <span class="text-dark-75">3</span>
                                                        </td>
                                                        <td>
                                                            <span class="text-dark-75">مبتکر یک شرکت بر ای توسعه محصول تاسیس کرده است. اولویت اول استخدام مبتکر، برای ساختن کسب و کار است.</span>
                                                        </td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">4</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی متفاوت با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">5</span></td>
                                                        <td><span class="text-dark-75">اگر سطوح بالاتر اعمال نشوند، مبتکر و یا مدیر عمومی او، حداقل تجربه تجاری سازی محصول جدیدی مشابه با محصول درحال توسعه را دارند.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">6</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را در TRL6 یا بالاتر به ثبت رسانده است. کمتر از 10% درآمد شرکت از فروش آن محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">7</span></td>
                                                        <td><span class="text-dark-75">کسب و کار حداقل یک محصول را درTRL 7 بالاتر به ثبت رسانده است. بیش از 10% درآمد شرکت از فروش محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">8</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده محصولات جدید با تجربه، با حداقل تجاری سازی یک محصول مهم است. بیش از 25 درصد درآمد شرکت از فروش این محصول حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #fdff9338" class="text-left">
                                                        <td><span class="text-dark-75">9</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، یک توسعه دهنده باثبات محصولات جدید، با موفقیت چندین محصول جدید تجاری در 5 سال گذشته است. بیش از 50 درصد درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td><span class="text-dark-75">10</span></td>
                                                        <td><span class="text-dark-75">کسب و کار، به طور مداوم در حال توسعه محصولات جدید، با چندین موفقیت تجاری جدید در هر سال است. بیش از 75% درآمد شرکت از فروش این محصولات حاصل می‌شود.</span></td>
                                                        <td>
                                                            <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                                <input type="checkbox" name="Checkboxes16">
                                                                <span></span></label>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end: Wizard Step 10-->
                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">قبلی</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit"
                                                        id="kt_login_singin_form_submit_button" @click="onSubmit">ثبت</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">بعدی</button>
                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                </div>
                                <!--end: Wizard-->
                            </div>
                            <!--end: Wizard Form-->
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->>
@endsection

<script>
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "create",
        data() {
            return {
                data: {
                    commercialization: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    public_management: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    functional_management: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    sale_and_technical_support: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    liquidity_and_access_to_capital: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    competitive_position: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    customer_recognition: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    customer_commitment: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    affordable: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    intellectual_property_management: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    sale_forecast: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    uncertainty_prediction_questions: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    supply_chain: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},
                    rule: {q1: false, q2: false, q3: false, q4: false, q5: false, q6: false, q7: false, q8: false, q9: false, q10: false},

                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            import('../../../wizard')
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/business-questions', this.data)
                    .then(response => {
                        if (response.status == 201){
                            Swal.fire({
                                title: "اطلاعات با موفقیت ثبت شد.",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'business-questions-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
        },
    }
</script>

<style scoped>
    .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-title{
        font-weight: 600
    }
    .wizard.wizard-2 .wizard-nav{
        -webkit-box-flex: 0;
        flex: 0 0 400px;
        width: 400px;
        max-width: 50%;
    }
    .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current]{
        background-color: #509eff45;
        -webkit-transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, -webkit-box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease;
        transition: color 0.15s ease, background-color 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease, -webkit-box-shadow 0.15s ease;
    }
    .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step[data-wizard-state=current]:after{
        left: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        content: " ";
        height: 0;
        width: 0;
        border: solid transparent;
        position: absolute;
        border-left-color: #509eff45;
        border-width: 1rem;
    }
</style>