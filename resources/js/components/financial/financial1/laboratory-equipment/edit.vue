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
                                <router-link :to="{name: 'financial1-index'}">
                                    <a class="text-muted">اطلاعات مالی سال صفر</a>
                                </router-link>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                ویرایش تجهیزات آزمایشگاهی
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
                                    <div id="kt_repeater_1">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"><h4>ویرایش تجهیزات آزمایشگاهی:</h4></label>
                                            <div data-repeater-list="laboratory_equipments" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center" v-for="(building, index) in data.laboratory_equipments" :key="index">
                                                    <div class="col-md-3">
                                                        <label><h5>شرح : <span class="text-danger">*</span></h5></label>
                                                        <input type="text" class="form-control laboratory_equipments" v-model="building.description"
                                                               :class="['form-control', {'is-invalid' : errors.has('laboratory_equipments.' + index +'.description')}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('laboratory_equipments.' + index +'.description')" style="display: block;">{{ errors.get('laboratory_equipments.' + index +'.description') }}</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label><h5>تعداد (دستگاه) : <span class="text-danger">*</span></h5></label>
                                                        <input type="text" class="form-control laboratory_equipments" v-model="building.number"
                                                               :class="['form-control', {'is-invalid' : errors.has('laboratory_equipments.' + index +'.number')}]"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('laboratory_equipments.' + index +'.number')" style="display: block;">{{ errors.get('laboratory_equipments.' + index +'.number') }}</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label><h5>قیمت واحد : <span class="text-danger">*</span></h5></label>
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
                                                        <label><h5>قیمت واحد : <span class="text-danger">*</span></h5></label>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <button @click="goBack()" type="submit" style="float: left;" class="btn btn-danger mr-2">بازگشت</button>
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
    import Errors from "../../../../Errors";
    import Auth from "../../../../Auth";

    export default {
        name: "edit",
        data() {
            return {
                data: {
                    laboratory_equipments: [{ description: '', number: '', dollar_unit_price: '', toman_unit_price: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/laboratory-equipments/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.laboratory_equipments[0].description = response.data.laboratory_equipments.description;
                    this.data.laboratory_equipments[0].number = response.data.laboratory_equipments.number;
                    this.data.laboratory_equipments[0].dollar_unit_price = response.data.laboratory_equipments.dollar_unit_price;
                    this.data.laboratory_equipments[0].toman_unit_price = response.data.laboratory_equipments.toman_unit_price;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/laboratory-equipments/${this.$route.params.id}`, this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
                            Swal.fire({
                                title: "اطلاعات با موفقیت ویرایش شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'financial1-index'});
                            setTimeout(() => {
                                var someTabTriggerEl = document.querySelector('#laboratory-equipments-tab');
                                var tab = new bootstrap.Tab(someTabTriggerEl);
                                tab.show();
                            }, 1000);
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            goBack() {
                this.$router.push({name: 'financial1-index'});
                setTimeout(() => {
                    var someTabTriggerEl = document.querySelector('#laboratory-equipments-tab');
                    var tab = new bootstrap.Tab(someTabTriggerEl);
                    tab.show();
                }, 500);
            }
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