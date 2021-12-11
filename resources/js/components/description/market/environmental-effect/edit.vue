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
                                <a class="text-muted">بازار</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">تاثیرات محیطی</a>
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
                                    <h5 class="text-dark font-weight-bold">اقتصادی</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="economical" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.environmental_effect.economical"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('environmental_effect.economical')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('environmental_effect.economical')" style="display: block;">{{ errors.get('environmental_effect.economical') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">اجتماعی</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="social" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.environmental_effect.social"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('environmental_effect.social')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('environmental_effect.social')" style="display: block;">{{ errors.get('environmental_effect.social') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">سیاسی</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="political" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.environmental_effect.political"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('environmental_effect.political')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('environmental_effect.political')" style="display: block;">{{ errors.get('environmental_effect.political') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">محیط زیستی</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="environmental" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.environmental_effect.environmental"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('environmental_effect.environmental')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('environmental_effect.environmental')" style="display: block;">{{ errors.get('environmental_effect.environmental') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
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
    import Errors from "../../../../Errors";
    import Auth from "../../../../Auth";

    export default {
        name: "edit",
        data(){
            return {
                data: {
                    environmental_effect: {}
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created(){
            this.Auth.check();
            axios.get(`/api/environmental-effects/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.environmental_effect = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/environmental-effects/${this.$route.params.id}`, this.data)
                    .then(response => {
                        Swal.fire({
                            title: "اطلاعات با موفقیت ویرایش شد",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "باشد",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                        this.$router.push({name: 'description-market-index'});
                        setTimeout(() => {
                            var someTabTriggerEl = document.querySelector('#environmental-effects-tab');
                            var tab = new bootstrap.Tab(someTabTriggerEl);
                            tab.show();
                        }, 1000);
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
        },
    }
</script>

<style scoped>

</style>