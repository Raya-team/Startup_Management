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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">سهام اولیه</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">محاسبه</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">سرمایه گذاران قبلی</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                افزودن
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
                                            <label class="col-lg-2 col-form-label text-right"><h4>ویرایش حمل و نقل:</h4></label>
                                            <div data-repeater-list="previous_investors" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center" v-for="(previousinvestor, index) in data.previous_investors" :key="index">
                                                    <div class="col-md-6">
                                                        <label><h5>نام و نام خانوادگی :</h5></label>
                                                        <input type="text" class="form-control previous_investors" v-model="previousinvestor.name"
                                                               :class="['form-control', {'is-invalid' : errors.has('previous_investors.' + index +'.name')}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('previous_investors.' + index +'.name')" style="display: block;">{{ errors.get('previous_investors.' + index +'.name') }}</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><h5>درصد :</h5></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control previous_investors" v-model="previousinvestor.percent"
                                                                   :class="['form-control', {'is-invalid' : errors.has('previous_investors.' + index +'.percent')}]"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has('previous_investors.' + index +'.percent')" style="display: block;">{{ errors.get('previous_investors.' + index +'.percent') }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <router-link :to="{ name: 'calculations-index' }">
                                        <button type="submit" style="float: left;" class="btn btn-danger mr-2">بازگشت</button>
                                    </router-link>
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
    import Errors from "../../../../../Errors";
    import Auth from "../../../../../Auth";

    export default {
        name: "edit",
        data() {
            return {
                data: {
                    previous_investors: [{ name: '', percent: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/previousinvestors/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.previous_investors[0].name = response.data.previousinvestors.name;
                    this.data.previous_investors[0].percent = response.data.previousinvestors.percent;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/previousinvestors/${this.$route.params.id}`, this.data)
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
                            this.$router.push({name: 'calculations-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
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