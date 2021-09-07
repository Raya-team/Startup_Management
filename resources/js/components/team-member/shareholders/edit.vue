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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اعضای تیم</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <router-link :to="{ name: 'shareholders-index' }">
                                    <a class="text-muted">سهامداران</a>
                                </router-link>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">افزودن</div>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">نام:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" :class="['form-control', {'is-invalid' : errors.has('fname')}]" id="fname" placeholder="نام خود را وارد کنید." name="fname" v-model="data.fname" required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('fname')">{{ errors.get('fname') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lname">نام خانوادگی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" :class="['form-control', {'is-invalid' : errors.has('lname')}]" id="lname" placeholder="نام خانوادگی خود را وارد کنید." name="lname" v-model="data.lname" required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('lname')">{{ errors.get('lname') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="major">رشته:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" :class="['form-control', {'is-invalid' : errors.has('major')}]" id="major" placeholder="رشته خود را وارد کنید." name="major" v-model="data.major" required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('major')">{{ errors.get('major') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="age">سال تولد:
                                                    <span class="text-danger">*</span></label>
                                                <select name="age" id="age" :class="['form-control', {'is-invalid' : errors.has('age')}]" v-model="data.age" data-placeholder="سال تولد خود را انتخاب کنید">
                                                    <option v-for="(n, index) in 100" :value="this_year - index">{{ this_year - index }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('age')">{{ errors.get('age') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="education">تحصیلات:
                                                    <span class="text-danger">*</span></label>
                                                <select name="education" id="education" :class="['form-control', {'is-invalid' : errors.has('education')}]" v-model="data.education_id">
                                                    <option v-for="edu in education" :value="edu.id">{{ edu.nickname }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('education')">{{ errors.get('education') }}</div>
                                            </div>
                                        </div>

                                        <!--<div class="col-md-6">-->
                                            <!--<div class="form-group">-->
                                                <!--<label for="kt_select2_3">مسئولیت:-->
                                                    <!--<span class="text-danger">*</span></label>-->
                                                <!--<select name="responsibility" id="kt_select2_3" multiple="multiple" class="form-control select2" data-placeholder="با نگه داشتن Ctrl می‌توانید مسئولیت‌های بیشتری را انتخاب کنید">-->
                                                    <!--<option v-for="responsibility in responsibilities" :value="responsibility.id">{{ responsibility.nickname }}</option>-->
                                                <!--</select>-->
                                                <!--<div class="invalid-feedback is-invalid" v-if="errors.has('responsibility')">{{ errors.get('responsibility') }}</div>-->
                                            <!--</div>-->
                                        <!--</div>-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>مسئولیت:
                                                    <span class="text-danger">*</span></label>
                                                <select name="responsibility" multiple="multiple" v-model="data.responsibility" class="form-control" data-placeholder="با نگه داشتن Ctrl می‌توانید مسئولیت‌های بیشتری را انتخاب کنید">
                                                    <option v-for="responsibility in responsibilities" :value="responsibility.id">{{ responsibility.nickname }}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('responsibility')">{{ errors.get('responsibility') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="resume">سابقه عضویت در تیم(بر حسب سال):
                                                    <span class="text-danger">*</span></label>
                                                <select name="resume" v-model="data.resume" id="resume" :class="['form-control', {'is-invalid' : errors.has('resume')}]">
                                                    <option v-for="n in 20" :value="n">{{n}}</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('resume')">{{ errors.get('resume') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="investment">سرمایه گذاری:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" :class="['form-control', {'is-invalid' : errors.has('investment')}]" id="investment" placeholder="برحسب تومان" name="investment" v-model="data.investment" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('investment')">{{ errors.get('investment') }}</div>
                                            </div>
                                        </div>
                                    </div>
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
    class Errors {
        constructor() {
            this.errors = {};
        }

        has(field) {
            return this.errors.hasOwnProperty(field);
        }

        get(field) {
            if (this.errors[field]) {
                return this.errors[field][0]
            }
        }

        record(errors) {
            this.errors = errors;
        }
    }
    export default {
        name: "edit",
        data(){
            return {
                education: [],
                responsibilities: [],
                this_year: null,
                data: {
                    responsibility : []
                },
                errors: new Errors(),
            }
        },
        created(){
            axios.get(`/api/shareholders/${this.$route.params.id}/edit`)
                .then(response => {
                    this.education = response.data.education;
                    this.responsibilities = response.data.responsibilities;
                    this.this_year = parseInt(response.data.this_year);
                    this.data = response.data.member;
                    for (var i=0; i<response.data.member.responsibility.length; i++){
                        this.data.responsibility.push(response.data.member.responsibility[i].id)
                    }
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                axios.put(`/shareholders/${this.$route.params.id}`, this.data)
                    .then(response => {
                        // var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                        // var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                        // KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                        Swal.fire({
                            title: "اطلاعات سهامدار با موفقیت ویرایش شد",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "باشد",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                        // this.$router.push({name: 'shareholders-index'});
                    })
                    .catch(error => {
                        console.log(error.response.data);
                        this.errors.record(error.response.data.errors);
                    });
            },
        },
    }
</script>

<style scoped>

</style>