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
                                                <textarea name="technical_features_product" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.technical.technical_features_product"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">شرایط و نوبت کاری</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="technical_features_product" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.technical.terms_and_conditions_of_work"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">برنامه تولید</h5><br>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <textarea name="technical_features_product" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید" v-model="data.technical.production_schedule"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <h5 class="text-dark font-weight-bold">استانداردها، گواهی‌ها و افتخارات کسب شده</h5><br>
                                    <transition-group name="slide">
                                        <div v-for="(cer, index) in data.required_certificates" :key="index">
                                            <div data-repeater-list="product" class="col-lg-10">
                                                <div data-repeater-item="" class="align-items-center">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="description">شرح:</label>
                                                                <input type="text" class="form-control products" id="description" name="description" placeholder="شرح" v-model="cer.description" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="acquisition_year">اخذ شده؟</label>
                                                                <input type="text" class="form-control products" id="acquisition_year" name="acquisition_year" placeholder="سال اخذ" v-model.number="cer.received"
                                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="type">نوع:</label>
                                                                <select name="type" class="form-control" id="type" v-model="cer.type">
                                                                    <option value="1">اجباری</option>
                                                                    <option value="0">غیر اجباری</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div v-if="index != 0"  class="col-md-2" style="margin-top: 28px">
                                                            <a @click="RemoveRequiredCertificate(index)" href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                <i class="la la-trash-o"></i>حذف</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <a @click="AddRequiredCertificate" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
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
                data: {
                    technical: {},
                    required_certificates: [{ description: '', received: '', type: '' }],
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
                axios.post(`/description-technical`, this.data)
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
                            this.$router.push({name: 'description-technical-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            AddRequiredCertificate() {
                this.data.required_certificates.push({ description: '', received: '', type: '' });
            },
            RemoveRequiredCertificate(index) {
                this.data.required_certificates.splice(index, 1);
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