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
                                <a href="/financial2" class="text-muted">اطلاعات مالی سال‌های بهره‌برداری</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">افزودن</a>
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
                                    <div v-if="this.$route.params.id > 1">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>هزینه های توسعه</b><hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dev_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="dev_description" placeholder="شرح" name="dev_description" v-model="data.development_cost.description"
                                                           :class="['form-control', {'is-invalid' : errors.has('development_cost.description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('development_cost.description')" style="display: block;">{{ errors.get('development_cost.description') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dev_cost">هزینه کل:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="dev_cost" placeholder="هزینه کل" name="dev_cost" v-model="data.development_cost.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('development_cost.total_cost')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('development_cost.total_cost')" style="display: block;">{{ errors.get('development_cost.total_cost') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>ظرفیت</b><hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nominal_capacity">ظرفیت اسمی(در سال):
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nominal_capacity" placeholder="ظرفیت اسمی" name="nominal_capacity" v-model="data.capacity.nominal_capacity"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('capacity.nominal_capacity')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('capacity.nominal_capacity')" style="display: block;">{{ errors.get('capacity.nominal_capacity') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="capacity_unit">واحد:
                                                    <span class="text-danger">*</span></label>
                                                <select name="capacity_unit" id="capacity_unit" class="form-control" v-model="data.capacity.unit"
                                                        :class="['form-control', {'is-invalid' : errors.has('capacity.unit')}]">
                                                    <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('capacity.unit')" style="display: block;">{{ errors.get('capacity.unit') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="capacity_percent">درصد استفاده از ظرفیت اسمی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="capacity_percent" placeholder="درصد استفاده از ظرفیت اسمی" name="capacity_percent" v-model="data.capacity.percent"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('capacity.percent')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('capacity.percent')" style="display: block;">{{ errors.get('capacity.percent') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>مواد اولیه و بسته بندی برای یک واحد محصول</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(raw, index) in data.raw_material" :key="index">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit">نام محصول:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="materials_unit" class="form-control" v-model="raw.product_name"
                                                            :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.product_name`)}]">
                                                        <option v-for="product in products" :value="product.id">{{ product.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.product_name`)" style="display: block;">{{ errors.get(`raw_material.${index}.product_name`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit">نام:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="materials_unit" class="form-control" v-model="raw.name"
                                                            :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.name`)}]">
                                                        <option v-for="material in materials" :value="material.id">{{ material.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.name`)" style="display: block;">{{ errors.get(`raw_material.${index}.name`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_consumption">میزان مصرف:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="materials_consumption" placeholder="میزان مصرف" name="materials_consumption"v-model="raw.consumption"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.consumption`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.consumption`)" style="display: block;">{{ errors.get(`raw_material.${index}.consumption`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit">واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="materials_unit" id="materials_unit" class="form-control" v-model="raw.unit"
                                                            :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.unit`)}]">
                                                        <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.unit`)" style="display: block;">{{ errors.get(`raw_material.${index}.unit`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit_price">قیمت واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="materials_unit_price" placeholder="قیمت واحد" name="materials_unit_price" v-model="raw.unit_price"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`raw_material.${index}.unit_price`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`raw_material.${index}.unit_price`)" style="display: block;">{{ errors.get(`raw_material.${index}.unit_price`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                <a @click="RemoveRawMaterial(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddRawMaterial" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>نیروی انسانی مورد نیاز</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(man, index) in data.man_power" :key="index">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="materials_unit">نوع نیروی انسانی:
                                                        <span class="text-danger">*</span></label>
                                                    <select @change="man.name = null" name="materials_unit" class="form-control" v-model.number="man.manpower_type"
                                                            :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.manpower_type`)}]">
                                                        <option value="0">غیر تولیدی</option>
                                                        <option value="1">تولیدی</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.manpower_type`)" style="display: block;">{{ errors.get(`man_power.${index}.manpower_type`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit">نام:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="materials_unit" class="form-control" v-model="man.name"
                                                            :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.name`)}]">
                                                        <option v-if="man.manpower_type == 1" v-for="production in productions" :value="production.id">{{ production.name }}</option>
                                                        <option v-if="man.manpower_type == 0" v-for="production in non_productions" :value="production.id">{{ production.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.name`)" style="display: block;">{{ errors.get(`man_power.${index}.name`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="powers_number">تعداد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="powers_number" placeholder="تعداد" name="powers_number" v-model="man.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.number`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.number`)" style="display: block;">{{ errors.get(`man_power.${index}.number`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="powers_salary">حقوق ماهانه:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="powers_salary" placeholder="حقوق ماهانه" name="powers_salary" v-model="man.salary"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`man_power.${index}.salary`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`man_power.${index}.salary`)" style="display: block;">{{ errors.get(`man_power.${index}.salary`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-1" style="margin-top: 28px">
                                                <a @click="RemoveManPower(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddManPower" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>اجاره</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(ren, index) in data.rent" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="rents_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="rents_description" placeholder="شرح" name="rents_description" v-model="ren.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`rent.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`rent.${index}.description`)" style="display: block;">{{ errors.get(`rent.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="area">متراژ:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="area" placeholder="متراژ" name="area" v-model="ren.area"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`rent.${index}.area`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`rent.${index}.area`)" style="display: block;">{{ errors.get(`rent.${index}.area`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="monthly_rent">اجاره ماهانه:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="monthly_rent" placeholder="اجاره ماهانه" name="monthly_rent" v-model="ren.monthly_rent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`rent.${index}.monthly_rent`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`rent.${index}.monthly_rent`)" style="display: block;">{{ errors.get(`rent.${index}.monthly_rent`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                <a @click="RemoveRent(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddRent" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>انرژی مصرفی</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(ener, index) in data.energy_consumption" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="energy_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="energy_description" placeholder="شرح" name="energy_description" v-model="ener.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`energy_consumption.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`energy_consumption.${index}.description`)" style="display: block;">{{ errors.get(`energy_consumption.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="energy_unit">واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="energy_unit" id="energy_unit" class="form-control" v-model="ener.unit"
                                                            :class="['form-control', {'is-invalid' : errors.has(`energy_consumption.${index}.unit`)}]">
                                                        <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`energy_consumption.${index}.unit`)" style="display: block;">{{ errors.get(`energy_consumption.${index}.unit`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="annual_consumption">مصرف سالیانه:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="annual_consumption" placeholder="مصرف سالیانه" name="annual_consumption"  v-model="ener.annual_consumption"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`energy_consumption.${index}.annual_consumption`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`energy_consumption.${index}.annual_consumption`)" style="display: block;">{{ errors.get(`energy_consumption.${index}.annual_consumption`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="energy_unit_cost">هزینه واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="energy_unit_cost" placeholder="هزینه واحد" name="energy_unit_cost"  v-model="ener.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`energy_consumption.${index}.unit_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`energy_consumption.${index}.unit_cost`)" style="display: block;">{{ errors.get(`energy_consumption.${index}.unit_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                <a @click="RemoveEnergyConsumption(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddEnergyConsumption" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>هزینه های R&D</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(rd, index) in data.r_d" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="rd_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="rd_description" placeholder="شرح" name="rd_description" v-model="rd.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`r_d.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`r_d.${index}.description`)" style="display: block;">{{ errors.get(`r_d.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="rd_annual_cost">هزینه سالیانه:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="rd_annual_cost" placeholder="هزینه سالیانه" name="rd_annual_cost" v-model="rd.annual_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`r_d.${index}.annual_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`r_d.${index}.annual_cost`)" style="display: block;">{{ errors.get(`r_d.${index}.annual_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                <a @click="RemoveRD(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddRD" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>هزینه های بازرگانی</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(busi, index) in data.business" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="businesses_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="businesses_description" placeholder="شرح" name="businesses_description" v-model="busi.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`business.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`business.${index}.description`)" style="display: block;">{{ errors.get(`business.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="businesses_annual_cost">هزینه سالیانه:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="businesses_annual_cost" placeholder="هزینه سالیانه" name="businesses_annual_cost" v-model="busi.annual_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`business.${index}.annual_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`business.${index}.annual_cost`)" style="display: block;">{{ errors.get(`business.${index}.annual_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
                                                <a @click="RemoveBusiness(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddBusiness" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>هزینه بیمه</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(insu, index) in data.insurance" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="insurances_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="insurances_description" id="insurances_description" class="form-control" v-model="insu.description"
                                                            :class="['form-control', {'is-invalid' : errors.has(`insurance.${index}.description`)}]">
                                                        <option v-for="des in descriptions" :value="des.description">{{ des.description }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`insurance.${index}.description`)" style="display: block;">{{ errors.get(`insurance.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="insurances_total_cost">هزینه کل:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="insurances_total_cost" placeholder="هزینه کل" name="insurances_total_cost" v-model="insu.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`insurance.${index}.total_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`insurance.${index}.total_cost`)" style="display: block;">{{ errors.get(`insurance.${index}.total_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                <a @click="RemoveInsurance(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddInsurance" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>هزینه تعمیر و نگهداری</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(rep, index) in data.repair" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="repairs_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="repairs_description" id="repairs_description" class="form-control" v-model="rep.description"
                                                            :class="['form-control', {'is-invalid' : errors.has(`repair.${index}.description`)}]">
                                                        <option v-for="des in descriptions" :value="des.description">{{ des.description }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`repair.${index}.description`)" style="display: block;">{{ errors.get(`repair.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="repairs_percent">درصد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="repairs_percent" placeholder="درصد" name="repairs_percent" v-model="rep.percent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`repair.${index}.percent`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`repair.${index}.percent`)" style="display: block;">{{ errors.get(`repair.${index}.percent`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-1" style="margin-top: 28px">
                                                <a @click="RemoveRepair(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddRepair" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>هزینه حمل و نقل</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(tran, index) in data.transportation_cost" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="transportation_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="transportation_description" placeholder="شرح" name="transportation_description" v-model="tran.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`transportation_cost.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`transportation_cost.${index}.description`)" style="display: block;">{{ errors.get(`transportation_cost.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="transportation_number">تعداد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="transportation_number" placeholder="تعداد" name="transportation_number"  v-model="tran.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`transportation_cost.${index}.number`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`transportation_cost.${index}.number`)" style="display: block;">{{ errors.get(`transportation_cost.${index}.number`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="transportation_unit_cost">هزینه واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="transportation_unit_cost" placeholder="هزینه واحد" name="transportation_unit_cost" v-model="tran.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`transportation_cost.${index}.unit_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`transportation_cost.${index}.unit_cost`)" style="display: block;">{{ errors.get(`transportation_cost.${index}.unit_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                <a @click="RemoveTransportationCost(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddTransportationCost" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>هزینه گارانتی</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(warr, index) in data.warranty" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="warr_product_name">نام محصول:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="warr_product_name" id="warr_product_name" class="form-control" v-model="warr.product_name"
                                                            :class="['form-control', {'is-invalid' : errors.has(`warranty.${index}.product_name`)}]">
                                                        <option v-for="product in products" :value="product.id">{{ product.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`warranty.${index}.product_name`)" style="display: block;">{{ errors.get(`warranty.${index}.product_name`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="warranties_percent">درصد از فروش:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="warranties_percent" placeholder="درصد از فروش" name="warranties_percent" v-model="warr.percent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`warranty.${index}.percent`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`warranty.${index}.percent`)" style="display: block;">{{ errors.get(`warranty.${index}.percent`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-1" style="margin-top: 28px">
                                                <a @click="RemoveWarranty(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddWarranty" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>هزینه اقلام مصرفی</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(cons, index) in data.consumer_item" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="consumer_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="consumer_description" placeholder="شرح" name="consumer_description" v-model="cons.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`consumer_item.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`consumer_item.${index}.description`)" style="display: block;">{{ errors.get(`consumer_item.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="consumer_number">تعداد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="consumer_number" placeholder="تعداد" name="consumer_number" v-model="cons.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`consumer_item.${index}.number`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`consumer_item.${index}.number`)" style="display: block;">{{ errors.get(`consumer_item.${index}.number`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="consumer_unit_cost">هزینه واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="consumer_unit_cost" placeholder="هزینه واحد" name="consumer_unit_cost" v-model="cons.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`consumer_item.${index}.unit_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`consumer_item.${index}.unit_cost`)" style="display: block;">{{ errors.get(`consumer_item.${index}.unit_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                <a @click="RemoveConsumerItem(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddConsumerItem" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>درامد خدمات پس از فروش</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(after, index) in data.after_sale_service" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="sale_services_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="sale_services_description" placeholder="شرح" name="sale_services_description" v-model="after.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`after_sale_service.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`after_sale_service.${index}.description`)" style="display: block;">{{ errors.get(`after_sale_service.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="sale_services_number">تعداد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="sale_services_number" placeholder="تعداد" name="sale_services_number" v-model="after.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`after_sale_service.${index}.number`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`after_sale_service.${index}.number`)" style="display: block;">{{ errors.get(`after_sale_service.${index}.number`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="sale_services_unit_cost">هزینه واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="sale_services_unit_cost" placeholder="هزینه واحد" name="sale_services_unit_cost" v-model="after.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`after_sale_service.${index}.unit_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`after_sale_service.${index}.unit_cost`)" style="display: block;">{{ errors.get(`after_sale_service.${index}.unit_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                <a @click="RemoveAfterSaleService(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddAfterSaleService" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>برونسپاری</b><hr>
                                    </div>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(out, index) in data.outsourcing" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="outsourcing_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="outsourcing_description" placeholder="شرح" name="outsourcing_description" v-model="out.description"
                                                           :class="['form-control', {'is-invalid' : errors.has(`outsourcing.${index}.description`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`outsourcing.${index}.description`)" style="display: block;">{{ errors.get(`outsourcing.${index}.description`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="outsourcing_number">تعداد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="outsourcing_number" placeholder="تعداد" name="outsourcing_number" v-model="out.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`outsourcing.${index}.number`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`outsourcing.${index}.number`)" style="display: block;">{{ errors.get(`outsourcing.${index}.number`) }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="outsourcing_unit_cost">هزینه واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="outsourcing_unit_cost" placeholder="هزینه واحد" name="outsourcing_unit_cost" v-model="out.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`outsourcing.${index}.unit_cost`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`outsourcing.${index}.unit_cost`)" style="display: block;">{{ errors.get(`outsourcing.${index}.unit_cost`) }}</div>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-2" style="margin-top: 28px">
                                                <a @click="RemoveOutsourcing(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddOutsourcing" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                    <div style="text-align: center;font-size: initial;">
                                        <b>اطلاعات دیگر</b><hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sale_price">قیمت فروش:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="sale_price" placeholder="برحسب تومان" name="sale_price" v-model="data.other_information.sale_price"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('other_information.sale_price')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('other_information.sale_price')" style="display: block;">{{ errors.get('other_information.sale_price') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tax_rate">میزان مالیات:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="tax_rate" placeholder="برحسب درصد" name="tax_rate" v-model="data.other_information.tax_rate"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('other_information.tax_rate')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('other_information.tax_rate')" style="display: block;">{{ errors.get('other_information.tax_rate') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
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
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "create",
        data() {
            return {
                units: '',
                descriptions: '',
                products: '',
                materials: '',
                productions: '',
                non_productions: '',
                data: {
                    year: this.$route.params.id,
                    development_cost: {},
                    capacity: {},
                    raw_material: [{ name: '', product_name: '', consumption: '', unit: '', unit_price: '' }],
                    man_power: [{ name: '', manpower_type: 0, number: '', salary: '' }],
                    rent: [{ description: '', area: '', monthly_rent: '' }],
                    energy_consumption: [{ description: '', unit: '', annual_consumption: '', unit_cost: '' }],
                    r_d: [{ description: '', annual_cost: '' }],
                    business: [{ description: '', annual_cost: '' }],
                    insurance: [{ description: '', total_cost: '' }],
                    repair: [{ description: '', percent: '' }],
                    transportation_cost: [{ description: '', number: '', unit_cost: '' }],
                    warranty: [{ product_name: '', percent: '' }],
                    consumer_item: [{ description: '', number: '', unit_cost: '' }],
                    after_sale_service: [{ description: '', number: '', unit_cost: '' }],
                    outsourcing: [{ description: '', number: '', unit_cost: '' }],
                    other_information: {},
                },
                test: '',
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/financial2/year/${this.$route.params.id}/create`)
                .then(response => {
                    this.units = response.data.units;
                    this.descriptions = response.data.descriptions;
                    this.products = response.data.products;
                    this.materials = response.data.materials;
                    this.productions = response.data.productions;
                    this.non_productions = response.data.non_productions;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post(`/financial2/year/${this.$route.params.id}`, this.data)
                    .then(response => {
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
                            this.$router.push({name: 'financial2-show', id: this.$route.params.id});
                        }
                    })
                    .catch(error => {
                        console.log(error.response);
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            AddRawMaterial() {
                this.data.raw_material.push({ name: '', product_name: '',consumption: '', unit: '', unit_price: '' });
            },
            RemoveRawMaterial(index) {
                this.data.raw_material.splice(index, 1);
            },
            AddManPower() {
                this.data.man_power.push({ name: '', manpower_type: 0, number: '', salary: '' });
            },
            RemoveManPower(index) {
                this.data.man_power.splice(index, 1);
            },
            AddRent() {
                this.data.rent.push({ description: '', area: '', monthly_rent: '' });
            },
            RemoveRent(index) {
                this.data.rent.splice(index, 1);
            },
            AddEnergyConsumption() {
                this.data.energy_consumption.push({ description: '', unit: '', annual_consumption: '', unit_cost: '' });
            },
            RemoveEnergyConsumption(index) {
                this.data.energy_consumption.splice(index, 1);
            },
            AddRD() {
                this.data.r_d.push({ description: '', annual_cost: '' });
            },
            RemoveRD(index) {
                this.data.r_d.splice(index, 1);
            },
            AddBusiness() {
                this.data.business.push({ description: '', annual_cost: '' });
            },
            RemoveBusiness(index) {
                this.data.business.splice(index, 1);
            },
            AddInsurance() {
                this.data.insurance.push({ description: '', total_cost: '' });
            },
            RemoveInsurance(index) {
                this.data.insurance.splice(index, 1);
            },
            AddRepair() {
                this.data.repair.push({ description: '', percent: '' });
            },
            RemoveRepair(index) {
                this.data.repair.splice(index, 1);
            },
            AddTransportationCost() {
                this.data.transportation_cost.push({ description: '', number: '', unit_cost: '' });
            },
            RemoveTransportationCost(index) {
                this.data.transportation_cost.splice(index, 1);
            },
            AddWarranty() {
                this.data.warranty.push({ product_name: '', percent: '' });
            },
            RemoveWarranty(index) {
                this.data.warranty.splice(index, 1);
            },
            AddConsumerItem() {
                this.data.consumer_item.push({ description: '', number: '', unit_cost: '' });
            },
            RemoveConsumerItem(index) {
                this.data.consumer_item.splice(index, 1);
            },
            AddAfterSaleService() {
                this.data.after_sale_service.push({ description: '', number: '', unit_cost: '' });
            },
            RemoveAfterSaleService(index) {
                this.data.after_sale_service.splice(index, 1);
            },
            AddOutsourcing() {
                this.data.outsourcing.push({ description: '', number: '', unit_cost: '' });
            },
            RemoveOutsourcing(index) {
                this.data.outsourcing.splice(index, 1);
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