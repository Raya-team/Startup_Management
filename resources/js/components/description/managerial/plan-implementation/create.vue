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
                                <a class="text-muted">پیش‌بینی برنامه زمان بندی اجرای طرح</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">افزودن</a>
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
                                    <router-link :to="{ name: 'description-managerial-index' }">
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
    import Auth from "../../../../Auth";
    import Errors from "../../../../Errors";

    export default {
        name: "create",
        data() {
            return {
                data: {
                    plan_implementations: [{ subject_of_work: '', duration_of_work: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        methods: {
            AddPlanImplementation() {
                this.data.plan_implementations.push({ subject_of_work: '', duration_of_work: '' });
            },
            RemovePlanImplementation(index) {
                this.data.plan_implementations.splice(index, 1);
            },
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/description-planimplementations', this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
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