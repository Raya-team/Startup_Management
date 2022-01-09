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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">ارزش گذاری</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <!--<router-link :to="{name: 'initial-shares-index'}">-->
                                <a class="text-muted">نامشهود</a>
                                <!--</router-link>-->
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">ایجاد اطلاعات</a>
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
                                        <div class="card-body" style="padding-top: 0px">
                                            <div style="text-align: center;font-size: initial;">
                                                <b>سوالات تکمیلی</b><hr>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="question_1">نرخ تنزیل مورد نظر چند درصد است؟</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                            </div>
                                                            <input type="text" class="form-control" id="question_1" name="question_1" v-model.number="data.question_1"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has('question_1')}]"/>
                                                        </div>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('question_1')" style="display: block;">{{ errors.get('question_1') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="question_2">در بهترین حالت فروش و هزینه های شما چقدر بهبود می یابد؟
                                                            <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                            </div>
                                                            <input type="text" class="form-control" id="question_2" name="question_2" v-model.number="data.question_2"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has('question_2')}]"/>
                                                        </div>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('question_2')" style="display: block;">{{ errors.get('question_2') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="question_3">در بدترین حالت فروش و هزینه های شما چقدر تغییر می یابد؟
                                                            <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                درصد
                                                            </span>
                                                            </div>
                                                            <input type="text" class="form-control" id="question_3" name="question_3" v-model.number="data.question_3"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has('question_3')}]"/>
                                                        </div>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('question_3')" style="display: block;">{{ errors.get('question_3') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="question_4">عمر تکنولوژی چند سال می باشد؟
                                                            <span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text noselect">
                                                                سال
                                                            </span>
                                                            </div>
                                                            <input type="text" class="form-control" id="question_4" name="question_4" v-model.number="data.question_4"
                                                                   oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                   :class="['form-control', {'is-invalid' : errors.has('question_4')}]"/>
                                                        </div>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('question_4')" style="display: block;">{{ errors.get('question_4') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card-body" style="padding-top: 0px">
                                            <hr style="width: 80%;border-top: 1px solid rgb(8 0 255 / 21%);">
                                            <div style="text-align: center;font-size: initial;">
                                                <b>ارزش دارایی های نامشهود</b><hr>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="office_owner">مدل ارزش گذاری :
                                                            <span class="text-danger">*</span></label>
                                                        <select name="office_owner" id="office_owner" class="form-control" v-model="data.valuation_model">
                                                            <option v-for="model in models" :value="model.id">{{ model.name }}</option>
                                                        </select>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has('office_owner')" style="display: block;">{{ errors.get('office_owner') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                                    <router-link :to="{ name: 'valuation-intangible-index' }">
                                        <button type="submit" style="float: left;" class="btn btn-danger mr-2">بازگشت</button>
                                    </router-link>
                                </div>
                            </form>
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
                models: [],
                data: {
                    question_1: '',
                    question_2: '',
                    question_3: '',
                    question_4: '',
                    valuation_model: '',
                    value: null,
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/valuation-intangible/create')
                .then(response => {
                    this.models = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/valuation-intangible', this.data)
                    .then(response => {
                        if (response.status == 201){
                            Swal.fire({
                                title: "اطلاعات با موفیت ثبت شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'valuation-intangible-index'});
                        }
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