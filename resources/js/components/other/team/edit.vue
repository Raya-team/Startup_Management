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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات دیگر</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <router-link :to="{ name: 'team-index' }">
                                    <a class="text-muted">تیم</a>
                                </router-link>
                            </li>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="team_name">نام تیم یا شرکت:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="team_name" placeholder="نام تیم خود را وارد کنید." name="team_name" v-model="data.team.name" :class="['form-control', {'is-invalid' : errors.has('name')}]" required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('name')" style="display: block;">{{ errors.get('name') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="project_name">نام طرح:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="project_name" placeholder="نام طرح خود را وارد کنید." name="project_name" v-model="data.team.project_name" :class="['form-control', {'is-invalid' : errors.has('project_name')}]"  required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('project_name')" style="display: block;">{{ errors.get('project_name') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status">شرکت ثبت شده؟:
                                                    <span class="text-danger">*</span></label>
                                                <select name="status" v-model="data.team.status" id="status" class="form-control" :class="['form-control', {'is-invalid' : errors.has('status')}]" >
                                                    <option value="1">بله</option>
                                                    <option value="2">خیر</option>
                                                </select>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('status')" style="display: block;">{{ errors.get('status') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="team_email">ایمیل:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="team_email" placeholder="ایمیل خود را وارد کنید." name="team_email" v-model="data.team.email" :class="['form-control', {'is-invalid' : errors.has('email')}]"  required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('email')" style="display: block;">{{ errors.get('email') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="team_phone">شماره همراه:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="team_phone" placeholder="شماره همراه خود را وارد کنید." name="team_phone" v-model="data.team.phone_number" :class="['form-control', {'is-invalid' : errors.has('phone_number')}]"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('phone_number')" style="display: block;">{{ errors.get('phone_number') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="land_line">شماره ثابت شهری:</label>
                                                <input type="text" class="form-control" id="land_line" placeholder="شماره ثابت شهری خود را وارد کنید." name="land_line" v-model="data.team.landline"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">آدرس:</label>
                                                <input type="text" class="form-control" id="address" placeholder="این فیلد اختیاری می باشد." name="address" v-model="data.team.address"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <router-link :to="{ name: 'team-index' }">
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
    import Errors from './../../../Errors';
    import Auth from "../../../Auth";

    export default {
        name: "edit",
        data() {
            return {
                data: {
                    team: [],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/team/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.team = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/team/${this.$route.params.id}`, this.data.team)
                    .then(response => {
                        console.log(response);
                        if(response.status == 201){
                            Swal.fire({
                                title: "اطلاعات تیم با موفقیت ویرایش شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'team-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        console.log(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            }
        },
    }
</script>

<style scoped>

</style>