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
                            <a class="text-muted">بازار</a>
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
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10" style="max-width: 35% !important;">
                            <div class="wizard-steps">
                                <!--begin::Wizard Step 1 Nav-->
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
                                            <h3 class="wizard-title">بررسی عرضه و تقاضای محصول</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">مشتریان محصول</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">زنجیره تامین محصول</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->
                                <!--begin::Wizard Step 5 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">تاثیرات محیطی</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 5 Nav-->
                                <!--begin::Wizard Step 6 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">رقبای محصول</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 6 Nav-->
                                <!--begin::Wizard Step 7 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">نقاط قوت</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 7 Nav-->
                                <!--begin::Wizard Step 8 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">نقاط ضعف</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 8 Nav-->
                                <!--begin::Wizard Step 9 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">نقاط فرصت</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 9 Nav-->
                                <!--begin::Wizard Step 10 Nav-->
                                <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-wrapper">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">نقاط تهدید</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 10 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                            <!--begin: Wizard Form-->
                            <div class="row">
                                <div class="col-xxl-12">
                                    <form method="POST" action="{{route('description-market.store')}}" class="form" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <div class="card-body">
                                                <h5 class="text-dark font-weight-bold">معرفی محصول</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="product_introduction" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">ویژگی های محصول</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="Product_features" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">مزیت های رقابتی محصول</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="Product_competitive_advantages" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">تجزیه و تحلیل موقعیت</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="position_analysis" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">استراتژی قیمت گذاری محصول</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="product_pricing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">استراتژی بازاریابی محصول</h5>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="product_marketing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 1-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="form-group row">
                                                <div id="kt_repeater_1">
                                                    <div data-repeater-list="product" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="row">
                                                                <div class="form-group row">
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control products" name="year" value="{{ old('year')}}" placeholder="سال" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <input type="text" class="form-control products" name="general_request" value="{{ old('general_request')}}" placeholder="تقاضای کل" required />
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control products" name="domestic_production" value="{{ old('domestic_production')}}" placeholder="تولید داخل" required />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control products" name="importation" value="{{ old('importation') }}" placeholder="واردات" required />
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <select name="unit" class="form-control">
                                                                            <option value="">تن</option>
                                                                            <option value="">کیلوگرم</option>
                                                                            <option value="">عدد</option>
                                                                            <option value="">متر</option>
                                                                            <option value="">نفر</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group row">
                                                                    <div class="col-md-12">
                                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                            <i class="la la-trash-o"></i>حذف</a>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row" style="margin-right: 10px">
                                                                    <div class="col-md-12">
                                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                                            <i class="la la-plus"></i>افزودن</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                        id="kt_login_singin_form_submit_button">ثبت</button>
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

@section('script')
    <script>
        "use strict";

        // Class definition
        var KTWizard2 = function () {
            // Base elements
            var _wizardEl;
            var _formEl;
            var _wizardObj;
            var _validations = [];

            // Private functions
            var _initWizard = function () {
                // Initialize form wizard
                _wizardObj = new KTWizard(_wizardEl, {
                    startStep: 1, // initial active step number
                    clickableSteps: true // to make steps clickable this set value true and add data-wizard-clickable="true" in HTML for class="wizard" element
                });

                // Validation before going to next page
                _wizardObj.on('change', function (wizard) {
                    if (wizard.getStep() > wizard.getNewStep()) {
                        return; // Skip if stepped back
                    }

                    // Validate form before change wizard step
                    var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

                    if (validator) {
                        validator.validate().then(function (status) {
                            if (status == 'Valid') {
                                wizard.goTo(wizard.getNewStep());

                                KTUtil.scrollTop();
                            } else {
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light"
                                    }
                                }).then(function () {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    }

                    return false;  // Do not change wizard step, further action will be handled by he validator
                });

                // Change event
                _wizardObj.on('changed', function (wizard) {
                    KTUtil.scrollTop();
                });

            }

            var _initValidation = function () {
                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                // Step 1
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 2
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 3
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 4
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 5
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 6
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 7
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 8
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 9
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 10
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));
            }

            return {
                // public functions
                init: function () {
                    _wizardEl = KTUtil.getById('kt_wizard');
                    _formEl = KTUtil.getById('kt_form');

                    _initWizard();
                    _initValidation();
                }
            };
        }();

        $(document).ready(function () {
            KTWizard2.init();
        });

    </script>
@endsection

@section('css')
    <link href="{{ asset('assets/css/pages/wizard/wizard-2.rtl.css') }}" rel="stylesheet" type="text/css"/>
    <style>
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
@endsection