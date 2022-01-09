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
                                <a class="text-muted">سهام اولیه</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">محاسبه</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">متغیرها</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                ویرایش
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
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="idea">ایده:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="idea" placeholder="وزن" name="idea" v-model="data.variables.idea"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('idea')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('idea')" style="display: block;">{{ errors.get('idea') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="finance">مباحث مالی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="finance" placeholder="وزن" name="finance" v-model="data.variables.finance"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('finance')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('finance')" style="display: block;">{{ errors.get('finance') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="experience">تجربه:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="experience" placeholder="وزن" name="experience" v-model="data.variables.experience"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('experience')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('experience')" style="display: block;">{{ errors.get('experience') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="risk">مسئولیت و ریسک:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="risk" placeholder="وزن" name="risk" v-model="data.variables.risk"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('risk')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('risk')" style="display: block;">{{ errors.get('risk') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="technology">ایجاد و توسعه:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="technology" placeholder="وزن" name="technology" v-model="data.variables.technology"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('technology')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('technology')" style="display: block;">{{ errors.get('technology') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="investment">جذب سرمایه گذار:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="investment" placeholder="وزن" name="investment" v-model="data.variables.investment"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('investment')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('investment')" style="display: block;">{{ errors.get('investment') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="management">مباحث مدیریتی:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="management" placeholder="وزن" name="management" v-model="data.variables.management"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('management')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('management')" style="display: block;">{{ errors.get('management') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sale">فروش:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="sale" placeholder="وزن" name="sale" v-model="data.variables.sale"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('sale')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('sale')" style="display: block;">{{ errors.get('sale') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="full_time">تمام وقت بودن:
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="full_time" placeholder="وزن" name="full_time" v-model="data.variables.full_time"
                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                       :class="['form-control', {'is-invalid' : errors.has('full_time')}]"/>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('full_time')" style="display: block;">{{ errors.get('full_time') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ویرایش</button>
                                    <router-link :to="{ name: 'calculations-index' }">
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
    import Errors from "../../../../../Errors";
    import Auth from "../../../../../Auth";

    export default {
        name: "edit",
        data() {
            return {
                data: {
                    variables: [],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/calculations`)
                .then(response => {
                    this.data.variables = response.data.variables;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                if (this.total == 100) {
                    var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                    var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                    KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                    axios.put(`/sharevariables/${this.$route.params.id}`, this.data.variables)
                        .then(response => {
                            console.log(response);
                            if (response.status == 201) {
                                Swal.fire({
                                    title: "اطلاعات موفقیت ویرایش شد",
                                    icon: "success",
                                    buttonsStyling: false,
                                    showConfirmButton: false,
                                    timer: 3000,
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                                this.$router.push({name: 'calculations-index'});
                            }
                        })
                        .catch(error => {
                            console.log(error.response);
                            this.errors.record(error.response.data.errors);
                            KTUtil.btnRelease(formSubmitButton);
                        });
                } else {
                    Swal.fire({
                        title: "مجموع وزن متغیر ها باید 100 باشد",
                        text: 'مجموع وزن های فعلی = ' + this.total,
                        icon: "warning",
                        buttonsStyling: false,
                        showConfirmButton: false,
                        timer: 5000,
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            }
        },
        computed: {
            total: function() {
                let total = 0;
                if (!this.data.variables.idea || isNaN(this.data.variables.idea)){total += 0} else {total += parseInt(this.data.variables.idea)}
                if (!this.data.variables.finance || isNaN(this.data.variables.finance)){total += 0} else {total += parseInt(this.data.variables.finance)}
                if (!this.data.variables.experience || isNaN(this.data.variables.experience)){total += 0} else {total += parseInt(this.data.variables.experience)}
                if (!this.data.variables.risk || isNaN(this.data.variables.risk)){total += 0} else {total += parseInt(this.data.variables.risk)}
                if (!this.data.variables.technology || isNaN(this.data.variables.technology)){total += 0} else {total += parseInt(this.data.variables.technology)}
                if (!this.data.variables.investment || isNaN(this.data.variables.investment)){total += 0} else {total += parseInt(this.data.variables.investment)}
                if (!this.data.variables.management || isNaN(this.data.variables.management)){total += 0} else {total += parseInt(this.data.variables.management)}
                if (!this.data.variables.sale || isNaN(this.data.variables.sale)){total += 0} else {total += parseInt(this.data.variables.sale)}
                if (!this.data.variables.full_time || isNaN(this.data.variables.full_time)){total += 0} else {total += parseInt(this.data.variables.full_time)}
                return total;
            }
        },
    }
</script>

<style scoped>

</style>