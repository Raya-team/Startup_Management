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
                                <a href="/financial2" class="text-muted">اطلاعات مالی دو</a>
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
                                        <h3 style="color: red">هزینه های توسعه</h3><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="dev_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="dev_description" placeholder="شرح" name="dev_description" v-model="data.development_cost.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="dev_cost">هزینه کل:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="dev_cost" placeholder="هزینه کل" name="dev_cost" v-model="data.development_cost.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 style="color: red">ظرفیت</h3><hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="nominal_capacity">ظرفیت اسمی(در سال):
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nominal_capacity" placeholder="ظرفیت اسمی" name="nominal_capacity" v-model="data.capacity.nominal_capacity"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="capacity_unit">واحد:
                                                    <span class="text-danger">*</span></label>
                                                <select name="capacity_unit" id="capacity_unit" class="form-control" v-model="data.capacity.unit">
                                                    <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="capacity_percent">درصد استفاده از ظرفیت اسمی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="capacity_percent" placeholder="درصد استفاده از ظرفیت اسمی" name="capacity_percent" v-model="data.capacity.percent"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="total_production">تعداد تولید واقعی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="total_production" placeholder="تعداد تولید واقعی" name="total_production" v-model="data.capacity.total_production"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 style="color: red">مواد اولیه و بسته بندی برای یک واحد محصول</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(raw, index) in data.raw_material" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="materials_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="materials_description" placeholder="شرح" name="materials_description" v-model="raw.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_consumption">میزان مصرف:</label>
                                                    <input type="text" class="form-control" id="materials_consumption" placeholder="میزان مصرف" name="materials_consumption"v-model="raw.consumption"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit">واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="materials_unit" id="materials_unit" class="form-control" v-model="raw.unit">
                                                        <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_unit_price">قیمت واحد:</label>
                                                    <input type="text" class="form-control" id="materials_unit_price" placeholder="قیمت واحد" name="materials_unit_price" v-model="raw.unit_price"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="materials_total_price">قیمت کل:</label>
                                                    <input type="text" class="form-control" id="materials_total_price" placeholder="قیمت کل" name="materials_total_price" v-model="raw.total_price"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                                    <h3 style="color: red">نیروی انسانی مورد نیاز</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(man, index) in data.man_power" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="powers_description">شرح:</label>
                                                    <input type="text" class="form-control" id="powers_description" placeholder="شرح" name="powers_description" v-model="man.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="powers_number">تعداد:</label>
                                                    <input type="text" class="form-control" id="powers_number" placeholder="تعداد" name="powers_number" v-model="man.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="powers_salary">حقوق ماهانه:</label>
                                                    <input type="text" class="form-control" id="powers_salary" placeholder="حقوق ماهانه" name="powers_salary" v-model="man.salary"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="powers_total_rights">حقوق کل:</label>
                                                    <input type="text" class="form-control" id="powers_total_rights" placeholder="حقوق کل" name="powers_total_rights" v-model="man.total_rights"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
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
                                    <h3 style="color: red">اجاره</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(ren, index) in data.rent" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="rents_description">شرح:</label>
                                                    <input type="text" class="form-control" id="rents_description" placeholder="شرح" name="rents_description" v-model="ren.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="area">متراژ:</label>
                                                    <input type="text" class="form-control" id="area" placeholder="متراژ" name="area" v-model="ren.area"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="monthly_rent">اجاره ماهانه:</label>
                                                    <input type="text" class="form-control" id="monthly_rent" placeholder="اجاره ماهانه" name="monthly_rent" v-model="ren.monthly_rent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="total_rent">اجاره کل:</label>
                                                    <input type="text" class="form-control" id="total_rent" placeholder="اجاره کل" name="total_rent" v-model="ren.total_rent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
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
                                    <h3 style="color: red">انرژی مصرفی</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(ener, index) in data.energy_consumption" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="energy_description">شرح:</label>
                                                    <input type="text" class="form-control" id="energy_description" placeholder="شرح" name="energy_description" v-model="ener.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="energy_unit">واحد:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="energy_unit" id="energy_unit" class="form-control" v-model="ener.unit">
                                                        <option v-for="unit in units" :value="unit.id">{{ unit.name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="annual_consumption">مصرف سالیانه:</label>
                                                    <input type="text" class="form-control" id="annual_consumption" placeholder="مصرف سالیانه" name="annual_consumption"  v-model="ener.annual_consumption"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="energy_unit_cost">هزینه واحد:</label>
                                                    <input type="text" class="form-control" id="energy_unit_cost" placeholder="هزینه واحد" name="energy_unit_cost"  v-model="ener.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="energy_annual_cost">هزینه سالیانه:</label>
                                                    <input type="text" class="form-control" id="energy_annual_cost" placeholder="هزینه سالیانه" name="energy_annual_cost"  v-model="ener.annual_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                                    <h3 style="color: red">هزینه های R&D</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(rd, index) in data.r_d" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="rd_description">شرح:</label>
                                                    <input type="text" class="form-control" id="rd_description" placeholder="شرح" name="rd_description" v-model="rd.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="rd_annual_cost">هزینه سالیانه:</label>
                                                    <input type="text" class="form-control" id="rd_annual_cost" placeholder="هزینه سالیانه" name="rd_annual_cost" v-model="rd.annual_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                                    <h3 style="color: red">هزینه های بازرگانی</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(busi, index) in data.business" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="businesses_description">شرح:</label>
                                                    <input type="text" class="form-control" id="businesses_description" placeholder="شرح" name="businesses_description" v-model="busi.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="businesses_annual_cost">هزینه سالیانه:</label>
                                                    <input type="text" class="form-control" id="businesses_annual_cost" placeholder="هزینه سالیانه" name="businesses_annual_cost" v-model="busi.annual_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                                    <h3 style="color: red">هزینه بیمه</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(insu, index) in data.insurance" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="insurances_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="insurances_description" id="insurances_description" class="form-control" v-model="insu.description">
                                                        <option v-for="des in descriptions" :value="des.description">{{ des.description }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="insurances_percent">درصد</label>
                                                    <input type="text" class="form-control" id="insurances_percent" placeholder="تعداد" name="insurances_percent" v-model="insu.percent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="insurances_total_cost">هزینه کل:</label>
                                                    <input type="text" class="form-control" id="insurances_total_cost" placeholder="هزینه کل" name="insurances_total_cost" v-model="insu.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                                    <h3 style="color: red">هزینه تعمیر و نگهداری</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(rep, index) in data.repair" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="repairs_description">شرح:
                                                        <span class="text-danger">*</span></label>
                                                    <select name="repairs_description" id="repairs_description" class="form-control" v-model="rep.description">
                                                        <option v-for="des in descriptions" :value="des.description">{{ des.description }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="repairs_percent">درصد</label>
                                                    <input type="text" class="form-control" id="repairs_percent" placeholder="تعداد" name="repairs_percent" v-model="rep.percent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="repairs_total_cost">هزینه کل:</label>
                                                    <input type="text" class="form-control" id="repairs_total_cost" placeholder="هزینه کل" name="repairs_total_cost" v-model="rep.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                                    <h3 style="color: red">هزینه حمل و نقل</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(tran, index) in data.transportation_cost" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="transportation_description">شرح:</label>
                                                    <input type="text" class="form-control" id="transportation_description" placeholder="شرح" name="transportation_description" v-model="tran.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="transportation_number">تعداد:</label>
                                                    <input type="text" class="form-control" id="transportation_number" placeholder="تعداد" name="transportation_number"  v-model="tran.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="transportation_unit_cost">هزینه واحد:</label>
                                                    <input type="text" class="form-control" id="transportation_unit_cost" placeholder="هزینه واحد" name="transportation_unit_cost" v-model="tran.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="transportation_total_cost">هزینه کل:</label>
                                                    <input type="text" class="form-control" id="transportation_total_cost" placeholder="هزینه کل" name="transportation_total_cost" v-model="tran.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
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
                                    <h3 style="color: red">هزینه گارانتی</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(warr, index) in data.warranty" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="warranties_description">شرح:</label>
                                                    <input type="text" class="form-control" id="warranties_description" placeholder="شرح" name="warranties_description" v-model="warr.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="warranties_percent">درصد از فروش:</label>
                                                    <input type="text" class="form-control" id="warranties_percent" placeholder="درصد از فروش" name="warranties_percent" v-model="warr.percent"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="warranties_total_cost">هزینه کل:</label>
                                                    <input type="text" class="form-control" id="warranties_total_cost" placeholder="هزینه کل" name="warranties_total_cost" v-model="warr.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                                    <h3 style="color: red">هزینه اقلام مصرفی</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(cons, index) in data.consumer_item" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="consumer_description">شرح:</label>
                                                    <input type="text" class="form-control" id="consumer_description" placeholder="شرح" name="consumer_description" v-model="cons.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="consumer_number">تعداد:</label>
                                                    <input type="text" class="form-control" id="consumer_number" placeholder="تعداد" name="consumer_number" v-model="cons.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="consumer_unit_cost">هزینه واحد:</label>
                                                    <input type="text" class="form-control" id="consumer_unit_cost" placeholder="هزینه واحد" name="consumer_unit_cost" v-model="cons.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="consumer_total_cost">هزینه کل:</label>
                                                    <input type="text" class="form-control" id="consumer_total_cost" placeholder="هزینه کل" name="consumer_total_cost" v-model="cons.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
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
                                    <h3 style="color: red">درامد خدمات پس از فروش</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(after, index) in data.after_sale_service" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="sale_services_description">شرح:</label>
                                                    <input type="text" class="form-control" id="sale_services_description" placeholder="شرح" name="sale_services_description" v-model="after.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="sale_services_number">تعداد:</label>
                                                    <input type="text" class="form-control" id="sale_services_number" placeholder="تعداد" name="sale_services_number" v-model="after.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="sale_services_unit_cost">هزینه واحد:</label>
                                                    <input type="text" class="form-control" id="sale_services_unit_cost" placeholder="هزینه واحد" name="sale_services_unit_cost" v-model="after.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="sale_services_total_cost">هزینه کل:</label>
                                                    <input type="text" class="form-control" id="sale_services_total_cost" placeholder="هزینه کل" name="sale_services_total_cost" v-model="after.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
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
                                    <h3 style="color: red">برونسپاری</h3><hr>
                                    <transition-group name="slide">
                                        <div class="row" v-for="(out, index) in data.outsourcing" :key="index">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="outsourcing_description">شرح:</label>
                                                    <input type="text" class="form-control" id="outsourcing_description" placeholder="شرح" name="outsourcing_description" v-model="out.description"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="outsourcing_number">تعداد:</label>
                                                    <input type="text" class="form-control" id="outsourcing_number" placeholder="تعداد" name="outsourcing_number" v-model="out.number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="outsourcing_unit_cost">هزینه واحد:</label>
                                                    <input type="text" class="form-control" id="outsourcing_unit_cost" placeholder="هزینه واحد" name="outsourcing_unit_cost" v-model="out.unit_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="outsourcing_total_cost">هزینه کل:</label>
                                                    <input type="text" class="form-control" id="outsourcing_total_cost" placeholder="هزینه کل" name="outsourcing_total_cost" v-model="out.total_cost"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                </div>
                                            </div>
                                            <div v-if="index != 0" class="col-md-3" style="margin-top: 28px">
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
                                    <h3 style="color: red">اطلاعات دیگر</h3><hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sale_price">قیمت فروش:</label>
                                                <input type="text" class="form-control" id="sale_price" placeholder="برحسب تومان" name="sale_price" v-model="data.other_information.sale_price"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tax_rate">میزان مالیات:</label>
                                                <input type="text" class="form-control" id="tax_rate" placeholder="برحسب درصد" name="tax_rate" v-model="data.other_information.tax_rate"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
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
                data: {
                    development_cost: {},
                    capacity: {},
                    raw_material: [{ description: '', unit: '', unit_price: '', total_price: '' }],
                    man_power: [{ description: '', number: '', salary: '', total_rights: '' }],
                    rent: [{ description: '', area: '', monthly_rent: '', total_rent: '' }],
                    energy_consumption: [{ description: '', unit: '', annual_consumption: '', unit_cost: '', annual_cost: '' }],
                    r_d: [{ description: '', annual_cost: '' }],
                    business: [{ description: '', annual_cost: '' }],
                    insurance: [{ description: '', percent: '', total_cost: '' }],
                    repair: [{ description: '', percent: '', total_cost: '' }],
                    transportation_cost: [{ description: '', number: '', unit_cost: '', total_cost: '' }],
                    warranty: [{ description: '', percent: '', total_cost: '' }],
                    consumer_item: [{ description: '', number: '', unit_cost: '', total_cost: '' }],
                    after_sale_service: [{ description: '', number: '', unit_cost: '', total_cost: '' }],
                    outsourcing: [{ description: '', number: '', unit_cost: '', total_cost: '' }],
                    other_information: {},
                },
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
                this.data.raw_material.push({ description: '', unit: '', unit_price: '', total_price: '' });
            },
            RemoveRawMaterial(index) {
                this.data.raw_material.splice(index, 1);
            },
            AddManPower() {
                this.data.man_power.push({ description: '', number: '', salary: '', total_rights: '' });
            },
            RemoveManPower(index) {
                this.data.man_power.splice(index, 1);
            },
            AddRent() {
                this.data.rent.push({ description: '', area: '', monthly_rent: '', total_rent: '' });
            },
            RemoveRent(index) {
                this.data.rent.splice(index, 1);
            },
            AddEnergyConsumption() {
                this.data.energy_consumption.push({ description: '', unit: '', annual_consumption: '', unit_cost: '', annual_cost: '' });
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
                this.data.insurance.push({ description: '', percent: '', total_cost: '' });
            },
            RemoveInsurance(index) {
                this.data.insurance.splice(index, 1);
            },
            AddRepair() {
                this.data.repair.push({ description: '', percent: '', total_cost: '' });
            },
            RemoveRepair(index) {
                this.data.repair.splice(index, 1);
            },
            AddTransportationCost() {
                this.data.transportation_cost.push({ description: '', number: '', unit_cost: '', total_cost: '' });
            },
            RemoveTransportationCost(index) {
                this.data.transportation_cost.splice(index, 1);
            },
            AddWarranty() {
                this.data.warranty.push({ description: '', percent: '', total_cost: '' });
            },
            RemoveWarranty(index) {
                this.data.warranty.splice(index, 1);
            },
            AddConsumerItem() {
                this.data.consumer_item.push({ description: '', number: '', unit_cost: '', total_cost: '' });
            },
            RemoveConsumerItem(index) {
                this.data.consumer_item.splice(index, 1);
            },
            AddAfterSaleService() {
                this.data.after_sale_service.push({ description: '', number: '', unit_cost: '', total_cost: '' });
            },
            RemoveAfterSaleService(index) {
                this.data.after_sale_service.splice(index, 1);
            },
            AddOutsourcing() {
                this.data.outsourcing.push({ description: '', number: '', unit_cost: '', total_cost: '' });
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