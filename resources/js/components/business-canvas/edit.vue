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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">بوم کسب و کار</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
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
                                    <h5 class="text-dark font-weight-bold">شرکای کلیدی</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>شرکای کلیدی شما که هستند؟</span><br>
                                                <span> تامین کنندگان کلیدی شما که هستند؟</span><br>
                                                <span>چه منابع اصلی را از شرکایتان به دست می آورید؟</span><br>
                                                <span>شرکایتان چه فعالیت های اصلی را انجام می دهند؟</span><br>
                                                <span>انگیزه های شراکت: بهینه سازی و صرفه اقتصادی ، کاهش ریسک و عدم قطعیت، به دست آوردن منابع و فعالیت های خاص و ...</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="key_partners" v-model="data.key_partners" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('key_partners')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('key_partners')" style="display: block;">{{ errors.get('key_partners') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">فعالیت های اصلی</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>امور مربوط به کسب و کار به چه فعالیت های اصلی نیاز دارد؟</span><br>
                                                <span>دسته ها: تولید، حل مساله، ایجاد روابط و ... </span><br>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="main_activities" v-model="data.main_activities" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('main_activities')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('main_activities')" style="display: block;">{{ errors.get('main_activities') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">منابع اصلی</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>امور مربوط به کسب و کار به چه منابعی اصلی نیاز دارد؟</span><br>
                                                <span>انواع منبع: فیزیکی،معنوی(پتنت های برند، حق نشر، داده ها)،انسانی، مالی و ... </span><br>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="main_sources" v-model="data.main_sources" class="form-control form-control-solid" rows="3" placeholder="متن خود را وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('main_sources')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('main_sources')" style="display: block;">{{ errors.get('main_sources') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">ساختار هزینه</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>مهم ترین هزینه های کسب و کارتان کدام ها هستند؟</span><br>
                                                <span>گران ترین منابع اصلی کدامند؟</span><br>
                                                <span>گران ترین فعالیت های اصلی کدام ها هستند؟</span><br>
                                                <span>کسب و کار شما بیشتر کدام است؟</span><br>
                                                <span> 1)هزینه گرا(کوچک ترین ساختار هزینه،ارزش پیشنهادی ارزان،بیش ترین خودکار سازی،بیش ترین برون سپاری)</span><br>
                                                <span>2)ارزش گرا(تمرکز روی خلق ارزش،ارزش پیشنهادی گران بها)</span><br>
                                                <span>   بعضی ویژگی ها: هزینه های ثابت(دستمزد، اجاره بها، خدمات عمومی)،هزینه های ثابت،هزینه های متغیر
                                                </span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="cost_structure" v-model="data.cost_structure" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('cost_structure')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('cost_structure')" style="display: block;">{{ errors.get('cost_structure') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">ارزش پیشنهادی</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>به مشتریان چه ارزشی ارائه می دهید؟</span><br>
                                                <span>به حل کدام یک از مسایل مشتریان کمک می کنید؟ </span><br>
                                                <span>بسته های پیشنهادی(آمیخته محصولات و خدمات)به هر بخش از مشتریان چیست؟</span><br>
                                                <span>کدام یک از نیازهای مشتریان را برطرف می کنید؟</span><br>
                                                <span>ویژگی ها: تازگی، کارایی، شخصی سازی، انجام دادن کار، طراحی، برند / جایگاه، قیمت،کاهش هزینه، کاهش ریسک، دسترسی پذیری، راحتی / کاربردپذیری و ...</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="suggested_value" v-model="data.suggested_value" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('suggested_value')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('suggested_value')" style="display: block;">{{ errors.get('suggested_value') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">ارتباط با مشتریان</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>هر بخش از مشتریان انتظار برقراری و حفظ چه نوع رابطه ای را از شما دارند؟</span><br>
                                                <span>کدام یک از این رابطه ها برقرار شده؟</span><br>
                                                <span>این روابط چگونه با بقیه مدل کسب و کار شما عجیم می شوند؟</span><br>
                                                <span>شرکایتان چه فعالیت های اصلی را انجام می دهند؟</span><br>
                                                <span>مثال : دستیار شخصی، سلف سوریس، خدمات خودکار، جوامع کاربری، خلق باهم و ...</span>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="communication_with_clients" v-model="data.communication_with_clients" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('communication_with_clients')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('communication_with_clients')" style="display: block;">{{ errors.get('communication_with_clients') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">کانال توزیع</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>مشتریان از طریق چه کانال هایی می خواهند که به آنان دسترسی پیدا کنید؟</span><br>
                                                <span>هم اکنون چگونه به آنان دسترسی داریم؟</span><br>
                                                <span> کدام یک بهتر و به صرفه تر عمل میکند؟</span><br>
                                                <span>فازهای کانال: آگاهی، ارزیابی، خرید، تحویل و پس از فروش.</span><br>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="distribution_channels" v-model="data.distribution_channels" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('distribution_channels')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('distribution_channels')" style="display: block;">{{ errors.get('distribution_channels') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">بخش مشتریان</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>برای چه کسانی ارزش آفرینی می کنید؟</span><br>
                                                <span>مهم ترین مشتریان شما چه کسانی هستند؟</span><br>
                                                <span>بازار انبوه، بازار گوشه ای، بخش بندی شده، گوناگون، پلتفرم چندوجهی و ... </span><br>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="customer_section" v-model="data.customer_section" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('customer_section')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('customer_section')" style="display: block;">{{ errors.get('customer_section') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <h5 class="text-dark font-weight-bold">جریان درآمد</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-text text-muted">
                                                <span>مشتریانتان برای چه ارزشی واقعا حاضرند پول بدهند؟</span><br>
                                                <span>آن ها هم اکنون برای چه چیزی پول میدهند؟</span><br>
                                                <span>ترجیح می دهند که چگونه بپردازند؟</span><br>
                                                <span>هر جریان درآمد چگونه در درآمد کل مشارکت دارد؟</span><br>
                                                <span style="white-space: pre-wrap">انواع:   قیمت گذاری ثابت:   قیمت گذاری پویا:</span><br>
                                                <span style="white-space: pre-wrap">فروش دارایی    قیمت مصرف کننده   مذاکره(چانه زنی)</span><br>
                                                <span style="white-space: pre-wrap">فروش مصرف   براساس ویژگی محصول   مدیریت درآمد</span><br>
                                                <span style="white-space: pre-wrap">حق اشتراک   براساس بخش مشتری   بازار بی درنگ</span><br>
                                                <span style="white-space: pre-wrap">قرض / اجاره / لیزینگ  براساس میزان خرید</span><br>
                                                <span style="white-space: pre-wrap">دادن حق امتیاز</span><br>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <textarea name="income_flow" v-model="data.income_flow" class="form-control form-control-solid" rows="3" placeholder="متن خودرا وارد کنید"
                                                          :class="['form-control', {'is-invalid border border-danger' : errors.has('income_flow')}]"></textarea>
                                                <div class="invalid-feedback is-invalid" v-if="errors.has('income_flow')" style="display: block;">{{ errors.get('income_flow') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
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
    import Errors from "../../Errors";
    import Auth from "../../Auth";

    export default {
        name: "edit",
        data(){
            return {
                data: {},
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        created(){
            this.Auth.check();
            axios.get(`/api/businesscanvas/${this.$route.params.id}/edit`)
                .then(response => {
                    this.data = response.data;
                })
                .catch(error => console.log(error));
        },
        methods: {
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.put(`/businesscanvas/${this.$route.params.id}`, this.data)
                    .then(response => {
                        Swal.fire({
                            title: "اطلاعات با موفقیت ویرایش شد",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "باشد",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                        this.$router.push({name: 'businesscanvas-index'});
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