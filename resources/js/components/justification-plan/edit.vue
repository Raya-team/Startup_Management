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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">طرح توجیهی مقدماتی</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <router-link :to="{name: 'justificationplan-index'}">
                                <li class="breadcrumb-item text-muted">
                                    <a class="text-muted">ایندکس</a>
                                </li>
                            </router-link>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">ویرایش</a>
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
                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_login_signup_form" @submit.prevent="onSubmit">
                                <div class="card-body">
                                    <h5>در صورت وجود شرکت ثبت شده موارد زیر را پر کنید:</h5><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="team_name">نام شرکت:</label>
                                                <input type="text" class="form-control" id="team_name" placeholder="نام شرکت" name="team_name" disabled v-model="team.name"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="registration_number">شماره ثبت:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="registration_number" placeholder="شماره ثبت" name="registration_number" v-model="data.registered_team.registration_number"
                                                       :class="['form-control', {'is-invalid' : errors.has('registered_team.registration_number')}]"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('registered_team.registration_number')" style="display: block;">{{ errors.get('registered_team.registration_number') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kt_datepicker_1">تاریخ:
                                                    <span class="text-danger">*</span></label>
                                                <!--<input type="text" class="form-control" id="kt_datepicker_1" readonly="readonly" placeholder="تاریخ" v-model="data.registered_team.registration_date">-->
                                                <input type="date" class="form-control" id="kt_datepicker_1" placeholder="تاریخ" name="registration_date" v-model="data.registered_team.registration_date"
                                                       :class="['form-control', {'is-invalid' : errors.has('registered_team.registration_date')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('registered_team.registration_date')" style="display: block;">{{ errors.get('registered_team.registration_date') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5>اطلاعات مدیر کسب و کار</h5><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="owner">نام و نام خانوادگی:
                                                    <span class="text-danger">*</span></label>
                                                <select name="owner" id="owner" class="form-control" v-model="data.business_manager.owner" :class="['form-control', {'is-invalid' : errors.has('business_manager.owner')}]">
                                                    <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_manager.owner')" style="display: block;">{{ errors.get('business_manager.owner') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="manager_phone_number">شماره تماس:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="manager_phone_number" placeholder="شماره تماس" name="manager_phone_number"
                                                       :class="['form-control', {'is-invalid' : errors.has('business_manager.phone_number')}]"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" v-model="data.business_manager.phone_number"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_manager.phone_number')" style="display: block;">{{ errors.get('business_manager.phone_number') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">ایمیل:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="email" placeholder="ایمیل" name="email" v-model="data.business_manager.email"
                                                       :class="['form-control', {'is-invalid' : errors.has('business_manager.email')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_manager.email')" style="display: block;">{{ errors.get('business_manager.email') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5>سوالات کسب و کار</h5><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="growth_center">آیا سابقه حضور در شتابدهنده و یا مرکز رشد را دارید؟ نام مرکز را بنویسید.</label>
                                                <input type="text" class="form-control" id="growth_center" placeholder="نام مرکز" name="growth_center" v-model="data.business_question.growth_center"
                                                       :class="['form-control', {'is-invalid' : errors.has('business_question.growth_center')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_question.growth_center')" style="display: block;">{{ errors.get('business_question.growth_center') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="start_date">تاریخ شروع رسمی کسب و کار را بنویسد.
                                                    <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="start_date" placeholder="تاریخ شروع رسمی کسب و کار" name="start_date" v-model="data.business_question.start_date"
                                                       :class="['form-control', {'is-invalid' : errors.has('business_question.start_date')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_question.start_date')" style="display: block;">{{ errors.get('business_question.start_date') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone_number">شماره تماس خود را بنویسید.
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="phone_number" placeholder="شماره تماس" name="phone_number" v-model="data.business_question.phone_number"
                                                       :class="['form-control', {'is-invalid' : errors.has('business_question.phone_number')}]"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_question.phone_number')" style="display: block;">{{ errors.get('business_question.phone_number') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="site_address">آدرس وب سایت خود را درصورت وجود بنویسید.</label>
                                                <input type="text" class="form-control" id="site_address" placeholder="آدرس وب سایت" name="site_address" v-model="data.business_question.site_address"
                                                       :class="['form-control', {'is-invalid' : errors.has('business_question.site_address')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_question.site_address')" style="display: block;">{{ errors.get('business_question.site_address') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="location_address">آدرس محل فعالیت را بنویسید.
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="location_address" placeholder="آدرس محل فعالیت" name="location_address" v-model="data.business_question.location_address"
                                                       :class="['form-control', {'is-invalid' : errors.has('business_question.location_address')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_question.location_address')" style="display: block;">{{ errors.get('business_question.location_address') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="important_note">اگر نکته قابل توجه ای وجود دارد که می خواهید سرمایه گذار آن را بداند اینجا بنویسد.</label>
                                                <textarea name="important_note" id="important_note" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.business_question.important_note"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('business_question.important_note')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('business_question.important_note')" style="display: block;">{{ errors.get('business_question.important_note') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">نیاز <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>کل ایده تجاری شما به حل یک مشکل خاص متکی است.آن را به روشنی توصیف نمایید.(هرچه کمی تر بهتر)</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="requirement" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.requirement"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.requirement')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.requirement')" style="display: block;">{{ errors.get('justification_plan.requirement') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">راه حل <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>پس از تشریح مشکل، توضیح دهید که کسب و کار شما چگونه می خواهد آن مشکل را حل کند</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="solution" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.solution"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.solution')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.solution')" style="display: block;">{{ errors.get('justification_plan.solution') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">رقبا <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>احتمالا شما تنها کسی نیستید که می‌خواهید آن مشکل خاص را حل کنید. حتماً رقابت مستقیم و غیرمستقیم خود را تجزیه و تحلیل کنید تا مشخص شود در مقابل چه کسانی ایستاده‌اید.</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="competitors" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.competitors"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.competitors')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.competitors')" style="display: block;">{{ errors.get('justification_plan.competitors') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">مزیت رقابتی <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>محصول یا خدمت شما در چه زمینه‌ای نسبت به دیگر رقبای داخلی یا خارجی مزیت دارد؟ آن را تشریح کنید.</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="competitive_advantage" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.competitive_advantage"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.competitive_advantage')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.competitive_advantage')" style="display: block;">{{ errors.get('justification_plan.competitive_advantage') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">بازار هدف <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>اصلی‌ترین مشتریان محصول/خدمت شما چه کسانی هستند؟ آن‌ها را بیان کنید.</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="target_market" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.target_market"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.target_market')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.target_market')" style="display: block;">{{ errors.get('justification_plan.target_market') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">سطح آمادگی فناوری <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>فن‌آوری شما در چه مرحله‌ای از آمادگی قرار دارد؟ آن را بیان کنید.</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="technology_level" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.technology_level"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.technology_level')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.technology_level')" style="display: block;">{{ errors.get('justification_plan.technology_level') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">بودجه مورد نیاز تقریبی <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>به طور تقریبی برای راه‌اندازی کسب و کار خود به چه میزان سرمایه‌ نیاز دارید؟ چه میزان از آن تامین شده و چه میزان باقی مانده است؟</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="required_budget" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.required_budget"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.required_budget')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.required_budget')" style="display: block;">{{ errors.get('justification_plan.required_budget') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">درآمد تقریبی <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>به طور تقریبی میزان فروش و درآمد کسب  وکار خود را بیان کنید. چه میزان تا به امروز کسب شده است و چه میزان پیش‌بینی می‌شود؟</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="income" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.income"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.income')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.income')" style="display: block;">{{ errors.get('justification_plan.income') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">عمر تکنولوژی(طرح) <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>عمر طرح مورد نظر چند سال است؟</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="technology_life" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.technology_life"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.technology_life')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.technology_life')" style="display: block;">{{ errors.get('justification_plan.technology_life') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">دلیل عدم ایجاد/توسعه طرح <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>چرا تا به امروز این کسب و کار راه‌اندازی/ توسعه داده نشده است؟ مشکل در عدم وجود بازار، عدم آمادگی تکنولوژی، نبود سرمایه کافی یا .... می‌تواند باشد.</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="plan_development" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.plan_development"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.plan_development')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.plan_development')" style="display: block;">{{ errors.get('justification_plan.plan_development') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">ارزش دانش فنی <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-text text-muted">
                                                <span>دانش‌ فنی خود را به طور تقریبی چه میزان ارزیابی می‌کنید؟</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="technical_knowledge" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.justification_plan.technical_knowledge"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('justification_plan.technical_knowledge')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('justification_plan.technical_knowledge')" style="display: block;">{{ errors.get('justification_plan.technical_knowledge') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</template>

<script>
    import Errors from "../../Errors";
    import Auth from "../../Auth";

    export default {
        name: "edit",
        data(){
            return {
                team: '',
                shareholders: '',
                data: {
                    registered_team: {},
                    business_manager: {},
                    business_question: {},
                    justification_plan: {}
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created(){
            this.Auth.check();
            axios.get(`/api/justificationplan/${this.$route.params.id}/edit`)
                .then(response => {
                    this.team = response.data.team;
                    this.shareholders = response.data.shareholders;
                    this.data.registered_team = response.data.registered_team;
                    this.data.business_manager = response.data.business_manager;
                    this.data.business_question = response.data.business_question;
                    this.data.justification_plan = response.data.justification_plan;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/justificationplan/${this.$route.params.id}`, this.data)
                    .then(response => {
                        console.log(response);
                        if(response.status == 201) {
                            Swal.fire({
                                title: "اطلاعات با موفقیت ویرایش شد",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "باشد",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'justificationplan-index'});
                        }
                    })
                    .catch(error => {
                        console.log(error.response);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
        },
    }
</script>

<style scoped>

</style>