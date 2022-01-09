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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">سطح آمادگی</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">کسب و کار</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">مدیریت عمومی</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <div class="text-muted">ویرایش</div>
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
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <table class="table table-head-custom table-vertical-center" id="myTable2">
                                            <thead>
                                            <tr class="bg-gray-100">
                                                <th class="text-left">ردیف</th>
                                                <th class="text-center">سوال</th>
                                                <th class="text-left">پاسخ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td>
                                                    <span class="text-dark-75">1</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">بدون معیار.</span>
                                                </td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q1">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">2</span></td>
                                                <td><span class="text-dark-75">مبتکر درحال آموزش در مهارت ها ی مدیریت کسب و کار کوچک، به واسطه منابع کتاب ها، کلاس ها و یا دوره دانشگاهی SBA یا مشابه آن است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q2">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td>
                                                    <span class="text-dark-75">3</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75">عملیات تجاری توسط یک مدیر اجرایی مدیریت می شود که تجربه اصلی آن در توسعه فن آوری است، نه مدیریت کسب و کار؛ معمولا مبتکر است.</span>
                                                </td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q3">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">4</span></td>
                                                <td><span class="text-dark-75">عملیات تجاری توسط یک مدیر اجرایی مدیریت می شود که مهارت اصل ی آن در مدیریت کسب و کار است نه توسعه تکنولوژی.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q4">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td><span class="text-dark-75">5</span></td>
                                                <td><span class="text-dark-75">مدیر کل، مدیران عملکر دی را در حداقل چهار حوزه عملکردی مهم (تحقیق و توسعه، تولید، امور مالی، بازاریابی و فروش) سرپرستی می نمایند.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q5">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">6</span></td>
                                                <td><span class="text-dark-75">مدیر کل، به اجر ای مستندسا زی فرا یندها، بهترین ش یوه ها و تیم های یکپارچه محصول را متعهد هستند. یک برنامه بلند مدت کسب و کار استراتژیک در حال توسعه است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q6">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td><span class="text-dark-75">7</span></td>
                                                <td><span class="text-dark-75">مدیر کل، به طور مداوم از استفاده از مستندسا زی فرآیندها، بهترین شیوه ها و تیم های یکپارچه محصول را اجباری می کند. طرح بلندمدت کسب و کار استراتژیک در حال اجرا است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q7">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">8</span></td>
                                                <td><span class="text-dark-75">مدیر کل دارای تجربه موفق از طریق تجاری کردن حداقل یک محصول جدید، در هدایت یک کسب و کار است. طرح بلند مدت استراتژیک در حال اجرا است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q8">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td><span class="text-dark-75">9</span></td>
                                                <td><span class="text-dark-75">مدیر کل، به عنوان یک رهبر در توسعه محصول جدید، بین دست اندرکاران صنعت شناخته می‌شود.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q9">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">10</span></td>
                                                <td><span class="text-dark-75">مدیر کل به عنوان یک رهبر در توسعه محصول جدید به رسمیت شناخته شده است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q10">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
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


    import Auth from "../../../../Auth";
    import Errors from "../../../../Errors";

    export default {
        name: "edit",
        data() {
            return {
                data: {

                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created() {
            this.Auth.check();
            axios.get(`/api/publicmanagement-questions/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data = response.data
                })
                .catch(error => {console.log(error.response);});
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/publicmanagement-questions/${this.$route.params.id}`, this.data)
                    .then(response => {
                        if (response.status == 201) {
                            Swal.fire({
                                title: "اطلاعات با موفقیت ویرایش شد.",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'business-questions-index', params: {tab : '#business-tab2'}});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
            goBack() {
                this.$router.push({name: 'business-questions-index', params: {tab : '#business-tab2'}});
            }
        },
    }
</script>

<style scoped>

</style>