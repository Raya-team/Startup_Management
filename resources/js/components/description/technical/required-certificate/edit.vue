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
                                <a class="text-muted">لیست مجوزها و گواهی‌نامه‌های موردنیاز</a>
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
                                    <hr data-v-00f88864="" style="width: 80%; border-top: 1px solid rgba(8, 0, 255, 0.21);">
                                    <div style="text-align: center;font-size: initial;">
                                        <b>استانداردها، گواهی‌ها و افتخارات کسب شده</b><hr>
                                    </div>
                                    <div v-for="(cer, index) in data.required_certificates" :key="index">
                                        <div data-repeater-list="product" class="col-lg-10">
                                            <div data-repeater-item="" class="align-items-center">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="description">شرح:</label>
                                                            <input type="text" class="form-control products" id="description" name="description" placeholder="شرح" v-model="cer.description"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`required_certificates.${index}.description`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`required_certificates.${index}.description`)" style="display: block;">{{ errors.get(`required_certificates.${index}.description`) }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="acquisition_year">اخذ شده؟</label>
                                                            <input type="text" class="form-control products" id="acquisition_year" name="acquisition_year" placeholder="سال اخذ" v-model.number="cer.received"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has(`required_certificates.${index}.received`)}]"/>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`required_certificates.${index}.received`)" style="display: block;">{{ errors.get(`required_certificates.${index}.received`) }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="type">نوع:</label>
                                                            <select name="type" class="form-control" id="type" v-model="cer.type"
                                                                    :class="['form-control', {'is-invalid' : errors.has(`required_certificates.${index}.type`)}]">
                                                                <option value="1">اجباری</option>
                                                                <option value="0">غیر اجباری</option>
                                                            </select>
                                                            <div class="invalid-feedback is-invalid" v-if="errors.has(`required_certificates.${index}.type`)" style="display: block;">{{ errors.get(`required_certificates.${index}.type`) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <router-link :to="{ name: 'description-technical-index' }">
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
        name: "edit",
        data() {
            return {
                data: {
                    required_certificates: [{ description: '', received: '', type: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            axios.get(`/api/description-requiredcertificates/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.required_certificates[0].description = response.data.description;
                    this.data.required_certificates[0].received = response.data.received;
                    this.data.required_certificates[0].type = response.data.type;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/description-requiredcertificates/${this.$route.params.id}`, this.data)
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
                            this.$router.push({name: 'description-technical-index'});
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