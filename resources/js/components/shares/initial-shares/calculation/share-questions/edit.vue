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
                                <!--<router-link :to="{name: 'initial-shares-index'}">-->
                                    <a class="text-muted">سهام اولیه</a>
                                <!--</router-link>-->
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
                                    <div class="card-body" style="padding-top: 0px">
                                        <div style="text-align: center;font-size: initial;">
                                            <b>سوالات</b><hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q1">ایده اجرای این طرح با چه شخصی بود؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q1[]" id="Q1" multiple="multiple" v-model="data.Q1" class="form-control select2" data-placeholder="ایده">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q1')" style="display: block;">{{errors.get('Q1') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q2">چه کسی مسئول مباحث مالی طرح است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q2[]" id="Q2" multiple="multiple" v-model="data.Q2" class="form-control select2" data-placeholder="مباحث مالی">
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
                                                    <select name="Q3[]" id="Q3" multiple="multiple" v-model="data.Q3" class="form-control select2" data-placeholder="تجربه">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q3')" style="display: block;">{{errors.get('Q3') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q4"> مسئولیت و ریسک طرح با چه کسی است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q4[]" id="Q4" multiple="multiple" v-model="data.Q4" class="form-control select2" data-placeholder="مسئولیت و ریسک طرح">
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
                                                    <select name="Q5[]" id="Q5" multiple="multiple" v-model="data.Q5" class="form-control select2" data-placeholder="ایجاد و توسعه محصول/خدمت">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q5')" style="display: block;">{{errors.get('Q5') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q6">چه کسی مسئول جذب سرمایه گذار است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q6[]" id="Q6" multiple="multiple" v-model="data.Q6" class="form-control select2" data-placeholder="جذب سرمایه گذار">
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
                                                    <select name="Q7[]" id="Q7" multiple="multiple" v-model="data.Q7" class="form-control select2" data-placeholder="مباحث مدیریتی">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q7')" style="display: block;">{{errors.get('Q7') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Q8">مسئولیت بازاریابی و فروش با چه کسی است؟
                                                        <span class="text-danger">*</span></label>
                                                    <select name="Q8[]" id="Q8" multiple="multiple" v-model="data.Q8" class="form-control select2" data-placeholder="بازاریابی و فروش">
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
                                                    <select name="Q9[]" id="Q9" multiple="multiple" v-model="data.Q9" class="form-control select2" data-placeholder="تمام وقت">
                                                        <option v-for="(shareholder, key) in shareholders" :key="key" :value="shareholder.id">{{ shareholder.fname }} {{ shareholder.lname }}</option>
                                                    </select>
                                                    <div class="invalid-feedback is-invalid" v-if="errors.has('Q9')" style="display: block;">{{errors.get('Q9') }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
                                    <router-link :to="{ name: 'calculations-index' }">
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
    import Errors from "../../../../../Errors";
    import Auth from "../../../../../Auth";

    export default {
        name: "edit",
        data() {
            return {
                questions: [],
                shareholders: [],
                data: {
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
            axios.get(`/api/sharequestions/${this.$route.params.id}/edit`)
                .then(response => {
                    this.questions = response.data.member_share_questions;
                    this.shareholders = response.data.shareholders;
                    for (var i=0; i<response.data.member_share_questions[0].members.length; i++){
                        this.data.Q1.push(response.data.member_share_questions[0].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[1].members.length; i++){
                        this.data.Q2.push(response.data.member_share_questions[1].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[2].members.length; i++){
                        this.data.Q3.push(response.data.member_share_questions[2].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[3].members.length; i++){
                        this.data.Q4.push(response.data.member_share_questions[3].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[4].members.length; i++){
                        this.data.Q5.push(response.data.member_share_questions[4].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[5].members.length; i++){
                        this.data.Q6.push(response.data.member_share_questions[5].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[6].members.length; i++){
                        this.data.Q7.push(response.data.member_share_questions[6].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[7].members.length; i++){
                        this.data.Q8.push(response.data.member_share_questions[7].members[i].id)
                    }
                    for (var i=0; i<response.data.member_share_questions[8].members.length; i++){
                        this.data.Q9.push(response.data.member_share_questions[8].members[i].id)
                    }
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                    var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                    var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                    KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                    axios.put(`/sharequestions/${this.$route.params.id}`, this.data)
                        .then(response => {
                            console.log(response.data);
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

</style>