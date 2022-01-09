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
                                <router-link :to="{name: 'initial-shares-index'}">
                                    <a class="text-muted">سهام اولیه</a>
                                </router-link>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">محاسبه</a>
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
                                <div class="row">
                                    <label class="col-3 col-form-label" style="margin-right: 15px"><h6>آیا سرمایه گذار قبلی وجود دارد؟ </h6></label>
                                    <div class="col-3">
                                    <span class="switch switch-outline switch-icon switch-primary">
                                        <label>
                                            <input type="checkbox" name="select" v-model="checkedValue" />
                                            <span></span>
                                        </label>
                                    </span>
                                    </div>
                                </div>
                                <div class="row" v-if="isActive">
                                    <div class="card-body">
                                        <div id="kt_repeater_1">
                                            <div class="form-group row">
                                                <div data-repeater-list="product" class="col-lg-10">
                                                    <transition-group name="slide">
                                                        <div data-repeater-item="" class="form-group row align-items-center" v-for="(investor, index) in data.previous_investors" :key="index">
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control products" name="investor_name" placeholder="نام سرمایه گذار قبلی" v-model="investor.name"
                                                                       :class="['form-control', {'is-invalid' : errors.has('previous_investors.' + index +'.name')}]"/>
                                                                <div class="invalid-feedback is-invalid" v-if="errors.has('previous_investors.' + index +'.name')" style="display: block;">{{ errors.get('previous_investors.' + index +'.name') }}</div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control products" name="percent" placeholder="درصد" v-model="investor.percent"
                                                                       :class="['form-control', {'is-invalid' : errors.has('previous_investors.' + index +'.percent')}]"
                                                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"/>
                                                                <div class="invalid-feedback is-invalid" v-if="errors.has('previous_investors.' + index +'.percent')" style="display: block;">{{ errors.get('previous_investors.' + index +'.percent') }}</div>
                                                            </div>
                                                            <div v-if="index != 0" class="col-md-4">
                                                                <a @click="RemoveField(index)" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                    <i class="la la-trash-o"></i>حذف</a>
                                                            </div>
                                                        </div>
                                                    </transition-group>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <a @click="AddField" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                        <i class="la la-plus"></i>افزودن</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card-body" style="padding-top: 0px">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>محاسبه وزن متغیرها</b><hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="idea">ایده:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="idea" placeholder="وزن" name="idea" v-model="data.idea"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('idea')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('idea')" style="display: block;">{{ errors.get('idea') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="finance">مباحث مالی:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="finance" placeholder="وزن" name="finance" v-model="data.finance"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('finance')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('finance')" style="display: block;">{{ errors.get('finance') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="experience">تجربه:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="experience" placeholder="وزن" name="experience" v-model="data.experience"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('experience')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('experience')" style="display: block;">{{ errors.get('experience') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="risk">مسئولیت و ریسک:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="risk" placeholder="وزن" name="risk" v-model="data.risk"
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
                                                    <input type="text" class="form-control" id="technology" placeholder="وزن" name="technology" v-model="data.technology"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('technology')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('technology')" style="display: block;">{{ errors.get('technology') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="investment">جذب سرمایه گذار:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="investment" placeholder="وزن" name="investment" v-model="data.investment"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('investment')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('investment')" style="display: block;">{{ errors.get('investment') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="management">مباحث مدیریتی:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="management" placeholder="وزن" name="management" v-model="data.management"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('management')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('management')" style="display: block;">{{ errors.get('management') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="sale">فروش:
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="sale" placeholder="وزن" name="sale" v-model="data.sale"
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
                                                    <input type="text" class="form-control" id="full_time" placeholder="وزن" name="full_time" v-model="data.full_time"
                                                           oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                           :class="['form-control', {'is-invalid' : errors.has('full_time')}]"/>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('full_time')" style="display: block;">{{ errors.get('full_time') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="text-align: center;font-size: initial;">
                                            <b>سوالات</b><hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q1">ایده اجرای این طرح با چه شخصی بود؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q1[]" id="Q1" multiple="multiple" class="form-control select2" data-placeholder="ایده">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q1')" style="display: block;">{{errors.get('Q1') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q2">چه کسی مسئول مباحث مالی طرح است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q2[]" id="Q2" multiple="multiple" class="form-control select2" data-placeholder="مباحث مالی">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q2')" style="display: block;">{{errors.get('Q2') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q3">چه کسی در زمینه مرتبط تجربه داشته است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q3[]" id="Q3" multiple="multiple" class="form-control select2" data-placeholder="تجربه">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q3')" style="display: block;">{{errors.get('Q3') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q4"> مسئولیت و ریسک طرح با چه کسی است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q4[]" id="Q4" multiple="multiple" class="form-control select2" data-placeholder="مسئولیت و ریسک طرح">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q4')" style="display: block;">{{errors.get('Q4') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q5">مسئول ایجاد و توسعه محصول/خدمت چه کسی است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q5[]" id="Q5" multiple="multiple" class="form-control select2" data-placeholder="ایجاد و توسعه محصول/خدمت">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q5')" style="display: block;">{{errors.get('Q5') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q6">چه کسی مسئول جذب سرمایه گذار است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q6[]" id="Q6" multiple="multiple" class="form-control select2" data-placeholder="جذب سرمایه گذار">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q6')" style="display: block;">{{errors.get('Q6') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q7">مباحث مدیریتی طرح با چه کسی است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q7[]" id="Q7" multiple="multiple" class="form-control select2" data-placeholder="مباحث مدیریتی">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q7')" style="display: block;">{{errors.get('Q7') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q8">مسئولیت بازاریابی و فروش با چه کسی است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q8[]" id="Q8" multiple="multiple" class="form-control select2" data-placeholder="بازاریابی و فروش">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q8')" style="display: block;">{{errors.get('Q8') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q9">چه کسانی به صورت تمام وقت در طرح فعالیت می کنند؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q9[]" id="Q9" multiple="multiple" class="form-control select2" data-placeholder="تمام وقت">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q9')" style="display: block;">{{errors.get('Q9') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
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

    import Errors from "../../../../Errors";
    import Auth from "../../../../Auth";

    export default {
        name: "create",
        data() {
            return {
                shareholders: [],
                data: {
                    has_previous: true,
                    previous_investors: [{ name: '', percent: '' }],
                    idea: '',
                    finance: '',
                    experience: '',
                    risk: '',
                    technology: '',
                    investment: '',
                    management: '',
                    sale: '',
                    full_time: '',
                    Q1:[],
                    Q2:[],
                    Q3:[],
                    Q4:[],
                    Q5:[],
                    Q6:[],
                    Q7:[],
                    Q8:[],
                    Q9:[],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get('/api/calculations/create')
                .then(response => {
                    this.shareholders = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            AddField() {
                this.data.previous_investors.push({ name: '', percent: '' });
            },
            RemoveField(index) {
                this.data.previous_investors.splice(index, 1);
            },
            onSubmit() {
                this.Auth.check();
                if (this.total == 100){
                    var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                    var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                    KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                    axios.post('/calculations', this.data)
                        .then(response => {
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
                            this.$router.push({name: 'calculations-index'});
                        })
                        .catch(error => {
                            console.log(error.response);
                            this.errors.record(error.response.data.errors);
                            KTUtil.btnRelease(formSubmitButton);
                        });
                }else{
                    Swal.fire({
                        title: "مجموع وزن متغیر ها باید 100 باشد",
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
        computed: {
            isActive() {
                return this.data.has_previous;
            },
            checkedValue: {
                get() {
                    return this.data.has_previous
                },
                set(newValue) {
                    this.data.has_previous = newValue;
                }
            },
            total: function() {
                let total = 0;
                if (!this.data.idea || isNaN(this.data.idea)){total += 0} else {total += parseInt(this.data.idea)}
                if (!this.data.finance || isNaN(this.data.finance)){total += 0} else {total += parseInt(this.data.finance)}
                if (!this.data.experience || isNaN(this.data.experience)){total += 0} else {total += parseInt(this.data.experience)}
                if (!this.data.risk || isNaN(this.data.risk)){total += 0} else {total += parseInt(this.data.risk)}
                if (!this.data.technology || isNaN(this.data.technology)){total += 0} else {total += parseInt(this.data.technology)}
                if (!this.data.investment || isNaN(this.data.investment)){total += 0} else {total += parseInt(this.data.investment)}
                if (!this.data.management || isNaN(this.data.management)){total += 0} else {total += parseInt(this.data.management)}
                if (!this.data.sale || isNaN(this.data.sale)){total += 0} else {total += parseInt(this.data.sale)}
                if (!this.data.full_time || isNaN(this.data.full_time)){total += 0} else {total += parseInt(this.data.full_time)}
                return total;
            }
        },
        mounted() {
            var $this = this;
            $(document).ready(function () {
                var select1 = $('#Q1').select2();
                select1.on("select2:selecting", (e) => {
                    var Q1 = $this._data.data.Q1;
                    Q1.push(e.params.args.data.id);
                });
                select1.on("select2:unselecting", (e) => {
                    var Q1 = $this._data.data.Q1;
                    Q1.splice(Q1.indexOf(e.params.args.data.id), 1);
                });

                var select2 = $('#Q2').select2();
                select2.on("select2:selecting", (e) => {
                    var Q2 = $this._data.data.Q2;
                    Q2.push(e.params.args.data.id);
                });
                select2.on("select2:unselecting", (e) => {
                    var Q2 = $this._data.data.Q2;
                    Q2.splice(Q2.indexOf(e.params.args.data.id), 1);
                });

                var select3 = $('#Q3').select2();
                select3.on("select2:selecting", (e) => {
                    var Q3 = $this._data.data.Q3;
                    Q3.push(e.params.args.data.id);
                });
                select3.on("select2:unselecting", (e) => {
                    var Q3 = $this._data.data.Q3;
                    Q3.splice(Q3.indexOf(e.params.args.data.id), 1);
                });

                var select4 = $('#Q4').select2();
                select4.on("select2:selecting", (e) => {
                    var Q4 = $this._data.data.Q4;
                    Q4.push(e.params.args.data.id);
                });
                select4.on("select2:unselecting", (e) => {
                    var Q4 = $this._data.data.Q4;
                    Q4.splice(Q4.indexOf(e.params.args.data.id), 1);
                });

                var select5 = $('#Q5').select2();
                select5.on("select2:selecting", (e) => {
                    var Q5 = $this._data.data.Q5;
                    Q5.push(e.params.args.data.id);
                });
                select5.on("select2:unselecting", (e) => {
                    var Q5 = $this._data.data.Q5;
                    Q5.splice(Q5.indexOf(e.params.args.data.id), 1);
                });

                var select6 = $('#Q6').select2();
                select6.on("select2:selecting", (e) => {
                    var Q6 = $this._data.data.Q6;
                    Q6.push(e.params.args.data.id);
                });
                select6.on("select2:unselecting", (e) => {
                    var Q6 = $this._data.data.Q6;
                    Q6.splice(Q6.indexOf(e.params.args.data.id), 1);
                });

                var select7 = $('#Q7').select2();
                select7.on("select2:selecting", (e) => {
                    var Q7 = $this._data.data.Q7;
                    Q7.push(e.params.args.data.id);
                });
                select7.on("select2:unselecting", (e) => {
                    var Q7 = $this._data.data.Q7;
                    Q7.splice(Q7.indexOf(e.params.args.data.id), 1);
                });

                var select8 = $('#Q8').select2();
                select8.on("select2:selecting", (e) => {
                    var Q8 = $this._data.data.Q8;
                    Q8.push(e.params.args.data.id);
                });
                select8.on("select2:unselecting", (e) => {
                    var Q8 = $this._data.data.Q8;
                    Q8.splice(Q8.indexOf(e.params.args.data.id), 1);
                });

                var select9 = $('#Q9').select2();
                select9.on("select2:selecting", (e) => {
                    var Q9 = $this._data.data.Q9;
                    Q9.push(e.params.args.data.id);
                });
                select9.on("select2:unselecting", (e) => {
                    var Q9 = $this._data.data.Q9;
                    Q9.splice(Q9.indexOf(e.params.args.data.id), 1);
                });
            });
        }
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