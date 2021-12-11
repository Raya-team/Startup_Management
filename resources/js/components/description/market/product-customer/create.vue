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
                                <a class="text-muted">بازار</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">مشتریان محصول</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <a class="text-muted">افزودن</a>
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
                                    <h5 class="text-dark font-weight-bold">مشتریان محصول</h5><br>
                                    <transition-group name="slide">
                                        <div class="form-group row" v-for="(pro, index) in data.product_customers" :key="index">
                                            <div data-repeater-list="" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="col-md-4">
                                                        <label>ویژگی مشتری:</label>
                                                        <input type="text" class="form-control products" name="customer_features" v-model="pro.customer_features"
                                                               :class="['form-control', {'is-invalid' : errors.has(`product_customers.${index}.customer_features`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`product_customers.${index}.customer_features`)" style="display: block;">{{ errors.get(`product_customers.${index}.customer_features`) }}</div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>مشتریان گروه اول:</label>
                                                        <input type="text" class="form-control products" name="first_group_customers" v-model="pro.first_group_customers"
                                                               :class="['form-control', {'is-invalid' : errors.has(`product_customers.${index}.first_group_customers`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`product_customers.${index}.first_group_customers`)" style="display: block;">{{ errors.get(`product_customers.${index}.first_group_customers`) }}</div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>مشتریان گروه دوم:</label>
                                                        <input type="text" class="form-control products" name="second_group_customers" v-model="pro.second_group_customers"
                                                               :class="['form-control', {'is-invalid' : errors.has(`product_customers.${index}.second_group_customers`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`product_customers.${index}.second_group_customers`)" style="display: block;">{{ errors.get(`product_customers.${index}.second_group_customers`) }}</div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>مشتریان گروه سوم:</label>
                                                        <input type="text" class="form-control products" name="third_group_customers" v-model="pro.third_group_customers"
                                                               :class="['form-control', {'is-invalid' : errors.has(`product_customers.${index}.third_group_customers`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`product_customers.${index}.third_group_customers`)" style="display: block;">{{ errors.get(`product_customers.${index}.third_group_customers`) }}</div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>مشتریان گروه چهارم:</label>
                                                        <input type="text" class="form-control products" name="fourth_group_customers" v-model="pro.fourth_group_customers"
                                                               :class="['form-control', {'is-invalid' : errors.has(`product_customers.${index}.fourth_group_customers`)}]"/>
                                                        <div class="invalid-feedback is-invalid" v-if="errors.has(`product_customers.${index}.fourth_group_customers`)" style="display: block;">{{ errors.get(`product_customers.${index}.fourth_group_customers`) }}</div>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div v-if="index != 0" class="col-md-4" style="padding-top: 23px">
                                                        <a @click="RemoveProductCustomers(index)" href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </transition-group>
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <a @click="AddProductCustomers" href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                <i class="la la-plus"></i>افزودن</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2" id="kt_login_singin_form_submit_button">ثبت</button>
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
        name: "create",
        data() {
            return {
                data: {
                    product_customers: [{ customer_features: '', first_group_customers: '', second_group_customers: '', third_group_customers: '', fourth_group_customers: '' }],
                },
                errors: new Errors(),
                Auth: new Auth()
            }
        },
        methods: {
            AddProductCustomers() {
                this.data.product_customers.push({ customer_features: '', first_group_customers: '', second_group_customers: '', third_group_customers: '', fourth_group_customers: '' });
            },
            RemoveProductCustomers(index) {
                this.data.product_customers.splice(index, 1);
            },
            onSubmit() {
                this.Auth.check();
                var _buttonSpinnerClasses = 'spinner spinner-right spinner-white pr-15 disabled';
                var formSubmitButton = KTUtil.getById('kt_login_singin_form_submit_button');
                KTUtil.btnWait(formSubmitButton, _buttonSpinnerClasses, "لطفا صبر کنید", true);
                axios.post('/product-customers', this.data)
                    .then(response => {
                        if(response.data[0] == 'success'){
                            Swal.fire({
                                title: "اطلاعات با موفقیت ثبت شد",
                                icon: "success",
                                buttonsStyling: false,
                                showConfirmButton: false,
                                timer: 3000,
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            this.$router.push({name: 'description-market-index'});
                            setTimeout(() => {
                                var someTabTriggerEl = document.querySelector('#product-customers-tab');
                                var tab = new bootstrap.Tab(someTabTriggerEl);
                                tab.show();
                            }, 1000);
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