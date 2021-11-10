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
                                <a class="text-muted">فنی</a>
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
                                    <h5 class="text-dark font-weight-bold">معرفی محصول</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="product_introduction" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.technical.product_introduction"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">مشخصات فنی</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="technical_specifications" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.technical.technical_specifications"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">مبانی علمی</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="scientific_principles" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.technical.scientific_principles"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">ویژگی‌های فنی محصول</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="scientific_principles" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.technical.technical_features_product"></textarea>
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
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "edit",
        data(){
            return {
                data: {
                    technical: {
                        product_introduction:'',
                        technical_specifications:'',
                        scientific_principles:'',
                        technical_features_product:'',
                    }
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created(){
            this.Auth.check();
            axios.get(`/api/description-technical/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.technical = response.data.technical;
                    // this.data = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/description-technical/${this.$route.params.id}`, this.data)
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
                        this.$router.push({name: 'description-technical-index'});
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

</style>