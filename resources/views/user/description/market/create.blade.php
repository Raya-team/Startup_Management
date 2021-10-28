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
                                    <form class="form" id="kt_form">
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
                                                            <textarea name="product_features" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
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
                                                            <textarea name="product_competitive_advantages" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
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
                                                            <textarea name="pricing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
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
                                                            <textarea name="marketing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 1-->
                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-3">
                                                                <label>سال:</label>
                                                                <input type="text" class="form-control products" name="year" value="{{ old('year')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>تقاضای کل:</label>
                                                                <input type="text" class="form-control products" name="general_request" value="{{ old('general_request')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>تولید داخل:</label>
                                                                <input type="text" class="form-control products" name="domestic_production" value="{{ old('domestic_production')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>واردات:</label>
                                                                <input type="text" class="form-control products" name="importation" value="{{ old('importation') }}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>واحد:</label>
                                                                <select name="unit" class="form-control">
                                                                    <option value="">تن</option>
                                                                    <option value="">کیلوگرم</option>
                                                                    <option value="">عدد</option>
                                                                    <option value="">متر</option>
                                                                    <option value="">نفر</option>
                                                                </select>
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 2-->
                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-4">
                                                                <label>ویژگی مشتری:</label>
                                                                <input type="text" class="form-control products" name="customer_features" value="{{ old('customer_features')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>مشتریان گروه اول:</label>
                                                                <input type="text" class="form-control products" name="first_group_customers" value="{{ old('first_group_customers')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>مشتریان گروه دوم:</label>
                                                                <input type="text" class="form-control products" name="second_group_customers" value="{{ old('second_group_customers')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>مشتریان گروه سوم:</label>
                                                                <input type="text" class="form-control products" name="third_group_customers" value="{{ old('third_group_customers') }}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>مشتریان گروه چهارم:</label>
                                                                <input type="text" class="form-control products" name="fourth_group_customers" value="{{ old('fourth_group_customers') }}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 3-->
                                        <!--begin: Wizard Step 4-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">تامین‌کننده مواد اولیه:</label>
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-4">
                                                                <label>نام:</label>
                                                                <input type="text" class="form-control products" name="material_suppliers_name" value="{{ old('material_suppliers_name')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>منطقه جغرافیایی:</label>
                                                                <input type="text" class="form-control products" name="material_suppliers_region" value="{{ old('material_suppliers_region')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">تولید کننده:</label>
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-4">
                                                                <label>نام:</label>
                                                                <input type="text" class="form-control products" name="producers_name" value="{{ old('producers_name')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>منطقه جغرافیایی:</label>
                                                                <input type="text" class="form-control products" name="producers_region" value="{{ old('producers_region')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">عرضه کننده:</label>
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-4">
                                                                <label>نام:</label>
                                                                <input type="text" class="form-control products" name="suppliers_name" value="{{ old('suppliers_name')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>منطقه جغرافیایی:</label>
                                                                <input type="text" class="form-control products" name="suppliers_region" value="{{ old('suppliers_region')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">خرده فروش:</label>
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-4">
                                                                <label>نام:</label>
                                                                <input type="text" class="form-control products" name="retails_name" value="{{ old('retails_name')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>منطقه جغرافیایی:</label>
                                                                <input type="text" class="form-control products" name="retails_region" value="{{ old('retails_region')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 4-->
                                        <!--begin: Wizard Step 5-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="card-body">
                                                <h5 class="text-dark font-weight-bold">اقتصادی</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="economical" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">اجتماعی</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="social" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">سیاسی</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="political" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                                <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                                <h5 class="text-dark font-weight-bold">محیط زیستی</h5><br>
                                                <!--begin::Group-->
                                                <div class="form-group row">
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="environmental" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Group-->
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 5-->
                                        <!--begin: Wizard Step 6-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-5">
                                                                <label>نام رقیب:</label>
                                                                <input type="text" class="form-control products" name="competitor_name" value="{{ old('competitor_name')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>منطقه جغرافیایی:</label>
                                                                <input type="text" class="form-control products" name="competitors_region" value="{{ old('competitors_region')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>سهم از بازار:</label>
                                                                <input type="text" class="form-control products" name="market_share" value="{{ old('market_share')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>ویژگی رقابتی:</label>
                                                                <input type="text" class="form-control products" name="competitive_feature" value="{{ old('competitive_feature') }}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>نقطه ضعف:</label>
                                                                <input type="text" class="form-control products" name="weakness" value="{{ old('weakness') }}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 6-->
                                        <!--begin: Wizard Step 7-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-12">
                                                                <label>شرح:</label>
                                                                <input type="text" class="form-control products" name="strengths_description" value="{{ old('strengths_description')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>وزن:</label>
                                                                <input type="text" class="form-control products" name="strengths_weight" value="{{ old('strengths_weight')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>امتیاز:</label>
                                                                <input type="text" class="form-control products" name="strengths_Score" value="{{ old('strengths_Score')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 7-->
                                        <!--begin: Wizard Step 8-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-12">
                                                                <label>شرح:</label>
                                                                <input type="text" class="form-control products" name="weak_points_description" value="{{ old('weak_points_description')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>وزن:</label>
                                                                <input type="text" class="form-control products" name="weak_points_weight" value="{{ old('weak_points_weight')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>امتیاز:</label>
                                                                <input type="text" class="form-control products" name="weak_points_Score" value="{{ old('weak_points_Score')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 8-->
                                        <!--begin: Wizard Step 9-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-12">
                                                                <label>شرح:</label>
                                                                <input type="text" class="form-control products" name="opportunity_points_description" value="{{ old('opportunity_points_description')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>وزن:</label>
                                                                <input type="text" class="form-control products" name="opportunity_points_weight" value="{{ old('opportunity_points_weight')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>امتیاز:</label>
                                                                <input type="text" class="form-control products" name="opportunity_points_Score" value="{{ old('opportunity_points_Score')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 9-->
                                        <!--begin: Wizard Step 10-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div id="kt_repeater_1">
                                                <div class="form-group row">
                                                    <div data-repeater-list="" class="col-lg-10">
                                                        <div data-repeater-item="" class="form-group row align-items-center">
                                                            <div class="col-md-12">
                                                                <label>شرح:</label>
                                                                <input type="text" class="form-control products" name="threats_description" value="{{ old('threats_description')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>وزن:</label>
                                                                <input type="text" class="form-control products" name="threats_weight" value="{{ old('threats_weight')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>امتیاز:</label>
                                                                <input type="text" class="form-control products" name="threats_Score" value="{{ old('threats_Score')}}" required />
                                                                <div class="d-md-none mb-2"></div>
                                                            </div>
                                                            <div class="col-md-4" style="padding-top: 23px">
                                                                <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                            <i class="la la-plus"></i>افزودن</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: Wizard Step 10-->
                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">قبلی</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit" id="kt_login_singin_form_submit_button">ثبت</button>
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