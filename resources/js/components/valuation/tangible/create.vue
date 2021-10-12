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
                                        <h4 style="color: red">مستغلات</h4>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="tenement_description">شرح :
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="tenement_description" name="tenement_description" v-model="data.tenement_description"
                                                           :class="['form-control', {'is-invalid' : errors.has('tenement_description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('tenement_description')" style="display: block;">{{ errors.get('tenement_description') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="tenement_area">متراژ :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                             <span class="input-group-text noselect">
                                                                 متر مربع
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="tenement_area" name="tenement_area" v-model.number="data.tenement_area"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('tenement_area')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('tenement_area')" style="display: block;">{{ errors.get('tenement_area') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="tenement_owner">مالک :
                                                        <span class="text-danger">*</span></label>
                                                    <select name="tenement_owner" id="tenement_owner" class="form-control" v-model="data.tenement_owner" :class="['form-control', {'is-invalid' : errors.has('tenement_owner')}]">
                                                        <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('tenement_owner')" style="display: block;">{{ errors.get('tenement_owner') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="tenement_total_price">قمیت کل :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="tenement_total_price" name="tenement_total_price" v-model.number="data.tenement_total_price"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('tenement_total_price')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('tenement_total_price')" style="display: block;">{{ errors.get('tenement_total_price') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <h3 style="color: red">ماشین آلات و تجهیزات فنی</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="machinery_description">شرح :
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="machinery_description" name="machinery_description" v-model="data.machinery_description"
                                                           :class="['form-control', {'is-invalid' : errors.has('machinery_description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('machinery_description')" style="display: block;">{{ errors.get('machinery_description') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="machinery_number">تعداد :
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="machinery_number" name="machinery_number" v-model.number="data.machinery_number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('machinery_number')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('machinery_number')" style="display: block;">{{ errors.get('machinery_number') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="machinery_owner">مالک :
                                                        <span class="text-danger">*</span></label>
                                                    <select name="machinery_owner" id="machinery_owner" class="form-control" v-model="data.machinery_owner" :class="['form-control', {'is-invalid' : errors.has('machinery_owner')}]">
                                                        <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('machinery_owner')" style="display: block;">{{ errors.get('machinery_owner') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="machinery_unit_price">قمیت واحد :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="machinery_unit_price" name="machinery_unit_price" v-model.number="data.machinery_unit_price"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('machinery_unit_price')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('machinery_unit_price')" style="display: block;">{{ errors.get('machinery_unit_price') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="machinery_total_price">قمیت کل :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="machinery_total_price" name="machinery_total_price" v-model.number="data.machinery_total_price"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('machinery_total_price')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('machinery_total_price')" style="display: block;">{{ errors.get('machinery_total_price') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <h3 style="color: red">تجهیزات و لوازم دفتری</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="office_description">شرح :
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="office_description" name="office_description" v-model="data.office_description"
                                                           :class="['form-control', {'is-invalid' : errors.has('office_description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('office_description')" style="display: block;">{{ errors.get('office_description') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="office_number">تعداد :
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="office_number" name="office_number" v-model.number="data.office_number"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('office_number')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('office_number')" style="display: block;">{{ errors.get('office_number') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="office_owner">مالک :
                                                        <span class="text-danger">*</span></label>
                                                    <select name="office_owner" id="office_owner" class="form-control" v-model="data.office_owner" :class="['form-control', {'is-invalid' : errors.has('office_owner')}]">
                                                        <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('office_owner')" style="display: block;">{{ errors.get('office_owner') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="office_unit_price">قمیت واحد :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="office_unit_price" name="office_unit_price" v-model.number="data.office_unit_price"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('office_unit_price')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('office_unit_price')" style="display: block;">{{ errors.get('office_unit_price') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="office_total_price">قمیت کل :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="office_total_price" name="office_total_price" v-model.number="data.office_total_price"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('office_total_price')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('office_total_price')" style="display: block;">{{ errors.get('office_total_price') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                        <h3 style="color: red">دارایی های دیگر</h3>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="other_description">شرح :
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="other_description" name="other_description" v-model="data.other_description"
                                                           :class="['form-control', {'is-invalid' : errors.has('other_description')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('other_description')" style="display: block;">{{ errors.get('other_description') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="other_owner">مالک :
                                                        <span class="text-danger">*</span></label>
                                                    <select name="machinery_owner" id="other_owner" class="form-control" v-model="data.other_owner" :class="['form-control', {'is-invalid' : errors.has('other_owner')}]">
                                                        <option v-for="shareholder in shareholders" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('other_owner')" style="display: block;">{{ errors.get('other_owner') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="other_total_price">قمیت کل :
                                                        <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                تومان
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" id="other_total_price" name="other_total_price" v-model.number="data.other_total_price"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has('other_total_price')}]"/>
                                                    </div>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('other_total_price')" style="display: block;">{{ errors.get('other_total_price') }}</div>
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
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "create",
        data() {
            return {
                types: [],
                shareholders: [],
                data: {
                    tenement_description: '',
                    tenement_area: '',
                    tenement_owner: '',
                    tenement_total_price: '',
                    machinery_description: '',
                    machinery_number: '',
                    machinery_owner: '',
                    machinery_unit_price: '',
                    machinery_total_price: '',
                    office_description: '',
                    office_number: '',
                    office_owner: '',
                    office_unit_price: '',
                    office_total_price: '',
                    other_description: '',
                    other_owner: '',
                    other_total_price: '',
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/valuation-tangible/create')
                .then(response => {
                    this.shareholders = response.data;
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