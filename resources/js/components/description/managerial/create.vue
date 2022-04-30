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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">توضیحات</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">مدیریتی</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">ایجاد</a>
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
                                    <h5 class="text-dark font-weight-bold">درباره تیم/شرکت
                                        <span class="text-danger">*</span></h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="about_team" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.managerial.about_team"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('managerial.about_team')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('managerial.about_team')" style="display: block;">{{ errors.get('managerial.about_team') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">چشم انداز تیم/شرکت
                                        <span class="text-danger">*</span></h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="vision" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.managerial.vision"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('managerial.vision')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('managerial.vision')" style="display: block;">{{ errors.get('managerial.vision') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">ماموریت تیم/شرکت
                                        <span class="text-danger">*</span></h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="mission" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.managerial.mission"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('managerial.mission')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('managerial.mission')" style="display: block;">{{ errors.get('managerial.mission') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">شایستگی های کلیدی تیم/شرکت
                                        <span class="text-danger">*</span></h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="key_competencies" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.managerial.key_competencies"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('managerial.key_competencies')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('managerial.key_competencies')" style="display: block;">{{ errors.get('managerial.key_competencies') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">اهداف</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="targets" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.managerial.targets"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('managerial.targets')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('managerial.targets')" style="display: block;">{{ errors.get('managerial.targets') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">بیان مساله
                                        <span class="text-danger">*</span></h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="problem_statement" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.managerial.problem_statement"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('managerial.problem_statement')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('managerial.problem_statement')" style="display: block;">{{ errors.get('managerial.problem_statement') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--<hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">استانداردها، گواهی‌ها و افتخارات کسب شده
                                        <span class="text-danger">*</span></h5><br>
                                    <transition-group name="slide">
                                        <div class="form-group row" v-for="(cer, index) in data.obtained_certificate" :key="index">
                                            <div data-repeater-list="product" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control products" name="description" placeholder="شرح" v-model="cer.description"
                                                               :class="['form-control', {'is-invalid' : errors.has(`obtained_certificate.${index}.description`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`obtained_certificate.${index}.description`)" style="display: block;">{{ errors.get(`obtained_certificate.${index}.description`) }}</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control products" name="acquisition_year" placeholder="سال اخذ" v-model="cer.acquisition_year"
                                                               oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                               :class="['form-control', {'is-invalid' : errors.has(`obtained_certificate.${index}.acquisition_year`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`obtained_certificate.${index}.acquisition_year`)" style="display: block;">{{ errors.get(`obtained_certificate.${index}.acquisition_year`) }}</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <textarea name="comment" class="form-control form-control-solid" rows="3" placeholder="توضیحات" v-model="cer.comment"
                                                                  :class="['form-control', {'is-invalid border border-danger' : errors.has(`obtained_certificate.${index}.comment`)}]"></textarea>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`obtained_certificate.${index}.comment`)" style="display: block;">{{ errors.get(`obtained_certificate.${index}.comment`) }}</div>
                                                    </div>
                                                    <div v-if="index != 0" class="col-md-2">
                                                        <a  @click="RemoveObtainedCertificate(index)" href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="col-md-2">
                                        <a @click="AddObtainedCertificate" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
                                    </div>-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">پیش‌بینی برنامه زمان‌بندی اجرای طرح
                                        <span class="text-danger">*</span></h5><br>
                                    <transition-group name="slide">
                                        <div class="form-group row" v-for="(plan, index) in data.plan_implementations" :key="index">
                                            <div data-repeater-list="product" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control products" name="description" placeholder="موضوع کار" v-model="plan.subject_of_work"
                                                               :class="['form-control', {'is-invalid' : errors.has(`plan_implementations.${index}.subject_of_work`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`plan_implementations.${index}.subject_of_work`)" style="display: block;">{{ errors.get(`plan_implementations.${index}.subject_of_work`) }}</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control products" name="acquisition_year" placeholder="مدت زمان کار" v-model="plan.duration_of_work"
                                                               :class="['form-control', {'is-invalid' : errors.has(`plan_implementations.${index}.duration_of_work`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`plan_implementations.${index}.duration_of_work`)" style="display: block;">{{ errors.get(`plan_implementations.${index}.duration_of_work`) }}</div>
                                                    </div>
                                                    <div v-if="index != 0" class="col-md-2">
                                                        <a  @click="RemovePlanImplementation(index)" href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="col-md-2">
                                        <a @click="AddPlanImplementation" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>افزودن</a>
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
                    managerial: {},
                    obtained_certificate: [{ description: '', acquisition_year: '', comment: '' }],
                    plan_implementations: [{ subject_of_work: '', duration_of_work: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post(`/description-managerial`, this.data)
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
                            this.$router.push({name: 'description-managerial-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            AddObtainedCertificate() {
                this.data.obtained_certificate.push({ description: '', acquisition_year: '', comment: '' });
            },
            RemoveObtainedCertificate(index) {
                this.data.obtained_certificate.splice(index, 1);
            },
            AddPlanImplementation() {
                this.data.plan_implementations.push({ subject_of_work: '', duration_of_work: '' });
            },
            RemovePlanImplementation(index) {
                this.data.plan_implementations.splice(index, 1);
            },
        },
    }
</script>

<style scoped>
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