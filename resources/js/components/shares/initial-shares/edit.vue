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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">محاسبه سهام</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <a class="text-muted">سهام اولیه</a>
                                </div>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">
                                    <router-link :to="{ name: 'agreements-index' }">
                                        <a class="text-muted">توافقی</a>
                                    </router-link>
                                </div>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">تخصیص درصد</div>
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
                <!--begin::table-->
                <div class="card card-custom gutter-b col-xl-8 offset-xl-2">
                    <!--begin::Header-->
                    <div class="card-header border-0 py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">سهامداران شرکت</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3">
                        <form class="form" novalidate="novalidate" id="kt_login_signup_form" @submit.prevent="onSubmit">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-head-bg table-vertical-center table-borderless">
                                    <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>نام و نام خانوادگی</th>
                                        <th>مسئولیت</th>
                                        <th>میزان سهام (درصد)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-center" v-for="(shareholder, index) in data.shareholders" :key="index">
                                        <td>
                                            <span class="text-dark-75">{{ shareholder.fname }} {{ shareholder.lname }}</span>
                                        </td>
                                        <td>
                                        <span class="text-dark-75">
                                            <div v-for="res in shareholder.responsibility"><span class="label label-lg label-light-primary label-inline mt-1" >{{ res.nickname }}</span><br></div>
                                        </span>
                                        </td>
                                        <td>
                                            <div class="col-lg-6" style="margin:auto">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="icon-nm fas fa-percent"></i>
                                                    </span>
                                                    </div>
                                                    <input type="text" class="form-control" v-model="shareholder.percent"
                                                           :class="['form-control', {'is-invalid' : errors.has('shareholders.' + index +'.percent')}]"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                         >
                                                </div>
                                                <div class="invalid-feedback is-invalid text-right" v-if="errors.has('shareholders.' + index +'.percent')" style="display: block;">{{ errors.get('shareholders.' + index +'.percent') }}</div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                            </div>
                        </form>
                        <!--end::Table-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::table-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</template>

<script>
    import Errors from './../../../Errors'
    import Auth from "../../../Auth";

    export default {
        name: "edit",
        data(){
            return {
                data:{
                    shareholders: [],
                },
                counter: 0,
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created(){
            this.Auth.check();
            axios.get(`/api/agreements/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data.shareholders = response.data;
                })
                .catch(error => console.log(error));
        },
        computed: {
            total: function() {
                let total = 0;
                this.data.shareholders.filter((el) => {
                    if (isNaN(el.percent) || el.percent == null){
                        total += 0
                    }else {
                        total += parseInt(el.percent)
                    }
                });
                return total;
            }
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                if (this.total == 100){
                    var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                    var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                    KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                    axios.put(`/agreements/${this.$route.params.id}`, this.data)
                        .then(response => {
                            if (response.status == 201){
                                Swal.fire({
                                    title: "اطلاعات سهامداران با موفقیت ویرایش شد",
                                    icon: "success",
                                    buttonsStyling: false,
                                    showConfirmButton: false,
                                    timer: 3000,
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                                this.$router.push({name: 'agreements-index'});
                            } else {

                            }
                        })
                        .catch(error => {
                            this.errors.record(error.response.data.errors);
                            KTUtil.btnRelease(formSubmitButton);
                        });
                }else{
                    Swal.fire({
                        title: "مجموع میزان سهام سهامداران باید 100 باشد",
                        text: 'مجموع سهام سهامداران فعلی = ' + this.total,
                        icon: "warning",
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 5000,
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            },
        },
    }
</script>

<style scoped>

</style>