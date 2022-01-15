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
                                <!--<router-link :to="{name: 'initial-shares-index'}">-->
                                <a class="text-muted">اطلاعات مالی 1</a>
                                <!--</router-link>-->
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">اطلاعات اولیه</a>
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
                                <div class="row">
                                    <div class="card-body" style="padding-top: 30px">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="number_of_plan_year">تعداد سال های طرح :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                سال
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="number_of_plan_year" name="number_of_plan_year" v-model.number="data.number_of_plan_year"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('number_of_plan_year')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('number_of_plan_year')" style="display: block;">{{ errors.get('number_of_plan_year') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dollar">قیمت روز دلار :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                             <span class="input-group-text noselect">
                                                                 تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="dollar" name="dollar" v-model.number="data.dollar"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('dollar')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('dollar')" style="display: block;">{{ errors.get('dollar') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="inflation">نرخ تورم :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="inflation" name="inflation" v-model.number="data.inflation"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('inflation')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('inflation')" style="display: block;">{{ errors.get('inflation') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="loan">وام :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="loan" name="loan" v-model.number="data.loan"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('loan')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('loan')" style="display: block;">{{ errors.get('loan') }}</div>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="profit">سود :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                             <span class="input-group-text noselect">
                                                                درصد
                                                             </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="profit" name="profit" v-model.number="data.profit"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('profit')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('profit')" style="display: block;">{{ errors.get('profit') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="reimbursement">باز پرداخت :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                             <span class="input-group-text noselect">
                                                                سال
                                                             </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="reimbursement" name="reimbursement" v-model.number="data.reimbursement"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('reimbursement')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('reimbursement')" style="display: block;">{{ errors.get('reimbursement') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="number_of_day_1">تعداد روزی که طول می کشد مواد اولیه خریداری شود :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                روز
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="number_of_day_1" name="number_of_day_1" v-model.number="data.number_of_day_1"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('number_of_day_1')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('number_of_day_1')" style="display: block;">{{ errors.get('number_of_day_1') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="number_of_day_2">تعداد روزی که طول می کشد مواد اولیه تبدیل به محصول شود :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                             <span class="input-group-text noselect">
                                                                 روز
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="number_of_day_2" name="number_of_day_2" v-model.number="data.number_of_day_2"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('number_of_day_2')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('number_of_day_2')" style="display: block;">{{ errors.get('number_of_day_2') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="number_of_day_3">تعداد روزی که طول می کشد محصول به فروش برسد :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                روز
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="number_of_day_3" name="number_of_day_3" v-model.number="data.number_of_day_3"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('number_of_day_3')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('number_of_day_3')" style="display: block;">{{ errors.get('number_of_day_3') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="number_of_day_4">تعداد روزی که طول می کشد مطالبات فروش محصول وصول شود :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                روز
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="number_of_day_4" name="number_of_day_4" v-model.number="data.number_of_day_4"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('number_of_day_4')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('number_of_day_4')" style="display: block;">{{ errors.get('number_of_day_4') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="depreciation_rate_1">میزان استهلاک مستغلات :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="depreciation_rate_1" name="depreciation_rate_1" v-model.number="data.depreciation_rate_1"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('depreciation_rate_1')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('depreciation_rate_1')" style="display: block;">{{ errors.get('depreciation_rate_1') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="depreciation_rate_2">میزان استهلاک ماشین آلات و تجهیزات فنی :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                             <span class="input-group-text noselect">
                                                                 درصد
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="depreciation_rate_2" name="depreciation_rate_2" v-model.number="data.depreciation_rate_2"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('depreciation_rate_2')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('depreciation_rate_2')" style="display: block;">{{ errors.get('depreciation_rate_2') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="depreciation_rate_3">میزان استهلاک تجهیزات دفتری :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="depreciation_rate_3" name="depreciation_rate_3" v-model.number="data.depreciation_rate_3"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('depreciation_rate_3')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('depreciation_rate_3')" style="display: block;">{{ errors.get('depreciation_rate_3') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="depreciation_rate_4">میزان استهلاک تاسیسات :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="depreciation_rate_4" name="depreciation_rate_4" v-model.number="data.depreciation_rate_4"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('depreciation_rate_4')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('depreciation_rate_4')" style="display: block;">{{ errors.get('depreciation_rate_4') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="depreciation_rate_5">میزان استهلاک وسایل حمل و نقل :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="depreciation_rate_5" name="depreciation_rate_5" v-model.number="data.depreciation_rate_5"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('depreciation_rate_5')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('depreciation_rate_5')" style="display: block;">{{ errors.get('depreciation_rate_5') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="depreciation_rate_6">میزان استهلاک تجهیزات آزمایشگاهی :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="depreciation_rate_6" name="depreciation_rate_6" v-model.number="data.depreciation_rate_6"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('depreciation_rate_6')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('depreciation_rate_6')" style="display: block;">{{ errors.get('depreciation_rate_6') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="education">نوع محل اجرا :
                                                        <span class="text-danger">*</span></label>
                                                    <select name="education" id="education" :class="['form-control', {'is-invalid' : errors.has('type')}]" v-model="data.type">
                                                        <option v-for="type in types" :value="type.id">{{ type.type }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('type')">{{ errors.get('type') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                <div class="card-body row">
                                    <label class="col-lg-2 col-form-label text-right"><h4>مستغلات:</h4></label>
                                    <div data-repeater-list="lands" class="col-lg-10">
                                        <transition-group name="slide">
                                            <div data-repeater-item="" class="form-group row align-items-center" v-for="(land, index) in data.lands" :key="index">
                                                <div class="col-md-3">
                                                    <label><h5>شرح : <span data-v-55357ea2="" class="text-danger">*</span></h5></label>
                                                    <input type="text" class="form-control lands" v-model="land.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('lands.' + index +'.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('lands.' + index +'.description')" style="display: block;">{{ errors.get('lands.' + index +'.description') }}</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>متراژ : <span data-v-55357ea2="" class="text-danger">*</span></h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">متر مربع</span>
                                                        </div>
                                                        <input type="text" class="form-control lands" v-model="land.area"
                                                               :class="['form-control', {'is-invalid' : errors.has('lands.' + index +'.area')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('lands.' + index +'.area')" style="display: block;">{{ errors.get('lands.' + index +'.area') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت کل : <span data-v-55357ea2="" class="text-danger">*</span></h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">تومان</span>
                                                        </div>
                                                        <input type="text" class="form-control lands" v-model="land.price"
                                                               :class="['form-control', {'is-invalid' : errors.has('lands.' + index +'.price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('lands.' + index +'.price')" style="display: block;">{{ errors.get('lands.' + index +'.price') }}</div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveLand(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div @click="AddLand" class="col-lg-4">
                                        <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>
                                </div>
                                <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                <div class="card-body row">
                                    <label class="col-lg-2 col-form-label text-right"><h4>تجهیزات آزمایشگاهی:</h4></label>
                                    <div data-repeater-list="laboratory_equipments" class="col-lg-10">
                                        <transition-group name="slide">
                                            <div data-repeater-item="" class="form-group row align-items-center" v-for="(building, index) in data.laboratory_equipments" :key="index">
                                                <div class="col-md-3">
                                                    <label><h5>شرح : <span class="text-danger">*</span></h5></label>
                                                    <input type="text" class="form-control laboratory_equipments" v-model="building.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('laboratory_equipments.' + index +'.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('laboratory_equipments.' + index +'.description')" style="display: block;">{{ errors.get('laboratory_equipments.' + index +'.description') }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><h5>تعداد: <span data-v-55357ea2="" class="text-danger">*</span></h5></label>
                                                    <input type="text" class="form-control laboratory_equipments" v-model="building.number"
                                                           :class="['form-control', {'is-invalid' : errors.has('laboratory_equipments.' + index +'.number')}]"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('laboratory_equipments.' + index +'.number')" style="display: block;">{{ errors.get('laboratory_equipments.' + index +'.number') }}</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت واحد : <span data-v-55357ea2="" class="text-danger">*</span></h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">دلار</span>
                                                        </div>
                                                        <input type="text" class="form-control laboratory_equipments" v-model="building.dollar_unit_price"
                                                               :class="['form-control', {'is-invalid' : errors.has('laboratory_equipments.' + index +'.dollar_unit_price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('laboratory_equipments.' + index +'.dollar_unit_price')" style="display: block;">{{ errors.get('laboratory_equipments.' + index +'.dollar_unit_price') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت واحد : <span data-v-55357ea2="" class="text-danger">*</span></h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">تومان</span>
                                                        </div>
                                                        <input type="text" class="form-control laboratory_equipments" v-model="building.toman_unit_price"
                                                               :class="['form-control', {'is-invalid' : errors.has('laboratory_equipments.' + index +'.toman_unit_price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('laboratory_equipments.' + index +'.toman_unit_price')" style="display: block;">{{ errors.get('laboratory_equipments.' + index +'.toman_unit_price') }}</div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveLaboratoryEquipment(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div @click="AddLaboratoryEquipment" class="col-lg-4">
                                        <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>
                                </div>
                                <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                <div class="card-body row">
                                    <label class="col-lg-2 col-form-label text-right"><h4>تجهیزات و ماشین آلات فنی:</h4></label>
                                    <div data-repeater-list="equipmentandmachineries" class="col-lg-10">
                                        <transition-group name="slide">
                                            <div data-repeater-item="" class="form-group row align-items-center" v-for="(equipmentandmachinery, index) in data.equipmentandmachineries" :key="index">
                                                <div class="col-md-3">
                                                    <label><h5>شرح :</h5></label>
                                                    <input type="text" class="form-control equipmentandmachineries" v-model="equipmentandmachinery.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('equipmentandmachineries.' + index +'.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('equipmentandmachineries.' + index +'.description')" style="display: block;">{{ errors.get('equipmentandmachineries.' + index +'.description') }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><h5>تعداد :</h5></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control equipmentandmachineries" v-model="equipmentandmachinery.count"
                                                               :class="['form-control', {'is-invalid' : errors.has('equipmentandmachineries.' + index +'.count')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('equipmentandmachineries.' + index +'.count')" style="display: block;">{{ errors.get('equipmentandmachineries.' + index +'.count') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت واحد :</h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">تومان</span>
                                                        </div>
                                                        <input type="text" class="form-control equipmentandmachineries" v-model="equipmentandmachinery.unit_price"
                                                               :class="['form-control', {'is-invalid' : errors.has('equipmentandmachineries.' + index +'.unit_price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('equipmentandmachineries.' + index +'.unit_price')" style="display: block;">{{ errors.get('equipmentandmachineries.' + index +'.unit_price') }}</div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveEquipmentAndMachinery(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div @click="AddEquipmentAndMachinery" class="col-lg-4">
                                        <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>
                                </div>
                                <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                <div class="card-body row">
                                    <label class="col-lg-2 col-form-label text-right"><h4>تجهیزات و لوازم دفتری:</h4></label>
                                    <div data-repeater-list="officeequipmentandsupplies" class="col-lg-10">
                                        <transition-group name="slide">
                                            <div data-repeater-item="" class="form-group row align-items-center" v-for="(officeequipmentandsupply, index) in data.officeequipmentandsupplies" :key="index">
                                                <div class="col-md-3">
                                                    <label><h5>شرح :</h5></label>
                                                    <input type="text" class="form-control officeequipmentandsupplies" v-model="officeequipmentandsupply.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('officeequipmentandsupplies.' + index +'.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('officeequipmentandsupplies.' + index +'.description')" style="display: block;">{{ errors.get('officeequipmentandsupplies.' + index +'.description') }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><h5>تعداد :</h5></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control officeequipmentandsupplies" v-model="officeequipmentandsupply.count"
                                                               :class="['form-control', {'is-invalid' : errors.has('officeequipmentandsupplies.' + index +'.count')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('officeequipmentandsupplies.' + index +'.count')" style="display: block;">{{ errors.get('officeequipmentandsupplies.' + index +'.count') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت واحد :</h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">تومان</span>
                                                        </div>
                                                        <input type="text" class="form-control officeequipmentandsupplies" v-model="officeequipmentandsupply.unit_price"
                                                               :class="['form-control', {'is-invalid' : errors.has('officeequipmentandsupplies.' + index +'.unit_price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('officeequipmentandsupplies.' + index +'.unit_price')" style="display: block;">{{ errors.get('officeequipmentandsupplies.' + index +'.unit_price') }}</div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveOfficeEquipmentAndSupply(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div @click="AddOfficeEquipmentAndSupply" class="col-lg-4">
                                        <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>
                                </div>
                                <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                <div class="card-body row">
                                    <label class="col-lg-2 col-form-label text-right"><h4>تاسیسات:</h4></label>
                                    <div data-repeater-list="facilities" class="col-lg-10">
                                        <transition-group name="slide">
                                            <div data-repeater-item="" class="form-group row align-items-center" v-for="(facility, index) in data.facilities" :key="index">
                                                <div class="col-md-3">
                                                    <label><h5>شرح :</h5></label>
                                                    <input type="text" class="form-control facilities" v-model="facility.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('facilities.' + index +'.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('facilities.' + index +'.description')" style="display: block;">{{ errors.get('facilities.' + index +'.description') }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><h5>تعداد :</h5></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control facilities" v-model="facility.count"
                                                               :class="['form-control', {'is-invalid' : errors.has('facilities.' + index +'.count')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('facilities.' + index +'.count')" style="display: block;">{{ errors.get('facilities.' + index +'.count') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت واحد :</h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">تومان</span>
                                                        </div>
                                                        <input type="text" class="form-control facilities" v-model="facility.unit_price"
                                                               :class="['form-control', {'is-invalid' : errors.has('facilities.' + index +'.unit_price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('facilities.' + index +'.unit_price')" style="display: block;">{{ errors.get('facilities.' + index +'.unit_price') }}</div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveFacility(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div @click="AddFacility" class="col-lg-4">
                                        <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>
                                </div>
                                <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                <div class="card-body row">
                                    <label class="col-lg-2 col-form-label text-right"><h4>حمل و نقل:</h4></label>
                                    <div data-repeater-list="transportations" class="col-lg-10">
                                        <transition-group name="slide">
                                            <div data-repeater-item="" class="form-group row align-items-center" v-for="(transportation, index) in data.transportations" :key="index">
                                                <div class="col-md-3">
                                                    <label><h5>شرح :</h5></label>
                                                    <input type="text" class="form-control transportations" v-model="transportation.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('transportations.' + index +'.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('transportations.' + index +'.description')" style="display: block;">{{ errors.get('transportations.' + index +'.description') }}</div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><h5>تعداد :</h5></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control transportations" v-model="transportation.count"
                                                               :class="['form-control', {'is-invalid' : errors.has('transportations.' + index +'.count')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('transportations.' + index +'.count')" style="display: block;">{{ errors.get('transportations.' + index +'.count') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت واحد :</h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">تومان</span>
                                                        </div>
                                                        <input type="text" class="form-control transportations" v-model="transportation.unit_price"
                                                               :class="['form-control', {'is-invalid' : errors.has('transportations.' + index +'.unit_price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('transportations.' + index +'.unit_price')" style="display: block;">{{ errors.get('transportations.' + index +'.unit_price') }}</div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveTransportation(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div @click="AddTransportation" class="col-lg-4">
                                        <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>
                                </div>
                                <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                <div class="card-body row">
                                    <label class="col-lg-2 col-form-label text-right"><h4>هزینه های قبل بهره برداری:</h4></label>
                                    <div data-repeater-list="preoperatingcosts" class="col-lg-10">
                                        <transition-group name="slide">
                                            <div data-repeater-item="" class="form-group row align-items-center" v-for="(preoperatingcost, index) in data.preoperatingcosts" :key="index">
                                                <div class="col-md-5">
                                                    <label><h5>شرح :</h5></label>
                                                    <input type="text" class="form-control preoperatingcosts" v-model="preoperatingcost.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('preoperatingcosts.' + index +'.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('preoperatingcosts.' + index +'.description')" style="display: block;">{{ errors.get('preoperatingcosts.' + index +'.description') }}</div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label><h5>قیمت کل :</h5></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">تومان</span>
                                                        </div>
                                                        <input type="text" class="form-control preoperatingcosts" v-model="preoperatingcost.total_price"
                                                               :class="['form-control', {'is-invalid' : errors.has('preoperatingcosts.' + index +'.total_price')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('preoperatingcosts.' + index +'.total_price')" style="display: block;">{{ errors.get('preoperatingcosts.' + index +'.total_price') }}</div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                    <a @click="RemovePreOperatingCost(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div @click="AddPreOperatingCost" class="col-lg-4">
                                        <a  href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                                </div>
                            </form>
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
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "create",
        data() {
            return {
                types: [],
                data: {
                    number_of_plan_year: '',
                    dollar: '',
                    inflation: '',
                    loan: '',
                    profit: '',
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
                    type: '',
                    lands: [{ description: '', area: '', price: '' }],
                    laboratory_equipments: [{ description: '', number: '', dollar_unit_price: '', toman_unit_price: '' }],
                    equipmentandmachineries: [{ description: '', count: '', unit_price: '' }],
                    officeequipmentandsupplies: [{ description: '', count: '', unit_price: '' }],
                    facilities: [{ description: '', count: '', unit_price: '' }],
                    transportations: [{ description: '', count: '', unit_price: '' }],
                    preoperatingcosts: [{ description: '', total_price: ''}]
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/basic-information/create')
                .then(response => {
                    this.types = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            AddLand() {
                this.data.lands.push({ description: '', area: '', price: '' });
            },
            RemoveLand(index) {
                this.data.lands.splice(index, 1);
            },
            AddLaboratoryEquipment() {
                this.data.laboratory_equipments.push({ description: '', number: '', dollar_unit_price: '', toman_unit_price: '' });
            },
            RemoveLaboratoryEquipment(index) {
                this.data.laboratory_equipments.splice(index, 1);
            },
            AddEquipmentAndMachinery() {
                this.data.equipmentandmachineries.push({ description: '', count: '', unit_price: ''});
            },
            RemoveEquipmentAndMachinery(index) {
                this.data.equipmentandmachineries.splice(index, 1);
            },
            AddOfficeEquipmentAndSupply() {
                this.data.officeequipmentandsupplies.push({ description: '', count: '', unit_price: '' });
            },
            RemoveOfficeEquipmentAndSupply(index) {
                this.data.officeequipmentandsupplies.splice(index, 1);
            },
            AddFacility() {
                this.data.facilities.push({ description: '', count: '', unit_price: '' });
            },
            RemoveFacility(index) {
                this.data.facilities.splice(index, 1);
            },
            AddTransportation() {
                this.data.transportations.push({ description: '', count: '', unit_price: '' });
            },
            RemoveTransportation(index) {
                this.data.transportations.splice(index, 1);
            },
            AddPreOperatingCost() {
                this.data.preoperatingcosts.push({ description: '', total_price: ''});
            },
            RemovePreOperatingCost(index) {
                this.data.preoperatingcosts.splice(index, 1);
            },
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/financial1', this.data)
                    .then(response => {
                        if (response.status == 201){
                            Swal.fire({
                                title: "اطلاعات با موفیت ثبت شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'financial1-index'});
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
    .noselect {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #a2a2a2;
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