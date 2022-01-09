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
                                <a class="text-muted">توضیحات اولیه</a>
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
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="product_introduction" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.market.product_introduction"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.product_introduction')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.product_introduction')" style="display: block;">{{ errors.get('market.product_introduction') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">ویژگی های محصول</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="product_features" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.market.product_features"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.product_features')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.product_features')" style="display: block;">{{ errors.get('market.product_features') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">مزیت های رقابتی محصول</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="product_competitive_advantages" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.market.product_competitive_advantages"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.product_competitive_advantages')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.product_competitive_advantages')" style="display: block;">{{ errors.get('market.product_competitive_advantages') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">تجزیه و تحلیل موقعیت</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="position_analysis" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.position_analysis"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.position_analysis')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.position_analysis')" style="display: block;">{{ errors.get('market.position_analysis') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">استراتژی قیمت گذاری محصول</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="pricing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.product_pricing_strategy"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.product_pricing_strategy')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.product_pricing_strategy')" style="display: block;">{{ errors.get('market.product_pricing_strategy') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">استراتژی بازاریابی محصول</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="marketing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.product_marketing_strategy"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.product_marketing_strategy')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.product_marketing_strategy')" style="display: block;">{{ errors.get('market.product_marketing_strategy') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">وضعیت بازار</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="marketing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.market_status"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.market_status')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.market_status')" style="display: block;">{{ errors.get('market.market_status') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">بازار هدف</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="marketing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.target_market"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.target_market')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.target_market')" style="display: block;">{{ errors.get('market.target_market') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">پیش‌بینی آینده بازار</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea name="marketing_strategy" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید" v-model="data.market.forecast_the_future_of_the_market"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('market.forecast_the_future_of_the_market')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('market.forecast_the_future_of_the_market')" style="display: block;">{{ errors.get('market.forecast_the_future_of_the_market') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
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
    import Errors from "../../../Errors";
    import Auth from "../../../Auth";

    export default {
        name: "edit",
        data(){
            return {
                data: {
                    market: {}
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created(){
            this.Auth.check();
            axios.get(`/api/description-market/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.market = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/description-market/${this.$route.params.id}`, this.data)
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
                        this.$router.push({name: 'description-market-index', params: {tab : '#market-tab'}});
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            goBack() {
                this.$router.push({name: 'description-market-index', params: {tab : '#market-tab'}});
            }
        },
    }
</script>

<style scoped>

</style>