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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">اطلاعات دیگر</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <router-link :to="{name: 'product-index'}">
                                    <a class="text-muted">محصولات</a>
                                </router-link>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                افزودن
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
                                    <div id="kt_repeater_1">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"><h4>محصول:</h4></label>
                                            <div data-repeater-list="product" class="col-lg-10">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="col-md-4">
                                                        <label><h5>نام محصول:</h5></label>
                                                        <input type="text" class="form-control products" name="product_name" v-model="data.product" required />
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><h5>نوع محصول:</h5></label>
                                                        <select name="product_type" class="form-control">
                                                            <option v-for="type in productTypes" :value="type.id" v-model="data.product">{{ type.nickname }}</option>
                                                        </select>
                                                        <div class="d-md-none mb-2"></div>
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 28px">
                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                            <i class="la la-trash-o"></i>حذف</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right"></label>
                                            <div class="col-lg-4">
                                                <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                    <i class="la la-plus"></i>افزودن</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success mr-2" @click="onSubmit()">ثبت</button>
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
    class Errors {
        constructor() {
            this.errors = {};
        }

        has(field) {
            return this.errors.hasOwnProperty(field);
        }

        get(field) {
            if (this.errors[field]) {
                return this.errors[field][0]
            }
        }

        record(errors) {
            this.errors = errors;
        }
    }
    export default {
        name: "create",
        data() {
            return {
                productTypes: [],
                data: {
                    product: [],
                },
                errors: new Errors(),
            }
        },
        created() {
            axios.get('/api/product/create')
                .then(response => {
                    this.productTypes = response.data;
                })
                .catch(error => console.log(error));
            var KTFormRepeater = function() {

                // Private functions
                var demo1 = function() {
                    $('#kt_repeater_1').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'product_type': 1,
                        },

                        show: function () {
                            $(this).slideDown();
                        },

                        hide: function (deleteElement) {
                            $(this).slideUp(deleteElement);
                        },
                        isFirstItemUndeletable: true
                    });
                }

                var demo2 = function() {
                    $('#kt_repeater_2').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'text-input': 'foo'
                        },

                        show: function() {
                            $(this).slideDown();
                        },

                        hide: function(deleteElement) {
                            if(confirm('Are you sure you want to delete this element?')) {
                                $(this).slideUp(deleteElement);
                            }
                        }
                    });
                }


                var demo3 = function() {
                    $('#kt_repeater_3').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'text-input': 'foo'
                        },

                        show: function() {
                            $(this).slideDown();
                        },

                        hide: function(deleteElement) {
                            if(confirm('Are you sure you want to delete this element?')) {
                                $(this).slideUp(deleteElement);
                            }
                        }
                    });
                }

                var demo4 = function() {
                    $('#kt_repeater_4').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'text-input': 'foo'
                        },

                        show: function() {
                            $(this).slideDown();
                        },

                        hide: function(deleteElement) {
                            $(this).slideUp(deleteElement);
                        }
                    });
                }

                var demo5 = function() {
                    $('#kt_repeater_5').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'text-input': 'foo'
                        },

                        show: function() {
                            $(this).slideDown();
                        },

                        hide: function(deleteElement) {
                            $(this).slideUp(deleteElement);
                        }
                    });
                }

                var demo6 = function() {
                    $('#kt_repeater_6').repeater({
                        initEmpty: false,

                        defaultValues: {
                            'text-input': 'foo'
                        },

                        show: function() {
                            $(this).slideDown();
                        },

                        hide: function(deleteElement) {
                            $(this).slideUp(deleteElement);
                        }
                    });
                }
                return {
                    // public functions
                    init: function() {
                        demo1();
                        demo2();
                        demo3();
                        demo4();
                        demo5();
                        demo6();
                    }
                };
            }();

            jQuery(document).ready(function() {
                KTFormRepeater.init();
            });
        },
        methods: {
            onSubmit() {
                axios.post('/product', this.data)
                    .then(response => {console.log(response);})
                    .catch(error => {
                        this.errors.record(error.response.data.errors);
                        console.log(this.errors.record(error.response.data.errors));
                    });
            }
        },
    }
</script>

<style scoped>

</style>