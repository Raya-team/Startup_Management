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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">محساسبه سهام مشارکت</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">تامین از سرمایه گذاران جدید</a>
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
                                    <div class="text-center">
                                        <b style="font-size: initial;">تامین از سرمایه گذاران جدید</b><hr><br>
                                    </div>
                                    <div class="form-group row" v-for="(investor, index) in data.new_investors" :key="index">
                                        <div data-repeater-list="" class="col-lg-12">
                                            <div data-repeater-item="" class="form-group row align-items-center">
                                                <div class="col-md-4">
                                                    <label>نام تامین کننده: <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control products" name="new_supplier_name" v-model="investor.supplier"
                                                           :class="['form-control', {'is-invalid' : errors.has(`new_investors.${index}.supplier`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`new_investors.${index}.supplier`)" style="display: block;">{{ errors.get(`new_investors.${index}.supplier`) }}</div>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>میزان سرمایه گذاری: <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control products" name="new_investment"  v-model="investor.investment"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has(`new_investors.${index}.investment`)}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has(`new_investors.${index}.investment`)" style="display: block;">{{ errors.get(`new_investors.${index}.investment`) }}</div>
                                                    <div class="d-md-none mb-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <router-link :to="{ name: 'participation-shares-index' }">
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
                    new_investors: [{ supplier: '', investment: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            axios.get(`/api/new-investors/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.new_investors[0].supplier = response.data.supplier;
                    this.data.new_investors[0].investment = response.data.investment;
                })
                .catch(error => {console.log(error);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/new-investors/${this.$route.params.id}`, this.data)
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
                            this.$router.push({name: 'participation-shares-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        console.log(error.response);
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
</style>