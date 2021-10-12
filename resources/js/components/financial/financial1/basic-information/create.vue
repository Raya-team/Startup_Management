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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="number_of_day_2">تعدار روزی که طول می کشد مواد اولیه تبدیل به محصول شود :
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="depreciation_rate_1">میزان استهلاک ساختمان ها :
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
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
    import Errors from "../../../../Errors";
    import Auth from "../../../../Auth";

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
                    type: '',
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
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/basic-information', this.data)
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
                        console.log(response);

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
    .noselect {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #a2a2a2;
    }
</style>