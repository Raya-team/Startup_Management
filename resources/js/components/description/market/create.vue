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
                            <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                                <div class="wizard-steps">
                                    <!--begin::Wizard Step 1 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">توضیحات اولیه</h3>
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
                                                                <textarea name="product_introduction" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.market.product_introduction"></textarea>
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
                                                                <textarea name="product_features" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.market.product_features"></textarea>
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
                                                                <textarea name="product_competitive_advantages" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.market.product_competitive_advantages"></textarea>
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
                                                                <textarea name="position_analysis" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.position_analysis"></textarea>
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
                                                                <textarea name="pricing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.product_pricing_strategy"></textarea>
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
                                                                <textarea name="marketing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.product_marketing_strategy"></textarea>
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
                                                    <transition-group name="slide">
                                                        <div class="form-group row" v-for="(pro, index) in data.product_supplies" :key="index">
                                                            <div data-repeater-list="" class="col-lg-10">
                                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                                    <div class="col-md-3">
                                                                        <label>سال:</label>
                                                                        <input type="text" class="form-control products" name="year" v-model="pro.year"
                                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                                                                        <div class="d-md-none mb-2"></div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <label>تقاضای کل:</label>
                                                                        <input type="text" class="form-control products" name="general_request" v-model="pro.general_request"/>
                                                                        <div class="d-md-none mb-2"></div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>تولید داخل:</label>
                                                                        <input type="text" class="form-control products" name="domestic_production" v-model="pro.domestic_production"/>
                                                                        <div class="d-md-none mb-2"></div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>واردات:</label>
                                                                        <input type="text" class="form-control products" name="importation" v-model="pro.importation"/>
                                                                        <div class="d-md-none mb-2"></div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label>واحد:</label>
                                                                        <select name="unit" class="form-control" v-model="pro.unit">
                                                                            <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                                        </select>
                                                                        <div class="d-md-none mb-2"></div>
                                                                    </div>
                                                                    <div v-if="index != 0" class="col-md-2">
                                                                        <a  @click="RemoveProductSupplies(index)" href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                            <i class="la la-trash-o"></i>حذف</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </transition-group>
                                                    <div class="form-group row">
                                                        <div class="col-lg-12">
                                                            <a @click="AddProductSupplies" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                                <i class="la la-plus"></i>افزودن</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 3-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <div id="kt_repeater_2">
                                                    <div class="form-group row">
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-4">
                                                                    <label>ویژگی مشتری:</label>
                                                                    <input type="text" class="form-control products" name="customer_features" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>مشتریان گروه اول:</label>
                                                                    <input type="text" class="form-control products" name="first_group_customers" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>مشتریان گروه دوم:</label>
                                                                    <input type="text" class="form-control products" name="second_group_customers" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>مشتریان گروه سوم:</label>
                                                                    <input type="text" class="form-control products" name="third_group_customers" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>مشتریان گروه چهارم:</label>
                                                                    <input type="text" class="form-control products" name="fourth_group_customers" />
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
                                                <div id="kt_repeater_3">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">تامین‌کننده مواد اولیه:</label>
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-4">
                                                                    <label>نام:</label>
                                                                    <input type="text" class="form-control products" name="material_suppliers_name" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>منطقه جغرافیایی:</label>
                                                                    <input type="text" class="form-control products" name="material_suppliers_region" required />
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
                                                <div id="kt_repeater_4">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">تولید کننده:</label>
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-4">
                                                                    <label>نام:</label>
                                                                    <input type="text" class="form-control products" name="producers_name" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>منطقه جغرافیایی:</label>
                                                                    <input type="text" class="form-control products" name="producers_region" />
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
                                                <div id="kt_repeater_5">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">عرضه کننده:</label>
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-4">
                                                                    <label>نام:</label>
                                                                    <input type="text" class="form-control products" name="suppliers_name" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>منطقه جغرافیایی:</label>
                                                                    <input type="text" class="form-control products" name="suppliers_region" />
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
                                                <div id="kt_repeater_6">
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">خرده فروش:</label>
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-4">
                                                                    <label>نام:</label>
                                                                    <input type="text" class="form-control products" name="retails_name" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>منطقه جغرافیایی:</label>
                                                                    <input type="text" class="form-control products" name="retails_region" />
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
                                                <div id="kt_repeater_7">
                                                    <div class="form-group row">
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-5">
                                                                    <label>نام رقیب:</label>
                                                                    <input type="text" class="form-control products" name="competitor_name"/>
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label>منطقه جغرافیایی:</label>
                                                                    <input type="text" class="form-control products" name="competitors_region"/>
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label>سهم از بازار:</label>
                                                                    <input type="text" class="form-control products" name="market_share" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label>ویژگی رقابتی:</label>
                                                                    <input type="text" class="form-control products" name="competitive_feature" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label>نقطه ضعف:</label>
                                                                    <input type="text" class="form-control products" name="weakness" />
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
                                                <div id="kt_repeater_8">
                                                    <div class="form-group row">
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-12">
                                                                    <label>شرح:</label>
                                                                    <input type="text" class="form-control products" name="strengths_description" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>وزن:</label>
                                                                    <input type="text" class="form-control products" name="strengths_weight"  />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>امتیاز:</label>
                                                                    <input type="text" class="form-control products" name="strengths_Score"  />
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
                                                <div id="kt_repeater_9">
                                                    <div class="form-group row">
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-12">
                                                                    <label>شرح:</label>
                                                                    <input type="text" class="form-control products" name="weak_points_description" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>وزن:</label>
                                                                    <input type="text" class="form-control products" name="weak_points_weight" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>امتیاز:</label>
                                                                    <input type="text" class="form-control products" name="weak_points_Score" />
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
                                                <div id="kt_repeater_10">
                                                    <div class="form-group row">
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-12">
                                                                    <label>شرح:</label>
                                                                    <input type="text" class="form-control products" name="opportunity_points_description" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>وزن:</label>
                                                                    <input type="text" class="form-control products" name="opportunity_points_weight" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>امتیاز:</label>
                                                                    <input type="text" class="form-control products" name="opportunity_points_Score" />
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
                                                <div id="kt_repeater_11">
                                                    <div class="form-group row">
                                                        <div data-repeater-list="" class="col-lg-10">
                                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                                <div class="col-md-12">
                                                                    <label>شرح:</label>
                                                                    <input type="text" class="form-control products" name="threats_description" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>وزن:</label>
                                                                    <input type="text" class="form-control products" name="threats_weight" />
                                                                    <div class="d-md-none mb-2"></div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label>امتیاز:</label>
                                                                    <input type="text" class="form-control products" name="threats_Score" />
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
        <!--end::Entry-->
    </div>
