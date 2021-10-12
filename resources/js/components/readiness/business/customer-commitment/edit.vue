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
                                <a class="text-muted">تعهد مشتری (مشتری های سازمانی و عمده)</a>
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
                                        <table class="table table-head-custom table-vertical-center" id="myTable8">
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
                                                    <span class="text-dark-75">بدون معیار</span>
                                                </td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q1">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">2</span></td>
                                                <td><span class="text-dark-75">بدون معیار</span></td>
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
                                                    <span class="text-dark-75">یک یا چند مشتری اطلاعات غیر رسمی را در مورد ارزیابی تکنولوژی و نیازهای محصول را به کسب و کار ارائه می دهند.</span>
                                                </td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q3">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">4</span></td>
                                                <td><span class="text-dark-75">یک یا چند مشتری به منظور انتقال محصول به TRL4 و یا MRL4 ، منابعی جزئی (مانند ارزیابی کوتاه و ساده، و یا بازخورد) را انجام می دهند. مشتری دارای منابعی برای کمک به دستیابی به TRL / MRL بعدی است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q4">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td><span class="text-dark-75">5</span></td>
                                                <td><span class="text-dark-75">یک یا چند مشتری به منظور انتقال محصول به TRL5 و یا MRL5 ، منابعی محدود را (مانند کار و مواد برای ارزیابی و بازخورد) به تامین می کنند. مشتری دارای منابعی برای کمک به دستیابی به TRL / MRL بعدی است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q5">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">6</span></td>
                                                <td><span class="text-dark-75">یک یا چند مشتری به منظور انتقال محصول به TRL6 و یا MRL6 ، منابعی متوسط (مانند آزمایش نمونه اولیه) را تامین می کنند. مشتری دارای منابعی برای کمک به دستیابی به TRL / MRL بعدی است.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q6">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td><span class="text-dark-75">7</span></td>
                                                <td><span class="text-dark-75">یک یا چند مشتری، برای کمک به انتقال محصول به TRL7 و / یا MRL7، منابعی قابل توجه (مانند تست محیط کاری عملیاتی یا پول نقد برای تحقیق و توسعه) را تأمین می کنند. مشتری دارای منابعی برای کمک به دستیا بی به TRL / MRL بعدی است. مشتری دلیلی فوری و قانع کننده برای بهبود (سازگاری) محصول (برای بهبود وضعیت رقابتی، جلوگیری از ماندگاری، دست یافتن به حداقل بازده برای نیازمندی ها) دارد.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q7">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">8</span></td>
                                                <td><span class="text-dark-75">یک یا چند مشتری متعهد به خرید مقادیری از نیازمندی های تولید اولیه کم ظرفیت هستند. مشتریانی که تامین کننده حداقل نیمی از منابع مورد نیاز برای حرکت از TRL / MRL7 به TRL8 و / یا MRL8 هستند.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q8">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr style="background-color: #fdff9338" class="text-left">
                                                <td><span class="text-dark-75">9</span></td>
                                                <td><span class="text-dark-75">یک یا چند مشتری متعهد به خرید مقادیری هستند که نیاز به تولید با ظرفیت کامل را دارند.</span></td>
                                                <td>
                                                    <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-success" style="display: inline-block;">
                                                        <input type="checkbox" name="Checkboxes16" v-model="data.q9">
                                                        <span></span></label>
                                                </td>
                                            </tr>
                                            <tr class="text-left">
                                                <td><span class="text-dark-75">10</span></td>
                                                <td><span class="text-dark-75">یک یا چند مشتری متعهد به توافق نامه های عرضه بلند مدت، که نیاز به تولید با ظرفیت کامل دارند.</span></td>
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
            axios.get(`/api/CustomerCommitment-questions/${this.$route.params.id}/edit`)
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
                axios.put(`/CustomerCommitment-questions/${this.$route.params.id}`, this.data)
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
                            this.$router.push({name: 'business-questions-index'});
                        }
                    })
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        KTUtil.btnRelease(formSubmitButton);
                    });
            },
        },
    }
</script>

<style scoped>

</style>