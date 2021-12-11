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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">ارزش گذاری</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <!--<router-link :to="{name: 'initial-shares-index'}">-->
                                <a class="text-muted">مشهود</a>
                                <!--</router-link>-->
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">ایجاد اطلاعات</a>
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
                                        <div style="text-align: center;font-size: initial;">
                                            <b>مستغلات</b><hr>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="row" v-for="(data, index) in data.valuation_tenements" :key="index">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="materials_description">شرح:
                                                            <span class="text-danger">*</span></label>
                                                        <select name="materials_description" id="materials_description" class="form-control" v-model="data.description"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.description`)}]">
                                                            <option v-for="tenement in tenements" :value="tenement.id">{{ tenement.description }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.description`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.description`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_tenements.area">متراژ :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                متر مربع
                                                            </span>
                                                            </div>
                                                            <input placeholder="متراژ" type="text" class="form-control" id="valuation_tenements.area" name="valuation_tenements.area" v-model.number="data.area"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.area`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.area`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.area`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="materials_unit">مالک :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="materials_unit" id="materials_unit" class="form-control" v-model="data.owner"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.owner`)}]">
                                                            <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.owner`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_tenements.total_price">قیمت کل :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت کل" type="text" class="form-control" id="valuation_tenements.total_price" name="valuation_tenements.total_price" v-model.number="data.total_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_tenements.${index}.total_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_tenements.${index}.total_price`)" style="display: block;">{{ errors.get(`valuation_tenements.${index}.total_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveValuationTenement(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddValuationTenement" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>تجهییزات آزمایشگاهی</b><hr>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="row" v-for="(data, index) in data.valuation_laboratory_equipments" :key="index">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="valuation_laboratory_equipments.description">شرح:
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_laboratory_equipments.description" id="valuation_laboratory_equipments.description" class="form-control" v-model="data.description"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_laboratory_equipments.${index}.description`)}]">
                                                            <option v-for="laboratory_equipment in laboratory_equipments" :value="laboratory_equipment.id">{{ laboratory_equipment.description }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_laboratory_equipments.${index}.description`)" style="display: block;">{{ errors.get(`valuation_laboratory_equipments.${index}.description`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_laboratory_equipments.number">تعداد (دستگاه) :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input placeholder="تعداد" type="text" class="form-control" id="valuation_laboratory_equipments.number" name="valuation_laboratory_equipments.number" v-model.number="data.number"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`valuation_laboratory_equipments.${index}.number`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_laboratory_equipments.${index}.number`)" style="display: block;">{{ errors.get(`valuation_laboratory_equipments.${index}.number`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_laboratory_equipments.owner">مالک :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_laboratory_equipments" id="valuation_laboratory_equipments.owner" class="form-control" v-model="data.owner"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_laboratory_equipments.${index}.owner`)}]">
                                                            <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_laboratory_equipments.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_laboratory_equipments.${index}.owner`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_laboratory_equipments.dollar_unit_price">قیمت واحد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                دلار
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت واحد" type="text" class="form-control" id="valuation_laboratory_equipments.dollar_unit_price" name="valuation_laboratory_equipments.dollar_unit_price" v-model.number="data.dollar_unit_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_laboratory_equipments.${index}.dollar_unit_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_laboratory_equipments.${index}.dollar_unit_price`)" style="display: block;">{{ errors.get(`valuation_laboratory_equipments.${index}.dollar_unit_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_laboratory_equipments.toman_unit_price">قیمت واحد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت واحد" type="text" class="form-control" id="valuation_laboratory_equipments.toman_unit_price" name="valuation_laboratory_equipments.toman_unit_price" v-model.number="data.toman_unit_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_laboratory_equipments.${index}.toman_unit_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_laboratory_equipments.${index}.toman_unit_price`)" style="display: block;">{{ errors.get(`valuation_laboratory_equipments.${index}.toman_unit_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveValuationLaboratoryEquipment(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddValuationLaboratoryEquipment" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>تجهییزات و ماشین آلات فنی</b><hr>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="row" v-for="(data, index) in data.valuation_machineries" :key="index">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="valuation_machineries.description">شرح:
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_machineries.description" id="valuation_machineries.description" class="form-control" v-model="data.description"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_machineries.${index}.description`)}]">
                                                            <option v-for="machinery in machineries" :value="machinery.id">{{ machinery.description }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_machineries.${index}.description`)" style="display: block;">{{ errors.get(`valuation_machineries.${index}.description`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_machineries.number">تعداد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input placeholder="تعداد" type="text" class="form-control" id="valuation_machineries.number" name="valuation_machineries.number" v-model.number="data.number"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`valuation_machineries.${index}.number`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_machineries.${index}.number`)" style="display: block;">{{ errors.get(`valuation_machineries.${index}.number`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_machineries.owner">مالک :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_machineries" id="valuation_machineries.owner" class="form-control" v-model="data.owner"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_machineries.${index}.owner`)}]">
                                                            <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_machineries.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_machineries.${index}.owner`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_machineries.unit_price">قیمت واحد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت واحد" type="text" class="form-control" id="valuation_machineries.unit_price" name="valuation_machineries.toman_unit_price" v-model.number="data.unit_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_machineries.${index}.unit_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_machineries.${index}.unit_price`)" style="display: block;">{{ errors.get(`valuation_machineries.${index}.unit_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveValuationMachinerie(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddValuationMachinerie" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>تجهیزات و لوازم دفتری</b><hr>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="row" v-for="(data, index) in data.valuation_office_supplies" :key="index">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="valuation_office_supplies.description">شرح:
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_office_supplies.description" id="valuation_office_supplies.description" class="form-control" v-model="data.description"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_office_supplies.${index}.description`)}]">
                                                            <option v-for="office_supply in office_supplies" :value="office_supply.id">{{ office_supply.description }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_office_supplies.${index}.description`)" style="display: block;">{{ errors.get(`valuation_office_supplies.${index}.description`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_office_supplies.number">تعداد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input placeholder="تعداد" type="text" class="form-control" id="valuation_office_supplies.number" name="valuation_office_supplies.number" v-model.number="data.number"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`valuation_office_supplies.${index}.number`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_office_supplies.${index}.number`)" style="display: block;">{{ errors.get(`valuation_office_supplies.${index}.number`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_office_supplies.owner">مالک :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_office_supplies" id="valuation_office_supplies.owner" class="form-control" v-model="data.owner"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_office_supplies.${index}.owner`)}]">
                                                            <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_office_supplies.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_office_supplies.${index}.owner`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_office_supplies.unit_price">قیمت واحد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت واحد" type="text" class="form-control" id="valuation_office_supplies.unit_price" name="valuation_office_supplies.toman_unit_price" v-model.number="data.unit_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_office_supplies.${index}.unit_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_office_supplies.${index}.unit_price`)" style="display: block;">{{ errors.get(`valuation_office_supplies.${index}.unit_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveValuationOfficeSupplie(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddValuationOfficeSupplie" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>تاسیسات</b><hr>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="row" v-for="(data, index) in data.valuation_facilities" :key="index">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="valuation_facilities.description">شرح:
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_facilities.description" id="valuation_facilities.description" class="form-control" v-model="data.description"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_facilities.${index}.description`)}]">
                                                            <option v-for="facility in facilities" :value="facility.id">{{ facility.description }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_facilities.${index}.description`)" style="display: block;">{{ errors.get(`valuation_facilities.${index}.description`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_facilities.number">تعداد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input placeholder="تعداد" type="text" class="form-control" id="valuation_facilities.number" name="valuation_facilities.number" v-model.number="data.number"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`valuation_facilities.${index}.number`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_facilities.${index}.number`)" style="display: block;">{{ errors.get(`valuation_facilities.${index}.number`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_facilities.owner">مالک :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_facilities" id="valuation_facilities.owner" class="form-control" v-model="data.owner"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_facilities.${index}.owner`)}]">
                                                            <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_facilities.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_facilities.${index}.owner`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_facilities.unit_price">قیمت واحد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت واحد" type="text" class="form-control" id="valuation_facilities.unit_price" name="valuation_facilities.toman_unit_price" v-model.number="data.unit_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_facilities.${index}.unit_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_facilities.${index}.unit_price`)" style="display: block;">{{ errors.get(`valuation_facilities.${index}.unit_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveValuationFacilitie(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddValuationFacilitie" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>وسایل حمل و نقل</b><hr>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="row" v-for="(data, index) in data.valuation_transportations" :key="index">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="valuation_transportations.description">شرح:
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_transportations.description" id="valuation_transportations.description" class="form-control" v-model="data.description"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_transportations.${index}.description`)}]">
                                                            <option v-for="transportation in transportations" :value="transportation.id">{{ transportation.description }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_transportations.${index}.description`)" style="display: block;">{{ errors.get(`valuation_transportations.${index}.description`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_transportations.number">تعداد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input placeholder="تعداد" type="text" class="form-control" id="valuation_transportations.number" name="valuation_transportations.number" v-model.number="data.number"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`valuation_transportations.${index}.number`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_transportations.${index}.number`)" style="display: block;">{{ errors.get(`valuation_transportations.${index}.number`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_transportations.owner">مالک :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_transportations" id="valuation_transportations.owner" class="form-control" v-model="data.owner"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_transportations.${index}.owner`)}]">
                                                            <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_transportations.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_transportations.${index}.owner`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_transportations.unit_price">قیمت واحد :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت واحد" type="text" class="form-control" id="valuation_transportations.unit_price" name="valuation_transportations.toman_unit_price" v-model.number="data.unit_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_transportations.${index}.unit_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_transportations.${index}.unit_price`)" style="display: block;">{{ errors.get(`valuation_transportations.${index}.unit_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                    <a @click="RemoveValuationTransportation(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddValuationTransportation" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>هزینه‌های قبل بهره‌برداری</b><hr>
                                        </div>
                                        <transition-group name="slide">
                                            <div class="row" v-for="(data, index) in data.valuation_pre_operation_costs" :key="index">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="valuation_pre_operation_costs.description">شرح:
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_pre_operation_costs.description" id="valuation_pre_operation_costs.description" class="form-control" v-model="data.description"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_pre_operation_costs.${index}.description`)}]">
                                                            <option v-for="pre_operation_cost in pre_operation_costs" :value="pre_operation_cost.id">{{ pre_operation_cost.description }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_pre_operation_costs.${index}.description`)" style="display: block;">{{ errors.get(`valuation_pre_operation_costs.${index}.description`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_pre_operation_costs.owner">مالک :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="valuation_pre_operation_costs" id="valuation_pre_operation_costs.owner" class="form-control" v-model="data.owner"
                                                                :class="['form-control', {'is-invalid' : errors.has(`valuation_pre_operation_costs.${index}.owner`)}]">
                                                            <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_pre_operation_costs.${index}.owner`)" style="display: block;">{{ errors.get(`valuation_pre_operation_costs.${index}.owner`) }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="valuation_pre_operation_costs.total_price">قیمت کل :
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                            </div>
                                                            <input placeholder="قیمت کل" type="text" class="form-control" id="valuation_pre_operation_costs.total_price" name="valuation_pre_operation_costs.total_price" v-model.number="data.total_price"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`valuation_pre_operation_costs.${index}.total_price`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`valuation_pre_operation_costs.${index}.total_price`)" style="display: block;">{{ errors.get(`valuation_pre_operation_costs.${index}.total_price`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                    <a @click="RemoveValuationPreOperationCost(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                        <i class="la la-trash-o"></i>حذف</a>
                                                </div>
                                            </div>
                                        </transition-group>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <a @click="AddValuationPreOperationCost" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
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
                shareholders: [],
                tenements: [],
                laboratory_equipments: [],
                machineries: [],
                office_supplies: [],
                facilities: [],
                transportations: [],
                pre_operation_costs: [],
                data: {
                    valuation_tenements: [{description: '', area: '', owner: '', total_price: ''}],
                    valuation_laboratory_equipments: [{description: '', number: '', owner: '', dollar_unit_price: '', toman_unit_price: ''}],
                    valuation_machineries: [{description: '', number: '', owner: '', unit_price: ''}],
                    valuation_office_supplies: [{description: '', number: '', owner: '', unit_price: ''}],
                    valuation_facilities: [{description: '', number: '', owner: '', unit_price: ''}],
                    valuation_transportations: [{description: '', number: '', owner: '', unit_price: ''}],
                    valuation_pre_operation_costs: [{description: '', owner: '', total_price: ''}],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/valuation-tangible/create')
                .then(response => {
                    this.shareholders = response.data.shareholders;
                    this.tenements = response.data.tenements;
                    this.laboratory_equipments = response.data.laboratory_equipments;
                    this.machineries = response.data.machineries;
                    this.office_supplies = response.data.office_supplies;
                    this.facilities = response.data.facilities;
                    this.transportations = response.data.transportations;
                    this.pre_operation_costs = response.data.pre_operation_costs;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/valuation-tangible', this.data)
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
                            this.$router.push({name: 'valuation-tangible-index'});
                        }
                        console.log(response);

                    })
                    .catch(error => {
                        console.log(error.response);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            AddValuationTenement() {
                this.data.valuation_tenements.push({description: '', area: '', owner: '', total_price: ''});
            },
            RemoveValuationTenement(index) {
                this.data.valuation_tenements.splice(index, 1);
            },
            AddValuationLaboratoryEquipment() {
                this.data.valuation_laboratory_equipments.push({description: '', number: '', owner: '', dollar_unit_price: '', toman_unit_price: ''});
            },
            RemoveValuationLaboratoryEquipment(index) {
                this.data.valuation_laboratory_equipments.splice(index, 1);
            },
            AddValuationMachinerie() {
                this.data.valuation_machineries.push({description: '', number: '', owner: '', unit_price: ''});
            },
            RemoveValuationMachinerie(index) {
                this.data.valuation_machineries.splice(index, 1);
            },
            AddValuationOfficeSupplie() {
                this.data.valuation_office_supplies.push({description: '', number: '', owner: '', unit_price: ''});
            },
            RemoveValuationOfficeSupplie(index) {
                this.data.valuation_office_supplies.splice(index, 1);
            },
            AddValuationFacilitie() {
                this.data.valuation_facilities.push({description: '', count: '', owner: '', unit_price: ''});
            },
            RemoveValuationFacilitie(index) {
                this.data.valuation_facilities.splice(index, 1);
            },
            AddValuationTransportation() {
                this.data.valuation_transportations.push({description: '', count: '', owner: '', unit_price: ''});
            },
            RemoveValuationTransportation(index) {
                this.data.valuation_transportations.splice(index, 1);
            },
            AddValuationPreOperationCost() {
                this.data.valuation_pre_operation_costs.push({description: '', owner: '', total_price: ''});
            },
            RemoveValuationPreOperationCost(index) {
                this.data.valuation_pre_operation_costs.splice(index, 1);
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