</template>

<script>
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "create",
        data() {
            return {
                units: '',
                data: {
                    market: {product_introduction: '', product_features: '', product_competitive_advantages: '', position_analysis: '', product_pricing_strategy: '', product_marketing_strategy: ''},
                    product_supplies: [{ year: '', general_request: '', domestic_production: '', importation: '', unit: '' }],
                    product_customers: [{ customer_features: '', first_group_customers: '', second_group_customers: '', third_group_customers: '', fourth_group_customers: '' }],
                    raw_material_suppliers: [{ name: '', geographical_region: '' }],
                    producers: [{ name: '', geographical_region: '' }],
                    suppliers: [{ name: '', geographical_region: '' }],
                    retails: [{ name: '', geographical_region: '' }],
                    environmental_effect: {economical: '', social: '', political: '', environmental: ''},
                    product_competitors: [{ name: '', geographical_region: '', market_share: '', competitive_feature: '', weakness: '' }],
                    strengths: [{ description: '', weight: '', score: '' }],
                    weak_points: [{ description: '', weight: '', score: '' }],
                    opportunity_points: [{ description: '', weight: '', score: '' }],
                    threats: [{ description: '', weight: '', score: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            import('../../../wizard2');
            axios.get('/api/description-market/create')
                .then(response => {
                    this.units = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post(`/description-technical`, this.data)
                    .then(response => {
                        console.log(response);
                        if(response.status == 201){
                            Swal.fire({
                                title: "اطلاعات با موفقیت ثبت شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'description-technical-index'});
                        }
                    })
                    .catch(error => {
                        console.log(error.response);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            AddProductSupplies() {
                this.data.product_supplies.push({ year: '', general_request: '', domestic_production: '', importation: '', unit: '' });
            },
            RemoveProductSupplies(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddProductCustomers() {
                this.data.product_customers.push({ customer_features: '', first_group_customers: '', second_group_customers: '', third_group_customers: '', fourth_group_customers: '' });
            },
            RemoveProductCustomers(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddRawMaterialSuppliers() {
                this.data.raw_material_suppliers.push({ name: '', geographical_region: '' });
            },
            RemoveRawMaterialSuppliers(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddProducers() {
                this.data.producers.push({ name: '', geographical_region: '' });
            },
            RemoveProducers(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddSuppliers() {
                this.data.suppliers.push({ name: '', geographical_region: '' });
            },
            RemoveSuppliers(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddRetails() {
                this.data.retails.push({ name: '', geographical_region: '' });
            },
            RemoveRetails(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddProductCompetitors() {
                this.data.product_competitors.push({ name: '', geographical_region: '', market_share: '', competitive_feature: '', weakness: '' });
            },
            RemoveProductCompetitors(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddStrengths() {
                this.data.strengths.push({ description: '', weight: '', score: '' });
            },
            RemoveStrengths(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddWeakPoints() {
                this.data.weak_points.push({ description: '', weight: '', score: '' });
            },
            RemoveWeakPoints(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddOpportunityPoints() {
                this.data.opportunity_points.push({ description: '', weight: '', score: '' });
            },
            RemoveOpportunityPoints(index) {
                this.data.required_certificates.splice(index, 1);
            },
            AddThreats() {
                this.data.threats.push({ description: '', weight: '', score: '' });
            },
            RemoveThreats(index) {
                this.data.required_certificates.splice(index, 1);
            },
        },
    }
</script>

<style>
    .wizard.wizard-2 .wizard-nav .wizard-steps .wizard-step .wizard-label .wizard-title{
        font-weight: 600
    }
    .wizard.wizard-2 .wizard-nav{
        -webkit-box-flex: 0;
        flex: 0 0 400px;
        width: auto;
        max-width: none;
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
    .slide-enter{
        opacity: 0;
        /*transform: translateY(20px)*/
    }
    .slide-enter-active{
        animation: slide-in 1s ease-out forwards;
        transition: opacity .5s;
    }
    .slide-leave{

    }
    .slide-leave-active{
        transition: all 1s ease;
    }
    .slide-leave-to {
        opacity: 0;
        transform: translateY(30px);
    }
    .slide-move{
        transition: transform 1s;
    }

    @keyframes slide-in {
        from {
            transform: translateY(20px)
        }
        to {
            transform: translateY(0)
        }
    }
    @keyframes slide-out {
        from {
            transform: translateY(0)
        }
        to {
            transform: translateY(20px)
        }
    }
</style>