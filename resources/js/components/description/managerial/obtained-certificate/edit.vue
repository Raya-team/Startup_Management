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
                                <a class="text-muted">لیست استانداردها، گواهی‌ها و افتخارات کسب شده</a>
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
                                    <h5 class="text-dark font-weight-bold">استانداردها، گواهی‌ها و افتخارات کسب شده</h5><br>
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
    import Auth from "../../../../Auth";
    import Errors from "../../../../Errors";

    export default {
        name: "edit",
        data() {
            return {
                data: {
                    obtained_certificate: [{ description: '', acquisition_year: '', comment: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            axios.get(`/api/description-obtainedcertificates/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.obtained_certificate[0].description = response.data.description;
                    this.data.obtained_certificate[0].acquisition_year = response.data.acquisition_year;
                    this.data.obtained_certificate[0].comment = response.data.comment;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/description-obtainedcertificates/${this.$route.params.id}`, this.data)
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